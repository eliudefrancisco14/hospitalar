<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccreditationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accreditation', function (Blueprint $table) {
            $table->id();
            $table->string('idcard');
            $table->string('name');
            $table->string('surname');
            $table->string('organization');
            $table->string('function');
            $table->date('birthday');
            $table->string('gender');
            $table->string('country');
            $table->string('category');
            $table->string('IssueDate');
            $table->string('ExpirationDate');
            $table->string('obs',255)->nullable();
            $table->string('annexPdf',255);
            $table->string('email');
            $table->string('photo');
            $table->softDeletes();
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
        Schema::dropIfExists('accreditation');
    }
}
