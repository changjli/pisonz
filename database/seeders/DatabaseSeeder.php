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
        Game::create([
            'name' => 'PUBG',
            'image' => 'https://s3-alpha-sig.figma.com/img/40ab/52d1/562c3ca423d6db55aabed928f148a171?Expires=1698019200&Signature=avPww4aHBsa9ZeldNHjiYowvDICHVMWPa-DEzMuT-ue3f0eB12vVRR-Tmjlx-lhnMPPC2cRfpy1fH7i6eelENerOWzR3Vh10Ridv0bMD9Bvj7x6C3Q72Cf46z1iWiYKTbh~k6dJHbNBWYbEQhwxEJBE89snYjbFIcIS-eGaCp2G6t8t50lJ8-ry6j~-73~Ui48ARvjxPjwazD0ixiigFhKeMsISTSnvqMMqKcqqqlxsUUV6GjsVFKi2mTde2y8OBDH76gnOngBe-EWZZBGQyx7bat3-~5G1tS6Kc2Yw7EugW1T2XH~mBzfu6DUxuXsnT4t~OvgQaq8tWP0GY3TcGUA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4'
        ]);

        Game::create([
            'name' => 'Mobile Legends',
            'image' => 'https://s3-alpha-sig.figma.com/img/de7c/c13c/8497dd7d8bc81261734ccd14307d051b?Expires=1698019200&Signature=RrsZEnCae0X4A8rcP5joS3nCS0FcHR12Y1z~VufmT~X~oNmup8EiTk~UNGatsoMOH61EQCyawY3qzhSr0sGHqM2CnDpH48zjjvlDzO-he10CG4uxBjhqj~-B6NtHUXXHs6w~DMcw~wf9IMu6ah5HorOQWouyUYUushH6OnjXAhAfZ6KohVk4A2f9DGDNpH2t4FIa32MhdpxLqvdgfz1YGvPiBsZOGdcABY4TuHSu-msxGBisbz65GSKqTO8Fxopj7AdTfERxOFBIc4omEluZq-c9RDqVIQQRqaosvdq8MmDKakYeEAjM55meXpH~heN2y2NUtYqBwRiP2hB4fSfxxw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4'
        ]);

        Game::create([
            'name' => 'Genshin Impact',
            'image' => 'https://s3-alpha-sig.figma.com/img/5b7a/bb61/cdf4cd3372d107e34d869332d4527774?Expires=1698019200&Signature=UbbZ1ZuWpPSAgKKRAAI9zY8DPC7qKcm~~PQWanCJmtZfrLhzwuFl6QWBbNBw2Fb7lvnRYM3ifeylHFe4UnK5cIlw303qTTe1LjjZGNKw~SIedrfIMn-XsKAN3IQsV~pt48lR-eeHCsrxoYEdbXdl~80fY8U1izkMcj4qC1sDPLjiYYkZqwdxymMCVdNoJ56TVeBJzYprKSxziSgFX8291wDl-2Yc8HBTXCyB4~VnL2eodnXsrxNUO0rN0ihsZ6G2ZmARjBhG4sIzbTA9WtdkTWKLcSoLD7hIyC6n4Wz135DTA5u0~b4jjV0EPR-1bfjcNq9ftGiAElCGNqRTbZLh5Q__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4'
        ]);

        Game::create([
            'name' => 'Free Fire',
            'image' => 'https://s3-alpha-sig.figma.com/img/184a/022a/013a01428b29bdc20fb345cfd6a0dd71?Expires=1698019200&Signature=qR-jLNBF1MIJFSX38iJc-oDF3hfwFJ2zWXloB~OPpQTT9y9p2icSSw-f5lGkeyWeOLNcg6v2HYAnzG7UylUGoG1DYDsv3zZQd3Nc2HbUhWIp-52l7OgQGH9U01OzlOMwwf65K~GfdTGoTFMfunTxp72J7siQ5oR~JdEqDvkK9OGNqWXRAAqdumH7Jk0TyKqLsLV8gOJuWs5KUJAvyIML7QSWOkOxre8DwHGDsiXb3WBCqahJ8ww4jDee1YIiLJds8lXuKLzmDJ---gCLKMGDHzDsW2BY-uZt33fi0CrE9SnU3OC4sSdB7XxPRrO3KkWGB7MD5FF~xVNl~GnNbQvPRw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4'
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
            'account_name' => 'Sondy',
        ]);

        Payment::create([
            'method' => 'Gopay',
            'account_number' => '123456789',
            'account_name' => 'Sondy',
        ]);

        Payment::create([
            'method' => 'Dana',
            'account_number' => '123456789',
            'account_name' => 'Sondy',
        ]);
    }
}
