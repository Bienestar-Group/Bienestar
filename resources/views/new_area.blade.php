+@extends('app')
+@section('content')
+<div class="container">
+	<div class="row">
+		<div class="col-md-10 col-md-offset-1">
+			{!! Form::open(['route'=>'area.store','method'=>'post','novalidate'])!!}
+		<div class="form-group">
+			{!! Form::label('Codigo','C&oacutedigo')!!}
+			{!! Form::text('Codigo',null,['class'=>'form-control','required'=>'required']) !!}
+		</div>
+		<div class="form-group">
+			{!! Form::label('email','Nombre')!!}
+			{!! Form::text('Nombre',null,['class'=>'form-control','required'=>'required'])!!}
+		</div>
+		<div class="form-group">
+			{!! Form::label('email','Descripci&oacuten')!!}
+			{!! Form::text('Descripcion',null,['class'=>'form-control','required'=>'required'])!!}
+		</div>
+		<div class="form-group">
+			{!! Form::label('email','Estado')!!}
+			{!! Form::text('estado',null,['class'=>'form-control','required'=>'required'])!!}
+		</div>		
+		<div class="form-group">
+			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
+		</div>
+		{!! Form::close() !!}
+	</div>
+</div>
+</div>
+@endsection