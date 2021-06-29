<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profile(){

        $user = Auth::user();

        return view('admin.pages.profile',['user'=>$user]);

    }
    public function updatePasswordForm(){
        $user = Auth::user();
        return view('admin.pages.settings.setpassword',['user'=>$user]);
    }

    public function updateLogo(Request $request){



        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/frontend/assets/images/"), $name);

        }
        return response()->json('Image Updated');



    }



    public function updatePassword(Request $request){

        $validate = $request->validate([
            'password' => 'confirmed'
        ]);

        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();

       $updated = User::where('id',$id)->update([
            'password' => $request->password
        ]);

        if($updated){
            return back()->with('message','Password Updated Successfully');

        }else{
            return back()->with('message','Failed To Update Password');
        }




    }


    public function updateProfile(Request $request){
        dd($request->all());

        $admin =  Auth::user();
        $id = $admin->id;
        $user = User::where('id',$id)->first();

        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['confirmed'],
        ]);


        if ($request->hasfile('image')) {
            $name = !empty($request->name) ? $request->name : config('app.name');

            $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path("/admin/img/users/"), $name);
            $user->image = $name;
        }else{
            $user->image = $request->old_image;
        }


        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password == null){
            $user->password = $user->password;
          }else{
            $user->password = $request->password;

          }



        $created = $user->save();
        if($created){
            return response()->json($created);
        }else{
            return response()->json("0");
        }


    }
}
