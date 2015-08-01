@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'programa/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Programa">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('programa.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('programa.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Duración</th>
						<th>Nivel</th>
						<th>Modalidad</th>
						<th>Descripcion</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($programa as $programa)
					<tr>
						<td>{{$programa->nombre}}</td>
						<td>{{$programa->duracion}}</td>
						<td>{{$programa->nivel}}</td>
						<td>{{$programa->modalidad}}</td>
						<td>{{$programa->descripcion}}</td>
						<td>{{$programa->estado}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('programa.edit',['id'=> $programa->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('programa/destroy',['id'=> $programa->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection