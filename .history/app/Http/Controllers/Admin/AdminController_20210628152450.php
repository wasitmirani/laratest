<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(){

        $user = Auth::user();
        return view(
            'admin.pages.profile',
            ['user'=>$user]
        );

    }
}
