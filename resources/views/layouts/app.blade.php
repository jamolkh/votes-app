<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <livewire:styles />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
       <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
           <a href=""><img src="{{asset('img/logo1.png')}}" alt="" width="150px"></a>
           <div class="flex mt-2 md:mt-0 items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </a>
                </form>                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
            @endif
               <a href="">
                   <img src="https://www.gravatar.com/avatar/00000000000000000000?d=mp" alt="avatar"
                   class = "w-10 h-10 rounded-full">
               </a>
           </div>
       </header>
       <main class="container mx-auto flex max-w-custom flex-col md:flex-row">
           <div class="w-70 md:mr-5 mx-auto md:mx-0 ">
                <div class="bg-white border-2 text-center border-theme rounded-xl mt-16 md:sticky top-8 "      style="
                border-image-source: linear-gradient(to bottom, rgb(148,10,132), rgba(99, 123, 255, 0));
                border-image-slice: 1;
                background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                background-origin: border-box;
                background-clip: content-box, border-box;
              ">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <p class="text-xs mt-4">
                            @auth
                                Let us know what you would like and we'll take a look over!
                            @else
                                Please Login to create your idea.
                            @endauth
                        </p>
                    </div>
                    @auth
                        <livewire:create-idea/>
                    @else
                        <div class="my-6 texte-center">
                            <a href="{{route('login')}}" class="inline-block items-center justify-center w-1/2 h-11 text-xs bg-theme
                            font-semibold rounded-xl border text-white border-theme hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 ">
                                <span class="ml-2">Login</span>
                            </a>
                            <a href="{{route('register')}}" class="mt-4 inline-block items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                            font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                                <span class="ml-2">Sign up</span>
                            </a>
                        </div>
                    @endauth
                </div>
           </div>
            <div class="w-full px-2 md:px-0 md:w-175">
                <nav class="hidden md:flex tems-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-theme ">All Ideas (87)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4
                            pb-3 hover:border-theme" >Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4
                                pb-3 hover:border-theme" >In Progress (1)</a></li>

                    </ul>

                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4
                            pb-3 hover:border-theme" >Implemented (10)</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4
                                pb-3 hover:border-theme" >Closed (55)</a></li>

                    </ul>
                </nav>
                <div class = "mt-8">
                    {{$slot}}
                </div>
            </div>
        </main>
        <livewire:scripts />
    </body>
</html>
