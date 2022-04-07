<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->integer('id')->unique();
            $table->string('name');
            $table->integer('specialization_id');
            $table->foreign('specialization_id')->references('id')->on('users');
        });
        Schema::create('specialization', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('s_name');
        });
        Schema::create('appointment', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->dateTime('date');
            $table->string('email');
            $table->integer('p_id');
            $table->integer('d_id');
            $table->foreign('p_id')->references('id')->on('users');
            $table->foreign('d_id')->references('id')->on('doctor');
            $table->string('phoneNumber');
            $table->string('message')->nullable();
        });
        $doctor = [
            [
                'id' => 101,
                'name' => 'dr. Arief Budiman Sp.OT',
                'specialization_id' => 2
            ],
            [
                'id' => 102,
                'name' => 'dr. Soelaiman Sp.THT',
                'specialization_id' => 3
            ],
            [
                'id' => 103,
                'name' => 'dr. Sentosa Sp.OG (K)Onk.',
                'specialization_id' => 1
            ],
            [
                'id' => 104,
                'name' => 'dr. Rizky Rivaldi',
                'specialization_id' => 4
            ],
            [
                'id' => 105,
                'name' => 'dr. Rania Aggraeni Sp.OT',
                'specialization_id' => 2
            ],
        ];
        foreach($doctor as $data){
            DB::table('doctor')->insert($data);
        }
        
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
