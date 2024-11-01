<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryRegion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryRegionFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = CountryRegion::class;

    protected $regions = [
        'Africa',
        'Americas',
        'Asia',
        'Europe',
        'Oceania',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'iso_alpha_2' => fake()->countryCode() . rand(1, 9999),
            'icao' => Str::upper(fake()->randomLetter(2)),
            'iucn' => fake()->randomElements($this->regions)[0] . ' ' . fake()->word(),
            'tdwg' => fake()->word(),
            'is_visible' => true,
        ];
    }

}
