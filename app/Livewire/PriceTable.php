<?php

namespace App\Livewire;

use App\Models\Price;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Validate;

class PriceTable extends Component
{
    public $allPrices;

    #[Rule('regex:/^[0-9]*$/', message:'Dit veld mag alleen cijfers bevatten.')]
    public $updatePrice;



    public function mount()
    {
        $this->allPrices = Price::all();
    }

    public function edit($currentArrayIndex)
    {
        $this->validate();

        dd($currentArrayIndex);
        //the button needs to turn into an input field OR i just make sure there already is an input field
    }

    public function render()
    {
        return view('livewire.price-table');
    }
}
