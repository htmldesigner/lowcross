<?php

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

        $this->call(UsersTableSeeder::class);
//        DB::table('users')->insert([
//            'name' => 'Anton',
//            'email' => 'frontendmaster@uandex.ru',
//            'hint' => 'Anton',
//            'security_question' => 'Anton',
//            'secret_answer' => 'Anton',
//            'find_us' => 'Anton',
//            'password' => '11111',
//        ]);
    }
}
