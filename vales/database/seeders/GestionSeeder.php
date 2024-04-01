<?php

namespace Database\Seeders;

use App\Models\Gestion;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Gestion::create([ 'user_id' => 1, 'year' => '2018', 'titulo' => 'Entrega vales navideños Gestion 2018', 'descripcion' => 'Entrega vales navideños Gestion 2018']);
        Gestion::create([ 'user_id' => 1, 'year' => '2019', 'titulo' => 'Entrega vales navideños Gestion 2019', 'descripcion' => 'Entrega vales navideños Gestion 2019']);
        Gestion::create([ 'user_id' => 1, 'year' => '2020', 'titulo' => 'Entrega vales navideños Gestion 2020', 'descripcion' => 'Entrega vales navideños Gestion 2020']);
        Gestion::create([ 'user_id' => 1, 'year' => '2021', 'titulo' => 'Entrega vales navideños Gestion 2021', 'descripcion' => 'Entrega vales navideños Gestion 2021']);
        Gestion::create([ 'user_id' => 1, 'year' => '2022', 'titulo' => 'Entrega vales navideños Gestion 2022', 'descripcion' => 'Entrega vales navideños Gestion 2022']);
        Gestion::create([ 'user_id' => 1, 'year' => '2023', 'titulo' => 'Entrega vales navideños Gestion 2023', 'descripcion' => 'Entrega vales navideños Gestion 2023']);
    }
}
