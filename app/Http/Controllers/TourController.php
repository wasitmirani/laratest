<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours=Tour::latest()->with('tourDetails')->paginate(5);
       

        return view('frontend.pages.tours',compact('tours'));


    }


}
