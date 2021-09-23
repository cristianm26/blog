<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
     // relacion de n a muchos 
     public function post(){
        return $this->hasMany(Post::class);
        //return $this->hasMany('App\Models\Post')
    }
}
