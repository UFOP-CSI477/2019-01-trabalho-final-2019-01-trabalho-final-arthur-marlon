@extends('layouts.app')

@section('titulo', 'Colecionaveis')

@section('content')

    <div class="container-fluid">

        <h1 class="text-primary" style="text-align: center">Colecionaveis</h1>
        <table class="table table-bordered table-hover table-striped">

            <thead class="table-primary">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Linha</th>
                <th>Tema</th>
                <th>Edição</th>
                <th>Estado de Produção</th>
                <th>Cor do Cabelo</th>
                <th>Cor dos Olhos</th>
                <th>Cor das Vestimentas</th>
                <th>Alterar</th>
                <th>Excluir</th>

            </tr>
            </thead>

            <tbody>
            @foreach($colecionaveis as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td><a>{{$e->nome}}</a></td>
                    <td>{{$e->linha}}</td>
                    <td>{{$e->tema}}</td>
                    <td>{{$e->edicao}}</td>
                    <td>{{$e->status_prod}}</td>
                    <td>{{$e->cor_cabelo}}</td>
                    <td>{{$e->cor_olhos}}</td>
                    <td>{{$e->cor_vestimentas}}</td>
                    <td><a class="btn btn-primary" href="{{route('colecionaveis.edit', $e->id)}}">Alterar</a></td>
                    <td>
                        <form method="post" action="{{route('colecionaveis.destroy', $e->id)}}"
                              onsubmit="return confirm('Deseja realmente excluir?');">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-primary" type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <a class="btn btn-primary" href="{{route('colecionaveis.create')}}">Inserir</a>
    </div>

@endsection