<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->string('endereco');
            $table->string('telefone');
            $table->unsignedBigInteger('sexo_id');
            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete('cascade')->onUpdate('cascade');
            $table->date('data_nascimento');
            $table->unsignedBigInteger('gruposangue_id');
            $table->foreign('gruposangue_id')->references('id')->on('gruposangues')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
