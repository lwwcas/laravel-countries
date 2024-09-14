<?php

namespace Lwwcas\LaravelCountries\Tests;

use Lwwcas\LaravelCountries\Providers\CountriesServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [CountriesServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
