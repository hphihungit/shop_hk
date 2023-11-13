<?php

namespace App\Providers;

use App\Http\View\Composer\CartComposer;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composer\MenuComposer;
use Illuminate\Support\Composer;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        // Register any bindings or services here if needed.
    }

    public function boot()
    {
        // composer truyen vao cac view cu the 
        view()->composer('header', MenuComposer::class);
        // 
        view()->composer('cart', CartComposer::class);
    }
}
