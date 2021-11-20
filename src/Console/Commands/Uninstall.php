<?php

namespace Eleazarbr\PackageStripe\Console\Commands;

use Illuminate\Console\Command;

class Uninstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-stripe:uninstall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Uninstalls the Stripe package';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Rollback migrations
        $this->info('Rolling back database tables');
        $pluginMigrationsPath = __DIR__ . '/../../../database/migrations';
        $migrator = resolve('migrator');
        $migrator->rollback($pluginMigrationsPath);

        $this->info('Package Stripe has been uninstalled.');
    }
}
