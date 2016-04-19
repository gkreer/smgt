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
    
    public function scopeFechaDesde($query, $fechaDesde)
    {
        if(trim($fechaDesde) != "")
            $query->where('fecha', '>=',$fechaDesde);
    }
    
    public function scopeFechaHasta($query, $fechaHasta)
    {
        if(trim($fechaHasta) != "")
            $query->where('fecha', '<=', $fechaHasta);
    }

    public function scopeMatricula($query, $taxi_id)
    {
        if(trim($taxi_id) != "")
            $query->where('taxi_id', $taxi_id);
    }

    public function scopeChoferid($query, $chofer_id)
    {
        if(trim($chofer_id) != "")
            $query->where('chofer_id', $chofer_id);
    }




}
