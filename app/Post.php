<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
