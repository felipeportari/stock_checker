<?php

namespace Database\Seeders;

use App\Models\Products\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(3)->create();
    }
}
