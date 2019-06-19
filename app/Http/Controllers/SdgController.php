<?php

namespace App\Http\Controllers;

use App\Opleiding;
use Illuminate\Http\Request;

class SdgController extends Controller
{
    public function index()
    {
        return view('opleidingen_sdg');
    }

    public function sdgOverview($num) {

        $opleidingen = Opleiding::all();
        $scores = array();
        foreach($opleidingen as $o) {
            $scores[$o->id] = SdgController::getScore($o, $num);
        }

        $opleidingen = $opleidingen->sortBy(function ($o) use ($num) { return SdgController::getScore($o, $num); });
        $opleidingen = $opleidingen->reverse();
        return view('sdgoverview')->with([
            'opleidingen' => $opleidingen,
            'scores' => $scores,
            'name' => $this->getName($num)
        ]);
    }

    public static function getScore($o, $num) {
        $v = $o->getValues();
        switch($num) {
            case 1:
                return $v->poverty;
            case 2:
                return $v->hunger;
            case 3:
                return $v->health;
            case 4:
                return $v->education;
            case 5:
                return $v->gender_equality;
            case 6:
                return $v->clean_water;
            case 7:
                return $v->energy;
            case 8:
                return $v->economic_growth;
            case 9:
                return $v->infrastructure;
            case 10:
                return $v->reduced_inequalities;
            case 11:
                return $v->sustainable_cities;
            case 12:
                return $v->durability;
            case 13:
                return $v->climate;
            case 14:
                return $v->water_life;
            case 15:
                return $v->land_life;
            case 16:
                return $v->peace;
            case 17:
                return $v->partnership;
        }
    }

    public function getName($num) {
        switch($num) {
            case 1:
                return "No Poverty";
            case 2:
                return "Zero Hunger";
            case 3:
                return "Good Health and Well-being";
            case 4:
                return "Quality Education";
            case 5:
                return "Gender Equality";
            case 6:
                return "Clean Water and Sanitation";
            case 7:
                return "Affordable and Clean Energy";
            case 8:
                return "Decent Work and Economic Growth";
            case 9:
                return "Industry Innovation and Infrastructure";
            case 10:
                return "Reduced Inequalities";
            case 11:
                return "Sustainable Cities and Communities";
            case 12:
                return "Responsible Consumption and Production";
            case 13:
                return "Climate Action";
            case 14:
                return "Life-Below Water";
            case 15:
                return "Life on Land";
            case 16:
                return "Peace, Justicea and Strong Institutions";
            case 17:
                return "Partnership for the Goals";
        }
    }

}
