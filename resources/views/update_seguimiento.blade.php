@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($seguimiento,['route'=>'seguimiento.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('Id_Seguimiento',$seguimiento->Id_Seguimientol)!!}
		<div class="form-group">
			{!! Form::label('full_name','Fecha')!!}
			{!! Form::text('Fecha',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('Estado',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Aprendiz')!!}
			{!! Form::text('Aprendiz',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection