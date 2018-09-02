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

    public function scopeWithSlug($query, $slug)
    {
        return $query->whereSlug($slug);
    }

    public function getUrlAttribute()
    {
        return route('posts.single', $this->slug);
    }

    public function getExcerptAttribute()
    {
        return str_limit($this->content, 100);
    }

    public function getEditUrlAttribute()
    {
        return route('posts.edit', $this->slug);
    }
}
