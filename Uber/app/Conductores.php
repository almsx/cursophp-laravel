<?php

namespace Uber;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
   	protected $table = 'Conductores';
    protected $fillable = ['nombre','aPaterno','aMaterno','idEstado','telefono','fotografia','usuarioC','passwordC'];
    public $timestamps = false;
	protected $primaryKey = 'idConductor';
	
	/* resetearemos la password :) */
	public function setPasswordAttribute($valor){
		if(!empty($valor)){
			$this->atributes['passwordC'] = \Hash::make($valor);
		}
	}

	

}
