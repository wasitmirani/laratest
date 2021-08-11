<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
                $validate = $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255','unique:users'],
                    'password' => ['required','confirmed'],
                ]);
               $name = "";
                if ($request->hasfile('image')) {
                    $name = !empty($request->name) ? $request->name : config('app.name');

                    $name = Str::slug($name, '-')  . "-" . time() . '.' . $request->image->extension();
                    $request->image->move(public_path("/admin/img/users/"), $name);
                    $user->image = $name;
                }else{
                    $name = "dummyuser.jpg";
                }
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->image = $name;


                $created = $user->save();
                if($created){
                    return response()->json($created);
                }else{
                    return response()->json("0");
                }

                }

    public function edit($id){

     $user = User::find($id);

     return view('admin.pages.users.add',compact('user'));


    }
    public function update(Request $request, $id){

        $user = User::where('id',$id)->first();

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
    public function delete($id){

        $user = User::where('id',$id)->first();

        if($user->delete()){
            return response()->json('1');


        }else{
            return response()->json("0");
        }




    }


    public function updateUserRole(Request $request){

        $id = $request->id;
       $role = $request->role;

       $updated = User::where('id',$id)->update(['role_id'=>$role]);

       if($updated){
           return response()->json('1');
     }else{
         return response()->json('2');
     }



     }
}
