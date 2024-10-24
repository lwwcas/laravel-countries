<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;
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
        $domainInLowercase = Str::lower($domain);
        return $query->whereJsonContains('tld', $domainInLowercase);
    }

    /**
     * Find a country by multiple domains (TLD).
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string[]  $domains
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereDomains($query, array $domains)
    {
        $domainsInLowercase = array_map(fn($lang) => Str::lower($lang), $domains);
        return $query->where(function (Builder $query) use ($domainsInLowercase) {
            foreach ($domainsInLowercase as $domain) {
                $query->whereJsonContains('tld', $domain);
            }
        });
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
        $domainInLowercase = Str::lower($domain);
        return $query->whereJsonContains('alternative_tld', $domainInLowercase);
    }

    /**
     * Find a country by multiple alternative domains (TLD).
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string[]  $domains
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereDomainsAlternative($query, array $domains)
    {
        $domainsInLowercase = array_map(fn($lang) => Str::lower($lang), $domains);
        return $query->where(function (Builder $query) use ($domainsInLowercase) {
            foreach ($domainsInLowercase as $domain) {
                $query->whereJsonContains('alternative_tld', $domain);
            }
        });
    }
}
