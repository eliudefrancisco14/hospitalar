<?php

namespace Database\Factories;

use App\Models\Accreditation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccreditationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Accreditation::class;

    public function definition()
    {
        return [
            'body' => "Sobre a Acreditação",
            
        ];
    }
}
