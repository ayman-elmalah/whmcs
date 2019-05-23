<?php

namespace AymanElmalah\Whmcs;

use Illuminate\Support\ServiceProvider;

class WhmcsServiceProvider extends ServiceProvider {
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([__DIR__.'/config/whmcs.php' => config_path('whmcs.php')]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(__DIR__.'/config/whmcs.php', 'whmcs');

        $this->app->bind(Whmcs::class, function($app) {
            return new Whmcs();
        });

        $this->app->alias(Whmcs::class, 'whmcs');
    }
}
