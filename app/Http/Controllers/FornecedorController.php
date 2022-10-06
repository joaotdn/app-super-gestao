<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'joao',
                'status' => 'S',
                'cnpj' => '0',
                'ddd' => '83'
            ],
            1 => [
                'nome' => 'neto',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '81'
            ],
            2 => [
                'nome' => 'neto',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => null
            ]
        ];

        // $fornecedores = [];

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
