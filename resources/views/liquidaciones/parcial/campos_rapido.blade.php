            <div class="form-group">
              
              <table class="table">
                <tr>
                  <td>
                    {!! Form::label('taxi', 'Taxi') !!}
                    {!! Form::select('taxi_id', $taxis,  null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('chofer', 'Chofer') !!}
                    {!! Form::select('chofer_id', $choferes,  null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('fechaLiquidacion', 'Fecha') !!}
                    {!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('turno', 'Turno') !!}
                    {!! Form::select('turno',['' => 'Elegir','Diurno' => 'Diurno','Nocturno' => 'Nocturno', 'Feriado' => 'Feriado' ] 
                          , null, ['class' => 'form-control']) !!}
                  </td>
              </tr>
              </table>
            </div>
            
            <div class="form-group">
              
              <table class="table">

              <tr>
                  <td>
                  {!! Form::label('kmsTotalEntrada', 'KMS Totales') !!}
                    {!! Form::number('kmsTotalSalida', null, ['class' => 'form-control actualizaPesoPorKm', 'id'=> 'kmsTotalSalida']) !!}
                  </td>
                  <td>
                  {!! Form::label('kmsAlqEntrada', 'KMS Alquilados') !!}
                    {!! Form::number('kmsAlqSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                  {!! Form::label('bandDiurnaEntrada', 'Viajes Diurnos') !!}
                    {!! Form::number('bandDiurnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                  {!! Form::label('fichaDiurnaEntrada', 'Fichas Diurnas') !!}
                    {!! Form::number('fichaDiurnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                  {!! Form::label('bandNocturnaEntrada', 'Viajes Nocturnos') !!}
                    {!! Form::number('bandNocturnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                  {!! Form::label('fichaNocturnaEntrada', 'Fichas Nocturnas') !!}
                    {!! Form::number('fichaNocturnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
              </tr>
              </table>
            </div>

            @include('liquidaciones.parcial.ingresos')

            @include('liquidaciones.parcial.gastos')

            @include('liquidaciones.parcial.combustible')

            @include('liquidaciones.parcial.total')