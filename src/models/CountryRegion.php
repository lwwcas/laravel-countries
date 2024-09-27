<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryRegion extends Model
{
    use HasFactory, Translatable;

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
        'iso_alpha_2', // The ISO 3166-1 alpha-2 country code (e.g., "US" for United States).
        'icao',        // The ICAO (International Civil Aviation Organization) country code for aviation purposes.
        'iucn',        // The IUCN (International Union for Conservation of Nature) region code for conservation data.
        'tdwg',        // The TDWG (World Geographical Scheme for Recording Plant Distributions) code, used in biodiversity studies.
        'visible',     // A boolean flag indicating if the country is visible in the application.
    ];


    /**
     * Perform any actions required before the model boots.
     *
     * @return void
     */
    protected static function booting()
    {
        parent::booting();

        // Apply a global scope to always eager load the translations
        static::addGlobalScope('translation', function (Builder $builder) {
            $builder->withTranslation();
        });
    }

    /**
     * Retrieve a query builder without applying the 'translation' global scope.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function withNotTranslation()
    {
        return static::withoutGlobalScope('translation');
    }

    /**
     * Get the countries.
     */
    public function countries()
    {
        return $this->hasMany(Country::class, 'lc_region_id');
    }

    /**
     * Find a region by slug.
     *
     * @param string $slug
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereSlug($query, $slug, $locale = null)
    {
        $query = $query->whereTranslation('slug', $slug);
        if ($locale !== null) {
            $query = $query->whereTranslation('locale', $locale);
        }
        return $query->withTranslation();
    }

    /**
     * Find a region by name.
     *
     * @param string $name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereName($query, $name)
    {
        return $query->whereTranslation('name', $name)->withTranslation();
    }

    /**
     * Find a region by uuid.
     *
     * @param string $uuid
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid)->withTranslation();
    }
}
