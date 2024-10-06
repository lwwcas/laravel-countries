<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Abstract\CountryModel;
use Lwwcas\LaravelCountries\Models\Concerns\HasTranslationGlobalScope;
use Lwwcas\LaravelCountries\Models\Concerns\HasVisibleGlobalScope;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereBorders;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereDomain;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIndependenceDay;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIso;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIsoAlpha2;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIsoAlpha3;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereIsoNumeric;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereLanguages;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereName;
use Lwwcas\LaravelCountries\Models\Concerns\HasWherePhoneCode;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereSlug;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereStatistics;
use Lwwcas\LaravelCountries\Models\Concerns\HasWhereWmo;
use Lwwcas\LaravelCountries\Models\Concerns\VisibleAttributes;
use Lwwcas\LaravelCountries\Models\CountryCoordinates;
use Lwwcas\LaravelCountries\Models\CountryExtras;
use Lwwcas\LaravelCountries\Models\CountryGeographical;
use Lwwcas\LaravelCountries\Models\CountryRegion;
use Lwwcas\LaravelCountries\Models\CountryTranslation;
use Lwwcas\LaravelCountries\trait\WithCoordinatesBootstrap;
use Lwwcas\LaravelCountries\trait\WithFlagBootstrap;

class Country extends CountryModel
{
    use HasFactory,
        Translatable,
        HasVisibleGlobalScope,
        HasTranslationGlobalScope,
        WithFlagBootstrap,
        WithCoordinatesBootstrap,
        HasWhereSlug,
        HasWhereName,
        HasWhereIso,
        HasWhereIsoAlpha2,
        HasWhereIsoAlpha3,
        HasWhereIsoNumeric,
        HasWhereWmo,
        HasWherePhoneCode,
        HasWhereDomain,
        HasWhereLanguages,
        HasWhereStatistics,
        HasWhereBorders,
        HasWhereIndependenceDay,
        VisibleAttributes;

    public $translationModel = CountryTranslation::class;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries';

    /* Mass Translatable Assignment */
    public $translatedAttributes = [
        'slug',
        'name',
    ];

    /* Translatable ForeignKey */
    public $translationForeignKey = 'lc_country_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', // Unique identifier (ULID) for the country.
        'lc_region_id', // Foreign key linking the country to a specific region.

        'official_name', // The official name of the country (e.g., "United States of America").
        'capital', // The capital city of the country.
        'iso_alpha_2', // ISO 3166-1 alpha-2 country code (e.g., "US" for the United States).
        'iso_alpha_3', // ISO 3166-1 alpha-3 country code (e.g., "USA" for the United States).
        'iso_numeric', // ISO 3166-1 numeric country code (e.g., "840" for the United States).

        'international_phone', // The country’s international dialing code (e.g., +1 for the United States).
        'geoname_id', // The GeoNames geographical database ID for the country https://www.geonames.org/
        'wmo', // Country abbreviations by the World Meteorological Organization (WMO).
        'independence_day', // Year of the country's independence, if applicable.

        'population', // The population of the country.
        'area', // The area of the country in square kilometers (km²).
        'gdp', // The Gross Domestic Product (GDP) of the country in billions of USD.

        'languages', // Official languages spoken in the country.
        'tld', // Top-level domain (e.g., ".us" for the United States).
        'alternative_tld', // Alternative top-level domains (e.g., country-specific or alternative domain suffixes).
        'borders', // List of bordering countries (if any).
        'timezones', // The country's time zones, including main and additional ones.
        'currency', // Information about the country's currency, including name, symbol, and units.

        'flag_emoji', // The emoji representation of the country's flag.
        'flag_colors', // Base colors of the flag.
        'flag_colors_web', // Web-safe color names for the flag.
        'flag_colors_contrast', // Contrast colors for improved readability on the flag.
        'flag_colors_hex', // Hexadecimal color codes for the flag.
        'flag_colors_rgb', // RGB (Red, Green, Blue) color values for the flag.
        'flag_colors_cmyk', // CMYK (Cyan, Magenta, Yellow, Black) color values for the flag.
        'flag_colors_hsl', // HSL (Hue, Saturation, Lightness) color values for the flag.
        'flag_colors_hsv', // HSV (Hue, Saturation, Value) color values for the flag.
        'flag_colors_pantone', // Pantone color codes for the flag.

        'is_visible', // Boolean flag indicating whether the country is visible in the application.
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'languages' => 'array',
            'tld' => 'array',
            'alternative_tld' => 'array',
            'borders' => 'array',
            'timezones' => 'array',
            'currency' => 'array',

            'flag_emoji' => 'array',
            'flag_colors' => 'array',
            'flag_colors_web' => 'array',
            'flag_colors_contrast' => 'array',
            'flag_colors_hex' => 'array',
            'flag_colors_rgb' => 'array',
            'flag_colors_cmyk' => 'array',
            'flag_colors_hsl' => 'array',
            'flag_colors_hsv' => 'array',
            'flag_colors_pantone' => 'array',

            'independence_day' => 'date:Y-m-d',

            'is_visible' => 'boolean',
        ];
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uid = (string) Str::ulid();
        });
    }

    /**
     * Perform any actions required before the model boots.
     *
     * @return void
     */
    protected static function booting()
    {
        parent::booting();

        // Applying a global scope to always filter countries where 'visible' is true
        static::addGlobalScope('is_visible', function (Builder $builder) {
            $builder->where('is_visible', true);
        });

        // Apply a global scope to always eager load the translations
        static::addGlobalScope('translation', function (Builder $builder) {
            $builder->withTranslation();
        });
    }

    /**
     * Get the region that owns the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(CountryRegion::class, 'lc_region_id');
    }

    /**
     * Get the geographical data for the country.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function geographical()
    {
        return $this->hasOne(CountryGeographical::class, 'lc_country_id');
    }

    /**
     * Get the extra data for the country.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function extras()
    {
        return $this->hasOne(CountryExtras::class, 'lc_country_id');
    }

    /**
     * Get the coordinates for the country.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coordinates()
    {
        return $this->hasOne(CountryCoordinates::class, 'lc_country_id');
    }

    /**
     * Find a country by UIDs.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $uid
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereUid($query, $uid)
    {
        return $query->where('uid', $uid);
    }

    /**
     * Find a country by official name.
     *
     * @param string $officialName
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereOficialName($query, $officialName)
    {
        return $query->where('official_name', $officialName);
    }

    /**
     * Find a country by Geoname ID.
     *
     * @param int $geonameId
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereGeoname($query, $geonameId)
    {
        return $query->where('geoname_id', $geonameId);
    }

}
