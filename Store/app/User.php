<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function file()
    {
        return $this->hasMany(file::class);
    }

    public function comment()
    {
        return $this->hasMany(comment::class);
    }

    public function search()
    {
        return $this->hasMany(search::class);
    }
    // rate relation ???
    public function rate()
    {
        return $this->hasMany(rate::class);
    }

    public function message()
    {
        return $this->hasMany(message::class);
    } 
    public function operation()
    {
        return $this->hasMany(operation::class);
    }

}
