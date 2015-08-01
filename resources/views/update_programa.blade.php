@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($programa,['route'=>'programa.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$programa->idl)!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Duraci&oacute;n')!!}
			{!! Form::text('duracion',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Nivel')!!}
			{!! Form::text('nivel',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('full_name','Modalidad')!!}
			{!! Form::text('modalidad',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Descripcion')!!}
			{!! Form::text('descripcion',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection