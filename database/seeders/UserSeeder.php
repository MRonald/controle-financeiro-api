<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Administrador',
            'email' => 'admin@admin.com.br',
            'username' => 'admin',
            'password' => '456123789',
        ];

        User::create($data);
    }
}
