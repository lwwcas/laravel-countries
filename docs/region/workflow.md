# Workflow

`CountryRegion::class` includes a variety of PHP functions. Many of these functions are used by the package itself; however, you are free to use them in your own applications if you find them convenient.

## Available Methods

Here you can explore the available methods to manipulate Region information as you wish. These methods provide a convenient way to filter, retrieve, and modify regions and their associated data within your application.

| Method                                                      | Description                                                     |
|-------------------------------------------------------------|-----------------------------------------------------------------|
| [countries()](/region/workflow.html#countries)              | Returns a list of countries filtered by the region.             |
| [whereSlug('americas')](/region/workflow.html#where-slug)   | Returns the region matching the specified slug 'americas'.      |
| [whereName('Americas')](/region/workflow.html#where-name)   | Returns the region matching the specified name 'Americas'.      |
| [whereIso('AM')](/region/workflow.html#where-iso)           | Returns the region matching the specified ISO code 'AM'.        |
| [whereIsoAlpha2('AM')](/region/workflow.html#where-iso-alpha2) | Returns the region matching the specified ISO alpha-2 code 'AM'. |
| [whereICAO('NAT')](/region/workflow.html#where-icao)        | Returns the region matching the specified ICAO code 'NAT'.      |
| [whereIUCN('Americas')](/region/workflow.html#where-iucn)   | Returns the region matching the specified IUCN code 'Americas'. |
| [whereTDWG('NAM/SAM')](/region/workflow.html#where-tdwg)    | Returns the region matching the specified TDWG code 'NAM/SAM'.  |


## Method Listing

## Countries

Returns a list of countries filtered by the region.

```php
->countries()
```

::: code-group

```php {5} [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::inRandomOrder()
    ->first()
    ->countries()
    ->get();

// Return a list of Country::class of a random CountryRegion::class
```

```php {5} [Example with Where]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereSlug('americas')
    ->first()
    ->countries()
    ->get();

// Return a list of Country::class of a CountryRegion::class with Americas information
```

```php {5} [Complete Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereSlug('americas')
    ->first()
    ->countries()
    ->whereSlug('brazil')
    ->first();

// Return Country::class with Brazil information
```

```php {5} [Example without result]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereSlug('americas')
    ->first()
    ->countries()
    # China is located in Asia
    ->whereSlug('china') // [!code warning]
    ->first();

// Return Null
```

:::

## Where Slug

Returns the region matching the specified slug `$slug`.

```php
->whereSlug(String $slug)
```

```php
->orWhereSlug(String $slug)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereSlug('europe')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereSlug('americas')->orWhereSlug('europe')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

```php [Parameter example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereSlug('EuRoPe')->first();

// Return CountryRegion::class with Europe information
```

:::

## Where Name

Returns the region matching the specified name `$name`.

```php
->whereName(String $name)
```

```php
->orWhereName(String $name)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereName('Europe')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereName('Americas')->orwhereName('Europe')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

```php [Parameter example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereName('EUROPE')->first();

// Return CountryRegion::class with Europe information
```

:::

## Where Iso

Returns the region matching the specified ISO code 'AM'.

`whereIso` is just an alias for `whereIsoAlpha2`, so you can use either one interchangeably to get the same result.

```php
->whereIso(String $iso)
```

```php
->orWhereIso(String $iso)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereIso('EU')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereIso('AM')->orWhereIso('EU')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

:::

## Where Iso Alpha 2

Returns the region matching the specified ISO alpha-2 code 'AM'.

```php
->whereIsoAlpha2(String $alpha2)
```

```php
->orWhereIsoAlpha2(String $alpha2)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereIsoAlpha2('EU')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereIsoAlpha2('AM')->orWhereIsoAlpha2('EU')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

:::

## Where ICAO

Returns the region matching the specified ICAO code 'NAT'.

```php
->whereICAO(String $icao)
```

```php
->orWhereICAO(String $icao)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereICAO('EUR')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereICAO('NAT')->orWhereICAO('EUR')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

:::


## Where IUCN

Returns the region matching the specified IUCN code 'Americas'.

```php
->whereIUCN(String $iucn)
```

```php
->orWhereIUCN(String $iucn)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereIUCN('Europe')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereIUCN('Americas')->orWhereIUCN('Europe')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

:::

## Where TDWG

Returns the region matching the specified TDWG code 'NAM/SAM'.


```php
->whereTDWG(String $tdwg)
```

```php
->orwhereTDWG(String $tdwg)
```

::: code-group

```php [Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereTDWG('EUR')->first();

// Return CountryRegion::class with Europe information
```

```php [Or Where Example]
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::whereTDWG('NAM/SAM')->orWhereTDWG('EUR')->get();

// Return a list of CountryRegion::class with Europe and Americas information
```

:::
