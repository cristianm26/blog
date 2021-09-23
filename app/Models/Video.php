<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // relacion de 1 a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
        //return $this->hasMany('App\Models\User')
    }
}
