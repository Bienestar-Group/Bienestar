@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'cita/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Cita">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('cita.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('cita.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Hora inicio</th>
						<th>Hora fin</th>
						<th>Estado</th>
						<th>Profesional</th>
						<th>Aprendiz</th>
						<th>Problematica</th>
						<th>Tipo cita</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($citas as $cita)
					<tr>
						<td>{{$cita->Fecha}}</td>
						<td>{{$cita->Hora_Inicio}}</td>
						<td>{{$cita->Hora_Fin}}</td>
						<td>{{$cita->Estado}}</td>
						<td>{{$cita->Profesional}}</td>
						<td>{{$cita->Aprendiz}}</td>
						<td>{{$cita->Problematica}}</td>
						<td>{{$cita->Tipo_Cita}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('cita.edit',['Id_Cita'=> $cita->Id_Cita])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('cita/destroy',['Id_Cita'=> $cita->Id_CIta])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection