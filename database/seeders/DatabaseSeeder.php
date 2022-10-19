<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\actividades::create(['nombre'=>'Natacion','descripcion'=>'descNatacion']);
        \App\Models\actividades::create(['nombre'=>'Futbol','descripcion'=>'descFutbol']);
        \App\Models\actividades::create(['nombre'=>'Basquetbol','descripcion'=>'descBasquetbol']);
        \App\Models\actividades::create(['nombre'=>'Voleyboll','descripcion'=>'descVoleyboll']);
        \App\Models\actividades::create(['nombre'=>'Box','descripcion'=>'descBox']);
        \App\Models\actividades::create(['nombre'=>'Lucha Olimpica','descripcion'=>'descLucha']);
        \App\Models\actividades::create(['nombre'=>'Gimnacio','descripcion'=>'descGimnacio']);
        \App\Models\actividades::create(['nombre'=>'Bile','descripcion'=>'descBile']);



        \App\Models\membresias::create(['tipo'=>'Individual']);
        \App\Models\membresias::create(['tipo'=>'Familiar']);


        \App\Models\localidades::create(['tipo'=>'Foraneo']);
        \App\Models\localidades::create(['tipo'=>'Local']);

        \App\Models\estado::create(['nombre'=>'Coahuila']);
        \App\Models\ciudad::create(['nombre'=>'Torreon','estado_id'=>1]);
        \App\Models\estado::create(['nombre'=>'Durango']);
        \App\Models\ciudad::create(['nombre'=>'Gomez Palacio','estado_id'=>2]);


        \App\Models\persona::create(['nombre'=>'brayan','apellido'=>'romero',
                                    'curp'=>'123456789','localidad_id'=>2]);

        \App\Models\persona::create(['nombre'=>'itai','apellido'=>'gandara',
                                    'curp'=>'123456789','localidad_id'=>1]);

        \App\Models\persona::create(['nombre'=>'3333','apellido'=>'33333',
                                    'curp'=>'123456789','localidad_id'=>2]);

        \App\Models\familias::create(['folio'=>1,'persona'=>1]);
        \App\Models\familias::create(['folio'=>1,'persona'=>2]);



    }
}
