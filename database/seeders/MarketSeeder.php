<?php

namespace Database\Seeders;

use App\Models\Markets\Market;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Market::factory(3)->create();
    }
}
