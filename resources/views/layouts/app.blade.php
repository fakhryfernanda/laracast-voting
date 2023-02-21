<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 bg-gray-background text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="p-6 text-right">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="">
                    <img src="https://gravatar.com/avatar?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-[1200px] flex">
            <div class="max-w-[280px] mr-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nam assumenda voluptatem doloremque vero explicabo velit maxime! Praesentium harum et exercitationem, dolorum itaque maiores placeat illo esse! Eum, numquam vitae et sed consequuntur blanditiis dolore asperiores atque animi quo nisi. Dolor, minus? Quae molestias quisquam expedita fugit animi ipsam ipsum, iusto nemo? Corporis explicabo, excepturi, libero earum fuga omnis cum facere voluptatum ut perspiciatis nihil commodi aspernatur soluta? Fugit illo sapiente adipisci quo nostrum minima nam officia officiis voluptates iste, sed dolor laudantium hic ullam maxime quaerat a. Placeat, officia. Neque deserunt in unde, assumenda illum eius a? Nostrum, vero.
            </div>

            <div class="w-[800px]">
                <nav class="flex justify-between">
                    <ul class="flex uppercase font-semibold border-b-4 pb-4 space-x-10">
                        <li><a href="#" class="border-b-4 border-blue pb-4">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-300 ease-in border-b-4 pb-4 hover:border-blue">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-300 ease-in border-b-4 pb-4 hover:border-blue">In Progress (1)</a></li>
                    </ul>
                    
                    <ul class="flex uppercase font-semibold border-b-4 pb-4 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-300 ease-in border-b-4 pb-4 hover:border-blue mr-">Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-300 ease-in border-b-4 pb-4 hover:border-blue">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
