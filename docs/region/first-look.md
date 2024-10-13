# Your First Look

The `CountryRegion::class` provides a simple and effective way to manage and query regions in your application.

Here’s a quick introduction to what you can do with this model:

## Usage

To start using `CountryRegion::class`, just add this to your code:

```php{1}
use Lwwcas\LaravelCountries\Models\CountryRegion;

CountryRegion::all();

```

Or, if you'd like a shorter alias, you can import it like this:

```php{1}
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::all();

```

## Data Example

You'll find all the information you can retrieve by filtering a region.
We've presented it as an array for simplicity, but in reality, you'll be working with a `CountryRegion::class` collection.

Using this collection, you can easily access any country within the filtered region through the relationship `->countries()->get()`.

### Input
```php
use Lwwcas\LaravelCountries\Models\CountryRegion as Region;

Region::inRandomOrder()->first()->toArray();
```

### Output

```json

array:9 [▼
  "id" => 5
  "iso_alpha_2" => "OC"
  "icao" => "PAC"
  "iucn" => "Oceania"
  "tdwg" => "OCN"
  "is_visible" => true
  "slug" => "oceania"
  "name" => "Oceania"
  "translations" => array:1 [▼
    0 => array:5 [▼
      "id" => 5
      "lc_region_id" => 5
      "name" => "Oceania"
      "slug" => "oceania"
      "locale" => "en"
    ]
  ]
]

```

## Overview

This section provides a quick summary of key fields related to regional data used in the application.
These fields include standard region codes from various international organizations and a visibility flag:

| Field        | Description                                                                                       |
|--------------|---------------------------------------------------------------------------------------------------|
| iso_alpha_2  | The ISO 3166-1 alpha-2 region code (e.g., "US" for United States).                                |
| icao         | The ICAO (International Civil Aviation Organization) region code for aviation purposes.           |
| iucn         | The IUCN (International Union for Conservation of Nature) region code for conservation data.       |
| tdwg         | The TDWG (World Geographical Scheme for Recording Plant Distributions) code, used in biodiversity studies. |
| is_visible   | A boolean flag indicating if the region is visible in the queries.                            |

## Use Cases

### iso_alpha_2

**Third-Party API Integration:** When working with external services like payment gateways, shipping providers, or analytics tools, the `iso_alpha_2` code is often required to specify the region.
This ensures smooth communication and data exchange with these services.

### icao

**Aviation Data Handling:** If your application deals with flight tracking, airport information, or air traffic control, the `icao` region code is essential. It helps accurately identify regions in aviation databases and APIs, ensuring your app provides precise information.

**Flight Planning Tools:** For apps assisting pilots or airlines, use the `icao` code to fetch and display information like airspace regulations, flight routes, and region-specific aviation rules, which are critical for safe and efficient flight planning.

### iucn

**Conservation Status Monitoring:** Utilize the `iucn` region code to access and display data on endangered species within specific regions. This is invaluable for apps focused on environmental protection, research, or education.

**Ecological Data Analysis:** Researchers can use the `iucn` codes in your app to analyze biodiversity trends, track habitat changes, or assess the impact of human activities on different regions, aiding in conservation efforts.

### tdwg

**Biodiversity Mapping:** Use the `tdwg` code to map plant species distributions in your app. This is particularly useful for botanists and ecologists who need detailed geographical information on plant habitats.

**Data Standardization for Research:** Incorporate the `tdwg` codes to align your application's data with international biodiversity standards. This makes it easier to share data with global databases and collaborate with other researchers.
