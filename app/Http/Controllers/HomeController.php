<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $namen = [
        "Jahmil",
        "Sophie",
        "Daan",
        "Emma",
        "Lars",
        "Julia",
        "Sam",
        "Noor",
        "Finn",
        "Mila",
        "Joris"
    ];

    public function getView(){
        return view('welcome',['namen' => $this->namen]);
    }
}
