<?php

use Illuminate\Database\Seeder;

class CryptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StockFlowSite\Crypto::class, 10)->create();
    }
}
