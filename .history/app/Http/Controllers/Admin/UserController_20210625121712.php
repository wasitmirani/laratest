<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

        $users = User::with('bookings')->orderby('id','desc')->get();

        return view('admin.pages.users.list',['users'=>$users]);

    }

    public function create(){

        return view('admin.pages.users.add');



    }
    public function store(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->name;
        $user->password = $request->password;
        $created = $user->save();
        if($created){
            return response()->json($created);
        }else{
            return response()->json("0");
        }




    }
    public function edit($id){

        $user = User::where('id',$id)->first();
        return view('admin.pages.users.add',['user'=>$user]);

    }
    public function update(Request $request, $id){
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->email = $request->name;
        $user->password = $request->password;
        $created = $user->save();
        if($created){
            return response()->json($created);
        }else{
            return response()->json("0");
        }



    }
    public function delete($id){

        $user = User::where('id',$id)->first();

        if($user->delete()){
            return response()->json('true');


        }else{
            return response()->json("0");
        }




    }
}
