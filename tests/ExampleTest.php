<?php

namespace Lwwcas\LaravelCountries\Tests;

use Lwwcas\LaravelCountries\Providers\LaravelCountriesServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelCountriesServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
