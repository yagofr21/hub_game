<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>


    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <header>
        <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex">
                    <img src="/img/logo.png" class="h-8" alt="Indiana" />
                    <div class="w-full md:block md:w-auto" id="navbar-solid-bg">
                        <ul
                            class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                            @auth
                                <li>
                                    <a href="/cadastro"
                                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 duration-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        aria-current="page">Cadastrar Jogo</a>
                                </li>
                                <li>
                                    <a href="/dashboard"
                                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 duration-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        aria-current="page">Meus Jogos</a>
                                </li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 duration-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="/logout"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        Sair</a>
                                </form>
                            @endauth
                            @guest
                                <li>
                                    <a href="/login"
                                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 duration-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                                </li>
                                <li>
                                    <a href="/register"
                                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 duration-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
            </div>
        </nav>




        </nav>
    </header>

    @yield('content')

    <footer class="shadow dark:bg-gray-800">
        <div class="container flex inline-block items-center justify-between mx-auto p-4 p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Indiana</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="text-white mr-4 hover:underline md:mr-6 ">Nossas Redes</a>
                </li>
                <li>
                    <a href="#" class="text-white mr-4 hover:underline md:mr-6">Sobre nos</a>
                </li>
                <li>
                    <a href="#" class="text-white mr-4 hover:underline md:mr-6">Informações legais</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:underline">Criador</a>
                </li>
            </ul>
        </div>
    </footer>

</body>

</html>
