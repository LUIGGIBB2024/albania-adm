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
        Schema::create('unidadadministrativa', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',250)->nullable();
            $table->string('categoria',50)->nullable();

            $table->unsignedBigInteger('zona_id')->nullable();
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('set null');

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
        Schema::dropIfExists('unidadadministrativas');
    }
};
