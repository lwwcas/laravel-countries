<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait HasWherePhoneCode
{
    /**
     * Find a country by international phone.
     *
     * @param  string  $internationalPhone
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeWherePhoneCode($query, $internationalPhone)
    {
        return $query->where('international_phone', $internationalPhone);
    }

    /**
     * Filter the query by the international phone code or the given value.
     *
     * @param  Builder  $query
     * @param  string  $internationalPhone
     * @return Builder
     */
    public function scopeOrWherePhoneCode($query, $internationalPhone)
    {
        return $query->orWhere('international_phone', $internationalPhone);
    }
}
