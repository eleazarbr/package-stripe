<?php

namespace Eleazarbr\PackageStripe;

use Eleazarbr\PackageStripe\Console\Commands\Install;
use Eleazarbr\PackageStripe\Console\Commands\Uninstall;
use Illuminate\Support\ServiceProvider;

class PackageStripeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->bootCommands();
    }

    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Boot the custom commands.
     */
    private function bootCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Install::class,
                Uninstall::class,
            ]);
        }
    }
}
