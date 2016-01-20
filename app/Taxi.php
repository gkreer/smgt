<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'taxi';

    protected $fillable = ['id','matricula', 'kilometraje', 'marca' ,'modelo', 'tipoCombustible',
    						'nroMovil','activo' ];

}
