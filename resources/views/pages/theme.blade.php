@extends('layouts.app')
@section('title', $dimension->name . ' - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: {{ $dimension->hex }}">
            <x-icon :name="$dimension->icon" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">{{ $dimension->name }}</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">{{ $dimension->intro }}</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: {{ $dimension->soft }}">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">{{ $dimension->name }}</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($dimension->cards as $card)
                <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4"
                    style="border-color: {{ $dimension->hex }}">
                    <h3 class="text-lg font-bold">{{ $card->title }}</h3>
                    <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                        @foreach ($card->items as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <footer
                        class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                        <span>{{ $card->source }}</span>
                        <span class="flex gap-1">
                            @if (in_array('field', $card->methods))
                                <span title="Veldonderzoek"
                                    class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon
                                        name="check" class="w-4 h-4" /></span>
                            @endif
                            @if (in_array('literature', $card->methods))
                                <span title="Literatuurstudie"
                                    class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                        name="check" class="w-4 h-4" /></span>
                            @endif
                        </span>
                    </footer>
                </article>
            @endforeach
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
