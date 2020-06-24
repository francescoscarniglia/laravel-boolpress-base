<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    //relationship

    // posts

    public function posts() {
        return $this->belongsToMany('App\Post'); // alternativa a ::class
    }
}
