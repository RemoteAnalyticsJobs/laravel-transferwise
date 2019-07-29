<?php

namespace TransferWise;

use Illuminate\Support\ServiceProvider;

class TransferWiseServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/transferwise.php' => config_path('transferwise.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/../config/transferwise.php', 'transferwise'
        );
    }
}
