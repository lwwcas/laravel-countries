# Workflow

`Country::class` includes a variety of PHP functions. Many of these functions are used by the package itself; however, you are free to use them in your own applications if you find them convenient.

`Country::class` includes a variety of PHP functions designed to handle country-related data efficiently. Many of these functions are integral to the package itself, but they are also available for developers to integrate seamlessly into their own applications.

Whether you need to access detailed information, manage country relationships, or work with country-specific data, `Country::class` provides all the tools you need to handle country information in a flexible and scalable way.

## Usage

To start using `Country::class`, just add this to your code:

```php{1}
use Lwwcas\LaravelCountries\Models\Country;

Country::all();

```
 or

```php{1}
use Lwwcas\LaravelCountries\Models\Country;

Country::inRandomOrder()->first();

```

## Attributes

To simplify how you access certain attributes, we've defined a default format.

| Name                 | Field               | Description                                                                          |
|----------------------|---------------------|--------------------------------------------------------------------------------------|
| Official Name        | official_name       | The official name of the country (e.g., "United States of America").                 |
| Capital              | capital             | The capital city of the country.                                                     |
| ISO Alpha-2 Code     | iso_alpha_2         | ISO 3166-1 alpha-2 country code (e.g., "US" for the United States).                  |
| ISO Alpha-3 Code     | iso_alpha_3         | ISO 3166-1 alpha-3 country code (e.g., "USA" for the United States).                 |
| ISO Numeric Code     | iso_numeric         | ISO 3166-1 numeric country code (e.g., "840" for the United States).                 |
| International Phone  | international_phone | The country’s international dialing code (e.g., +1 for the United States).           |
| Geoname ID           | geoname_id          | The GeoNames geographical database ID for the country.                               |
| WMO Code             | wmo                 | Country abbreviations by the World Meteorological Organization (WMO).                |
| Independence Day     | independence_day    | Year of the country's independence, if applicable.                                   |
| Population           | population          | The population of the country.                                                       |
| Area                 | area                | The area of the country in square kilometers (km²).                                  |
| GDP                  | gdp                 | The Gross Domestic Product (GDP) of the country in billions of USD.                  |


## Example Queries

Here are some examples of how you can query the Country model to find countries based on different criteria. We'll start with simple queries and move towards a more complex one.

### Find a Country by ISO Alpha-2 Code

You can find a country using its ISO Alpha-2 code with the `whereIsoAlpha2` scope.

```php{1}
$country = Country::whereIsoAlpha2('US')->first();

echo $country->official_name; // Outputs: "United States of America"
```

### Search for Countries by Official Name Using LIKE

To search for countries where the official name contains a specific keyword, use the `whereOfficialNameLike` scope.

```php{1}
$countries = Country::whereOfficialNameLike('United')->get();

foreach ($countries as $country) {
    echo $country->official_name . "\n";
}

// Outputs:
// "United States of America"
// "United Kingdom of Great Britain and Northern Ireland"
```

### Find Countries Matching Multiple Criteria

In this example, we're combining multiple query scopes and conditions to filter countries that match all the specified criteria. This demonstrates how powerful and flexible your queries can be when using the Country model.

```php
$countries = Country::where('population', '>', 180)
    ->where('independence_day', '<', Carbon::createFromDate(2000, 1, 1))
    ->where('area', '<', 1000000)
    ->whereCurrencyCode('EUR')
    ->whereLanguage('es')
    ->whereDomain('.es')
    ->get();

foreach ($countries as $country) {
    echo $country->official_name . "\n";
}

// Possible Output:
// "Kingdom of Spain"
```
