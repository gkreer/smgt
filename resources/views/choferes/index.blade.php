@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Choferes</div>

				<div class="panel-body">

				<p>
			        <a class="btn btn-info" href="{{ route('choferes.create') }}" role="button">
			            Nuevo Chofer
			        </a>
			    </p>
					<table class="table table-striped">
						<tr>
							<th>
							#
							</th>
							<th>
							Nombre
							</th>
							<th>
							Apellido
							</th>
							<th>
							Apellido 2
							</th>
							<th>
							Cédula
							</th>
							<th>
							Dirección
							</th>
							<th>
							Teléfono
							</th>
							<th>
							Teléfono 2
							</th>
							<th>
							Acciones
							</th>
						</tr>
						@foreach ($choferes as $chofer)
						<tr>
							<td>
							{{ $chofer->id }}
							</td>
							<td>
							{{ $chofer->nombre }}
							</td>
							<td>
							{{ $chofer->apellido }}
							</td>
							<td>
							{{ $chofer->apellido2 }}
							</td>
							<td>
							{{ $chofer->cedulaIdentidad }}
							</td>
							<td>
							{{ $chofer->direccion }}
							</td>
							<td>
							{{ $chofer->telefono1 }}
							</td>
							<td>
							{{ $chofer->telefono1 }}
							</td>
							<td>
								<a href="{{ route('choferes.edit', $chofer)}}"> Editar</a>
								<a href=""> Eliminar </a>
							</td>
						</tr>
						@endforeach
					</table>
					{!! $choferes->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
