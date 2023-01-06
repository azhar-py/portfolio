<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $users =  [
            [
              'name' => 'Admin',
              'email' => 'admin@admin.com',
              'password' =>bcrypt('123admin'),
              'role' =>'admin',
              'email_verified_at'=>NOW(),
            ]

        ];
        User::insert($users);
    }
}
