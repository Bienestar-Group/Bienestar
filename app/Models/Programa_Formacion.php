<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa_Formacion extends Model {

	//
	protected $table = 'programa_formacion';
	protected $fillable = ['nombre','duracion','nivel','modalidad','descripcion','estado'];
	protected $guarded = ['id'];

}
