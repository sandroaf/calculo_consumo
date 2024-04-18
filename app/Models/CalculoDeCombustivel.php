<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;

    public function calcular($valorcombustivel, $distancia, $autonomia) {

        $consumoGasolina = round((($distancia / $autonomia) * $valorcombustivel),2);

        return $consumoGasolina;
    }
}
