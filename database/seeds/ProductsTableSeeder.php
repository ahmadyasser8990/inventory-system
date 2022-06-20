<?php

use App\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item_nos = ['10001','10002','10003','10004','10005','10006','10007','10008','10009','10010','10011','10012','10013','10014','10015','10016','10017','10018','10019','10020'];
        foreach ($item_nos as $item_no) {
            \App\Product::create([
                'category_id'=> 1,
                'supplier_id'=> 1,
                'extra_no'=> '100054',
                'item_type'=> 'new',
                'gold'=> '5.23',
                'dimaond_1'=> '0.12',
                'dimaond_2'=> '0.12',
                'dimaond_3'=> '0.12',
                'dimaond_4'=> '0.12',
                'dimaond_5'=> '0.12',
                'baguette'=> '0.23',
                'marquis'=> '0.22',
                'big_stone'=> '10.2',
                'princess'=> '0.36',
                'colored'=> '0.36',
                'description'=> 'Nothing',
                'purchase_price'=> '560',

                'status'=> 'available',

            ]);
        }
    }
}
