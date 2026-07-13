<?php

namespace Lwwcas\LaravelCountries\Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryTranslation;

/**
 * @extends Factory<Model>
 */
class CountryTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = CountryTranslation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->country().' '.fake()->word().rand(1, 9999);

        return [
            'lc_country_id' => CountryFactory::new()->create()->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'locale' => fake()->locale(),
        ];
    }
}
