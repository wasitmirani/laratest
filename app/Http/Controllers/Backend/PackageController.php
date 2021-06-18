<?php

namespace App\Http\Controllers\Backend;

use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PackageController extends Controller
{
    //

    public function getPackages(Request $request){
        $query=!empty(request('query')) ? request('query') : "";

        $packages=Package::where('name', 'like', '%' . $query . '%')
        ->orderBy('name','ASC')
        ->paginate(env('PER_PAGE'));

        return response()->json(['packages'=>$packages]);
    }

    public function store(Request $request){
        // $image
        $package=Package::create([
            'name'=>$request->name,
            'description'=>$request->description,
            // 'thumbnail'
        ]);
    }

    public function uploadImg(Request $request){
        // dd($request->all());
        $name = !empty($request->name) ? $request->name : config('app.name');
        if ($request->hasfile('file')) {
            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->file->extension();

            $request->file->move(public_path("/admin/img/packages/"), $name);
        }


        return response()->json($name);
    }

    public function delete($id){

        $package = Package::where('id'.$id)->first();
        $deleted = $package->delete();

        if($deleted){
            return response()->json('Record deleted');

        }else{
            return response()->json('Failed To Delete Record');
        }
    }

    public function update(Request $request, $id){

        $package = Package::where('id',$id)->first();

        $name = !empty($request->name) ? $request->name : config('app.name');
        if ($request->hasfile('file')) {
            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->file->extension();

            $request->file->move(public_path("/admin/img/packages/"), $name);
        }
        $package->name = $request->name;
        $package->description = $request->description;
        $package->thumbnail = $name;

        $updated = $package->save();

        if($updated)
        {
            return response()->json('Record Updated Successfully');

        }else{
            return response()->json('Failed To Record Data');
        }

    }

}
