<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsksTable extends Migration
{
    public function up()
    {
        Schema::create('asks', function (Blueprint $table) {
            $table->id();
            $table->longText('asks');
            $table->longText('response');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('asks');
    }
}
