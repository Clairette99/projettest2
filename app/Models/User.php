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

    protected $table="users";

   
    public function paiements (){
    
    return $this->hasMany(Paiement::class,"paiement_id");
    }

    public function roles(){
        return $this ->belongsToMany(Role::class,"user_role","user_id","role_id");
    }

    public function permissions(){
        return $this ->belongsToMany(Permission::class,"user_permission","user_id","permission_id");
    }
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    
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
}
