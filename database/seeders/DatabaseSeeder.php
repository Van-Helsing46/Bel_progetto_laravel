<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            ProductsSeeder::class,
            SellerSeeder::class,
            OrderSeeder::class,
            MessagesSeeder::class
        ]);
    }
}
