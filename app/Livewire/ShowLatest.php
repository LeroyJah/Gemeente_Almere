<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Validate;

class ShowLatest extends Component
{
    public $latest;

    protected Validate $validate;

    public function boot()
    {
        if(Validate::first()){
            $this->latest = $this->validate = Validate::latest()->first();
        }
    }

    public function render()
    {
        return view('livewire.show-latest');
    }
}
