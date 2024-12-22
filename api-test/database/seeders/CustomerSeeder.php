<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(50)
            ->hasInvoices(15)
            ->create();

        Customer::factory()
            ->count(30)
            ->hasInvoices(7)
            ->create();

        Customer::factory()
            ->count(25)
            ->hasInvoices(20)
            ->create();
    }
}
