<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Support\Str;

trait HasWhereDomain
{
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
     * Find a country by alternative domain (TLD).
     *
     * @param string $domain
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereDomainAlternative($query, $domain)
    {
        $databaseDriver = config('database.default');
        $domainInLowercase = Str::lower($domain);
        $domainInJsonFormat = json_encode($domainInLowercase);

        return match ($databaseDriver) {
            'mysql', 'mariadb' => $query->whereRaw('JSON_CONTAINS(alternative_tld, ?)', [$domainInJsonFormat]),
            'pgsql' => $query->whereRaw('alternative_tld @> ?', ['["' . $domainInLowercase . '"]']),
            'sqlite' => $query->where('alternative_tld', 'LIKE', '%' . $domainInLowercase . '%'),
            default => $query->where('alternative_tld', 'LIKE', '%' . $domainInLowercase . '%'),
        };
    }
}
