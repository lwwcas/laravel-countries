# Basic Usage Global Scopes

In country model and region model, two global scopes are automatically applied during the class boot process.

These scopes are enabled by default, and no additional configuration is required to activate them.
They are always automatically applied when querying the Country model.

## Overview

`Visible Scope`: This global scope ensures that only countries where the `'is_visible'` field is set to `true` are retrieved.
This means that all queries will automatically filter out countries marked as not visible.

```php
$builder->where('is_visible', true);
```

`Translation Scope`: This global scope ensures that translations are always eagerly loaded with each country query, so there is no need to manually include them in each query.

```php
$builder->withTranslation();
```

## Disabling the Scope

To disable these global scopes on a per-query basis, you can use the `withNotTranslation()` or `withNotVisible()` method as demonstrated in the following code examples.
This allows you to bypass the automatic filters that are otherwise applied by default.

### Disabling the `translation` scope

By calling the `withNotTranslation()` method, the translation scope is removed for that particular query.
This is useful if you want to fetch the data without the translations eager-loaded.

::: code-group

```php{3} [Country::class]
use Lwwcas\LaravelCountries\Models\Country;

Country::withNotTranslation()
    ->whereName('United Kingdom')
    ->first();

```

```php{3} [Region::class]
use Lwwcas\LaravelCountries\Models\CountryRegion;

CountryRegion::withNotTranslation()
    ->whereName('Africa')
    ->first();

```

:::

### Disabling the `visible` scope

Similarly, the withNotVisible() method removes the `is_visible` filter, allowing you to retrieve countries that may not be marked as visible.

::: code-group

```php{3} [Country::class]
use Lwwcas\LaravelCountries\Models\Country;

Country::withNotVisible()
    ->whereName('United Kingdom')
    ->first();

```

```php{3} [Region::class]
use Lwwcas\LaravelCountries\Models\CountryRegion;

CountryRegion::withNotVisible()
    ->whereName('Africa')
    ->first();

```

:::

### Important Note

::: warning
In all other queries, both global scopes (`is_visible` and `translation`) will continue to be applied automatically, ensuring that only visible countries with translations are retrieved unless explicitly overridden.
:::

## Methods

Although these aren't traditional scopes, the methods in this section behave similarly by allowing you to easily filter and query data. They provide a convenient, reusable way to interact with your data, just like scopes would.

Everything here applies to both `Country::class` and `CountryRegion::class`, so you can use these methods to streamline your queries for both countries and regions.


| Field        | Description                                                                                       |
|--------------|---------------------------------------------------------------------------------------------------|
| isVisible()             | Returns a boolean indicating if the country/regio `is_visible` flag is `true`. |
| isHidden()               | Returns a boolean indicating if the country/regio `is_visible` flag is `false`. |
| setVisibleTrue()  | Sets the country/regio `is_visible` flag to `true`.                  |
| setVisibleFalse() | Sets the country/regio `is_visible` flag to `false`.                 |
| setModelVisible() | Sets the country/regio `is_visible` flag to `true`.                  |
| setModelHidden()  | Sets the country/regio `is_visible` flag to `false`.                 |
