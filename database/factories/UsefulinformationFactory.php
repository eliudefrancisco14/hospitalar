<?php

namespace Database\Factories;

use App\Models\Usefulinformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsefulinformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */  protected $model = Usefulinformation::class;
    public function definition()
    {
        return [
            'body' => "Aqui vai informações ",
            'title' => "o titutlo ",
        ];
    }
}
