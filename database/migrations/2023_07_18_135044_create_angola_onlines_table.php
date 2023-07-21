<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngolaOnlinesTable extends Migration
{
    public function up()
    {
        Schema::create('angola_onlines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_idProvince');
            $table->foreign('fk_idProvince')->references('id')->on('provinces')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('name', 255);
            $table->longText('description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angola_onlines');
    }
}
