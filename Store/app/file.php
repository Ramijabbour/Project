<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo(User::class);
    }


    public function category()
    {
    	return $this->belongsTo(category::class);
    }

    public function comment()
    {
    	return $this->hasMany(comment::class);
    }


    public function rate()
    {
        return $this->hasMany(rate::class);
    }
    //operation many to many ??  
    //app game movie ..... one to one ?
}
