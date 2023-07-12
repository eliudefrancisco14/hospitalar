<?php

namespace Database\Factories;

use App\Models\HotelDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = HotelDocument::class;
    public function definition()
    {  return [
        'body' => "A que vai informações do documento",
       
    ];
    }
}
