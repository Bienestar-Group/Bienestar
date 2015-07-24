<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model {

	protected $table = 'regional';
	protected $fillable = ['nombre','direccion','telefono','pbx','director','telefono_director','estado'];
	protected $guarded = ['id'];

}
