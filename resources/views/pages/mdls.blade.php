{{-- @extends('layouts.app')
@section('title', 'MDLS - Digitaal in Zicht')
@section('content')
<header class="max-w-3xl">
    <h1 class="text-4xl font-bold text-diz-brand">MDLS</h1>
    <p class="mt-2 text-lg text-slate-600">Minimum Digital Living Standard</p>
</header>
<section class="mt-8 max-w-3xl text-slate-700 space-y-4">
    <p>De Minimum Digital Living Standard (MDLS) beschrijft wat mensen minimaal nodig hebben om volwaardig deel te nemen aan de samenleving: denk aan apparaten, verbinding, vaardigheden en ondersteuning.</p>
    <p>Dit maakt de MDLS een belangrijke benchmark voor ons onderzoek: we toetsen de gevonden informatie en hiaten aan deze minimumnorm.</p>
</section>
<section class="mt-10 rounded-2xl bg-white border-2 border-diz-brand p-8 text-center max-w-3xl">
    <p class="text-xl font-semibold">Wil je meer weten over de MDLS of de volledige data en criteria bekijken?</p>
    <a href="{{ config('diz.mdls_url') }}" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex items-center gap-2 bg-diz-brand text-white font-semibold px-6 py-3 rounded-lg hover:opacity-90">
        Bezoek de officiële MDLS-website <x-icon name="external" class="w-5 h-5"/><span class="sr-only">(opent extern)</span>
    </a>
</section>
@endsection --}}
@extends('layouts.app')
@section('title', 'MDLS - Digitaal in Zicht')
@section('content')

    <div class="max-w-4xl mx-auto px-4 pt-8 pb-16 flex flex-col items-center text-center w-full">

        <header class="w-full flex flex-col items-center">
            <h1 class="text-4xl md:text-5xl font-bold text-[#79A595]">MDLS</h1>
            <h2 class="mt-4 text-2xl md:text-3xl font-semibold text-slate-800">Minimum Digital Living Standard</h2>
        </header>

        <section class="mt-6 max-w-2xl text-slate-800 font-medium leading-relaxed">
            <p>
                De Minimum Digital Living Standard (MDLS) beschrijft wat huishoudens en individuen in België minimaal nodig
                hebben om volwaardig digitaal deel te kunnen nemen aan de samenleving. Deze standaarden vormen de basis voor
                ons onderzoek en ons platform.
            </p>
        </section>

        <section
            class="mt-10 rounded-2xl bg-[#E6F0EB] border border-[#CCE0D6] shadow-sm p-8 max-w-2xl w-full flex flex-col items-center justify-center">
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
