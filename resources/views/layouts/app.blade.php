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
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex bg-gray-100">
            <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col ">
                <div class="h-16 flex items-center justify-center border-b">
                    <span class="text-xl font-bold text-indigo-600">Admin Panel</span>
                </div>
                <nav class="flex-1 p-4 space y-2">
                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-black text-white' :'text-gray-700 hover:bg-indigo-100' }}">Dashboard</a>
                    <a href="{{ route('admin.projects') }}" class="block px-4 py-2 rounded  {{ request()->routeIs('admin.projects') ? 'bg-black text-white' :'text-gray-700 hover:bg-indigo-100' }}">Projects</a>
                    <a href="{{ route('admin.skills.index') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.skills.index') ? 'bg-black text-white':'hover:bg-indigo-100'}}">Skills</a>
                    <a href="/admin/blog" class="block px-4 py-2 rounded hover:bg-indigo-100">Blog</a>
                    <a href="{{ route('admin.messages') }}" class="block px-4 py-2 rounded {{ request()->routeIs('admin.messages')?'bg-black text-white':'hover:bg-indigo-100' }}">Messages</a>
                </nav>
            </aside>

            <div class="flex-1 flex flex-col">
                <header class="h-16 bg-white border-b flex items-center justify-between px-6">
                    <h1 class="text-lg font-semibold">{{ $header ?? 'Dashboard' }}</h1>
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
