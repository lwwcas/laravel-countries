<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class FM_Micronesia extends CountrySeeder
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
        $this->name = 'Micronesia';

        // Set the country's official name
        $this->official_name = 'Federated States of Micronesia';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'FM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'FSM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '583';

        // Set the international dialing code
        $this->international_phone = '691';

        // Define the languages spoken in the country
        $this->languages = ['en', 'chk', 'pon', 'kos', 'yap']; // English is the official language, along with various indigenous languages (Chuukese, Pohnpeian, Kosraean, Yapese)

        // Define the top-level domain(s)
        $this->tld = ['.fm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '38%'; // Moderate internet penetration due to infrastructure challenges across the islands

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No dedicated cybersecurity agency

        // List popular web technologies in Micronesia
        $this->popular_technologies = ['PHP', 'HTML/CSS', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'FM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2081918';

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
            'banknotes' => ['1', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '5', '10', '25'],
            // Subunit coins
            'coins_sub' => ['1'],
        ];

        // Set the population
        $this->population = 114164; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 702; // km²

        // Set the capital city
        $this->capital = 'Palikir';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Pohnpei',
                // Standard time offset
                'standard_time' => 'UTC+11', // Pohnpei Time (PONT)
                // No daylight saving time observed
            ],
            [
                // Time zone identifier for Kosrae
                'timezone_id' => 'Pacific/Kosrae',
                // Standard time offset
                'standard_time' => 'UTC+11', // Kosrae Time (KOST)
                // No daylight saving time observed
            ],
            [
                // Time zone identifier for Chuuk
                'timezone_id' => 'Pacific/Chuuk',
                // Standard time offset
                'standard_time' => 'UTC+10', // Chuuk Time (CHUT)
                // No daylight saving time observed
            ],
            [
                // Time zone identifier for Yap
                'timezone_id' => 'Pacific/Yap',
                // Standard time offset
                'standard_time' => 'UTC+10', // Yap Time (YAPT)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1986-11-03'; // Date of independence in free association with the United States

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum (PIF)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.402; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Federal parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Basketball'; // Basketball is a popular sport in Micronesia

        // Define bordering countries
        $this->borders = []; // Micronesia is an island nation and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇫🇲',
            // Unicode code points
            'uCode' => 'U+1F1EB U+1F1F2',
            // HTML entities
            'html' => '&#x1F1EB;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1EB\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127467;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇫🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEB\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-fm:',
            // Hexadecimal entity
            'hex' => '&#x1F1EB;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Flag Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#66CCFF',
                // RGB color values
                'rgb' => '102,204,255',
                // CMYK color values
                'cmyk' => '60,20,0,0',
                // HSL color values
                'hsl' => '195,100%,70%',
                // HSV color values
                'hsv' => '195,60%,100%',
                // Pantone color code
                'pantone' => '305 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Star White',
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
            'latitude' => '7.4256',
            // Longitude in decimal degrees
            'longitude' => '150.5508',
            // Degrees with decimal
            'dd' => '7.4256° N, 150.5508° E',
            // Degrees, minutes, seconds
            'dms' => '7°25\'32.16" N, 150°33\'2.88" E',
            // Degrees and decimal minutes
            'dm' => '7°25.536\' N, 150°33.048\' E',
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
      "properties": { "cca2": "fm" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [153.674408, 5.286943],
              [153.66803, 5.28611],
              [153.66275, 5.287499],
              [153.659973, 5.291666],
              [153.665527, 5.29722],
              [153.690796, 5.312777],
              [153.705231, 5.318889],
              [153.711365, 5.31972],
              [153.714142, 5.315555],
              [153.709137, 5.306665],
              [153.683868, 5.290833],
              [153.674408, 5.286943]
            ]
          ],
          [
            [
              [163.007477, 5.2630550000001],
              [163.001923, 5.2616660000001],
              [162.921906, 5.274721],
              [162.917755, 5.277222],
              [162.913025, 5.282222],
              [162.904694, 5.30111],
              [162.904144, 5.307221],
              [162.906921, 5.311388],
              [162.973297, 5.36805],
              [162.982178, 5.372776],
              [162.987732, 5.3741660000001],
              [163.016388, 5.378332],
              [163.021912, 5.376944],
              [163.024139, 5.3722210000001],
              [163.043304, 5.3230550000001],
              [163.04248, 5.316944],
              [163.032196, 5.293055],
              [163.024139, 5.28083],
              [163.021088, 5.276666],
              [163.007477, 5.2630550000001]
            ]
          ],
          [
            [
              [143.063599, 6.7072220000001],
              [143.060242, 6.706388],
              [143.056091, 6.709166],
              [143.054688, 6.714722],
              [143.058319, 6.7180550000001],
              [143.063599, 6.719443],
              [143.0672, 6.715833],
              [143.0672, 6.710555],
              [143.063599, 6.7072220000001]
            ]
          ],
          [
            [
              [149.320251, 6.69833],
              [149.316071, 6.69694],
              [149.313293, 6.7025],
              [149.31665, 6.716666],
              [149.318848, 6.721388],
              [149.324982, 6.721944],
              [149.326904, 6.717221],
              [149.327759, 6.71111],
              [149.326355, 6.705832],
              [149.320251, 6.69833]
            ]
          ],
          [
            [
              [157.9422, 6.71861],
              [157.936646, 6.717221],
              [157.931915, 6.721944],
              [157.934418, 6.72611],
              [157.938019, 6.729444],
              [157.94693, 6.734444],
              [157.952454, 6.734444],
              [157.952454, 6.728888],
              [157.949707, 6.724721],
              [157.9422, 6.71861]
            ]
          ],
          [
            [
              [157.973572, 6.738332],
              [157.967468, 6.73778],
              [157.964142, 6.74111],
              [157.968842, 6.7444430000001],
              [157.987183, 6.750833],
              [157.992737, 6.751944],
              [157.990784, 6.74861],
              [157.987183, 6.7452760000001],
              [157.973572, 6.738332]
            ]
          ],
          [
            [
              [158.29776, 6.7861100000001],
              [158.227753, 6.780555],
              [158.184692, 6.793611],
              [158.175812, 6.798332],
              [158.155243, 6.819444],
              [158.121613, 6.8988890000001],
              [158.120239, 6.904444],
              [158.119415, 6.9105550000001],
              [158.119415, 6.924166],
              [158.120789, 6.92972],
              [158.127747, 6.9363870000001],
              [158.179962, 6.976665],
              [158.184692, 6.9786100000001],
              [158.262207, 6.963055],
              [158.267487, 6.961666],
              [158.295807, 6.948609],
              [158.318848, 6.93028],
              [158.322479, 6.926944],
              [158.334686, 6.877776],
              [158.33551, 6.871665],
              [158.318298, 6.82278],
              [158.316376, 6.818055],
              [158.30191, 6.7888880000001],
              [158.29776, 6.7861100000001]
            ]
          ],
          [
            [
              [158.253876, 6.983333],
              [158.248291, 6.981388],
              [158.243011, 6.9827770000001],
              [158.240784, 6.986666],
              [158.241638, 6.992777],
              [158.244965, 6.9963870000001],
              [158.249695, 6.99833],
              [158.2547, 7.000278],
              [158.259979, 7.000278],
              [158.262207, 6.9955540000001],
              [158.259979, 6.990832],
              [158.253876, 6.983333]
            ]
          ],
          [
            [
              [151.860504, 7.31861],
              [151.856903, 7.316667],
              [151.838287, 7.361943],
              [151.836365, 7.366943],
              [151.839966, 7.3702760000001],
              [151.844696, 7.370832],
              [151.863861, 7.3627770000001],
              [151.866638, 7.3586100000001],
              [151.866638, 7.34639],
              [151.865784, 7.340277],
              [151.862457, 7.323333],
              [151.860504, 7.31861]
            ]
          ],
          [
            [
              [149.20163, 7.363333],
              [149.197479, 7.360555],
              [149.194702, 7.361388],
              [149.195526, 7.3702760000001],
              [149.203033, 7.376388],
              [149.204956, 7.37361],
              [149.204407, 7.367498],
              [149.20163, 7.363333]
            ]
          ],
          [
            [
              [149.191345, 7.37555],
              [149.185791, 7.371665],
              [149.181091, 7.37361],
              [149.177765, 7.376944],
              [149.177765, 7.3825],
              [149.182465, 7.38444],
              [149.188019, 7.38444],
              [149.191345, 7.38111],
              [149.191345, 7.37555]
            ]
          ],
          [
            [
              [143.920258, 7.3797210000001],
              [143.91748, 7.376944],
              [143.914703, 7.37833],
              [143.911926, 7.3825],
              [143.910797, 7.387777],
              [143.914154, 7.391388],
              [143.919708, 7.389999],
              [143.921631, 7.38528],
              [143.920258, 7.3797210000001]
            ]
          ],
          [
            [
              [151.63916, 7.3266660000001],
              [151.633026, 7.32611],
              [151.595795, 7.331388],
              [151.571075, 7.338332],
              [151.5672, 7.34111],
              [151.586365, 7.376388],
              [151.589691, 7.3797210000001],
              [151.608307, 7.395277],
              [151.613586, 7.396667],
              [151.64386, 7.379166],
              [151.648041, 7.376388],
              [151.650818, 7.372221],
              [151.647217, 7.338888],
              [151.645813, 7.333611],
              [151.643036, 7.329444],
              [151.63916, 7.3266660000001]
            ]
          ],
          [
            [
              [151.911652, 7.444999],
              [151.863007, 7.419721],
              [151.856903, 7.420554],
              [151.85495, 7.423888],
              [151.85495, 7.441666],
              [151.85968, 7.45722],
              [151.861908, 7.461944],
              [151.866638, 7.4638880000001],
              [151.914429, 7.45722],
              [151.917206, 7.453054],
              [151.915253, 7.448332],
              [151.911652, 7.444999]
            ]
          ],
          [
            [
              [146.193298, 7.504167],
              [146.187744, 7.50278],
              [146.179688, 7.5055550000001],
              [146.179688, 7.510833],
              [146.182465, 7.513611],
              [146.187195, 7.515555],
              [146.194702, 7.509444],
              [146.193298, 7.504167]
            ]
          ],
          [
            [
              [149.674988, 8.575554],
              [149.668854, 8.5747200000001],
              [149.664703, 8.576664],
              [149.659424, 8.5849970000001],
              [149.659424, 8.590275],
              [149.661377, 8.594997],
              [149.671631, 8.611942],
              [149.678589, 8.616665],
              [149.683319, 8.618887],
              [149.688873, 8.617496],
              [149.69165, 8.613331],
              [149.690247, 8.60805],
              [149.678589, 8.578886],
              [149.674988, 8.575554]
            ]
          ],
          [
            [
              [150.378021, 8.617496],
              [150.373291, 8.6127760000001],
              [150.367188, 8.6202750000001],
              [150.366638, 8.626387],
              [150.370789, 8.628885],
              [150.375519, 8.62694],
              [150.378021, 8.6227740000001],
              [150.378021, 8.617496]
            ]
          ],
          [
            [
              [150.130249, 8.978331],
              [150.118286, 8.97639],
              [150.117737, 8.982498],
              [150.119965, 8.987219],
              [150.123291, 8.990553],
              [150.128021, 8.992496],
              [150.133606, 8.991386],
              [150.135529, 8.9866640000001],
              [150.133606, 8.981665],
              [150.130249, 8.978331]
            ]
          ],
          [
            [
              [138.209137, 9.5238880000001],
              [138.181641, 9.50361],
              [138.17276, 9.498886],
              [138.167206, 9.498886],
              [138.162476, 9.50111],
              [138.159698, 9.504999],
              [138.158875, 9.51111],
              [138.131622, 9.498886],
              [138.069122, 9.411943],
              [138.063873, 9.411943],
              [138.060242, 9.4152760000001],
              [138.058319, 9.426664],
              [138.061646, 9.43694],
              [138.073303, 9.46583],
              [138.121338, 9.55722],
              [138.126068, 9.5658320000001],
              [138.133606, 9.571943],
              [138.174683, 9.588331],
              [138.180267, 9.589441],
              [138.186371, 9.588886],
              [138.190521, 9.586109],
              [138.193298, 9.58222],
              [138.219971, 9.540276],
              [138.21524, 9.5313870000001],
              [138.209137, 9.5238880000001]
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
