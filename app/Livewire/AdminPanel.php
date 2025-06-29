<?php

namespace App\Livewire;
use App\Models\Validate;
use Livewire\Component;

class AdminPanel extends Component
{
    public $requests;

    public function mount($requests)
    {
        $this->requests = $requests;
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
