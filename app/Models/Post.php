<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // relacion de n a muchos pero inversa
    public function user(){
        return $this->belongsTo(User::class);
        //return $this->hasMany('App\Models\User')
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
        //return $this->hasMany('App\Models\Categoria')
    }
}
