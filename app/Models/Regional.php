<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model {

	protected $table = 'regional';
<<<<<<< HEAD
	protected $fillable = ['nombre_regional','direccion_regional','telefono_regional','pbx_regional','director_regional','telefono_director','estado_regional'];
=======
	protected $fillable = ['nombre','direccion','telefono','pbx','director','telefono_director','estado'];
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
	protected $guarded = ['id'];

}
