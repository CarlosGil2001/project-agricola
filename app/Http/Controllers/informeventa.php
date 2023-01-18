<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informeventa extends Controller
{
    public function index()
    {
        return view('informe.informeventa');
    }
}
