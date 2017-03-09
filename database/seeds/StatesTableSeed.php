<?php

use Illuminate\Database\Seeder;
use App\States;

class StatesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        States::create([
            'state' => 'activo'
        ]);
            
        States::create([
            'state' => 'inactivo'
        ]);
    }
}
