<?php

namespace Database\Seeders;

use App\Models\Centro;
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
        Centro::factory(25)->create();
    }
}
