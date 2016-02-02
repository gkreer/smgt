<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chofer';

    protected $fillable = ['nombre', 'nombre2', 'apellido', 'apellido2', 'direccion', 'telefono1', 'telefono2', 
    						'fechaIngresoReal', 'cedulaIdentidad', ];

    public function scopeNombre($query, $nombre)
	{
		if(trim($nombre) != "")
			$query->where(\DB::raw("CONCAT(nombre,' ', apellido ,'', apellido2)"), "LIKE", "%$nombre%");
	}

	public function getNombreCompletoAttribute()
    {
        return ucfirst(strtolower($this->attributes['nombre'])) . ' ' . ucfirst(strtolower($this->attributes['apellido']));
    }
}


