<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    // mass assign
    protected $fillable =  [
        'product_id',
        'title',
        'body'
    ];

    // relations
    public function product() {
        return $this->belongsTo('App\Product');
    }
}
