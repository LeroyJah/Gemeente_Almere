<?php

namespace App\Http\Controllers;
use App\Models\Validate;

class AdminController extends Controller
{
    public function getView()
    {
        return view('admin');
    }
}
