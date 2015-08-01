@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=>'profesional.store','method'=>'post','novalidate'])!!}
		<div class="form-group">
			{!! Form::label('Tipo_Documento','Tipo Documento')!!}
			{!! Form::text('Tipo_Documento',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Documento')!!}
			{!! Form::text('Documento',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Nombre')!!}
			{!! Form::text('Nombre',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Primer apellido')!!}
			{!! Form::text('Primer_Apellido',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Segundo apellido')!!}
			{!! Form::text('Segundo_Apellido',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Telefono')!!}
			{!! Form::text('Telefono',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Direcci&oacute;n')!!}
			{!! Form::text('Direccion',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Email')!!}
			{!! Form::text('Email',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Fecha de nacimiento')!!}
			{!! Form::text('Fecha_Nacimiento',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('Estado',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	

		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection