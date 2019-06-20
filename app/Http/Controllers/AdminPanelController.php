<?php

namespace App\Http\Controllers;

use App\OpleidingWaardes;
use Illuminate\Http\Request;
use App\Opleiding;

class AdminPanelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('adminpanel')->with([
            'opleidingen' => Opleiding::all()
        ]);
    }

    public function editOpleidingIndex(Request $request) {
        return view('opleiding_edit')->with([
           'opleiding' =>  Opleiding::findOrFail($request['opleiding_id']),
            'values' => Opleiding::findOrFail($request['opleiding_id'])->getValues()
        ]);
    }

    public function updateOpleiding(Request $request) {
        $opleiding = Opleiding::findOrFail($request['opleiding_id']);
        $values = OpleidingWaardes::findOrFail($opleiding->id);

        $values->poverty = $request['poverty'];
        $values->hunger = $request['hunger'];
        $values->health = $request['health'];
        $values->education = $request['education'];
        $values->gender_equality = $request['gender_equality'];
        $values->clean_water = $request['clean_water'];
        $values->energy = $request['energy'];
        $values->economic_growth = $request['economic_growth'];
        $values->infrastructure = $request['infrastructure'];
        $values->reduced_inequalities = $request['reduced_inequalities'];
        $values->sustainable_cities = $request['sustainable_cities'];
        $values->durability = $request['durability'];
        $values->climate = $request['climate'];
        $values->water_life = $request['water_life'];
        $values->land_life = $request['land_life'];
        $values->peace = $request['peace'];
        $values->partnership = $request['partnership'];
        $values->save();

        $opleiding->contact = $request['contact'];
        $opleiding->save();

        return redirect("adminpanel")->with('success', $opleiding->name.' opgeslagen.');

    }
}
