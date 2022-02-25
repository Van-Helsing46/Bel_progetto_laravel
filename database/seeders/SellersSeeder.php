<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use DB;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Seller::truncate();
        Seller::insert([
            [
                'name' => 'Joshua Porcella',
                'shop_name' => 'Porcellane per porcelline',
                'niggness_address' => 'via del membro eretto 32',
                'VAT_number' => 5619884,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'name' => 'Armando',
                'shop_name' => 'Hai mica un amaca',
                'niggness_address' => 'via Panama 25',
                'VAT_number' => 5682914,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
