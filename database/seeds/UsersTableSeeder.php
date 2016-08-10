<?php

use App\User;
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

        User::create(array(
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
        ));

        User::create(array(
            'username' => 'user2',
            'email' => 'user2@user.com',
            'password' => bcrypt('user2'),
        ));

    }
}
