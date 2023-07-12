<?php

namespace Database\Factories;

use App\Models\HospitalDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class HospitalDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = HospitalDocument::class;
    public function definition()
    {
        return [
       'body' => "A que vai informações do documento",
           
        ];
    }
}
