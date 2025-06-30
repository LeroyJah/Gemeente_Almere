<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = "";
    
    public $password = "";

    public function authenticate()
    {
        
    }
    
    public function render()
    {
        return view('livewire.login');
    }
}
