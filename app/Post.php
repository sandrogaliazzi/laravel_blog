<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'content', 'path_to_image'];

    public function author(){
        return $this->belongsTo('App\User');
    }

    public function coments(){
        return $this->hasMany('App\Coment', 'post_id');
    }
}
