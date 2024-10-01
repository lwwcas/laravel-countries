<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class GU_Guam extends CountrySeeder
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
        $this->name = 'Guam';

        // Set the country's official name
        $this->official_name = 'Guam';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GU';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GUM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '316';

        // Set the international dialing code
        $this->international_phone = '1-671';

        // Define the languages spoken in the country
        $this->languages = ['en', 'ch']; // English and Chamorro are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.gu'];

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
        $this->internet_penetration = '75%'; // As of recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in Guam
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4043988';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States dollar',
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
        $this->population = 168775; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 544; // km²

        // Set the capital city
        $this->capital = 'Hagåtña';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Guam',
                // Standard time offset
                'standard_time' => 'UTC+10',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Guam is an unincorporated territory of the United States

        // List international organizations the country is part of
        $this->international_organizations = [
            'Pacific Community (SPC)',
            'Pacific Islands Forum (PIF) (observer)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 5.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Unincorporated organized territory of the United States with a civilian government';

        // Set the national sport
        $this->national_sport = 'Baseball'; // Baseball is popular, along with football (soccer)

        // Define bordering countries
        $this->borders = []; // Guam is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇺',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1FA',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1FA;',
            // CSS entities
            'css' => '\\1F1EC\\1F1FA',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127482;',
            // Direct UTF-8 string
            'utf8' => '🇬🇺',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDFA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gu:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1FA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#003F87',
                // RGB color values
                'rgb' => '0,63,135',
                // CMYK color values
                'cmyk' => '100,53,0,47',
                // HSL color values
                'hsl' => '212,100%,26%',
                // HSV color values
                'hsv' => '212,100%,53%',
                // Pantone color code
                'pantone' => '286 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF102D',
                // RGB color values
                'rgb' => '207,16,45',
                // CMYK color values
                'cmyk' => '0,92,78,19',
                // HSL color values
                'hsl' => '350,87%,44%',
                // HSV color values
                'hsv' => '350,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '13.4443',
            // Longitude in decimal degrees
            'longitude' => '144.7937',
            // Degrees with decimal
            'dd' => '13.4443° N, 144.7937° E',
            // Degrees, minutes, seconds
            'dms' => '13°26\'39.48" N, 144°47\'37.32" E',
            // Degrees and decimal minutes
            'dm' => '13°26.658\' N, 144°47.622\' E',
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
      "properties": { "cca2": "gu" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [144.709412, 13.234997],
            [144.702454, 13.234997],
            [144.693024, 13.238886],
            [144.680542, 13.246943],
            [144.670258, 13.256943],
            [144.650543, 13.284443],
            [144.644989, 13.292221],
            [144.634155, 13.352221],
            [144.644989, 13.398888],
            [144.655243, 13.427776],
            [144.702454, 13.46833],
            [144.719116, 13.478886],
            [144.732727, 13.485554],
            [144.743011, 13.488886],
            [144.762207, 13.496943],
            [144.778595, 13.5075],
            [144.795807, 13.524166],
            [144.809418, 13.544165],
            [144.816925, 13.56361],
            [144.828583, 13.612219],
            [144.834686, 13.626108],
            [144.84024, 13.634165],
            [144.850525, 13.644165],
            [144.858856, 13.649443],
            [144.86911, 13.652777],
            [144.875244, 13.65361],
            [144.879944, 13.651388],
            [144.947754, 13.598886],
            [144.951355, 13.595552],
            [144.953308, 13.590832],
            [144.953308, 13.584164],
            [144.946625, 13.570831],
            [144.92804, 13.542221],
            [144.910797, 13.518888],
            [144.904694, 13.511665],
            [144.870514, 13.478331],
            [144.849976, 13.464998],
            [144.83609, 13.458332],
            [144.806641, 13.440275],
            [144.79248, 13.427776],
            [144.786102, 13.420277],
            [144.780823, 13.41222],
            [144.774414, 13.398333],
            [144.768311, 13.377775],
            [144.763611, 13.34222],
            [144.762756, 13.32972],
            [144.762756, 13.309721],
            [144.760803, 13.291666],
            [144.756104, 13.276388],
            [144.751923, 13.266943],
            [144.743561, 13.254999],
            [144.736908, 13.248331],
            [144.729401, 13.24222],
            [144.72052, 13.237497],
            [144.709412, 13.234997]
          ]
        ]
      }
    }
  ]
}
';
    }
}
