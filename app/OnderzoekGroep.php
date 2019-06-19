<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnderzoekGroep extends Model
{
    public $timestamps = false; //we willen niet de standaard timestamps gebruiken.
    public $table = 'onderzoek_groepen';

    protected $fillable = [
        'name'
    ];
}
