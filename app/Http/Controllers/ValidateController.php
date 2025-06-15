<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    private $bedragen = [
        "geboorte" => 25,
        "ziek" => 25,
        "ziek-3-weken" => 25,
        "ziek-3-maanden" => 25,
        "ziekenhuis-opname" => 25,
        "huwelijk-12,5" => 40,
        "huwelijk-25" => 25,
        "huwelijk-40" => 40,
        "pensioen" => 25,
        "verjaardag-50" => 25,
        "verjaardag-65" => 25,
        "ambtenaar-12,5" => 25,
        "ambtenaar-25" => 25,
        "ambtenaar-40" => 40,
        "overlijden" => 50
    ];
    public function getView(){
        return view('validate',['bedragen' => $this->bedragen]);
    }
}
