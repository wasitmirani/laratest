<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Prac extends Component
{

    public $users;
    public function render()
    {

        return view('livewire.prac');
    }

    public function users(){
        $users = User::all();
        return view('admin.prac',['users'=>$users])
    }




}
