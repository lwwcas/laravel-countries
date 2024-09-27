<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BA_BosniaandHerzegovina extends Seeder
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
    public $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Bosnia and Herzegovina';

        // Set the country's official name
        $this->official_name = 'Bosnia and Herzegovina';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BA';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BIH';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '070';

        // Set the international dialing code
        $this->international_phone = '387';

        // Define the languages spoken in the country
        $this->languages = ['bs', 'hr', 'sr']; // Bosnian, Croatian, Serbian are official languages

        // Define the top-level domain(s)
        $this->tld = ['.ba'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '72%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agency for Information Society of Bosnia and Herzegovina';

        // List popular web technologies in Bosnia and Herzegovina
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Java'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BK';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3277605';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Bosnia and Herzegovina convertible mark',
            // Currency code
            'code' => 'BAM',
            // Currency symbol
            'symbol' => 'KM',
            // Main unit
            'main_unit' => 'convertible mark',
            // Subunit
            'sub_unit' => 'fening',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '2', '5'],
            // Subunit coins
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 3280819; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 51197; // km²

        // Set the capital city
        $this->capital = 'Sarajevo';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Europe/Sarajevo',
            // Standard time offset
            'standard_time' => 'UTC+1', // Central European Time
            // Daylight saving time offset
            'daylight_saving_time' => 'UTC+2', // Central European Summer Time
        ];

        // Set the independence day
        $this->independence_day = '1992-03-01'; // Date of independence referendum

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Council of Europe',
            'OSCE',
            'CEFTA',
            'Partnership for Peace',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 20.16; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Islam', 'Orthodox Christianity', 'Catholicism']; // Predominant religions

        // Describe the form of government
        $this->government = 'Federal parliamentary constitutional republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Croatia', 'iso_alpha_2' => 'HR'],
            ['name' => 'Serbia', 'iso_alpha_2' => 'RS'],
            ['name' => 'Montenegro', 'iso_alpha_2' => 'ME'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇦',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1E6',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1E6;',
            // CSS entities
            'css' => '\\1F1E7\\1F1E6',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127462;',
            // Direct UTF-8 string
            'utf8' => '🇧🇦',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDE6',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ba:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1E6;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002395',
                // RGB color values
                'rgb' => '0,35,149',
                // CMYK color values
                'cmyk' => '100,76,0,42',
                // HSL color values
                'hsl' => '226,100%,29%',
                // HSV color values
                'hsv' => '226,100%,58%',
                // Pantone color code
                'pantone' => 'Pantone 286 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FCD116',
                // RGB color values
                'rgb' => '252,209,22',
                // CMYK color values
                'cmyk' => '0,17,91,1',
                // HSL color values
                'hsl' => '48,98%,54%',
                // HSV color values
                'hsv' => '48,91%,99%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
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
            'latitude' => '43.8563',
            // Longitude in decimal degrees
            'longitude' => '18.4131',
            // Degrees with decimal
            'dd' => '43.8563° N, 18.4131° E',
            // Degrees, minutes, seconds
            'dms' => '43°51\'22.68" N, 18°24\'47.16" E',
            // Degrees and decimal minutes
            'dm' => '43°51.378\' N, 18°24.786\' E',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N43°51\'22.68", E18°24\'47.16"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], dd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '43°51\'22.68"N, 18°24\'47.16"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]dd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '43 51 22.68, 18 24 47.16',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '435122.68, 0182447.16',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]dd.dddd',
                    // Coordinates in this format
                    'coordinates' => '43.8563 18.4131',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]dd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '43.85630°,18.41310°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]dd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '43.8563000N18.4131000E',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]ddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '4351.378N01824.786E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], dd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '43°51\'22.68"N, 18°24\'47.16"E',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]ddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '435122.68N0182447.16E',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] dd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 43 51.378 E 18 24.786',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '43:51:22N,18:24:47E',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '43:51:22.68N 18:24:47.16E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '43°51\'22"N 18°24\'47"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '43°51\'22" 18°24\'47"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '43d 51\' 22" N 18d 24\' 47" E',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '43.8563N 18.4131E',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '43° 51.378, 18° 24.786',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '4351.378, 1824.786',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '4351.378N, 1824.786E',
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
      "properties": { "cca2": "ba" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [17.649841, 42.889076],
            [17.578526, 42.943825],
            [17.668331, 42.960548],
            [17.676666, 42.963333],
            [17.683609, 42.967216],
            [17.688015, 42.974609],
            [17.680832, 42.992775],
            [17.670555, 43.016663],
            [17.664719, 43.02916],
            [17.659164, 43.039444],
            [17.649719, 43.054993],
            [17.643055, 43.063889],
            [17.630276, 43.076942],
            [17.589443, 43.102219],
            [17.571388, 43.112221],
            [17.559166, 43.117775],
            [17.434719, 43.179443],
            [17.309444, 43.270554],
            [17.298054, 43.28083],
            [17.289719, 43.296944],
            [17.285553, 43.30722],
            [17.279163, 43.325272],
            [17.277222, 43.332771],
            [17.256107, 43.414444],
            [17.257221, 43.422775],
            [17.261944, 43.428604],
            [17.270275, 43.436386],
            [17.271942, 43.444443],
            [17.271111, 43.448608],
            [17.269444, 43.451942],
            [17.261665, 43.459717],
            [17.247776, 43.46833],
            [17.223331, 43.47805],
            [17.160275, 43.497772],
            [17.114998, 43.506943],
            [17.098331, 43.513611],
            [17.071388, 43.526382],
            [17.059719, 43.531944],
            [17.046387, 43.54055],
            [16.976387, 43.586105],
            [16.95583, 43.603333],
            [16.937496, 43.621666],
            [16.82972, 43.725555],
            [16.711941, 43.826385],
            [16.707222, 43.84111],
            [16.701385, 43.850555],
            [16.696663, 43.85611],
            [16.650276, 43.908051],
            [16.642498, 43.916382],
            [16.53722, 44.013611],
            [16.52972, 44.017776],
            [16.516109, 44.021942],
            [16.504719, 44.023048],
            [16.463608, 44.026665],
            [16.438889, 44.031944],
            [16.426666, 44.036942],
            [16.415554, 44.043327],
            [16.354721, 44.081665],
            [16.338886, 44.09333],
            [16.32972, 44.104164],
            [16.323055, 44.11805],
            [16.322498, 44.122215],
            [16.316944, 44.135826],
            [16.309444, 44.148605],
            [16.302219, 44.157219],
            [16.280277, 44.176941],
            [16.264999, 44.189438],
            [16.249294, 44.196732],
            [16.238052, 44.198326],
            [16.214443, 44.197495],
            [16.199165, 44.195274],
            [16.172222, 44.192215],
            [16.16, 44.192772],
            [16.149998, 44.194443],
            [16.145554, 44.196663],
            [16.143055, 44.19944],
            [16.14333, 44.204163],
            [16.191944, 44.313889],
            [16.198055, 44.353607],
            [16.133331, 44.486107],
            [16.126389, 44.498604],
            [16.119164, 44.506943],
            [16.111664, 44.511383],
            [16.074165, 44.530548],
            [16.033333, 44.574165],
            [16.010555, 44.616943],
            [15.961666, 44.693886],
            [15.956944, 44.699997],
            [15.943888, 44.708611],
            [15.939444, 44.710548],
            [15.92861, 44.712219],
            [15.874998, 44.710274],
            [15.864166, 44.711388],
            [15.858889, 44.712494],
            [15.854721, 44.714439],
            [15.7675, 44.776108],
            [15.759998, 44.783882],
            [15.742222, 44.803604],
            [15.736944, 44.812492],
            [15.736387, 44.81694],
            [15.738888, 44.824165],
            [15.74361, 44.829994],
            [15.769165, 44.922775],
            [15.764999, 45.056389],
            [15.764721, 45.073608],
            [15.765554, 45.082222],
            [15.781111, 45.161942],
            [15.786665, 45.171944],
            [15.794167, 45.179993],
            [15.8025, 45.188049],
            [15.81111, 45.195549],
            [15.823332, 45.205276],
            [15.834166, 45.211937],
            [15.8825, 45.222496],
            [15.924999, 45.22805],
            [15.936666, 45.228607],
            [16.015274, 45.21833],
            [16.023052, 45.214996],
            [16.03611, 45.205826],
            [16.109444, 45.130829],
            [16.116108, 45.121666],
            [16.19722, 45.044441],
            [16.209721, 45.034439],
            [16.220276, 45.028328],
            [16.248055, 45.014999],
            [16.263885, 45.008331],
            [16.291759, 44.999115],
            [16.342712, 45.0009],
            [16.351208, 45.003586],
            [16.357018, 45.008499],
            [16.359699, 45.016548],
            [16.366402, 45.042023],
            [16.417805, 45.12426],
            [16.476387, 45.185829],
            [16.502277, 45.209633],
            [16.508537, 45.214546],
            [16.526386, 45.224442],
            [16.530437, 45.226173],
            [16.541164, 45.227066],
            [16.589882, 45.230194],
            [16.601952, 45.230194],
            [16.629662, 45.22081],
            [16.662777, 45.210274],
            [16.682777, 45.204994],
            [16.812496, 45.187492],
            [16.824444, 45.187492],
            [16.83839, 45.190414],
            [16.845989, 45.194435],
            [16.846882, 45.198456],
            [16.846436, 45.202034],
            [16.913925, 45.265945],
            [17.036388, 45.227219],
            [17.040276, 45.212494],
            [17.04361, 45.206108],
            [17.049999, 45.201385],
            [17.07111, 45.188332],
            [17.177219, 45.148605],
            [17.188332, 45.148048],
            [17.230553, 45.14666],
            [17.240555, 45.148605],
            [17.246666, 45.153053],
            [17.282497, 45.176384],
            [17.48111, 45.131104],
            [17.484444, 45.11805],
            [17.483887, 45.111107],
            [17.494164, 45.109993],
            [17.519554, 45.109512],
            [17.596386, 45.108887],
            [17.689999, 45.122772],
            [17.758053, 45.086662],
            [17.832775, 45.05555],
            [17.851944, 45.049438],
            [17.863888, 45.048332],
            [17.873608, 45.050278],
            [17.912498, 45.068054],
            [17.933052, 45.080276],
            [18.070274, 45.104439],
            [18.110832, 45.086105],
            [18.119999, 45.083328],
            [18.130276, 45.082222],
            [18.166943, 45.078606],
            [18.179165, 45.077774],
            [18.197498, 45.081665],
            [18.205555, 45.084999],
            [18.212776, 45.088882],
            [18.218052, 45.095276],
            [18.217499, 45.102219],
            [18.212776, 45.107773],
            [18.210278, 45.114716],
            [18.211388, 45.123329],
            [18.216663, 45.129715],
            [18.233055, 45.135826],
            [18.251942, 45.138885],
            [18.269722, 45.136665],
            [18.419167, 45.108887],
            [18.634163, 45.083328],
            [18.794167, 44.997215],
            [18.79583, 44.989998],
            [18.800831, 44.949715],
            [18.797775, 44.942215],
            [18.789997, 44.938889],
            [18.780552, 44.940277],
            [18.773609, 44.944443],
            [18.763885, 44.945],
            [18.761108, 44.938889],
            [18.768055, 44.915833],
            [18.788055, 44.899719],
            [18.794167, 44.894997],
            [18.834442, 44.86805],
            [18.841389, 44.863609],
            [18.849998, 44.860832],
            [18.861111, 44.858604],
            [18.957222, 44.85305],
            [18.96833, 44.853607],
            [19.02972, 44.860275],
            [19.039719, 44.861382],
            [19.121109, 44.901382],
            [19.168053, 44.921387],
            [19.177219, 44.923607],
            [19.188053, 44.923332],
            [19.299442, 44.910271],
            [19.310276, 44.908607],
            [19.371387, 44.88916],
            [19.381622, 44.866577],
            [19.382774, 44.863052],
            [19.345833, 44.769165],
            [19.344612, 44.766304],
            [19.336109, 44.747215],
            [19.31361, 44.70472],
            [19.193981, 44.560158],
            [19.135883, 44.524864],
            [19.128136, 44.521423],
            [19.123402, 44.514542],
            [19.105553, 44.376663],
            [19.104443, 44.355827],
            [19.127705, 44.316574],
            [19.130276, 44.313889],
            [19.158054, 44.28833],
            [19.161705, 44.286011],
            [19.165833, 44.284439],
            [19.234867, 44.265358],
            [19.239998, 44.264999],
            [19.357952, 44.209412],
            [19.485832, 44.120277],
            [19.596943, 44.060272],
            [19.617031, 44.054909],
            [19.61972, 44.052216],
            [19.620476, 44.048454],
            [19.621765, 44.021767],
            [19.619442, 44.018883],
            [19.616173, 44.016602],
            [19.532249, 43.962379],
            [19.524502, 43.958939],
            [19.514175, 43.958076],
            [19.485275, 43.958885],
            [19.428532, 43.960655],
            [19.374165, 43.965553],
            [19.365833, 43.969162],
            [19.359722, 43.974159],
            [19.355274, 43.979721],
            [19.351498, 43.981743],
            [19.311108, 43.996941],
            [19.30674, 43.998528],
            [19.244335, 44.01445],
            [19.239441, 44.01416],
            [19.237019, 44.011009],
            [19.237019, 44.002831],
            [19.251221, 43.962379],
            [19.366943, 43.859444],
            [19.437496, 43.800278],
            [19.475277, 43.772774],
            [19.487499, 43.763329],
            [19.492775, 43.753609],
            [19.498333, 43.740273],
            [19.500832, 43.733887],
            [19.505554, 43.718887],
            [19.50972, 43.700272],
            [19.510277, 43.69194],
            [19.51083, 43.679718],
            [19.493889, 43.588051],
            [19.480553, 43.571388],
            [19.408607, 43.584442],
            [19.287498, 43.544167],
            [19.228809, 43.513214],
            [19.223888, 43.516388],
            [19.211666, 43.52166],
            [19.011665, 43.556107],
            [19.006664, 43.555832],
            [18.951664, 43.512497],
            [18.949444, 43.509438],
            [18.948608, 43.505272],
            [18.949718, 43.496941],
            [18.95583, 43.458328],
            [18.956665, 43.454437],
            [18.960278, 43.452499],
            [18.976944, 43.453049],
            [18.988609, 43.452499],
            [18.998608, 43.449997],
            [19.011387, 43.444717],
            [19.023052, 43.435555],
            [19.027496, 43.429161],
            [19.093609, 43.308884],
            [19.09222, 43.301666],
            [19.078888, 43.262497],
            [19.07222, 43.248055],
            [19.068607, 43.241386],
            [19.06583, 43.238884],
            [19.054996, 43.232498],
            [19.048866, 43.231026],
            [19.016666, 43.239441],
            [18.956921, 43.290833],
            [18.954441, 43.29361],
            [18.951942, 43.300278],
            [18.954166, 43.308884],
            [18.960545, 43.318924],
            [18.960293, 43.326683],
            [18.957497, 43.329163],
            [18.91972, 43.357216],
            [18.914238, 43.358315],
            [18.908607, 43.35833],
            [18.888332, 43.356384],
            [18.873325, 43.354691],
            [18.83934, 43.348022],
            [18.706665, 43.260277],
            [18.699997, 43.255554],
            [18.697777, 43.252495],
            [18.645832, 43.147217],
            [18.643887, 43.13916],
            [18.644997, 43.13166],
            [18.650555, 43.122215],
            [18.65361, 43.115273],
            [18.657776, 43.09166],
            [18.659164, 43.080276],
            [18.657776, 43.071938],
            [18.651665, 43.047493],
            [18.649998, 43.044167],
            [18.647221, 43.041382],
            [18.640831, 43.037216],
            [18.631664, 43.034439],
            [18.57972, 43.02916],
            [18.552219, 43.022774],
            [18.535553, 43.01722],
            [18.524441, 43.012215],
            [18.508888, 43.000549],
            [18.497219, 42.990273],
            [18.483887, 42.971939],
            [18.480553, 42.964439],
            [18.478611, 42.956383],
            [18.454441, 42.833328],
            [18.455555, 42.825554],
            [18.457222, 42.82222],
            [18.490833, 42.766388],
            [18.515831, 42.73111],
            [18.518608, 42.728607],
            [18.526386, 42.724442],
            [18.535553, 42.722221],
            [18.546665, 42.720833],
            [18.551388, 42.719162],
            [18.558052, 42.715271],
            [18.560276, 42.712219],
            [18.561665, 42.70916],
            [18.576385, 42.663055],
            [18.577499, 42.654999],
            [18.574444, 42.643326],
            [18.570553, 42.635826],
            [18.56583, 42.630554],
            [18.549999, 42.619438],
            [18.536663, 42.610832],
            [18.463886, 42.569443],
            [18.455555, 42.565826],
            [18.411942, 42.606384],
            [18.397499, 42.614441],
            [18.362499, 42.626663],
            [18.346664, 42.629166],
            [18.335278, 42.628883],
            [18.311665, 42.619438],
            [18.302498, 42.616943],
            [18.288055, 42.614441],
            [18.276943, 42.615555],
            [18.268608, 42.618332],
            [18.264999, 42.620277],
            [18.231941, 42.64222],
            [18.221943, 42.648888],
            [18.160553, 42.695],
            [17.998886, 42.761383],
            [17.98222, 42.768051],
            [17.959999, 42.77916],
            [17.882774, 42.81916],
            [17.876663, 42.823608],
            [17.8475, 42.856667],
            [17.845276, 42.859718],
            [17.84111, 42.870277],
            [17.797497, 42.903885],
            [17.744442, 42.920273],
            [17.714996, 42.926941],
            [17.698055, 42.927216],
            [17.687775, 42.921661],
            [17.684444, 42.918884],
            [17.649841, 42.889076]
          ]
        ]
      }
    }
  ]
}
';
    }
}
