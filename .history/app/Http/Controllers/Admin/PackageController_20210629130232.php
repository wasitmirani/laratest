<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index(){

        $packages = Package::orderby('id','desc')->get();

        return view('admin.pages.packages.packages',['packages'=>$packages]);

    }

    public function create(){
        $locations = Location::all();
        return view('admin.pages.packages.add',['locations'=>$locations]);



    }
    public function store(Request $request){

        $validate = $request->Validate([
            'location' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',

        ]);

        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/img/package/"), $name);

        }



        $package = new Package;
        $package->location_id = $request->location;
        $package->name = $request->title;
        $package->description = $request->description;
        $package->price = $request->price;
        $saved = $package->save();
        if($saved){
            return response()->json($saved);
        }else{
            return response()->json('0');
        }






    }
    public function edit($id){

        $package = Package::with('location')->where('id',$id)->first();
        $locations = Location::all();
        return view('admin.pages.packages.add',['package'=>$package', locations'=>$locations]);



    }
    public function update(Request $request, $id){

        $booking = BookingTour::where('id',$id)->first();

        $booking->location_id = $request->location;
        $booking->booking_date = $request->booking_date;
        $booking->start_booking_date = $request->start_date;
        $booking->end_booking_date = $request->end_date;
        $updated = $booking->save();

        if($updated){
            return response()->json($updated);
        }else{
            return response()->json('0');
        }



    }
    public function delete($id){

        $booking = BookingTour::where('id',$id)->first();
        if($booking->delete()){

            return response()->json('1');
        }else{
            return response()->json(0);
        }



    }

    public function updateBookingStatus(Request $request){

       $id = $request->id;
      $status = $request->status;

      $updated =  BookingTour::where('id',$id)->update(['booking_status'=>$status]);

      if($updated){
          return response()->json('1');
    }else{
        return response()->json('2');
    }



    }
}
