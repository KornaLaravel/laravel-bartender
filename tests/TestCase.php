<?php

namespace DirectoryTree\Bartender\Tests;

use DirectoryTree\Bartender\BartenderServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * Define environment setup.
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('database.default', 'testing');
    }

    /**
     * Define database migrations.
     */
    protected function defineDatabaseMigrations(): void
    {
        $this->loadLaravelMigrations();
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Get package providers.
     */
    protected function getPackageProviders($app): array
    {
        return [BartenderServiceProvider::class];
    }
}
