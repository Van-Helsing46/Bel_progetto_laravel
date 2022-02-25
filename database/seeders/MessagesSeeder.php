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
                'message' => 'Grazie per avermi venduto le bocce, ora posso vedere le tue?',
                'direction' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 1,
                'seller_id' => 1,
                'message' => 'No',
                'direction' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 1,
                'seller_id' => 1,
                'message' => 'Come mai? Sarebbe proprio bello vedere le tue',
                'direction' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 1,
                'seller_id' => 1,
                'message' => 'Sei stato segnalato al sistema, il tuo account verrà cancellato',
                'direction' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'message' => 'Grazie per avermi venduto la poltrona, molto bella',
                'direction' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'message' => 'Prego, spero comprerai altro',
                'direction' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'message' => 'No, arrivederci',
                'direction' => 0,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'user_id' => 2,
                'seller_id' => 2,
                'message' => ':\'(',
                'direction' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
