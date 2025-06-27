<?php

namespace App\Livewire;

use App\Models\Validate;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Validator extends Component
{

    #[Rule('required', message:'Dit veld moet ingevuld worden.')]
    #[Rule('regex:/^[a-zA-Z]+$/', message:'Dit veld mag alleen letters bevatten.')]
    #[Rule('min:3', message:'Dit veld moet minimaal bestaan uit 3 characters.')]
    #[Rule('max:15', message:'Dit veld mag maximaal bestaan uit 15 characters.')]
    public $liveName;
    #[Rule('required',message:'Kies een van de pakketten.')]
    public $liveGift;
    public $rightAnswer = ['Jahmil','30ste verjaardag'];

    public function checkAnswer()
    {
        $this->validate();

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

        return redirect()->route('validateView')->with(session()->flash('bevestigd','Uw aanvraag is in goede orde ontvangen'));
    }
    public function render()
    {
        return view('livewire.validator');
    }
}
