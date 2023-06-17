<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //Nobre de tabla
    protected $table = 'clientes';

    //llave primaria de mi tabla
    protected $primaryKey = 'Id_Cliente';

    //Campos de las tablas
    protected $fillable = ['Nombre','Apellido','Fecha_Nac'];

}
