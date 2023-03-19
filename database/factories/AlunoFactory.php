<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'email' => $this->faker->email(),
            'nascimento' => $this->faker->date(),
            'endereco' => $this->faker->word(),
            'telefone' => '123456789',
            'cadastro' => $this->faker->date(),
            'pagamento' => $this->faker->date(),
            'validade' => $this->faker->date()
            
        ];
    }
}
