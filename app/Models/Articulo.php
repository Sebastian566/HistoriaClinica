<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'servicio',
        'ot',
        'nombre_id',
        'direccion',
        'referencia',
        'g_claro',
        'tipored',
        'cap',
        'ubicacion_id',
        'fecha_inicio',
        'fecha_fin',
        'meses',
        'vr_contratado',
        'vr_ultifactura'
    ];
}
