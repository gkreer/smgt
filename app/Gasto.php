<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $table = 'gasto';

    protected $fillable = ['nombre', 'nombre2', 'apellido', 'apellido2', 'direccion', 'telefono1', 'telefono2', 
    						'fechaIngresoReal', 'cedulaIdentidad', 'activo' ];
}
