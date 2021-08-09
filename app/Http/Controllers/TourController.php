<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\BookingTour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = BookingTour::with('user')->with('location')->with('package')->where('booking_date','<=',now())->paginate(5);


        return view('frontend.pages.tours',compact('tours'));


    }


    public function tourDetail(){
        return view('frontend.pages.tourdetail');
    }


}
