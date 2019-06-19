<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SdgController extends Controller
{
    public function index()
    {
        return view('opleidingen_sdg');
    }
}
