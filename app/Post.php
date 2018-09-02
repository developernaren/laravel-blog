<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content','slug'];

    public function scopeSlugLike($query, $slug)
    {
        return $query->where('slug', 'like', $slug . '%');
    }
}
