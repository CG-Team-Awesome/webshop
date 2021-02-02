<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->number('product_id');
            $table->string('name');
            $table->text('tagline');
            $table->text('description');
            $table->number('in_stock')->default(0);
            $table->timestamp('available_until')->nullable();
            $table->number('supplier_id');
            $table->float('price');
            $table->string('picture');
            $table->number('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
