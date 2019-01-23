<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $table = 'user';


//types d'utilisateurs que l'on souhaite utiliser
    const BDE_TYPE = '1';
    const STUDENT_TYPE = '2';
    const EMPLOYEE_TYPE = '3';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function roles()
{
  return $this->belongsToMany(User::class);
}
public function authorizeRoles($roles)
{
  if (is_array($roles)) {
      return $this->hasAnyRole($roles) || 
             abort(401, 'This action is unauthorized.');
  }
  return $this->hasRole($roles) || 
         abort(401, 'This action is unauthorized.');
}
public function hasAnyRole($roles)
{
  return null !== $this->roles()->whereIn('role', $roles)->first();
}
public function hasRole($role)
{
  return null !== $this->roles()->where('role', $role)->first();
}

    //Fonctions de verification des différents utilisateurs
    public function isBDE(){
        return $this->UserStatus_ID === self::BDE_TYPE;
    }

    public function isStudent(){
        return $this->UserStatus_ID === self::STUDENT_TYPE;
    }

    public function isEnmployee(){
        return $this->UserStatus_ID === self::EMPLOYEE_TYPE;
    }
    protected $fillable = [
        'lastname', 'name', 'email', 'password', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
