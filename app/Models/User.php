<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast. m
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setPasswordAttribute($password){
    //     $this->attributes['password'] = Hash::make($password);
    // }

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }


    /**
     * check if the user has a role
     * @param string $role
     * @return bool
     */
    public function hasAnyRole(string $role){
        //checking if the role relationship where the name in the DB has the role passed in
        //if it passes it'll redirect to the view on userController index()
        // if it fails it'll die on userControler index()
        return null !== $this->roles()->where('name', $role)->first();
    }


    /**
     * checks if the user has any given role
     * @param array $role
     * @return bool
     */
    public function hasAnyRoles(array $role){
        return null !== $this->roles()->whereIn('name', $role)->first();
    }
}
