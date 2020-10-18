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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::unguard();
        Post::truncate();
        factory(Post::class,10)->create();
        Post::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Post::create([
            'id' => 11,
            'user_id' => 11,
            'title' => 'membuat martabak keju',
            'slug' => 'membuat-martabak-keju',
            'content' => 'martabak keju adalah salah satu makanan yang saat ini sedang banyak di minati',
            'created_by' => 11,
            'updated_by' => 11,
        ]);

    }
}
