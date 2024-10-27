<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BM_Bermuda extends CountrySeeder
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
    public ?string $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Bermuda';

        // Set the country's official name
        $this->official_name = 'Bermuda';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BMU';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '060';

        // Set the international dialing code
        $this->international_phone = '1-441';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '95%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Department of ICT Policy & Innovation';

        // List popular web technologies in Bermuda
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BU';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3573345';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Bermudian dollar',
            // Currency code
            'code' => 'BMD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['2', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 63903; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 54; // km²

        // Set the capital city
        $this->capital = 'Hamilton';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Atlantic/Bermuda',
            // Standard time offset
            'standard_time' => 'UTC−4', // Atlantic Standard Time
        ];

        // Set the independence day
        $this->independence_day = null; // Bermuda is a British Overseas Territory

        // List international organizations the country is part of
        $this->international_organizations = []; // Represented by the UK in international organizations

        // Set the GDP in billions of USD
        $this->gdp = 5.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity (Anglican, Catholic, Methodist)'];

        // Describe the form of government
        $this->government = 'Self-governing British Overseas Territory with parliamentary representative democracy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is very popular

        // Define bordering countries
        $this->borders = []; // Island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇲',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1F2',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1E7\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇧🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bm:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#C8102E',
                // RGB color values
                'rgb' => '200,16,46',
                // CMYK color values
                'cmyk' => '0,92,76,22',
                // HSL color values
                'hsl' => '350,85%,42%',
                // HSV color values
                'hsv' => '350,92%,78%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'navy blue',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '220,100%,25%',
                // HSV color values
                'hsv' => '220,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '32.2949',
            // Longitude in decimal degrees
            'longitude' => '-64.7814',
            // Degrees with decimal
            'dd' => '32.2949° N, 64.7814° W',
            // Degrees, minutes, seconds
            'dms' => '32°17\'41.64" N, 64°46\'53.04" W',
            // Degrees and decimal minutes
            'dm' => '32°17.694\' N, 64°46.884\' W',
            // Various GPS formats
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
      "properties": { "cca2": "bm" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-64.855835, 32.27861],
              [-64.86111, 32.27638],
              [-64.873062, 32.276939],
              [-64.875565, 32.281387],
              [-64.876114, 32.286942],
              [-64.874451, 32.29305],
              [-64.85362, 32.30888],
              [-64.844452, 32.31472],
              [-64.83806, 32.314163],
              [-64.8389, 32.30861],
              [-64.848816, 32.302727],
              [-64.85884, 32.2963],
              [-64.861488, 32.287975],
              [-64.85278, 32.281662],
              [-64.855835, 32.27861]
            ]
          ],
          [
            [
              [-64.643341, 32.354439],
              [-64.65056, 32.354439],
              [-64.656113, 32.355827],
              [-64.68251, 32.356667],
              [-64.68584, 32.357216],
              [-64.666397, 32.367218],
              [-64.65529, 32.370827],
              [-64.64723, 32.36972],
              [-64.64279, 32.366661],
              [-64.63945, 32.362778],
              [-64.63863, 32.357216],
              [-64.643341, 32.354439]
            ]
          ],
          [
            [
              [-64.78334, 32.270554],
              [-64.80334, 32.262497],
              [-64.82306, 32.260551],
              [-64.84673, 32.262447],
              [-64.858269, 32.2668],
              [-64.85789, 32.270767],
              [-64.84579, 32.272282],
              [-64.8333, 32.268497],
              [-64.81194, 32.271713],
              [-64.784729, 32.27861],
              [-64.780014, 32.281662],
              [-64.77734, 32.286652],
              [-64.7883, 32.29668],
              [-64.747787, 32.312218],
              [-64.718338, 32.340271],
              [-64.696396, 32.371384],
              [-64.6925, 32.374992],
              [-64.68362, 32.380829],
              [-64.67778, 32.382217],
              [-64.67168, 32.379997],
              [-64.67418, 32.374992],
              [-64.68713, 32.367588],
              [-64.6962, 32.359837],
              [-64.6998, 32.349056],
              [-64.69862, 32.343605],
              [-64.692429, 32.335442],
              [-64.694695, 32.33015],
              [-64.70623, 32.327499],
              [-64.72139, 32.320274],
              [-64.7489, 32.295273],
              [-64.76112, 32.284996],
              [-64.77, 32.27916],
              [-64.78334, 32.270554]
            ]
          ]
        ]
      }
    }
  ]
}
';
    }
}
