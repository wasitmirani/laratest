<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Location;
use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $data = array();
        $totalUser = count(User::all());
        $latestBookings = BookingTour::with('location')->with('user')->latest()->get();
        $totalBooking = count(BookingTour::all());
        $totalLocation = count(Location::all());

        $upcomingTours = BookingTour::orderBy('booking_date')
    ->get()
->groupBy(function($upcomingTours) {
    return  $upcomingTours->booking_date >= now() ? 'upcoming' : 'past';
});
dd($upcomingTours);
        $data['totalUser'] = $totalUser;
        $data['latestBookings'] = $latestBookings;
        return view('admin.pages.dashboard',compact('data','totalBooking','totalLocation'));

    }
}
