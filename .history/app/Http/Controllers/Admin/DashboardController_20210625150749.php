<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $data = array();
        $totalUser = count(User::all());
        $data['totalUser'] = $totalUser;
        return view('admin.pages.dashboard');

    }
}
