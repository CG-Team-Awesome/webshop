<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();;
            $table->foreignId('order_id');
            $table->foreignId('product_number');
            $table->unsignedBigInteger('quantity');
            $table->bigInteger('discount');
            $table->bigInteger('total');
            $table->foreignId('tax_group');
            // $table->softdelete();

            $table->foreign('order_id')
                ->references('id')
                ->on('orders');

            $table->foreign('product_number')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
