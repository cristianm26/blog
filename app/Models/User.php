<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
class User extends Authenticatable
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
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relacion uno a uno
    public function profile(){
       // $profile = Profile::where('user_id', $this->id)->first();
        return $this->hasOne(Profile::class);
    }

    // Relacion de uno a muchos
    public function post(){
        return $this->hasMany(Post::class);
         //return $this->hasMany('App\Models\Post')
    }

      // Relacion de uno a muchos
      public function videos(){
        return $this->hasMany(Video::class);
         //return $this->hasMany('App\Models\Video')
    }

    // Relacion de muchos a muchos
    public function role(){
        return $this->belongsToMany(Role::class);
          //return $this->belongsToMany('App\Models\Role')
    }
}
