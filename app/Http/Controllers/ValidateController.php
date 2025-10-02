<?php

namespace App\Http\Controllers;
use App\Models\Price;

class ValidateController extends Controller
{
    private $newOccassions;

    public function __construct(){
        $this->newOccassions = Price::where('created_at','!=',null)->pluck('occassion','id');
    }

    public function getView(){
        return view('validate',['newOccassions' => $this->newOccassions]);
    }
}
