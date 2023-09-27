@extends('layouts.main')

@section('title', $game->name)

@section('content')


<div >
    <div class="container mx-auto p-3 h-screen flex-col space-y-4">
        <div id="name" class="block w-full" >
            <h1 class="capitalize text-4xl text-white">{{ $game->name}}</h1>
        </div>
        <div class="flex inline-block w-full">
            <div id="imagem" class="w-3/5"><img class="w-6/12 h-auto"src="/img/games/{{ $game->image }}" alt="Imagem do jogo: {{ $game->name }}"></div>
            <div id="butn-game" class="w-2/5 self-center">
                <button id="btn-jogar"  class="text-white bg-gray-800 w-36 hover:bg-blue-900">Jogar</button>
            </div>
        </div>
        <div id="descripition" class="block w-full p-3">
            <h1 class="text-center text-white text-xl p-2">Descrição do jogo</h1>
            <span class="lowercase text-white text-justify">{{ $game->descripition}}</span></div>
        <div class="flex inline-block w-full divide-x">
            <div id="genero" class="w-3/12 pl-3">
                <h1 class="text-gray-500 font-bold">Categoria</h1>
                <span class="underline text-white">{{ $game->category}}</span>
            </div>
            <div id="creator" class="w-3/12 pl-6">
                <h1 class="text-gray-500 font-bold">Criador</h1>
                <span class="underline text-white">{{ $gameOwner['name']}}</span>
            </div>
            <div id="dados" class="w-3/12 pl-6">
                <h1 class="text-gray-500 font-bold">Data de Lançamento</h1>
                <p class="underline text-white">{{ date('d/m/Y', strtotime($game->Data_de_lancamento))}}</p>
            </div>
    </div>
</div>


{{-- <div class="container mx-auto text-white">
    <div class="grid grid-cols-4 space-x-6 items-center mt-6">
        <div id="image" >
            <img class="w-40 h-48" src="/img/games/{{ $game->image }}" alt="Imagem do jogo: {{ $game->name }}">
        </div>
        <div id="dados">
            <p> Titulo: {{ $game->name}}</p>
            <p> Data de criação: {{ date('d/m/Y', strtotime($game->Data_de_lancamento))}}</p>
            <p> Tags: {{ $game->category}}</p>
            <p> Criador por: {{ $gameOwner['name']}}</p>
        </div>
        <div>
            <button id="btn-jogar" class="bg-blue-800 w-36 hover:bg-blue-500">Jogar</button>
        </div>
        <div id="youtube-video">
            <p>video do youtube</p>
        </div>
    </div>
    <div id="description" class="flex flex-col text-center mb-4">
        <h3 class="font-bold">Descrição do jogo</h3>
        <p>{{ $game->descripition}}</p>
    </div>
</div> --}}

@endsection