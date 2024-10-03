<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'olivia',
            'email'=>'olivia@gmail.com',
            'password'=>bcrypt('1234')
        ]);
        User::create([
            'name'=>'olaf',
            'email'=>'olaf@gmail.com',
            'password'=>bcrypt('1234')
        ]);
    }
}
