<?php

namespace App\Livewire;

use App\Models\Price;
use Livewire\Component;

class PriceTable extends Component
{
    public $allPrices;

    public $updatePrice;



    public function mount()
    {
        $this->allPrices = Price::all();
    }

    public function edit($currentArrayIndex)
    {

        dd($currentArrayIndex);
        //the button needs to turn into an input field OR i just make sure there already is an input field
    }

    public function render()
    {
        return view('livewire.price-table');
    }
}
