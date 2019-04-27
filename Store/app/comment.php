<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function file()
    {
    	return $this->belongsTo(file::class);
    }
}
