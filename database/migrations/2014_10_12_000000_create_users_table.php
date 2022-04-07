<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('doctor', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->integer('specialization_id');
        });
        Schema::create('specialization', function (Blueprint $table) {
            $table->integer('id');
            $table->string('s_name');
        });
        Schema::create('appointment', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->dateTime('date');
            $table->string('email');
            $table->integer('p_id');
            $table->integer('d_id');
            $table->string('phoneNumber');
            $table->string('message')->nullable();
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
};
