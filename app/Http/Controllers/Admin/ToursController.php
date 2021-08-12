<?php

namespace App\Http\Controllers\Admin;

use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToursController extends Controller
{
    public function index(){

        $bookings = BookingTour::all();

    }

    public function create(){



    }
    public function store(Request $request){



    }
    public function edit($id){



    }
    public function update(Request $request, $id){



    }
    public function delete($id){



    }


    public function tours(){

          $tours = BookingTour::with('user')->with('location')->with('package')->where([['end_booking_date','<=',now()],['booking_status','=',2]])->get();
          return view('admin.pages.tours.tours',compact('tours'));
    }


    public function upcomingTours(){
        $upcomingTours = BookingTour::with('user')->with('location')->with('package')->where([['start_booking_date','>=',now()],['booking_status','=',2]])->get();
        return view('admin.pages.tours.tours',compact('upcomingTours'));
    }
}



