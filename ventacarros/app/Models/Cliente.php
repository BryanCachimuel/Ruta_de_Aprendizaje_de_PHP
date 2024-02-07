<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['cedula_cliente','nombre_cliente','edad_cliente','correo_cliente','celular_cliente','direccion_cliente'];
    public $timestamps = false;
}
