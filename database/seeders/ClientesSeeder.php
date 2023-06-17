<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [   
                'Nombre'=>'Jorge',
                'Apellido'=>'Valdez',
                'Fecha_Nac'=> '1980-9-8',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Melvin',
                'Apellido'=>'Rodriguez',
                'Fecha_Nac'=>'1999-8-15',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Anahi',
                'Apellido'=>'Lopez',
                'Fecha_Nac'=>'2000-6-5',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Pedro',
                'Apellido'=>'Aquino',
                'Fecha_Nac'=>'1978-05-8',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Rodolfo',
                'Apellido'=>'Melendez',
                'Fecha_Nac'=>'1999-05-8',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Carlos',
                'Apellido'=>'Valmore',
                'Fecha_Nac'=>'1997-07-8',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Adalberto',
                'Apellido'=>'Ortiz',
                'Fecha_Nac'=>'1998-9-25',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Ernesto',
                'Apellido'=>'Velasquez',
                'Fecha_Nac'=>'1996-10-30',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Carmen',
                'Apellido'=>'Lopez',
                'Fecha_Nac'=>'2001-12-24',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Edwin',
                'Apellido'=>'Ramirez',
                'Fecha_Nac'=>'2003-11-15',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Melany',
                'Apellido'=>'Fuentes',
                'Fecha_Nac'=>'2000-12-25',
                'created_at'=>Carbon::now()
            ],
            [   
                'Nombre'=>'Carlos',
                'Apellido'=>'Molina',
                'Fecha_Nac'=>'1995-10-31',
                'created_at'=>Carbon::now()
            ],

        );
        //Insertar arreglo de datos
        DB::table('clientes')->insert($data);
    }
}
