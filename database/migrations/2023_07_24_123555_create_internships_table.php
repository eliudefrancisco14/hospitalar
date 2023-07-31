<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipsTable extends Migration
{
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone');
            $table->string('doc');
            $table->string('description', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internships');
    }
}
