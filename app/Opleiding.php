<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opleiding extends Model
{
    public $timestamps = false; //we willen niet de standaard timestamps gebruiken.
    public $table = 'opleidingen';

    protected $fillable = [
        'name',
        'onderzoek_groep_id'
    ];
}
