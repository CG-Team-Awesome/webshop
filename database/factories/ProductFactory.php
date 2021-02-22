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
        'article_number' => $this->faker->ean13,
        'name' => $this->faker->word,
        'tagline' => $this->faker->sentence,
        'description' => $this->faker->paragraph,
        'in_stock' => $this->faker->numberBetween($min = 1, $max = 99),
        'available_until' => $this->faker->dateTimeBetween('-1 year', '+ 3 years'),
        'supplier_id' => Supplier::factory(),
        'price' => $this->faker->numberBetween($min = 1, $max = 99),
        'tax_group_id' => TaxGroup::factory(),
        'category_id' => Category::all()->random()->id,
        'strap_color' => $this->faker->colorName,
        'watch_tech' => $this->faker->word,
        'size' => $this->faker->word,
        ];
    }
}
