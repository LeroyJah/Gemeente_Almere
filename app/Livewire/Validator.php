<?php

namespace App\Livewire;

use Livewire\Component;

class Validator extends Component
{
    public $liveName;
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

    }
    public function render()
    {
        return view('livewire.validator');
    }
}
