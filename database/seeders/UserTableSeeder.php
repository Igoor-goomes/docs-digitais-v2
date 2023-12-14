<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'no_usuario'       => 'Igor Gomes Araujo',
            'nr_cpf'           => '19113312057',
            'email'            => 'igordsv@gmail.com',
            'password'         => Hash::make('Doc@2023'),
            'grupo_usuario_id' => '1'
        ]);
    }
}
