<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;
    protected $rules = [
        'username'=>'required|string',
        'password'=>'required|string',
    ];

    public function login()
    {
        $this->validate([
            'username'=>'required|string',
            'passsword'=>'required|string',
        ],[
            'username'=>'Username tidak boleh kosong.',
            'password'=>'Password tidak boleh kosong.',
        ]);

        $user = User::where('username', $this->username)->first();

        if($user && Hash::check($this->password, $user->password)) {

        }

    }

    public function render()
    {
        return view('livewire.login');
    }
}
