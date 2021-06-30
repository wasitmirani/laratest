<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tour;
use App\Models\User;
use App\Models\BookingTour;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //

    public function customerLogin(Request $request){
        dd($request->all());
    }
    public function index(){

        $id = Auth::user()->id;

        $dt = new DateTime();
        $from = $date = date('Y-m-d');

        $dt->modify( '+10 days' );
        $to = $dt->format( 'dS M, Y (D)' );


        $up_commings = BookingTour::with('tour')->with('package')->with('user')->whereBetween('start_booking_date', [$from, $to])->get();

        $total_bookings = BookingTour::where('user_id',$id)->count();
        $total_pending = BookingTour::where([['user_id','=',$id],['booking_status','=',1]])->count();
        $total_approved = BookingTour::where([['user_id','=',$id],['booking_status','=',2]])->count();
        $total_tours = Tour::count();
        return view('member.pages.index',['total_bookings'=>$total_bookings,'total_tours'=>$total_tours,'up_commings'=>$up_commings,'total_pending'=>$total_pending,'total_approved'=>$total_approved]);
    }

    public function getTours(){
        $id = Auth::user()->id;
        $tours = BookingTour::with('user')->with('location')->with('package')->where([['booking_date','<=',now()],['user_id','=',$id]])->get();
        return view('member.pages.tourlist',compact('tours'));
    }
    public function getBookings(){

        $bookings = BookingTour::with('tour')->with('package')->with('user')->paginate(10);

        return view('member.pages.bookings',compact('bookings'));
    }
    public function upcomingTours(){
        $dateObj = new DateTime();
        $from = $date = date('Y-m-d');

        $dateObj->modify( '+10 days' );
        $to =  $dateObj->format( 'dS M, Y (D)' );


        $upcommings = BookingTour::with('tour')->with('package')->with('user')->whereBetween('start_booking_date', [$from, $to])->get();


        $tours = Tour::all();
        return view('member.pages.upcoming',compact('upcommings'));
    }

    public function profile(){
        $user = Auth::user();

        return view('member.pages.profile',compact('user'));
    }

    public function updateProfile(Request $request){

        $id = Auth::user()->id;

        $name = 'no-thumbnail.png';

        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/img/users/"), $name);
        }


        $update = User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'image' => $name
                ]);

                if($update){

                    return redirect()->back()->with('message','Record Updated Successfully');

                }else{
                    return redirect()->back()->with('message','Failed To Update Record');

                }

    }
}

