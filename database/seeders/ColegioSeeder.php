<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Colegio;
class ColegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cole = new Colegio();
        $cole->nombre='Colegio Iquique';
        $cole->telefono=12345678;
        $cole->save();

        $cole2 = new Colegio();
        $cole2->nombre='Obispo Labbe';
        $cole2->telefono=2222567;
        $cole2->save();

        $cole3 = new Colegio();
        $cole3->nombre='Academia Tarapaca';
        $cole3->telefono=9875678;
        $cole3->save();
    }
}
