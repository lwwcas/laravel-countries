<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\CountryCoordinates;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryCoordinatesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = CountryCoordinates::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'lc_country_id' => CountryFactory::new()->create()->id,
            'latitude' =>  fake()->latitude(),
            'longitude' =>  fake()->longitude(),

            'degrees_with_decimal' =>  fake()->randomFloat() . '° N, ' . fake()->randomFloat() . '° E',
            'degrees_minutes_seconds' =>  fake()->randomNumber(2, true) . '°'. fake()->randomNumber(2, true) .'\''. fake()->randomFloat(2, 10, 40) . '" N, '. fake()->randomDigitNot(0) .'°'. fake()->numberBetween(1, 98) .'\'' . fake()->randomFloat(2, 10, 80) . '" E',
            'degrees_and_decimal_minutes' =>  fake()->randomFloat(2, 10, 40) . '°'. fake()->randomFloat(3) .'\' N, '. fake()->randomDigitNot(0) .'°'. fake()->randomFloat(3) .'\' E',
            'gps' =>  [],

        ];
    }
}
