<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher', function (Blueprint $table) {
            $table->string('id_voucher')->nullable();
            $table->string('voucher_code');
            $table->string('voucher_count');
            $table->string('voucher_saldo');
            $table->json('category_id')->nullable();
            $table->json('product_id')->nullable();
            $table->boolean('isForAll');
            $table->boolean('isOnlyForCategory');
            $table->boolean('isOnlyForProduct');
            $table->enum('status', ['active', 'non-active']);
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
        Schema::dropIfExists('voucher');
    }
}
