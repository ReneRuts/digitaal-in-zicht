@extends('layouts.app')
@section('title', 'Achtergrond - Digitaal in Zicht')
@section('content')

    <div class="max-w-4xl mx-auto px-4 w-full pb-12">

        <header>
            <h1 class="text-4xl font-bold text-slate-800">Achtergrond</h1>
        </header>

        <section class="mt-10">
            <h2 class="text-2xl mb-2 font-bold text-slate-800">Ons onderzoeksproces</h2>
            <div class="flex flex-row max-w-3xl gap-2">
                <p>Ons onderzoeksproces vertrekt in eerste instantie vanuit human-centered design. Daarnaast
                    vormt het double-diamond model de leidraad van het proces.<br><br>Dit houdt in dat de volgende
                    vier fases doorlopen werden: discover, define, ideate
                    en prototype.</p>
                <img src="{{ asset('double-diamond_model.png') }}" alt="Double diamond model" class=" w-full max-w-lg mx-auto">
            </div>
            <p class="mt-4">Concreet begon alles bij de praktijkuitdaging die ons
                voorgeschoteld werd (meer info hierover vind je bij
                <a class="text-blue-800 hover:underline" href="{{ route('about') }}">&OpenCurlyDoubleQuote;Wie zijn
                    wij?&CloseCurlyDoubleQuote;</a>). Van daaruit
                werd een
                literatuuronderzoek op poten gezet, verspreid over drie niveau’s (onderzoek, praktijk &amp;
                beleid) om op die manier een zo breed mogelijke kennisbasis te vormen voor het verder
                onderzoek.
            </p>

            <p class="mt-3">Op basis van een eerste literatuurstudie werden onderzoeksvragen en een onderzoeksplan
                opgesteld. Dit werd op zijn beurt gevolgd door een tweede literatuuronderzoek waarin
                gerichter kon onderzocht worden. In combinatie met het literatuuronderzoek werd ook een
                veldonderzoek opgesteld. Hierin werd, met vragen komende uit het literatuuronderzoek,
                naar vijf verschillende experts gestapt in de hoop nieuwe antwoorden en inzichten te
                verkrijgen. Vervolgens werd aan grondige data-analyse gedaan die daarnaast ook verder
                aangevuld werd met veldonderzoek. Dit vormde op zijn beurt ook het einde van de eerste
                diamant van het model.
            </p>
            <p class="mt-3">Vooraleer over te gaan naar de tweede diamant, werd een ‘hoe kunnen we’-vraag
                opgesteld: “Hoe kunnen we experts een helder overzicht bieden van wat er al bestaat rond
                digitale minimumbehoeftes, waar liggen er nog kennishiaten en welke verdienen prioriteit
                voor vervolgonderzoek”. Daarnaast stelden we ook een aantal ontwerpeisen op waaraan het
                prototype moest voldoen. De ideate fase werd grotendeels ingevuld door brainstorming om
                daarna aan de slag te gaan met de prototype fase, waarin het ontwikkelen van het prototype
                aan de beurt is gekomen en waarna we tot een definitief prototype (deze website) zijn
                gekomen.
            </p>
            <div
                class="mt-6 flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-6 text-sm md:text-base font-semibold text-slate-800">
                <div class="flex items-center gap-3">
                    <div
                        class="w-12 h-12 shrink-0 rounded-full bg-[#82B39E] bg-opacity-30 flex items-center justify-center text-[#4B7A66]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <span class="leading-tight">Literatuurstudie &<br>Veldonderzoek</span>
                </div>

                <svg class="hidden md:block w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>

                <div class="flex items-center gap-3">
                    <div
                        class="w-12 h-12 shrink-0 rounded-full bg-[#5B7B88] text-white flex items-center justify-center text-xl font-bold">
                        2
                    </div>
                    <span class="leading-tight">Dataverzameling &<br>Analyse</span>
                </div>

                <svg class="hidden md:block w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>

                <div class="flex items-center gap-3">
                    <div
                        class="w-12 h-12 shrink-0 rounded-full bg-[#1E3A45] text-white flex items-center justify-center text-xl font-bold">
                        3
                    </div>
                    <span class="leading-tight">Ontwikkeling prototype</span>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <h2 class="text-2xl font-bold text-slate-800">Referentielijst (Bronnen)</h2>
            <ul class="mt-4 divide-y divide-slate-300 border-b border-slate-300 w-full">
                @foreach (config('diz.sources') as $source)
                    <li>
                        <a href="{{ $source['url'] }}" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-between py-3 hover:text-slate-500 transition-colors">
                            <span class="font-medium text-slate-800">{{ $source['name'] }}</span>
                            <x-icon name="external" class="w-5 h-5 text-slate-500 shrink-0 ml-4" />
                            <span class="sr-only">(opent extern)</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section
            class="mt-12 rounded-2xl bg-[#E6F0EB] border border-[#CCE0D6] p-8 md:p-10 flex flex-col items-center text-center">
            <h2 class="text-2xl font-bold text-slate-800">De Data Matrix</h2>
            <p class="mt-3 max-w-2xl text-slate-700">
                Op basis van het volledige onderzoek werd een datamatrix opgesteld die u hier via de link kunt terugvinden.
                De opzet hiervan is een database opstellen waar vrije toegang toe is en die daarbovenop ook aan te vullen of
                aan te passen is op basis van nieuwe data en nieuw onderzoek.
            </p>
            <div class="mt-6 flex flex-col items-center gap-4">
                <a href="{{ route('matrix') }}"
                    class="inline-flex items-center justify-center bg-[#5B7B88] text-white font-semibold px-8 py-3 rounded-full hover:bg-[#4A6772] transition-colors">
                    Bekijk de Matrix
                </a>
                <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSlZJmlP-M3x26kCTrb_3KotwqhqDlgczA8sk9uY3SO5XNFD2BVZ6POLjpVs2KjgA/pub?output=xlsx"
                    class="inline-flex items-center gap-2 font-semibold text-slate-800 hover:underline">
                    <x-icon name="download" class="w-5 h-5" /> Download het volledige excel document
                </a>
            </div>
        </section>

    </div>
@endsection
