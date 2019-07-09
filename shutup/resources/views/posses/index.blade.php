@extends('layouts.app')

@section('titulo', 'Meus Colecionaveis')

@section('content')

    <div class="container-fluid">

        <h1 class="text-primary" style="text-align: center">Meus Colecionaveis</h1>
        <table class="table table-bordered table-hover table-striped">

            <thead class="table-primary">
            <tr>
                <th>Nome</th>
                <th>Linha</th>
                <th>Valor Comprado</th>
                <th>Data</th>
                <th>Tema</th>
                <th>Edição</th>
                <th>Estado de Produção</th>
                <th>Cor do Cabelo</th>
                <th>Cor dos Olhos</th>
                <th>Cor das Vestimentas</th>
                <th>Excluir</th>

            </tr>
            </thead>

            <tbody>
            @foreach($posses as $e)
                <tr>

                    <td>{{$e->colecionavel->nome}}</td>
                    <td>{{$e->colecionavel->linha}}</td>
                    <td>{{$e->valor}}</td>
                    <td>{{$e->data}}</td>
                    <td>{{$e->colecionavel->tema}}</td>
                    <td>{{$e->colecionavel->edicao}}</td>
                    <td>{{$e->colecionavel->status_prod}}</td>
                    <td>{{$e->colecionavel->cor_cabelo}}</td>
                    <td>{{$e->colecionavel->cor_olhos}}</td>
                    <td>{{$e->colecionavel->cor_vestimentas}}</td>
                    <td>
                        <form method="post" action="{{route('posses.destroy', $e->id)}}"
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

        <a class="btn btn-primary" href="{{route('posses.create')}}">Inserir</a>
    </div>

@endsection