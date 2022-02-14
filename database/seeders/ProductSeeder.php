<?php

namespace Database\Seeders;

use App\Models\Products;
use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::truncate();
        Products::insert([
            [
                'product_name' => 'Banana',
                'description' => 'questa è una banana gialla, molto lunga e gustosa',
                'price' => '0.30',
                'quantity' => 20
            ],[
                'product_name' => 'Mela',
                'description' => 'questa è una mela rossa, molto grande e gustosa',
                'price' => '0.25',
                'quantity' => 20
            ]
        ]);
    }
}
