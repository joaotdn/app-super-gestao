<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'joao', 'status' => 'N', 'cnpj' => '0'],
            1 => ['nome' => 'joao', 'status' => 'N']
        ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
