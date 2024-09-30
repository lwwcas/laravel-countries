<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelRssReader\Abstract\CountrySeeder;

class IL_Israel extends CountrySeeder
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
    public $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Israel';

        // Set the country's official name
        $this->official_name = 'State of Israel';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'IL';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ISR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '376';

        // Set the international dialing code
        $this->international_phone = '972';

        // Define the languages spoken in the country
        $this->languages = ['he', 'ar']; // Hebrew and Arabic are official languages

        // Define the top-level domain(s)
        $this->tld = ['.il'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '40 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '88%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Israel National Cyber Directorate (INCD)';

        // List popular web technologies in Israel
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Java', 'Node.js'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'IS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '294640';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Israeli new shekel',
            // Currency code
            'code' => 'ILS',
            // Currency symbol
            'symbol' => '₪',
            // Main unit
            'main_unit' => 'shekel',
            // Subunit
            'sub_unit' => 'agora',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10'],
            // Subunit coins
            'coins_sub' => ['10', '50 agorot'],
        ];

        // Set the population
        $this->population = 9197600; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 20770; // km², including disputed territories

        // Set the capital city
        $this->capital = 'Jerusalem'; // Note: Jerusalem is proclaimed as the capital by Israel, but this status is not widely recognized internationally

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Jerusalem',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+3',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1948-05-14'; // Declaration of independence from the British Mandate

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Organisation for Economic Co-operation and Development (OECD)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Mediterranean Union',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 387; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Judaism',
            'Islam',
            'Christianity',
            'Druze',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary constitutional republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is popular in Israel

        // Define bordering countries
        $this->borders = [
            ['name' => 'Lebanon', 'iso_alpha_2' => 'LB'],
            ['name' => 'Syria', 'iso_alpha_2' => 'SY'],
            ['name' => 'Jordan', 'iso_alpha_2' => 'JO'],
            ['name' => 'Egypt', 'iso_alpha_2' => 'EG'],
            ['name' => 'Palestine', 'iso_alpha_2' => 'PS'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇮🇱',
            // Unicode code points
            'uCode' => 'U+1F1EE U+1F1F1',
            // HTML entities
            'html' => '&#x1F1EE;&#x1F1F1;',
            // CSS entities
            'css' => '\\1F1EE\\1F1F1',
            // Decimal Unicode entities
            'decimal' => '&#127470;&#127473;',
            // Direct UTF-8 string
            'utf8' => '🇮🇱',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEE\uD83C\uDDF1',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-il:',
            // Hexadecimal entity
            'hex' => '&#x1F1EE;&#x1F1F1;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0038B8',
                // RGB color values
                'rgb' => '0,56,184',
                // CMYK color values
                'cmyk' => '100,70,0,28',
                // HSL color values
                'hsl' => '222,100%,36%',
                // HSV color values
                'hsv' => '222,100%,72%',
                // Pantone color code
                'pantone' => '293 C',
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
            'latitude' => '31.0461',
            // Longitude in decimal degrees
            'longitude' => '34.8516',
            // Degrees with decimal
            'dd' => '31.0461° N, 34.8516° E',
            // Degrees, minutes, seconds
            'dms' => '31°2\'45.96" N, 34°51\'5.76" E',
            // Degrees and decimal minutes
            'dm' => '31°2.766\' N, 34°51.096\' E',
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
      "properties": { "cca2": "il" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [35.25972, 31.78722],
              [35.25444, 31.78639],
              [35.251663, 31.788055],
              [35.243607, 31.803886],
              [35.24638, 31.80805],
              [35.248886, 31.808887],
              [35.256386, 31.80805],
              [35.26361, 31.803608],
              [35.262497, 31.789719],
              [35.25972, 31.78722]
            ]
          ],
          [
            [
              [35.62363, 33.245728],
              [35.626663, 33.244164],
              [35.62944, 33.244164],
              [35.63358, 33.2466],
              [35.640274, 33.250549],
              [35.651382, 33.255554],
              [35.66777, 33.252777],
              [35.669617, 33.251717],
              [35.676384, 33.251106],
              [35.681938, 33.249161],
              [35.683052, 33.238884],
              [35.66902, 33.212173],
              [35.666939, 33.205276],
              [35.652496, 33.124992],
              [35.650024, 33.091209],
              [35.642494, 33.050552],
              [35.634995, 33],
              [35.634163, 32.940552],
              [35.633331, 32.930832],
              [35.62722, 32.91],
              [35.621941, 32.901665],
              [35.614464, 32.8949],
              [35.618607, 32.891388],
              [35.63916, 32.867493],
              [35.64222, 32.86055],
              [35.642494, 32.849716],
              [35.639206, 32.81531],
              [35.65666, 32.807495],
              [35.662216, 32.803329],
              [35.664993, 32.79666],
              [35.667496, 32.781387],
              [35.665482, 32.761993],
              [35.651939, 32.727493],
              [35.64666, 32.702774],
              [35.648888, 32.685272],
              [35.631935, 32.687218],
              [35.627762, 32.686096],
              [35.615829, 32.680275],
              [35.609764, 32.676132],
              [35.571938, 32.645828],
              [35.546944, 32.405],
              [35.55257, 32.394196],
              [35.48111, 32.412773],
              [35.425278, 32.48333],
              [35.422493, 32.48805],
              [35.412216, 32.500832],
              [35.40416, 32.5075],
              [35.35805, 32.522217],
              [35.349716, 32.523888],
              [35.347221, 32.523888],
              [35.32278, 32.517776],
              [35.311943, 32.516106],
              [35.29555, 32.515549],
              [35.282494, 32.516937],
              [35.268883, 32.519722],
              [35.258049, 32.523605],
              [35.208054, 32.546387],
              [35.179443, 32.527496],
              [35.092773, 32.480827],
              [35.079994, 32.470551],
              [35.077217, 32.46722],
              [35.06638, 32.44722],
              [35.056664, 32.425278],
              [35.04722, 32.39444],
              [35.04583, 32.383331],
              [35.048332, 32.371384],
              [35.04722, 32.363609],
              [35.026939, 32.240829],
              [35.02416, 32.237778],
              [34.979164, 32.15305],
              [34.985832, 32.1325],
              [35.006104, 32.054161],
              [35.0075, 32.028053],
              [35.00086, 31.985317],
              [34.987495, 31.968887],
              [34.96611, 31.86138],
              [34.965557, 31.830551],
              [34.971107, 31.824718],
              [34.979164, 31.821941],
              [35.01416, 31.82027],
              [35.035828, 31.82222],
              [35.108284, 31.833073],
              [35.153053, 31.813053],
              [35.209717, 31.75],
              [35.166939, 31.745831],
              [35.158882, 31.743889],
              [35.0975, 31.708332],
              [35.001663, 31.64694],
              [34.98555, 31.633331],
              [34.961365, 31.603355],
              [34.95361, 31.594719],
              [34.950829, 31.589722],
              [34.948326, 31.581387],
              [34.945831, 31.559166],
              [34.95027, 31.518887],
              [34.947777, 31.503609],
              [34.945, 31.495552],
              [34.942497, 31.489998],
              [34.937218, 31.481667],
              [34.910553, 31.443886],
              [34.89194, 31.420277],
              [34.884438, 31.40472],
              [34.884995, 31.391388],
              [34.88777, 31.3825],
              [34.890549, 31.377499],
              [34.896111, 31.370831],
              [34.90416, 31.363609],
              [34.912216, 31.357498],
              [34.922775, 31.352219],
              [34.933609, 31.349998],
              [34.94694, 31.350277],
              [35.138611, 31.361942],
              [35.211105, 31.374996],
              [35.229721, 31.37861],
              [35.24055, 31.384163],
              [35.259163, 31.40361],
              [35.373329, 31.48111],
              [35.383888, 31.48722],
              [35.39608, 31.492119],
              [35.405273, 31.494999],
              [35.443054, 31.49944],
              [35.45916, 31.49944],
              [35.478195, 31.497322],
              [35.478607, 31.449165],
              [35.476387, 31.427776],
              [35.47388, 31.411942],
              [35.471107, 31.400833],
              [35.452499, 31.351387],
              [35.411385, 31.225277],
              [35.432777, 31.200275],
              [35.454163, 31.170555],
              [35.459442, 31.158333],
              [35.462219, 31.149441],
              [35.462219, 31.121109],
              [35.454994, 31.09972],
              [35.402214, 30.955818],
              [35.396378, 30.947216],
              [35.390976, 30.942017],
              [35.368134, 30.928661],
              [35.361107, 30.924164],
              [35.35472, 30.91805],
              [35.337776, 30.88694],
              [35.299995, 30.791111],
              [35.292496, 30.759163],
              [35.255554, 30.681942],
              [35.219719, 30.621944],
              [35.20611, 30.594719],
              [35.158607, 30.444164],
              [35.15609, 30.415279],
              [35.161385, 30.319443],
              [35.166939, 30.151665],
              [35.164719, 30.126389],
              [35.162216, 30.11889],
              [35.15694, 30.109444],
              [35.143883, 30.094166],
              [35.12527, 30.0775],
              [35.112221, 30.062496],
              [35.106941, 30.05611],
              [35.104439, 30.051666],
              [35.101662, 30.043888],
              [35.073051, 29.953609],
              [35.07222, 29.92083],
              [35.07222, 29.898052],
              [35.073326, 29.885277],
              [35.07611, 29.876663],
              [35.075554, 29.858887],
              [35.00722, 29.64083],
              [34.974625, 29.577015],
              [34.97749, 29.57],
              [34.97998, 29.545753],
              [34.965828, 29.549164],
              [34.96256, 29.55146],
              [34.938049, 29.52333],
              [34.903801, 29.486706],
              [34.877777, 29.532497],
              [34.862495, 29.598888],
              [34.870277, 29.614441],
              [34.873329, 29.623333],
              [34.874443, 29.63833],
              [34.873886, 29.645554],
              [34.871666, 29.656109],
              [34.847771, 29.740833],
              [34.75361, 29.991108],
              [34.723343, 30.089344],
              [34.614441, 30.364998],
              [34.545273, 30.406944],
              [34.543327, 30.434719],
              [34.558884, 30.486111],
              [34.489441, 30.691109],
              [34.401382, 30.859444],
              [34.287498, 31.162777],
              [34.267578, 31.216541],
              [34.33416, 31.25972],
              [34.367775, 31.291111],
              [34.37055, 31.29472],
              [34.373055, 31.29972],
              [34.373604, 31.31444],
              [34.364998, 31.34777],
              [34.364166, 31.360832],
              [34.388885, 31.394722],
              [34.478607, 31.471107],
              [34.513329, 31.498608],
              [34.539993, 31.514721],
              [34.558609, 31.533054],
              [34.559166, 31.546944],
              [34.490547, 31.596096],
              [34.49528, 31.603333],
              [34.51111, 31.626389],
              [34.553886, 31.683887],
              [34.586105, 31.72694],
              [34.669998, 31.874996],
              [34.70472, 31.940277],
              [34.711937, 31.954998],
              [34.729996, 32.000832],
              [34.731667, 32.006386],
              [34.732773, 32.014442],
              [34.778885, 32.12555],
              [34.797775, 32.178055],
              [34.802803, 32.192368],
              [34.83416, 32.29083],
              [34.868332, 32.407494],
              [34.871109, 32.414444],
              [34.873886, 32.424995],
              [34.89555, 32.510277],
              [34.939163, 32.71333],
              [34.945549, 32.758049],
              [34.945549, 32.776108],
              [34.94694, 32.808609],
              [34.950554, 32.823883],
              [34.953888, 32.828049],
              [34.961388, 32.833054],
              [34.98083, 32.839165],
              [34.98333, 32.839165],
              [34.988052, 32.836388],
              [35.003883, 32.82444],
              [35.012772, 32.815552],
              [35.01722, 32.815277],
              [35.032494, 32.82222],
              [35.035828, 32.824165],
              [35.056389, 32.84333],
              [35.06694, 32.854996],
              [35.070831, 32.863327],
              [35.075554, 32.88222],
              [35.077675, 32.89258],
              [35.072495, 32.94694],
              [35.071663, 32.961937],
              [35.078888, 32.986938],
              [35.088051, 33.018051],
              [35.101944, 33.068886],
              [35.10305, 33.077499],
              [35.102776, 33.08833],
              [35.10083, 33.093605],
              [35.109444, 33.095551],
              [35.264999, 33.09861],
              [35.32194, 33.088051],
              [35.34916, 33.06305],
              [35.35472, 33.06194],
              [35.376389, 33.06194],
              [35.379166, 33.06222],
              [35.422775, 33.067772],
              [35.428329, 33.068886],
              [35.50471, 33.09416],
              [35.505829, 33.10194],
              [35.505829, 33.11499],
              [35.522217, 33.123604],
              [35.524994, 33.12555],
              [35.527771, 33.12888],
              [35.543053, 33.188889],
              [35.542496, 33.204163],
              [35.585548, 33.270271],
              [35.62363, 33.245728]
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
