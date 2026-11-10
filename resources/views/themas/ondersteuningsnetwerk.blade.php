@extends('layouts.app')
@section('title', 'Ondersteuningsnetwerk - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #2f4a78">
            <x-icon name="ondersteuningsnetwerk" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Ondersteuningsnetwerk</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">Het netwerk van mensen en organisaties dat ondersteuning biedt bij digitale vragen en problemen.</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #d9e0ee">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Ondersteuningsnetwerk</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #2f4a78">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Mensen vragen hulp meestal eerst aan familie of vrienden.</li>
                    <li>Bibliotheken en informatiepunten vervullen een belangrijke rol.</li>
                    <li>Het aanbod verschilt per gemeente en regio.</li>
                </ul>
                <footer class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Digimeter 2024</span>
                    <span class="flex gap-1">
                        <span title="Veldonderzoek" class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                        <span title="Literatuurstudie" class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #2f4a78">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Weinig overzicht van het totale aanbod aan ondersteuning.</li>
                    <li>Onduidelijk hoe goed vraag en aanbod op elkaar aansluiten.</li>
                </ul>
                <footer class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Digimeter 2024</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie" class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #2f4a78">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Iedereen weet waar hulp te vinden is.</li>
                    <li>Er is een lokaal, laagdrempelig ondersteuningspunt binnen bereik.</li>
                </ul>
                <footer class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: MDLS</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie" class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>
        </div>
    </section>

    <section class="mt-6 flex justify-center items-center gap-6 text-sm" aria-label="Legenda methodologie">
        <span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>Veldonderzoek</span>
        <span class="text-slate-400">|</span>
        <span class="flex items-center gap-2"><span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>Literatuurstudie</span>
    </section>
@endsection