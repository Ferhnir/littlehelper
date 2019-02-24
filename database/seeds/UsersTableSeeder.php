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
        DB::table('users')->insert([
            'name' => 'Max Zdunski',
            'email' => 'zax1984@gmail.com',
            'password' => '$2y$10$cjKNgvMfk1OZRivgpXKdQeK0LTklgxpOxtG3OhndDyulWieUwIP8.',
            'email_verified_at' => '2019-02-23 03:41:16',
            'created_at' => '2019-02-23 03:40:55',
        ]);
    }
}
