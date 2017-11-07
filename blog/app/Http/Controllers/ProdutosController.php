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
    
    public function store(Request $request) {
        $produto = new \Laravel\Produto();
        
        $produto = $produto->create($request->all());
        return \Illuminate\Support\Facades\Redirect::to (route('produtos.index'));    
    }
    
    public function edit($id) {
        $produtos = \Laravel\Produto::find($id);
        return view('produtos.edit', ['produtos'=>$produtos]);
    }
    
    public function update() {
        
    }
}
