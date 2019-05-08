<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name' => 'nam.dang','email' => 'nam.dang@gmail.com',  'password' => Hash::make('123456'), 'level' => '1'],
        	['name' => 'van.le','email' => 'van.le@gmail.com', 'password' => Hash::make('123456'), 'level' => '1'],
        	['name' => 'thao.tran','email' => 'thao.tran@gmail.com',  'password' => Hash::make('123456'), 'level' => '2'],
        	['name' => 'thieu.ho','email' => 'thieu.ho@gmail.com',  'password' => Hash::make('123456'),'level' => '2'],
        	
        ]);
    }
}
