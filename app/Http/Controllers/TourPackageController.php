<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index(){
        $packages=Package::join('tour_packages','tour_packages.package_id','=','packages.id')->select('tour_packages.price','packages.*')->latest()->with('tourPackages')->paginate(5);
        return view('frontend.pages.packages',compact('packages'));



    }
}
