{{-- @extends('layouts.app')
@section('title', 'Wie zijn wij? - Digitaal in Zicht')
@section('content')
<header class="max-w-3xl">
    <h1 class="text-4xl font-bold text-diz-brand">Wie zijn wij?</h1>
    <p class="mt-3 text-lg text-slate-600">Het team, de organisaties en de missie achter het platform Digitaal in Zicht.</p>
</header>
<div class="mt-10 grid gap-6 md:grid-cols-2">
    <section class="bg-white rounded-xl border border-slate-200 p-6">
        <h2 class="text-xl font-bold">Onze missie</h2>
        <p class="mt-3 text-slate-600">Digitaal in Zicht maakt zichtbaar wat er bekend is over digitale inclusie, waar de hiaten zitten en welke minimumstandaarden nodig zijn zodat iedereen kan meedoen in een digitale samenleving.</p>
    </section>
    <section class="bg-white rounded-xl border border-slate-200 p-6">
        <h2 class="text-xl font-bold">Projectdoelstellingen</h2>
        <ul class="mt-3 list-disc pl-5 text-slate-600 space-y-1">
            <li>Bestaand onderzoek over vijf dimensies samenbrengen.</li>
            <li>Hiaten in kennis en data inzichtelijk maken.</li>
            <li>Bijdragen aan een Minimum Digital Living Standard.</li>
        </ul>
    </section>
    <section class="bg-white rounded-xl border border-slate-200 p-6">
        <h2 class="text-xl font-bold">Consortium &amp; onderzoekers</h2>
        <p class="mt-3 text-slate-600">Het platform is ontwikkeld door een samenwerking van onderzoekers en betrokken organisaties. [Namen van teamleden en organisaties invullen.]</p>
    </section>
    <section class="bg-white rounded-xl border border-slate-200 p-6">
        <h2 class="text-xl font-bold">Contact</h2>
        <p class="mt-3 text-slate-600">Vragen of suggesties? Mail ons via <a class="text-diz-brand underline" href="mailto:{{ config('diz.contact_email') }}">{{ config('diz.contact_email') }}</a>.</p>
    </section>
</div>
@endsection --}}
@extends('layouts.app')
@section('title', 'Wie zijn wij? - Digitaal in Zicht')
@section('content')

<div class="max-w-4xl mx-auto px-4 pt-8 pb-16 w-full text-slate-800">
    
    <header class="w-full flex flex-col items-center mb-12 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-[#1E3A45]">Wie zijn Wij?</h1>
    </header>

    <div class="max-w-3xl mx-auto space-y-8 text-base md:text-lg leading-relaxed">
        
        <section>
            <p>
                Wij zijn een interdisciplinair team van zes laatstejaarsstudenten aan de Arteveldehogeschool. Onze krachten zijn gebundeld vanuit drie verschillende opleidingen:<br>
                - Toegepaste Psychologie (4 studenten)<br>
                - Pedagogie van het jonge kind (1 student)<br>
                - Sociaal werk (1 student)
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-[#1E3A45] mb-3">Onze bachelorproef en casus:</h2>
            <p>
                In kader van onze bachelorproef aan de Arteveldehogeschool kregen wij de kans om te werken rond het actuele thema 'digitale inclusie'. Deze casus werd aangereikt door het expertisecentrum Mens & Samen-Leving, dat maatschappelijke vraagstukken onderzoekt en aanpakt. Binnen dit expertisecentrum is onze casusinbrenger Tom S. Specifiek actief binnen Mens & Samenleving & digitalisering. Vanuit zijn expertise en lopend onderzoek reikte hij ons een concrete praktijkuitdaging aan: in kaart brengen wat al bestaat rond minimumstandaarden voor digitale inclusie; wat al onderzocht is geweest rond digitale inclusie; en waar nog kennishiaten liggen.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-[#1E3A45] mb-3">Waarom dit platform?</h2>
            <p>
                Om alle inzichten, onderzoeksresultaten & verzamelde informatie overzichtelijk & toegankelijk te maken voor praktijkmedewerkers, onderzoekers en geïnteresseerden, hebben we dit platform ontwikkeld. Zo bundelen we alle kennis op één centrale plek.
            </p>
        </section>

    </div>
</div>

@endsection