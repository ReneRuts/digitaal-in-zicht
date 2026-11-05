<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Digitaal in Zicht')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#e6eef1] text-diz-ink font-sans antialiased min-h-screen flex flex-col">
    @php
        $link = fn($active) => $active ? 'text-[#4fa58f]' : 'text-slate-700 hover:text-[#4fa58f]';
    @endphp
    <header class="bg-white shadow-md" x-data="{ open: false, themes: false }" @keydown.escape.window="themes = false">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl text-slate-700">
                <img src="{{ asset('logo.png') }}" alt="Logo Digitaal in Zicht" class="h-15 w-auto">
            </a>

            <button class="md:hidden p-2" @click="open = !open" aria-label="Menu" :aria-expanded="open">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <nav class="hidden md:flex text-md items-center gap-1" aria-label="Hoofdmenu">
                <a href="{{ route('home') }}"
                    class="px-3 py-2 font-medium {{ $link(request()->routeIs('home')) }}">Home</a>
                <a href="{{ route('about') }}" class="px-3 py-2 font-medium {{ $link(request()->routeIs('about')) }}"
                    @if (request()->routeIs('about')) aria-current="page" @endif>Wie zijn wij?</a>

                <div class="relative" @click.outside="themes = false">
                    <button @click="themes = !themes" :aria-expanded="themes"
                        class="px-3 py-2 font-medium flex items-center gap-1 {{ $link(request()->routeIs('theme')) }}">
                        Thema's <span aria-hidden="true">▾</span>
                    </button>
                    <ul x-show="themes" x-cloak x-transition
                        class="absolute right-0 mt-1 w-64 bg-white border border-slate-200 rounded-lg shadow-lg py-1 z-20">
                        @foreach ($navDimensions as $d)
                            <li><a href="{{ route('theme', $d) }}"
                                    class="flex items-center gap-3 px-4 py-2 hover:bg-slate-100">
                                    <span class="w-3 h-3 rounded-full"
                                        style="background: {{ $d->hex }}"></span>{{ $d->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <a href="{{ route('mdls') }}"
                    class="px-3 py-2 font-medium {{ $link(request()->routeIs('mdls')) }}">MDLS</a>
                <a href="{{ route('background') }}"
                    class="px-3 py-2 font-medium {{ $link(request()->routeIs('background', 'matrix')) }}">Achtergrond</a>
            </nav>
        </div>

        {{-- mobiel menu --}}
        <nav x-show="open" x-cloak class="md:hidden border-t border-slate-200 px-4 py-2 space-y-1"
            aria-label="Mobiel menu">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md {{ $link(request()->routeIs('home')) }}">Home</a>
            <a href="{{ route('about') }}"
                class="block px-3 py-2 rounded-md {{ $link(request()->routeIs('about')) }}">Wie zijn wij?</a>
            <p class="px-3 pt-2 text-sm font-semibold text-slate-500">Thema's</p>
            @foreach ($navDimensions as $d)
                <a href="{{ route('theme', $d) }}"
                    class="flex items-center gap-3 px-6 py-2 rounded-md hover:bg-slate-100">
                    <span class="w-3 h-3 rounded-full"
                        style="background: {{ $d->hex }}"></span>{{ $d->name }}</a>
            @endforeach
            <a href="{{ route('mdls') }}"
                class="block px-3 py-2 rounded-md {{ $link(request()->routeIs('mdls')) }}">MDLS</a>
            <a href="{{ route('background') }}"
                class="block px-3 py-2 rounded-md {{ $link(request()->routeIs('background', 'matrix')) }}">Achtergrond</a>
        </nav>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 py-5">@yield('content')</main>

    <footer class="border-t border-slate-200 bg-white py-2 text-center text-sm text-slate-500">
        © {{ date('Y') }} Digitaal in Zicht
    </footer>
</body>

</html>
