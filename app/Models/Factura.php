<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [ 
        
        'id',
        't_paciente',
        'factura',
        'dpto',
        'tipo_doc',
        'factura_fiscal',
        'f_ingreso',
        'f_cierre',
        'cliente',
        'n_cedula',
        'valor',
        'credito',
        'f_registro',
        'dias_incapacidad',
        'fecha_egreso',
        'estado_salida',
        'diagnostico',
        's_factura',
        
        
    ];
}
