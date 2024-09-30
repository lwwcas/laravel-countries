<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class CV_CapeVerde extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Cabo Verde';

        // Set the country's official name
        $this->official_name = 'Republic of Cabo Verde';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'CV';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'CPV';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '132';

        // Set the international dialing code
        $this->international_phone = '238';

        // Define the languages spoken in the country
        $this->languages = ['pt']; // Portuguese is the official language

        // Define the top-level domain(s)
        $this->tld = ['.cv'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '57%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Núcleo Operacional para a Sociedade de Informação (NOSI)';

        // List popular web technologies in Cabo Verde
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'CV';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3374766';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Cape Verdean escudo',
            // Currency code
            'code' => 'CVE',
            // Currency symbol
            'symbol' => 'Esc',
            // Main unit
            'main_unit' => 'escudo',
            // Subunit
            'sub_unit' => 'centavo',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['200', '500', '1,000', '2,000', '5,000'],
            // Main coins
            'coins_main' => ['1', '5', '10', '20', '50', '100'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '50'],
        ];

        // Set the population
        $this->population = 555987; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 4033; // km²

        // Set the capital city
        $this->capital = 'Praia';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Atlantic/Cape_Verde',
                // Standard time offset
                'standard_time' => 'UTC-1', // Cape Verde Time (CVT)
                // Cabo Verde does not observe daylight saving time
            ],
        ];

        // Set the independence day
        $this->independence_day = '1975-07-05'; // Date of independence from Portugal

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'African Union',
            'Community of Portuguese Language Countries (CPLP)',
            'Economic Community of West African States (ECOWAS)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary semi-presidential representative democratic republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = []; // Cabo Verde is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇨🇻',
            // Unicode code points
            'uCode' => 'U+1F1E8 U+1F1FB',
            // HTML entities
            'html' => '&#x1F1E8;&#x1F1FB;',
            // CSS entities
            'css' => '\\1F1E8\\1F1FB',
            // Decimal Unicode entities
            'decimal' => '&#127464;&#127483;',
            // Direct UTF-8 string
            'utf8' => '🇨🇻',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE8\uD83C\uDDFB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-cv:',
            // Hexadecimal entity
            'hex' => '&#x1F1E8;&#x1F1FB;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#003893',
                // RGB color values
                'rgb' => '0,56,147',
                // CMYK color values
                'cmyk' => '100,62,0,42',
                // HSL color values
                'hsl' => '216,100%,29%',
                // HSV color values
                'hsv' => '216,100%,58%',
                // Pantone color code
                'pantone' => 'Pantone 287 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF2027',
                // RGB color values
                'rgb' => '207,32,39',
                // CMYK color values
                'cmyk' => '0,85,81,19',
                // HSL color values
                'hsl' => '357,73%,47%',
                // HSV color values
                'hsv' => '357,85%,81%',
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
                'hex' => '#FFD100',
                // RGB color values
                'rgb' => '255,209,0',
                // CMYK color values
                'cmyk' => '0,18,100,0',
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
            'latitude' => '14.9331',
            // Longitude in decimal degrees
            'longitude' => '-23.5133',
            // Degrees with decimal
            'dd' => '14.9331° N, 23.5133° W',
            // Degrees, minutes, seconds
            'dms' => '14°55\'59.16" N, 23°30\'47.88" W',
            // Degrees and decimal minutes
            'dm' => '14°55.986\' N, 23°30.798\' W',
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
      "properties": { "cca2": "cv" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-24.368336, 14.812222],
              [-24.39, 14.81111],
              [-24.414448, 14.814722],
              [-24.42611, 14.818054],
              [-24.445, 14.827221],
              [-24.44917, 14.83],
              [-24.47695, 14.85139],
              [-24.499168, 14.870832],
              [-24.509167, 14.881666],
              [-24.511948, 14.885832],
              [-24.523613, 14.91555],
              [-24.52528, 14.92111],
              [-24.524445, 14.927221],
              [-24.52222, 14.931944],
              [-24.50139, 14.97361],
              [-24.495556, 14.981667],
              [-24.485001, 14.991943],
              [-24.445557, 15.013611],
              [-24.386391, 15.04555],
              [-24.381668, 15.047499],
              [-24.375835, 15.04611],
              [-24.32972, 15.03],
              [-24.31361, 15.011389],
              [-24.30389, 14.983889],
              [-24.302502, 14.979721],
              [-24.295834, 14.9275],
              [-24.295559, 14.88444],
              [-24.295559, 14.870554],
              [-24.29945, 14.860277],
              [-24.319447, 14.839998],
              [-24.339447, 14.824999],
              [-24.36278, 14.81361],
              [-24.368336, 14.812222]
            ]
          ],
          [
            [
              [-23.44667, 14.982777],
              [-23.448612, 14.978054],
              [-23.45472, 14.978333],
              [-23.525837, 14.896111],
              [-23.63333, 14.91361],
              [-23.66306, 14.924999],
              [-23.681393, 14.935555],
              [-23.688614, 14.942499],
              [-23.723335, 14.977221],
              [-23.765278, 15.028889],
              [-23.76833, 15.033054],
              [-23.78778, 15.06194],
              [-23.79056, 15.066111],
              [-23.79195, 15.071665],
              [-23.792503, 15.084721],
              [-23.76667, 15.253054],
              [-23.695, 15.294998],
              [-23.66584, 15.243889],
              [-23.60667, 15.184166],
              [-23.59972, 15.17722],
              [-23.57667, 15.157776],
              [-23.5125, 15.11611],
              [-23.459446, 15.033054],
              [-23.44472, 15.006109],
              [-23.44667, 14.982777]
            ]
          ],
          [
            [
              [-22.706112, 16.03639],
              [-22.800556, 15.978054],
              [-22.876114, 15.980555],
              [-22.94833, 16.01722],
              [-22.9525, 16.02],
              [-22.956112, 16.023609],
              [-22.958614, 16.02777],
              [-22.96222, 16.044998],
              [-22.957779, 16.089443],
              [-22.95639, 16.095],
              [-22.91194, 16.160831],
              [-22.87195, 16.206108],
              [-22.79861, 16.235275],
              [-22.764446, 16.227776],
              [-22.72389, 16.214165],
              [-22.71667, 16.207222],
              [-22.714169, 16.203053],
              [-22.67445, 16.13611],
              [-22.665836, 16.098053],
              [-22.66639, 16.091942],
              [-22.68056, 16.059998],
              [-22.683613, 16.055832],
              [-22.706112, 16.03639]
            ]
          ],
          [
            [
              [-24.034168, 16.594166],
              [-24.023613, 16.57694],
              [-24.023613, 16.57],
              [-24.025837, 16.565277],
              [-24.02889, 16.561386],
              [-24.036667, 16.556664],
              [-24.041115, 16.555275],
              [-24.0475, 16.554722],
              [-24.09528, 16.554443],
              [-24.10111, 16.554443],
              [-24.11972, 16.55722],
              [-24.131947, 16.559444],
              [-24.140278, 16.565],
              [-24.14389, 16.568607],
              [-24.16167, 16.578888],
              [-24.21228, 16.593275],
              [-24.233446, 16.593943],
              [-24.23695, 16.593109],
              [-24.268059, 16.59],
              [-24.273891, 16.58333],
              [-24.29056, 16.55805],
              [-24.304169, 16.536942],
              [-24.30945, 16.52389],
              [-24.315281, 16.508888],
              [-24.31834, 16.497776],
              [-24.32139, 16.482777],
              [-24.40889, 16.598053],
              [-24.4275, 16.61472],
              [-24.43167, 16.621387],
              [-24.43222, 16.644165],
              [-24.43056, 16.649441],
              [-24.42806, 16.65361],
              [-24.420002, 16.661942],
              [-24.35667, 16.683331],
              [-24.3525, 16.68472],
              [-24.3325, 16.669441],
              [-24.206335, 16.640499],
              [-24.116669, 16.626389],
              [-24.09389, 16.620831],
              [-24.034168, 16.594166]
            ]
          ],
          [
            [
              [-24.92611, 16.799999],
              [-24.993336, 16.77972],
              [-25.065002, 16.808887],
              [-25.069725, 16.811108],
              [-25.091946, 16.82555],
              [-25.093334, 16.83083],
              [-25.091946, 16.836388],
              [-25.08389, 16.85639],
              [-25.08111, 16.860275],
              [-25.06444, 16.878887],
              [-25.060837, 16.882221],
              [-24.976948, 16.91805],
              [-24.93306, 16.92139],
              [-24.9275, 16.919998],
              [-24.92306, 16.917221],
              [-24.91972, 16.913887],
              [-24.877781, 16.858055],
              [-24.87611, 16.831944],
              [-24.876392, 16.824997],
              [-24.878056, 16.819721],
              [-24.885, 16.815552],
              [-24.895, 16.81139],
              [-24.92611, 16.799999]
            ]
          ],
          [
            [
              [-25.28139, 16.91333],
              [-25.295834, 16.91333],
              [-25.30139, 16.91472],
              [-25.30945, 16.92083],
              [-25.31222, 16.924999],
              [-25.360558, 17.044441],
              [-25.360001, 17.05611],
              [-25.353336, 17.070553],
              [-25.34778, 17.078609],
              [-25.334446, 17.093609],
              [-25.33028, 17.096386],
              [-25.205, 17.159164],
              [-25.13417, 17.186943],
              [-25.097504, 17.193054],
              [-25.091667, 17.191666],
              [-25.03667, 17.176941],
              [-25.03222, 17.17416],
              [-24.97444, 17.112778],
              [-24.972504, 17.108055],
              [-24.972504, 17.10111],
              [-24.977501, 17.085552],
              [-24.97972, 17.080555],
              [-24.993336, 17.05944],
              [-25.00056, 17.052776],
              [-25.051392, 17.026108],
              [-25.099167, 17.003052],
              [-25.11195, 16.99472],
              [-25.153057, 16.958611],
              [-25.16306, 16.94083],
              [-25.167503, 16.931389],
              [-25.17528, 16.925278],
              [-25.18611, 16.921665],
              [-25.2025, 16.916943],
              [-25.20834, 16.915833],
              [-25.28139, 16.91333]
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
