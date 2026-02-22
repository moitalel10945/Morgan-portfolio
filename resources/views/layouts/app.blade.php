<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       @livewireStyles
    </head>
    <body  x-data="{ open: false }" class="font-sans antialiased">
        <div class="min-h-screen flex bg-gray-100">
            <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-200 transform md:translate-x-0 md:static md:flex flex-col transition-transform duration-200 ease-in-out">

            
            <div class="h-16 flex items-center justify-center border-b">
                <span class="text-xl font-bold text-indigo-600">Admin Panel</span>
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-black text-white' :'text-gray-700 hover:bg-indigo-100' }}">Dashboard</a>
                <a href="{{ route('admin.projects') }}" class="block px-4 py-2 rounded  {{ request()->routeIs('admin.projects') ? 'bg-black text-white' :'text-gray-700 hover:bg-indigo-100' }}">Projects</a>
                <a href="{{ route('admin.skills.index') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.skills.index') ? 'bg-black text-white':'hover:bg-indigo-100'}}">Skills</a>
                <a href="/admin/blog" class="block px-4 py-2 rounded hover:bg-indigo-100">Blog</a>
                <a href="{{ route('admin.messages') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.messages')?'bg-black text-white':'hover:bg-indigo-100' }}">Messages</a>
            </nav> 
            </aside>
            <div x-show="open" x-transition.opacity  @click="open = false" class="fixed inset-0 bg-black bg-opacity-50  z-40 md:hidden">
            </div>
            <div class="flex-1 flex flex-col">
                <header class="h-16 bg-white border-b flex items-center justify-between px-6">
                    <div class="flex items-center space-x-4">
                        <!-- Hamburger Button -->
                        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="h-6 w-6" 
                                 fill="none" 
                                 viewBox="0 0 24 24" 
                                 stroke="currentColor">
                                <path stroke-linecap="round" 
                                      stroke-linejoin="round" 
                                      stroke-width="2" 
                                      d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                
                        <h1 class="text-lg font-semibold">
                             {{ $header ?? 'Dashboard' }}
                        </h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-600">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-sm text-red-500 hover:underline">Logout</button>
                        </form>
                    </div>
                </header>
                <main>
                    {{ $slot }}
                </main>
            </div>
            
        </div>
    </body>
</html>
