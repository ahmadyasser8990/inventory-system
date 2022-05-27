<?php

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taxes = ['ضريبة البحرين',' ضريبة الامارات','ضريبة السعوديه'];

        foreach($taxes as $tax){
            \App\Tax::create([
                'name'=> $tax,
                'tax_no'=> '112540',
                'precentage'=> '15',
            ]);
        }
    }
}
