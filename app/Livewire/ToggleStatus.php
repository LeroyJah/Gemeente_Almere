<?php

namespace App\Livewire;

use Livewire\Component;

class ToggleStatus extends Component
{
    public $request;

    public function render()
    {
        return view('livewire.toggle-status');
    }
}
