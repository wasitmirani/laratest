<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index(){
        $packages = Package::with('locations')->orderby('id','desc')->get();


        return view('frontend.pages.packages',compact('packages'));



    }
}
