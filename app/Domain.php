<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
	public function client(){
    	return $this->belongsTo('App\Client','client_id','id');
    }
    
}
