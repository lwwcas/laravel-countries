<?php

namespace Lwwcas\LaravelCountries\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Lwwcas\LaravelCountries\Providers\WCountriesServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        config()->set('translatable.locales', ['en', 'pt']);
        $this->createTables();
    }

    protected function getPackageProviders($app)
    {
        return [
            WCountriesServiceProvider::class,
        ];
    }

    public function createTables()
    {
        $migrationsPath = dirname(__DIR__) . '/src/database/migrations';
        $this->loadMigrationsFrom($migrationsPath);
    }
}
