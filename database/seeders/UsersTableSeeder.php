<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert record
        DB::table('users')->insert([
            //admin
            [
                'firstname' => 'System',
                'lastname'  => 'Admin',
                'username'  => 'sysadmin',
                'email'     => 'admin@admin.com',
                'password'  => Hash::make('password'),
                'role'      => 'admin',
                'status'    => 'active'
            ],
            //agent
            [
                'firstname' => 'System',
                'lastname'  => 'Agent',
                'username'  => 'sysagent',
                'email'     => 'agent@agent.com',
                'password'  => Hash::make('password'),
                'role'      => 'agent',
                'status'    => 'active'
            ],
            //user
            [
                'firstname' => 'System',
                'lastname'  => 'User',
                'username'  => 'sysuser',
                'email'     => 'user@user.com',
                'password'  => Hash::make('password'),
                'role'      => 'user',
                'status'    => 'active'
            ]
        ]);
    }
}
