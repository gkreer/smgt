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
                    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
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
                  {!! Form::label('entrada', 'Ent.') !!}
                  </td>
                  <td>
                    {!! Form::label('kmsTotalEntrada', 'KMS Totales') !!}
                    {!! Form::number('kmsTotalEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('kmsAlqEntrada', 'KMS Alquilados') !!}
                    {!! Form::number('kmsAlqEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('bandDiurnaEntrada', 'Viajes Diurnos') !!}
                    {!! Form::number('bandDiurnaEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('fichaDiurnaEntrada', 'Fichas Diurnas') !!}
                    {!! Form::number('fichaDiurnaEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('bandNocturnaEntrada', 'Viajes Nocturnos') !!}
                    {!! Form::number('bandNocturnaEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('fichaNocturnaEntrada', 'Fichas Nocturnas') !!}
                    {!! Form::number('fichaNocturnaEntrada', null, ['class' => 'form-control']) !!}
                  </td>
              </tr>
              <tr>
                  <td>
                  {!! Form::label('salida', 'Sal.') !!}
                  </td>
                  <td>
                    {!! Form::number('kmsTotalSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('kmsAlqSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('bandDiurnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('fichaDiurnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('bandNocturnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('fichaNocturnaSalida', null, ['class' => 'form-control']) !!}
                  </td>
              </tr>
              <tr>
                  <td>
                  {!! Form::label('fechaIngresoReal', 'Tot.') !!} 
                  </td>
                  <td>
                    {!! Form::number('kmsTotalTotal', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('kmsAlqTotal', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('bandDiurnaTotal', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('fichaDiurnaTotal', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('bandNocturnaTotal', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::number('fichaNocturnaTotal', null, ['class' => 'form-control']) !!}
                  </td>
              </tr>
              </table>
            </div>

            @include('liquidaciones.parcial.gastos')

            @include('liquidaciones.parcial.ingresos')
  


            <div class="form-group">
            <table class="table">
                <tr>
                  <td>
                  {!! Form::label('entrada', 'Combustible') !!}
                  </td>
                  <td>
                    {!! Form::label('kmsTotalEntrada', 'Kms. Carga') !!}
                    {!! Form::number('kmsCargaCombustible', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('kmsAlqEntrada', 'Monto $') !!}
                    {!! Form::number('montoCargaCombustible', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('ltsCargaCombustible', 'Litros') !!}
                    {!! Form::number('ltsCargaCombustible', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('fichaDiurnaEntrada', 'Kms. recorridos') !!}
                    {!! Form::number('fichaDiurnaEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                  <td>
                    {!! Form::label('bandNocturnaEntrada', 'Rendimiento') !!}
                    {!! Form::number('bandNocturnaEntrada', null, ['class' => 'form-control']) !!}
                  </td>
                </tr>
              </table>
              </div>

            <!--<div class="form-group">
              <table class="table">
              <tr>
                {!! Form::label('nombre', 'Nombre1') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
              </tr>  
              <tr>
                {!! Form::label('nombre', 'Nombre2') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
              </tr>  
              <tr>
                {!! Form::label('nombre', 'Nombre3') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
              </tr>  
              </table>
              <table class="table">
                <tr>
                {!! Form::label('nombre', 'Nombre4') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
              </tr>  
              <tr>
                {!! Form::label('nombre', 'Nombre5') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
              </tr>  
              <tr>
                {!! Form::label('nombre', 'Nombre6') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
              </tr>  
              </table>
            </div> !-->
            