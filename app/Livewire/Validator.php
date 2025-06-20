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
        dd($this->rightAnswer);


        return redirect()->route('homeView')->with(session()->flash('status','Your gift request has ben sent.'));
    }
    public function render()
    {
        return view('livewire.validator');
    }
}
