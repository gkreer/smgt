<div class="form-group">
            <table class="table">
              <tr>
                <td>
                  {!! Form::label('entrada', 'TOTALES') !!}
                </td>
              </tr>
              <tr>
                  <td>
                    {!! Form::label('kmsTotalEntrada', 'Recaudado') !!}
                    {!! Form::number('total', null, ['class' => 'form-control','id' => 'total', 'readonly' => 'true']) !!}
                  </td>
                  <td>
                    {!! Form::label('kmsAlqEntrada', 'Gastos') !!}
                    {!! Form::number('totalGastos', null, ['class' => 'form-control', 'id' => 'totalGastos', 'readonly' => 'true']) !!}
                  </td>
                  <td>
                    {!! Form::label('labelLtsCargaCombustible', 'Liquido') !!}
                    {!! Form::number('liquido', null, ['class' => 'form-control', 'id' => 'liquido', 'readonly' => 'true']) !!}
                  </td>
                  <td>
                    {!! Form::label('rendimiento', '$ / Km') !!}
                    {!! Form::number('pesoPorKm', null, ['class' => 'form-control' , 'readonly' => 'true', 'id' => 'pesoPorKm']) !!}
                  </td>
                </tr>
              </table>
        </div>