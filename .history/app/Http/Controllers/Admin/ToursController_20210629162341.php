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
        $upcomingTours = BookingTour::orderBy('booking_date')
           ->get()
           ->groupBy(function($upcomingTours) {
             return  $upcomingTours->booking_date >= now() ? 'upcoming' : 'past';
          });
foreach($upcomingTours as $upcomingTour){

    dd($upcomingTour);

}


    }
}
