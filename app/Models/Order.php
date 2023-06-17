<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //Nobre de tabla
    protected $table = 'pedidos';

    //llave primaria de mi tabla
    protected $primaryKey = 'Id_Pedido';

    //Campos de las tablas
    protected $fillable = ['FechaPedido','FechaEntrega','Observaciones'];
    
}
