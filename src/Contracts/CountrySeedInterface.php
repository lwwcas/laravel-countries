<?php

namespace Lwwcas\LaravelCountries\Contracts;

interface CountrySeedInterface
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run();

    public function geographical();

}
