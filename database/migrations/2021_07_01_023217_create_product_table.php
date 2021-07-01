<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->string('product_id')->unique();;
            $table->string('product_name');
            $table->string('product_image');
            $table->string('product_description');
            $table->json('category_id')->nullable();
            $table->double('product_weight');
            $table->double('product_normal_price');
            $table->double('product_discount_price');
            $table->integer('product_stock');
            $table->integer('product_amount_sold');
            $table->integer('product_review');
            $table->enum('product_condition', ['new', 'old']);
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
        Schema::dropIfExists('product');
    }
}
