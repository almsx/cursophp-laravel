<?php

namespace Uber;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    //
    protected $table = 'Conductores';
    protected $fillable = ['nombre','aPaterno','aMaterno','idEstado','telefono','fotografia','usuarioC','passwordC'];
    //protected $hidden = ['updated_at'];
	public $timestamps = false;
	protected $primaryKey = 'idConductor';
	//protected $hidden = ['passwordC'];

	/* resetearemos la password :) */
	public function setPasswordAttribute($valor){
		if(!empty($valor)){
			$this->atributes['passwordC'] = \Hash::make($valor);
		}
	}

	

}
