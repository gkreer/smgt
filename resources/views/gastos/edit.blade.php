@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Editar gasto</div>

        <div class="panel-body">

        {!! Form::model($gasto, ['route' => ['gastos.update', $gasto], 'method' => 'PUT']) !!}

            @include('gastos.parcial.campos')

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
        {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection