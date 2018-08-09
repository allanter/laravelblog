<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name. By default name will be 'Post'. Protected will make sure name is 'posts'.
    protected $table = 'posts';

    // changing primary key
    public $primaryKey = 'id';

    // Timestamps, true by default
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    // this function belongs to a user
}
