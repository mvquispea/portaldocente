<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

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
               'email'=>'user@cambotutorial.com',
               'role'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Editor',
               'email'=>'editor@cambotutorial.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@cambotutorial.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
            
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
