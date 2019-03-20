<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    public function run() {
    DB::table('users')->insert([
        'name' => 'ADMIN',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('a1b2c3'),
        'role' => 0
    ]);
    DB::table('users')->insert([
        'name' => 'USER',
        'email' => 'user@gmail.com',
        'password' => bcrypt('a1b2c3'),
        'role' => 1
    ]);
 }
}