<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = "";

    public $password = "";

    public $loginMessage = "";

    public function authenticate()
    {
        $valid = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if ($valid) {
            $this->redirectIntended('/admin');
        } else {
            $this->loginMessage = "Email en/of wachtwoord kloppen niet.";
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
