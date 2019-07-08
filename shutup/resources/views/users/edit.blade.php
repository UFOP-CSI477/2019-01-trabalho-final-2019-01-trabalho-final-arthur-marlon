@extends('layouts.app')

@section('titulo', 'Procedimentos')

@section('content')
<div class="container">

    <div class="row">
        <div class="col">

        </div>
    </div>
</div>
    <form method="post" action="{{route('users.update', $user->id)}}">
        @csrf
        @method('PATCH')

        <p class="form-text">Nome <input class="form-control" type="text" name="name" value="{{$user->name}}"></p>
        <p class="form-text">email <input class="form-control" type="text" name="email" value="{{$user->email}}"></p>
{{--        <p class="form-text">Senha <input class="form-control" type="text" name="password" value="{{\Illuminate\Support\Facades\Hash::$user->password}}"></p>--}}
        <p class="form-text">Tipo <input class="form-control" type="text" name="tipo" value="{{$user->tipo}}"></p>


        <input class="btn btn-primary" type="submit" name="btnSalvar" value="incluir">
    </form>

@endsection
