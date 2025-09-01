<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), // password default: "password"
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'sekretaris',
            'email' => 'sekretaris@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'sekretaris',
        ]);

        User::create([
            'name' => 'inspektur',
            'email' => 'inspektur@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'inspektur',
        ]);

        User::create([
            'name' => 'farhan',
            'email' => 'farhanpalilati01@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'irban',
            'email' => 'irban1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
    }

