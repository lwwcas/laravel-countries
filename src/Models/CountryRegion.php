<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lwwcas\LaravelCountries\Abstract\CountryModel;
use Lwwcas\LaravelCountries\Models\Concerns\HasTranslationGlobalScope;
use Lwwcas\LaravelCountries\Models\Concerns\HasVisibleGlobalScope;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIso;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIsoAlpha2;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereName;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereSlug;
use Lwwcas\LaravelCountries\Models\Concerns\VisibleAttributes;

class CountryRegion extends CountryModel
{
    use HasFactory,
        Translatable,
        HasVisibleGlobalScope,
        HasTranslationGlobalScope,
        HasWhereSlug,
        HasWhereName,
        HasWhereIso,
        HasWhereIsoAlpha2,
        VisibleAttributes;

    public $translationModel = CountryRegionTranslation::class;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_regions';

    /* Mass Translatable Assignment */
    public $translatedAttributes = [
        'slug',
        'name',
    ];

    /* Translatable ForeignKey */
    public $translationForeignKey = 'lc_region_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iso_alpha_2', // The ISO 3166-1 alpha-2 region code (e.g., "US" for United States).
        'icao',        // The ICAO (International Civil Aviation Organization) region code for aviation purposes.
        'iucn',        // The IUCN (International Union for Conservation of Nature) region code for conservation data.
        'tdwg',        // The TDWG (World Geographical Scheme for Recording Plant Distributions) code, used in biodiversity studies.
        'is_visible',     // A boolean flag indicating if the region is visible in the queries.
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'is_visible' => true,
    ];

    /**
     * The attributes that should be cast.
     *
     * This section is particularly important due to limitations introduced in Laravel 10.
     * Laravel 10 requires specific handling of attributes to ensure proper type casting
     * and avoid issues such as "Array to string conversion."
     *
     * @var array
     */
    protected $casts = [
        'is_visible' => 'boolean',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_visible' => 'boolean',
        ];
    }

    /**
     * Perform any actions required before the model boots.
     *
     * @return void
     */
    protected static function booting()
    {
        parent::booting();

        // Applying a global scope to always filter countries where 'is_visible' is true
        static::addGlobalScope('is_visible', function (Builder $builder) {
            $builder->where('is_visible', true);
        });

        // Apply a global scope to always eager load the translations
        static::addGlobalScope('translation', function (Builder $builder) {
            $builder->withTranslation();
        });
    }

    /**
     * Get the countries that are located in this region.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function countries()
    {
        return $this->hasMany(Country::class, 'lc_region_id');
    }

    /**
     * Filter the query by the ICAO (International Civil Aviation Organization) region code
     *
     * @param Builder $query
     * @param string $icao
     * @return Builder
     */
    public function scopeWhereICAO($query, string $icao)
    {
        return $query->where('icao', $icao);
    }

    /**
     * Filter the query by the ICAO (International Civil Aviation Organization) region code, adding the filter with an "or where" clause
     *
     * @param Builder $query
     * @param string $icao
     * @return Builder
     */
    public function scopeOrWhereICAO($query, string $icao)
    {
        return $query->orWhere('icao', $icao);
    }

    /**
     * Filter the query by the IUCN (International Union for Conservation of Nature) region code
     *
     * @param Builder $query
     * @param string $iucn
     * @return Builder
     */
    public function scopeWhereIUCN($query, string $iucn)
    {
        return $query->where('iucn', $iucn);
    }

    /**
     * Filter the query by the IUCN (International Union for Conservation of Nature) region code, adding the filter with an "or where" clause
     *
     * @param Builder $query
     * @param string $iucn
     * @return Builder
     */
    public function scopeOrWhereIUCN($query, string $iucn)
    {
        return $query->orWhere('iucn', $iucn);
    }

    /**
     * Filter the query by the TDWG (Taxonomic Databases Working Group) region code
     *
     * @param Builder $query
     * @param string $tdwg
     * @return Builder
     */
    public function scopeWhereTDWG($query, string $tdwg)
    {
        return $query->where('tdwg', $tdwg);
    }

    /**
     * Filter the query by the TDWG (Taxonomic Databases Working Group) region code, adding the filter with an "or where" clause
     *
     * @param Builder $query
     * @param string $tdwg
     * @return Builder
     */
    public function scopeOrWhereTDWG($query, string $tdwg)
    {
        return $query->orWhere('tdwg', $tdwg);
    }

}
