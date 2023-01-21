<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}"/>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
      <base href="/public">
    </head>
    <body>
       
        <div class="bg-transparent " x-data="{ isOpen: false }" style="margin-top:0px" >
            <nav class="container px-6 py-6 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="flex text-xl  font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800 md:text-2xl hover:text-blue-400"
                        href="/"><img src="images/logo.png" alt="IMG-LOGO" style="width: 80px;heigh:60px;margin-top:-20px">
                        MasterFood
                    </a>
                   
                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button"
                            class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
    
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'"
                    class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-transparent bg-clip-text font-bold bg-blue-300  hover:text-blue-400"
                        href="/">Home </a>
                    <a class="text-transparent bg-clip-text font-bold bg-blue-300  hover:text-blue-400"
                        href="{{route('categories.index' ) }}">Categories</a>
                    <a class="text-transparent bg-clip-text font-bold bg-blue-300  hover:text-blue-400"
                    href="{{route( 'menus.index') }}">Our Menu</a>
                    <a class="text-transparent bg-clip-text font-bold bg-blue-300  hover:text-blue-400"
                    href="{{route( 'reservations.step.one') }}" >Make Reservation</a>
                   
                        
                    
                    <a class="text-transparent bg-clip-text font-bold bg-blue-300  hover:text-blue-400"
                    @auth
                        href="{{ url('/showcart',Auth::user()->id) }}">
                        <i class="fas fa-cart-shopping"  class="hover:text-blue-400" style="font-size:20px; color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
   
                    @endauth
                    @guest
                    href="{{ url('/') }}">
                        <i class="fas fa-cart-shopping"  class="hover:text-blue-400" style="font-size:20px; color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
                    @endguest
                  {{-- @auth
                [{{ $count }}]  
                 @endauth
                 @guest
                    [0]
                    @endguest
                 --}} 
                 </a>
                  
                    @guest
                    @if (Route::has('register')||Route::has('login'))
                    
                    {{-- <a class="text-transparent bg-clip-text font-bold bg-blue-900  hover:text-blue-700"
                    href="{{route( 'login') }}" >
                 {{ __('Login') }}
                    </a>
                    <a class="text-transparent bg-clip-text font-bold bg-blue-900  hover:text-blue-700"
                    href="{{route( 'register') }}" >
                        {{ __('Register') }}
                           </a> --}}
                           <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="text-transparent bg-clip-text font-bold  bg-blue-200  hover:text-blue-200">
                                <i class="fas fa-user" style="font-size:20px; color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
                                     <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                    class="inline w-8 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-0 py-2 w-full bg-white rounded-md shadow dark:bg-gray-700">
                                 
    
                            <x-nav-link :href="route('login')"   class="block px-0 w-full py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-blue-300 focus:text-gray-900  focus:outline-none focus:shadow-outline"
                                :active="request()->routeIs('login')">
                                {{ __('Login') }}
                            </x-nav-link>
                            <x-nav-link :href="route('register')"   class="block px-0 w-full py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-blue-300 focus:text-gray-900  focus:outline-none focus:shadow-outline"
                            :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav-link>
                           
                            
                      



               @endif
               @else

                      <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="text-transparent bg-clip-text font-bold bg-purple-900  hover:text-purple-900">
                        <span>{{ Auth::user()->name }}</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-700">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                             
                                <x-nav-link :href="route('logout')"    onclick="event.preventDefault();
                                this.closest('form').submit();" class="block px-0 w-full py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-blue-300 focus:text-gray-900  focus:outline-none focus:shadow-outline"
                                >
                                {{ __('LogOut') }}
                            </x-nav-link>
                                 @if (Auth::user()->is_admin)
                    <x-nav-link :href="route('admin.index')"   class="block px-0 w-full py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-blue-300 focus:text-gray-900  focus:outline-none focus:shadow-outline"
                        :active="request()->routeIs('admin.index')">
                        {{ __('Dashbord') }}
                    </x-nav-link>
                 
                    @endif
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
    
                </div>
            </nav>
        </div>
            <div class="font-sans text-gray-900 antialiased min-h-screen ">
                {{ $slot }}
            </div>
            <footer class="bg-gray-800 border-t border-gray-200">
                <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
                    <div class="flex flex-wrap justify-center">
                        <ul class="flex items-center space-x-4 text-white">
                            <li>Home</li>
                            <li>About</li>
                            <li>Contact</li>
                            <li>Terms</li>
                        </ul>
                    </div>
                    <div class="flex justify-center mt-4 lg:mt-0">
                        <a>
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </footer>
        
    </body>
</html>
