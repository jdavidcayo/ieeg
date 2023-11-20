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
        Schema::create('capsulas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('tema')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('tipo')->nullable();
            $table->string('url')->nullable();
            $table->string('urlImagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsulas');
    }
};
