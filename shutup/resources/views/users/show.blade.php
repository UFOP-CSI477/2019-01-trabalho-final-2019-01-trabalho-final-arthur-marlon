@extends('layouts.app')

@section('titulo', 'Usuarios')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Nome: {{$user->name}}</h1>

                <p>Código: {{$user->id}}</p>
                <p>Email: {{$user->email}}</p>
                <p>Tipo: {{$user->tipo}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                {{--    voltar para a lista de estados --}}
                <a class="btn  btn-sm btn-primary" href="{{route('users.index')}}">Voltar</a>

            </div>

            <div class="col">
                {{--    Editar o estado--}}
                <a class="btn btn-sm btn-primary" href="{{route('users.edit', $user->id)}}">Editar</a>

            </div>

            <div class="col">
                {{--    Excluir o Estado--}}
                <form method="post" action="{{route('users.destroy', $user->id)}}"
                      onsubmit="return confirm('Deseja realmente excluir?');">
                    @csrf
                    @method('DELETE')
                    <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
                </form>
            </div>
        </div>
    </div>

@endsection