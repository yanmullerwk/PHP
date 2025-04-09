@extends('layouts.app')
@section('title','edição')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-10">
            <h1>edição jogo</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{route('jogos-index')}}" class="btn btn-success">voltar</a>
        </div>
    </div>
    <hr>
    <form action="{{route('jogos-update', ['id'=>$jogos->id])}}" method="POST">
    @csrf 
    @method('PUT')
        <div class="form-group mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{$jogos->nome}}" placeholder="Digite um nome">
        </div>
        <div class="form-group mb-3">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" value="{{$jogos->categoria}}" class="form-control" placeholder="Digite a categoria...">
        </div>
        <div class="form-group mb-3">
            <label for="ano_criacao">Ano Criação:</label>
            <input type="text" name="ano_criacao" class="form-control" value="{{$jogos->ano_criacao}}" placeholder="Digite o ano de criação...">
        </div>
        <div class="form-group mb-3">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" class="form-control" value="{{$jogos->valor}}" placeholder="Digite um valor...">
        </div>
        <button type="submit" class="btn btn-success">atualizar</button>
    </form>
</div>
@endsection()