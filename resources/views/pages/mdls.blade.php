@extends('layouts.app')
@section('title', 'MDLS - Digitaal in Zicht')
@section('content')

    <div class="max-w-5xl mx-auto px-4 pt-8 pb-16 flex flex-col items-center text-center w-full">

        <header class="w-full flex flex-col items-center">
            <h1 class="text-4xl md:text-5xl font-bold text-[#79A595]">MDLS</h1>
            <h2 class="mt-4 text-2xl md:text-3xl font-semibold text-slate-800">Minimum Digital Living Standards</h2>
        </header>

        <section class="mt-6 gap-6 max-w-2xl text-slate-800 font-medium ">
            <p class="mb-3">
                MDLS is een referentiekader rond digitale inclusie voor iedereen. In hun meest recente onderzoek (2025)
                gingen ze in gesprek met verschillende soorten huishoudens om te bepalen wat zij minimaal nodig hebben om
                volwaardig deel te kunnen nemen aan de digitale samenleving. Daarbij stelden ze duidelijke normen op voor
                alle huishoudens, met aandacht voor de verschillen in behoeften tussen de verschillende soorten huishoudens.
            </p>
            <p>
                Binnen ons project onderzochten we of er in Vlaanderen een gelijkaardig referentiekader bestaat en of zo'n
                kader ook voor ons land relevant en nuttig zou kunnen zijn. Om een antwoord te bieden op de vraag of een
                dergelijk referentiekader in Vlaanderen bestaat, kunt u onze vijf dimensies raadplegen.
            </p>
        </section>

        <section
            class="mt-10 rounded-2xl bg-[#E6F0EB] border border-[#CCE0D6] shadow-sm p-8 max-w-3xl w-full flex flex-col items-center justify-center">
            <p class="text-xl font-semibold text-slate-800">
                Wil je meer weten over de MDLS of de volledige data en criteria bekijken?
            </p>

            <a href="{{ config('diz.mdls_url') }}" target="_blank" rel="noopener noreferrer"
                class="mt-6 inline-flex items-center gap-2 bg-[#5B7B88] text-white font-semibold px-8 py-3 rounded-full hover:bg-[#4A6772] transition-colors">
                Bezoek de officiële MDLS-website
                <x-icon name="external" class="w-5 h-5 shrink-0" />
                <span class="sr-only">(opent extern)</span>
            </a>
        </section>

    </div>

@endsection
