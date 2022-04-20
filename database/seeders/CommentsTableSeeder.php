<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment();
        $c->content = ('Nice work!');
        $c->user_id = 1;
        $c->post_id = 1;
        $c->save();

        Comment::factory()->count(50)->create();
    }
}
