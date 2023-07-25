<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => "Aqui vai o Endereço",
            'email' => "Aqui vai o email",
            'telephone' => "Aqui vai os telefones separados por uma barra(/)"
        ];
    }
}
