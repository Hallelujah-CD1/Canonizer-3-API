<?php

namespace App\Providers;

use App\Helpers\{ResourceBuilder, ResourceInterface, ResponseBuilder, ResponseInterface};
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
        $this->app->bind(ResourceInterface::class, ResourceBuilder::class);
        $this->app->bind(ResponseInterface::class, ResponseBuilder::class);
    }
}
