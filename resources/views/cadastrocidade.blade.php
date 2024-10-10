@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Cadastro de Cidades</h2>
    <form method="post" action="{{route('cadastra-cidade')}}">
        @csrf
        <div class="form-group">
            <label for="nomeCidade">Nome da Cidade</label>
            <input type="text" class="form-control" id="nomeCidade" name="nomeCidade" placeholder="Digite o nome da cidade" required>
        </div>
        <div class="form-group">
            <label for="numeroPopulacao">Número de População</label>
            <input type="number" class="form-control" id="numeroPopulacao" name="numeroPopulacao" placeholder="Digite o número de população" required>
        </div>
        <div class="form-group">
            <label for="siglaCidade">Sigla da Cidade</label>
            <input type="text" class="form-control" id="siglaCidade" name="siglaCidade" placeholder="Digite a sigla da cidade" required>
        </div>
        <div class="form-group">
            <label for="nomeVereador">Nome do Vereador</label>
            <input type="text" class="form-control" id="nomeVereador" name="nomeVereador" placeholder="Digite o nome do vereador" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Cidade</button>
    </form>
</div>

@endsection
