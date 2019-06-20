<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opleiding extends Model
{
    public $timestamps = false; //we willen niet de standaard timestamps gebruiken.
    public $table = 'opleidingen';

    protected $fillable = [
        'name',
        'onderzoek_groep_id',
        'contact'
    ];

    public function getGroup() {
        $g = OnderzoekGroep::find($this->onderzoek_groep_id);
        return $g;
    }

    public function getValues() {
        $g = OpleidingWaardes::where('opleiding_id', $this->id)
            ->get()->first();

        return $g;

    }
}
