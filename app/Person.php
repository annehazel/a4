<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
        
        
    public function biographies() {
		# A person has many biographies
		return $this->hasMany('App\Biography');
	}
	
	# app/Author.php
	public static function peopleForDropdown() {

		$people = Person::orderBy('name_last', 'ASC')->get();
		$peopleForDropdown = [];
		foreach($people as $person) {
			$peopleForDropdown[$person->id] = $person->name_first.', '.$person->name_last;
		}

    return $personForDropdown;
}
	
	
	
	
}
