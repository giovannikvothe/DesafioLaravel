<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADEME',
            'email' => 'adm@adm.com',//$this->faker->email()
            'password' => Hash::make('12345678'),
            'nascimento' => Carbon::now()->toDateString(),
            'endereco' => 'Luiz Vitton',
            'telefone' => '123456789',
            'periodo' => 'Diurno',
            'type' => '0'
        ]);

        User::factory()->count(7)->create();

    }
}
