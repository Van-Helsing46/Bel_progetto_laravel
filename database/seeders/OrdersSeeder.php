<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Order::truncate();
        Order::insert([
            [
                'user_id' => '1',
                'product_id' => '1',
                'quantity' => '2',
                'price' => 46.90,
                'shipping_price' => 5.90,
                'shipping_address' => 'Viale dei cazzi lunghissimi n 43cm',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => '2',
                'product_id' => '1',
                'quantity' => '5',
                'price' => 80.10,
                'shipping_price' => 3.30,
                'shipping_address' => 'Via delle fighe aperte n 69',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => '1',
                'product_id' => '2',
                'quantity' => '10',
                'price' => 70.50,
                'shipping_price' => 1.10,
                'shipping_address' => 'Largo delle gole profonde n 42',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => '2',
                'product_id' => '2',
                'quantity' => '7',
                'price' => 10.90,
                'shipping_price' => 3.90,
                'shipping_address' => 'Piazza tetta n quarta',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
