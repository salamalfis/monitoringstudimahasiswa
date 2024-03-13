<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        view()->composer('layouts.sidebar.auth', function ($view) {
            $menu = \App\Models\Menu::with('Submenu')->orderBy('nama', 'asc')->get();
            $view->with('menu', $menu);
        });

        view()->composer('layouts.navbar.auth', function ($view) {
            $profile = \App\Models\User::where('id', auth()->user()->id)->first();
            $view->with('profile', $profile);

        });
    }
}
