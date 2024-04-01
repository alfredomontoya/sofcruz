<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->truncateTables([
            'user',
            'gestion',
            'funcionario',
            'edificio',
        ]);

        $this->call(UserSeeder::class);
        $this->call(GestionSeeder::class);
        // $this->call(Funcionarios2023Seeder::class);

        $this->call(FuncionarioSeeder1::class);
        $this->call(FuncionarioSeeder2::class);
        $this->call(FuncionarioSeeder2::class);
        $this->call(FuncionarioSeeder3::class);
        $this->call(FuncionarioSeeder4::class);
        $this->call(FuncionarioSeeder5::class);

        // $this->call(EdificioSeeer::class);

        //$this->call(FotopersonaSeeder::class);
        //$this->call(DatosnaturalSeeder::class);
        //$this->call(DatosjuridicoSeeder::class);

    }

    protected function truncateTables(array $tables){
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

