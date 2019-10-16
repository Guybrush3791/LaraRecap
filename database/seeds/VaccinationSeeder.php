<?php

use Illuminate\Database\Seeder;
use App\Vaccination;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vaccination::class, 10) -> create();
    }
}
