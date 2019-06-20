<?php

namespace App\Http\Controllers;


use App\Opleiding;
use App\OpleidingWaardes;
use App\Project;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index($id)
    {

        return view('view')->with([
            'opleiding' => Opleiding::findOrFail($id),
            'opleiding_waardes' => OpleidingWaardes::find($id)
        ]);
    }

    public function graph($id) {
        return view('view')->with([
            'opleiding' => Opleiding::findOrFail($id),
            'opleiding_waardes' => OpleidingWaardes::find($id),
            'projecten' => Project::where('opleiding_id', $id)->get()
        ]);
    }
}
