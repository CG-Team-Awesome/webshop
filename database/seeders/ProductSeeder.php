<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\{DB, Hash};

use App\Models\{Category, Product, ProductImage, Review};



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //first create the categories that the products belong to
        Category::create(['name' => 'horloges', 'description' => 'handgemaakte horloges']);
        Category::create(['name' => 'riemen', 'description' => 'handgemaakte riemen']);

        Product::factory()->count(25)->create();

        ProductImage::factory()->count(100)->create();
        Review::factory()->count(100)->create();

    }
}
