<div class="form-group">
              
              <table class="table">

              <tr>
                  <td>
                    {!! Form::label('entrada', 'GASTOS') !!}
                  </td>
              </tr>
              <tr>
                  <td>
                    {!! Form::label('entrada', 'Salario'.' 29%') !!}
                    {!! Form::number('salario', null, ['class' => 'form-control actualizaGastos actualizaTotales', 'id' => 'salario']) !!}
                  </td>
                  <td>
                    {!! Form::label('gastoAceite', 'Aceite') !!}
                    {!! Form::number('gastoAceite', null, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('gastoLavado', 'Lavado') !!}
                    {!! Form::number('gastoLavado', null, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('gastoMantenimiento', 'Taller') !!}
                    {!! Form::number('gastoMantenimiento', null, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('otroGasto', 'Otros') !!}
                    {!! Form::number('otroGasto', null, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('montoGastosTotal', 'Gastos Totales') !!}
                    {!! Form::number('montoGastosTotal', null, ['class' => 'form-control actualizaTotales', 'readonly' => 'true', 'id' => 'montoGastosTotal']) !!}
                  </td>

              </tr>
              </table>
            </div>