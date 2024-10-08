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
        Schema::create('detalledeencuestas', function (Blueprint $table) {
            $table->id();
            $table->string('equipo',20)->nullable();
            $table->unsignedBigInteger('encuesta_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->decimal('idplantilla',5,0)->nullable();
            $table->decimal('iddetalle',5,0)->nullable();
            $table->decimal('tipo',2,0)->nullable();
            $table->string('descripcion',250)->nullable();
            $table->string('seleccion',10)->nullable();
            $table->decimal('datonum',5,0)->nullable();
            $table->string('datotexto',250,0)->nullable();
            $table->string('datosi',5)->nullable();
            $table->string('datono',5)->nullable();
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
        Schema::dropIfExists('detalledeencuestas');
    }
};
