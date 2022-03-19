<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            //'foto' => $request->foto,
            'nome' => $request -> nome,
            'descricao' => $request -> descricao,
            'preco' => $request -> preco
        ]);

        return "Produto Criado com Sucesso!";
    }
}
