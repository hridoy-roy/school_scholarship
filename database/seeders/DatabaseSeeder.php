<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Institute;
use App\Models\StudentClass;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'is_admin' => true,
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345678'),
        ]);

        Institute::create([
            'name' => 'Dhaka School'
        ]);
        StudentClass::create([
            'name' => 'One'
        ]);
    }
}
