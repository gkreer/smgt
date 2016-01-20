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
          {!! Form::number('totalRecaudado', 0 , ['class' => 'form-control actualizaEfectivo actualizaSalario actualizaPesoPorKm actualizaGastos actualizaTotales', 'id' => 'totalRecaudado']) !!}
        </td>
        <td>
          {!! Form::label('aporteBPS', 'Aportes BPS') !!}
          {!! Form::number('aporteBPS', 0 , ['class' => 'form-control actualizaEfectivo', 'id' => 'aporteBPS']) !!}
        </td>
        <td>
          {!! Form::label('montoVales', 'Vales H13') !!}
          {!! Form::number('montoVales', 0 , ['class' => 'form-control actualizaEfectivo', 'id' => 'montoVales']) !!}
        </td>
        <td>
          {!! Form::label('montoCredito', 'Credito') !!}
          {!! Form::number('montoCredito', 0 , ['class' => 'form-control actualizaEfectivo', 'id' => 'montoCredito']) !!}
        </td>
        <td>
          {!! Form::label('montoEfectivo', 'Efectivo') !!}
          {!! Form::number('montoEfectivo', 0 , ['class' => 'form-control actualizaTotales', 'id' => 'montoEfectivo'] ) !!}
        </td>
        
    </tr>
    </table>
</div>