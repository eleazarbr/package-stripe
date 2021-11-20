<?php

namespace Eleazarbr\PackageStripe\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-stripe:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs Package Stripe into the system';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Installing Stripe Package');

        $this->info('Migrating database tables');

        Artisan::call('migrate', [
            '--force' => true,
        ]);

        $this->info('Package Stripe has been installed');
    }
}
