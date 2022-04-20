<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();
        $u->name =("James Smith");
        $u->email =("jam3es213213@smith.com");
        $u->bio =("Hello welcome to my profile!");
        $u->password =("testpass1234");
        $u->save();

        User::factory()->count(50)->create();

    }
}
