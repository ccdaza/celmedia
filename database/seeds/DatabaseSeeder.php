<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userTableSeed::class);
         $this->call(StatesTableSeed::class);
         $this->call(ServicesTableSeed::class);
    }
}
