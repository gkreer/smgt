@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Taxis</div>

				<div class="panel-body">

				<p>
			        <a class="btn btn-info" href="{{ route('taxis.create') }}" role="button">
			            Nuevo Taxi
			        </a>
			    </p>
					<table class="table table-striped">
						<tr>
							<th>
							#
							</th>
							<th>
							Matricula
							</th>
							<th>
							Movil
							</th>
							<th>
							Marca
							</th>
							<th>
							Modelo
							</th>
							<th>
							Kilometraje
							</th>
							<th>
							Acciones
							</th>
						</tr>
						@foreach ($taxis as $taxi)
						<tr>
							<td>
							{{ $taxi->id }}
							</td>
							<td>
							{{ $taxi->matricula }}
							</td>
							<td>
							{{ $taxi->nroMovil }}
							</td>
							<td>
							{{ $taxi->marca }}
							</td>
							<td>
							{{ $taxi->modelo }}
							</td>
							<td>
							{{ $taxi->kilometraje }}
							</td>
							<td>
								<a href="{{ route('taxis.edit', $taxi)}}"> Editar</a>
								<a href=""> Eliminar </a>
							</td>
						</tr>
						@endforeach
					</table>
					{!! $taxis->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
