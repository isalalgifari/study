<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CheckUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'user@mail.com',
            'name'  => 'user',
            'password' => Hash::make('user'),
            'role_id'  => 2
        ]);
    }
}
