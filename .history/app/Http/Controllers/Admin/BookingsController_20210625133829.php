<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
    public function index(){

        $bookings = BookingTour::with('user')->with('location')->orderby('id','desc')->get();

        return view('admin.pages.bookings.bookings',['bookings'=>$bookings]);

    }

    public function create(){



    }
    public function store(Request $request){



    }
    public function edit($id){

        $booking = BookingTour::with('location')->where('id',$id)->first();
        $locations = Location::all();
        return view('admin.pages.bookings.add',['booking'=>$booking,'locations'=>$locations]);



    }
    public function update(Request $request, $id){



    }
    public function delete($id){



    }

    public function updateBookingStatus(Request $request){

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
