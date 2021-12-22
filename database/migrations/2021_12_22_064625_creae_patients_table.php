<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('email')->unique;
            $table->string('phone');
            $table->string('address');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
