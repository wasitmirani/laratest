<?php

namespace App\Http\Controllers\Backend;

use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function getBookings(){
        $bookings = BookingTour::with('tour')->with('user')->with('package')->get();
        if(!empty($bookings)){
            return response()->json(['bookings'=>$bookings]);
        }else{
            return response()->json('No Record Found');
        }
    }

    public function updateStatus($id){

        $booking = BookingTour::find($id);
        $updated = $booking->update(['booking_status'=>2]);
        if($updated){
            return response()->json('Request Approved');

        }else{
            return response()->json('Something Went Wrong');
        }

    }
}
