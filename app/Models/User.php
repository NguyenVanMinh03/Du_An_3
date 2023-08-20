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
        'hinhanh',
        'phone',
        'address',
      

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
        'password' => 'hashed',
    ];

    public function roles ()  {
return $this->belongsToMany(Role::class , table:"user_role" , foreignPivotKey:"user_id", relatedPivotKey:"role_id");
    }

    public function checkpermission($permissioncheck){
       
        $roles = auth()->user()->roles;
        foreach ($roles as $role) {
           $permission = $role->permissionrole;
           if ($permission->contains("key_colum",$permissioncheck)) {
          return true;
           }
        }
        return false;
    }

    public function showuser()
    {
       return User::select('id' ,'name' ,'hinhanh','email','phone','address')->get();
    }
}
