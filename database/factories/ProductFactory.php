<?php

namespace Database\Factories;

use App\Models\Product;
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
        static $product_number = 1; 
        return [
        'product_number' => $this->product_number++,
        'name' => $this->faker->name,
        'tagline' => $this->faker->sentence,
        'description' => $this->faker->paragraph,
        'in_stock' => $this->faker->number,
        'available_until' => $this->faker->date,
        'supplier_id' => $this->faker->integer , // <--- hier oppakken
        'price' => $this->faker->price,
        'picture' => $this->faker->url,
        'category_id' => $this->faker->integer
        ];
    }
}
