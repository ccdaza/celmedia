<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Services;

class ServicesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([
            'name' => 'service1',
            'description' => 'Primer servicio',
            'state_id' => 1,
        ]);
            
        Services::create([
            'name' => 'service2',
            'description' => 'Segundo servicio',
            'state_id' => 1,
        ]);
        
        Services::create([
            'name' => 'service3',
            'description' => 'Tercer servicio',
            'state_id' => 1,
        ]);
    }
}
