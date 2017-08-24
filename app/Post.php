<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
	use HasSlug;
	protected $table = "posts";
    protected $fillable = ['title','slug','subtitle','user_id','category_id','content','type','status','dateposted'];

    public function getSlugOptions(): SlugOptions{
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    
    
    
    
    
    
 }
