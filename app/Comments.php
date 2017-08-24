<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";
    protected $fillable = ['comment','status''approved_at','post_id','uscomment_id','admin_id'];
}
