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
                    {!! Form::number('salario', 0, ['class' => 'form-control actualizaGastos actualizaTotales', 'id' => 'salario']) !!}
                  </td>
                  <td>
                    {!! Form::label('gastoAceite', 'Aceite') !!}
                    {!! Form::number('gastoAceite', 0, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('gastoLavado', 'Lavado') !!}
                    {!! Form::number('gastoLavado', 0, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('gastoMantenimiento', 'Taller') !!}
                    {!! Form::number('gastoMantenimiento', 0, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('otroGasto', 'Otros') !!}
                    {!! Form::number('otroGasto', 0, ['class' => 'form-control actualizaGastos actualizaTotales']) !!}
                  </td>
                  <td>
                    {!! Form::label('montoGastosTotal', 'Gastos Totales') !!}
                    {!! Form::number('montoGastosTotal', 0, ['class' => 'form-control actualizaTotales', 'readonly' => 'true', 'id' => 'montoGastosTotal']) !!}
                  </td>

              </tr>
              </table>
            </div>