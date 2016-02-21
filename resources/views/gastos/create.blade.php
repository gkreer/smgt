@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Crear gastos</div>

        <div class="panel-body">

            {!! Form::open(['route' => 'gastos.store', 'method' => 'POST']) !!}
            
            <div class="form-group navbar-form navbar-left pull-right">
            {!! Form::select('taxi_id',$taxis->lists('matricula', 'id'), null, ['class' => 'form-control']) !!}
            {!! Form::selectMonth('mes', \Carbon\Carbon::now()->month,['class' => 'form-control']) !!}
            {!! Form::selectYear('anio', 2010, 2030, \Carbon\Carbon::now()->year,['class' => 'form-control']) !!}  
          </div>
            
            <div class="form-group">
            <a id="add_row" class="btn btn-default pull-left">Add Row</a>
            <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
            </div>

            @include('gastos.parcial.campos')
            <p>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </p>
            {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection