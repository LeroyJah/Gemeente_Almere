<?php

namespace App\Livewire;

use App\Models\Validate;
use Livewire\Component;

class Validator extends Component
{
//    #[Validate('required', message: 'Voeg aub een naam toe.')]
    public $liveName;
    public $liveGift;
    public $rightAnswer = ['Jahmil','30ste verjaardag'];

    protected function rules(){
        return [
          'liveName' => 'required',
            'liveGift' => 'required'
        ];
    }

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
        $validated = $this->validate();

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
