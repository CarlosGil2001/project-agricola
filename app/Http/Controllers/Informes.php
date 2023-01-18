<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informes extends Controller
{
    public function index()
    {
        return view('informe.informe');
    }
}
