<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class IM_IsleofMan extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Isle of Man';

        // Set the country's official name
        $this->official_name = 'Isle of Man';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'IM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'IMN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '833';

        // Set the international dialing code
        $this->international_phone = '44-1624';

        // Define the languages spoken in the country
        $this->languages = ['en', 'gv']; // English and Manx Gaelic

        // Define the top-level domain(s)
        $this->tld = ['.im'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '30 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '80%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Office of Cyber-Security and Information Assurance';

        // List popular web technologies in Isle of Man
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'IM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3042225';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Manx pound',
            // Currency code
            'code' => 'IMP',
            // Currency symbol
            'symbol' => '£',
            // Main unit
            'main_unit' => 'pound',
            // Subunit
            'sub_unit' => 'penny',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'], // Only numbers as per your request
        ];

        // Set the population
        $this->population = 85000; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 572; // km²

        // Set the capital city
        $this->capital = 'Douglas';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Isle_of_Man',
                // Standard time offset
                'standard_time' => 'UTC+0', // Greenwich Mean Time (GMT)
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+1', // British Summer Time (BST)
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Isle of Man is a self-governing British Crown Dependency

        // List international organizations the country is part of
        $this->international_organizations = [
            // As a Crown Dependency, it's not a member of international organizations independently
        ];

        // Set the GDP in billions of USD
        $this->gdp = 4.1; // Estimated GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Anglican, Methodist, Catholic)',
        ];

        // Describe the form of government
        $this->government = 'Self-governing British Crown Dependency';

        // Set the national sport
        $this->national_sport = 'Motorcycle Racing'; // The Isle of Man TT is famous

        // Define bordering countries
        $this->borders = []; // It is an island with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇮🇲',
            // Unicode code points
            'uCode' => 'U+1F1EE U+1F1F2',
            // HTML entities
            'html' => '&#x1F1EE;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1EE\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127470;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇮🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEE\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-im:',
            // Hexadecimal entity
            'hex' => '&#x1F1EE;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF142B',
                // RGB color values
                'rgb' => '207,20,43',
                // CMYK color values
                'cmyk' => '0,90,79,19',
                // HSL color values
                'hsl' => '350,82%,44%',
                // HSV color values
                'hsv' => '350,90%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'White',
                // Web color name
                'web_name' => 'white',
                // Hexadecimal color code
                'hex' => '#FFFFFF',
                // RGB color values
                'rgb' => '255,255,255',
                // CMYK color values
                'cmyk' => '0,0,0,0',
                // HSL color values
                'hsl' => '0,0%,100%',
                // HSV color values
                'hsv' => '0,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFCC00',
                // RGB color values
                'rgb' => '255,204,0',
                // CMYK color values
                'cmyk' => '0,20,100,0',
                // HSL color values
                'hsl' => '48,100%,50%',
                // HSV color values
                'hsv' => '48,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '54.2361',
            // Longitude in decimal degrees
            'longitude' => '-4.5481',
            // Degrees with decimal
            'dd' => '54.2361° N, 4.5481° W',
            // Degrees, minutes, seconds
            'dms' => '54°14\'9.96" N, 4°32\'53.16" W',
            // Degrees and decimal minutes
            'dm' => '54°14.166\' N, 4°32.886\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "im" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-4.777779, 54.05555],
            [-4.78389, 54.056938],
            [-4.7875, 54.059441],
            [-4.788611, 54.063049],
            [-4.788611, 54.067215],
            [-4.713889, 54.214439],
            [-4.710279, 54.217216],
            [-4.69889, 54.219162],
            [-4.645834, 54.238052],
            [-4.641389, 54.239998],
            [-4.625, 54.248886],
            [-4.618056, 54.254166],
            [-4.601945, 54.267776],
            [-4.595834, 54.273888],
            [-4.588056, 54.283607],
            [-4.578056, 54.296944],
            [-4.554723, 54.331108],
            [-4.553334, 54.335274],
            [-4.552778, 54.343887],
            [-4.541389, 54.35611],
            [-4.5275, 54.367218],
            [-4.485001, 54.387215],
            [-4.443056, 54.398048],
            [-4.368056, 54.416664],
            [-4.360278, 54.416107],
            [-4.354167, 54.410828],
            [-4.352778, 54.409164],
            [-4.308333, 54.300552],
            [-4.307501, 54.296944],
            [-4.309445, 54.293327],
            [-4.321667, 54.276665],
            [-4.386111, 54.195549],
            [-4.394444, 54.186386],
            [-4.470556, 54.137497],
            [-4.491112, 54.126663],
            [-4.550556, 54.097771],
            [-4.623889, 54.068604],
            [-4.684445, 54.076942],
            [-4.690556, 54.078331],
            [-4.704722, 54.07972],
            [-4.720834, 54.076111],
            [-4.777779, 54.05555]
          ]
        ]
      }
    }
  ]
}
';
    }
}
