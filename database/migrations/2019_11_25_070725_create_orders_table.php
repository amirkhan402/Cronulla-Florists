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
            $table->bigIncrements('id');
            $table->integer('api_id');
            $table->string('r_firstname');
            $table->string('r_lastname');
            $table->string('r_telephone');
            $table->string('r_occassion');
            $table->string('r_message');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('date');
            $table->string('time');
            $table->string('r_unavailable');
            $table->string('s_firstname');
            $table->string('s_lastname');
            $table->string('s_email');
            $table->string('s_phone');
            $table->string('user_type');
            $table->string('products');
            $table->integer('quantity');
            $table->integer('total_amount');
            $table->timestamps();
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
