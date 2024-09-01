<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barrios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',250)->nullable();
            $table->string('tipo',50)->nullable();
            $table->string('usuario_create',20)->nullable();
            $table->string('usuario_update',20)->nullable();

            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('set null');

            $table->unsignedBigInteger('unidadadministrativa_id')->nullable();
            $table->foreign('unidadadministrativa_id')->references('id')->on('unidadadministrativa')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrios');
    }
};
