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
            $table->string('product_id', 191);
            $table->string('attribute1', 191);
            $table->string('attribute2', 191)->nullable();
            $table->string('name', 191);
            $table->longText('description');
            $table->string('product_url', 191);
            $table->text('feature_image')->nullable();
            $table->text('secondary_image')->nullable();
            $table->string('shipment_cost');
            $table->string('price');
            $table->string('currency');
            $table->string('type');
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
        Schema::dropIfExists('products');
    }
}
