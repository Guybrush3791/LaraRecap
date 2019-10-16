<?php

use Illuminate\Database\Seeder;
use App\Shelter;

class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Shelter::class, 10) -> create();
    }
}
