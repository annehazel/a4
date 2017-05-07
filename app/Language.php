<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    
    
    public function biographies() {
		# Person has many biographies
		return $this->hasMany('App\Biography');
	}
    
}
