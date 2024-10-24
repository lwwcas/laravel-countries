<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait HasWhereCurrency
{
    /**
     * Filter countries by currency.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $currency
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereCurrency($query, string $currency)
    {
        return $query->whereCurrencyCode($currency);
    }

    /**
     * Filter countries by an array of currencies.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string[] $currencies
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereCurrencies($query, array $currencies)
    {
        $query->whereCurrencyCodes($currencies);
    }

    /**
     * Filter countries by currency code.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $currency
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereCurrencyCode($query, string $currency)
    {
        return $query->whereJsonContains('currency->code', $currency);
    }

    /**
     * Filter countries by an array of currencies code.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string[] $currencies
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereCurrencyCodes($query, array $currencies)
    {
        return $query->where(function (Builder $query) use ($currencies) {
            foreach ($currencies as $code) {
                $query->orWhereJsonContains('currency->code', $code);
            }
        });
    }

    /**
     * Filter countries by currency name.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $currency
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereCurrencyName($query, string $currency)
    {
        return $query->whereJsonContains('currency->name', $currency);
    }

    /**
     * Filter countries by an array of currencies name.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string[] $currencies
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereCurrencyNames($query, array $currencies)
    {
        return $query->where(function (Builder $query) use ($currencies) {
            foreach ($currencies as $name) {
                $query->orWhereJsonContains('currency->name', $name);
            }
        });
    }

    /**
     * Checks if the country has a currency defined.
     *
     * @return bool
     */
    public function hasCurrency(): bool
    {
        return !(
            $this->currency == [] ||
            $this->currency['code'] == '' ||
            is_null($this->currency) ||
            is_null($this->currency['code'])
        );
    }

    /**
     * Checks if the country has a currency with coins defined.
     *
     * @return bool
     */
    public function hasCoinsCurrency(): bool
    {
        return !(
            $this->hasCurrency() == false ||
            $this->currency['coins'] == [] ||
            is_null($this->currency['coins'])
        );
    }

    /**
     * Checks if the country has a currency with sub coins defined.
     *
     * @return bool
     */
    public function hasSubCoinsCurrency(): bool
    {
        return !(
            $this->hasCurrency() == false ||
            $this->hasCoinsCurrency()  == false ||
            $this->currency['coins']['sub'] == [] ||
            is_null($this->currency['coins']['sub'])
        );
    }

    /**
     * Checks if the country has a currency with main coins defined.
     *
     * @return bool
     */
    public function hasMainCoinsCurrency(): bool
    {
        return !(
            $this->hasCurrency() == false ||
            $this->hasCoinsCurrency()  == false ||
            $this->currency['coins']['main'] == [] ||
            is_null($this->currency['coins']['main'])
        );
    }

    /**
     * Checks if the country has a currency with notes defined.
     *
     * @return bool
     */
    public function hasNotesCurrency(): bool
    {
        return !(
            $this->hasCurrency() == false ||
            $this->currency['banknotes'] == [] ||
            is_null($this->currency['banknotes'])
        );
    }

    /**
     * Returns an array with the currency name, code and symbol.
     * If any of them is not defined, it will return null.
     *
     * @return array
     */
    public function getCurrency(): array
    {
        return [
            'name' => $this->getCurrencyName() ?? null,
            'code' => $this->getCurrencyCode() ?? null,
            'symbol' => $this->getCurrencySymbol() ?? null,
        ];
    }

    /**
     * Returns an array with all the currency data, including name, code, symbol, unit of currency, banknotes and coins.
     * If any of them is not defined, it will return null.
     *
     * @return array
     */
    public function getCurrencyData(): array
    {
        return [
            'name' => $this->getCurrencyName() ?? null,
            'code' => $this->getCurrencyCode() ?? null,
            'symbol' => $this->getCurrencySymbol() ?? null,
            'unit' => [
                'main' => $this->getCurrencyMainUnit() ?? null,
                'sub' => $this->getCurrencySubUnit() ?? null,
                'to_unit' => $this->getCurrencyUnitMainToSub() ?? null,
            ],
            'banknotes' =>  $this->getCurrencyNotes() ?? null,
            'coins' => [
                'main' => $this->getCurrencyMainCoins() ?? null,
                'sub' => $this->getCurrencySubCoins() ?? null,
            ],
        ];
    }

    /**
     * Get the currency code of the country.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency['code'] ?? null;
    }

    /**
     * Get the currency name of the country.
     *
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
        return $this->currency['name'] ?? null;
    }

    /**
     * Get the currency symbol of the country.
     *
     * @return string|null
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currency['symbol'] ?? null;
    }

    /**
     * Get the main unit of the currency of the country.
     *
     * @return string|null
     */
    public function getCurrencyMainUnit(): ?string
    {
        return $this->currency['unit']['main'] ?? null;
    }

    /**
     * Get the sub unit of the currency of the country.
     *
     * @return string|null
     */
    public function getCurrencySubUnit(): ?string
    {
        return $this->currency['unit']['sub'] ?? null;
    }

    /**
     * Get the number of sub units that equals 1 main unit of the currency of the country.
     *
     * @return int
     */
    public function getCurrencyUnitMainToSub(): int
    {
        return $this->currency['unit']['to_unit'] ?? 1;
    }

    /**
     * Get the main coins of the currency of the country.
     *
     * @return array<int, string>
     */
    public function getCurrencyMainCoins(): array
    {
        return $this->currency['coins']['main'] ?? [];
    }

    /**
     * Get the sub coins of the currency of the country.
     *
     * @return array<int, string>
     */
    public function getCurrencySubCoins(): array
    {
        return $this->currency['coins']['sub'] ?? [];
    }

    /**
     * Get the banknotes of the currency of the country.
     *
     * @return array<int, string>
     */
    public function getCurrencyNotes(): array
    {
        return $this->currency['banknotes'] ?? [];
    }

}
