<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::unguard();
        Post::truncate();
        factory(Post::class,10)->create();
        Post::reguard();
    }
}
