<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Foundation\AliasLoader;
use Milon\Barcode\Facades\DNS1DFacade;
use Milon\Barcode\Facades\DNS2DFacade;
use Illuminate\Support\ServiceProvider;
use Milon\Barcode\BarcodeServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(BarcodeServiceProvider::class);

        view()->composer('layouts.master', function ($view) {
            $view->with('setting', Setting::first());
        });
        view()->composer('layouts.auth', function ($view) {
            $view->with('setting', Setting::first());
        });
        view()->composer('auth.login', function ($view) {
            $view->with('setting', Setting::first());
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        AliasLoader::getInstance()->alias('DNS1D', DNS1DFacade::class);
        AliasLoader::getInstance()->alias('DNS2D', DNS2DFacade::class);
    }
}
