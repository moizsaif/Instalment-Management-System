<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'cnic',
        'contact',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

//    public function hasAnyRole($role)
//    {
//        if ($this->hasRole($role)) {
//            return true;
//        }
//        return false;
//    }

    public function hasRole($role)
    {
        if ($this->role->name == $role) {
            return true;
        }
        return false;
    }
}
