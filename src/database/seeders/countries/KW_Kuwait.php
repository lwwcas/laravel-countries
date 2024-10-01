<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class KW_Kuwait extends CountrySeeder
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
        $this->name = 'Kuwait';

        // Set the country's official name
        $this->official_name = 'State of Kuwait';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'KW';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'KWT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '414';

        // Set the international dialing code
        $this->international_phone = '965';

        // Define the languages spoken in the country
        $this->languages = ['ar']; // Arabic is the official language

        // Define the top-level domain(s)
        $this->tld = ['.kw'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '110 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '75 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '99%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Kuwait National Cyber Security Center';

        // List popular web technologies in Kuwait
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Java'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'KW';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '285570';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Kuwaiti dinar',
            // Currency code
            'code' => 'KWD',
            // Currency symbol
            'symbol' => 'د.ك',
            // Main unit
            'main_unit' => 'dinar',
            // Subunit
            'sub_unit' => 'fils',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 1000, // 1 dinar = 1000 fils
            // Banknotes in circulation
            'banknotes' => ['¼', '½', '1', '5', '10', '20'],
            // Main coins
            'coins_main' => [],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '20', '50', '100'], // Fils coins
        ];

        // Set the population
        $this->population = 4270571; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 17818; // km²

        // Set the capital city
        $this->capital = 'Kuwait City';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Kuwait',
                // Standard time offset
                'standard_time' => 'UTC+3',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1961-06-19'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Arab League',
            'Gulf Cooperation Council (GCC)',
            'Organization of Islamic Cooperation (OIC)',
            'Organization of Petroleum Exporting Countries (OPEC)',
            'Non-Aligned Movement',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 134; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni and Shia)',
        ];

        // Describe the form of government
        $this->government = 'Unitary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Iraq', 'iso_alpha_2' => 'IQ'],
            ['name' => 'Saudi Arabia', 'iso_alpha_2' => 'SA'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇰🇼',
            // Unicode code points
            'uCode' => 'U+1F1F0 U+1F1FC',
            // HTML entities
            'html' => '&#x1F1F0;&#x1F1FC;',
            // CSS entities
            'css' => '\\1F1F0\\1F1FC',
            // Decimal Unicode entities
            'decimal' => '&#127472;&#127484;',
            // Direct UTF-8 string
            'utf8' => '🇰🇼',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF0\uD83C\uDDFC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-kw:',
            // Hexadecimal entity
            'hex' => '&#x1F1F0;&#x1F1FC;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A3D',
                // RGB color values
                'rgb' => '0,122,61',
                // CMYK color values
                'cmyk' => '100,0,50,52',
                // HSL color values
                'hsl' => '152°,100%,24%',
                // HSV color values
                'hsv' => '152°,100%,48%',
                // Pantone color code
                'pantone' => '355 C',
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
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
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
                'hsl' => '350°,84%,44%',
                // HSV color values
                'hsv' => '350°,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Black',
                // Web color name
                'web_name' => 'black',
                // Hexadecimal color code
                'hex' => '#000000',
                // RGB color values
                'rgb' => '0,0,0',
                // CMYK color values
                'cmyk' => '0,0,0,100',
                // HSL color values
                'hsl' => '0°,0%,0%',
                // HSV color values
                'hsv' => '0°,0%,0%',
                // Pantone color code
                'pantone' => 'Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '29.3117',
            // Longitude in decimal degrees
            'longitude' => '47.4818',
            // Degrees with decimal
            'dd' => '29.3117° N, 47.4818° E',
            // Degrees, minutes, seconds
            'dms' => '29°18\'42.12" N, 47°28\'54.48" E',
            // Degrees and decimal minutes
            'dm' => '29°18.702\' N, 47°28.908\' E',
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
      "properties": { "cca2": "kw" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [48.36249, 29.45027],
              [48.392487, 29.41472],
              [48.394722, 29.41],
              [48.395264, 29.403606],
              [48.392487, 29.398888],
              [48.388329, 29.395554],
              [48.38194, 29.39444],
              [48.37527, 29.402222],
              [48.340271, 29.431107],
              [48.334717, 29.433327],
              [48.328331, 29.434715],
              [48.313332, 29.436108],
              [48.29221, 29.437492],
              [48.28583, 29.436108],
              [48.280823, 29.433605],
              [48.27444, 29.433884],
              [48.269157, 29.436108],
              [48.26693, 29.44111],
              [48.268044, 29.44722],
              [48.274155, 29.462772],
              [48.277489, 29.466942],
              [48.283043, 29.468884],
              [48.303879, 29.47083],
              [48.310822, 29.469994],
              [48.354713, 29.457497],
              [48.36249, 29.45027]
            ]
          ],
          [
            [
              [48.224709, 29.594719],
              [48.202766, 29.59444],
              [48.188599, 29.596104],
              [48.178322, 29.6011],
              [48.174721, 29.604443],
              [48.167763, 29.612221],
              [48.16249, 29.621105],
              [48.079987, 29.773331],
              [48.1461, 29.929722],
              [48.116936, 29.968609],
              [48.113884, 29.972771],
              [48.11222, 29.97833],
              [48.116379, 29.981663],
              [48.122765, 29.983604],
              [48.152222, 29.99194],
              [48.15943, 29.992775],
              [48.17277, 29.990273],
              [48.178322, 29.988049],
              [48.188538, 29.98193],
              [48.199158, 29.966389],
              [48.208321, 29.95472],
              [48.279709, 29.86638],
              [48.335541, 29.798882],
              [48.347771, 29.782219],
              [48.352219, 29.77166],
              [48.359444, 29.744999],
              [48.359993, 29.731937],
              [48.356377, 29.713329],
              [48.348885, 29.699997],
              [48.339722, 29.686939],
              [48.329987, 29.67499],
              [48.315552, 29.66],
              [48.278328, 29.623882],
              [48.26639, 29.613888],
              [48.252769, 29.605],
              [48.24305, 29.599716],
              [48.231934, 29.595833],
              [48.224709, 29.594719]
            ]
          ],
          [
            [
              [48.032219, 29.968052],
              [48.020264, 29.964165],
              [48.01388, 29.964993],
              [48.00916, 29.967773],
              [48.008606, 29.973885],
              [48.011932, 29.985554],
              [48.0186, 29.993607],
              [48.03777, 30.011105],
              [48.052216, 30.019161],
              [48.064156, 30.022495],
              [48.091385, 30.026108],
              [48.10638, 30.025],
              [48.111664, 30.023048],
              [48.114159, 30.018055],
              [48.109993, 30.01472],
              [48.046654, 29.976105],
              [48.032219, 29.968052]
            ]
          ],
          [
            [
              [47.931099, 30.018887],
              [47.938881, 30.016663],
              [47.94347, 30.01755],
              [47.95111, 29.981663],
              [47.982216, 29.864162],
              [47.987221, 29.848328],
              [47.992775, 29.833054],
              [48.006096, 29.803608],
              [48.024712, 29.77194],
              [48.02749, 29.767773],
              [48.052498, 29.734444],
              [48.056389, 29.73111],
              [48.062485, 29.729443],
              [48.068329, 29.731384],
              [48.088051, 29.714165],
              [48.147491, 29.615829],
              [48.164444, 29.582771],
              [48.167763, 29.565552],
              [48.16805, 29.559166],
              [48.167213, 29.55305],
              [48.162209, 29.550549],
              [48.15111, 29.54666],
              [48.145554, 29.546104],
              [48.13832, 29.54722],
              [48.104713, 29.559994],
              [48.094719, 29.564999],
              [48.091652, 29.56916],
              [48.08943, 29.574162],
              [48.086098, 29.584721],
              [48.079163, 29.592499],
              [48.015549, 29.627499],
              [48.003876, 29.631386],
              [47.996666, 29.632217],
              [47.981667, 29.63194],
              [47.96888, 29.62972],
              [47.963326, 29.627773],
              [47.948601, 29.619717],
              [47.708321, 29.407494],
              [47.707222, 29.375832],
              [47.81611, 29.329994],
              [47.822487, 29.328606],
              [47.830269, 29.328331],
              [47.854137, 29.32995],
              [47.858887, 29.33027],
              [47.865265, 29.331387],
              [47.877213, 29.335274],
              [47.886932, 29.340275],
              [47.924988, 29.361938],
              [47.962212, 29.384438],
              [47.98749, 29.384995],
              [48.005993, 29.367826],
              [48.0286, 29.34499],
              [48.07971, 29.254719],
              [48.097401, 29.212513],
              [48.122208, 29.10305],
              [48.143883, 29.03389],
              [48.148331, 29.024162],
              [48.17305, 28.97805],
              [48.184998, 28.961105],
              [48.27888, 28.836662],
              [48.36055, 28.742222],
              [48.379715, 28.714165],
              [48.380829, 28.68305],
              [48.376099, 28.663052],
              [48.374161, 28.657776],
              [48.416588, 28.545277],
              [48.302498, 28.544167],
              [47.68888, 28.538883],
              [47.617775, 28.614162],
              [47.602768, 28.634995],
              [47.575272, 28.699997],
              [47.57471, 28.706104],
              [47.576653, 28.73305],
              [47.576653, 28.759995],
              [47.57611, 28.766106],
              [47.57332, 28.777222],
              [47.56471, 28.796661],
              [47.540543, 28.850552],
              [47.506943, 28.92305],
              [47.46339, 28.984465],
              [47.46083, 28.998882],
              [47.459991, 28.99944],
              [46.996666, 29.053055],
              [46.800278, 29.07527],
              [46.587769, 29.098053],
              [46.548607, 29.10305],
              [46.546944, 29.104198],
              [46.547356, 29.105202],
              [46.552498, 29.114716],
              [46.561935, 29.126106],
              [46.565819, 29.13028],
              [46.581657, 29.14333],
              [46.598885, 29.156109],
              [46.63528, 29.178608],
              [46.650269, 29.18611],
              [46.65741, 29.19086],
              [46.690384, 29.23034],
              [46.714912, 29.266315],
              [46.775551, 29.356384],
              [46.827766, 29.433605],
              [46.858887, 29.475826],
              [46.918053, 29.549995],
              [46.929993, 29.559441],
              [46.940269, 29.571663],
              [46.948318, 29.585274],
              [46.981377, 29.646111],
              [47.047768, 29.794163],
              [47.092209, 29.901939],
              [47.096657, 29.912216],
              [47.113602, 29.946384],
              [47.128876, 29.974716],
              [47.14193, 29.991108],
              [47.153603, 30.001942],
              [47.169991, 30.01527],
              [47.199158, 30.031109],
              [47.20943, 30.035553],
              [47.351105, 30.081661],
              [47.39666, 30.082771],
              [47.43666, 30.083054],
              [47.71555, 30.084438],
              [47.731377, 30.083881],
              [47.931099, 30.018887]
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
