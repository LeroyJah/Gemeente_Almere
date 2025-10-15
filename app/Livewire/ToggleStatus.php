<?php

namespace App\Livewire;

use Livewire\Component;

class ToggleStatus extends Component
{
    public $request;


    public $buttonIsClicked = false;

    public function buttonIsClicked()
    {
        $this->buttonIsClicked == false ? $buttonIsClicked = true : $buttonIsClicked = false;
    }

    public function render()
    {
        return view('livewire.toggle-status');
    }
}
