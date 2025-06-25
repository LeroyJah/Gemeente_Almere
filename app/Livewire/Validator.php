<?php

namespace App\Livewire;

use App\Models\Validate;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Validator extends Component
{
    #[Rule('string|required|min:3|max:15')]
    public $liveName;
    #[Rule('required')]
    public $liveGift;
    public $rightAnswer = ['Jahmil','30ste verjaardag'];

    public function checkAnswer()
    {
        $input = [ucfirst($this->liveName),$this->liveGift];

        if( $input === $this->rightAnswer){
            return redirect()->route('validateView')->with(session()->flash('status_green','Uw verzoek is beschikbaar.'));
        }else{
            return redirect()->route('validateView')->with(session()->flash('status_red','Uw verzoek is niet beschikbaar.'));
        }
    }

    public function storeRequest()
    {
       $this->validate();

        Validate::create([
            'name' => ucfirst($this->liveName),
            'occassion' => $this->liveGift
        ]);

        return redirect()->route('validateView')->with(session()->flash('',''));
    }
    public function render()
    {
        return view('livewire.validator');
    }
}
