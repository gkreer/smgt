@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Crear chofer</div>

        <div class="panel-body">

            {!! Form::open(['route' => 'choferes.store', 'method' => 'POST']) !!}
            
            @include('choferes.parcial.campos')

            <button type="submit" class="btn btn-primary">Guardar</button>
            
            {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection