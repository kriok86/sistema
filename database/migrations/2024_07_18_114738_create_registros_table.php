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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('dni');
            $table->bigInteger('telefono');
            $table->integer('status')->default(1);

            $table->foreignId('user_id');
            $table->foreignId('antiguedad_id');
            $table->foreignId('tipovivienda_id');
            $table->foreignId('residencia_id');
            $table->foreignId('tenencia_id');
            $table->foreignId('cantpersona_id');
            $table->foreignId('estudiosuperior_id');
            $table->foreignId('obra_id');
            $table->foreignId('informe_id');
            $table->foreignId('ingreso_id');
            $table->foreignId('grupofamiliar_id');
            $table->foreignId('trabajo_id');
            $table->foreignId('ubicacion_id');
            $table->foreignId('punto_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('antiguedad_id')->references('id')->on('antiguedads')->onDelete('cascade');
            $table->foreign('tipovivienda_id')->references('id')->on('tipoviviendas')->onDelete('cascade');
            $table->foreign('residencia_id')->references('id')->on('residencias')->onDelete('cascade');
            $table->foreign('tenencia_id')->references('id')->on('tenencias')->onDelete('cascade');
            $table->foreign('cantpersona_id')->references('id')->on('cantpersonas')->onDelete('cascade');
            $table->foreign('estudiosuperior_id')->references('id')->on('estudiosuperiors')->onDelete('cascade');
            $table->foreign('obra_id')->references('id')->on('obras')->onDelete('cascade');
            $table->foreign('informe_id')->references('id')->on('informes')->onDelete('cascade');
            $table->foreign('ingreso_id')->references('id')->on('ingresos')->onDelete('cascade');
            $table->foreign('grupofamiliar_id')->references('id')->on('grupofamiliars')->onDelete('cascade');
            $table->foreign('trabajo_id')->references('id')->on('trabajos')->onDelete('cascade');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')->onDelete('cascade');
            $table->foreign('punto_id')->references('id')->on('puntos')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
