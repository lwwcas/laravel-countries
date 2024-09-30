<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class KH_Cambodia extends CountrySeeder
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
        $this->name = 'Cambodia';

        // Set the country's official name
        $this->official_name = 'Kingdom of Cambodia';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'KH';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'KHM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '116';

        // Set the international dialing code
        $this->international_phone = '855';

        // Define the languages spoken in the country
        $this->languages = ['km']; // Khmer is the official language

        // Define the top-level domain(s)
        $this->tld = ['.kh'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '40%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Cambodia Computer Emergency Response Team (CamCERT)';

        // List popular web technologies in Cambodia
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'CB';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1831722';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Cambodian riel',
            // Currency code
            'code' => 'KHR',
            // Currency symbol
            'symbol' => '៛',
            // Main unit
            'main_unit' => 'riel',
            // Subunit
            'sub_unit' => 'sen',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['50', '100', '500', '1000', '2000', '5000', '10,000', '20,000', '50,000', '100,000'],
            // Main coins
            'coins_main' => ['50', '100', '200', '500'],
            // Subunit coins
            'coins_sub' => ['5', '10', '20'],
        ];

        // Set the population
        $this->population = 16718971; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 181035; // km²

        // Set the capital city
        $this->capital = 'Phnom Penh';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Phnom_Penh',
                // Standard time offset
                'standard_time' => 'UTC+7',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1953-11-09'; // Independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Association of Southeast Asian Nations (ASEAN)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Non-Aligned Movement',
            'East Asia Summit (EAS)',
            'Organisation Internationale de la Francophonie',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 26.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Theravada Buddhism',
        ];

        // Describe the form of government
        $this->government = 'Unitary dominant-party parliamentary elective constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Khmer traditional wrestling and Bokator';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Thailand', 'iso_alpha_2' => 'TH'],
            ['name' => 'Laos', 'iso_alpha_2' => 'LA'],
            ['name' => 'Vietnam', 'iso_alpha_2' => 'VN'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇰🇭',
            // Unicode code points
            'uCode' => 'U+1F1F0 U+1F1ED',
            // HTML entities
            'html' => '&#x1F1F0;&#x1F1ED;',
            // CSS entities
            'css' => '\\1F1F0\\1F1ED',
            // Decimal Unicode entities
            'decimal' => '&#127472;&#127469;',
            // Direct UTF-8 string
            'utf8' => '🇰🇭',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF0\uD83C\uDDED',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-kh:',
            // Hexadecimal entity
            'hex' => '&#x1F1F0;&#x1F1ED;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#A50034',
                // RGB color values
                'rgb' => '165,0,52',
                // CMYK color values
                'cmyk' => '0,100,68,35',
                // HSL color values
                'hsl' => '343°,100%,32%',
                // HSV color values
                'hsv' => '343°,100%,65%',
                // Pantone color code
                'pantone' => '200 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#032EA1',
                // RGB color values
                'rgb' => '3,46,161',
                // CMYK color values
                'cmyk' => '98,71,0,37',
                // HSL color values
                'hsl' => '226°,96%,32%',
                // HSV color values
                'hsv' => '226°,98%,63%',
                // Pantone color code
                'pantone' => '287 C',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '12.5657',
            // Longitude in decimal degrees
            'longitude' => '104.9910',
            // Degrees with decimal
            'dd' => '12.5657° N, 104.9910° E',
            // Degrees, minutes, seconds
            'dms' => '12°33\'56.52" N, 104°59\'27.60" E',
            // Degrees and decimal minutes
            'dm' => '12°33.942\' N, 104°59.460\' E',
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
      "properties": { "cca2": "kh" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [103.775253, 10.442497],
              [103.771652, 10.442221],
              [103.765266, 10.447777],
              [103.753311, 10.464165],
              [103.748581, 10.476387],
              [103.755814, 10.511665],
              [103.757751, 10.513611],
              [103.760803, 10.514999],
              [103.781952, 10.5147],
              [103.7883, 10.51333],
              [103.793297, 10.51028],
              [103.798859, 10.5],
              [103.799973, 10.492775],
              [103.80246, 10.46722],
              [103.803017, 10.459442],
              [103.80246, 10.45583],
              [103.799698, 10.45083],
              [103.775253, 10.442497]
            ]
          ],
          [
            [
              [103.314148, 10.723053],
              [103.315262, 10.719442],
              [103.315811, 10.706665],
              [103.310257, 10.698053],
              [103.30748, 10.695831],
              [103.269707, 10.66972],
              [103.261108, 10.69639],
              [103.256378, 10.709721],
              [103.253052, 10.715832],
              [103.247208, 10.718887],
              [103.243042, 10.719997],
              [103.226929, 10.71722],
              [103.222763, 10.717775],
              [103.216377, 10.720552],
              [103.211647, 10.725275],
              [103.193314, 10.756388],
              [103.197479, 10.76639],
              [103.202209, 10.771666],
              [103.209427, 10.777222],
              [103.213318, 10.778055],
              [103.245247, 10.779444],
              [103.251663, 10.776665],
              [103.25444, 10.774721],
              [103.31192, 10.725275],
              [103.314148, 10.723053]
            ]
          ],
          [
            [
              [103.02803, 11.24639],
              [103.024689, 11.245552],
              [103.021637, 11.246109],
              [103.005249, 11.250555],
              [102.996918, 11.25444],
              [102.995506, 11.257221],
              [102.986908, 11.274443],
              [102.978027, 11.38666],
              [102.978027, 11.398609],
              [102.981079, 11.411665],
              [102.986359, 11.42222],
              [103.012482, 11.421665],
              [103.015259, 11.420553],
              [103.02359, 11.412777],
              [103.030457, 11.403107],
              [103.034409, 11.396387],
              [103.041924, 11.37555],
              [103.04274, 11.36833],
              [103.048309, 11.306108],
              [103.047203, 11.295277],
              [103.044418, 11.28611],
              [103.033577, 11.252777],
              [103.032471, 11.25],
              [103.030533, 11.248053],
              [103.02803, 11.24639]
            ]
          ],
          [
            [
              [103.032753, 11.431942],
              [103.023857, 11.42472],
              [102.995506, 11.506109],
              [102.995796, 11.516943],
              [102.997467, 11.519444],
              [102.999687, 11.521387],
              [103.009407, 11.525],
              [103.013603, 11.525],
              [103.016373, 11.523888],
              [103.01886, 11.522221],
              [103.034126, 11.509165],
              [103.035522, 11.50694],
              [103.043854, 11.476109],
              [103.045517, 11.469719],
              [103.046356, 11.458609],
              [103.044968, 11.448053],
              [103.040527, 11.440554],
              [103.032753, 11.431942]
            ]
          ],
          [
            [
              [107.489151, 14.44861],
              [107.483597, 14.438053],
              [107.478317, 14.43083],
              [107.472214, 14.424721],
              [107.46666, 14.42222],
              [107.459991, 14.42055],
              [107.452477, 14.421387],
              [107.447746, 14.424721],
              [107.446091, 14.42722],
              [107.443039, 14.436386],
              [107.440811, 14.438053],
              [107.434418, 14.440275],
              [107.430817, 14.43972],
              [107.416092, 14.429443],
              [107.409149, 14.420277],
              [107.378036, 14.352776],
              [107.37442, 14.339998],
              [107.374687, 14.328331],
              [107.386658, 14.307775],
              [107.389977, 14.295277],
              [107.389977, 14.283333],
              [107.385818, 14.247498],
              [107.383614, 14.233608],
              [107.363876, 14.171944],
              [107.357483, 14.1575],
              [107.349716, 14.144999],
              [107.343323, 14.130831],
              [107.34166, 14.124441],
              [107.34166, 14.113331],
              [107.369141, 14.023054],
              [107.371918, 14.017776],
              [107.380814, 14.006388],
              [107.385269, 14.002777],
              [107.473495, 13.931707],
              [107.470261, 13.841387],
              [107.464188, 13.794365],
              [107.588593, 13.595276],
              [107.62886, 13.542776],
              [107.629646, 13.5333],
              [107.636383, 13.381664],
              [107.606461, 13.31134],
              [107.483322, 13.02055],
              [107.491928, 12.955832],
              [107.493042, 12.94916],
              [107.508041, 12.888887],
              [107.510818, 12.87944],
              [107.519707, 12.864164],
              [107.556091, 12.823053],
              [107.561371, 12.81611],
              [107.565811, 12.808332],
              [107.569443, 12.795832],
              [107.593048, 12.603886],
              [107.595261, 12.554443],
              [107.555817, 12.373608],
              [107.548866, 12.35639],
              [107.547493, 12.353609],
              [107.534149, 12.33861],
              [107.450272, 12.26028],
              [107.440811, 12.25361],
              [107.434143, 12.251944],
              [107.430527, 12.252371],
              [107.423393, 12.253494],
              [107.397774, 12.287777],
              [107.378311, 12.312777],
              [107.361649, 12.32861],
              [107.356644, 12.331942],
              [107.350273, 12.333609],
              [107.346367, 12.333054],
              [107.296371, 12.322775],
              [107.238586, 12.30361],
              [107.189972, 12.28722],
              [107.166931, 12.277777],
              [107.1586, 12.26972],
              [107.110809, 12.21583],
              [107.08194, 12.177776],
              [107.052757, 12.139442],
              [106.981369, 12.086109],
              [106.968048, 12.078886],
              [106.955833, 12.07472],
              [106.924149, 12.06583],
              [106.909714, 12.06389],
              [106.897774, 12.064444],
              [106.856934, 12.067221],
              [106.7892, 12.073462],
              [106.747101, 12],
              [106.734131, 11.979998],
              [106.730263, 11.97583],
              [106.719971, 11.969719],
              [106.698578, 11.962776],
              [106.640808, 11.961388],
              [106.637756, 11.962219],
              [106.631638, 11.972219],
              [106.62941, 11.974165],
              [106.622467, 11.975554],
              [106.447189, 11.98222],
              [106.443573, 11.981941],
              [106.420242, 11.973608],
              [106.418854, 11.97166],
              [106.421173, 11.965351],
              [106.461357, 11.885],
              [106.450256, 11.821665],
              [106.446907, 11.812777],
              [106.437737, 11.79361],
              [106.448303, 11.709721],
              [106.458214, 11.665863],
              [106.417191, 11.676109],
              [106.323593, 11.679998],
              [106.309692, 11.677776],
              [106.305527, 11.677776],
              [106.300247, 11.68055],
              [106.296356, 11.68444],
              [106.278847, 11.703609],
              [106.269417, 11.71833],
              [106.265533, 11.722775],
              [106.260803, 11.72639],
              [106.086357, 11.772221],
              [106.079971, 11.773888],
              [106.054688, 11.777222],
              [106.046356, 11.777222],
              [106.039139, 11.776388],
              [106.03331, 11.77417],
              [106.028313, 11.77083],
              [106.023033, 11.76417],
              [106.020523, 11.75861],
              [106.017197, 11.745831],
              [106.016373, 11.726664],
              [106.012192, 11.714443],
              [105.97052, 11.65111],
              [105.964417, 11.644722],
              [105.961906, 11.64305],
              [105.948303, 11.640276],
              [105.941643, 11.64194],
              [105.926643, 11.65111],
              [105.924683, 11.65333],
              [105.912483, 11.661388],
              [105.904419, 11.665276],
              [105.891922, 11.669443],
              [105.881073, 11.67055],
              [105.869133, 11.670277],
              [105.85524, 11.663887],
              [105.851067, 11.66],
              [105.816437, 11.617456],
              [105.819077, 11.594013],
              [105.871078, 11.558609],
              [105.877747, 11.553053],
              [105.881912, 11.545277],
              [105.883873, 11.53889],
              [105.900528, 11.44528],
              [105.901642, 11.438332],
              [105.899139, 11.42889],
              [105.883034, 11.364164],
              [105.871078, 11.30722],
              [105.86969, 11.296944],
              [105.871902, 11.29139],
              [105.929962, 11.220276],
              [105.948578, 11.2025],
              [106.104424, 11.083887],
              [106.123581, 11.081665],
              [106.125237, 11.084164],
              [106.129677, 11.087776],
              [106.132187, 11.089165],
              [106.151917, 11.093887],
              [106.159126, 11.093887],
              [106.181351, 11.067776],
              [106.190804, 11.053053],
              [106.192734, 11.046944],
              [106.214417, 10.975554],
              [106.213028, 10.972775],
              [106.21109, 10.97083],
              [106.20903, 10.970087],
              [106.18663, 10.974998],
              [106.165802, 10.977776],
              [106.15802, 10.976942],
              [106.152763, 10.974442],
              [106.149406, 10.969442],
              [106.148033, 10.962776],
              [106.145523, 10.923332],
              [106.145813, 10.915554],
              [106.176643, 10.870552],
              [106.203308, 10.770554],
              [106.082199, 10.802776],
              [105.959976, 10.882498],
              [105.858307, 10.916666],
              [105.783577, 11.01916],
              [105.779137, 11.022776],
              [105.7547, 11.020832],
              [105.737473, 11.017776],
              [105.724983, 11.014166],
              [105.719131, 11.01194],
              [105.708588, 11.006388],
              [105.694687, 10.995831],
              [105.68718, 10.991108],
              [105.635529, 10.969997],
              [105.588531, 10.959713],
              [105.554688, 10.953053],
              [105.527763, 10.94722],
              [105.524292, 10.94577],
              [105.43663, 10.966665],
              [105.432739, 10.966942],
              [105.427193, 10.96472],
              [105.374969, 10.903887],
              [105.369423, 10.897221],
              [105.364967, 10.889721],
              [105.358856, 10.871664],
              [105.300247, 10.875553],
              [105.233856, 10.889721],
              [105.206093, 10.899443],
              [105.191742, 10.906118],
              [105.109131, 10.955553],
              [105.101913, 10.955553],
              [105.096077, 10.953053],
              [105.061081, 10.920277],
              [105.049957, 10.906939],
              [105.043579, 10.901388],
              [105.039139, 10.893888],
              [105.037193, 10.88389],
              [105.037193, 10.879997],
              [105.038567, 10.873608],
              [105.049133, 10.843887],
              [105.061081, 10.823608],
              [105.091919, 10.750832],
              [105.09552, 10.74222],
              [105.099701, 10.72639],
              [105.099701, 10.722219],
              [105.098022, 10.715832],
              [105.094704, 10.711109],
              [105.090263, 10.707499],
              [105.068314, 10.69722],
              [105.051643, 10.68972],
              [104.987747, 10.656387],
              [104.977463, 10.650555],
              [104.961357, 10.638332],
              [104.947456, 10.624165],
              [104.939133, 10.611942],
              [104.929688, 10.593609],
              [104.918297, 10.576942],
              [104.898323, 10.548332],
              [104.890533, 10.539999],
              [104.883873, 10.534443],
              [104.871902, 10.526388],
              [104.856079, 10.521944],
              [104.844971, 10.520832],
              [104.801071, 10.519999],
              [104.770523, 10.521944],
              [104.733032, 10.525],
              [104.715469, 10.528482],
              [104.701683, 10.531185],
              [104.675247, 10.536386],
              [104.664413, 10.5375],
              [104.598587, 10.53416],
              [104.595253, 10.53333],
              [104.592743, 10.531666],
              [104.571373, 10.508888],
              [104.561081, 10.49472],
              [104.55275, 10.475275],
              [104.551071, 10.46889],
              [104.545242, 10.458332],
              [104.487747, 10.422775],
              [104.445328, 10.42274],
              [104.346077, 10.492775],
              [104.276367, 10.543331],
              [104.253311, 10.56527],
              [104.250809, 10.566666],
              [104.247742, 10.567497],
              [104.163857, 10.561665],
              [104.127747, 10.557775],
              [104.097473, 10.547499],
              [104.089973, 10.54805],
              [104.032471, 10.559443],
              [104.004967, 10.566942],
              [103.935242, 10.586109],
              [103.92691, 10.590275],
              [103.830544, 10.549999],
              [103.823593, 10.540833],
              [103.804695, 10.53133],
              [103.758553, 10.53196],
              [103.738022, 10.496386],
              [103.734703, 10.49555],
              [103.646942, 10.486942],
              [103.63916, 10.487497],
              [103.630539, 10.490831],
              [103.623306, 10.49555],
              [103.521652, 10.604443],
              [103.516083, 10.638054],
              [103.553848, 10.708887],
              [103.559402, 10.715553],
              [103.5672, 10.719997],
              [103.588303, 10.73111],
              [103.684387, 10.740566],
              [103.668579, 10.753332],
              [103.664413, 10.757221],
              [103.663017, 10.760555],
              [103.674133, 10.796665],
              [103.678574, 10.804443],
              [103.682739, 10.808609],
              [103.688293, 10.81111],
              [103.695236, 10.81222],
              [103.70636, 10.8175],
              [103.715263, 10.828886],
              [103.719421, 10.844442],
              [103.721909, 10.866108],
              [103.719421, 10.8875],
              [103.711906, 10.9125],
              [103.666641, 11.027777],
              [103.563858, 11.14944],
              [103.557739, 11.155277],
              [103.555237, 11.156942],
              [103.545807, 11.159721],
              [103.515259, 11.16055],
              [103.504967, 11.157499],
              [103.4758, 11.13194],
              [103.451637, 11.095831],
              [103.434128, 11.01916],
              [103.411636, 10.943888],
              [103.348862, 10.884722],
              [103.176651, 10.864719],
              [103.170258, 10.866386],
              [103.149719, 10.874165],
              [103.1297, 10.88305],
              [103.098038, 10.924999],
              [103.095543, 10.93055],
              [103.094704, 10.937777],
              [103.09581, 10.944443],
              [103.099411, 10.953053],
              [103.109413, 10.966942],
              [103.116913, 11.111942],
              [103.115517, 11.146666],
              [103.111359, 11.158609],
              [103.095253, 11.19916],
              [103.089973, 11.209997],
              [103.101357, 11.348608],
              [103.07637, 11.442497],
              [103.028847, 11.541943],
              [102.978302, 11.528887],
              [102.974693, 11.529165],
              [102.971359, 11.53],
              [102.967468, 11.53416],
              [102.959976, 11.543055],
              [102.957199, 11.54805],
              [102.95636, 11.551388],
              [102.971825, 11.564582],
              [102.981071, 11.574039],
              [102.98494, 11.59016],
              [102.983864, 11.617455],
              [102.969681, 11.636585],
              [102.964142, 11.669443],
              [102.966637, 11.675276],
              [102.986076, 11.700275],
              [102.98996, 11.70416],
              [102.994957, 11.7075],
              [103.018044, 11.719997],
              [103.021713, 11.720739],
              [103.026108, 11.71921],
              [103.064003, 11.70218],
              [103.070534, 11.705276],
              [103.078033, 11.710276],
              [103.083862, 11.720276],
              [103.084412, 11.723886],
              [103.082748, 11.72639],
              [103.0233, 11.72889],
              [103.005814, 11.726109],
              [102.99913, 11.72416],
              [102.99585, 11.722387],
              [102.980263, 11.71083],
              [102.977753, 11.709442],
              [102.975517, 11.710554],
              [102.969658, 11.732904],
              [102.957405, 11.756529],
              [102.915802, 11.796],
              [102.915527, 11.800276],
              [102.9133, 11.80639],
              [102.898323, 11.828331],
              [102.895813, 11.82972],
              [102.893044, 11.828054],
              [102.891922, 11.824999],
              [102.893044, 11.818054],
              [102.906937, 11.787411],
              [102.929962, 11.77],
              [102.948303, 11.755833],
              [102.956627, 11.739998],
              [102.96608, 11.721109],
              [102.966919, 11.718054],
              [102.959145, 11.682151],
              [102.956352, 11.659798],
              [102.960648, 11.642174],
              [102.967743, 11.599165],
              [102.964691, 11.587776],
              [102.959137, 11.57333],
              [102.957474, 11.570831],
              [102.954422, 11.56972],
              [102.93718, 11.588886],
              [102.934128, 11.593887],
              [102.916092, 11.635851],
              [102.921913, 11.641388],
              [102.924683, 11.65083],
              [102.924973, 11.654444],
              [102.924683, 11.661943],
              [102.916924, 11.739164],
              [102.913857, 11.752222],
              [102.908859, 11.763611],
              [102.904968, 11.771944],
              [102.898422, 11.77888],
              [102.886917, 11.786943],
              [102.852753, 11.828886],
              [102.847473, 11.835831],
              [102.842743, 11.84722],
              [102.720543, 12.15361],
              [102.716377, 12.16555],
              [102.716087, 12.173054],
              [102.717209, 12.195553],
              [102.741364, 12.36305],
              [102.745247, 12.371109],
              [102.752213, 12.38028],
              [102.787781, 12.415852],
              [102.779427, 12.45194],
              [102.636108, 12.60111],
              [102.631363, 12.604719],
              [102.578323, 12.640833],
              [102.573318, 12.643888],
              [102.564423, 12.647221],
              [102.538307, 12.649721],
              [102.524147, 12.655832],
              [102.516937, 12.66055],
              [102.512207, 12.665],
              [102.507217, 12.67222],
              [102.503883, 12.680832],
              [102.501389, 12.690832],
              [102.501938, 12.698053],
              [102.50499, 12.73472],
              [102.508614, 12.739164],
              [102.521652, 12.750795],
              [102.523613, 12.756666],
              [102.531097, 12.785],
              [102.534149, 12.798054],
              [102.534988, 12.805277],
              [102.492477, 12.976664],
              [102.417213, 13.116941],
              [102.398331, 13.15472],
              [102.391937, 13.16861],
              [102.347763, 13.271666],
              [102.345543, 13.277498],
              [102.346367, 13.28889],
              [102.350098, 13.29897],
              [102.352768, 13.306665],
              [102.353317, 13.313887],
              [102.356087, 13.379164],
              [102.359711, 13.49305],
              [102.359993, 13.500832],
              [102.377197, 13.573887],
              [102.396652, 13.56861],
              [102.439423, 13.56222],
              [102.46582, 13.56194],
              [102.527206, 13.56778],
              [102.538307, 13.569164],
              [102.544983, 13.570831],
              [102.553589, 13.574442],
              [102.563873, 13.580553],
              [102.600273, 13.60555],
              [102.597763, 13.62472],
              [102.578049, 13.63722],
              [102.568329, 13.644165],
              [102.562187, 13.65],
              [102.559143, 13.655277],
              [102.558029, 13.670277],
              [102.561653, 13.678886],
              [102.56749, 13.685276],
              [102.574997, 13.69027],
              [102.629433, 13.716942],
              [102.714996, 13.758888],
              [102.719994, 13.761944],
              [102.724426, 13.76583],
              [102.728867, 13.773333],
              [102.759987, 13.843609],
              [102.765549, 13.85805],
              [102.775543, 13.888611],
              [102.782494, 13.917498],
              [102.786926, 13.929443],
              [102.791656, 13.93694],
              [102.798866, 13.945831],
              [102.809418, 13.955553],
              [102.858032, 13.993053],
              [102.902481, 14.03666],
              [102.939423, 14.141943],
              [102.939972, 14.149443],
              [102.935387, 14.168612],
              [102.935532, 14.172775],
              [102.937477, 14.17861],
              [102.945251, 14.191387],
              [102.959991, 14.204998],
              [102.965553, 14.207775],
              [102.976646, 14.209164],
              [102.993042, 14.21333],
              [103.013321, 14.221943],
              [103.024147, 14.227776],
              [103.02887, 14.23111],
              [103.036331, 14.238153],
              [103.056091, 14.265],
              [103.061653, 14.271387],
              [103.068604, 14.276665],
              [103.094643, 14.29113],
              [103.143883, 14.317221],
              [103.180542, 14.32972],
              [103.187187, 14.331387],
              [103.244263, 14.335287],
              [103.268051, 14.35111],
              [103.279709, 14.355831],
              [103.311653, 14.35889],
              [103.326103, 14.35861],
              [103.337769, 14.358053],
              [103.361366, 14.357498],
              [103.376923, 14.35722],
              [103.388893, 14.357498],
              [103.466927, 14.371664],
              [103.47554, 14.375553],
              [103.507767, 14.39667],
              [103.5186, 14.402222],
              [103.556641, 14.42055],
              [103.572487, 14.425554],
              [103.659149, 14.447777],
              [103.688309, 14.443888],
              [103.69165, 14.443054],
              [103.695824, 14.439999],
              [103.699142, 14.42722],
              [103.722763, 14.390276],
              [103.922211, 14.339165],
              [104.029984, 14.344442],
              [104.033051, 14.345831],
              [104.040543, 14.350554],
              [104.044998, 14.354469],
              [104.056091, 14.359442],
              [104.118591, 14.38361],
              [104.12886, 14.385555],
              [104.278587, 14.408888],
              [104.288589, 14.40667],
              [104.423027, 14.376663],
              [104.458557, 14.36616],
              [104.467209, 14.359442],
              [104.473038, 14.356941],
              [104.480553, 14.356108],
              [104.55304, 14.362776],
              [104.575546, 14.36527],
              [104.581673, 14.36722],
              [104.588882, 14.372498],
              [104.600273, 14.39389],
              [104.610527, 14.403887],
              [104.642761, 14.428886],
              [104.645538, 14.430277],
              [104.805542, 14.448332],
              [104.812477, 14.446943],
              [104.889709, 14.419443],
              [104.918289, 14.401241],
              [104.970833, 14.39333],
              [104.990807, 14.388611],
              [104.99942, 14.384998],
              [105.001938, 14.383333],
              [105.005829, 14.378885],
              [105.007492, 14.372498],
              [105.006943, 14.36889],
              [105.001389, 14.346386],
              [104.995529, 14.325554],
              [105.001389, 14.309164],
              [105.00943, 14.28889],
              [105.033051, 14.24778],
              [105.036102, 14.242496],
              [105.042213, 14.23638],
              [105.053307, 14.227221],
              [105.069443, 14.21833],
              [105.076927, 14.217497],
              [105.084427, 14.21833],
              [105.097763, 14.221664],
              [105.121368, 14.23083],
              [105.139709, 14.241108],
              [105.146652, 14.246386],
              [105.15332, 14.256109],
              [105.164703, 14.302498],
              [105.17804, 14.342775],
              [105.179703, 14.345],
              [105.184708, 14.34833],
              [105.197197, 14.35222],
              [105.200981, 14.35222],
              [105.210602, 14.349648],
              [105.208328, 14.294998],
              [105.208328, 14.290833],
              [105.209991, 14.284443],
              [105.27916, 14.182775],
              [105.282761, 14.17805],
              [105.284988, 14.176109],
              [105.364151, 14.109442],
              [105.373306, 14.106108],
              [105.380814, 14.105276],
              [105.439697, 14.115274],
              [105.494713, 14.13444],
              [105.497208, 14.135832],
              [105.559128, 14.168325],
              [105.733261, 14.110929],
              [105.781097, 14.083054],
              [105.7836, 14.081387],
              [105.785263, 14.078886],
              [105.788307, 14.061943],
              [105.789978, 14.039442],
              [105.796944, 14.026388],
              [105.808029, 14.016943],
              [105.888603, 13.950554],
              [105.910278, 13.932842],
              [105.947197, 13.926664],
              [106.056641, 13.93],
              [106.111099, 13.945831],
              [106.171921, 14.04472],
              [106.175262, 14.053331],
              [106.175537, 14.06472],
              [106.174149, 14.071665],
              [106.171654, 14.077221],
              [106.163597, 14.08555],
              [106.119431, 14.135277],
              [106.041656, 14.22472],
              [106.033867, 14.237219],
              [106.031372, 14.242775],
              [105.997757, 14.327221],
              [105.994713, 14.336109],
              [105.993874, 14.347219],
              [105.996094, 14.361387],
              [105.998032, 14.36722],
              [105.99971, 14.369719],
              [106.004707, 14.373053],
              [106.097763, 14.381386],
              [106.101929, 14.381386],
              [106.138321, 14.37861],
              [106.141937, 14.37833],
              [106.156647, 14.37222],
              [106.168869, 14.364164],
              [106.172211, 14.363331],
              [106.180267, 14.363609],
              [106.216377, 14.376942],
              [106.221367, 14.380276],
              [106.224991, 14.384722],
              [106.238876, 14.41222],
              [106.239967, 14.414999],
              [106.246933, 14.446386],
              [106.247482, 14.449999],
              [106.246643, 14.469164],
              [106.247482, 14.480276],
              [106.24971, 14.490553],
              [106.251099, 14.49333],
              [106.253883, 14.494442],
              [106.256378, 14.494442],
              [106.290283, 14.481366],
              [106.303307, 14.46194],
              [106.307213, 14.4575],
              [106.314148, 14.452221],
              [106.3311, 14.444721],
              [106.399147, 14.453331],
              [106.408333, 14.456387],
              [106.410812, 14.458054],
              [106.416656, 14.464443],
              [106.432213, 14.485554],
              [106.431374, 14.508055],
              [106.469147, 14.559164],
              [106.473038, 14.56361],
              [106.478043, 14.56694],
              [106.522491, 14.595831],
              [106.531693, 14.598906],
              [106.540741, 14.598724],
              [106.543053, 14.596109],
              [106.600807, 14.50944],
              [106.627762, 14.466942],
              [106.629967, 14.464998],
              [106.703323, 14.434998],
              [106.752617, 14.40942],
              [106.765266, 14.388887],
              [106.798317, 14.346109],
              [106.808594, 14.335831],
              [106.846939, 14.30472],
              [106.853592, 14.30305],
              [107.115807, 14.402498],
              [107.121094, 14.405277],
              [107.169144, 14.438887],
              [107.234154, 14.49722],
              [107.253601, 14.531111],
              [107.347488, 14.595276],
              [107.473038, 14.64],
              [107.5466, 14.708618],
              [107.552757, 14.703331],
              [107.553864, 14.70027],
              [107.558594, 14.662777],
              [107.558319, 14.651388],
              [107.535538, 14.556942],
              [107.534714, 14.55361],
              [107.531372, 14.544998],
              [107.50444, 14.48222],
              [107.489151, 14.44861]
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
