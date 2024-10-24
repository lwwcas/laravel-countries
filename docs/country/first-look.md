# Your First Look

The `Country::class` provides a simple and effective way to manage and query countries in your application.

Here’s a quick introduction to what you can do with this model:

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

## Quick snippets

Need a quick way to work with countries? Here are some handy snippets to get you started! Whether you're fetching countries by name, ISO codes, or filtering by regions, we've got you covered.

::: details Click me to view the code

### Brazil Country Profile

### 1. **Name**

- **Brazil**: The common name of the country.
- This is the informal or short name used to reference the country.

### 2. **Official Name**

- **Federative Republic of Brazil**: The full official name of the country.
- This is the formal name used in official contexts, treaties, and legal documents.

### 3. **ISO Codes**

- **ISO Alpha-2**: **BR**
  - The two-letter ISO 3166-1 code for the country.
  - Used for international shipping, data exchange, and internet domains.
- **ISO Alpha-3**: **BRA**
  - The three-letter ISO 3166-1 code for the country.
  - Used in international standards to represent the country.
- **ISO Numeric**: **076**
  - The numeric ISO 3166-1 code for the country.
  - Used in data formats requiring numeric data, such as customs and trade databases.

### 4. **International Phone Code**

- **+55**: The country’s international dialing code.
- Used to make international calls to Brazil.

### 5. **Languages**

- **['pt']**: Official languages spoken in the country.
- **pt** stands for Portuguese, the official language of Brazil.

### 6. **Top-Level Domains (TLDs)**

- **['.br']**: The country’s internet domain suffix.
- Used in web addresses specific to Brazil (e.g., websites ending in `.br`).
- **Alternative TLDs**: No significant alternative TLDs.

### 7. **WMO Code**

- **BZ**: The country’s code according to the **World Meteorological Organization**.
- Used in weather forecasting and climate monitoring systems.

### 8. **Geoname ID**

- **3469034**: The unique identifier from the **GeoNames** database for Brazil.
- Useful for obtaining detailed geographical and administrative information about the country.

### 9. **Emoji Representation**

- **🇧🇷**
  - **Unicode**: U+1F1E7 U+1F1F7
  - **HTML Entities**: `&#x1F1E7;&#x1F1F7;`
  - **CSS**: `\1F1E7\1F1F7`
  - **Decimal**: `&#127463;&#127479;`
  - **UTF-8**: `🇧🇷`
  - **UTF-16**: `\uD83C\uDDE7\uD83C\uDDF7`
  - **Shortcode**: `:flag-br:`
  - **Hexadecimal**: `&#x1F1E7;&#x1F1F7;`
- Used in user interfaces, social media, and web content to represent the country visually.

### 10. **Flag Colors**

- **Green**:
  - **Web Name**: green
  - **Hex**: `#009C3B`
  - **RGB**: `0,156,59`
  - **CMYK**: `100,0,62,39`
  - **HSL**: `147°,100%,31%`
  - **HSV**: `147°,100%,61%`
  - **Pantone**: Green C
  - **Contrast Color**: `#FFFFFF`
- **Yellow**:
  - **Web Name**: yellow
  - **Hex**: `#FFDF00`
  - **RGB**: `255,223,0`
  - **CMYK**: `0,13,100,0`
  - **HSL**: `51°,100%,50%`
  - **HSV**: `51°,100%,100%`
  - **Pantone**: Yellow 012 C
  - **Contrast Color**: `#000000`
- **Blue**:
  - **Web Name**: blue
  - **Hex**: `#002776`
  - **RGB**: `0,39,118`
  - **CMYK**: `100,67,0,54`
  - **HSL**: `217°,100%,23%`
  - **HSV**: `217°,100%,46%`
  - **Pantone**: Reflex Blue C
  - **Contrast Color**: `#FFFFFF`
- **White**:
  - **Web Name**: white
  - **Hex**: `#FFFFFF`
  - **RGB**: `255,255,255`
  - **CMYK**: `0,0,0,0`
  - **HSL**: `0°,0%,100%`
  - **HSV**: `0°,0%,100%`
  - **Pantone**: White
  - **Contrast Color**: `#000000`
- These colors represent the primary colors in Brazil’s national flag.

### 11. **Population and Area**

- **Population**: `212,559,417`
  - As of recent estimates.
- **Area**: `8,515,767 km²`
  - Total area of the country in square kilometers.

### 12. **Capital City**

- **Brasília**: The capital city of Brazil.

### 13. **Time Zones**

- **America/Sao_Paulo**:
  - **Standard Time**: `UTC−3`
- **America/Manaus**:
  - **Standard Time**: `UTC−4`
- **America/Rio_Branco**:
  - **Standard Time**: `UTC−5`
- Brazil spans multiple time zones due to its large geographical size.

### 14. **Independence Day**

- **1822-09-07**: Date of independence from Portugal.
- Celebrated annually as a national holiday.

### 15. **International Organizations**

- **Memberships**:
  - United Nations (UN)
  - World Trade Organization (WTO)
  - BRICS
  - G20
  - Mercosur
  - Organization of American States (OAS)
  - Union of South American Nations (UNASUR)
  - Community of Latin American and Caribbean States (CELAC)
- Brazil actively participates in various international organizations.

### 16. **Gross Domestic Product (GDP)**

- **$1,445 billion USD**
  - GDP in billions of USD.

### 17. **Religions**

- **Predominant Religions**:
  - Christianity (Roman Catholicism, Protestantism)
  - Spiritism
  - Afro-Brazilian religions
- Reflects the diverse religious landscape of the country.

### 18. **Government**

- **Federal presidential constitutional republic**
  - Describes the form of government in Brazil.

### 19. **National Sport**

- **Football (Soccer)**
  - The most popular and widely played sport in the country.

### 20. **Bordering Countries**

- **Argentina** (`AR`)
- **Bolivia** (`BO`)
- **Colombia** (`CO`)
- **French Guiana** (`GF`)
- **Guyana** (`GY`)
- **Paraguay** (`PY`)
- **Peru** (`PE`)
- **Suriname** (`SR`)
- **Uruguay** (`UY`)
- **Venezuela** (`VE`)
- Brazil shares borders with multiple South American countries.

### 21. **Currency Information**

- **Name**: Brazilian Real
- **Code**: BRL
- **Symbol**: R$
- **Main Unit**: Real
- **Sub Unit**: Centavo
- **Sub Unit to Main Unit**: 100 centavos = 1 real
- **Banknotes**: `2, 5, 10, 20, 50, 100, 200`
- **Main Coins**: `1`
- **Sub Coins**: `5, 10, 25, 50`

### 22. **Internet Information**

- **Average Internet Speeds**:
  - **Fixed Broadband**: `100 Mbps`
  - **Mobile Connection**: `30 Mbps`
- **Internet Penetration**: `75%`
  - Percentage of the population with internet access.

### 23. **National Cybersecurity Agency**

- **Department of Information Security and Cybersecurity**
  - Portuguese: `Departamento de Segurança da Informação e Comunicações`

### 24. **Popular Technologies**

- **Commonly Used Technologies**:
  - PHP
  - JavaScript
  - Java
  - Python
  - .NET
  - WordPress
- These technologies are widely used in Brazil's tech industry.

### 25. **UID and Region**

- **UID**: Unique identifier (ULID) for the country.
- **LC Region ID**: Foreign key linking the country to a specific region.

### 26. **Visibility**

- **Is Visible**: `True`
  - Indicates that the country is visible in the application or system.

### 27. **Coordinates Details**

- **Latitude**: `-15.7939`
- **Longitude**: `-47.8828`
- **Degrees with Decimal**: `15.7939° S, 47.8828° W`
- **Degrees, Minutes, Seconds**: `15°47'38.04" S, 47°52'58.08" W`
- **Degrees and Decimal Minutes**: `15°47.634' S, 47°52.968' W`
- **GPS Formats**: Various formats used in GPS devices.

:::
