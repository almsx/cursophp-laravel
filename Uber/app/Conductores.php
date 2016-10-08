<?php

namespace Uber;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    //
    protected $table = 'Conductores';
    protected $fillable = ['nombre','aPaterno','aMaterno','idEstado','telefono','fotografia'];
    //protected $hidden = ['updated_at'];
	public $timestamps = false;

}
