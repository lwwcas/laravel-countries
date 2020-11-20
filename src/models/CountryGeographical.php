<?php

namespace Lwwcas\LaravelCountries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Lwwcas\LaravelCountries\Casts\Json;

class CountryGeographical extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lc_countries_geographical';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'lc_country_id',
        'type',
        'features_type',
        'properties',
        'geometry',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'properties' => Json::class,
        'geometry' => Json::class,
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    /**
     * Get the country.
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'lc_country_id');
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
        return $query->where('uuid', $uuid);
    }

    public function getGeodata()
    {
        $data = [
            'type' => $this->type,
            'features' => [
                'type' => $this->features_type,
                'properties' => json_decode($this->properties, true),
                'geometry' => json_decode($this->geometry, true),
            ],
        ];

        return $data;
    }
}
