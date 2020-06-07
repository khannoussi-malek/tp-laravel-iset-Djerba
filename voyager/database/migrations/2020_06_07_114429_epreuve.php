<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Epreuve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epreuves', function (Blueprint $table) {
            $table->id();
            $table->string('numepreuve');
            $table->date('datepreuve');
            $table->string('lieu');
            $table->integer('id_matiere');
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
        Schema::dropIfExists('epreuves');
    }
}
