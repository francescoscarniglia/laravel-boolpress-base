<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    //mass assign
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'avatar'
    ];

    // remove timestamps
    public $timestamps = false;

    // db relationship

    // users (1 to 1)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
