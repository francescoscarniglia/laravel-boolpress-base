<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    //relationship

    // posts (many to many)

    public function posts() {
        return $this->belongsToMany('App\Post'); // alternativa a ::class
    }
}
