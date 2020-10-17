<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Blameable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(Kelas::class, 'user_id', 'id');
    }
}
