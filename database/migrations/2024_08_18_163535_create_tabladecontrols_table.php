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
        Schema::create('tabladecontrol', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion',20)->nullable();
            $table->string('nombreempresa',250)->nullable();
            $table->string('direccion',250)->nullable();
            $table->string('telefono',100)->nullable();
            $table->string('email',250)->nullable();
            $table->string('urlapi',250)->nullable();
            $table->string('emailapi',250)->nullable();
            $table->string('passwordapi',250)->nullable();
            $table->string('rutalogo',250)->nullable();
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
        Schema::dropIfExists('tabladecontrol');
    }
};
