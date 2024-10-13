# Your First Look

The `Country::class` provides a simple and effective way to manage and query countries in your application.

Here’s a quick introduction to what you can do with this model:

## Usage

To start using `Country::class`, just add this to your code:

```php{1}
use Lwwcas\LaravelCountries\Models\Country;

Country::all();

```

## Data Example

You'll find all the information you can retrieve by filtering a country.
We've presented it as an array for simplicity, but in reality, you'll be working with a `Country::class` collection.

### Input

```php
use Lwwcas\LaravelCountries\Models\Country;

Country::inRandomOrder()->first()->toArray();
```

### Output

::: details Click me to view the output

```  json
{
    "id": 30,
    "lc_region_id": 2,
    "uid": "01J95Z2ZRPSEJ1BKW90K4BJFZB",
    "official_name": "Federative Republic of Brazil",
    "slug": "brazil",
    "name": "Brazil",
    "capital": "Brasília",
    "iso_alpha_2": "BR",
    "iso_alpha_3": "BRA",
    "iso_numeric": 76,
    "international_phone": "55",
    "geoname_id": "3469034",
    "wmo": "BZ",
    "independence_day": "1822-09-07",
    "population": "212559417",
    "area": "8515767",
    "gdp": "1445",
    "languages": [
        "pt"
    ],
    "tld": [
        ".br"
    ],
    "alternative_tld": [],
    "borders": [
        "ar",
        "bo",
        "co",
        "gf",
        "gy",
        "py",
        "pe",
        "sr",
        "uy",
        "ve"
    ],
    "timezones": {
        "main": {
            "timezone_id": "America/Sao_Paulo",
            "standard_time": "UTC−3"
        },
        "others": [
            {
                "timezone_id": "America/Manaus",
                "standard_time": "UTC−4"
            },
            {
                "timezone_id": "America/Rio_Branco",
                "standard_time": "UTC−5"
            }
        ]
    },
    "translations": [
        {
            "id": 30,
            "lc_country_id": 30,
            "name": "Brazil",
            "slug": "brazil",
            "locale": "en"
        }
    ],
    "currency": {
        "code": "BRL",
        "name": "Brazilian real",
        "symbol": "R$",
        "unit": {
            "sub": "centavo",
            "main": "real",
            "to_unit": 100
        },
        "coins": {
            "sub": [
                "5",
                "10",
                "25",
                "50"
            ],
            "main": [
                "1"
            ]
        },
        "banknotes": [
            "2",
            "5",
            "10",
            "20",
            "50",
            "100",
            "200"
        ]
    },
    "flag_emoji": {
        "css": "\\1F1E7\\1F1F7",
        "hex": "&#x1F1E7;&#x1F1F7;",
        "img": "🇧🇷",
        "html": "&#x1F1E7;&#x1F1F7;",
        "utf8": "🇧🇷",
        "uCode": "U+1F1E7 U+1F1F7",
        "utf16": "\\uD83C\\uDDE7\\uD83C\\uDDF7",
        "decimal": "&#127463;&#127479;",
        "shortcode": ":flag-br:"
    },
    "flag_colors": [
        "Green",
        "Yellow",
        "Blue",
        "White"
    ],
    "flag_colors_web": [
        "green",
        "yellow",
        "blue",
        "white"
    ],
    "flag_colors_contrast": [
        "#FFFFFF",
        "#000000",
        "#FFFFFF",
        "#000000"
    ],
    "flag_colors_hex": [
        "#009C3B",
        "#FFDF00",
        "#002776",
        "#FFFFFF"
    ],
    "flag_colors_rgb": [
        "0,156,59",
        "255,223,0",
        "0,39,118",
        "255,255,255"
    ],
    "flag_colors_cmyk": [
        "100,0,62,39",
        "0,13,100,0",
        "100,67,0,54",
        "0,0,0,0"
    ],
    "flag_colors_hsl": [
        "147,100%,31%",
        "51,100%,50%",
        "217,100%,23%",
        "0,0%,100%"
    ],
    "flag_colors_hsv": [
        "147,100%,61%",
        "51,100%,100%",
        "217,100%,46%",
        "0,0%,100%"
    ],
    "flag_colors_pantone": [
        "Green C",
        "Yellow 012 C",
        "Reflex Blue C",
        "White"
    ],
    "region": {
        "id": 2,
        "iso_alpha_2": "AM",
        "icao": "NAT",
        "iucn": "Americas",
        "tdwg": "NAM/SAM",
        "is_visible": true,
        "slug": "americas",
        "name": "Americas",
        "translations": [
            {
                "id": 2,
                "lc_region_id": 2,
                "name": "Americas",
                "slug": "americas",
                "locale": "en"
            }
        ]
    },
    "extras": {
        "id": 30,
        "lc_country_id": 30,
        "national_sport": "Football (Soccer)",
        "cybersecurity_agency": "Department of Information Security and Cybersecurity (Departamento de Segurança da Informação e Comunicações)",
        "popular_technologies": [
            "PHP",
            "JavaScript",
            "Java",
            "Python",
            ".NET",
            "WordPress"
        ],
        "internet": {
            "speed": {
                "average_fixed": "100 Mbps",
                "average_mobile": "30 Mbps"
            },
            "penetration": "75%"
        },
        "religions": [
            "Christianity (Roman Catholicism, Protestantism)",
            "Spiritism",
            "Afro-Brazilian religions"
        ],
        "international_organizations": [
            "United Nations",
            "World Trade Organization (WTO)",
            "BRICS",
            "G20",
            "Mercosur",
            "Organization of American States (OAS)",
            "Union of South American Nations (UNASUR)",
            "Community of Latin American and Caribbean States (CELAC)"
        ]
    },
    "coordinates": {
        "id": 30,
        "lc_country_id": 30,
        "latitude": "-15.7939",
        "longitude": "-47.8828",
        "degrees_with_decimal": "15.7939° S, 47.8828° W",
        "degrees_minutes_seconds": "15°47'38.04\" S, 47°52'58.08\" W",
        "degrees_and_decimal_minutes": "15°47.634' S, 47°52.968' W",
        "gps": []
    },
    "is_visible": true,
}

```

:::

## Fillable data

<img src="/assets/contry_model.png" alt="Country Model">

::: details Click me to view fillable data

```php

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', // Unique identifier (ULID) for the country.
        'lc_region_id', // Foreign key linking the country to a specific region.

        'official_name', // The official name of the country (e.g., "United States of America").
        'capital', // The capital city of the country.
        'iso_alpha_2', // ISO 3166-1 alpha-2 country code (e.g., "US" for the United States).
        'iso_alpha_3', // ISO 3166-1 alpha-3 country code (e.g., "USA" for the United States).
        'iso_numeric', // ISO 3166-1 numeric country code (e.g., "840" for the United States).

        'international_phone', // The country’s international dialing code (e.g., +1 for the United States).
        'geoname_id', // The GeoNames geographical database ID for the country https://www.geonames.org/
        'wmo', // Country abbreviations by the World Meteorological Organization (WMO).
        'independence_day', // Year of the country's independence, if applicable.

        'population', // The population of the country.
        'area', // The area of the country in square kilometers (km²).
        'gdp', // The Gross Domestic Product (GDP) of the country in billions of USD.

        'languages', // Official languages spoken in the country.
        'tld', // Top-level domain (e.g., ".us" for the United States).
        'alternative_tld', // Alternative top-level domains (e.g., country-specific or alternative domain suffixes).
        'borders', // List of bordering countries (if any).
        'timezones', // The country's time zones, including main and additional ones.
        'currency', // Information about the country's currency, including name, symbol, and units.

        'flag_emoji', // The emoji representation of the country's flag.
        'flag_colors', // Base colors of the flag.
        'flag_colors_web', // Web-safe color names for the flag.
        'flag_colors_contrast', // Contrast colors for improved readability on the flag.
        'flag_colors_hex', // Hexadecimal color codes for the flag.
        'flag_colors_rgb', // RGB (Red, Green, Blue) color values for the flag.
        'flag_colors_cmyk', // CMYK (Cyan, Magenta, Yellow, Black) color values for the flag.
        'flag_colors_hsl', // HSL (Hue, Saturation, Lightness) color values for the flag.
        'flag_colors_hsv', // HSV (Hue, Saturation, Value) color values for the flag.
        'flag_colors_pantone', // Pantone color codes for the flag.

        'is_visible', // Boolean flag indicating whether the country is visible in the application.
    ];

```

:::

## Why We Use UILD

<img src="/assets/uuidvsuild.webp" alt="UUID vs UILD">

**Why We Use UILD Instead of UUID for Country Listing**

We chose to use `UILD` instead of `UUID` for listing countries in the database for a simple reason: new countries aren’t created every day. Since the number of countries is relatively stable, using `UILD` (which is shorter and more efficient) makes more sense for this specific case.

`UUIDs` are great for large-scale or frequently changing datasets, but for something as steady as a list of countries, `UILD` keeps things cleaner and faster **without sacrificing uniqueness**.

It’s all about keeping the database lean and efficient!

### Benefits of Using UILD

#### Smaller Size, Faster Performance
UILDs are shorter than UUIDs, which reduces the amount of storage needed and speeds up lookups, queries, and indexing. For a fixed dataset like countries, this optimization is a great fit.

#### Simpler Queries
With UILDs being less complex, your queries are easier to write and manage. This leads to simpler code and less chance for errors when retrieving or updating country records.

#### Sufficient Uniqueness for Static Data
Since countries rarely change, UILD offers all the uniqueness we need without the overhead of UUID. It’s a perfect match for managing entities like countries, where the dataset is relatively small and stable.

## GeoJSON Structure

**GeoJSON** (Geographic JSON) is a format for encoding geographic data structures using JSON. It is widely used in mapping applications and geospatial analysis to represent various geographical features like points, lines, and polygons.

<img src="/assets/brazil-map.png" alt="Brazil Map">

### GeoJSON

This GeoJSON object represents the full geographical boundaries of Brazil, utilizing the **FeatureCollection** structure and a **MultiPolygon** geometry type to handle the complexity of the country's borders, including islands and coastal regions. Below, we break down the key components relevant to developers working with geospatial data:

### 🔑 Key Components

1. **FeatureCollection**:
   - The root object is a **FeatureCollection**, which is a standard GeoJSON structure that contains multiple **Feature** objects. In this case, it encapsulates Brazil’s geographic representation.

2. **Feature**:
   - Each **Feature** represents a single geographic entity. Here, Brazil is represented as a **Feature**, with metadata included in the **properties** section. This modular design allows developers to easily manage multiple geographic objects within a single **FeatureCollection**.

3. **Properties**:
   - The **properties** object holds non-spatial data about the feature. In this example, the ISO Alpha-2 country code `"br"` is included as a property under `"cca2"`. These properties can be extended to include additional metadata, such as population data or administrative classifications, depending on your use case.

4. **Geometry**:
   - The **geometry** field defines the spatial shape of the feature. For Brazil, the geometry type is **"MultiPolygon"**, which allows the representation of the country's complex boundaries, including multiple distinct areas like islands or disjointed regions. This makes it ideal for use in applications that require detailed boundary mapping or geospatial analysis.

### GeoJSON Example

Brazil GeoJson Example

::: details Click me to view the example

```json
{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "br" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-48.55056, -27.82139],
              [-48.55667, -27.82278],
              [-48.563057, -27.82139],
              [-48.565285, -27.816669],
              [-48.566673, -27.81111],
              [-48.566673, -27.79889],
              [-48.56583, -27.79278],
              [-48.55056, -27.69611],
              [-48.53167, -27.646946],
              [-48.502785, -27.56167],
              [-48.50111, -27.556114],
              [-48.50111, -27.549168],
              [-48.503334, -27.544445],
              [-48.52167, -27.51833],
              [-48.527779, -27.491669],
              [-48.52361, -27.46639],
              [-48.51833, -27.43556],
              [-48.51723, -27.430836],
              [-48.43084, -27.39],
              [-48.42473, -27.388889],
              [-48.418335, -27.388889],
              [-48.414169, -27.39167],
              [-48.410835, -27.395557],
              [-48.37195, -27.44361],
              [-48.371117, -27.44972],
              [-48.40639, -27.59278],
              [-48.412506, -27.60111],
              [-48.44833, -27.63084],
              [-48.45889, -27.641945],
              [-48.49667, -27.71139],
              [-48.499725, -27.722504],
              [-48.500557, -27.728615],
              [-48.499725, -27.73473],
              [-48.498337, -27.74028],
              [-48.492226, -27.74861],
              [-48.485, -27.75611],
              [-48.479729, -27.765],
              [-48.479729, -27.77167],
              [-48.48222, -27.776669],
              [-48.48611, -27.78],
              [-48.54056, -27.816669],
              [-48.55056, -27.82139]
            ]
          ],
          [
            [
              [-48.58112, -26.39167],
              [-48.58584, -26.425556],
              [-48.62611, -26.39333],
              [-48.70556, -26.31444],
              [-48.707779, -26.309723],
              [-48.70473, -26.305557],
              [-48.55, -26.16972],
              [-48.54472, -26.167778],
              [-48.537781, -26.16722],
              [-48.52639, -26.17056],
              [-48.51723, -26.17611],
              [-48.51445, -26.18028],
              [-48.485, -26.22889],
              [-48.485, -26.234169],
              [-48.49028, -26.243057],
              [-48.517784, -26.280003],
              [-48.52723, -26.29222],
              [-48.531113, -26.29556],
              [-48.54028, -26.307781],
              [-48.54501, -26.317223],
              [-48.5789, -26.38667],
              [-48.58112, -26.39167]
            ]
          ],
          ...
        ]
      }
    }
  ]
}
```

:::

### Use Cases

GeoJSON is commonly used in various applications, such as:

### 1. **Mapping Applications**

- Used in interactive maps to display geographic data like country borders, rivers, roads, and regions.
- Example: Displaying country borders with **MultiPolygon**.

### 2. **Geospatial Analysis**

- Used to perform geospatial analysis, such as measuring distances, areas, or determining if a point lies within a certain region.
- Example: Determining whether a GPS coordinate falls within a polygon representing a country.

### 3. **Data Visualization**

- Used in data visualization tools to overlay geographical data on maps for insights, such as population density, climate data, and election results.
- Example: Visualizing a country’s boundary overlaid with population density.

### 4. **API Integration**

- Many APIs (such as geolocation services or environmental data providers) use GeoJSON to return geographic data in a structured format.
- Example: Using a GeoJSON response from an API to plot data points on a map.


## Quick snippets

Need a quick way to work with countries? Here are some handy snippets to get you started! Whether you're fetching countries by name, ISO codes, or filtering by regions, we've got you covered.

Check out the **[full documentation](/introduction/quick-snippets-of-all-country-data.html#quick-snippets)** to see all the details and explore everything you can do with countries.
