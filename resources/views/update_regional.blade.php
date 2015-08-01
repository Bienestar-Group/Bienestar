@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($regional,['route'=>'regional.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$regional->idl)!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
<<<<<<< HEAD
			{!! Form::text('nombre_regional',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Direcci&oacute;n')!!}
			{!! Form::text('direccion_regional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tel&eacute;fono')!!}
			{!! Form::text('telefono_regional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','PBX')!!}
			{!! Form::text('pbx_regional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Director')!!}
			{!! Form::text('director_regional',null,['class'=>'form-control','required'=>'required'])!!}
=======
			{!! Form::text('nombre',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Direcci&oacute;n')!!}
			{!! Form::text('direccion',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tel&eacute;fono')!!}
			{!! Form::text('telefono',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','PBX')!!}
			{!! Form::text('pbx',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Director')!!}
			{!! Form::text('director',null,['class'=>'form-control','required'=>'required'])!!}
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
		</div>	
		<div class="form-group">
			{!! Form::label('email','Tel&eacute;fono Director')!!}
			{!! Form::text('telefono_director',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
<<<<<<< HEAD
			{!! Form::text('estado_regional',null,['class'=>'form-control','required'=>'required'])!!}
=======
			{!! Form::text('estado',null,['class'=>'form-control','required'=>'required'])!!}
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
		</div>		

		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection