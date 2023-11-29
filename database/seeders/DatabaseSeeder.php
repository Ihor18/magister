<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Agent',
                'slug' => 'agent',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'User',
                'slug' => 'user',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('users')->insert([
            [
                'role_id' => 1,
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'image' => 'default.png',
                'about' => 'Bio of admin',
                'password' => Hash::make('123456'),
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'role_id' => 2,
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@agent.com',
                'image' => 'default.png',
                'about' => '',
                'password' => Hash::make('123456'),
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'role_id' => 3,
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@user.com',
                'image' => 'default.png',
                'about' => null,
                'password' => Hash::make('123456'),
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);

    }
}
