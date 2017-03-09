<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class userTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'prueba1',
            'email' => 'prueba1@prueba.com',
            'password' => bcrypt('prueba1'),
        ]);
            
        User::create([
            'name' => 'prueba2',
            'email' => 'prueba2@prueba.com',
            'password' => bcrypt('prueba2'),
        ]);
    }
}
