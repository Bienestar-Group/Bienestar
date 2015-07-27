@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'profesional/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Profesional">Documento</label>
			<input type="text" class="form-control" name="Documento">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('profesional.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('profesional.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Tipo documento</th>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Primer_Apellido</th>
						<th>Segundo_Apellido</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Direccion</th>
						<th>Fecha_Nacimiento</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($profesionales as $profesionals)
					<tr>
						<td>{{$profesional->nombre}}</td>
						<td>{{$profesional->direccion}}</td>
						<td>{{$profesional->telefono}}</td>
						<td>{{$profesional->pbx}}</td>
						<td>{{$profesional->director}}</td>
						<td>{{$profesional->telefono_director}}</td>
						<td>{{$profesional->estado}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('profesional.edit',['id'=> $profesional->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('profesional/destroy',['id'=> $profesional->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection