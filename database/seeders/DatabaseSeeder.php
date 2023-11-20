<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pizza;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Miguel Inzunza',
            'email' => 'miguel.inzunza@ejemplo.cl',
            'password' => Hash::make('userpizza')
        ]);

        Pizza::factory(5)->create();


        
    }
}
