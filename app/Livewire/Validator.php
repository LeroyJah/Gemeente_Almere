<?php

namespace App\Livewire;

use App\Models\Validate;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Price;

class Validator extends Component
{

    #[Rule('required', message:'Dit veld moet ingevuld worden.')]
    #[Rule('regex:/^[a-zA-Z]+$/', message:'Dit veld mag alleen letters bevatten.')]
    #[Rule('min:3', message:'Dit veld moet minimaal bestaan uit 3 characters.')]
    #[Rule('max:15', message:'Dit veld mag maximaal bestaan uit 15 characters.')]
    public $liveName;
    #[Rule('required',message:'Kies een van de pakketten.')]
    public $liveGift;

    public $bedragen;

    public $showErrors = false;


    public function mount()
    {
        $this->bedragen = Price::all()->pluck('amount','occassion'); //grabbing validation array from view
    }
    public function checkAnswer()
    {
        $this->validate();

        $input = [ucfirst($this->liveName),$this->liveGift]; //Capitalizes the first letter of each name

        if( $input === $this->rightAnswer){ //validation tester
            return redirect()->route('validateView')->with(session()->flash('status_green','Uw verzoek is beschikbaar.'));
        }else{
            return redirect()->route('validateView')->with(session()->flash('status_red','Uw verzoek is niet beschikbaar.'));
        }
    }

    public function storeRequest()
    {
       $this->validate(); //validates the user input before passing it to the DB, if the validation fails then the users is redirected with an error message

        Validate::create([
            'name' => ucfirst($this->liveName),
            'occassion' => $this->liveGift,
            'amount' => $this->bedragen[$this->liveGift]
        ]);

        return redirect()->route('validateView')->with(session()->flash('bevestigd','Uw aanvraag is in goede orde ontvangen'));
    }

    public function clearFields()
    {
        $this->liveGift = "";
        $this->liveName = "";
    }
    public function render()
    {
        return view('livewire.validator');
    }
}
