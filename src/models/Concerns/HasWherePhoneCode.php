<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait HasWherePhoneCode
{
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
}
