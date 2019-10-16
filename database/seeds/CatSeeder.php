<?php

use Illuminate\Database\Seeder;
use App\Cat;
use App\Shelter;
use App\Vaccination;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cat::class, 50) -> make() -> each(function ($cat) {

          $shelter = Shelter::inRandomOrder() -> first();
          $cat -> shelter() -> associate($shelter);
          $cat -> save();

          $vaccinations = Vaccination::inRandomOrder()
                              -> take(rand(0, 5))
                              -> get();
          $cat -> vaccinations() -> attach($vaccinations);
        });
    }
}
