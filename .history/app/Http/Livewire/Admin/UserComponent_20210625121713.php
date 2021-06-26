<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class UserComponent extends Component
{
    public $name, $email, $password;
    public $updateModule;
    public function render()
    {
        return view('livewire.admin.user-component');
    }

    public function store()
    {
        dd($this->name);
    }
}
