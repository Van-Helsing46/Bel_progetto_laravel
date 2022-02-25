<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        User::insert([
            [
                'name' => 'Ciccio',
                'email' => 'ciccio@pasticcio.com',
                'phone_number' => '3182389012',
                'balance' => 5000,
                'password' => 'prova',
                'age' => 43,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],[
                'name' => 'Mario',
                'email' => 'mario@rossi.com',
                'phone_number' => '31823890212',
                'balance' => 5000,
                'password' => 'provda',
                'age' => 45,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Utilizzando la classe generica DB
        /*DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'Ciccio',
                'email' => 'ciccio@pasticcio.com',
                'phone_number' => '3182389012',
                'password' => 'prova',
                'age' => 43,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'name' => 'Pippo',
                'email' => 'pippo@franco.com',
                'age' => 81,
                'password' => 'prova',
                'phone_number' => '123812389',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);*/
    }
}
