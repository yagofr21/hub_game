@extends('layouts.main')

@section('title', 'Cadastrar novo jogo')

@section('content')

<div class="container mx-auto">
    <h1 class="text-white font-bold text-center mt-5"> Crie o seu jogo</h1>
    <form class="flex flex-col items-center justify-items" action="/game" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col text-white mb-6 p-6 box-content h-84 w-96 mt-12 rounded border-2 space-y-2"> 
            <label for="title">Jogo </label>
            <input class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" type="text" name="name" id="name" placeholder="Nome do jogo">
            <label for="title">Data de criação </label>
            <input class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" type="date" name="Data_de_lancamento" id="Data_de_lancamento" placeholder="data de criação do jogo">
            <label for="title">Categoria </label>
            <input class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" type="text" name="category" id="category" placeholder="categoria do jogo">
            <label for="title">Descrição </label>
            <textarea class="rounded text-black mb-3 px-2 py-1 focus:outline-none focus:ring focus:border-blue-300" name="descripition" id="descripition" placeholder="descrição do jogo"></textarea>
            <label for="image">Imagem de seu jogo</label>
            <input type="file" id="image" name="image">
            <input class="mt-3 px-3 py-3 w-full font-bold text-center bg-blue-800 hover:bg-blue-600 rounded text-white" type="submit" value="Criar Jogo">
        </div>
        
    </form>
</div>
    
@endsection