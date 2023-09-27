@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div>
    <h1>Meus Jogos</h1>
</div>

<div>
    @if (count($games) > 0 )
        
    @else
        <p>Você ainda não cadastrou nenhum game! <br>
        <a href="/cadastro">Cadastrar novo Jogo</a></p>
    @endif
</div>
@endsection
