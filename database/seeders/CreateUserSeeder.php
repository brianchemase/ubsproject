<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@ubs.org',
               'role'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@ubs.org',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Supervisor',
               'email'=>'supervisor@ubs.org',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user)
        {
            User::create($user);
        }
    }

}
