<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

       // ADMIN
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('#1geheim'),
            'role' => '1',
        ]);
        
        // USER
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('12345'),
            'role' => '0',
        ]);

        // USER 2
        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => Hash::make('6789'),
            'role' => '0',
        ]);
    }
}
