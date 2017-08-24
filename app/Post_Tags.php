<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Tags extends Model
{
    protected $table = "post_tags";
    protected $fillable = ['post_id','tag_id'];
}
