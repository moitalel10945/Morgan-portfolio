<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $guarded=[];
    protected static function booted(){
        static::creating(function($post){
            $post->slug=Str::slug($post->title);
            $original=$post->slug;
            $count=1;
            while(BlogPost::where('slug',$post->slug)->exists()){
                $post->slug=$original . '-' . $count++;
            }
        });
    }
}
