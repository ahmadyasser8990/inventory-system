<?php

use Illuminate\Database\Seeder;

class ExpensesimportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taxes = ['مصروف مع ابومحمد','مصروف مع محمد يسلم','مصروف مع محمد'];

        foreach($taxes as $tax){
            \App\Expenseimport::create([
                'name'=> $tax,
                'amount'=> '1100',
                'type'=> 'مصروف',
                'note'=> 'مصروف',
            ]);
        }
    }
}
