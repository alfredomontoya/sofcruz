<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create(['email' => 'admin', 'name' => 'Administrador', 'password' => bcrypt('admin')]);
        User::factory(50)->create();
        Persona::factory(100)->create();
    }
}
