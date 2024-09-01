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
        Schema::create('encuestadores', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',20)->nullable();
            $table->string('nombre',250)->nullable();
            $table->string('direccion',250)->nullable();
            $table->string('telefono',250)->nullable();
            $table->string('email',250)->nullable();
            $table->string('password',250)->nullable();
            $table->string('profesion',250)->nullable();
            $table->string('codigo',20)->nullable();
            $table->decimal('estado',1,0)->nullable();
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
        Schema::dropIfExists('encuestadors');
    }
};
