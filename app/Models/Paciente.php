<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [ 
        
        'id',
        'c_paciente',
        'tipo_doc',
        'n_cedula',
        'historia',
        'apellidos',
        'nombres',
        'edad',
        'f_nacimiento',
        'pais',
        'ciudad',
        'domicilio',
        'telefono_1',
        'telefono_2',
        'estado_civil',
        'sexo',
        'n_conyugue',
        'apellidos_g',
        'nombres_g',
        'f_registro',
        
        
    ];
}
