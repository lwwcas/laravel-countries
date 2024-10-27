<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class FO_FaroeIslands extends CountrySeeder
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
        $this->name = 'Faroe Islands';

        // Set the country's official name
        $this->official_name = 'Faroe Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'FO';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'FRO';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '234';

        // Set the international dialing code
        $this->international_phone = '298';

        // Define the languages spoken in the country
        $this->languages = ['fo', 'da']; // Faroese is the official language, with Danish widely spoken

        // Define the top-level domain(s)
        $this->tld = ['.fo'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '120 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '60 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '98%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No dedicated cybersecurity agency

        // List popular web technologies in the Faroe Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'React', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'FO';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2622320';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Danish krone',
            // Currency code
            'code' => 'DKK',
            // Currency symbol
            'symbol' => 'kr',
            // Main unit
            'main_unit' => 'krone',
            // Subunit
            'sub_unit' => 'øre',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['50', '100', '200', '500', '1000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10', '20'],
            // Subunit coins
            'coins_sub' => ['50 øre'],
        ];

        // Set the population
        $this->population = 53358; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 1393; // km²

        // Set the capital city
        $this->capital = 'Tórshavn';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Atlantic/Faroe',
                // Standard time offset
                'standard_time' => 'UTC+0', // Western European Time (WET)
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+1', // Western European Summer Time (WEST)
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Faroe Islands is an autonomous territory of Denmark

        // List international organizations the country is part of
        $this->international_organizations = [
            'Nordic Council',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Evangelical Lutheran)',
        ];

        // Describe the form of government
        $this->government = 'Autonomous territory of Denmark';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football (soccer) is the most popular sport in the Faroe Islands

        // Define bordering countries
        $this->borders = []; // The Faroe Islands are located in the North Atlantic and have no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇫🇴',
            // Unicode code points
            'uCode' => 'U+1F1EB U+1F1F4',
            // HTML entities
            'html' => '&#x1F1EB;&#x1F1F4;',
            // CSS entities
            'css' => '\\1F1EB\\1F1F4',
            // Decimal Unicode entities
            'decimal' => '&#127467;&#127476;',
            // Direct UTF-8 string
            'utf8' => '🇫🇴',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEB\uD83C\uDDF4',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-fo:',
            // Hexadecimal entity
            'hex' => '&#x1F1EB;&#x1F1F4;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Flag Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0035AD',
                // RGB color values
                'rgb' => '0,53,173',
                // CMYK color values
                'cmyk' => '100,69,0,32',
                // HSL color values
                'hsl' => '220,100%,35%',
                // HSV color values
                'hsv' => '220,100%,68%',
                // Pantone color code
                'pantone' => 'Reflex Blue C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Flag Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#DA291C',
                // RGB color values
                'rgb' => '218,41,28',
                // CMYK color values
                'cmyk' => '0,81,87,15',
                // HSL color values
                'hsl' => '4,77%,48%',
                // HSV color values
                'hsv' => '4,87%,85%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Flag White',
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
            'latitude' => '62.0000',
            // Longitude in decimal degrees
            'longitude' => '-6.7833',
            // Degrees with decimal
            'dd' => '62.0000° N, 6.7833° W',
            // Degrees, minutes, seconds
            'dms' => '62°0\'0.00" N, 6°46\'59.88" W',
            // Degrees and decimal minutes
            'dm' => '62°0.000\' N, 6°46.998\' W',
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
      "properties": { "cca2": "fo" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-6.655278, 61.389442],
              [-6.660278, 61.38833],
              [-6.66806, 61.389442],
              [-6.719167, 61.407494],
              [-6.845834, 61.46805],
              [-6.95833, 61.59861],
              [-6.962778, 61.619164],
              [-6.96, 61.622772],
              [-6.94472, 61.636665],
              [-6.92639, 61.641388],
              [-6.91222, 61.643608],
              [-6.889445, 61.644997],
              [-6.72889, 61.575829],
              [-6.72444, 61.573326],
              [-6.709445, 61.558327],
              [-6.655278, 61.433052],
              [-6.64167, 61.40083],
              [-6.64222, 61.397217],
              [-6.655278, 61.389442]
            ]
          ],
          [
            [
              [-6.60417, 61.821663],
              [-6.63, 61.761108],
              [-6.63889, 61.750549],
              [-6.65222, 61.742775],
              [-6.704722, 61.7775],
              [-6.836112, 61.81777],
              [-6.841111, 61.817497],
              [-6.86611, 61.837494],
              [-6.90889, 61.901108],
              [-6.908334, 61.904716],
              [-6.904723, 61.907776],
              [-6.86444, 61.90749],
              [-6.855834, 61.90694],
              [-6.78333, 61.896942],
              [-6.776945, 61.895271],
              [-6.66139, 61.858887],
              [-6.65222, 61.853882],
              [-6.60417, 61.82611],
              [-6.60417, 61.821663]
            ]
          ],
          [
            [
              [-7.04972, 62.067772],
              [-7.055, 62.060272],
              [-7.062778, 62.049438],
              [-7.165278, 62.023605],
              [-7.185834, 62.019722],
              [-7.20167, 62.018608],
              [-7.191668, 62.031105],
              [-7.192223, 62.03972],
              [-7.19361, 62.043327],
              [-7.19833, 62.049995],
              [-7.21194, 62.057495],
              [-7.226667, 62.064438],
              [-7.2325, 62.06472],
              [-7.233334, 62.060272],
              [-7.25111, 62.04277],
              [-7.34556, 62.052216],
              [-7.35222, 62.053886],
              [-7.378056, 62.064995],
              [-7.381667, 62.068054],
              [-7.43111, 62.116104],
              [-7.43389, 62.123604],
              [-7.43444, 62.127777],
              [-7.435, 62.14027],
              [-7.43361, 62.14361],
              [-7.42639, 62.144722],
              [-7.231112, 62.159996],
              [-7.223333, 62.159439],
              [-7.163073, 62.128815],
              [-7.05611, 62.09861],
              [-7.045, 62.094444],
              [-7.04139, 62.091385],
              [-7.040278, 62.087776],
              [-7.041112, 62.083054],
              [-7.04972, 62.067772]
            ]
          ],
          [
            [
              [-6.70694, 61.937492],
              [-6.71778, 61.933327],
              [-6.72528, 61.934441],
              [-6.773056, 61.949997],
              [-6.86917, 61.997498],
              [-6.961112, 62.046661],
              [-7.034582, 62.11211],
              [-7.13031, 62.125599],
              [-7.232223, 62.172493],
              [-7.23472, 62.175827],
              [-7.235001, 62.179993],
              [-7.233612, 62.193329],
              [-7.232779, 62.198051],
              [-7.21083, 62.284721],
              [-7.195556, 62.304718],
              [-7.192223, 62.307777],
              [-7.135, 62.303886],
              [-7.12806, 62.302216],
              [-7.0875, 62.290833],
              [-7.070556, 62.284721],
              [-7.06583, 62.282219],
              [-7.0625, 62.27916],
              [-7.0575, 62.272499],
              [-7.05222, 62.2575],
              [-7.045, 62.243332],
              [-7.0425, 62.239998],
              [-7.036667, 62.233604],
              [-6.990834, 62.193054],
              [-6.97389, 62.182495],
              [-6.94583, 62.16805],
              [-6.91639, 62.153885],
              [-6.84139, 62.12444],
              [-6.735001, 62.04361],
              [-6.72472, 62.035],
              [-6.71889, 62.02861],
              [-6.696389, 61.979439],
              [-6.696112, 61.975273],
              [-6.7025, 61.940277],
              [-6.70694, 61.937492]
            ]
          ],
          [
            [
              [-6.620001, 62.229721],
              [-6.62361, 62.226662],
              [-6.63222, 62.227493],
              [-6.65806, 62.234444],
              [-6.68139, 62.242493],
              [-6.68583, 62.244995],
              [-6.71167, 62.293884],
              [-6.720834, 62.331383],
              [-6.63222, 62.259163],
              [-6.625556, 62.253326],
              [-6.62028, 62.238052],
              [-6.619167, 62.234444],
              [-6.620001, 62.229721]
            ]
          ],
          [
            [
              [-6.6575, 62.0925],
              [-6.6575, 62.055832],
              [-6.66972, 62.058609],
              [-6.75278, 62.092773],
              [-6.921945, 62.167221],
              [-6.94806, 62.182495],
              [-6.96417, 62.193329],
              [-7.01111, 62.226387],
              [-7.025, 62.237778],
              [-7.029445, 62.244438],
              [-7.0625, 62.29583],
              [-7.06028, 62.313606],
              [-6.958056, 62.339165],
              [-6.950278, 62.338051],
              [-6.93806, 62.33416],
              [-6.807222, 62.290276],
              [-6.735001, 62.259995],
              [-6.60111, 62.196938],
              [-6.59778, 62.19416],
              [-6.588056, 62.134163],
              [-6.64972, 62.10249],
              [-6.65417, 62.099716],
              [-6.656945, 62.096107],
              [-6.6575, 62.0925]
            ]
          ],
          [
            [
              [-6.41861, 62.18388],
              [-6.518056, 62.168884],
              [-6.52722, 62.173882],
              [-6.55556, 62.196938],
              [-6.5725, 62.211662],
              [-6.581944, 62.224998],
              [-6.588056, 62.239716],
              [-6.550858, 62.250984],
              [-6.548974, 62.3009],
              [-6.574403, 62.34988],
              [-6.541667, 62.357498],
              [-6.536667, 62.3425],
              [-6.522223, 62.318054],
              [-6.492778, 62.291382],
              [-6.48889, 62.28833],
              [-6.43, 62.268883],
              [-6.397779, 62.259995],
              [-6.392222, 62.25805],
              [-6.388889, 62.254997],
              [-6.388612, 62.250832],
              [-6.389723, 62.246109],
              [-6.40722, 62.191666],
              [-6.40861, 62.188606],
              [-6.41222, 62.185272],
              [-6.41861, 62.18388]
            ]
          ],
          [
            [
              [-6.58583, 62.256386],
              [-6.595, 62.256104],
              [-6.608334, 62.258606],
              [-6.613056, 62.26111],
              [-6.620001, 62.26694],
              [-6.664445, 62.322495],
              [-6.66806, 62.32972],
              [-6.66833, 62.333885],
              [-6.66667, 62.347221],
              [-6.665833, 62.351944],
              [-6.660833, 62.372498],
              [-6.65472, 62.374161],
              [-6.64583, 62.374161],
              [-6.63806, 62.373055],
              [-6.63222, 62.370827],
              [-6.573611, 62.306389],
              [-6.56639, 62.296387],
              [-6.56139, 62.281387],
              [-6.56111, 62.276939],
              [-6.56167, 62.273331],
              [-6.56556, 62.265274],
              [-6.5725, 62.258888],
              [-6.58583, 62.256386]
            ]
          ],
          [
            [
              [-6.40611, 62.284439],
              [-6.415001, 62.284439],
              [-6.42278, 62.285553],
              [-6.480278, 62.29777],
              [-6.48861, 62.307495],
              [-6.546945, 62.38361],
              [-6.545279, 62.38694],
              [-6.530834, 62.39416],
              [-6.52528, 62.396111],
              [-6.51917, 62.396942],
              [-6.49833, 62.386383],
              [-6.48917, 62.381386],
              [-6.39167, 62.29694],
              [-6.40611, 62.284439]
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
