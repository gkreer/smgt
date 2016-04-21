@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				Liquidaciones {{ $taxi->matricula }} {{ $chofer->nombre_completo }}</div>

				<div class="panel-body">							
					<table class="table table-striped">
						<tr>
							<th>
							Fecha
							</th>
							<th>
							Turno
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
						</tr>
						@foreach ($liquidaciones as $liquidacion)
						<tr>
							<td>
								{{ $liquidacion->fecha->format('d/m/Y') }}
							</td>
							<td>
								{{ $liquidacion->turno }}
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
							
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
