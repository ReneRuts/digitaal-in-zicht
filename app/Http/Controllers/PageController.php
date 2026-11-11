<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'dimensions' => Dimension::orderBy('sort')->get(),
            'ranking' => Dimension::orderBy('research_rank')->get(),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }
    public function background()
    {
        return view('pages.background');
    }
    public function mdls()
    {
        return view('pages.mdls');
    }

    public function matrix()
    {
        return view('pages.matrix', ['dimensions' => Dimension::orderBy('sort')->with('cards')->get()]);
    }
}