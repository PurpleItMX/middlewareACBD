@extends('layouts.app')

@section('content')
	<center><h5>Lista Clientes</h5></center>
	<div class="container">
	<table id="listTable" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre:</th>
				<th>Ruta:</th>
				<th>Acciones:</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clients as $client)
				<tr>
					<td>{{ $client->id_client }}</td>
					<td>{{ $client->name }}</td>
					<td>{{ $client->url }}</td>
					<td>
						<a type="button" class="btn btn-secondary btn-sm" href="{{ url('/client/edit/'.$client->id_client)}}">
							<span class="glyphicon glyphicon-search" aria-hidden="true">
								Editar
							</span>
						</a>
						<a type="button" class="btn btn-info btn-sm" href="{{ url('/client/view/'.$client->id_client)}}">
							<span class="glyphicon glyphicon-search" aria-hidden="true">
								Compañias
							</span>
						</a>
						<a type="button" class="btn btn-danger btn-sm" href="{{ url('/client/delete/'.$client->id_client)}}">
							<span class="glyphicon glyphicon-search" aria-hidden="true">
								Eliminar
							</span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>

@endsection