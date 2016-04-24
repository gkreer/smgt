@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Liquidaciones
					
			    </div>

				<div class="panel-body">
					{!! Form::model(Request::all(), ['route' => 'liquidaciones.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left ', 'role' => 'search'])!!}
				  <div class="form-group">
				  	<a class="btn btn-info pull-left" href="{{ route('liquidaciones.create') }}" role="button">
			            Ingresar Liquidacion
			        </a>
				    {!! Form::select('taxi_id',$listaTaxis, null, ['class' => 'form-control', 'id' => 'listaTaxis']) !!}
				    {!! Form::select('chofer_id', $listaChoferes, null, ['class' => 'form-control', 'id' => 'listaChoferes']) !!}
				    {!! Form::date('fecha_desde', null , ['class' => 'form-control', 'id' => 'fechaDesde']) !!}
				    {!! Form::date('fecha_hasta', null , ['class' => 'form-control', 'id' => 'fechaHasta']) !!}
				    @if(isset($filtros))
				    	{!! link_to_route('pdf', 'PDF', $filtros, 
				    		array('class'=>'btn btn-info','role'=>'button' )) !!}
				    @endif
				  </div>
				{!! Form::close() !!}				

					<table class="table table-striped">
						<tr>
							<th>
							Fecha
							</th>
							<th>
							Taxi
							</th>
							<th>
							Turno
							</th>
							<th>
							Chofer
							</th>
							<th>
							$ Bruta
							</th>
							<th>
							$ Liquida
							</th>
							<th>
							Salario
							</th>
							<th>
							Aporte
							</th>
							<th>
							$ Comb
							</th>
							<th>
							$/Km
							</th>
							<th>
							Acciones
							</th>
						</tr>
						@foreach ($liquidaciones as $liquidacion)
						<tr>
							<td>
								{{ $liquidacion->fecha->format('d/m/Y') }}
							</td>
							<td>
								{{ $liquidacion->taxi->matricula }}
							</td>
							<td>
								{{ $liquidacion->turno }}
							</td>
							<td>
								{{ $liquidacion->chofer->nombre_completo }}
							</td>
							<td>
								{{ number_format($liquidacion->totalRecaudado,2) }}
							</td>
							<td>
								{{ number_format($liquidacion->subTotalRecaudado, 2) }}
							</td>
							<td>
								{{ $liquidacion->salario }}
							</td>
							<td>
								{{ number_format($liquidacion->aporteBPS, 2 ) }}
							</td>
							<td>
								{{ number_format($liquidacion->montoCargaCombustible, 2) }}
							</td>
							<td>
								{{ number_format($liquidacion->pesoPorKm, 2) }}
							</td>
							<td>
								<a href="{{ route('liquidaciones.edit', $liquidacion)}}"> Editar</a>
								<a href=""> Eliminar </a>
							</td>
						</tr>
						@endforeach
					</table>
					{!! $liquidaciones->appends(Request::only(['taxi_id', 'chofer_id', 'fecha_desde', 'fecha_hasta']))->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
