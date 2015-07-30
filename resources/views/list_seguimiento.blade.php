@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'seguimiento/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Seguimiento">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('seguimiento.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('seguimiento.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Estado</th>
						<th>Aprendiz</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($seguimientos as $seguimiento)
					<tr>
						<td>{{$seguimeinto->Fecha}}</td>
						<td>{{$seguimeinto->Estado}}</td>
						<td>{{$seguimeinto->Aprendiz}}</td>
						
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('seguimiento.edit',['id'=> $seguimiento->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('seguimiento/destroy',['id'=> $seguimiento->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection