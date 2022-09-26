<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
        $this->hasMany('App\Models\Post');
    }
}
