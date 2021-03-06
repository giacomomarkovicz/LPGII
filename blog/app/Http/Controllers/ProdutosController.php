<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $produtos = \Laravel\Produto::get();
        
        return view('produtos.index', ['produtos'=>$produtos]);
    }
    
    public function create() {
        return view('produtos.create');
    }
    
    public function store(Request $request)
    {
        $produto = new \Laravel\Produto();
        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->categoria = $request->input('categoria');

        if($produto->save()) {
            return redirect()->route('produtos.index')->with('novo', 'Produto cadastrado com sucesso.');
        } else {
            return redirect()->route('index.create')->with('error_message', 'Houve um erro ao cadastrar o produto.');
        }
    }
    
    public function edit($id) {
        $produtos = \Laravel\Produto::findOrFail($id);
        
        return view('produtos.edit', ['produtos'=>$produtos]);
    }
    
    public function update($id, Request $request) {
        $produto = \Laravel\Produto::findOrFail($id);
        
        $produto->update($request->all());
        
        \Session::flash('editado','Produto editado com sucesso!');
        
        return \Illuminate\Support\Facades\Redirect::to (route('produtos.index'));
    } 
    
    public function show($id) {       
        $produtos = \Laravel\Produto::get();
        
        return view('produtos.show', ['produtos'=>$produtos]);
    }
    
    public function destroy($id) {       
        $produto = \Laravel\Produto::findOrFail($id);
        
        $produto->delete();
        
        \Session::flash('deletado','Produto deletado com sucesso!');
        
        return \Illuminate\Support\Facades\Redirect::to (route('produtos.index'));
    }
}
