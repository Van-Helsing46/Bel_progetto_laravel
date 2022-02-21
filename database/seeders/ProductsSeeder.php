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
                'titolo' => 'Lettiera per gatti',
                'descrizione' => 'Lettiera assorbente per gatto irriverente',
                'prezzo' => 20.50,
                'seller_id'=>1,
                'quantita' => 3
            ],[
                'titolo' => 'Macchina per PopCorn',
                'descrizione' => 'Bella macchina funzionale',
                'prezzo' => 49.99,
                'seller_id'=>2,
                'quantita' => 20,
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
