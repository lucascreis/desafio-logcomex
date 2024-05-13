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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->char('sex', length: 1)->default('N')->comment('M = Masculino, F = Feminino e N = Não informado');
            $table->text('description')->comment('Descrição das características da pessoa (altura, peso, cor e etc)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
