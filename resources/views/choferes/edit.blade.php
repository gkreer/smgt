@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Editar chofer</div>

        <div class="panel-body">

        {!! Form::model($chofer, ['route' => ['choferes.update', $chofer], 'method' => 'PUT']) !!}

            @include('choferes.parcial.campos')

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
        {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection