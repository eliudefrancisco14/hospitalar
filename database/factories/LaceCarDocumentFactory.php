<?php

namespace Database\Factories;

use App\Models\LaceCarDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaceCarDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = LaceCarDocument::class;
    public function definition()
    {  return [
        'body' => "Aqui vai informações dos Transportes ",
       
    ];
    }
}
