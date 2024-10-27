<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AD_Andorra extends CountrySeeder
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
        $this->name = 'Andorra';

        // Set the country's official name
        $this->official_name = 'Principality of Andorra';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AD';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'AND';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '020';

        // Set the international dialing code
        $this->international_phone = '376';

        // Define the languages spoken in the country
        $this->languages = ['ca']; // Catalan is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ad'];

        // Define alternative top-level domains (if any)
        $this->alternative_tlds = []; // No alternative TLDs for Andorra

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '175 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '50 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '98%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Andorra Telecom'; // National agency responsible for cybersecurity

        // List popular web technologies in Andorra
        $this->popular_technologies = ['PHP', 'JavaScript', 'Python', 'WordPress']; // Popular web technologies in Andorra

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AN';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3041565';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Euro',
            // Currency code
            'code' => 'EUR',
            // Currency symbol
            'symbol' => '€',
            // Main unit
            'main_unit' => 'euro',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 77543; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 468; // km²

        // Set the capital city
        $this->capital = 'Andorra la Vella';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Primary time zone identifier
            'timezone_id' => 'Europe/Andorra',
            // Standard time offset
            'standard_time' => 'UTC+1', // Central European Time
            // Daylight saving time offset
            'daylight_saving_time' => 'UTC+2', // Central European Summer Time
        ];

        // Set the foundation date
        $this->independence_day = '1278-09-08'; // Date of the Paréage Agreement

        // List international organizations the country is part of
        $this->international_organizations = ['United Nations', 'Council of Europe', 'OSCE', 'IMF']; // International affiliations

        // Set the GDP in billions of USD
        $this->gdp = 3.015; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity (Roman Catholicism)']; // Predominant religion

        // Describe the form of government
        $this->government = 'Parliamentary Co-Principality'; // Unique governmental system

        // Set the national sport
        $this->national_sport = 'Skiing'; // Popular sport due to mountainous terrain

        // Define bordering countries
        $this->borders = [
            ['name' => 'France', 'iso_alpha_2' => 'FR'],
            ['name' => 'Spain', 'iso_alpha_2' => 'ES'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇩',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1E9',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1E9;',
            // CSS entities
            'css' => '\\1F1E6\\1F1E9',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127465;',
            // Direct UTF-8 string
            'utf8' => '🇦🇩',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDE9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ad:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1E9;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0032A0',
                // RGB color values
                'rgb' => '0,50,160',
                // CMYK color values
                'cmyk' => '100,69,0,37',
                // HSL color values
                'hsl' => '224,100%,31%',
                // HSV color values
                'hsv' => '224,100%,63%',
                // Pantone color code
                'pantone' => 'Pantone 286 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FEDF00',
                // RGB color values
                'rgb' => '254,223,0',
                // CMYK color values
                'cmyk' => '0,12,100,0',
                // HSL color values
                'hsl' => '52,100%,50%',
                // HSV color values
                'hsv' => '52,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#D1001F',
                // RGB color values
                'rgb' => '209,0,31',
                // CMYK color values
                'cmyk' => '0,100,85,18',
                // HSL color values
                'hsl' => '350,100%,41%',
                // HSV color values
                'hsv' => '350,100%,82%',
                // Pantone color code
                'pantone' => 'Pantone 199 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '42.5063',
            // Longitude in decimal degrees
            'longitude' => '1.5218',
            // Degrees with decimal
            'dd' => '42.5063° N, 1.5218° E',
            // Degrees, minutes, seconds
            'dms' => '42°30\'22.68" N, 1°31\'18.48" E',
            // Degrees and decimal minutes
            'dm' => '42°30.378\' N, 1°31.308\' E',
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
      "properties": { "cca2": "ad" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [1.78172, 42.569962],
            [1.774722, 42.571106],
            [1.768055, 42.571106],
            [1.753889, 42.57],
            [1.743055, 42.563606],
            [1.735278, 42.554443],
            [1.725278, 42.529999],
            [1.724444, 42.524994],
            [1.723333, 42.515274],
            [1.723611, 42.509438],
            [1.718889, 42.503052],
            [1.661111, 42.471382],
            [1.654444, 42.467773],
            [1.541667, 42.437218],
            [1.533333, 42.436104],
            [1.512222, 42.436386],
            [1.454722, 42.441666],
            [1.448333, 42.450829],
            [1.424166, 42.493332],
            [1.421389, 42.54583],
            [1.434444, 42.576385],
            [1.445833, 42.601944],
            [1.481111, 42.647217],
            [1.491944, 42.65361],
            [1.556389, 42.656387],
            [1.563056, 42.655548],
            [1.698333, 42.626106],
            [1.738611, 42.616386],
            [1.78172, 42.569962]
          ]
        ]
      }
    }
  ]
}
';
    }
}
