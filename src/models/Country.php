<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Casts\Json;

class Country extends Model
{
    use HasFactory, Translatable;

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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'languages' => Json::class,
        'color_hex' => Json::class,
        'color_rgb' => Json::class,
        'coordinates' => Json::class,
        'coordinates_limit' => Json::class,
        'visible' => 'boolean',
    ];

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
     * Get the region.
     */
    public function region()
    {
        return $this->belongsTo(CountryRegion::class, 'lc_region_id');
    }

    /**
     * Get the geographical.
     */
    public function geographical()
    {
        return $this->hasMany(CountryGeographical::class, 'lc_country_id');
    }

    /**
     * Get all countries with translations
     * in a optimized query
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public static function _all()
    {
        return self::withTranslation()->get();
    }

    /**
     * Find a country by uuid.
     *
     * @param string $uuid
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWhereUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid)->withTranslation();
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
        return $query->whereTranslation('slug', $slug)->withTranslation();
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
        return $query->whereTranslation('name', $name)->withTranslation();
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
        return $query->where('iso_alpha_2', $iso)
            ->orWhere('iso_alpha_3', $iso)
            ->orWhere('iso_numeric', $iso)
            ->withTranslation();
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
        return $query->where('iso_alpha_2', $isoAlpha2)->withTranslation();
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
        return $query->where('iso_alpha_3', $isoAlpha3)->withTranslation();
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
        return $query->where('iso_numeric', $isoNumeric)->withTranslation();
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
        return $query->where('international_phone', $internationalPhone)->withTranslation();
    }

    /**
     * Get the emojim art
     */
    public function emoji()
    {
        $emojin = json_decode($this->emoji, true);
        return $emojin['img'] ?? null;
    }

    /**
     * Get the colors
     */
    public function colors($type = 'hex')
    {
        $colors = [];
        if ($type == 'hex') {
            $colors = json_decode($this->color_hex, true);
        }
        if ($type == 'rgb') {
            $colors = json_decode($this->color_rgb, true);
        }

        return $colors;
    }
}
