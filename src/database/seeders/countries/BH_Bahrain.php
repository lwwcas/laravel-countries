<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BH_Bahrain extends CountrySeeder
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
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Bahrain';

        // Set the country's official name
        $this->official_name = 'Kingdom of Bahrain';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BH';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BHR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '048';

        // Set the international dialing code
        $this->international_phone = '973';

        // Define the languages spoken in the country
        $this->languages = ['ar']; // Arabic is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bh'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '70 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '98%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Cyber Security Centre (NCSC)';

        // List popular web technologies in Bahrain
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', '.NET']; // Popular web technologies

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BN';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '290291';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Bahraini dinar',
            // Currency code
            'code' => 'BHD',
            // Currency symbol
            'symbol' => 'BD',
            // Main unit
            'main_unit' => 'dinar',
            // Subunit
            'sub_unit' => 'fils',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 1000,
            // Banknotes in circulation
            'banknotes' => ['0.5', '1', '5', '10', '20'],
            // Main coins
            'coins_main' => ['0.100', '0.500'],
            // Subunit coins
            'coins_sub' => ['5', '10', '25', '50', '100'],
        ];

        // Set the population
        $this->population = 1701575; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 765; // km²

        // Set the capital city
        $this->capital = 'Manama';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Asia/Bahrain',
            // Standard time offset
            'standard_time' => 'UTC+3', // Arabian Standard Time
        ];

        // Set the independence day
        $this->independence_day = '1971-08-15'; // Date of independence from British protectorate status

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Arab League',
            'GCC',
            'OPEC',
            'WTO',
            'Non-Aligned Movement',
            'Organisation of Islamic Cooperation',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 38.57; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Islam (Shia and Sunni)'];

        // Describe the form of government
        $this->government = 'Unitary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular; motorsports are also significant

        // Define bordering countries
        $this->borders = []; // Island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇭',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1ED',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1ED;',
            // CSS entities
            'css' => '\\1F1E7\\1F1ED',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127469;',
            // Direct UTF-8 string
            'utf8' => '🇧🇭',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDED',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bh:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1ED;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '26.2285',
            // Longitude in decimal degrees
            'longitude' => '50.5860',
            // Degrees with decimal
            'dd' => '26.2285° N, 50.5860° E',
            // Degrees, minutes, seconds
            'dms' => '26°13\'42.60" N, 50°35\'09.60" E',
            // Degrees and decimal minutes
            'dm' => '26°13.710\' N, 50°35.160\' E',
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
      "properties": { "cca2": "bh" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [50.812492, 25.64222],
              [50.792496, 25.641941],
              [50.78333, 25.653889],
              [50.782219, 25.659443],
              [50.78694, 25.66222],
              [50.816109, 25.654442],
              [50.821388, 25.651943],
              [50.822495, 25.646385],
              [50.818604, 25.643055],
              [50.812492, 25.64222]
            ]
          ],
          [
            [
              [50.813332, 25.678608],
              [50.807777, 25.676666],
              [50.804161, 25.680553],
              [50.804443, 25.685833],
              [50.807777, 25.68972],
              [50.814438, 25.683331],
              [50.813332, 25.678608]
            ]
          ],
          [
            [
              [50.76194, 25.595276],
              [50.771942, 25.571941],
              [50.751938, 25.581944],
              [50.74472, 25.589443],
              [50.742493, 25.600555],
              [50.741661, 25.67],
              [50.741661, 25.683052],
              [50.746109, 25.693054],
              [50.749443, 25.69722],
              [50.76416, 25.71139],
              [50.7736, 25.716389],
              [50.79277, 25.726387],
              [50.79666, 25.728333],
              [50.796387, 25.713886],
              [50.790833, 25.687222],
              [50.774437, 25.681942],
              [50.769165, 25.681664],
              [50.763611, 25.654999],
              [50.760826, 25.60083],
              [50.76194, 25.595276]
            ]
          ],
          [
            [
              [50.769722, 25.746944],
              [50.763329, 25.74583],
              [50.760551, 25.75027],
              [50.764717, 25.754719],
              [50.77, 25.7525],
              [50.769722, 25.746944]
            ]
          ],
          [
            [
              [50.532219, 26.234444],
              [50.547325, 26.22693],
              [50.577774, 26.238331],
              [50.58416, 26.239441],
              [50.589439, 26.238331],
              [50.592216, 26.234165],
              [50.60833, 26.209164],
              [50.610275, 26.204166],
              [50.604996, 26.195],
              [50.601105, 26.191666],
              [50.594719, 26.190552],
              [50.555164, 26.1941],
              [50.554161, 26.191387],
              [50.568886, 26.17055],
              [50.593048, 26.150831],
              [50.605553, 26.141109],
              [50.613052, 26.127777],
              [50.616104, 26.117222],
              [50.616943, 26.104721],
              [50.614899, 26.090616],
              [50.618332, 26.056389],
              [50.61972, 25.980831],
              [50.618607, 25.966942],
              [50.607498, 25.862778],
              [50.60249, 25.845833],
              [50.597221, 25.83667],
              [50.590828, 25.828609],
              [50.57333, 25.80972],
              [50.555275, 25.81194],
              [50.468887, 25.945],
              [50.463882, 25.954166],
              [50.461662, 25.965275],
              [50.462494, 25.978333],
              [50.46611, 25.989166],
              [50.476662, 26.008053],
              [50.48555, 26.028053],
              [50.489998, 26.03833],
              [50.491661, 26.051388],
              [50.48611, 26.073055],
              [50.481941, 26.082775],
              [50.469444, 26.111664],
              [50.454647, 26.198132],
              [50.453049, 26.208054],
              [50.453606, 26.215],
              [50.458885, 26.224442],
              [50.465553, 26.23222],
              [50.469444, 26.235554],
              [50.474998, 26.23722],
              [50.499981, 26.23978],
              [50.5075, 26.24055],
              [50.51416, 26.239441],
              [50.532219, 26.234444]
            ]
          ],
          [
            [
              [50.65361, 26.247498],
              [50.650551, 26.24472],
              [50.616104, 26.246109],
              [50.609993, 26.247776],
              [50.603607, 26.255554],
              [50.603333, 26.261665],
              [50.604439, 26.267776],
              [50.609718, 26.277222],
              [50.612778, 26.281109],
              [50.62722, 26.288887],
              [50.64055, 26.281944],
              [50.650276, 26.27583],
              [50.653885, 26.272221],
              [50.65583, 26.26722],
              [50.654999, 26.253609],
              [50.65361, 26.247498]
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
