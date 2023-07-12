<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "Comissão Nacional Eleitoral Artigo 139º (Lei nº 36/11, de 21 de Dezembro)",
            'body' => "1. A Comissão Nacional Eleitoral nos termos do artigo 107º da Constituição da República de Angola, é um órgão independente que organiza, executa, coordena e conduz os processos eleitorais.
2. Compete à Comissão Nacional Eleitoral, nos termos do artigo 107º da Constituição, a organização de toda a logística eleitoral.
3. Sem prejuízo do disposto na presente Lei, a estrutura, a organização e o modo de funcionamento da Comissão Nacional Eleitoral são definidos em diploma próprio.
4. A estrutura orgânica e funcional da Comissão Nacional Eleitoral bem como as competências específicas dos seus órgãos são fixadas por esta e aprovadas por lei.",
        ];
    }
}
