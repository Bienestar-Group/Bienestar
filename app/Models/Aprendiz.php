<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model {

	//
	protected $table = 'aprendiz';
	protected $fillable = ['tipo_documento','documento','nombre','primer_apellido','segundo_apellido','telefono','email','direccion','genero','fecha_nacimiento','estado','ficha_caracterizacion'];
	protected $guarded = ['id'];

}
