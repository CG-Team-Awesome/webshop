<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;



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
        Category::create(['name' => 'horloges']);
        Category::create(['name' => 'riemen']);

        Product::factory()->count(50)->create();
        ProductImage::factory()->count(200)->create();

    }
}
