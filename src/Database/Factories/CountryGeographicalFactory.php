<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
use Lwwcas\LaravelCountries\Models\CountryGeographical;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryGeographicalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = CountryGeographical::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'lc_country_id' => CountryFactory::new()->create()->id,
            'type' =>  'FeatureCollection',
            'features_type' => 'Feature',
            'properties' =>  '{"cca2": "{'. fake()->languageCode() .'}"}',
            'geometry' =>  '',
        ];
    }
}
