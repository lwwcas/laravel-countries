<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BT_Bhutan extends Seeder
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
        $this->name = 'Bhutan';

        // Set the country's official name
        $this->official_name = 'Kingdom of Bhutan';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BT';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BTN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '064';

        // Set the international dialing code
        $this->international_phone = '975';

        // Define the languages spoken in the country
        $this->languages = ['dz']; // Dzongkha is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bt'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '50%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Bhutan Computer Incident Response Team (BtCIRT)';

        // List popular web technologies in Bhutan
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BT';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1252634';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Bhutanese ngultrum',
            // Currency code
            'code' => 'BTN',
            // Currency symbol
            'symbol' => 'Nu.',
            // Main unit
            'main_unit' => 'ngultrum',
            // Subunit
            'sub_unit' => 'chetrum',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50', '100', '500', '1,000'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 771608; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 38394; // km²

        // Set the capital city
        $this->capital = 'Thimphu';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Asia/Thimphu',
            // Standard time offset
            'standard_time' => 'UTC+6', // Bhutan Time (BTT)
        ];

        // Set the independence day
        $this->independence_day = '1907-12-17'; // Date of establishment of monarchy

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'SAARC',
            'BIMSTEC',
            'World Trade Organization (WTO)',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.53; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Buddhism (Vajrayana)', 'Hinduism'];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Archery';

        // Define bordering countries
        $this->borders = [
            ['name' => 'China', 'iso_alpha_2' => 'CN'],
            ['name' => 'India', 'iso_alpha_2' => 'IN'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇹',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1F9',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1F9;',
            // CSS entities
            'css' => '\\1F1E7\\1F1F9',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127481;',
            // Direct UTF-8 string
            'utf8' => '🇧🇹',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDF9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bt:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1F9;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'golden yellow',
                // Hexadecimal color code
                'hex' => '#FFCC00',
                // RGB color values
                'rgb' => '255,204,0',
                // CMYK color values
                'cmyk' => '0,20,100,0',
                // HSL color values
                'hsl' => '48,100%,50%',
                // HSV color values
                'hsv' => '48,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Orange',
                // Web color name
                'web_name' => 'saffron',
                // Hexadecimal color code
                'hex' => '#FF6600',
                // RGB color values
                'rgb' => '255,102,0',
                // CMYK color values
                'cmyk' => '0,60,100,0',
                // HSL color values
                'hsl' => '24,100%,50%',
                // HSV color values
                'hsv' => '24,100%,100%',
                // Pantone color code
                'pantone' => '1655 C',
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
            'latitude' => '27.5142',
            // Longitude in decimal degrees
            'longitude' => '89.6329',
            // Degrees with decimal
            'dd' => '27.5142° N, 89.6329° E',
            // Degrees, minutes, seconds
            'dms' => '27°30\'51.12" N, 89°37\'58.44" E',
            // Degrees and decimal minutes
            'dm' => '27°30.852\' N, 89°37.974\' E',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N27°30\'51.12", E89°37\'58.44"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '27°30\'51.12"N, 89°37\'58.44"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '27 30 51.12, 89 37 58.44',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '273051.12, 0893758.44',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]ddd.dddd',
                    // Coordinates in this format
                    'coordinates' => '27.5142 89.6329',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '27.51420°,89.63290°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '27.5142000N89.6329000E',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '2730.852N08937.974E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '27°30\'51.12"N, 89°37\'58.44"E',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '273051.12N0893758.44E',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 27 30.852 E 89 37.974',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '27:30:51N,89:37:58E',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '27:30:51.12N 89:37:58.44E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '27°30\'51"N 89°37\'58"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '27°30\'51" 89°37\'58"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '27d 30\' 51" N 89d 37\' 58" E',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] ddd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '27.5142N 89.6329E',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '27° 30.852, 89° 37.974',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '2730.852, 8937.974',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '2730.852N, 8937.974E',
                ],
            ],
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
      "properties": { "cca2": "bt" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [90.466385, 28.071663],
            [90.502777, 28.078331],
            [90.518326, 28.079998],
            [90.532486, 28.080551],
            [90.544144, 28.077496],
            [90.556091, 28.074718],
            [90.562195, 28.074165],
            [90.61998, 28.074997],
            [90.633331, 28.075829],
            [90.647491, 28.077496],
            [90.653595, 28.07972],
            [90.756653, 28.06472],
            [90.840271, 28.048054],
            [90.861374, 28.049999],
            [90.876373, 28.051109],
            [90.909988, 28.049442],
            [90.925812, 28.04361],
            [90.951385, 28.032497],
            [90.967758, 28.019165],
            [90.989426, 27.995827],
            [90.997482, 27.988884],
            [91.010818, 27.979996],
            [91.015823, 27.977772],
            [91.027481, 27.974995],
            [91.086929, 27.969994],
            [91.108871, 27.971107],
            [91.115814, 27.972771],
            [91.126083, 27.97805],
            [91.137207, 27.989162],
            [91.143051, 27.997494],
            [91.148041, 28.006664],
            [91.164993, 28.026108],
            [91.209991, 28.069717],
            [91.214432, 28.073051],
            [91.22554, 28.078053],
            [91.301376, 28.081108],
            [91.326096, 28.063053],
            [91.356934, 28.041943],
            [91.419434, 28.010555],
            [91.449997, 27.997215],
            [91.478867, 27.989994],
            [91.491653, 27.988605],
            [91.501122, 27.989515],
            [91.520538, 27.991383],
            [91.606934, 27.96944],
            [91.633606, 27.959995],
            [91.643875, 27.955551],
            [91.658325, 27.948051],
            [91.667206, 27.94194],
            [91.674698, 27.934441],
            [91.679428, 27.923885],
            [91.680542, 27.910553],
            [91.6772, 27.900551],
            [91.671097, 27.891941],
            [91.666931, 27.888885],
            [91.663605, 27.884995],
            [91.656097, 27.871384],
            [91.654434, 27.866386],
            [91.652771, 27.854996],
            [91.653046, 27.836109],
            [91.656647, 27.777775],
            [91.657761, 27.764721],
            [91.658875, 27.763332],
            [91.659149, 27.744438],
            [91.659149, 27.738049],
            [91.656097, 27.721661],
            [91.652771, 27.711662],
            [91.647766, 27.702496],
            [91.636658, 27.691662],
            [91.628036, 27.684994],
            [91.612762, 27.676941],
            [91.604156, 27.670551],
            [91.600815, 27.666664],
            [91.595825, 27.657497],
            [91.594986, 27.64555],
            [91.598038, 27.624996],
            [91.602478, 27.605831],
            [91.617477, 27.560829],
            [91.631363, 27.536385],
            [91.673599, 27.488605],
            [91.67804, 27.48555],
            [91.770828, 27.431664],
            [91.853592, 27.436661],
            [91.950821, 27.450272],
            [91.961105, 27.455551],
            [91.970535, 27.461662],
            [91.986649, 27.475273],
            [91.991928, 27.477772],
            [91.998871, 27.47805],
            [92.004166, 27.475826],
            [92.007767, 27.471939],
            [92.078049, 27.368607],
            [92.089157, 27.349442],
            [92.113602, 27.297497],
            [92.115265, 27.291386],
            [92.114426, 27.285831],
            [92.045822, 27.190273],
            [92.04248, 27.186382],
            [92.015274, 27.168053],
            [92.009995, 27.104717],
            [92.009995, 27.098331],
            [92.011108, 27.091385],
            [92.015549, 27.08083],
            [92.0186, 27.076385],
            [92.025818, 27.068607],
            [92.038315, 27.058887],
            [92.052475, 27.051388],
            [92.065536, 27.042496],
            [92.077209, 27.031666],
            [92.083328, 27.022774],
            [92.089981, 27.006664],
            [92.100815, 26.97916],
            [92.111923, 26.94416],
            [92.1147, 26.931107],
            [92.113876, 26.925552],
            [92.112198, 26.920273],
            [92.103043, 26.89555],
            [92.095535, 26.882217],
            [92.088593, 26.874439],
            [92.081512, 26.869045],
            [92.069992, 26.861942],
            [92.058868, 26.857498],
            [92.038589, 26.85305],
            [92.02388, 26.85083],
            [91.997208, 26.85194],
            [91.991364, 26.853329],
            [91.981369, 26.857773],
            [91.843597, 26.864162],
            [91.835815, 26.863331],
            [91.829987, 26.861385],
            [91.749146, 26.82444],
            [91.735535, 26.815273],
            [91.718597, 26.801941],
            [91.712494, 26.799999],
            [91.54776, 26.803051],
            [91.542206, 26.804443],
            [91.5336, 26.810555],
            [91.516937, 26.839165],
            [91.508331, 26.861385],
            [91.501663, 26.869717],
            [91.497208, 26.872498],
            [91.492203, 26.874718],
            [91.485809, 26.875553],
            [91.424698, 26.875553],
            [91.418869, 26.873329],
            [91.414429, 26.869995],
            [91.411102, 26.866108],
            [91.401093, 26.848331],
            [91.393875, 26.828609],
            [91.386383, 26.815273],
            [91.3797, 26.807499],
            [91.371368, 26.800831],
            [91.351929, 26.78944],
            [91.334152, 26.783333],
            [91.314423, 26.778053],
            [91.300262, 26.778053],
            [91.287766, 26.779163],
            [91.281937, 26.780552],
            [91.268875, 26.789719],
            [91.257217, 26.800274],
            [91.240814, 26.805275],
            [91.221649, 26.80722],
            [91.119705, 26.809162],
            [91.049713, 26.788887],
            [90.966629, 26.783428],
            [90.957489, 26.784443],
            [90.93692, 26.784721],
            [90.902481, 26.784721],
            [90.751663, 26.777775],
            [90.736923, 26.776665],
            [90.708603, 26.772499],
            [90.694702, 26.772221],
            [90.68248, 26.774166],
            [90.641373, 26.782497],
            [90.569153, 26.803051],
            [90.559143, 26.80722],
            [90.518875, 26.824718],
            [90.466095, 26.851662],
            [90.461105, 26.854717],
            [90.45665, 26.857498],
            [90.444702, 26.868053],
            [90.422485, 26.890553],
            [90.414429, 26.897217],
            [90.409424, 26.899441],
            [90.392212, 26.903606],
            [90.385269, 26.903328],
            [90.369705, 26.901386],
            [90.356094, 26.898331],
            [90.216934, 26.85083],
            [90.196091, 26.834164],
            [90.186096, 26.822498],
            [90.183594, 26.818054],
            [90.182205, 26.812775],
            [90.180817, 26.801388],
            [90.181366, 26.782497],
            [90.180817, 26.776943],
            [90.177475, 26.773052],
            [90.164993, 26.763054],
            [90.154984, 26.7575],
            [90.143051, 26.75333],
            [90.123596, 26.748051],
            [90.08194, 26.739162],
            [89.854111, 26.709484],
            [89.805817, 26.707218],
            [89.793175, 26.70672],
            [89.777206, 26.704163],
            [89.762497, 26.703049],
            [89.643051, 26.715271],
            [89.631653, 26.718052],
            [89.622208, 26.723049],
            [89.618317, 26.72694],
            [89.619141, 26.732494],
            [89.643875, 26.752501],
            [89.645538, 26.757774],
            [89.6436, 26.763885],
            [89.636108, 26.771111],
            [89.596375, 26.789165],
            [89.5811, 26.795551],
            [89.571106, 26.799721],
            [89.555252, 26.805275],
            [89.5336, 26.812218],
            [89.518875, 26.811108],
            [89.488586, 26.800831],
            [89.481659, 26.799164],
            [89.468323, 26.799442],
            [89.367203, 26.85944],
            [89.360809, 26.859997],
            [89.302475, 26.852219],
            [89.297485, 26.849442],
            [89.289154, 26.842773],
            [89.278595, 26.831387],
            [89.274429, 26.828053],
            [89.262497, 26.823887],
            [89.220825, 26.81472],
            [89.199997, 26.813885],
            [89.149429, 26.818886],
            [89.126083, 26.823608],
            [89.115265, 26.826942],
            [89.11026, 26.829163],
            [89.101379, 26.834721],
            [89.098328, 26.839439],
            [89.094437, 26.851387],
            [89.092209, 26.865273],
            [89.089706, 26.875275],
            [89.087769, 26.881386],
            [89.082214, 26.891106],
            [89.078598, 26.894718],
            [89.043594, 26.918884],
            [89.034988, 26.924717],
            [89.030548, 26.927494],
            [88.947754, 26.96944],
            [88.893875, 26.975552],
            [88.869705, 27.061108],
            [88.869141, 27.073608],
            [88.866089, 27.086662],
            [88.863602, 27.091942],
            [88.860535, 27.096386],
            [88.856644, 27.099998],
            [88.826096, 27.121109],
            [88.794983, 27.141384],
            [88.789978, 27.14333],
            [88.753113, 27.148067],
            [88.751938, 27.148605],
            [88.762207, 27.184441],
            [88.798035, 27.246384],
            [88.806366, 27.253052],
            [88.816376, 27.25861],
            [88.82222, 27.26083],
            [88.834991, 27.264721],
            [88.85054, 27.266666],
            [88.885544, 27.274441],
            [88.891373, 27.276665],
            [88.901382, 27.282219],
            [88.908875, 27.28944],
            [88.913605, 27.298607],
            [88.917206, 27.314442],
            [88.917725, 27.320324],
            [88.923599, 27.345551],
            [88.935532, 27.368328],
            [88.94664, 27.385273],
            [88.954437, 27.422771],
            [88.958038, 27.438885],
            [88.963882, 27.45916],
            [88.9711, 27.473606],
            [88.984985, 27.488884],
            [89.005829, 27.505554],
            [89.010818, 27.508331],
            [89.022766, 27.512775],
            [89.049149, 27.519997],
            [89.066086, 27.527222],
            [89.08638, 27.53833],
            [89.10498, 27.550552],
            [89.125809, 27.567497],
            [89.131363, 27.575829],
            [89.128036, 27.623329],
            [89.163315, 27.67083],
            [89.169144, 27.679161],
            [89.1772, 27.692219],
            [89.181931, 27.701385],
            [89.200272, 27.738049],
            [89.217758, 27.775555],
            [89.219147, 27.78083],
            [89.22554, 27.794998],
            [89.23526, 27.806664],
            [89.243591, 27.81361],
            [89.26915, 27.827496],
            [89.359985, 27.871662],
            [89.386932, 27.915272],
            [89.398041, 27.933052],
            [89.409424, 27.949997],
            [89.450424, 28.008385],
            [89.4561, 28.01722],
            [89.467758, 28.034164],
            [89.487488, 28.057774],
            [89.586105, 28.139996],
            [89.590271, 28.14333],
            [89.623596, 28.158329],
            [89.629425, 28.160553],
            [89.688873, 28.17305],
            [89.69664, 28.174164],
            [89.718048, 28.174717],
            [89.724426, 28.174164],
            [89.746368, 28.175552],
            [89.782486, 28.188606],
            [89.792755, 28.19416],
            [89.796097, 28.198051],
            [89.836655, 28.251663],
            [89.863037, 28.271385],
            [89.996368, 28.32333],
            [90.000015, 28.324055],
            [90.017487, 28.325275],
            [90.02388, 28.324718],
            [90.178589, 28.300552],
            [90.22554, 28.290276],
            [90.248871, 28.284721],
            [90.277771, 28.277775],
            [90.295258, 28.273052],
            [90.311371, 28.26722],
            [90.327484, 28.261387],
            [90.339706, 28.259441],
            [90.353317, 28.259163],
            [90.366089, 28.257774],
            [90.381653, 28.251389],
            [90.386108, 28.248329],
            [90.3936, 28.240829],
            [90.396103, 28.23555],
            [90.398331, 28.215549],
            [90.395538, 28.198883],
            [90.393875, 28.193886],
            [90.383881, 28.175827],
            [90.374695, 28.16333],
            [90.366379, 28.150551],
            [90.356644, 28.132496],
            [90.350266, 28.112217],
            [90.351654, 28.098885],
            [90.354156, 28.093609],
            [90.357208, 28.089165],
            [90.370529, 28.080276],
            [90.382477, 28.078884],
            [90.466385, 28.071663]
          ]
        ]
      }
    }
  ]
}
';
    }
}
