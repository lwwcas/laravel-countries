<?php

namespace Lwwcas\LaravelCountries\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
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
