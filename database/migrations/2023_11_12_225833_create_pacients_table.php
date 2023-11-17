<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCompleto');
            $table->date('dataNascimento');
            $table->string('peso');
            $table->string('altura');
            $table->string('morada');
            $table->longText('maisInformacoes');

            $table->enum('medicacao', ['Sim', 'Não']);
            $table->enum('gravidade', ['Leve', 'Médio', 'Grave']);
            
            $table->json('sintomas');
            $table->json('historico');
            $table->json('condicoesMedicas');
            $table->json('estadoFisico');
            $table->json('doencasCronicas');

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
        Schema::dropIfExists('pacients');
    }
}
