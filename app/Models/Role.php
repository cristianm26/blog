<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relacion de muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
          //return $this->belongsToMany('App\Models\User')
    }


    // Relacion de muchos a muchos
    public function permisos(){
        return $this->belongsToMany(Permiso::class);
          //return $this->belongsToMany('App\Models\Permiso')
    }
}
