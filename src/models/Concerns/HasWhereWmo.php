<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait HasWhereWmo
{
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
}
