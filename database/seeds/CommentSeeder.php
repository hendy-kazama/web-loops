<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::unguard();
        Comment::truncate();
        factory(Comment::class,10)->create();
        Comment::reguard();
    }
}
