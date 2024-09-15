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
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',20)->nullable();
            $table->string('tipodocumento',10)->nullable();
            $table->string('estadoidentificacion',10)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('apellidos',100)->nullable();
            $table->string('direccion',250)->nullable();
            $table->string('email',250)->nullable();
            $table->date('fechadenacimiento')->nullable();
            $table->string('telefono',100)->nullable();
            $table->string('area',20)->nullable();
            $table->string('sexo',10)->nullable();
            $table->string('gradoescolaridad',20)->nullable();
            $table->string('estadocivil',20)->nullable();
            $table->string('poblacionmigrante',10)->nullable();
            $table->string('rutafotos',250)->nullable();
            $table->string('estado',20)->nullable();
            $table->string('contacto',250)->nullable();
            $table->string('telefonocontacto',100)->nullable();
            $table->string('zona',20)->nullable();
            $table->string('barrio',250)->nullable();
            $table->string('barrio',20)->nullable();
            $table->string('usuario_create',20)->nullable();
            $table->string('usuario_update',20)->nullable();

            $table->unsignedBigInteger('unidadadministrativa_id')->nullable();
            $table->foreign('unidadadministrativa_id')->references('id')->on('unidadadministrativa')->onDelete('set null');

            $table->unsignedBigInteger('zona_id')->nullable();
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('set null');

            $table->unsignedBigInteger('barrio_id')->nullable();
            $table->foreign('barrio_id')->references('id')->on('barrios')->onDelete('set null');

            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('set null');

            $table->unsignedBigInteger('estrato_id')->nullable();
            $table->foreign('estrato_id')->references('id')->on('estratos')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiarios');
    }
};
