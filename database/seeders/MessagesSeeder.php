<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;
use DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Message::truncate();
        Message::insert([
            [
                'user_id' => 1,
                'seller_id' => 1,
                'messaggio' => 'Grazie per avermi venduto le bocce, ora posso vedere le tue?',
                'direzione' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 1,
                'seller_id' => 1,
                'messaggio' => 'No',
                'direzione' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 1,
                'seller_id' => 1,
                'messaggio' => 'Come mai? Sarebbe proprio bello vedere le tue',
                'direzione' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 1,
                'seller_id' => 1,
                'messaggio' => 'Sei stato segnalato al sistema, il tuo account verrà cancellato',
                'direzione' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'messaggio' => 'Grazie per avermi venduto la poltrona, molto bella',
                'direzione' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'messaggio' => 'Prego, spero comprerai altro',
                'direzione' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'messaggio' => 'No, arrivederci',
                'direzione' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'messaggio' => ':\'(',
                'direzione' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
