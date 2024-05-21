<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeiturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leituras', function (Blueprint $table) {
            $table->id();
            $table->float('temperatura', 8, 2)->nullable();
            $table->float('oxidacao', 8, 2)->nullable();
            $table->integer('batimento')->nullable();
            $table->float('altura', 8, 2)->nullable();
            $table->foreignId('pacient_id')->constrained('pacients');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leituras');
    }
}
