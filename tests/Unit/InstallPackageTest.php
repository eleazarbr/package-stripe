<?php

namespace Tests;

use Eleazarbr\PackageStripe\Models\Subscription;

/**
 * @internal
 * @coversNothing
 */
class InstallPackageTest extends TestCase
{
    public function test_the_install_command_runs_correctly(): void
    {
        $command = $this->artisan('package-stripe:install');
        // $sub = Subscription::first();
        // dd($sub);
        $command->assertExitCode(0);
    }

    public function test_the_uninstall_command_runs_correctly(): void
    {
        $command = $this->artisan('package-stripe:uninstall');
        $command->assertExitCode(0);
    }
}
