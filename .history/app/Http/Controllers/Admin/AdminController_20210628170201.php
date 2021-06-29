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
        return view('admin.settings.setpassword');
    }
}
