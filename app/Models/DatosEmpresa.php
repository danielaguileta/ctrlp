<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEmpresa extends Model
{
    use HasFactory;

    protected $table = "datos_empresa";
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'rtn',
        'avatar',

    ];
}
