<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function videos()
    {
        return $this->belongsToMany('App\Models\Video', 'tags_videos');
    }
}
