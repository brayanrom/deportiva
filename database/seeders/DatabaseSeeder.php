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

        \App\Models\estado::create(['nombre'=>'Aguascalientes']);
        \App\Models\estado::create(['nombre'=>'Baja California']);
        \App\Models\estado::create(['nombre'=>'Baja California Sur']);
        \App\Models\estado::create(['nombre'=>'Campeche']);
        \App\Models\estado::create(['nombre'=>'Chiapas']);
        \App\Models\estado::create(['nombre'=>'Chihuahua']);
        \App\Models\estado::create(['nombre'=>'Ciudad de México']);
        \App\Models\estado::create(['nombre'=>'Coahuila']);
        \App\Models\estado::create(['nombre'=>'Colima']);
        \App\Models\estado::create(['nombre'=>'Durango']);
        \App\Models\estado::create(['nombre'=>'Estado de México']);
        \App\Models\estado::create(['nombre'=>'Guanajuato']);
        \App\Models\estado::create(['nombre'=>'Guerrero']);
        \App\Models\estado::create(['nombre'=>'Hidalgo']);
        \App\Models\estado::create(['nombre'=>'Jalisco']);
        \App\Models\estado::create(['nombre'=>'Michoacán']);
        \App\Models\estado::create(['nombre'=>'Morelos']);
        \App\Models\estado::create(['nombre'=>'Nayarit']);
        \App\Models\estado::create(['nombre'=>'Nuevo León']);
        \App\Models\estado::create(['nombre'=>'Oaxaca']);
        \App\Models\estado::create(['nombre'=>'Puebla']);
        \App\Models\estado::create(['nombre'=>'Querétaro']);
        \App\Models\estado::create(['nombre'=>'Quintana Roo']);
        \App\Models\estado::create(['nombre'=>'San Luis Potosí']);
        \App\Models\estado::create(['nombre'=>'Sinaloa']);
        \App\Models\estado::create(['nombre'=>'Sonora']);
        \App\Models\estado::create(['nombre'=>'Tabasco']);
        \App\Models\estado::create(['nombre'=>'Tamaulipas']);
        \App\Models\estado::create(['nombre'=>'Tlaxcala']);
        \App\Models\estado::create(['nombre'=>'Veracruz']);
        \App\Models\estado::create(['nombre'=>'Yucatán']);
        \App\Models\estado::create(['nombre'=>'Zacatecas']);

        \App\Models\municipio::create(['nombre'=>'Torreon','estado_id'=>8]);
        \App\Models\municipio::create(['nombre'=>'Gomez Palacio','estado_id'=>10]);



        \App\Models\persona::create(['nombre'=>'brayan','apellido'=>'romero',
                                    'curp'=>'123456789','localidad_id'=>2]);
        \App\Models\persona::create(['nombre'=>'itai','apellido'=>'gandara',
                                    'curp'=>'123456789','localidad_id'=>1]);
        \App\Models\persona::create(['nombre'=>'Juanito','apellido'=>'muyraro',
                                    'curp'=>'123456789','localidad_id'=>2]);


        \App\Models\familias::create(['folio'=>1,'persona_id'=>1]);
        \App\Models\familias::create(['folio'=>1,'persona_id'=>2]);


        \App\Models\fechas::create(['dia'=>'Lunes','hora'=>'8:00 AM']);
        \App\Models\fechas::create(['dia'=>'Lunes','hora'=>'9:00 AM']);
        \App\Models\fechas::create(['dia'=>'Lunes','hora'=>'2:00 PM']);
        \App\Models\fechas::create(['dia'=>'Lunes','hora'=>'4:00 PM']);
        \App\Models\fechas::create(['dia'=>'Lunes','hora'=>'6:00 PM']);
        \App\Models\fechas::create(['dia'=>'Lunes','hora'=>'8:00 PM']);

        \App\Models\fechas::create(['dia'=>'Martes','hora'=>'8:00 AM']);
        \App\Models\fechas::create(['dia'=>'Martes','hora'=>'9:00 AM']);
        \App\Models\fechas::create(['dia'=>'Martes','hora'=>'2:00 PM']);
        \App\Models\fechas::create(['dia'=>'Martes','hora'=>'4:00 PM']);
        \App\Models\fechas::create(['dia'=>'Martes','hora'=>'6:00 PM']);
        \App\Models\fechas::create(['dia'=>'Martes','hora'=>'8:00 PM']);

        \App\Models\fechas::create(['dia'=>'Miercoles','hora'=>'8:00 AM']);
        \App\Models\fechas::create(['dia'=>'Miercoles','hora'=>'9:00 AM']);
        \App\Models\fechas::create(['dia'=>'Miercoles','hora'=>'2:00 PM']);
        \App\Models\fechas::create(['dia'=>'Miercoles','hora'=>'4:00 PM']);
        \App\Models\fechas::create(['dia'=>'Miercoles','hora'=>'6:00 PM']);
        \App\Models\fechas::create(['dia'=>'Miercoles','hora'=>'8:00 PM']);

        \App\Models\fechas::create(['dia'=>'Jueves','hora'=>'8:00 AM']);
        \App\Models\fechas::create(['dia'=>'Jueves','hora'=>'9:00 AM']);
        \App\Models\fechas::create(['dia'=>'Jueves','hora'=>'2:00 PM']);
        \App\Models\fechas::create(['dia'=>'Jueves','hora'=>'4:00 PM']);
        \App\Models\fechas::create(['dia'=>'Jueves','hora'=>'6:00 PM']);
        \App\Models\fechas::create(['dia'=>'Jueves','hora'=>'8:00 PM']);

        \App\Models\fechas::create(['dia'=>'Viernes','hora'=>'8:00 AM']);
        \App\Models\fechas::create(['dia'=>'Viernes','hora'=>'9:00 AM']);
        \App\Models\fechas::create(['dia'=>'Viernes','hora'=>'2:00 PM']);
        \App\Models\fechas::create(['dia'=>'Viernes','hora'=>'4:00 PM']);
        \App\Models\fechas::create(['dia'=>'Viernes','hora'=>'6:00 PM']);
        \App\Models\fechas::create(['dia'=>'Viernes','hora'=>'8:00 PM']);

        \App\Models\fechas::create(['dia'=>'Sabado','hora'=>'8:00 AM']);
        \App\Models\fechas::create(['dia'=>'Sabado','hora'=>'9:00 AM']);
        \App\Models\fechas::create(['dia'=>'Sabado','hora'=>'2:00 PM']);
        \App\Models\fechas::create(['dia'=>'Sabado','hora'=>'4:00 PM']);
        \App\Models\fechas::create(['dia'=>'Sabado','hora'=>'6:00 PM']);
        \App\Models\fechas::create(['dia'=>'Sabado','hora'=>'8:00 PM']);


        \App\Models\pagos::create(['folio_id'=>1,'pagado'=>500,'mes_a_pagar'=>2,'año_a_pagar'=>2022]);
        \App\Models\persona_actividad::create(['persona_id'=>1,'actividad_id'=>2,'fechas_id'=>2,'pagos_id'=>1]);
        \App\Models\persona_actividad::create(['persona_id'=>1,'actividad_id'=>3,'fechas_id'=>7,'pagos_id'=>1]);
        \App\Models\persona_actividad::create(['persona_id'=>1,'actividad_id'=>6,'fechas_id'=>10,'pagos_id'=>1]);

        \App\Models\persona_actividad::create(['persona_id'=>2,'actividad_id'=>1,'fechas_id'=>1,'pagos_id'=>1]);
        \App\Models\persona_actividad::create(['persona_id'=>2,'actividad_id'=>6,'fechas_id'=>10,'pagos_id'=>1]);
        \App\Models\persona_actividad::create(['persona_id'=>2,'actividad_id'=>2,'fechas_id'=>13,'pagos_id'=>1]);


        \App\Models\pagos::create(['folio_id'=>2,'pagado'=>500,'mes_a_pagar'=>2,'año_a_pagar'=>2022]);
        \App\Models\persona_actividad::create(['persona_id'=>3,'actividad_id'=>5,'fechas_id'=>1,'pagos_id'=>2]);
        \App\Models\persona_actividad::create(['persona_id'=>3,'actividad_id'=>2,'fechas_id'=>2,'pagos_id'=>2]);
        \App\Models\persona_actividad::create(['persona_id'=>3,'actividad_id'=>8,'fechas_id'=>3,'pagos_id'=>2]);





    }
}
