<?php

namespace Database\Factories\Products;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (!File::isDirectory(storage_path('app/public/products'))) {
            File::makeDirectory(storage_path('app/public/products'), 0755, true, true);
        }

        return [
            'name' => fake()->words(asText: true),
            'category_id' => rand(1, 3),
            'image' => 'product/' . fake()->image(dir: storage_path('app/public/products'), category: 'product', fullPath: false, format: 'jpg'),
            'expiration_date' => fake()->dateTimeBetween('+4 weeks', '+10 weeks'),
            'hash_code' => fake()->ean13(),
            'market' => fake()->locale(),
            'price' => 'R$' . rand(0, 99) . ',' . rand(0, 9) . '0',
            'quantity' => rand(0, 10),
        ];
    }
}
