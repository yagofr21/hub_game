@extends('layouts.main')

@section('title', 'Editando Jogo '. $game->name)

@section('content')

<div class="container mx-auto">
    <h1 class="text-white font-bold text-center mt-5"> Edite seu jogo: {{$game->name}}</h1>
    <form class="flex flex-col items-center justify-items" action="/game/update/{{ $game->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-col text-white mb-6 p-6 box-content h-84 w-96 mt-12 rounded border-2 space-y-2"> 
            <label for="title">Jogo </label>
            <input class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" type="text" name="name" id="name" placeholder="Nome do jogo" value="{{$game->name}}">
            <label for="title">Data de criação </label>
            <input class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" type="date" name="Data_de_lancamento" id="Data_de_lancamento" placeholder="data de criação do jogo" value="{{ $game->Data_de_lancamento }}">
            <label for="title">Categoria </label>
            <input class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" type="text" name="category" id="category" placeholder="categoria do jogo" value="{{$game->category}}">
            <label for="title">Descrição </label>
            <textarea class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" name="descripition" id="descripition" placeholder="descrição do jogo">{{ $game->descripition }}</textarea>
            <label for="image">Imagem de seu jogo</label>
            <input type="file" id="image" name="image">
            <img src="/img/games/{{$game->image}}" alt="{{$game->name}}">
            <input class="mt-3 px-3 py-3 w-full font-bold text-center bg-blue-800 hover:bg-blue-600 rounded text-white" type="submit" value="Salvar">
        </div>
        
    </form>
</div>
    
@endsection