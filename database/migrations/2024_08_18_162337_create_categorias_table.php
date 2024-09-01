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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',250)->nullable();
            $table->string('titulo',250)->nullable();
            $table->string('proyecto',20)->nullable();
            $table->decimal('posicion',5,0)->nullable();
            $table->string('tipo',30)->nullable();
            $table->string('usuario_create',20)->nullable();
            $table->string('usuario_update',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
