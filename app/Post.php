<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Blameable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
