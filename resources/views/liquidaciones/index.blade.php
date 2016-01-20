@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Liquidaciones</div>

				<div class="panel-body">

				<p>
			        <a class="btn btn-info" href="{{ route('liquidaciones.create') }}" role="button">
			            Ingresar Liquidacion
			        </a>
			    </p>
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
								{{ $liquidacion->chofer->nombre }} {{ $liquidacion->chofer->apellido }}
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
					{!! $liquidaciones->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
