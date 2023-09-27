@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div>
        <h1 class="font-bold text-center text-white p-3">Meus Jogos</h1>
    </div>


    <div class="relative overflow-x-auto p-3 shadow-md sm:rounded-lg">
        <table class="container mx-auto text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            @foreach ($games as $game)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->index + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            <a class="" href="/game/{{ $game->id }}">
                                {{ $game->name }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $game->category }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                href="/game/edit/{{ $game->id }}">Editar</a>
                            <form action="/game/{{ $game->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>

                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
