<div class="form-group">
              
    <table class="table">

    <tr>
        <td>
          {!! Form::label('entrada', 'INGRESOS') !!}
        </td>
    </tr>
    <tr>
        <td>
          {!! Form::label('entrada', 'Total Recaudado') !!}
          {!! Form::number('totalRecaudado', null , ['class' => 'form-control actualizaEfectivo actualizaSalario actualizaPesoPorKm actualizaGastos actualizaTotales', 'id' => 'totalRecaudado']) !!}
        </td>
        <td>
          {!! Form::label('aporteBPS', 'Aportes BPS') !!}
          {!! Form::number('aporteBPS', null , ['class' => 'form-control actualizaEfectivo', 'id' => 'aporteBPS']) !!}
        </td>
        <td>
          {!! Form::label('montoVales', 'Vales H13') !!}
          {!! Form::number('montoVales', null , ['class' => 'form-control actualizaEfectivo', 'id' => 'montoVales']) !!}
        </td>
        <td>
          {!! Form::label('montoCredito', 'Credito') !!}
          {!! Form::number('montoCredito', null , ['class' => 'form-control actualizaEfectivo', 'id' => 'montoCredito']) !!}
        </td>
        <td>
          {!! Form::label('montoEfectivo', 'Efectivo') !!}
          {!! Form::number('montoEfectivo', null , ['class' => 'form-control actualizaTotales', 'id' => 'montoEfectivo'] ) !!}
        </td>
        
    </tr>
    </table>
</div>