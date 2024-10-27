<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Database\Factories\CountryRegionFactory;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryRegionTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = CountryRegionTranslation::class;

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
        $name = fake()->randomElements($this->regions)[0] . ' ' . fake()->word() . rand(1, 9999);
        return [
            'lc_region_id' => CountryRegionFactory::new()->create()->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'locale' => fake()->locale(),
        ];
    }
}
