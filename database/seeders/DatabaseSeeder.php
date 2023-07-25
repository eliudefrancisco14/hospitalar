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
        \App\Models\User::factory(1)->create();
        \App\Models\ProvinceDocument::factory(1)->create();
        \App\Models\Contact::factory(1)->create();
        \App\Models\Province::factory()->create([
            'name' => 'Bengo',
            'description' => 'Sem descrição',
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Benguela',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Bié',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Cabinda',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Cuando-Cubango',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Cunene',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Huambo',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Huíla',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Kwanza Sul',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Kwanza Norte',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Luanda',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Lunda Norte',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Lunda Sul',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Malanje',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Moxico',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Namibe',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Uíge',
            'description' => "Sem descricção",
        ]);
        \App\Models\Province::factory()->create([
            'name' => 'Zaire',
                'description' => "Sem descricção",
        ]);

    }
}
