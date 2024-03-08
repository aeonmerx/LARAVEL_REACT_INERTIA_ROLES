<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear un usuario administrador
        User::create([
            'name' => 'administrador1',
            'email' => 'william.rativab@cun.edu.co',
            'password' => Hash::make('Babalon510.'), // Puedes cambiar la contraseña según tus preferencias
            'roles' => 'admin',
        ]);
    }
}
