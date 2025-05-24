<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Pengaturan\PengaturanSitus;

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
        View::composer('partials.header', function ($view) {
            $pengaturan = PengaturanSitus::first();
            $view->with('logo', $pengaturan ? $pengaturan->logo : 'assets/img/logo.jpg');
        });

        View::composer('partials.footer', function ($view) {
            $pengaturan = PengaturanSitus::first();
            $view->with('pengaturan', $pengaturan);
        });

         View::composer('layouts.app', function ($view) {
            $pengaturan = PengaturanSitus::first();
            $view->with('pengaturanSitus', $pengaturan);
        });
    }
}
