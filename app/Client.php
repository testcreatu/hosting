<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function domain(){
    	return $this->hasMany('App\Domain');
    }
}
