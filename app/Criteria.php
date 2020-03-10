<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    public $guarded = [];
    
    public function users() {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}
