@extends('layouts.app')

@section('titulo', 'Ofertas')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <h1 class="text-primary" style="text-align: center">Colecionaveis a Venda</h1>
                <table class="table table-bordered table-hover table-striped">

                    <thead class="table-primary">
                    <tr>
                        <th>Quem vende</th>
                        <th>Nome</th>
                        <th>Linha</th>
                        <th>Valor de Venda</th>
                        <th>Estado</th>
                        <th>Tema</th>
                        <th>Edição</th>
                        <th>Estado de Produção</th>
                        <th>Cor do Cabelo</th>
                        <th>Cor dos Olhos</th>
                        <th>Cor das Vestimentas</th>
                        <th>Visualizar</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($ofertas as $e)
                        <tr>
                            <td>{{$e->user->name}}</td>
                            <td>{{$e->colecionavel->nome}}</td>
                            <td>{{$e->colecionavel->linha}}</td>
                            <td>{{$e->valor}}</td>
                            <td>{{$e->estado}}</td>
                            <td>{{$e->colecionavel->tema}}</td>
                            <td>{{$e->colecionavel->edicao}}</td>
                            <td>{{$e->colecionavel->status_prod}}</td>
                            <td>{{$e->colecionavel->cor_cabelo}}</td>
                            <td>{{$e->colecionavel->cor_olhos}}</td>
                            <td>{{$e->colecionavel->cor_vestimentas}}</td>
                            <td><a class="btn  btn-sm btn-primary" href="{{route('ofertas.show', $e->id)}}">Visualizar</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{route('ofertas.create')}}">Inserir</a>
            </div>

        </div>

    </div>

@endsection