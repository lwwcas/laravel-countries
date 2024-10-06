<?php

use Carbon\Carbon;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\Country;

it('should filters by independence day', function () {
    $date = Carbon::createFromDate(1990, 6, 12)->format('Y-m-d');

    CountryFactory::new()->create(['independence_day' => $date]);
    CountryFactory::new()->count(5)->create();

    $countries = Country::whereIndependenceDay($date)->get();

    expect($countries)->toHaveCount(1);
    expect($countries->first()->independence_day->format('Y-m-d'))->toEqual($date);
});

it('should filters by independence year', function () {
    $date = Carbon::createFromDate(1990, 6, 12);

    $country = CountryFactory::new()->create(['independence_day' => $date->format('Y-m-d')]);
    CountryFactory::new()->count(5)->create();

    $countries = Country::whereIndependenceYear($date->year)->get();

    expect($countries)->toHaveCount(1);
    expect($countries->first()->id)->toEqual($country->id);
});

it('should filters countries by independence day between two dates', function () {
    $startDate = Carbon::parse('1990-01-01');
    $endDate = Carbon::parse('1990-12-31');

    CountryFactory::new()->create(['independence_day' => $startDate->format('Y-m-d')]);
    CountryFactory::new()->create(['independence_day' => $endDate->format('Y-m-d')]);

    CountryFactory::new()->count(5)->create(['independence_day' => Carbon::now()->addYears(10)->format('Y-m-d')]);

    $countries = Country::whereIndependenceBetweenDates($startDate->format('Y-m-d'), $endDate->format('Y-m-d'))->get();

    expect($countries)->toHaveCount(2);
    expect($countries)->each->toBeInstanceOf(Country::class);
});

it('should filters by independence month', function () {
    $date = Carbon::createFromDate(1990, 6, 12);

    $country = CountryFactory::new()->create(['independence_day' => $date->format('Y-m-d')]);
    CountryFactory::new()->count(5)->create();

    $countries = Country::whereIndependenceMonth(6)->get();

    expect($countries)->toHaveCount(1);
    expect($countries->first()->id)->toEqual($country->id);
});

it('should filters countries by independence day before', function () {
    $date = Carbon::parse('1990-06-12');

    $country = CountryFactory::new()->create(['independence_day' => $date->copy()->subYear(10)->format('Y-m-d')]);
    CountryFactory::new()->count(5)->create(['independence_day' => $date->copy()->addYears(10)->format('Y-m-d')]);

    $countries = Country::whereIndependenceBefore($date->format('Y-m-d'))->get();

    expect($countries)->toHaveCount(1);
    expect($countries->first()->id)->toEqual($country->id);
});

it('should filters countries by independence day after a certain date', function () {
    $date = Carbon::parse('1990-06-12');

    CountryFactory::new()->create(['independence_day' => $date->copy()->subYears(10)->format('Y-m-d')]);
    CountryFactory::new()->count(5)->create(['independence_day' => $date->copy()->addYears(10)->format('Y-m-d')]);

    $countries = Country::whereIndependenceAfter($date->format('Y-m-d'))->get();

    expect($countries)->toHaveCount(5);
});
