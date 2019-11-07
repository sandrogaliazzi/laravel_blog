<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = ['post_id', 'author_id', 'content'];

    public function post(){
        return $this->belongsTo('App\Post');
    }

    public function author(){
        return $this->belongsTo('App\User');
    }
}

