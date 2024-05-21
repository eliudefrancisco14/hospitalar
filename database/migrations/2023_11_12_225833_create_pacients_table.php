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
            $table->integer('dataNascimento');
            $table->float('peso', 8, 2);
            $table->float('altura', 8, 2);
            $table->float('temperatura', 8, 2)->nullable();
            $table->integer('batimento')->nullable();
            $table->string('morada');
            $table->longText('maisInformacoes')->nullable()->default('Sem informações');

            $table->enum('medicacao', ['Sim', 'Não']);
            $table->enum('gravidade', ['Leve', 'Médio', 'Grave']);
            
            $table->json('sintomas');
            $table->json('historico');
            $table->json('condicoesMedicas');
            $table->string('doencasCronicas');

            $table->boolean('consulted');

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
