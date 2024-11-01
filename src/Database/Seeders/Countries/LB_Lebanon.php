<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class LB_Lebanon extends CountrySeeder
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
        $this->name = 'Lebanon';

        // Set the country's official name
        $this->official_name = 'Lebanese Republic';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'LB';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'LBN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '422';

        // Set the international dialing code
        $this->international_phone = '961';

        // Define the languages spoken in the country
        $this->languages = ['ar', 'fr']; // Arabic is official, French is recognized

        // Define the top-level domain(s)
        $this->tld = ['.lb'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '78%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Lebanese National Cybersecurity Center';

        // List popular web technologies in Lebanon
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Java', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'LE';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '272103';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Lebanese pound',
            // Currency code
            'code' => 'LBP',
            // Currency symbol
            'symbol' => 'ل.ل',
            // Main unit
            'main_unit' => 'pound',
            // Subunit
            'sub_unit' => 'piastre',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1000', '5000', '10,000', '20,000', '50,000', '100,000'],
            // Main coins
            'coins_main' => ['250', '500'],
            // Subunit coins
            'coins_sub' => ['50', '100'],
        ];

        // Set the population
        $this->population = 6825445; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 10452; // km²

        // Set the capital city
        $this->capital = 'Beirut';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Beirut',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+3',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1943-11-22'; // Independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Arab League',
            'Organisation of Islamic Cooperation (OIC)',
            'Non-Aligned Movement',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Organisation internationale de la Francophonie (OIF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 51.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni and Shia)',
            'Christianity (Maronite, Greek Orthodox, Melkite Catholic, etc.)',
            'Druze',
        ];

        // Describe the form of government
        $this->government = 'Unitary confessionalist parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer) and Basketball'; // Both are popular in Lebanon

        // Define bordering countries
        $this->borders = [
            ['name' => 'Syria', 'iso_alpha_2' => 'SY'],
            ['name' => 'Israel', 'iso_alpha_2' => 'IL'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇱🇧',
            // Unicode code points
            'uCode' => 'U+1F1F1 U+1F1E7',
            // HTML entities
            'html' => '&#x1F1F1;&#x1F1E7;',
            // CSS entities
            'css' => '\\1F1F1\\1F1E7',
            // Decimal Unicode entities
            'decimal' => '&#127473;&#127463;',
            // Direct UTF-8 string
            'utf8' => '🇱🇧',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF1\uD83C\uDDE7',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-lb:',
            // Hexadecimal entity
            'hex' => '&#x1F1F1;&#x1F1E7;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#ED1C24',
                // RGB color values
                'rgb' => '237,28,36',
                // CMYK color values
                'cmyk' => '0,88,85,7',
                // HSL color values
                'hsl' => '358°,85%,52%',
                // HSV color values
                'hsv' => '358°,88%,93%',
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
                'pantone' => '356 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '33.8547',
            // Longitude in decimal degrees
            'longitude' => '35.8623',
            // Degrees with decimal
            'dd' => '33.8547° N, 35.8623° E',
            // Degrees, minutes, seconds
            'dms' => '33°51\'16.92" N, 35°51\'44.28" E',
            // Degrees and decimal minutes
            'dm' => '33°51.282\' N, 35°51.738\' E',
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
      "properties": { "cca2": "lb" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [35.623634, 33.245728],
            [35.585548, 33.270271],
            [35.542496, 33.204163],
            [35.543053, 33.188889],
            [35.527771, 33.128883],
            [35.524994, 33.125549],
            [35.522217, 33.123604],
            [35.505829, 33.11499],
            [35.505829, 33.101944],
            [35.504715, 33.094162],
            [35.428329, 33.068886],
            [35.422775, 33.067772],
            [35.379166, 33.062218],
            [35.376389, 33.061943],
            [35.354721, 33.061943],
            [35.349159, 33.063049],
            [35.321938, 33.088051],
            [35.264999, 33.09861],
            [35.109444, 33.095551],
            [35.10083, 33.093605],
            [35.141663, 33.130829],
            [35.188332, 33.182777],
            [35.203049, 33.20916],
            [35.206108, 33.224998],
            [35.209442, 33.249443],
            [35.220276, 33.305275],
            [35.263054, 33.425552],
            [35.273331, 33.454163],
            [35.285271, 33.462776],
            [35.299721, 33.470833],
            [35.302773, 33.472771],
            [35.313889, 33.481667],
            [35.32972, 33.495827],
            [35.35527, 33.525276],
            [35.357216, 33.528328],
            [35.382339, 33.58783],
            [35.394997, 33.634438],
            [35.416939, 33.688332],
            [35.441666, 33.741661],
            [35.463333, 33.773888],
            [35.470833, 33.783607],
            [35.476944, 33.794716],
            [35.480553, 33.80722],
            [35.483055, 33.820549],
            [35.483887, 33.83194],
            [35.483887, 33.852493],
            [35.48333, 33.863884],
            [35.482498, 33.865288],
            [35.468887, 33.895828],
            [35.46833, 33.897774],
            [35.469994, 33.903053],
            [35.480827, 33.908051],
            [35.485275, 33.908051],
            [35.491943, 33.908051],
            [35.523605, 33.907219],
            [35.548088, 33.901665],
            [35.569443, 33.906944],
            [35.575829, 33.913055],
            [35.582497, 33.921387],
            [35.634438, 34.012772],
            [35.647774, 34.09861],
            [35.646385, 34.112778],
            [35.640549, 34.133331],
            [35.638885, 34.138611],
            [35.63472, 34.14222],
            [35.629166, 34.14444],
            [35.624992, 34.147499],
            [35.625275, 34.153885],
            [35.628326, 34.198326],
            [35.629715, 34.204163],
            [35.633331, 34.208054],
            [35.646271, 34.217186],
            [35.648331, 34.278328],
            [35.649437, 34.283882],
            [35.669441, 34.312492],
            [35.670555, 34.313889],
            [35.81916, 34.431389],
            [35.900551, 34.471939],
            [35.982773, 34.525833],
            [35.984444, 34.52916],
            [35.991104, 34.551109],
            [35.991943, 34.55722],
            [35.992218, 34.568604],
            [35.989441, 34.604439],
            [35.984993, 34.619164],
            [35.972771, 34.647499],
            [36.025276, 34.632774],
            [36.036385, 34.632217],
            [36.087494, 34.633888],
            [36.111382, 34.638054],
            [36.114571, 34.639473],
            [36.120552, 34.644165],
            [36.123329, 34.644165],
            [36.298592, 34.641937],
            [36.376389, 34.639442],
            [36.457222, 34.635826],
            [36.459999, 34.635277],
            [36.459999, 34.625275],
            [36.454163, 34.596382],
            [36.451385, 34.593048],
            [36.397499, 34.554443],
            [36.364166, 34.538055],
            [36.351227, 34.500748],
            [36.429993, 34.501938],
            [36.454437, 34.491386],
            [36.525833, 34.431938],
            [36.546661, 34.344162],
            [36.592216, 34.229439],
            [36.594994, 34.226944],
            [36.623741, 34.204994],
            [36.516937, 34.107216],
            [36.397499, 34.033882],
            [36.350273, 33.997215],
            [36.333611, 33.981941],
            [36.32222, 33.968048],
            [36.283333, 33.91777],
            [36.281662, 33.910828],
            [36.284439, 33.907494],
            [36.325272, 33.878883],
            [36.333611, 33.877777],
            [36.347496, 33.880554],
            [36.355827, 33.881386],
            [36.361107, 33.880272],
            [36.366661, 33.877495],
            [36.385826, 33.861107],
            [36.388611, 33.858604],
            [36.391106, 33.854439],
            [36.389442, 33.842773],
            [36.386665, 33.838608],
            [36.378052, 33.831665],
            [36.36972, 33.827499],
            [36.361382, 33.82666],
            [36.353333, 33.826942],
            [36.240829, 33.856384],
            [36.072075, 33.827835],
            [36.07, 33.827217],
            [36.01722, 33.769722],
            [35.973885, 33.721382],
            [35.96833, 33.714996],
            [35.933884, 33.654716],
            [35.934998, 33.646111],
            [35.943329, 33.638885],
            [35.948608, 33.63694],
            [35.954163, 33.637497],
            [35.968048, 33.641937],
            [35.973328, 33.641663],
            [36.025551, 33.619164],
            [36.05555, 33.595833],
            [36.061104, 33.587776],
            [36.059166, 33.579437],
            [36.034439, 33.553329],
            [35.934166, 33.46666],
            [35.893051, 33.435272],
            [35.887497, 33.431389],
            [35.876389, 33.425827],
            [35.851997, 33.41729],
            [35.832497, 33.408882],
            [35.826942, 33.404999],
            [35.82444, 33.402222],
            [35.821663, 33.396942],
            [35.818886, 33.388885],
            [35.816109, 33.370827],
            [35.813332, 33.363884],
            [35.810555, 33.360832],
            [35.794167, 33.350555],
            [35.786659, 33.347221],
            [35.76944, 33.34111],
            [35.633049, 33.280548],
            [35.628334, 33.277721],
            [35.624718, 33.275551],
            [35.62056, 33.271454],
            [35.623634, 33.245728]
          ]
        ]
      }
    }
  ]
}
';
    }
}
