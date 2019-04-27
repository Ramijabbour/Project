<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
