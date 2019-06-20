<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false; //we willen niet de standaard timestamps gebruiken.
    public $table = 'projects';

    protected $fillable = [
        'name',
        'opleiding_id'
    ];
}

