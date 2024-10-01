<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Models\CountryCoordinates;
use Lwwcas\LaravelCountries\Models\CountryExtras;
use Lwwcas\LaravelCountries\trait\WithCoordinatesBootstrap;
use Lwwcas\LaravelCountries\trait\WithFlagBootstrap;

class Country extends Model
{
    use HasFactory,
        Translatable,
        WithFlagBootstrap,
        WithCoordinatesBootstrap;

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

    /* @property-read string $localeKey */
    public string $localeKey;

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

        'visible', // Boolean flag indicating whether the country is visible in the application.
    ];


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'visible' => true,
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

            'visible' => 'bool',
        ];
    }

    public function __construct(array $attributes = [])
    {
        $this->localeKey = config('translatable.locale_key', 'locale');
        parent::__construct($attributes);
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
        static::addGlobalScope('visible', function (Builder $builder) {
            $builder->where('visible', true);
        });

        // Apply a global scope to always eager load the translations
        static::addGlobalScope('translation', function (Builder $builder) {
            $builder->withTranslation();
        });
    }

    /**
     * Retrieve a query builder without applying the 'visible' global scope.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function withNotVisible()
    {
        return static::withoutGlobalScope('visible');
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
     * Find a country by uuid.
     *
     * @param string $uuid
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid);
    }

    /**
     * Find a country by slug.
     *
     * @param string $slug
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereSlug($query, $slug)
    {
        return $query->whereTranslation('slug', $slug);
    }

    /**
     * Find a country by name.
     *
     * @param string $name
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereName($query, $name)
    {
        return $query->whereTranslation('name', $name);
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
     * Find a country by iso.
     *
     * @param string $iso
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIso($query, $iso)
    {
        return $query
            ->where('iso_alpha_2', $iso)
            ->orWhere('iso_alpha_3', $iso)
            ->orWhere('iso_numeric', $iso);
    }

    /**
     * Find a country by iso Alpha 2.
     *
     * @param string $isoAlpha2
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIsoAlpha2($query, $isoAlpha2)
    {
        return $query->where('iso_alpha_2', $isoAlpha2);
    }

    /**
     * Find a country by iso Alpha 3.
     *
     * @param string $isoAlpha3
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIsoAlpha3($query, $isoAlpha3)
    {
        return $query->where('iso_alpha_3', $isoAlpha3);
    }

    /**
     * Find a country by iso Numeric.
     *
     * @param string $isoNumeric
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereIsoNumeric($query, $isoNumeric)
    {
        return $query->where('iso_numeric', $isoNumeric);
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

    /**
     * Find a country by WMO (World Meteorological Organization) code.
     *
     * @param string $wmo
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereWmo($query, $wmo)
    {
        return $query->where('wmo', $wmo);
    }

    /**
     * Find a country by WMO (World Meteorological Organization) code.
     *
     * @param string $wmo
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereWmoCode($query, $wmo)
    {
        return $query->whereWmo($wmo);
    }

    /**
     * Find a country by WMO (World Meteorological Organization) code.
     *
     * @param string $wmo
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereWorldMeteorologicalOrganizationCode($query, $wmo)
    {
        return $query->whereWmo($wmo);
    }

    /**
     * Find a country by international phone.
     *
     * @param string $internationalPhone
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWherePhoneCode($query, $internationalPhone)
    {
        return $query->where('international_phone', $internationalPhone);
    }

    /**
     * Find a country by domain (TLD).
     *
     * @param string $domain
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereDomain($query, $domain)
    {
        $databaseDriver = config('database.default');
        $domainInLowercase = Str::lower($domain);
        $domainInJsonFormat = json_encode($domainInLowercase);

        return match ($databaseDriver) {
            'mysql', 'mariadb' => $query->whereRaw('JSON_CONTAINS(tld, ?)', [$domainInJsonFormat]),
            'pgsql' => $query->whereRaw('tld @> ?', ['["' . $domainInLowercase . '"]']),
            'sqlite' => $query->where('tld', 'LIKE', '%' . $domainInLowercase . '%'),
            default => $query->where('tld', 'LIKE', '%' . $domainInLowercase . '%'),
        };

    }

    /**
     * Determine if the country is visible.
     *
     * @return bool
     */
    public function isVisible(): bool
    {
        return (bool) $this->visible;
    }

    /**
     * Determine if the country is hidden.
     *
     * @return bool
     */
    public function isHidden(): bool
    {
        return (bool) !$this->visible;
    }

    /**
     * Set the country as visible.
     *
     * @return $this
     */
    public function setVisibleTrue(): self
    {
        $this->visible = true;
        $this->save();

        return $this;
    }

    /**
     * Set the country as visible.
     *
     * @return $this
     */
    public function setCountryVisible()
    {
        return $this->setVisibleTrue();
    }

    /**
     * Set the country as hidden.
     *
     * @return $this
     */
    public function setVisibleFalse(): self
    {
        $this->visible = false;
        $this->save();

        return $this;
    }

    /**
     * Set the country as hidden.
     *
     * @return $this
     */
    public function setCountryHidden()
    {
        return $this->setVisibleFalse();
    }

}
