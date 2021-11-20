<?php

namespace Eleazarbr\PackageStripe\Console\Commands;

use Illuminate\Console\Command;

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
        $this->info('Package Stripe has been installed');
    }
}
