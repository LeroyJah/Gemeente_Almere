<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Price;

class CreateOccassion extends Component
{
    public $newOccassion;
    public $newPrice;

    public function createOccassion(){
        $occassion = new Price;

        $occassion->occassion = $this->newOccassion;
        $occassion->amount = $this->newPrice;

        $occassion->save();

        return redirect()->route('adminView');
    }


    public function render()
    {
        return view('livewire.create-occassion');
    }
}
