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
    public $newPrice;



    public function mount()
    {
        $this->allPrices = Price::all();
    }

    public function edit($currentArrayIndex)
    {
        $this->validate();

        $currentPrice = Price::find($currentArrayIndex);

        $currentPrice->amount = $this->newPrice;

        $currentPrice->save();

        return redirect()->route('adminView')->with(session()->flash('accepted','De prijs is succesvol aangepast.'));

        //the button needs to turn into an input field OR i just make sure there already is an input field

        // if( $input === $this->rightAnswer){ //validation tester
        //     return redirect()->route('validateView')->with(session()->flash('status_green','Uw verzoek is beschikbaar.'));
        // }else{
        //     return redirect()->route('validateView')->with(session()->flash('status_red','Uw verzoek is niet beschikbaar.'));
        // }
    }

    public function render()
    {
        return view('livewire.price-table');
    }
}
