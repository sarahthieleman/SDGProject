<?php

namespace App\Http\Controllers;


use App\Opleiding;
use App\OpleidingWaardes;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index()
    {

        return view('view')->with([
            'opleiding' => Opleiding::all()->first(),
            'opleiding_waardes' => OpleidingWaardes::all()->first()
        ]);
    }
}
