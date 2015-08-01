@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'aprendiz/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Aprendiz">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('aprendiz.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('aprendiz.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Tipo de documento</th>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Direccion</th>
						<th>Genero</th>
						<th>Fecha de Nacimiento</th>
						<th>Estado</th>
						<th>Ficha de caracterizacion</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($aprendices as $aprendiz)
					<tr>
						<td>{{$aprendiz->tipo_documento}}</td>
						<td>{{$aprendiz->documento}}</td>
						<td>{{$aprendiz->nombre}}</td>
						<td>{{$aprendiz->primer_apellido}}</td>
						<td>{{$aprendiz->segundo_apellido}}</td>
						<td>{{$aprendiz->telefono}}</td>
						<td>{{$aprendiz->email}}</td>
						<td>{{$aprendiz->direccion}}</td>
						<td>{{$aprendiz->genero}}</td>
						<td>{{$aprendiz->fecha_nacimiento}}</td>
						<td>{{$aprendiz->estado}}</td>
						<td>{{$aprendiz->ficha_caracterizacion}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('aprendiz.edit',['id'=> $aprendiz->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('aprendiz/destroy',['id'=> $aprendiz->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection