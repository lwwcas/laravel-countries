<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class AS_AmericanSamoa extends CountrySeeder
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
    public ?string $region = 'oceania';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'American Samoa';

        // Set the country's official name
        $this->official_name = 'American Samoa';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AS';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ASM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '016';

        // Set the international dialing code
        $this->international_phone = '+1-684';

        // Define the languages spoken in the country
        $this->languages = ['en', 'sm']; // English and Samoan

        // Define the top-level domain(s)
        $this->tld = ['.as'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '5 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '3 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '40%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'American Samoa Telecommunications Authority (ASTCA)'; // Responsible for telecommunications and possibly cybersecurity

        // List popular web technologies in American Samoa
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '5880801';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States Dollar',
            // Currency code
            'code' => 'USD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '2', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 55197; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 199; // km²

        // Set the capital city
        $this->capital = 'Pago Pago';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Pacific/Pago_Pago',
            // Standard time offset
            'standard_time' => 'UTC−11', // Samoa Standard Time
        ];

        // Set the independence day
        $this->independence_day = null; // American Samoa is an unincorporated territory of the United States

        // List international organizations the country is part of
        $this->international_organizations = ['Pacific Community (SPC)']; // Regional affiliations

        // Set the GDP in billions of USD
        $this->gdp = 0.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity']; // Predominant religion

        // Describe the form of government
        $this->government = 'Unincorporated unorganized territory of the United States with local self-government';

        // Set the national sport
        $this->national_sport = 'American Football'; // Popular sport in American Samoa

        // Define bordering countries
        $this->borders = []; // Island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇸',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1F8',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1F8;',
            // CSS entities
            'css' => '\\1F1E6\\1F1F8',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127480;',
            // Direct UTF-8 string
            'utf8' => '🇦🇸',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDF8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-as:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1F8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'navy',
                // Hexadecimal color code
                'hex' => '#002B7F',
                // RGB color values
                'rgb' => '0,43,127',
                // CMYK color values
                'cmyk' => '100,66,0,50',
                // HSL color values
                'hsl' => '219,100%,25%',
                // HSV color values
                'hsv' => '219,100%,50%',
                // Pantone color code
                'pantone' => 'Pantone 280 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
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
                'cmyk' => '0,92,77,22',
                // HSL color values
                'hsl' => '348,85%,42%',
                // HSV color values
                'hsv' => '348,92%,78%',
                // Pantone color code
                'pantone' => 'Pantone 186 C',
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
                'pantone' => 'Pantone White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'gold',
                // Hexadecimal color code
                'hex' => '#FFD700',
                // RGB color values
                'rgb' => '255,215,0',
                // CMYK color values
                'cmyk' => '0,16,100,0',
                // HSL color values
                'hsl' => '51,100%,50%',
                // HSV color values
                'hsv' => '51,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Brown',
                // Web color name
                'web_name' => 'saddlebrown',
                // Hexadecimal color code
                'hex' => '#8B4513',
                // RGB color values
                'rgb' => '139,69,19',
                // CMYK color values
                'cmyk' => '0,50,86,45',
                // HSL color values
                'hsl' => '25,76%,31%',
                // HSV color values
                'hsv' => '25,86%,55%',
                // Pantone color code
                'pantone' => 'Pantone 1545 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-14.2756',
            // Longitude in decimal degrees
            'longitude' => '-170.7020',
            // Degrees with decimal
            'dd' => '14.2756° S, 170.7020° W',
            // Degrees, minutes, seconds
            'dms' => '14°16\'32.16" S, 170°42\'07.20" W',
            // Degrees and decimal minutes
            'dm' => '14°16.536\' S, 170°42.120\' W',
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
      "properties": { "cca2": "as" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-170.542511, -14.2975],
              [-170.546112, -14.29861],
              [-170.550293, -14.29833],
              [-170.555878, -14.295],
              [-170.560822, -14.287781],
              [-170.54837, -14.282501],
              [-170.540039, -14.283892],
              [-170.536682, -14.28889],
              [-170.542511, -14.2975]
            ]
          ],
          [
            [
              [-170.637268, -14.289446],
              [-170.743896, -14.37555],
              [-170.74942, -14.37389],
              [-170.766449, -14.363611],
              [-170.822266, -14.32945],
              [-170.826111, -14.325],
              [-170.822266, -14.32028],
              [-170.809174, -14.308058],
              [-170.800293, -14.300556],
              [-170.795013, -14.298058],
              [-170.681671, -14.25806],
              [-170.66806, -14.25556],
              [-170.660004, -14.25528],
              [-170.570282, -14.25278],
              [-170.565552, -14.25584],
              [-170.560028, -14.26584],
              [-170.560822, -14.269169],
              [-170.563324, -14.272503],
              [-170.578613, -14.27917],
              [-170.637268, -14.289446]
            ]
          ],
          [
            [
              [-169.444489, -14.26167],
              [-169.50946, -14.276669],
              [-169.513062, -14.27583],
              [-169.517792, -14.272779],
              [-169.521698, -14.26833],
              [-169.535553, -14.24278],
              [-169.537231, -14.23778],
              [-169.536133, -14.231668],
              [-169.533936, -14.22972],
              [-169.522278, -14.22695],
              [-169.51532, -14.22666],
              [-169.449768, -14.22639],
              [-169.445587, -14.22666],
              [-169.439453, -14.231668],
              [-169.438324, -14.256668],
              [-169.440002, -14.26056],
              [-169.444489, -14.26167]
            ]
          ],
          [
            [
              [-169.62558, -14.18972],
              [-169.631409, -14.19083],
              [-169.641693, -14.18611],
              [-169.644196, -14.18111],
              [-169.644745, -14.176111],
              [-169.640564, -14.171667],
              [-169.626129, -14.166945],
              [-169.621948, -14.168612],
              [-169.621948, -14.17639],
              [-169.623077, -14.18389],
              [-169.62558, -14.18972]
            ]
          ],
          [
            [
              [-169.685577, -14.19194],
              [-169.686951, -14.19194],
              [-169.693054, -14.18889],
              [-169.694153, -14.18528],
              [-169.694153, -14.17361],
              [-169.690857, -14.167501],
              [-169.687256, -14.16639],
              [-169.683075, -14.166666],
              [-169.665588, -14.172777],
              [-169.662231, -14.175001],
              [-169.65976, -14.17917],
              [-169.65976, -14.180555],
              [-169.661438, -14.183332],
              [-169.681122, -14.19167],
              [-169.685577, -14.19194]
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
