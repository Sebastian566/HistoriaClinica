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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('servicio');
            $table->integer('ot');
            $table->text('nombre_id');
            $table->text('direccion');
            $table->char('referencia');
            $table->string('g_claro');
            $table->string('tipored');
            $table->integer('cap');
            $table->text('ubicacion_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('meses');
            $table->decimal('vr_contratado');
            $table->decimal('vr_ultifactura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
