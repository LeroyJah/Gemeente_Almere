<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Validate;

class ToggleStatus extends Component
{
    public $request;

    public $buttonStatus = false;

    public function buttonIsClicked()
    {
        $this->buttonStatus == false ? $this->buttonStatus = true : $this->buttonStatus = false;

        // if($this->buttonStatus == true){
        //     Validate::create


        // }
    }

    public function render()
    {
        return view('livewire.toggle-status');
    }
}
