<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
        
        
    public function biographies() {
		# Person has many biographies
		return $this->hasMany('App\Biography');
	}
}
