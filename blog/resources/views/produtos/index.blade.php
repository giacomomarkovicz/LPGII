@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div 
                    class="panel-heading">Lista de Produtos
                    <a class="pull-right" href="{{route('produtos.create')}}">Novo Produto</a>
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
                        <th>Ações</th>
                      </tr>
                      @foreach($produtos as $produto)
                        <tr>
                          <td>{{ $produto->id }}</td>
                          <td>{{ $produto->nome }}</td>
                          <td>R${{ $produto->valor }}</td>
                          <td>{{ $produto->categoria }}</td>
                        <td>
                            <a href="{{ URL::to('produtos/' . $produto->id . '/show') }}" class="btn btn-xs btn-primary">
                              <i class="fa fa-eye"></i>Detalhes
                            </a>
                            <a href="{{ URL::to('produtos/' . $produto->id . '/edit') }}" class="btn btn-xs btn-warning">
                              <i class="fa fa-pencil"></i>Editar
                            </a>
                            <a href="" class="btn btn-xs btn-danger">
                              <i class="fa fa-trash"></i>Excluir
                            </a>
                        </td>
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
