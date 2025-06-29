<?php

namespace App\Http\Controllers;
use App\Models\Validate;

class AdminController extends Controller
{
    private $allRequests;
    public function __construct()
    {
        $this->allRequests = Validate::all();
    }
    public function getView()
    {
        return view('admin', ['requests' => $this->allRequests]);
    }
}
