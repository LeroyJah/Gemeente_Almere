<?php

namespace App\Livewire;

use App\Models\Price;
use Livewire\Component;

class PriceTable extends Component
{
    public $prices;

    public function mount()
    {
        $this->prices = Price::all();
    }

    public function edit($currentArrayIndex)
    {

        dd($currentArrayIndex);
    }

    public function render()
    {
        return view('livewire.price-table');
    }
}
