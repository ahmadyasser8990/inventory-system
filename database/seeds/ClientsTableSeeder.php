<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = ['ahmadyasser','Ammar yasser','Noor ahmed','Nouf','Almas','Atheer'];

            foreach($clients as $client){
                \App\Client::create([
                    'name'=> $client,
                    'phone'=> '055211145',
                    'tax_no'=> '111256521',
                    'address'=> 'Nahar As Sind, An Nafal Nahar As Sind, An Nafal, Riyadh 13312',
                    'gold_price'=> '0.25',
                    'dimaond1_price'=> '0.29',
                    'dimaond2_price'=> '1.23',
                    'dimaond3_price'=> '5.78',
                    'dimaond4_price'=> '0.00',
                    'dimaond5_price'=> '0.36',
                    'baguette_price'=> '0.12',
                    'marquis_price'=> '0.10',
                    'big_stone_price'=> '0.15',
                    'princess_price'=> '0.24',
                    'colored_price'=> '0.01',
                ]);
            }
    }
}
