@extends('layouts.app')
@section('title', 'Data Matrix - Digitaal in Zicht')
@section('content')
    <h1 class="text-4xl font-bold text-diz-brand">
        Data Matrix</h1>
    <p class="mt-2 text-slate-600">Overzicht per thema van bevindingen, hiaten en minimumstandaarden.</p>

    <div class="flex flex-row items-center justify-center gap-6 flex-wrap mt-4 text-center">
        <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSlZJmlP-M3x26kCTrb_3KotwqhqDlgczA8sk9uY3SO5XNFD2BVZ6POLjpVs2KjgA/pub?output=xlsx"
            class="inline-flex items-center justify-center bg-[#5B7B88] text-white font-semibold px-8 py-3 rounded-full hover:bg-[#4A6772] transition-colors"><x-icon
                name="download" class="w-5 h-5" />
            Download Excel (.xlsx)</a>
        <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSlZJmlP-M3x26kCTrb_3KotwqhqDlgczA8sk9uY3SO5XNFD2BVZ6POLjpVs2KjgA/pubhtml?widget=true&amp;headers=false"
            target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center justify-center bg-[#5B7B88] text-white font-semibold px-8 py-3 rounded-full hover:bg-[#4A6772] transition-colors"><x-icon
                name="download" class="w-5 h-5" />
            Bekijk de matrix in een nieuw tabblad</a>
    </div>

    <div class="mt-8 overflow-hidden bg-white rounded-xl border border-slate-200">
        <iframe
            src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSlZJmlP-M3x26kCTrb_3KotwqhqDlgczA8sk9uY3SO5XNFD2BVZ6POLjpVs2KjgA/pubhtml?widget=true&amp;headers=false"
            class="w-full h-175 border-0" title="Matrix Digitaal in zicht" allowfullscreen>Laden van de matrix...
        </iframe>
    </div>
@endsection
