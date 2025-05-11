<?php

namespace App\Livewire;

use Livewire\Component;

class Radio extends Component
{
    public $radioValue = "0,65";

    public function changeName(){

    }

    public function render()
    {
        return view('livewire.radio');
    }
}
