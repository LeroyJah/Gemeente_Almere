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
            return redirect()->route('validateView')->with(session()->flash('status_green','Your gift request has ben sent.'));
        }else{
            return redirect()->route('validateView')->with(session()->flash('status_red','Your gift request could not be sent.'));
        }
    }
    public function render()
    {
        return view('livewire.validator');
    }
}
