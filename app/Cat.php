<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [

      'name',
      'race',
      'birthDay',
      'genere',
      'imgPath'

    ];

    function shelter() {

      return $this -> belongsTo(Shelter::class);
    }

    function vaccinations() {

      return $this -> belongsToMany(Vaccination::class);
    }
}
