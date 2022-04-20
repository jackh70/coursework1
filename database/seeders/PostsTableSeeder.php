<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\DatabaseS\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post();
        $p->title = ('My First Post!');
        $p->content = ('Look at this food!');
        $p->user_id = 1;
        $p->image_link = ('https://testlink.com');
        $p->save();

        Post::factory()->count(50)->create();

    }
}
