<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquidacion extends Model
{
    protected $table = 'liquidacion';

    protected $fillable = ['id', 'kmsTotalEntrada', 'kmsTotalSalida', 'kmsAlqEntrada', 'kmsAlqSalida', 
    'bandDiurnaEntrada', 'bandDiurnaSalida', 'bandNocturnaEntrada', 'bandNocturnaSalida', 'fichaDiurnaEntrada', 
    'fichaDiurnaSalida', 'fichaNocturnaEntrada', 'fichaNocturnaSalida', 'bandDiurnaDesc', 'bandNocturnaDesc', 
    'fichaDiurnaDesc', 'fichaNocturnaDesc', 'montoRecDiurna', 'montoRecNocturna', 'montoFichasDiurna', 
    'montoBandDiurna', 'montoFichasNocturna', 'montoBandNocturna', 'salario', 'kmsCargaCombustible', 
    'ltsCargaCombustible', 'montoCargaCombustible', 'gastoAceite', 'gastoLavado', 'gastoGomeria', 
    'gastoMantenimiento', 'otroGasto', 'otroIngreso', 'fecha', 'hsTrabajadas', 'pesoPorKm', 'totalRecaudado', 
    'subTotalRecaudado', 'aporteBPS', 'montoVales', 'montoCredito', 'montoEfectivo','chofer_id', 'taxi_id', 'turno', 
    'created_at', 'updated_at' ];

    protected $dates = ['fecha'];

    public function chofer()
    {
        return $this->belongsTo('App\Chofer');
    }

    public function taxi()
    {
        return $this->belongsTo('App\Taxi');
    }

    public function formLtsCargaCombustibleAttribute($value)
    {
        return number_format($value, 2);
    }

    public function getLtsCargaCombustibleAttribute($value)
    {
        return number_format($value, 2);
    }

    public function getAporteBPSAttribute($value)
    {
        return number_format($value, 2);
    }

    public function getSalarioAttribute($value)
    {
        return number_format($value, 2);
       
    }

    public function formSalarioAttribute($value)
    {
        return number_format($value, 2);
    }
    
    




}
