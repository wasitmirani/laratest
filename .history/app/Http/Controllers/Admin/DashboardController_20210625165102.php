<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $data = array();
        $totalUser = count(User::all());
        $latestbookings = BookingTour::with('location')->with('user')->latest()->get();
        $data['totalUser'] = $totalUser;
        return view('admin.pages.dashboard',compact('data'));

    }
}
