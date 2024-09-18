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
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('idencuesta_local')->nullable();
            $table->string('codigo',20)->nullable();
            $table->string('equipo',20)->nullable();
            $table->dateTime('fechadiligenciamiento')->nullable();
            $table->string('latitud',50)->nullable();
            $table->string('longitud',50)->nullable();
            $table->string('cedula',20)->nullable();
            $table->string('nombre',250)->nullable();

            $table->unsignedBigInteger('estrato_id')->nullable();
            $table->foreign('estrato_id')->references('id')->on('estratos')->onDelete('set null');

            $table->unsignedBigInteger('beneficiario_id')->nullable();
            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios')->onDelete('set null');

            $table->unsignedBigInteger('detalledeencuesta_id')->nullable();
            $table->foreign('detalledeencuesta_id')->references('id')->on('detalledeencuestas')->onDelete('set null');

            $table->decimal('estado',1,0);
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
        Schema::dropIfExists('encuestas');
    }
};
