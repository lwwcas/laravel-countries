<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait HasWhereStatistics
{
    /**
     * Filter the query by the population of the country.
     *
     * @param string $population The population of the country.
     *
     * @return Builder
     */
    public function scopeWherePopulation($query, string $population)
    {
        return $query->where('population', $population);
    }

    /**
     * Filter the query by the area of the country in square kilometers (km²).
     *
     * @param string $area The area of the country in square kilometers (km²).
     *
     * @return Builder
     */
    public function scopeWhereAreaKm2($query, string $area)
    {
        return $query->where('area', $area);
    }

    /**
     * Filter the query by the country's gross domestic product (GDP).
     * In billions of USD.
     *
     * @param string $gdp The gross domestic product (GDP) of the country.
     *
     * @return Builder
     */
    public function scopeWhereGdp($query, string $gdp)
    {
        return $query->where('gdp', $gdp);
    }
}
