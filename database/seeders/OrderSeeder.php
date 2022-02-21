<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use DB;

class OrderSeeder extends Seeder
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
                'quantita' => '2',
                'prezzo' => 46.90,
                'costo_spedizione' => 5.90,
                'indirizzo' => 'Viale dei cazzi lunghissimi n 43cm'
            ],[
                'user_id' => '2',
                'product_id' => '1',
                'quantita' => '5',
                'prezzo' => 80.10,
                'costo_spedizione' => 3.30,
                'indirizzo' => 'Via delle fighe aperte n 69'
            ],[
                'user_id' => '1',
                'product_id' => '2',
                'quantita' => '10',
                'prezzo' => 70.50,
                'costo_spedizione' => 1.10,
                'indirizzo' => 'Largo delle gole profonde n 42'
            ],[
                'user_id' => '2',
                'product_id' => '2',
                'quantita' => '7',
                'prezzo' => 10.90,
                'costo_spedizione' => 3.90,
                'indirizzo' => 'Piazza tetta n quarta'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
