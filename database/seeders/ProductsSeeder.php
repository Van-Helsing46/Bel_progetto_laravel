<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        Product::insert([
            [
                'title' => 'Lettiera per gatti',
                'description' => 'Lettiera assorbente per gatto irriverente',
                'price' => 20.50,
                'seller_id'=>1,
                'quantity' => 3,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'title' => 'Macchina per PopCorn',
                'description' => 'Bella macchina funzionale',
                'price' => 49.99,
                'seller_id'=>2,
                'quantity' => 20,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
