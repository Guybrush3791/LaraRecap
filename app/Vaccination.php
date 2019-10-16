<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $fillable = [

      'name',
      'price'

    ];

    function cats() {

      return $this -> belongsToMany(Cat::class);
    }
}
