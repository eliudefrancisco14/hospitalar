<?php

namespace Database\Seeders;

use App\Models\TypeEvent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      //  \App\Models\Usefulinformation::factory(1)->create();
       // \App\Models\LaceCarDocument::factory(1)->create();
       // \App\Models\RestaurantDocument::factory(1)->create();
       // \App\Models\HospitalDocument::factory(1)->create();
       // \App\Models\Accreditation::factory(1)->create();
       // \App\Models\HotelDocument::factory(1)->create();
       // \App\Models\About::factory(1)->create();
        \App\Models\User::factory(1)->create();
      //  \App\Models\Configuration::factory(1)->create();
        //\App\Models\Usefulinformation::factory(1)->create();

      
    }
}
