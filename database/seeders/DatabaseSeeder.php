<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Game;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // user 
        User::create([
            'name' => 'Nicholas Audric',
            'email' => 'nicholasaudric@gmail.com',
            'password' => 'password',
            'status' => 'super',
        ]);

        // games 
        Game::factory()->create([
            'name' => 'Mobile Legend',
        ]);
        Game::factory()->create([
            'name' => 'PUBG',
        ]);
        Game::factory()->create([
            'name' => 'Free Fire',
        ]);
        Game::factory()->create([
            'name' => 'Genshin Impact',
        ]);

        // categories
        Category::factory(10)->create();

        // products
        Product::factory(20)->create();

        // payments
        Payment::factory()->create([
            'method' => 'BCA',
        ]);
    }
}
