<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Price;

class UpdatePrices extends Component
{

    public $reference;

    public function mount()
    {
        $this->reference = Price::all()->pluck('amount','occassion');
    }

    public function updateFields(){
        dd($this->reference);
    }


    public function render()
    {
        return view('livewire.update-prices');
    }
}
