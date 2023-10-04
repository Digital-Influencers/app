<?php

namespace App\Http\Components\Admin\Auth;

use Livewire\Component;
use Illuminate\Support\Str;

class RegisterComponent extends Component
{
    public $name;

    public $username;

    public $email;

    public $password;

    public function render()
    {
        return view('components.admin.authentications.register')->layout('layouts.blankLayout');
    }
    public function save()
    {
        dd('aqui');
    }

    public function updatedName(string $name)
    {
        $this->username = Str::slug($name, '.');
    }


}
