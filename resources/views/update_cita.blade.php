@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($cita,['route'=>'cita.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$cita->idl)!!}
		<div class="form-group">
			{!! Form::label('full_name','Fecha')!!}
			{!! Form::text('Fecha',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Hora inicio')!!}
			{!! Form::text('Hora_Inicio',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Hora fin')!!}
			{!! Form::text('Hora_Fin',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('Estado',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Profesional')!!}
			{!! Form::text('Profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Aprendiz')!!}
			{!! Form::text('Aprendiz',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Problematica')!!}
			{!! Form::text('Problematica',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Tipo cita')!!}
			{!! Form::text('Tipo_Cita',null,['class'=>'form-control','required'=>'required'])!!}
		</div>		
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection