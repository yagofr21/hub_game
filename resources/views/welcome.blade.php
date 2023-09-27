@extends('layouts.main')

@section('title', 'Games Hub')

@section('content')

    <div class="container mx-auto h-screen flex-col space-y-4">
        <div class="flex flex-inline justify-center w-full">
            <h1 class="mx-1 p-2 text-white flex justify-end font-bold">Busque seu jogo</h1>
            <form action="/" method="GET" class=" mx-1 p-2">
                <input
                    class="flex justify-start w-72 h-8 border border-blue-900 rounded-lg text-center focus:outline-none focus:ring focus:border-blue-300"
                    type="text" id="buscar" name="buscar" placeholder="Procure seu jogo">
            </form>
        </div>
        <div class="">
            <h1 class="block font-bold text-center text-white mb-6">Jogos</h1>
            @if ($buscar)
                <h2>Buscando por: {{ $buscar }}</h2>
            @else
            @endif
            <div class="flex flex-wrap space-y-3">
                @foreach ($games as $game)
                    <div class="w-1/4">
                        <a href="/game/{{ $game->id }}">
                            <img class="flex justify-items-center rounded-t-lg h-48 w-48"src="/img/games/{{ $game->image }}"
                                alt="{{ $game->name }}">
                        </a>
                        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $game->name }}</h1>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Categoria:
                            {{ $game->category }}</p>
                    </div>
                @endforeach
                @if (count($games) == 0 && $buscar)
                    <p> Não foi possível encontrar nenhum jogo com:{{ $buscar }}! <a href="/">Ver todos
                            os
                            jogos</a></p>
                @elseif(count($games) == 0)
                    <p>Não há jogos disponíveis</p>
                @endif
            </div>
        </div>
    </div>
@endsection
