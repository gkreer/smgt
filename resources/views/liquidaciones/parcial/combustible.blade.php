<div class="form-group">
            <table class="table">
              <tr>
                <td>
                  {!! Form::label('entrada', 'COMBUSTIBLE') !!}
                </td>
              </tr>
              <tr>
                  <td>
                    {!! Form::label('kmsTotalEntrada', 'Kms. Carga') !!}
                    {!! Form::number('kmsCargaCombustible', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('kmsAlqEntrada', 'Monto $') !!}
                    {!! Form::number('montoCargaCombustible', null, ['class' => 'form-control actualizaTotales', 'id' => 'montoCargaCombustible']) !!}
                  </td>
                  <td>
                    {!! Form::label('labelLtsCargaCombustible', 'Litros') !!}
                    {!! Form::number('ltsCargaCombustible', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('kmsRecorridos', 'Kms. recorridos') !!}
                    {!! Form::number('kmsRecorridos', null, ['class' => 'form-control', 'readonly' => 'true']) !!}
                  </td>
                  <td>
                    {!! Form::label('rendimiento', 'Rendimiento') !!}
                    {!! Form::number('rendimiento', null, ['class' => 'form-control' , 'readonly' => 'true']) !!}
                  </td>
                </tr>
              </table>
        </div>