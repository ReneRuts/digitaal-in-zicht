@extends('layouts.app')
@section('title', 'Kennis & vaardigheden - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #f2b632">
            <x-icon name="kennis-vaardigheden" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Kennis &amp; vaardigheden</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">Beschikken over de kennis en vaardigheden om digitale middelen veilig, zelfstandig en doelgericht te gebruiken.</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #fdf0cf">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Kennis &amp; vaardigheden</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #f2b632">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Basisvaardigheden zoals e-mailen en online formulieren invullen zijn niet voor iedereen vanzelfsprekend.</li>
                    <li>Veiligheids- en privacykennis blijft achter bij het dagelijks gebruik.</li>
                    <li>Vaardigheden nemen af bij oudere leeftijdsgroepen.</li>
                </ul>
                <footer class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Digimeter 2024</span>
                    <span class="flex gap-1">
                        <span title="Veldonderzoek" class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                        <span title="Literatuurstudie" class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #f2b632">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Weinig onderzoek naar het onderhouden van vaardigheden over tijd.</li>
                    <li>Beperkt inzicht in de effectiviteit van bestaande cursussen.</li>
                </ul>
                <footer class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Digimeter 2024</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie" class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #f2b632">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Iedereen kan zelfstandig basisdiensten online gebruiken.</li>
                    <li>Laagdrempelig leeraanbod is beschikbaar in de eigen omgeving.</li>
                    <li>Kennis over online veiligheid maakt deel uit van dit aanbod.</li>
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