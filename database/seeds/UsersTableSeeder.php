<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //create a user
        $veeru = User::create([
            'name' => 'admin',
            'email' => 'admin@yopmail.com',
            'password' => bcrypt('qwerty'),
        ]);
        $veeru = User::create([
            'name' => 'dev1',
            'email' => 'dev1@yopmail.com',
            'password' => bcrypt('qwerty'),
        ]);
        $veeru = User::create([
            'name' => 'dev2',
            'email' => 'dev2@yopmail.com',
            'password' => bcrypt('qwerty'),
        ]);




    }


}
