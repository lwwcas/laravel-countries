<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BE_Belgium extends Seeder
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
        $this->name = 'Belgium';

        // Set the country's official name
        $this->official_name = 'Kingdom of Belgium';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BE';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BEL';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '056';

        // Set the international dialing code
        $this->international_phone = '32';

        // Define the languages spoken in the country
        $this->languages = ['nl', 'fr', 'de']; // Dutch, French, and German are official languages

        // Define the top-level domain(s)
        $this->tld = ['.be'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '50 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '92%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Centre for Cyber Security Belgium (CCB)';

        // List popular web technologies in Belgium
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Java', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BX';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2802361';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Euro',
            // Currency code
            'code' => 'EUR',
            // Currency symbol
            'symbol' => '€',
            // Main unit
            'main_unit' => 'euro',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 11589623; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 30528; // km²

        // Set the capital city
        $this->capital = 'Brussels';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Europe/Brussels',
            // Standard time offset
            'standard_time' => 'UTC+1', // Central European Time
            // Daylight saving time offset
            'daylight_saving_time' => 'UTC+2', // Central European Summer Time
        ];

        // Set the independence day
        $this->independence_day = '1830-07-21'; // Date of independence from the Netherlands

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'European Union',
            'NATO',
            'OECD',
            'Schengen Area',
            'Eurozone',
            'Benelux',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 533.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity (Roman Catholicism)', 'Non-religious']; // Predominant religions

        // Describe the form of government
        $this->government = 'Federal parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'France', 'iso_alpha_2' => 'FR'],
            ['name' => 'Germany', 'iso_alpha_2' => 'DE'],
            ['name' => 'Luxembourg', 'iso_alpha_2' => 'LU'],
            ['name' => 'Netherlands', 'iso_alpha_2' => 'NL'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇪',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1EA',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1EA;',
            // CSS entities
            'css' => '\\1F1E7\\1F1EA',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127466;',
            // Direct UTF-8 string
            'utf8' => '🇧🇪',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDEA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-be:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1EA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'hsl' => '0,0%,0%',
                // HSV color values
                'hsv' => '0,0%,0%',
                // Pantone color code
                'pantone' => 'Black',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFD700',
                // RGB color values
                'rgb' => '255,215,0',
                // CMYK color values
                'cmyk' => '0,16,100,0',
                // HSL color values
                'hsl' => '51,100%,50%',
                // HSV color values
                'hsv' => '51,100%,100%',
                // Pantone color code
                'pantone' => 'Yellow C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#EF3340',
                // RGB color values
                'rgb' => '239,51,64',
                // CMYK color values
                'cmyk' => '0,79,73,6',
                // HSL color values
                'hsl' => '356,83%,57%',
                // HSV color values
                'hsv' => '356,79%,94%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '50.8503',
            // Longitude in decimal degrees
            'longitude' => '4.3517',
            // Degrees with decimal
            'd' => '50.8503° N, 4.3517° E',
            // Degrees, minutes, seconds
            'dms' => '50°51\'01.08" N, 4°21\'06.12" E',
            // Degrees and decimal minutes
            'dm' => '50°51.018\' N, 4°21.102\' E',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N50°51\'01.08", E4°21\'06.12"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], dd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '50°51\'01.08"N, 4°21\'06.12"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]dd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '50 51 01.08, 4 21 06.12',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '505101.08, 0042106.12',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]dd.dddd',
                    // Coordinates in this format
                    'coordinates' => '50.8503 4.3517',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]dd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '50.85030°,4.35170°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]dd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '50.8503000N4.3517000E',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]ddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '5051.018N00421.102E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], dd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '50°51\'01.08"N, 4°21\'06.12"E',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]ddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '505101.08N0042106.12E',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] dd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 50 51.018 E 4 21.102',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '50:51:01N,4:21:06E',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '50:51:01.08N 4:21:06.12E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '50°51\'01"N 4°21\'06"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '50°51\'01" 4°21\'06"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '50d 51\' 01" N 4d 21\' 06" E',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '50.8503N 4.3517E',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '50° 51.018, 4° 21.102',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '5051.018, 0421.102',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '5051.018N, 0421.102E',
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
      "properties": { "cca2": "be" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [4.302375, 51.263184],
            [4.309677, 51.262032],
            [4.327703, 51.290123],
            [4.290481, 51.307682],
            [4.283055, 51.317215],
            [4.280181, 51.3442],
            [4.260985, 51.355434],
            [4.252368, 51.375145],
            [4.279674, 51.376595],
            [4.346944, 51.362495],
            [4.358889, 51.359993],
            [4.388055, 51.357498],
            [4.407222, 51.357773],
            [4.418611, 51.359161],
            [4.428055, 51.361938],
            [4.431666, 51.364441],
            [4.437778, 51.375275],
            [4.436388, 51.378883],
            [4.417777, 51.398331],
            [4.401388, 51.410828],
            [4.396667, 51.416939],
            [4.393888, 51.450272],
            [4.397499, 51.452774],
            [4.481944, 51.479439],
            [4.486666, 51.480827],
            [4.539721, 51.48555],
            [4.545555, 51.484993],
            [4.549444, 51.482773],
            [4.550833, 51.479439],
            [4.549999, 51.474998],
            [4.544999, 51.462776],
            [4.543333, 51.458885],
            [4.538055, 51.452499],
            [4.535277, 51.443886],
            [4.535277, 51.43972],
            [4.537222, 51.432495],
            [4.541944, 51.426666],
            [4.546944, 51.425827],
            [4.644722, 51.42305],
            [4.650555, 51.423332],
            [4.671388, 51.427757],
            [4.673055, 51.430832],
            [4.670833, 51.433609],
            [4.668611, 51.440826],
            [4.671111, 51.44416],
            [4.69861, 51.464439],
            [4.705555, 51.469444],
            [4.757222, 51.496666],
            [4.769166, 51.502777],
            [4.781111, 51.503609],
            [4.788333, 51.503052],
            [4.806944, 51.499443],
            [4.825833, 51.492218],
            [4.845555, 51.48111],
            [4.84611, 51.477493],
            [4.844722, 51.461388],
            [4.832777, 51.429993],
            [4.853055, 51.414444],
            [4.929999, 51.398605],
            [4.93611, 51.399437],
            [4.940277, 51.401382],
            [4.955555, 51.409996],
            [4.989444, 51.43055],
            [5, 51.437775],
            [5.009444, 51.446388],
            [5.012777, 51.454163],
            [5.015277, 51.471664],
            [5.016944, 51.475555],
            [5.023611, 51.48111],
            [5.035555, 51.487221],
            [5.041389, 51.486664],
            [5.073333, 51.471664],
            [5.080277, 51.466942],
            [5.09611, 51.446106],
            [5.104444, 51.434998],
            [5.103333, 51.43055],
            [5.10111, 51.427216],
            [5.089444, 51.415276],
            [5.085833, 51.412773],
            [5.08, 51.406944],
            [5.077777, 51.403328],
            [5.076666, 51.398888],
            [5.077222, 51.395271],
            [5.07861, 51.391663],
            [5.083055, 51.385826],
            [5.139999, 51.320831],
            [5.143888, 51.318604],
            [5.155, 51.315826],
            [5.168056, 51.314438],
            [5.189166, 51.31916],
            [5.194444, 51.32],
            [5.201111, 51.319717],
            [5.223332, 51.313889],
            [5.233611, 51.310555],
            [5.237499, 51.308327],
            [5.238889, 51.304718],
            [5.238974, 51.262283],
            [5.329721, 51.262215],
            [5.4, 51.265549],
            [5.406111, 51.266106],
            [5.411388, 51.266937],
            [5.467777, 51.282776],
            [5.475555, 51.286942],
            [5.485833, 51.294998],
            [5.497222, 51.296104],
            [5.504444, 51.295273],
            [5.510833, 51.294441],
            [5.520833, 51.291107],
            [5.550278, 51.272499],
            [5.553333, 51.269722],
            [5.557777, 51.263885],
            [5.568334, 51.220711],
            [5.644722, 51.203606],
            [5.754167, 51.189995],
            [5.834444, 51.165833],
            [5.849171, 51.15638],
            [5.855, 51.151108],
            [5.855111, 51.148338],
            [5.851388, 51.14222],
            [5.848332, 51.139442],
            [5.818055, 51.114998],
            [5.776944, 51.025833],
            [5.764166, 50.989998],
            [5.758055, 50.959999],
            [5.657499, 50.880272],
            [5.65, 50.876938],
            [5.640555, 50.863052],
            [5.638888, 50.858887],
            [5.6375, 50.850273],
            [5.638055, 50.846664],
            [5.640833, 50.839722],
            [5.651667, 50.824715],
            [5.655555, 50.822495],
            [5.683611, 50.811386],
            [5.69394, 50.808815],
            [5.701944, 50.805832],
            [5.705, 50.785828],
            [5.70556, 50.781952],
            [5.701388, 50.774437],
            [5.691911, 50.760559],
            [5.69861, 50.757774],
            [5.737222, 50.759438],
            [5.742499, 50.760277],
            [5.7975, 50.76944],
            [5.870555, 50.760826],
            [5.898918, 50.753883],
            [5.926389, 50.756104],
            [6.011798, 50.757271],
            [6.054722, 50.72361],
            [6.167222, 50.656387],
            [6.268611, 50.623604],
            [6.270833, 50.621384],
            [6.271667, 50.618607],
            [6.270555, 50.615829],
            [6.247777, 50.589165],
            [6.264722, 50.497772],
            [6.309444, 50.498055],
            [6.317499, 50.496384],
            [6.333888, 50.489716],
            [6.344444, 50.484161],
            [6.371111, 50.448326],
            [6.37361, 50.443329],
            [6.374444, 50.440552],
            [6.398204, 50.323174],
            [6.349722, 50.312775],
            [6.280833, 50.283607],
            [6.173333, 50.232498],
            [6.165555, 50.22361],
            [6.163888, 50.221382],
            [6.139722, 50.154442],
            [6.134414, 50.127846],
            [6.12, 50.131943],
            [6.033889, 50.159164],
            [6.031111, 50.160828],
            [6.02861, 50.166107],
            [6.026256, 50.181252],
            [6.021944, 50.18222],
            [6.013888, 50.181389],
            [5.976388, 50.171387],
            [5.969722, 50.16861],
            [5.891666, 50.10611],
            [5.889444, 50.104164],
            [5.886666, 50.098885],
            [5.883055, 50.080551],
            [5.883055, 50.077217],
            [5.834444, 49.986938],
            [5.791389, 49.962494],
            [5.777499, 49.957771],
            [5.774722, 49.956108],
            [5.770833, 49.95166],
            [5.747777, 49.907494],
            [5.734444, 49.834999],
            [5.746666, 49.795273],
            [5.748055, 49.79277],
            [5.750833, 49.791107],
            [5.764999, 49.789993],
            [5.790277, 49.78083],
            [5.869444, 49.719719],
            [5.87615, 49.709885],
            [5.899166, 49.662773],
            [5.900277, 49.640549],
            [5.863055, 49.571663],
            [5.837777, 49.550278],
            [5.834167, 49.549164],
            [5.80788, 49.545044],
            [5.792222, 49.54583],
            [5.702222, 49.543053],
            [5.631944, 49.535828],
            [5.593333, 49.526382],
            [5.530555, 49.511108],
            [5.514444, 49.508888],
            [5.4775, 49.504166],
            [5.473055, 49.506104],
            [5.470277, 49.508888],
            [5.463611, 49.517776],
            [5.465278, 49.52166],
            [5.473888, 49.530548],
            [5.47611, 49.534164],
            [5.475555, 49.537773],
            [5.474166, 49.541107],
            [5.437778, 49.599998],
            [5.427221, 49.606941],
            [5.415, 49.613327],
            [5.398611, 49.621384],
            [5.392305, 49.622551],
            [5.331111, 49.656662],
            [4.996666, 49.802498],
            [4.984444, 49.804718],
            [4.959167, 49.802216],
            [4.944722, 49.79361],
            [4.935277, 49.790833],
            [4.924444, 49.789444],
            [4.912777, 49.788887],
            [4.906666, 49.789719],
            [4.873055, 49.797218],
            [4.863889, 49.80722],
            [4.820833, 49.992775],
            [4.838888, 50.06916],
            [4.853333, 50.095551],
            [4.880555, 50.126389],
            [4.883333, 50.129166],
            [4.8875, 50.131104],
            [4.894444, 50.136108],
            [4.894722, 50.140274],
            [4.882777, 50.154716],
            [4.832503, 50.16861],
            [4.819166, 50.167221],
            [4.814722, 50.165833],
            [4.763055, 50.135551],
            [4.696944, 50.090828],
            [4.693055, 50.083328],
            [4.688055, 50.071106],
            [4.687778, 50.067215],
            [4.693889, 50.061943],
            [4.697499, 50.05555],
            [4.694444, 50.041939],
            [4.679722, 50.001938],
            [4.673611, 49.996384],
            [4.510555, 49.947495],
            [4.464167, 49.938889],
            [4.458333, 49.938606],
            [4.445833, 49.940552],
            [4.430007, 49.945007],
            [4.413333, 49.949165],
            [4.317222, 49.969719],
            [4.248055, 49.964439],
            [4.231111, 49.962494],
            [4.215261, 49.959602],
            [4.183055, 49.976387],
            [4.174179, 49.979881],
            [4.149238, 49.978371],
            [4.147222, 50.009995],
            [4.171389, 50.137215],
            [4.194444, 50.237495],
            [4.165, 50.283051],
            [4.038333, 50.355553],
            [4.033177, 50.35643],
            [3.983889, 50.345276],
            [3.889722, 50.339996],
            [3.774722, 50.353882],
            [3.676944, 50.395271],
            [3.671667, 50.433327],
            [3.670555, 50.440826],
            [3.668889, 50.44416],
            [3.660555, 50.456383],
            [3.657728, 50.45887],
            [3.654444, 50.461662],
            [3.620155, 50.490044],
            [3.607778, 50.495827],
            [3.518055, 50.518883],
            [3.456666, 50.511383],
            [3.4525, 50.509438],
            [3.372777, 50.494995],
            [3.367222, 50.495552],
            [3.298611, 50.523048],
            [3.295555, 50.525551],
            [3.28, 50.53833],
            [3.278611, 50.541664],
            [3.243055, 50.660271],
            [3.242222, 50.668053],
            [3.197778, 50.727219],
            [3.187222, 50.746666],
            [3.182874, 50.75705],
            [3.164722, 50.780548],
            [3.162222, 50.783607],
            [3.154444, 50.78833],
            [3.149722, 50.789993],
            [3.143333, 50.790833],
            [3.116389, 50.791664],
            [3.050833, 50.780273],
            [3.041667, 50.777222],
            [3.026988, 50.769844],
            [3.02, 50.770554],
            [3.008611, 50.769165],
            [2.960556, 50.7575],
            [2.943055, 50.741386],
            [2.898056, 50.703049],
            [2.867503, 50.713379],
            [2.781944, 50.755554],
            [2.650555, 50.816109],
            [2.597777, 50.925827],
            [2.5975, 50.995827],
            [2.541667, 51.09111],
            [2.550833, 51.092499],
            [2.560277, 51.095551],
            [2.863055, 51.213333],
            [2.955277, 51.249718],
            [3.02, 51.276382],
            [3.095277, 51.311386],
            [3.112778, 51.318329],
            [3.131667, 51.324165],
            [3.179722, 51.336105],
            [3.370866, 51.373856],
            [3.373611, 51.309998],
            [3.379444, 51.276939],
            [3.380833, 51.273605],
            [3.388324, 51.268677],
            [3.434166, 51.246109],
            [3.439167, 51.244438],
            [3.451944, 51.242493],
            [3.465833, 51.241943],
            [3.483611, 51.243332],
            [3.520833, 51.248055],
            [3.524167, 51.250549],
            [3.524444, 51.263054],
            [3.5225, 51.274162],
            [3.520833, 51.277496],
            [3.520278, 51.281387],
            [3.521111, 51.285828],
            [3.524722, 51.28833],
            [3.595555, 51.303886],
            [3.600833, 51.304718],
            [3.608055, 51.304161],
            [3.669167, 51.29277],
            [3.782777, 51.264999],
            [3.793056, 51.26194],
            [3.796389, 51.259438],
            [3.790833, 51.237221],
            [3.790833, 51.233055],
            [3.793889, 51.223053],
            [3.796111, 51.220276],
            [3.806389, 51.216942],
            [3.890277, 51.205826],
            [3.8975, 51.205276],
            [3.903611, 51.205826],
            [3.9525, 51.214439],
            [4.062222, 51.25222],
            [4.127777, 51.278885],
            [4.161388, 51.294167],
            [4.173055, 51.300552],
            [4.214999, 51.330276],
            [4.228333, 51.340553],
            [4.238898, 51.350426],
            [4.255836, 51.336239],
            [4.26356, 51.317043],
            [4.280649, 51.301125],
            [4.309444, 51.290276],
            [4.312499, 51.287498],
            [4.313055, 51.283882],
            [4.300079, 51.267651],
            [4.302375, 51.263184]
          ]
        ]
      }
    }
  ]
}
';
    }
}
