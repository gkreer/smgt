@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Ingresar liquidacion diaria</div>

        <div class="panel-body">

        {!! Form::open(['route' => 'liquidaciones.store', 'method' => 'POST']) !!}

            @include('liquidaciones.parcial.campos_rapido')

            <button type="submit" class="btn btn-primary">Guardar</button>
            
            {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection