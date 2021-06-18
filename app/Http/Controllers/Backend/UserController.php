<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function getUsers(Request $request){
        $query=!empty(request('query')) ? request('query') : "";
        $users=User::where('name', 'like', '%' . $query . '%')
        ->orWhere('email', 'like', '%' . $query . '%')
        ->orderBy('updated_at','DESC')
        ->paginate(env('PER_PAGE'));

        return response()->json(['users'=>$users],200);
    }
}
