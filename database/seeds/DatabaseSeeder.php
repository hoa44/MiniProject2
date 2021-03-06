<?php

use App\Cars;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        factory(App\User::class, 50)->create()->each(function ($u) {

            //$u->posts()->save(factory(App\Post::class)->make());
            $u->cars()->save(factory(App\Cars::class)->make());
        });
    }
}
