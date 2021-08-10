<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    public function index(){

        $bookings = BookingTour::with('user')->with('location')->orderby('id','desc')->get();


        return view('admin.pages.bookings.bookings',['bookings'=>$bookings]);

    }

    public function create(){
        $locations = Location::all();
        return view('admin.pages.bookings.add',['locations'=>$locations]);



    }
    public function store(Request $request){

        $validate = $request->Validate([
            'location' => 'required',
            'booking_date' => 'required',
            'start_booking_date' => 'required',
            'end_booking_date' => 'required'
        ]);

        $booking = new BookingTour;
        $booking->location_id = $request->location;
        $booking->booking_date = $request->booking_date;
        $booking->start_booking_date = $request->start_date;
        $booking->end_booking_date = $request->end_date;
        $saved = $booking->save();
        if($saved){
            return response()->json($saved);
        }else{
            return response()->json('0');
        }






    }
    public function edit($id){

        $booking = BookingTour::with('location')->where('id',$id)->first();
        $locations = Location::all();
        return view('admin.pages.bookings.add',['booking'=>$booking,'locations'=>$locations]);



    }
    public function update(Request $request, $id){


        $booking = BookingTour::where('id',$id)->first();


        $booking->location_id = $request->location;
        $booking->booking_date = $request->booking_date;
        $booking->start_booking_date = $request->start_date;
        $booking->end_booking_date = $request->end_date;
        $booking->booking_status = $request->status;
        $updated = $booking->save();

        if($updated){
            return response()->json($updated);
        }else{
            return response()->json('0');
        }



    }
    public function delete($id){

        $booking = BookingTour::where('id',$id)->first();
        if($booking->delete()){

            return response()->json('1');
        }else{
            return response()->json('0');
        }



    }

    public function updateBookingStatus(Request $request){
dd($request->all());
       $id = $request->id;
      $status = $request->status;

      $updated =  BookingTour::where('id',$id)->update(['booking_status'=>$status]);

      if($updated){
          return response()->json('1');
    }else{
        return response()->json('2');
    }



    }
}
