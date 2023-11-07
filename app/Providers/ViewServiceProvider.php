<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composer\MenuComposer;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        // Register any bindings or services here if needed.
    }

    public function boot()
    {
        // Register your view composer
        view()->composer('header', MenuComposer::class);
    }
}
