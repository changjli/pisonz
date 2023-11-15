<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Banner;
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
        Game::create([
            'name' => 'PUBG',
            'image' => 'http://drive.google.com/uc?export=view&id=1c8d8G9geFvNuaR9BKxGQJKKxQu0BukHa'
        ]);

        Game::create([
            'name' => 'Mobile Legends',
            'image' => 'http://drive.google.com/uc?export=view&id=12sxNMp3LgbbNbOcmkY8YKoFYwPPCVzgZ'
        ]);

        Game::create([
            'name' => 'Genshin Impact',
            'image' => 'http://drive.google.com/uc?export=view&id=1TRSViu94TBKMUEx7WAzyZIuMAayxI3TI'
        ]);

        Game::create([
            'name' => 'Free Fire',
            'image' => 'http://drive.google.com/uc?export=view&id=16BaTaEdx4oz8c8tw1sSMdb5MD0rVFZXf'
        ]);

        // categories
        // Category::factory(10)->create();
        Category::create([
            'name' => 'Flash Promo Weekday',
            'game_id' => 2,
        ]);

        Category::create([
            'name' => 'Pricelist Paket B',
            'game_id' => 2,
        ]);

        // products 
        // Product::factory(20)->create();
        Product::create([
            'name' => '254 DM',
            'category_id' => 1,
            'price' => 61000,
            'quantity' => 50,
            'notes' => '254 diamond'
        ]);

        Product::create([
            'name' => '429 DM',
            'category_id' => 1,
            'price' => 92000,
            'quantity' => 50,
            'notes' => '429 diamond'
        ]);

        Product::create([
            'name' => '706 DM',
            'category_id' => 1,
            'price' => 151000,
            'quantity' => 50,
            'notes' => '706 diamond'
        ]);

        Product::create([
            'name' => '14 DM',
            'category_id' => 2,
            'price' => 3500,
            'quantity' => 50,
            'notes' => '14 diamond'
        ]);

        Product::create([
            'name' => '28 DM',
            'category_id' => 2,
            'price' => 6500,
            'quantity' => 50,
            'notes' => '28 diamond'
        ]);

        Product::create([
            'name' => '42 DM',
            'category_id' => 2,
            'price' => 9500,
            'quantity' => 50,
            'notes' => '42 diamond'
        ]);

        // payments
        Payment::create([
            'method' => 'BCA',
            'account_number' => '123456789',
            'img' => 'http://drive.google.com/uc?export=view&id=1ZVj7q0hBuQ64u2vAPi117uZ2HScZ46-X',
            'account_name' => 'Sondy',
        ]);

        Payment::create([
            'method' => 'Gopay',
            'account_number' => '123456789',
            'img' => 'http://drive.google.com/uc?export=view&id=1lsuzQxxXiOn1zNPy-Zg3wv8kPYS_Ci98',
            'account_name' => 'Sondy',
        ]);

        Payment::create([
            'method' => 'Dana',
            'img' => 'http://drive.google.com/uc?export=view&id=1EoXEIdU4hham1M82IAmOenKPRGVZGeuF',
            'account_number' => '123456789',
            'account_name' => 'Sondy',
        ]);

        Banner::create([
            'name' => 'Yu Zhong Buff',
            'image' => 'http://drive.google.com/uc?export=view&id=13hTXb4QjQVskudH7eZU1cY7wtyh92RGf'
        ]);

        Banner::create([
            'name' => 'Starlight',
            'image' => 'http://drive.google.com/uc?export=view&id=1pdjCFkAzHeiS3d6PrrCewXHVLcULhjSa'
        ]);

        Banner::create([
            'name' => 'Zodiac',
            'image' => 'http://drive.google.com/uc?export=view&id=1IrcJMpOIfMlVpJBkgrSXE3nM7q_eCj4h'
        ]);

        Banner::create([
            'name' => 'Flash Promo Weekday',
            'image' => 'http://drive.google.com/uc?export=view&id=13vrN1WigLmaioUg30xFfB0Ava_2ih294'
        ]);

        Banner::create([
            'name' => 'Skins Release Info',
            'image' => 'http://drive.google.com/uc?export=view&id=17yE23X2gezvYSxh5Vyp3Z05GxV323lSZ'
        ]);
    }
}
