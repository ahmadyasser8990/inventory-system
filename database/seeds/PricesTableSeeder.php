<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Price::create([
            'gold'=> '2.03',
            'dimaond'=> '12.0',
            'baguette'=> '0.23',
            'marquis'=> '0.25',
            'big_stone'=> '1.03',
            'princess'=> '1.56',
        ]);
    }
}
