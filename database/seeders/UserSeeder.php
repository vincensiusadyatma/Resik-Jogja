<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            [
                'username' => 'greenwarrior',
                'fullname' => 'John Doe',
                'age'      => 25,
                'email'    => 'john@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'earthlover',
                'fullname' => 'Sarah Johnson',
                'age'      => 28,
                'email'    => 'sarah@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'ecohero',
                'fullname' => 'Michael Smith',
                'age'      => 22,
                'email'    => 'michael@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'natureguard',
                'fullname' => 'Emily Davis',
                'age'      => 30,
                'email'    => 'emily@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'planetprotector',
                'fullname' => 'Robert Brown',
                'age'      => 27,
                'email'    => 'robert@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'forestkeeper',
                'fullname' => 'Jessica Wilson',
                'age'      => 24,
                'email'    => 'jessica@example.com',
                'password' => Hash::make('password123'),
            ],
        ]);

           DB::table('role_ownerships')->insert([
            [
                'user_id' => 1,
                'role_id' => 2,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ],
            [
                'user_id' => 2,
                'role_id' => 3,
            ],
            [
                'user_id' => 4,
                'role_id' => 3,
            ],
            [
                'user_id' => 5,
                'role_id' => 3,
            ],
              [
                'user_id' => 6,
                'role_id' => 3,
            ]
        ]);
    }
}
