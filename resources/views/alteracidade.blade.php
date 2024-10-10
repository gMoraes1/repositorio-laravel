@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Alterar Cidade</h2>
    <form method="post" action="{{ route('altera-cidade', $registrosCidade->idCidade) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeCidade">Nome da Cidade</label>
            <input type="text" class="form-control" id="nomeCidade" name="nomeCidade" value="{{ $registrosCidade->nomeCidade }}" placeholder="Digite o nome da cidade" required>
        </div>

        <div class="form-group">
            <label for="numeroPopulacao">Número de População</label>
            <input type="number" class="form-control" id="numeroPopulacao" name="numeroPopulacao" value="{{ $registrosCidade->numeroPopulacao }}" placeholder="Digite o número da população" required>
        </div>

        <div class="form-group">
            <label for="siglaCidade">Sigla da Cidade</label>
            <input type="text" class="form-control" id="siglaCidade" name="siglaCidade" value="{{ $registrosCidade->siglaCidade }}" placeholder="Digite a sigla da cidade" required>
        </div>

        <div class="form-group">
            <label for="nomeVereador">Nome do Vereador</label>
            <input type="text" class="form-control" id="nomeVereador" name="nomeVereador" value="{{ $registrosCidade->nomeVereador }}" placeholder="Digite o nome do vereador" required>
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</div>

@endsection
