<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\TaxGroup;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'product_number' => $this->faker->numberBetween($min = 1, $max = 99),
        'name' => $this->faker->name,
        'tagline' => $this->faker->sentence,
        'description' => $this->faker->paragraph,
        'in_stock' => $this->faker->numberBetween($min = 1, $max = 99),
        'available_until' => $this->faker->date,
        'supplier_id' => Supplier::factory(),
        'price' => $this->faker->numberBetween($min = 1, $max = 99),
        'picture' => $this->faker->url,
        'tax_group' => TaxGroup::factory(),
        'category_id' => Category::factory(),
        'strap_color' => $this->faker->string(),
        'watch_tech' => $this->faker->string(),
        'size' => $this->faker->string()
        ];
    }
}
