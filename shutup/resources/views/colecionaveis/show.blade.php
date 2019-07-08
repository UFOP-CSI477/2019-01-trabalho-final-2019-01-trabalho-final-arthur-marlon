@extends('layouts.app')

@section('titulo', 'Colecionaveis')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Nome: {{$colecionavel->nome}}</h1>
                <p>Código:{{$colecionavel->id}}</p>
                <p>Linha:{{$colecionavel->linha}}</p>
                <p>Tema:{{$colecionavel->tema}}</p>
                <p>Edição:{{$colecionavel->edicao}}</p>
                <p>Estado de Produção:{{$colecionavel->status_prod}}</p>
                <p>Cor do Cabelo:{{$colecionavel->cor_cabelo}}</p>
                <p>Cor dos Olhos:{{$colecionavel->cor_olhos}}</p>
                <p>Cor das Vestimentas:{{$colecionavel->cor_vestimentas}}</p>
            </div>

        </div>

        <div class="row">
            <div class="col-sm">
                {{--    voltar para a lista de estados --}}
                <a class="btn  btn-sm btn-primary" href="{{route('colecionaveis.index')}}">Voltar</a>
            </div>

            <div class="col-sm">
                {{--    Editar o estado--}}
                <a class="btn btn-sm btn-primary" href="{{route('colecionaveis.edit', $colecionavel->id)}}">Editar</a>
            </div>

            <div class="col-sm">
                {{--    Excluir o Estado--}}
                <form mepod="post" action="{{route('colecionaveis.destroy', $colecionavel->id)}}"
                      onsubmit="return confirm('Deseja realmente excluir?');">
                    @csrf
                    @method('DELETE')
                    <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
                </form>
            </div>

        </div>
    </div>

@endsection