<?php

namespace App\Livewire;

use Livewire\Component;

class Validator extends Component
{
    public $liveName;
    public $liveGift;

    public function save()
    {
        return redirect()->route('validateView')->with(session()->flash('status','Your gift request has ben sent.'));
    }
    public function render()
    {
        return view('livewire.validator');
    }
}
