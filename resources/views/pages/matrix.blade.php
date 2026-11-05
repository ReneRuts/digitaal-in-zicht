@extends('layouts.app')
@section('title', 'Data Matrix - Digitaal in Zicht')
@section('content')
    <h1 class="text-4xl font-bold text-diz-brand">
        Data Matrix</h1>
    <p class="mt-2 text-slate-600">Overzicht per dimensie van bevindingen, hiaten en minimumstandaarden.</p>
    <div class="mt-8 overflow-x-auto bg-white rounded-xl border border-slate-200">
        <table class="w-full text-left align-top">
            <thead class="bg-slate-100 text-sm">
                <tr>
                    <th class="p-4">Dimensie</th>
                    @foreach (\App\Models\Card::TITLES as $t)
                        <th class="p-4">{{ $t }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @foreach ($dimensions as $d)
                    <tr>
                        <th class="p-4 whitespace-nowrap"><a href="{{ route('theme', $d) }}"
                                class="flex items-center gap-2"><span class="w-3 h-3 rounded-full"
                                    style="background: {{ $d->hex }}"></span>{{ $d->name }}</a></th>
                        @foreach ($d->cards as $c)
                            <td class="p-4 text-sm">
                                <ul class="list-disc pl-4 space-y-1">
                                    @foreach ($c->items as $i)
                                        <li>{{ $i }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <p class="mt-6"><a href="{{ route('matrix.download') }}"
            class="inline-flex items-center gap-2 text-diz-brand underline"><x-icon name="download" class="w-5 h-5" />
            Download Excel (.xlsx)</a></p>
@endsection
