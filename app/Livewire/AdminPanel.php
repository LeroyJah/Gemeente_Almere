<?php

namespace App\Livewire;

use Livewire\Component;

class AdminPanel extends Component
{
    public $requests;

    public function mount($requests)
    {
        $this->requests = $requests;
    }
    public function render()
    {
        return view('livewire.admin-panel');
    }
}
