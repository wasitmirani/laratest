<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profile(){

        $user = Auth::user();
        $title = "Profile";
        return view('admin.pages.profile',['user'=>$user,'title'=>$title]);

    }
}
