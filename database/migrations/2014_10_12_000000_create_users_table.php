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
            $table->bigIncrements('id');
            
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();

            // $table->bigInteger('image_id')->nullable();

            $table->decimal('latitude', 5, 2)->nullable();
            $table->decimal('longitude', 5, 2)->nullable();

            $table->string('type')->nullable();

            $table->string('summary')->nullable();
            $table->string('price_per_hour')->nullable();
            $table->string('teaching_method')->nullable();
            $table->string('paid_fee')->default('0');

            $table->integer('approve')->default(0);
            $table->integer('active')->default(1);
            $table->integer('block')->default(0);

            $table->string('verification_key')->default('0');
            $table->string('verified_email')->nullable();

            // $table->string('token')->nullable();
            $table->string('remember_token')->nullable();

            $table->string('token_expiry_date')->nullable();

            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
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
