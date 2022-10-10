<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@to.com',
                'password' => '1234567890',
                'role_as' => '1',     
            ],[
                'name' => 'User',
                'email' => 'user@to.com',
                'password' => '1234567890',
                'role_as' => '0',     
            ]       
        ];

        foreach($users as $key => $value) {
            User::create($value);
        }*/

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@to.com',
                'password' => '$2y$10$OCNl0jKdpJ/PAFNjMunrvO04MJF.sOx/9MeUVvdpZ7fIkQVDn1KY6',
                'role_as' => '1',     
            ],[
                'name' => 'User',
                'email' => 'user@to.com',
                'password' => '$2y$10$OCNl0jKdpJ/PAFNjMunrvO04MJF.sOx/9MeUVvdpZ7fIkQVDn1KY6',
                'role_as' => '0',     
            ]
        ]);
    }
}
