<?php

namespace App\Livewire;
use App\Models\Validate;
use Livewire\Component;

class AdminPanel extends Component
{
    public $requests;
    public $buttonIsClicked = false;

    public function mount()
    {
        $this->requests = Validate::all();
    }

    public function buttonIsClicked(){
        $this->buttonIsClicked == false ? $buttonIsClicked = true : $buttonIsClicked = false;
    }

    public function delete($id)
    {
        Validate::where('id',$id)->delete();

        $this->redirect('/admin');
    }
    public function render()
    {
        return view('livewire.admin-panel');
    }
}
