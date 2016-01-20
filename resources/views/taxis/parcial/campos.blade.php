            <div class="form-group">
              {!! Form::label('matricula', 'Matricula') !!}
              {!! Form::text('matricula', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('kilometraje', 'Kilometraje') !!}
              {!! Form::number('kilometraje', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('marca', 'Marca') !!}
              {!! Form::text('marca', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('modelo', 'Modelo') !!}
              {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('tipoCombustible', 'Combustible') !!}
              {!! Form::select('tipoCombustible', ['' => 'Seleccionar', 'nafta' => 'Nafta', 'gasoil' => 'Gasoil'] , null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('nroMovil', 'Movil') !!}
              {!! Form::text('nroMovil', null, ['class' => 'form-control']) !!}
            </div>