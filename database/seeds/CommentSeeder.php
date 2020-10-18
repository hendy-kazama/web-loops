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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Comment::unguard();
        Comment::truncate();
        factory(Comment::class,10)->create();
        Comment::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Comment::create([
            'id' => 11,
            'post_id' => 11,
            'name' => 'Hendi',
            'email' => 'hendi@gmail.com',
            'website' => 'www.martabak.com',
            'comment' => 'terimakasih telah berkomentar',
        ]);

    }
}
