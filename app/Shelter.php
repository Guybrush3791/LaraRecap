<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    protected $fillable = [

      'name',
      'street',
      'capacity'

    ];

    function cats() {

      return $this -> hasMany(Cat::class);
    }
}
