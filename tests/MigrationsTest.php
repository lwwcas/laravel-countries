<?php

namespace Lwwcas\LaravelCountries\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Lwwcas\LaravelCountries\Providers\LaravelCountriesServiceProvider;
use Orchestra\Testbench\TestCase;

class MigrationsTest extends TestCase
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [LaravelCountriesServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // and other test setup steps you need to perform
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
