@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div 
                    class="panel-heading">Cadastro de Produtos
                    <a class="pull-right" href="{{route('produtos.index')}}">Lista de Produtos</a>
                </div>

                <div class="panel-body">
                    
                   {!! Form::open(['url' => route('produtos.store')]) !!}
                   
                   {!!Form::input('text' , 'nome' , '',['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome'])!!}
                   {!!Form::input('number' , 'valor' , '',['class' => 'form-control', 'placeholder' => 'Valor'])!!}
                   {!!Form::input('text' , 'categoria' , '',['class' => 'form-control', 'placeholder' => 'Categoria'])!!}
                                   
                
                <div class="panel-body">
                    
                   {!!Form::submit('Salvar',['class'=>'btn-primary btn btn-md']) !!}
                   <a href="{{ route('produtos.index') }}" class="btn btn-md btn-warning">Voltar</a>
                   {!! Form::close() !!}
                   
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
