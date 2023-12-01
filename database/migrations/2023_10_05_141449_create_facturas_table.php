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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->char('t_paciente', 1);
            $table->integer('factura');
            $table->char('dpto', 4);
            $table->char('tipo_doc', 3);
            $table->integer('factura_fiscal');
            $table->date('f_ingreso');
            $table->date('f_cierre');
            $table->char('cliente', 11);
            $table->char('n_cedula', 11);
            $table->integer('valor');
            $table->integer('credito');
            $table->datetime('f_registro');
            $table->integer('dias_incapacidad');
            $table->datetime('fecha_egreso');
            $table->char('estado_salida', 1);
            $table->char('diagnostico', 6);
            $table->char('s_factura', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
