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

        $packages = Package::with('locations')->orderby('id','desc')->get();


        return view('admin.pages.packages.packages',['packages'=>$packages]);

    }

    public function create(){
        $locations = Location::all();
        return view('admin.pages.packages.add',['locations'=>$locations]);



    }
    public function store(Request $request){

        $package = new Package;
        // $validate = $request->Validate([
        //     'location' => 'required',
        //     'title' => 'required',
        //     'description' => 'required',
        //     'image' => 'required',
        //     'price' => 'required',

        // ]);

        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/img/package/"), $name);
            $package->thumbnail = $name;

        }




        $package->location_id = $request->location;
        $package->name = $request->name;
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

        $package = Package::with('locations')->where('id',$id)->first();
        $locations = Location::all();
        return view('admin.pages.packages.add',compact('package' ,'locations'));



    }
    public function update(Request $request){

        $id = $request->id;

        $package = Package::where('id',$id)->first();

        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/img/package/"), $name);
            $package->thumbnail = $name;
        }else{
            $package->thumbnail = $request->old_image;
        }

        $package->location_id = $request->location;
        $package->name = $request->name;
        $package->description = $request->description;
        $package->price = $request->price;
         $created = $package->save();
        if($created){
            return response()->json($created);
        }else{
            return response()->json("0");
        }




    }
    public function delete($id){

        $package = Package::where('id',$id)->first();
        if($package->delete()){

            return response()->json('1');
        }else{
            return response()->json(0);
        }



    }


}
