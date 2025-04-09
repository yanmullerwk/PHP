@extends('layouts.app')
@section('title','Criação')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-10">
            <h1>Cadastro jogo</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{route('jogos-index')}}" class="btn btn-success">voltar</a>
        </div>
    </div>
    <hr>
    <form action="{{route('jogos-store')}}" method="post">
    @csrf 
        <div class="form-group mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite um nome">
        </div>
        <div class="form-group mb-3">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" class="form-control" placeholder="Digite a categoria...">
        </div>
        <div class="form-group mb-3">
            <label for="ano_criacao">Ano Criação:</label>
            <input type="text" name="ano_criacao" class="form-control" placeholder="Digite o ano de criação...">
        </div>
        <div class="form-group mb-3">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" class="form-control" placeholder="Digite um valor...">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection()