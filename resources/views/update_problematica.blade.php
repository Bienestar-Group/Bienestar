@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($problematica,['route'=>'problematica.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$problematica->Id_Problematical)!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tipo problem&aacute;tica')!!}
			{!! Form::text('Tipo_Problematica',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('Estado',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Area')!!}
			{!! Form::text('Area',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection