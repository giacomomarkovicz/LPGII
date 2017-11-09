@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div 
                    class="panel-heading">Detalhes do Produto
                    <a class="pull-right" href="{{route('produtos.index')}}">Lista de Produtos</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="x_content">
                    <table class="table">
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Criado em</th>
                        <th>Ultima Atualização</th>
                      </tr>
                      @foreach($produtos as $produto)
                        <tr>
                          <td>{{ $produto->id }}</td>
                          <td>{{ $produto->nome }}</td>
                          <td>R${{ $produto->valor }}</td>
                          <td>{{ $produto->categoria }}</td>
                          <td>{{ $produto->created_at }}</td>
                          <td>{{ $produto->updated_at }}</td>
                        </tr>
                      @endforeach
                    </table>                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection