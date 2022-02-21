<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use DB;

class SellerSeeder extends Seeder
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
                'nome' => 'Joshua Porcella',
                'nome_negozio' => 'Porcellane per porcelline',
                'indirizzo_negrozzio' => 'via del membro eretto 32',
                'PIVA' => 5619884
            ],[
                'nome' => 'Armando',
                'nome_negozio' => 'Hai mica un amaca',
                'indirizzo_negrozzio' => 'via Panama 25',
                'PIVA' => 5682914
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
