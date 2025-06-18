<?php

namespace App\Livewire;

use Livewire\Component;

class Validator extends Component
{
    public $liveName;
    public function render()
    {
        return view('livewire.validator');
    }
}
