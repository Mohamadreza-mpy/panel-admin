<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function deleteRole($role)
    {
        return $this->roles()->detach($role);
    }

    public function hasPermission($access)
    {

        $roles = [];
        $user_roles = auth()->user()->roles;
        foreach ($user_roles as $role) {
            $permission = unserialize($role->permission);
            if($permission){
                $roles = array_merge($roles, $permission);
            }
        }
        foreach($roles as $role){
            if($role == $access){
                return true;
            }
        }



        return false;
    }

}
