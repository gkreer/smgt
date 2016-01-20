            <div class="form-group">
              {!! Form::label('nombre', 'Nombre') !!}
              {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('nombre2', 'Segundo Nombre') !!}
              {!! Form::text('nombre2', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('apellido', 'Apellido') !!}
              {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('apellido2', 'Segundo Apellido') !!}
              {!! Form::text('apellido2', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('direccion', 'Direccion') !!}
              {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('telefono1', 'Teléfono') !!}
              {!! Form::number('telefono1', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('telefono2', 'Otro Teléfono') !!}
              {!! Form::number('telefono2', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
               {!! Form::label('password', 'Contraseña') !!}
               {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('cedulaIdentidad', 'Cédula de Identidad') !!}
              {!! Form::number('cedulaIdentidad', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('fechaIngresoReal', 'Fecha Ingreso Real') !!}
              {!! Form::date('fechaIngresoReal', null, ['class' => 'form-control']) !!}
            </div>