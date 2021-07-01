<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('telephone');
            $table->timestamp('birth_day')->nullable();
            $table->string('birth_place');
            $table->enum('gender', ['male', 'female']);
            $table->enum('role', ['admin', 'staffpph', 'customer']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image');
            $table->boolean('isNotificationOrderFinish');
            $table->boolean('isNotificationPromo');
            $table->boolean('isConfirmed');
            $table->boolean('isVerified');
            $table->boolean('isBlocked');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
