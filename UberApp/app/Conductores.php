<?php

namespace Uber;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
//class Conductores extends Model
///class Conductores extends Eloquent implements UserInterface, RemindableInterface 
class Conductores extends Eloquent implements UserInterface, RemindableInterface 
{
    //
    protected $table = 'Conductores';
    protected $fillable = ['nombre','aPaterno','aMaterno','idEstado','telefono','fotografia','usuarioC','password'];
    //protected $hidden = ['updated_at'];
	public $timestamps = false;
	protected $primaryKey = 'idConductor';
	//protected $hidden = ['passwordC'];

	/* resetearemos la password :) */
	public function setPasswordAttribute($valor){
		if(!empty($valor)){
			$this->atributes['password'] = \Hash::make($valor);
		}
	}

	

}
