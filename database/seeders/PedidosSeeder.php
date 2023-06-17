<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
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
                'FechaPedido'=> '2023-3-15',
                'FechaEntrega'=> '2023-3-17',
                'Observaciones'=>'',
                'Id_Cliente'=> 2,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-03-17',
                'FechaEntrega'=> '2023-3-20',
                'Observaciones'=>'',
                'Id_Cliente'=> 1,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-3-13',
                'FechaEntrega'=> '2023-3-18',
                'Observaciones'=>'Su articulo fue probado',
                'Id_Cliente'=> 3,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-2-14',
                'FechaEntrega'=> '2023-2-16',
                'Observaciones'=>'',
                'Id_Cliente'=> 4,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-3-20',
                'FechaEntrega'=> '2023-3-22',
                'Observaciones'=>'',
                'Id_Cliente'=> 10,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-2-15',
                'FechaEntrega'=> '2023-2-17',
                'Observaciones'=>'',
                'Id_Cliente'=> 12,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-3-22',
                'FechaEntrega'=> '2023-3-25',
                'Observaciones'=>'',
                'Id_Cliente'=> 11,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-4-17',
                'FechaEntrega'=> '2023-4-22',
                'Observaciones'=>'',
                'Id_Cliente'=> 9,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-5-05',
                'FechaEntrega'=> '2023-5-07',
                'Observaciones'=>'',
                'Id_Cliente'=> 8,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-3-29',
                'FechaEntrega'=> '2023-4-01',
                'Observaciones'=>'',
                'Id_Cliente'=> 6,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-2-15',
                'FechaEntrega'=> '2023-3-17',
                'Observaciones'=>'Entregas Internacionales',
                'Id_Cliente'=> 3,
                'created_at'=>Carbon::now()
            ],
            [   
                'FechaPedido'=> '2023-2-14',
                'FechaEntrega'=> '2023-2-17',
                'Observaciones'=>'',
                'Id_Cliente'=> 2,
                'created_at'=>Carbon::now()
            ],

        );

        DB::table('pedidos')->insert($data);
    }
}
