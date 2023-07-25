<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            [
               'name'=>'admin',
               'email'=>'admin@admin.com',
               'role_id'=>'1',
               'phone'=>'6788878383',
               'password'=> bcrypt('admin123'),
            ],
            [
               'name'=>'user',
               'email'=>'user@user.com',
               'role_id'=>'0',
               'phone'=>'6788878383',
               'password'=> bcrypt('user123'),
            ],
          
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
