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
                   {!!Form::input('text' , 'valor' , '',['class' => 'form-control', 'placeholder' => 'Valor'])!!}
                   {!!Form::input('text' , 'categoria' , '',['class' => 'form-control', 'placeholder' => 'Categoria'])!!}
                   {!!Form::submit('Salvar',['class'=>'btn-primary']) !!}
                   
                   {!! Form::close() !!}
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
