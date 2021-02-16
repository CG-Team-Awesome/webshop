<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->UUID('order_number'); //dit misschien nog nader instellen met andere datatype? Moet wel uniek zijn en/of incremental en dan niet beginnen bij 1 maar bij 1000 ofzo.
            $table->date('shipping_date');
            $table->timestamp('billdate');
            $table->timestamps();
            $table->string('transact_status');
            // $table->softdelete();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
