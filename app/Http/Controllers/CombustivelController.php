<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CalculoDeCombustivel;

class CombustivelController extends Controller
{
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $CalculoDeCombustivel = new CalculoDeCombustivel();

        $combustivel = $_GET['combustivel'];

        $valorcombustivel = $_GET['valorcombustivel'];
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $valor = $CalculoDeCombustivel->calcular($valorcombustivel,$distancia,$autonomia);

        return view('resultado',['combustivel'=>$combustivel,'valor'=>$valor]);
    }
}
