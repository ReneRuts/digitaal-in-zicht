@extends('layouts.app')
@section('title', 'Digitale toegang - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #4fa58f">
            <x-icon name="digitale-toegang" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Digitale toegang</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">Korte uitleg over wat er met digitale toegang bedoeld wordt,
                gericht op inclusie. Hier komt een toelichting over de toegang tot hardware, internet en de nodige
                omgevingsfactoren om digitaal actief te kunnen zijn.</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #dcefe9">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Digitale toegang</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #4fa58f">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Een deel van de bevolking mist een geschikt apparaat of een betaalbare internetverbinding.</li>
                    <li>Toegang verschilt sterk naar inkomen, leeftijd en opleidingsniveau.</li>
                    <li>Een smartphone alleen volstaat vaak niet voor complexe digitale taken.</li>
                    <li>Een smartphone alleen volstaat blehblah niet voor complexe digitale taken.</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Barometer Digitale Inclusie 2024</span>
                    <span class="flex gap-1">
                        <span title="Veldonderzoek"
                            class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #4fa58f">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Weinig zicht op de kwaliteit en stabiliteit van verbindingen in de praktijk.</li>
                    <li>Beperkte data over de kosten van onderhoud, vervanging en abonnementen.</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Barometer Digitale Inclusie 2024</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #4fa58f">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Elk huishouden heeft toegang tot een geschikt apparaat.</li>
                    <li>Een betaalbare, stabiele internetverbinding is beschikbaar.</li>
                    <li>Openbare, gratis toegangspunten zijn in de buurt aanwezig.</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: MDLS</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>
        </div>
    </section>

    <section class="mt-6 flex justify-center items-center gap-6 text-sm" aria-label="Legenda methodologie">
        <span class="flex items-center gap-2"><span
                class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon name="check"
                    class="w-4 h-4" /></span>Veldonderzoek</span>
        <span class="text-slate-400">|</span>
        <span class="flex items-center gap-2"><span
                class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check"
                    class="w-4 h-4" /></span>Literatuurstudie</span>
    </section>
@endsection
