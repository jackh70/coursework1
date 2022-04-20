<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l = new Like();
        $l->user_id = 40;
        $l->post_id = 1;
        $l->save();

        Like::factory()->count(50)->create();

    }
}
