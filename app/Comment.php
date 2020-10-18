<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function hasUser()
    {
        
        // return $this->hasManyThrough(User::class, Post::class);
        return $this->hasOneThrough(
            'App\User',
            'App\Post',
            'user_id', // Foreign key dari posts table...
            'id', // Foreign key on history table...
        );

    }

}
