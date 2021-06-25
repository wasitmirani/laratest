<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function index(){

        $bookings = BookingTour::all();

    }

    public function create(){



    }
    public function store(Request $request){



    }
    public function edit($id){



    }
    public function update(Request $request, $id){



    }
    public function delete($id){



    }
}
