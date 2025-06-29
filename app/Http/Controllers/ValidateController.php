<?php

namespace App\Http\Controllers;

class ValidateController extends Controller
{
    private $bedragen = [
            "geboorte" => 25,
            "ziek" => 25,
            "ziek-3-weken" => 25,
            "ziek-3-maanden" => 25,
            "ziekenhuis-opname" => 25,
            "12,5 jaar huwelijk" => 25,
            "25 jaar huwelijk" => 25,
            "40 jaar huwelijk" => 40,
            "pensioen" => 25,
            "30ste verjaardag" => 25,
            "40ste verjaardag" => 25,
            "50ste verjaardag" => 25,
            "60ste verjaardag" => 25,
            "65ste verjaardag" => 25,
            "12,5 jaar ambtenaar" => 25,
            "25 jaar ambtenaar" => 25,
            "40 jaar ambtenaar" => 40,
            "overlijden" => 50
        ];
    public function getView(){
        return view('validate',['bedragen' => $this->bedragen]);
    }
}
