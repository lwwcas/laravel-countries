# Method Listing

Below, you'll find a list of methods available in the Country model, along with friendly descriptions of what each method does. These methods are organized alphabetically for your convenience.

## Order By Name

Sort countries by their name in either ascending or descending order.

```php
->orderByName($sortMethod = 'asc')
```

```php [Example]
Country::orderByName('asc')->get();
```

## Where Area Km²

Find countries based on their area in square kilometers.

```php
->whereAreaKm2()
```

```php [Example]
Country::whereAreaKm2(500000)->get();
```

## Where GDP

Filter countries by their Gross Domestic Product (GDP) in billions of USD.

```php
->whereGdp()
```

```php [Example]
Country::whereGdp(1000)->get();
```

## Where Geoname

Find countries by their GeoNames ID.
Use `orWhereGeoname` to add an OR condition to your query.

```php
->whereGdp()
```

::: code-group
```php [Example]
Country::whereGeoname(123456)->first();
```

```php [Or Example]
Country::orWhereGeoname(789012)->first();
```
:::

## Where Iso

Find countries by any ISO code (Alpha-2, Alpha-3, or Numeric).
Use `orWhereIso` to add an OR condition.

```php
->whereIso()
```

::: code-group
```php [Example]
Country::whereIso('US')->first();
```

```php [Or Example]
Country::orWhereIso('840')->first();
```

```php [Or Example]
Country::orWhereIso('840')
    ->orWhereIso('BR')
    ->orWhereIso('PTR')
    ->orWhereIso('USA')
    ->orWhereIso('US')
    ->orWhereIso('120')
    ->get();
```

:::

## Where Iso Alpha 2

Find countries by their ISO Alpha-2 code. Use `orWhereIsoAlpha2` to add an OR condition.

```php
->whereIsoAlpha2()
```

::: code-group

```php [Example]
Country::whereIsoAlpha2('FR')->first();
```

```php [Or Example]
Country::orWhereIsoAlpha2('DE')->first();
```

:::

## Where Iso Alpha 3

Find countries by their ISO Alpha-3 code. Use `orWhereIsoAlpha3` to add an OR condition.

```php
->whereIsoAlpha3()
```

::: code-group

```php [Example]
Country::whereIsoAlpha3('FRA')->first();
```

```php [Or Example]
Country::orWhereIsoAlpha3('DEU')->first();
```

:::

## Where Iso Numeric

Find countries by their ISO Numeric code. Use `orWhereIsoNumeric` to add an OR condition.

```php
->whereIsoNumeric()
```

::: code-group

```php [Example]
Country::whereIsoNumeric('250')->first();
```

```php [Or Example]
Country::orWhereIsoNumeric('276')->first();
```

:::

## Where Language

Find countries where a specific language is spoken.

```php
->whereLanguage()
```

```php [Example]
Country::whereLanguage('en')->get();
```

Find countries where all specified languages are spoken.

```php
->whereLanguages()
```

```php [Example]
Country::whereLanguages(['en', 'fr'])->get();
```

## Where Name

Find countries by their name. Use `orWhereName` to add an OR condition.

```php
->whereName()
```

::: code-group

```php [Example]
Country::whereName('France')->first();
```

```php [Or Example]
Country::orWhereName('Germany')->first();
```

:::

Find countries where the name matches a pattern. Use orWhereNameLike to add an OR condition.


::: code-group

```php [Example]
Country::whereNameLike('United')->get();
```

```php [Or Example]
Country::orWhereNameLike('Kingdom')->get();
```

:::

## Where Official Name

Find countries by their official name. Use `orWhereOfficialName` to add an OR condition.

```php
->whereOfficialName()
```

::: code-group

```php [Example]
Country::whereOfficialName('Republic of India')->first();
```

```php [Or Example]
Country::orWhereOfficialName('Commonwealth of Australia')->first();
```

:::

Find countries where the official name matches a pattern. Use `orWhereOfficialNameLike` to add an OR condition.

::: code-group

```php [Example]
Country::whereOfficialNameLike('Republic')->get();
```

```php [Or Example]
Country::orWhereOfficialNameLike('Kingdom')->get();
```

:::

## Where Phone Code

Find countries by their international phone code. Use `orWherePhoneCode` to add an OR condition.

```php
->wherePhoneCode()
```

::: code-group

```php [Example]
Country::wherePhoneCode('+91')->first();
```

```php [Or Example]
Country::orWherePhoneCode('+81')->first();
```

:::

## Where Population

Find countries with a specific population.

```php
->wherePopulation()
```

```php [Example]
Country::wherePopulation(100000000)->get();
```

## Where Slug

Find countries by their slug (a URL-friendly name). Use `orWhereSlug` to add an OR condition.

```php
->whereSlug()
```

::: code-group

```php [Example]
Country::whereSlug('france')->first();
```

```php [Or Example]
Country::orWhereSlug('germany')->first();
```

:::

## Where UID

Find countries by their unique identifier (UID). Use `orWhereUid` to add an OR condition.

```php
->whereUid()
```

::: code-group

```php [Example]
Country::whereUid('01ARZ3NDEKTSV4RRFFQ69G5FAV')->first();
```

```php [Or Example]
Country::orWhereUid('01ARZ3NDEKTSV4RRFFQ69G5FAV')->first();
```

:::

## Where WMO

Find countries by their WMO (World Meteorological Organization) code.

All three methods do the same thing.

```php
->whereWmo()
->whereWmoCode()
->whereWorldMeteorologicalOrganizationCode()
```

::: code-group

```php [Example]
Country::whereWmo('FR')->first();
```

```php [Example II]
Country::whereWmoCode('DE')->first();
```

```php [Example III]
Country::whereWorldMeteorologicalOrganizationCode('JP')->first();
```

:::
