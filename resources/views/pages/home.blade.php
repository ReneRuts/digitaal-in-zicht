@extends('layouts.app')

@section('title', 'Digitaal in Zicht - Het platform')

@section('content')

    @php
        $dark = '#1b1f33';

        $ico = [
            'digitale-toegang' => '
            <!-- Laptop scherm met wereldbol -->
            <rect x="2" y="4" width="20" height="12" rx="2" fill="#64748b" stroke="#1b1f33" stroke-width="1.2"/>
            <rect x="4" y="6" width="16" height="8" rx="1" fill="#38bdf8"/>
            <!-- Wereldbol op scherm -->
            <circle cx="12" cy="10" r="3" fill="#0284c7"/>
            <path d="M9.5 10h5M12 7c-1 1-1 5 0 6M12 7c1 1 1 5 0 6" stroke="#e0f2fe" stroke-width="0.8" stroke-linecap="round"/>
            <!-- Laptop basis -->
            <path d="M3 18h18l-1.5-2H4.5z" fill="#cbd5e1" stroke="#1b1f33" stroke-width="1.2" stroke-linejoin="round"/>
        ',

            'digitale-competenties' => '
            <!-- Hoofd profiel -->
            <path d="M9 21v-3.5C6 16.5 4.5 14 4.5 11a7.5 7.5 0 0 1 15 0c0 1.2-.2 2.3-.7 3.3l1.2 1.7V19a2 2 0 0 1-2 2H13v0.5z" fill="#cbd5e1" stroke="#1b1f33" stroke-width="1.2" stroke-linejoin="round"/>
            <!-- Gloeilamp in het hoofd -->
            <circle cx="12" cy="9.5" r="3.5" fill="#facc15" stroke="#1b1f33" stroke-width="1.2"/>
            <path d="M10.5 13h3v1.5h-3z" fill="#94a3b8" stroke="#1b1f33" stroke-width="1"/>
            <path d="M10 5.5l-1.5-1.5M14 5.5l1.5-1.5M16 9.5h2M6 9.5h2" stroke="#facc15" stroke-width="1.2" stroke-linecap="round"/>
        ',

            'ondersteuningsnetwerk' => '
            <!-- Drie poppetjes in cirkel -->
            <circle cx="12" cy="4" r="1.8" fill="#f87171" stroke="#1b1f33" stroke-width="1.1"/>
            <path d="M9 8c0-1.5 1.3-2.5 3-2.5s3 1 3 2.5v1H9z" fill="#f87171" stroke="#1b1f33" stroke-width="1.1"/>

            <circle cx="5" cy="16" r="1.8" fill="#34d399" stroke="#1b1f33" stroke-width="1.1"/>
            <path d="M2 20c0-1.5 1.3-2.5 3-2.5s3 1 3 2.5v1H2z" fill="#34d399" stroke="#1b1f33" stroke-width="1.1"/>

            <circle cx="19" cy="16" r="1.8" fill="#fb923c" stroke="#1b1f33" stroke-width="1.1"/>
            <path d="M16 20c0-1.5 1.3-2.5 3-2.5s3 1 3 2.5v1h-6z" fill="#fb923c" stroke="#1b1f33" stroke-width="1.1"/>

            <!-- Middelpunt -->
            <circle cx="12" cy="12" r="1.5" fill="#a855f7" stroke="#1b1f33" stroke-width="1.2"/>

            <!-- Pijlen netwerk -->
            <path d="M7 6.5l2 2M17 6.5l-2 2M13.5 16.5l2-2M10.5 16.5l-2-2" stroke="#1b1f33" stroke-width="1" stroke-linecap="round"/>
            <path d="M12 10.5V8M10.5 13.5l-3.5 1.5M13.5 13.5l3.5 1.5" stroke="#1b1f33" stroke-width="1" stroke-linecap="round" stroke-dasharray="1 1"/>
        ',

            'behoeftes' => '
            <!-- Tekstballon -->
            <path d="M3 4c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h4l4 4 4-4h3c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H3z" fill="#f43f5e" stroke="#1b1f33" stroke-width="1.2" stroke-linejoin="round"/>
            <!-- Hartje in ballon -->
            <path d="M12 13s-3.5-2.5-3.5-4.5a2 2 0 0 1 3.5-1.2A2 2 0 0 1 15.5 8.5C15.5 10.5 12 13 12 13z" fill="#ffffff" stroke="#1b1f33" stroke-width="1"/>
        ',

            'inclusieve-dienstverlening' => '
            <!-- Handen aan de zijkant -->
            <path d="M3 18c0-1.5 1-2.5 2.5-2.5h2c1 0 1.8.5 2.2 1.2L11 19" fill="none" stroke="#fed7aa" stroke-width="2.5" stroke-linecap="round"/>
            <path d="M21 18c0-1.5-1-2.5-2.5-2.5h-2c-1 0-1.8.5-2.2 1.2L13 19" fill="none" stroke="#fed7aa" stroke-width="2.5" stroke-linecap="round"/>
            <!-- Handen contouren -->
            <path d="M3 18c0-1.5 1-2.5 2.5-2.5h2c1 0 1.8.5 2.2 1.2L11 19" fill="none" stroke="#1b1f33" stroke-width="1.2" stroke-linecap="round"/>
            <path d="M21 18c0-1.5-1-2.5-2.5-2.5h-2c-1 0-1.8.5-2.2 1.2L13 19" fill="none" stroke="#1b1f33" stroke-width="1.2" stroke-linecap="round"/>
            <!-- Centraal Hartje -->
            <path d="M12 14s-4-3-4-5.5a2.2 2.2 0 0 1 4-1.3 2.2 2.2 0 0 1 4 1.3c0 2.5-4 5.5-4 5.5z" fill="#f43f5e" stroke="#1b1f33" stroke-width="1.2" stroke-linejoin="round"/>
        ',

            'groups' => '
            <!-- Groep poppetjes (Centrale cirkel) -->
            <circle cx="12" cy="7" r="3" fill="#fbcfe8" stroke="#1b1f33" stroke-width="1.2"/>
            <path d="M7 16.5c0-2.2 1.8-4 5-4s5 1.8 5 4v1.5H7v-1.5z" fill="#38bdf8" stroke="#1b1f33" stroke-width="1.2" stroke-linejoin="round"/>
            
            <circle cx="5" cy="10" r="2.2" fill="#fed7aa" stroke="#1b1f33" stroke-width="1.2"/>
            <path d="M1.5 17.5c0-1.7 1.5-3 3.5-3h1" fill="none" stroke="#1b1f33" stroke-width="1.2" stroke-linecap="round"/>

            <circle cx="19" cy="10" r="2.2" fill="#fecaca" stroke="#1b1f33" stroke-width="1.2"/>
            <path d="M22.5 17.5c0-1.7-1.5-3-3.5-3h-1" fill="none" stroke="#1b1f33" stroke-width="1.2" stroke-linecap="round"/>
        ',
        ];

        $icon = fn($slug, $attrs = '') => '<svg viewBox="0 0 24 24" ' .
            $attrs .
            '>
            <g>' .
            $ico[$slug] .
            '</g>
        </svg>';

        $teardropPath = 'M 30,-50 A 50 50 0 1 0 -30,-50 C -6,-32 -4,-8 0,0 C 4,-8 6,-32 30,-50 Z';

        $positions = [
            'digitale-toegang' => [
                'angle' => 0,
                'label' => 'digitale toegang',
                'labelX' => 450,
                'labelY' => 40,
                'anchor' => 'start',
            ],
            'ondersteuningsnetwerk' => [
                'angle' => 60,
                'label' => 'ondersteuningsnetwerk',
                'labelX' => 540,
                'labelY' => 125,
                'anchor' => 'start',
            ],
            'inclusieve-dienstverlening' => [
                'angle' => 120,
                'label' => 'inclusieve<tspan x="480" dy="20">dienstverlening</tspan>',
                'labelX' => 480,
                'labelY' => 285,
                'anchor' => 'start',
            ],
            'behoeftes' => [
                'angle' => 240,
                'label' => 'behoeftes',
                'labelX' => 220,
                'labelY' => 285,
                'anchor' => 'end',
            ],
            'digitale-competenties' => [
                'angle' => 300,
                'label' => 'digitale <tspan x="160" dy="20">compententies</tspan>',
                'labelX' => 160,
                'labelY' => 125,
                'anchor' => 'end',
            ],
        ];

        $rankLabels = [
            'digitale-toegang' => 'digitale<br>toegang',
            'digitale-competenties' => 'digitale<br>compententies',
            'ondersteuningsnetwerk' => 'ondersteunings-<br>netwerk',
            'behoeftes' => 'behoeftes',
            'inclusieve-dienstverlening' => 'inclusieve<br>dienstverlening',
        ];
    @endphp

    <section class="mx-auto w-full max-w-4xl px-5">
        <h1 class="text-3xl font-bold text-[#1b2a4e]">
            Het platform
        </h1>
        <p class="mt-2 max-w-xl text-md leading-snug text-slate-700">
            Deze website biedt een overzicht van de verschillende dimensies rond digitale inclusie
            en de daarbinnen gevonden informatie/hiaten.
        </p>
    </section>

    <section class="mx-auto mt-4 w-full max-w-5xl px-3" aria-label="De vijf dimensies van digitale inclusie">
        <div class="mx-auto w-full max-w-4xl">

            <svg viewBox="0 0 700 330" class="block h-auto w-full" xmlns="http://www.w3.org/2000/svg" role="img">
                <defs>
                    <filter id="petal-shadow" x="-30%" y="-30%" width="160%" height="160%">
                        <feDropShadow dx="0" dy="2" stdDeviation="3" flood-color="#26374a"
                            flood-opacity=".15" />
                    </filter>
                </defs>

                @foreach ($dimensions as $d)
                    @php
                        $p = $positions[$d->slug];
                    @endphp

                    <a href="{{ route('theme', $d) }}" aria-label="{{ $d->name }}" class="cursor-pointer group">
                        <g transform="translate(350 165) rotate({{ $p['angle'] }})">

                            <g transform="translate(0, -20)">
                                <path d="{{ $teardropPath }}" fill="{{ $d->hex }}" stroke="#1b1f33" stroke-width="2"
                                    filter="url(#petal-shadow)" transform="rotate(330, 0, -90)"
                                    class="transition-transform duration-300 group-hover:scale-[1.03]" />

                                <g transform="translate(0, -90) rotate(-{{ $p['angle'] }})"
                                    class="transition-transform duration-300 group-hover:scale-[1.03]">
                                    {!! $icon($d->slug, 'x="-27.5" y="-27.5" width="55" height="55"') !!}
                                </g>
                            </g>
                        </g>
                    </a>
                @endforeach

                <circle cx="350" cy="165" r="50" fill="#5a8fbb" stroke="#1b1f33" stroke-width="2"
                    filter="url(#petal-shadow)" />
                {!! $icon('groups', 'x="326" y="141" width="50" height="50"') !!}

                @foreach ($dimensions as $d)
                    @php
                        $p = $positions[$d->slug];
                    @endphp
                    <a href="{{ route('theme', $d) }}">
                        <text x="{{ $p['labelX'] }}" y="{{ $p['labelY'] }}" text-anchor="{{ $p['anchor'] }}"
                            fill="#111827" font-size="15" font-weight="600" font-family="inherit">
                            {!! $p['label'] !!}
                        </text>
                    </a>
                @endforeach
            </svg>

        </div>
    </section>

    <section class="mx-auto mt-12 w-full max-w-7xl px-4">
        <h2 class="mb-2 md:pl-15 text-sm font-medium text-slate-800">
            Onderzochte dimensies
        </h2>

        <div class="flex flex-wrap items-center justify-center gap-x-3 gap-y-2 text-11 leading-tight text-slate-800">
            <span class="text-right">
                Meest<br>
                onderzocht
            </span>

            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#6bb597] text-white">
                <svg viewBox="0 0 24 24" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="3"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </span>

            @foreach ($ranking as $d)
                <a href="{{ route('theme', $d) }}" class="flex items-center gap-1.5 hover:underline">
                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full"
                        style="background: {{ $d->hex }}">
                        {!! $icon($d->slug, 'class="h-3 w-3"') !!}
                    </span>
                    <span>
                        {!! $rankLabels[$d->slug] !!}
                    </span>
                </a>
            @endforeach

            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#c2433d] text-white">
                <svg viewBox="0 0 24 24" class="h-4.5 w-4.5 rotate-180" fill="none" stroke="currentColor"
                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </span>

            <span>
                Minst<br>
                onderzocht
            </span>
        </div>
    </section>


@endsection
