<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_form', function (Blueprint $table) {
            $table->id();
            $table->boolean('sex');
            $table->string('prenom');
            $table->string('nom');
            $table->string('cin');
            $table->string('email');
            $table->integer('tele');
            $table->boolean('ville');
            $table->boolean('metier');
            $table->boolean('experience');
            $table->boolean('etude');
            $table->boolean('ecole');
            $table->text('motivation');
            $table->boolean('dateDebut');
            $table->boolean('dateFin');
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
        Schema::dropIfExists('_form');
    }
};
