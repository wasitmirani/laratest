<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use App\Models\BookingTour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index(){

        $locations = Location::orderby('id','desc')->get();

        return view('admin.pages.location.locations',['locations'=>$locations]);

    }

    public function create(){
        return view('admin.pages.location.add');



    }
    public function store(Request $request){


        $validate = $reuest->validate([
            'name'=>'required'
        ]);
        $location = new Location;
        $location->name = $request->name;
        $added = $location->save();

        if($added)
        {
           return response()->json("Location Added Successfully");

        }else{
            return response()->json("Failed To Add Location");
        }




    }
    public function edit($id){

        $location = Location::where('id',$id)->first();

        return view('admin.pages.location.add',['location'=>$location]);



    }
    public function update(Request $request, $id){

        $location = Location::where('id',$id)->first();

        $location->name = $request->name;

        $updated = $location->save();

        if($updated){
            return response()->json($updated);
        }else{
            return response()->json('0');
        }



    }
    public function delete($id){

        $location = Location::where('id',$id)->first();
       if($location->delete()){

        return response()->json("1");
       }else{
           return response()->json("0");
       }


    }



}
