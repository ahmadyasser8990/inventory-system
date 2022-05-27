<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = ['ahmadyasser','Ammar yasser','Noor ahmed','Nouf','Almas','Atheer'];

            foreach($suppliers as $supplier){
                \App\Supplier::create([
                    'name'=> $supplier,
                    'phone'=> '055211145',
                    'tax_no'=> '111256521',
                    'commercial_register'=> '155569800025',
                ]);
            }
    }
}
