<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Esteban Mora',
            'email' => 'estebanmora_93@hotmail.com',
            'password' => bcrypt('123456'),
            'avatar' => 'https://graph.facebook.com/v2.9/10203470788806894/picture?type=normal',
            'user_type' => 1,
        ]);
    
    }
}
