<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Carros;
use App\Models\Imagens;
use Illuminate\Support\Carbon;

class CarrosController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');
    }
    public function cadastro(Request $request)
    {
        $request->validate([
            'foto' => 'required',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anomodelo' => 'required|max:255',
            'versao' => 'required|max:255',
        ]);

        $time = new Carbon('03:00:00');

        $carro = Carros::create([
            'id_user' => auth()->user()->id,
            'marca' => $request->marca,
            'modelo'=> $request->modelo,
            'anomodelo'=> $request->anomodelo,
            'versao'=> $request->versao,
            'cambio'=> $request->cambio,
            'combustivel'=> $request->combustivel,
            'direcao'=> $request->direcao,
            'motor'=> $request->motor,
            'tipoveiculo'=> $request->tipoveiculo,
            'km' => $request->km,
            'portas' => $request->portas,
            'finalplaca' => $request->finalplaca,
            'airbag' => $request->airbag ? true : false,
            'alarme' => $request->alarme ? true : false,
            'arcondicionado ' => $request->arcondicionado ? true : false,
            'travaeletrica' => $request->travaeletrica ? true : false,
            'vidroeletrico' => $request->vidroeletrico ? true : false,
            'som' => $request->som ?true : false,
            'sensorre' => $request->sensorre ? true : false,
            'camerare' => $request->camerare ? true : false,
            'blindado' => $request->blindado ? true : false,
            'cor' => $request->cor,
            'aceitatrocas' => $request->aceitatrocas ? true : false,
            'financiado' => $request->financiado ? true : false,
            'ipva' => $request->ipva ? true : false,
            'multas' => $request->multas ? true : false,
            'leilao' => $request->leilao ? true : false,
            'unicodono' => $request->unicodono ? true : false,
            'preco' => $request->preco,
            'contato' => $request->contato,
            'tempo' => $time,
            'obs' => $request->obs,
        ])->id;

        Imagens::create([
            'id_carros' => $carro,
            'principal' => $request->foto,
            'adicional01' => $request->foto01 ? $request->foto01 : null,
            'adicional02' => $request->foto02 ? $request->foto02 : null,
            'adicional03' => $request->foto03 ? $request->foto03 : null,
            'adicional04' => $request->foto04 ? $request->foto04 : null,
            'adicional05' => $request->foto05 ? $request->foto05 : null,
        ]);

         return $this->verCarro();
    }

    public function verCarro()
    {

        return view('vercarro');
    }
}
