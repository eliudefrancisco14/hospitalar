<?php

namespace Database\Factories;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConfigurationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configuration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => "Hotel Intercontinental Luanda Miramar ",
            'email' => "Aqui vai o email",
            'telefone' => "Aqui vai os telefones separados por uma barra(/)"
        ];
    }
}
