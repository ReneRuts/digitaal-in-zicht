<?php

namespace App\Providers;

use App\Models\Dimension;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Dimensies voor de Thema's-dropdown op elke pagina
        View::composer('layouts.app', function ($view) {
            $view->with('navDimensions', Schema::hasTable('dimensions')
                ? Dimension::orderBy('sort')->get()
                : collect());
        });
    }
}
