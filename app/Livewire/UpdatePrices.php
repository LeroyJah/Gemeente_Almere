<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Price;
use App\Models\Validate;

class UpdatePrices extends Component
{

    public $prevEntries;
    public $newPrices;

    public function mount()
    {
        $this->prevEntries = Validate::all();
        $this->newPrices = Price::all()->pluck('amount','occassion');; //pluck grabs the first parameter as data and the second as the array key

    }

    public function updateFields(){

        foreach($this->prevEntries as $entry){
            //in order to save() i need to grab a model instance which can only happen with find() or where() or all() and then looping
            $entry->amount = $this->newPrices[$entry->occassion];

            $entry->save();
        }

        return redirect()->route('adminView')->with(session()->flash('updated','Alle prijzen zijn nu actueel.'));
    }


    public function render()
    {
        return view('livewire.update-prices');
    }
}
