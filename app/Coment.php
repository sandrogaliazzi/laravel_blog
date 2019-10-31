<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = ['post_id', 'author_id', 'content'];
}
