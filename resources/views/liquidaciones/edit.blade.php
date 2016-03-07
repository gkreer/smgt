@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Modificar liquidacion diaria</div>

        <div class="panel-body">

        {!! Form::model( $liquidacion, ['route' => ['liquidaciones.update', $liquidacion], 'method' => 'PUT']) !!}

            @include('liquidaciones.parcial.campos_rapido_edit')

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
            {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection