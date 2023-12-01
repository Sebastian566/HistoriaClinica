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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->char('c_paciente', 16);
            $table->char('tipo_doc', 3);
            $table->char('n_cedula', 11);
            $table->char('historia', 12);
            $table->char('apellidos', 25);
            $table->char('nombres', 25);
            $table->smallInteger('edad');
            $table->date('f_nacimiento');
            $table->char('pais', 3);
            $table->char('ciudad', 5);
            $table->char('domicilio', 60);
            $table->char('telefono_1', 15);
            $table->char('telefono_2', 15);
            $table->char('estado_civil', 3);
            $table->char('sexo', 1);
            $table->char('n_conyugue', 25);
            $table->char('apellidos_g', 25);
            $table->char('nombres_g', 25);
            $table->datetime('f_registro');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
