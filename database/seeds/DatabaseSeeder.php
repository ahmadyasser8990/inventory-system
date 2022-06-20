<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(TaxesTableSeeder::class);
        $this->call(ExpensesimportsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        // $this->call(PricesTableSeeder::class);



    }
}
