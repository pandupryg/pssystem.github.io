<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePhoneDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('phone_id');
            $table->foreign('phone_id')->references('id')->on('phone')->onDelete('cascade');
            $table->string('color');
            $table->integer('memory');
            $table->integer('storage');
            $table->integer('stock');
            $table->bigInteger('price');
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
        Schema::dropIfExists('phone_detail');
    }
}
