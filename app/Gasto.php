<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $table = 'gasto';

    protected $fillable = ['descripcion', 'montoPesos', 'mes', 'anio', 'taxi_id' ];

	public function taxi()
    {
        return $this->belongsTo('App\Taxi');
    }
}

    