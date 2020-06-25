<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assign
    protected $fillable = [

        'user_id',
        'title',
        'body',
        'slug'
    ];

    // db relationship

    // user (many to 1)
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // tags (many to many)

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
