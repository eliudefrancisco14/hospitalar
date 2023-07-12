<?php

namespace Database\Factories;

use App\Models\RestaurantDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = RestaurantDocument::class;
    public function definition()
    {
        return [
            'body' => "A que vai informações do documento",
        ];
    }
}
