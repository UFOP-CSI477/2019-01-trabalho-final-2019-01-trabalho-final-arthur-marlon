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

                <a class="btn  btn-sm btn-primary" href="{{route('users.index')}}">Voltar</a>

            </div>

            @if(\Illuminate\Support\Facades\Auth::user()->id == 1)
                <div class="col">

                    <a class="btn btn-sm btn-primary" href="{{route('users.edit', $user->id)}}">Editar</a>

                </div>

                <div class="col">

                    <form method="post" action="{{route('users.destroy', $user->id)}}"
                          onsubmit="return confirm('Deseja realmente excluir?');">
                        @csrf
                        @method('DELETE')
                        <input class="btn  btn-sm btn-primary" type="submit" value="Excluir">
                    </form>
                </div>
            @endif
        </div>
    </div>

@endsection