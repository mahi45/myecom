<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);
        return [
            'category_id' => Category::select('id')->get()->random()->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'product_code' => $this->faker->numberBetween(100, 10000),
            'product_price' => $this->faker->numberBetween(100, 10000),
        ];
    }
}
