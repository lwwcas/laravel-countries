<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'lc_region_id',
        'official_name',
        'iso_alpha_2',
        'iso_alpha_3',
        'iso_numeric',
        'international_phone',
        'languages',
        'tld', //Top-level domain
        'wmo', //Country abbreviations by the World Meteorological Organization
        'geoname_id', // The GeoNames geographical database https://www.geonames.org/
        'emoji',
        'color_hex',
        'color_rgb',
        'coordinates',
        'coordinates_limit',
        'visible',
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
            'color_hex' => 'array',
            'color_rgb' => 'array',
            'coordinates' => 'object',
            'coordinates_limit' => 'object',
            'emoji' => 'array',
            'visible' => 'boolean',
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
            $model->uuid = (string) Str::uuid();
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
    public function withNotVisible()
    {
        return static::withoutGlobalScope('visible');
    }

    /**
     * Retrieve a query builder without applying the 'translation' global scope.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function withNotTranslation()
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
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function geographical()
    {
        return $this->hasMany(CountryGeographical::class, 'lc_country_id');
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
     * @return Illuminate\Database\Eloquent\Collection
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
        return $query->whereTranslation('official_name', $officialName);
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
            default => throw new \Exception("Unsupported database driver: $databaseDriver"),
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
