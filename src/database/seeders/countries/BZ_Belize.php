<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BZ_Belize extends CountrySeeder
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
        $this->name = 'Belize';

        // Set the country's official name
        $this->official_name = 'Belize';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BZ';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BLZ';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '084';

        // Set the international dialing code
        $this->international_phone = '501';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bz'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '25 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '50%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Belize Computer Incident Response Team (Belize CIRT)';

        // List popular web technologies in Belize
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BH';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3582678';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Belize dollar',
            // Currency code
            'code' => 'BZD',
            // Currency symbol
            'symbol' => 'BZ$',
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
        $this->population = 419199; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 22966; // km²

        // Set the capital city
        $this->capital = 'Belmopan';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'America/Belize',
            // Standard time offset
            'standard_time' => 'UTC−6', // Central Standard Time
        ];

        // Set the independence day
        $this->independence_day = '1981-09-21'; // Date of independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Commonwealth of Nations',
            'Organization of American States (OAS)',
            'CARICOM',
            'Central American Integration System (SICA)',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.9; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity (Roman Catholicism, Protestantism)'];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular

        // Define bordering countries
        $this->borders = [
            ['name' => 'Guatemala', 'iso_alpha_2' => 'GT'],
            ['name' => 'Mexico', 'iso_alpha_2' => 'MX'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇿',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1FF',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1FF;',
            // CSS entities
            'css' => '\\1F1E7\\1F1FF',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127487;',
            // Direct UTF-8 string
            'utf8' => '🇧🇿',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDFF',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bz:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1FF;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'dark blue',
                // Hexadecimal color code
                'hex' => '#003F87',
                // RGB color values
                'rgb' => '0,63,135',
                // CMYK color values
                'cmyk' => '100,53,0,47',
                // HSL color values
                'hsl' => '213,100%,26%',
                // HSV color values
                'hsv' => '213,100%,53%',
                // Pantone color code
                'pantone' => 'Reflex Blue C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CE1126',
                // RGB color values
                'rgb' => '206,17,38',
                // CMYK color values
                'cmyk' => '0,92,82,19',
                // HSL color values
                'hsl' => '350,85%,44%',
                // HSV color values
                'hsv' => '350,92%,81%',
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
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A5E',
                // RGB color values
                'rgb' => '0,122,94',
                // CMYK color values
                'cmyk' => '100,0,23,52',
                // HSL color values
                'hsl' => '167,100%,24%',
                // HSV color values
                'hsv' => '167,100%,48%',
                // Pantone color code
                'pantone' => '3415 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '17.1899',
            // Longitude in decimal degrees
            'longitude' => '-88.4976',
            // Degrees with decimal
            'dd' => '17.1899° N, 88.4976° W',
            // Degrees, minutes, seconds
            'dms' => '17°11\'23.64" N, 88°29\'51.36" W',
            // Degrees and decimal minutes
            'dm' => '17°11.394\' N, 88°29.856\' W',
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
      "properties": { "cca2": "bz" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-87.80334, 17.294167],
              [-87.80917, 17.289165],
              [-87.821945, 17.291111],
              [-87.82501, 17.291664],
              [-87.82613, 17.299721],
              [-87.834732, 17.390553],
              [-87.833069, 17.39583],
              [-87.83168, 17.397778],
              [-87.829727, 17.39944],
              [-87.82695, 17.40028],
              [-87.8239, 17.399719],
              [-87.81834, 17.395],
              [-87.813614, 17.385277],
              [-87.79918, 17.33388],
              [-87.79945, 17.324165],
              [-87.80139, 17.299164],
              [-87.80334, 17.294167]
            ]
          ],
          [
            [
              [-87.820557, 17.426941],
              [-87.827515, 17.419998],
              [-87.835556, 17.414165],
              [-87.838058, 17.413055],
              [-87.8439, 17.412498],
              [-87.84917, 17.414444],
              [-87.856674, 17.42083],
              [-87.861389, 17.423054],
              [-87.863892, 17.421944],
              [-87.89001, 17.405552],
              [-87.901947, 17.389721],
              [-87.90501, 17.3825],
              [-87.92418, 17.298611],
              [-87.92529, 17.28944],
              [-87.92529, 17.28611],
              [-87.92418, 17.275],
              [-87.926682, 17.275555],
              [-87.930283, 17.27916],
              [-87.935837, 17.287777],
              [-87.9364, 17.29055],
              [-87.935837, 17.296665],
              [-87.934723, 17.306664],
              [-87.920288, 17.411942],
              [-87.91833, 17.417221],
              [-87.916397, 17.421944],
              [-87.82417, 17.54805],
              [-87.81946, 17.55],
              [-87.813065, 17.54916],
              [-87.80695, 17.54472],
              [-87.784729, 17.525],
              [-87.7814, 17.521111],
              [-87.779175, 17.516388],
              [-87.7789, 17.513332],
              [-87.779175, 17.50361],
              [-87.78001, 17.500832],
              [-87.78584, 17.48944],
              [-87.8175, 17.43111],
              [-87.820557, 17.426941]
            ]
          ],
          [
            [
              [-88.04501, 17.552776],
              [-88.047501, 17.5525],
              [-88.051392, 17.55555],
              [-88.05501, 17.560833],
              [-88.058334, 17.568054],
              [-88.064453, 17.59],
              [-88.07445, 17.632221],
              [-88.07417, 17.635277],
              [-88.072784, 17.637497],
              [-88.07028, 17.638332],
              [-88.0675, 17.63777],
              [-88.06361, 17.63444],
              [-88.05751, 17.623333],
              [-88.05362, 17.613052],
              [-88.045563, 17.564442],
              [-88.044174, 17.55555],
              [-88.04501, 17.552776]
            ]
          ],
          [
            [
              [-88.13251, 17.667221],
              [-88.15861, 17.66444],
              [-88.16473, 17.665276],
              [-88.16751, 17.66972],
              [-88.166672, 17.672497],
              [-88.165009, 17.67444],
              [-88.16028, 17.677219],
              [-88.14612, 17.68111],
              [-88.138901, 17.68472],
              [-88.12195, 17.699165],
              [-88.11667, 17.70444],
              [-88.109451, 17.714443],
              [-88.07973, 17.734444],
              [-88.07751, 17.73555],
              [-88.075287, 17.734997],
              [-88.072784, 17.733887],
              [-88.0714, 17.731941],
              [-88.069458, 17.726665],
              [-88.069458, 17.720276],
              [-88.06973, 17.71722],
              [-88.07194, 17.71222],
              [-88.09473, 17.686386],
              [-88.10306, 17.68027],
              [-88.116394, 17.672497],
              [-88.1239, 17.669441],
              [-88.13251, 17.667221]
            ]
          ],
          [
            [
              [-87.89223, 18.0425],
              [-87.90779, 18.021385],
              [-87.90501, 18.022499],
              [-87.90334, 18.02083],
              [-87.90251, 18.018055],
              [-87.904449, 18.009998],
              [-87.920288, 17.970554],
              [-87.928619, 17.951385],
              [-87.93668, 17.93861],
              [-87.95084, 17.917774],
              [-87.955, 17.911663],
              [-87.96139, 17.903889],
              [-87.97362, 17.898331],
              [-87.98668, 17.89666],
              [-87.99556, 17.898331],
              [-88.006119, 17.901943],
              [-87.9039, 18.147499],
              [-87.90112, 18.151665],
              [-87.89584, 18.156666],
              [-87.859726, 18.164444],
              [-87.853058, 18.164719],
              [-87.85057, 18.163609],
              [-87.84862, 18.16194],
              [-87.84611, 18.157497],
              [-87.84529, 18.151386],
              [-87.845566, 18.144997],
              [-87.84778, 18.136944],
              [-87.88806, 18.049164],
              [-87.89223, 18.0425]
            ]
          ],
          [
            [
              [-88.377792, 18.482777],
              [-88.365005, 18.48139],
              [-88.3439, 18.48139],
              [-88.2995, 18.482929],
              [-88.28834, 18.458885],
              [-88.287399, 18.45525],
              [-88.289734, 18.44833],
              [-88.293335, 18.441387],
              [-88.307785, 18.427776],
              [-88.318893, 18.421108],
              [-88.31557, 18.364166],
              [-88.208618, 18.353054],
              [-88.10834, 18.371666],
              [-88.09668, 18.37444],
              [-88.093613, 18.374165],
              [-88.0914, 18.372776],
              [-88.081955, 18.271385],
              [-88.077789, 18.215553],
              [-88.08389, 18.13528],
              [-88.085556, 18.126389],
              [-88.09001, 18.11389],
              [-88.123062, 18.029442],
              [-88.14612, 17.973331],
              [-88.148346, 17.968887],
              [-88.15445, 17.96083],
              [-88.16307, 17.951111],
              [-88.179169, 17.93333],
              [-88.18722, 17.92388],
              [-88.18973, 17.919441],
              [-88.200287, 17.895275],
              [-88.202225, 17.890274],
              [-88.203613, 17.881386],
              [-88.209732, 17.804443],
              [-88.20834, 17.800552],
              [-88.210556, 17.782776],
              [-88.213348, 17.76833],
              [-88.225845, 17.71583],
              [-88.23361, 17.69611],
              [-88.247513, 17.671944],
              [-88.25612, 17.659443],
              [-88.25917, 17.655552],
              [-88.27417, 17.646664],
              [-88.27917, 17.641109],
              [-88.281403, 17.636108],
              [-88.282501, 17.623886],
              [-88.281403, 17.594444],
              [-88.2789, 17.579441],
              [-88.276672, 17.574718],
              [-88.2489, 17.465275],
              [-88.26056, 17.42222],
              [-88.285004, 17.32333],
              [-88.293625, 17.284164],
              [-88.29584, 17.269444],
              [-88.29861, 17.238331],
              [-88.299728, 17.18861],
              [-88.29918, 17.182499],
              [-88.28914, 17.122498],
              [-88.28334, 17.10527],
              [-88.276672, 17.090553],
              [-88.270279, 17.082775],
              [-88.261124, 17.078053],
              [-88.24223, 17.07222],
              [-88.235565, 17.068333],
              [-88.23279, 17.06416],
              [-88.228897, 17.054443],
              [-88.208618, 16.972221],
              [-88.208618, 16.968609],
              [-88.2164, 16.955555],
              [-88.219727, 16.95194],
              [-88.226395, 16.948055],
              [-88.24223, 16.943886],
              [-88.256668, 16.933609],
              [-88.26306, 16.926388],
              [-88.265839, 16.921944],
              [-88.275284, 16.90361],
              [-88.27917, 16.886944],
              [-88.27917, 16.88361],
              [-88.27972, 16.800552],
              [-88.30029, 16.65166],
              [-88.30168, 16.646111],
              [-88.30446, 16.638332],
              [-88.352509, 16.504166],
              [-88.35362, 16.50194],
              [-88.35779, 16.499165],
              [-88.36056, 16.498333],
              [-88.36389, 16.49861],
              [-88.367508, 16.50194],
              [-88.36723, 16.504997],
              [-88.34723, 16.60278],
              [-88.37889, 16.561943],
              [-88.39418, 16.541664],
              [-88.386124, 16.535553],
              [-88.384445, 16.518608],
              [-88.38751, 16.491665],
              [-88.38834, 16.489166],
              [-88.530014, 16.298054],
              [-88.65085, 16.27972],
              [-88.724731, 16.23305],
              [-88.728897, 16.230274],
              [-88.741394, 16.21833],
              [-88.74501, 16.211666],
              [-88.746399, 16.200275],
              [-88.791946, 16.118889],
              [-88.85335, 16.054165],
              [-88.91446, 15.99778],
              [-88.922226, 15.991665],
              [-88.926682, 15.984999],
              [-88.929459, 15.97389],
              [-88.93001, 15.960833],
              [-88.92834, 15.951944],
              [-88.92445, 15.938332],
              [-88.910568, 15.89361],
              [-88.98083, 15.898054],
              [-89.04723, 15.906387],
              [-89.16667, 15.91083],
              [-89.172791, 15.909443],
              [-89.21617, 15.889851],
              [-89.2164, 15.91528],
              [-89.204178, 16.10416],
              [-89.18417, 16.414444],
              [-89.145, 17.013885],
              [-89.14343, 17.3418],
              [-89.14223, 17.719444],
              [-89.141953, 17.81889],
              [-89.14297, 17.946074],
              [-89.143051, 17.956066],
              [-89.127502, 17.968052],
              [-89.11574, 17.973816],
              [-89.07205, 17.994976],
              [-89.035843, 18.005833],
              [-89.02528, 18.00639],
              [-89.01945, 18.004997],
              [-89.00973, 18.000832],
              [-89.0025, 17.994164],
              [-88.9915, 17.98064],
              [-88.984329, 17.966648],
              [-88.98251, 17.965],
              [-88.87204, 17.907257],
              [-88.8414, 17.903889],
              [-88.774078, 17.988834],
              [-88.728058, 18.054722],
              [-88.70445, 18.109997],
              [-88.68167, 18.183887],
              [-88.681122, 18.185555],
              [-88.600021, 18.23583],
              [-88.590439, 18.284763],
              [-88.587708, 18.296711],
              [-88.51695, 18.430275],
              [-88.506393, 18.447498],
              [-88.490433, 18.4701],
              [-88.483948, 18.477612],
              [-88.47986, 18.48103],
              [-88.47131, 18.486828],
              [-88.466202, 18.488537],
              [-88.405441, 18.489902],
              [-88.377792, 18.482777]
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
