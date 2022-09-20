<?php

use App\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // normal user = 3
        $user = new User();
        $user->FirstName = 'John';
        $user->LastName = 'Doe';
        $user->Email = 'john.doe@gmail.com';
        $user->password = bcrypt('123456');
        $user->MobileNumber = '123456';
        $user->gender = 'male';
        $user->role = 3;
        $user->save();


        // manager user = 2
        $user = new User();
        $user->FirstName = 'manager';
        $user->LastName = 'manager';
        $user->Email = 'manager@gmail.com';
        $user->password = bcrypt('123456');
        $user->MobileNumber = '123456';
        $user->gender = 'male';
        $user->role = 2;
        $user->save();

        // admin user = 1
        $user = new User();
        $user->FirstName = 'admin';
        $user->LastName = 'admin';
        $user->Email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->MobileNumber = '123456';
        $user->gender = 'male';
        $user->role = 1;
        $user->save();
    }
}
