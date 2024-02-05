<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    /* Agregando el nombre de la entidad y sus respectivos atributos */
    protected $table = 'carros';
    protected $primaryKey = 'id_carro';
    protected $fillable = ['id_marca','nombre_propietario','descripcion_carro','precio_carro','cantidad_carro','valor_total_carro'];
    public $timestamps = false;

    /* para obtener el valor del nombre de la marca y ponerla en vez de id_marca se pondria el nombre de la marca en la tabla carros */
    public function Marca(){
        return $this->hasOne(Marca::class,'id_marca','id_marca');
    }
}
