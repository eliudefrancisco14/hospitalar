<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngolaOnlinesTable extends Migration
{
    public function up()
    {
        Schema::create('angola_onlines', function (Blueprint $table) {
            $table->id();
            $table->string('province',255);
            $table->string('point', 255);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angola_onlines');
    }
}
