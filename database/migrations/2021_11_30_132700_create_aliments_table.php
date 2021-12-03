<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliments', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->nullable(true);

            // $table->string('type',191)->nullable(true);
            $table->unsignedInteger('type_id')->nullable(true);

            $table->string('brand',191)->nullable(true);
            // $table->integer('brand_id')->nullable(true);

            $table->integer('number')->nullable(true);

            //$table->string('location',191)->nullable(true);
            $table->unsignedInteger('location_id')->nullable(true);


            $table->string('expiryDate')->nullable(true);

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
        Schema::dropIfExists('aliments');
    }
}
