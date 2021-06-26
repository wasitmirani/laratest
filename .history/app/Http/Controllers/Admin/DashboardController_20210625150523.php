<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){


        $totalUser = count(User::all());
        return view('admin.pages.dashboard');

    }
}
