<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Customer\Entities\Tenancy\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory(60)->create();
    }
}
