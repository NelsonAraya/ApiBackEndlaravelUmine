<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usu = new Usuario();
        $usu->id=17096233;
        $usu->dv='8';
        $usu->nombres='Nelson Antonio';
        $usu->apellidop='Araya';
        $usu->apellidom='Vacca';
        $usu->telefono=123456;
        $usu->email='naraya.vatrogasci@gmail.com';
        $usu->colegio_id=1;
        $usu->password=Hash::make($usu->id);
        $usu->save();

        $usu2 = new Usuario();
        $usu2->id=1234567;
        $usu2->dv='8';
        $usu2->nombres='Jose Miguel';
        $usu2->apellidop='Cortez';
        $usu2->apellidom='Miranda';
        $usu2->telefono=44444;
        $usu2->email='test.pruebai@gmail.com';
        $usu2->colegio_id=1;
        $usu2->password=Hash::make($usu2->id);
        $usu2->save();

        $usu3 = new Usuario();
        $usu3->id=22334455;
        $usu3->dv='k';
        $usu3->nombres='Carlos Pinto';
        $usu3->apellidop='Gomez';
        $usu3->apellidom='Perez';
        $usu3->telefono=55555;
        $usu3->email='ensayo.pruebai@gmail.com';
        $usu3->colegio_id=2;
        $usu3->password=Hash::make($usu3->id);
        $usu3->save();

        $usu4 = new Usuario();
        $usu4->id=1622567;
        $usu4->dv='6';
        $usu4->nombres='Nathalia';
        $usu4->apellidop='Muñoz';
        $usu4->apellidom='Silva';
        $usu4->telefono=66666;
        $usu4->email='nathalia.prueba@gmail.com';
        $usu4->colegio_id=3;
        $usu4->password=Hash::make($usu4->id);
        $usu4->save();
    }
}
