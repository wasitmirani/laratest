<?php

namespace App\Http\Controllers\Admin;

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

        dd($request);


    }
}
