<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    
    public function person() {
            # Biography belongs to Person
            return $this->belongsTo('App\Person');
        }
        
    public function language() {
            # Biography belongs to Person
            return $this->hasOne('App\Language');
        }
        
}
