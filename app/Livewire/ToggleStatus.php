<?php

namespace App\Livewire;

use Livewire\Component;

class ToggleStatus extends Component
{
    public $request;

    public $buttonStatus = false;

    public function buttonIsClicked()
    {
        $this->buttonStatus == false ? $this->buttonStatus = true : $this->buttonStatus = false;
    }

    public function render()
    {
        return view('livewire.toggle-status');
    }
}
