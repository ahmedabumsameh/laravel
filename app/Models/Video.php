<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
public function category()
{
    return $this->belongsTo('App\Models\Category');
}
public function tags()
{
    return $this->belongsToMany('App\Models\Tag', 'tags_videos');
}
public function skills()
{
    return $this->belongsToMany('App\Models\Skill', 'skills_videos');
}
public function user()
{
    return $this->belongsTo('App\User');
}
public function comments()
{
    return $this->hasMany('App\Models\Comment');
}
}
