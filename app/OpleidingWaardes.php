<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpleidingWaardes extends Model
{
    public $timestamps = false; //we willen niet de standaard timestamps gebruiken.
    public $table = 'opleiding_waardes';

    protected $fillable = [
        'opleiding_id',

        /* de 17 doelen*/
        'poverty',
        'hunger',
        'health',
        'education',
        'gender_equality',
        'clean_water',
        'energy',
        'economic_growth',
        'infrastructure',
        'reduced_inequalities',
        'sustainable_cities',
        'durability',
        'climate',
        'water_life',
        'land_life',
        'peace',
        'partnership',
        /* einde 17 doelen*/

        'timestamp'
    ];
}
