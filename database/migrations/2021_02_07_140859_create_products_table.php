<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('article_number');
            $table->string('name');
            $table->string('tagline');
            $table->text('description');
            $table->unsignedBigInteger('in_stock')->default(0);
            $table->timestamp('available_until')->nullable();
            $table->foreignId('supplier_id');
            $table->decimal('price', 6,2);
            $table->foreignId('tax_group_id');
            $table->foreignId('category_id');
	        $table->string('strap_color');
            $table->string('watch_tech');
            $table->string('size');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->foreign('tax_group_id')
                ->references('id')
                ->on('tax_groups');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers');
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
