@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Visualizar gastos</div>

        <div class="panel-body">

        
        {!! Form::open(['route' => 'gastos.show', 'method' => 'GET'])!!}

<table class="table table-striped">
            <tr>
              <th>
              GASTOS              
              </th>
              <th>
              Matricula
              </th>
              <th>
              Mes / Año
              </th>
              <th>
              Descripcion
              </th>
              <th>
              Monto
              </th>              
            </tr>
            @foreach ($gastos as $gasto)
            <tr>
              <td>
              </td>
              <td>
              {{ $gasto->taxi->matricula }}
              </td>
              <td>
              {{ $gasto->mes }} / {{ $gasto->anio }}
              </td>
              <td>
              {{ $gasto->descripcion }}
              </td>
              <td>
              {{ $gasto->montoPesos }}
              </td>              
            </tr>
            @endforeach
            <tr>
            <td>
             TOTAL DE GASTOS
              </td>
              <td>
              
              </td>
              <td>
              
              </td>
              <td>
              
              </td>
              <td>
              {{ $totalGastos->montoPesos }}
              </td>
              
            </tr>
          </table>
            
        {!! Form::close() !!}          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection