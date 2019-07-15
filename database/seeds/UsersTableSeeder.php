<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 'admin', 10)->create()->each(function ($user){
//        $user->profile()->save(factory(App\Profile::class, 'admin')->make());
        $user->orgonization()->save(factory(App\Practice::class, 'admin')->make());
    });
    }
}
