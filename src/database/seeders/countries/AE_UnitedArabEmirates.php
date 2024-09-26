<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AE_UnitedArabEmirates extends Seeder
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
        $this->name = 'United Arab Emirates';

        // Set the country's official name
        $this->official_name = 'United Arab Emirates';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AE';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ARE';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '784';

        // Set the international dialing code
        $this->international_phone = '971';

        // Define the languages spoken in the country
        $this->languages = ['ar']; // Arabic is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ae'];

        // Define alternative top-level domains
        $this->alternative_tlds = [
            '.com.ae', // Used for commercial entities
            '.net.ae', // Used by network providers
            '.gov.ae', // Used by government entities
            '.org.ae', // Used by non-profit organizations
            '.sch.ae', // Used by schools
            '.ac.ae',  // Used by academic institutions
        ];

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '120 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '80 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '99%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'UAE Cyber Security Council'; // National agency responsible for cybersecurity

        // List popular web technologies in the UAE
        $this->popular_technologies = ['PHP', 'JavaScript', 'Python', 'WordPress']; // Popular web technologies in the UAE

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AE';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '290557';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United Arab Emirates dirham',
            // Currency code
            'code' => 'AED',
            // Currency symbol
            'symbol' => 'د.إ',
            // Main unit
            'main_unit' => 'dirham',
            // Subunit
            'sub_unit' => 'fils',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100, // One dirham is subdivided into 100 fils
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500', '1000'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['25', '50'], // Fils coins
        ];

        // Set the population
        $this->population = 9890400; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 83600; // km²

        // Set the capital city
        $this->capital = 'Abu Dhabi';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Primary time zone identifier
            'timezone_id' => 'Asia/Dubai',
            // Standard time offset
            'standard_time' => 'UTC+4', // Gulf Standard Time
        ];

        // Set the independence day
        $this->independence_day = '1971-12-02'; // Date of independence (YYYY-MM-DD)

        // List international organizations the country is part of
        $this->international_organizations = ['United Nations', 'Arab League', 'GCC', 'OPEC']; // International affiliations

        // Set the GDP in billions of USD
        $this->gdp = 421.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Islam']; // Predominant religion

        // Describe the form of government
        $this->government = 'Federal presidential absolute monarchy';

        // Set the national sport
        $this->national_sport = 'Camel racing'; // Traditional sport; Football is also very popular

        // Define bordering countries
        $this->borders = [
            ['name' => 'Oman', 'iso_alpha_2' => 'OM'],
            ['name' => 'Saudi Arabia', 'iso_alpha_2' => 'SA'],
        ];

        // Set the founded year
        $this->founded_year = 1971; // Year of independence

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇪',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1EA',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1EA;',
            // CSS entities
            'css' => '\\1F1E6\\1F1EA',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127466;',
            // Direct UTF-8 string
            'utf8' => '🇦🇪',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDEA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ae:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1EA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#FF0000',
                // RGB color values
                'rgb' => '255,0,0',
                // CMYK color values
                'cmyk' => '0,100,100,0',
                // HSL color values
                'hsl' => '0,100%,50%',
                // HSV color values
                'hsv' => '0,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 485 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#008000',
                // RGB color values
                'rgb' => '0,128,0',
                // CMYK color values
                'cmyk' => '100,0,100,50',
                // HSL color values
                'hsl' => '120,100%,25%',
                // HSV color values
                'hsv' => '120,100%,50%',
                // Pantone color code
                'pantone' => 'Pantone 355 C',
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
                'pantone' => 'Pantone White',
                // Contrast color for readability
                'contrast' => '#000000',
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
                'hsl' => '0,0%,0%',
                // HSV color values
                'hsv' => '0,0%,0%',
                // Pantone color code
                'pantone' => 'Pantone Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '24.0000',
            // Longitude in decimal degrees
            'longitude' => '54.0000',
            // Degrees with decimal
            'dd' => '24.0000° N, 54.0000° E',
            // Degrees, minutes, seconds
            'dms' => '24°00\'00" N, 54°00\'00" E',
            // Degrees and decimal minutes
            'dm' => '24°00.000\' N, 54°00.000\' E',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N24°00\'00.00", E54°00\'00.00"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], dd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '24°00\'00.00"N, 54°00\'00.00"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]dd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '24 00 00.00, 54 00 00.00',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '240000.00, 0540000.00',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]dd.dddd',
                    // Coordinates in this format
                    'coordinates' => '24.0000 54.0000',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]dd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '24.00000°,54.00000°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]dd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '24.0000000N54.0000000E',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]ddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '2400.000N05400.000E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], dd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '24°00\'00.00"N, 54°00\'00.00"E',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]ddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '240000.00N0540000.00E',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] dd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 24 00.000 E 54 00.000',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '24:00:00N,54:00:00E',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '24:00:00.00N 54:00:00.00E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '24°00\'00"N 54°00\'00"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '24°00\'00" 54°00\'00"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '24d 00\' 00" N 54d 00\' 00" E',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '24.0000N 54.0000E',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '24° 00.000, 54° 00.000',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '2400.000, 5400.000',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '2400.000N, 5400.000E',
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
      "properties": { "cca2": "ae" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [53.965271, 24.176666],
              [53.956665, 24.147778],
              [53.953331, 24.143887],
              [53.949165, 24.140831],
              [53.943604, 24.139164],
              [53.899994, 24.1325],
              [53.821388, 24.137218],
              [53.784164, 24.124996],
              [53.681107, 24.16],
              [53.674995, 24.160275],
              [53.66555, 24.15555],
              [53.654716, 24.15222],
              [53.641663, 24.151108],
              [53.634995, 24.152496],
              [53.629997, 24.154999],
              [53.623886, 24.162777],
              [53.624718, 24.16972],
              [53.631386, 24.177498],
              [53.640274, 24.18305],
              [53.70861, 24.22166],
              [53.845833, 24.2675],
              [53.851105, 24.269165],
              [53.856941, 24.26722],
              [53.95916, 24.19111],
              [53.964439, 24.18222],
              [53.965271, 24.176666]
            ]
          ],
          [
            [
              [53.324165, 24.267776],
              [53.271942, 24.258331],
              [53.243607, 24.27666],
              [53.252777, 24.301666],
              [53.34111, 24.328888],
              [53.348885, 24.319443],
              [53.347771, 24.310276],
              [53.345551, 24.301109],
              [53.334717, 24.274441],
              [53.324165, 24.267776]
            ]
          ],
          [
            [
              [53.109718, 24.311386],
              [53.098885, 24.30972],
              [53.08749, 24.316109],
              [53.07944, 24.325554],
              [53.07861, 24.334721],
              [53.080551, 24.34389],
              [53.085831, 24.352776],
              [53.093048, 24.355831],
              [53.09583, 24.353611],
              [53.10527, 24.341942],
              [53.108604, 24.320553],
              [53.109718, 24.311386]
            ]
          ],
          [
            [
              [54.264717, 24.288887],
              [54.233887, 24.269165],
              [54.22722, 24.270554],
              [54.223053, 24.273609],
              [54.179718, 24.310276],
              [54.176384, 24.313889],
              [54.17472, 24.318886],
              [54.174438, 24.324997],
              [54.17722, 24.32972],
              [54.203888, 24.353611],
              [54.208611, 24.35611],
              [54.215271, 24.35611],
              [54.23138, 24.35083],
              [54.23638, 24.348331],
              [54.239998, 24.344444],
              [54.257217, 24.319721],
              [54.269997, 24.298054],
              [54.268608, 24.291943],
              [54.264717, 24.288887]
            ]
          ],
          [
            [
              [52.616104, 24.26861],
              [52.61055, 24.266941],
              [52.606384, 24.27],
              [52.59166, 24.284164],
              [52.581383, 24.295],
              [52.578606, 24.299442],
              [52.573051, 24.314163],
              [52.571938, 24.319721],
              [52.571663, 24.32611],
              [52.572777, 24.33972],
              [52.579437, 24.355],
              [52.586105, 24.362778],
              [52.590828, 24.365833],
              [52.626938, 24.372498],
              [52.633049, 24.373333],
              [52.639717, 24.372219],
              [52.653053, 24.361664],
              [52.658882, 24.346943],
              [52.656105, 24.315277],
              [52.65361, 24.310833],
              [52.619995, 24.271942],
              [52.616104, 24.26861]
            ]
          ],
          [
            [
              [53.398048, 24.324718],
              [53.386108, 24.320274],
              [53.377495, 24.329998],
              [53.378052, 24.339165],
              [53.38166, 24.359997],
              [53.387497, 24.368889],
              [53.397774, 24.373886],
              [53.408051, 24.37416],
              [53.41777, 24.372219],
              [53.428329, 24.366943],
              [53.433327, 24.357498],
              [53.430275, 24.348331],
              [53.398048, 24.324718]
            ]
          ],
          [
            [
              [54.472496, 24.418888],
              [54.467216, 24.41722],
              [54.38222, 24.437496],
              [54.330276, 24.45472],
              [54.328331, 24.459721],
              [54.33111, 24.464443],
              [54.341942, 24.475277],
              [54.380272, 24.502499],
              [54.390549, 24.498055],
              [54.47166, 24.433331],
              [54.475273, 24.429722],
              [54.475273, 24.423611],
              [54.472496, 24.418888]
            ]
          ],
          [
            [
              [54.515549, 24.504719],
              [54.51722, 24.495277],
              [54.506386, 24.496666],
              [54.495827, 24.50222],
              [54.48555, 24.509163],
              [54.476105, 24.517498],
              [54.470551, 24.526943],
              [54.469719, 24.536942],
              [54.47805, 24.545555],
              [54.515549, 24.504719]
            ]
          ],
          [
            [
              [54.440826, 24.50111],
              [54.429993, 24.50111],
              [54.419167, 24.502499],
              [54.407776, 24.50528],
              [54.40083, 24.514721],
              [54.404442, 24.52361],
              [54.45444, 24.587776],
              [54.465553, 24.589996],
              [54.471382, 24.586109],
              [54.473885, 24.576111],
              [54.461388, 24.508331],
              [54.45111, 24.50278],
              [54.440826, 24.50111]
            ]
          ],
          [
            [
              [55.617493, 25.57],
              [55.613884, 25.566387],
              [55.609718, 25.56944],
              [55.611107, 25.574165],
              [55.616661, 25.58333],
              [55.62055, 25.58361],
              [55.619438, 25.575275],
              [55.617493, 25.57]
            ]
          ],
          [
            [
              [56.183331, 25.654989],
              [56.238041, 25.62611],
              [56.26972, 25.63601],
              [56.322777, 25.611111],
              [56.333611, 25.605553],
              [56.345833, 25.59694],
              [56.348053, 25.591663],
              [56.368332, 25.52583],
              [56.369164, 25.513054],
              [56.365273, 25.46583],
              [56.360275, 25.421108],
              [56.365555, 25.382221],
              [56.375832, 25.341942],
              [56.38166, 25.320831],
              [56.372772, 25.26166],
              [56.357498, 25.101665],
              [56.356384, 25.08166],
              [56.356667, 25.069164],
              [56.373528, 24.97938],
              [56.365273, 24.979443],
              [56.35305, 24.9775],
              [56.3475, 24.97583],
              [56.342773, 24.973331],
              [56.339012, 24.969444],
              [56.335274, 24.966389],
              [56.333885, 24.960278],
              [56.33416, 24.954166],
              [56.339165, 24.926109],
              [56.340271, 24.920555],
              [56.339996, 24.9075],
              [56.338608, 24.901386],
              [56.335831, 24.89666],
              [56.33194, 24.89333],
              [56.32222, 24.889164],
              [56.310555, 24.886108],
              [56.296104, 24.878887],
              [56.288887, 24.872498],
              [56.285271, 24.867775],
              [56.280472, 24.857273],
              [56.278053, 24.853886],
              [56.268326, 24.848331],
              [56.253326, 24.841942],
              [56.226105, 24.833611],
              [56.188766, 24.824997],
              [56.179718, 24.781666],
              [56.146385, 24.741943],
              [56.141106, 24.740276],
              [56.104164, 24.734722],
              [56.076942, 24.73805],
              [56.071106, 24.739719],
              [56.061661, 24.74472],
              [56.053886, 24.752777],
              [55.982773, 24.862778],
              [55.978333, 24.872776],
              [55.977493, 24.87833],
              [55.979439, 24.883888],
              [55.982773, 24.887775],
              [55.987495, 24.889999],
              [55.993607, 24.891109],
              [56.000549, 24.891109],
              [56.013329, 24.888885],
              [56.024162, 24.883888],
              [56.033051, 24.878609],
              [56.050827, 24.866108],
              [56.0375, 24.93889],
              [56.031944, 24.953888],
              [56.026665, 24.9625],
              [56.018883, 24.969166],
              [56.00944, 24.97472],
              [55.990829, 24.979443],
              [55.97657, 24.981987],
              [55.954437, 24.983608],
              [55.936104, 24.981388],
              [55.929718, 24.97972],
              [55.914719, 24.973331],
              [55.895554, 24.963608],
              [55.881943, 24.955555],
              [55.866386, 24.94222],
              [55.845551, 24.920277],
              [55.82027, 24.89361],
              [55.80778, 24.878052],
              [55.804993, 24.872498],
              [55.803604, 24.86639],
              [55.803055, 24.860275],
              [55.803604, 24.84111],
              [55.813889, 24.729721],
              [55.82, 24.701664],
              [55.843605, 24.649719],
              [55.812492, 24.596107],
              [55.783882, 24.573887],
              [55.78083, 24.570553],
              [55.779442, 24.563889],
              [55.78139, 24.553333],
              [55.797775, 24.476944],
              [55.82, 24.416664],
              [55.815277, 24.318886],
              [55.811943, 24.314999],
              [55.779999, 24.259163],
              [55.776665, 24.247776],
              [55.77611, 24.240833],
              [55.77722, 24.235275],
              [55.779999, 24.230831],
              [55.785, 24.228333],
              [55.859444, 24.213608],
              [55.865555, 24.214443],
              [55.885277, 24.223331],
              [55.894165, 24.229164],
              [55.90361, 24.233887],
              [55.90916, 24.23555],
              [55.92805, 24.237778],
              [55.93583, 24.237221],
              [55.949165, 24.234722],
              [55.953331, 24.231667],
              [55.956108, 24.226665],
              [56.022774, 24.087219],
              [56.024437, 24.082222],
              [56.024719, 24.076111],
              [56.015274, 24.07111],
              [55.998886, 24.066109],
              [55.875275, 24.035],
              [55.801384, 24.02],
              [55.687492, 24.03083],
              [55.67305, 24.031387],
              [55.646385, 24.02972],
              [55.62944, 24.026108],
              [55.510277, 23.972775],
              [55.533607, 23.907776],
              [55.54277, 23.902222],
              [55.54722, 23.899166],
              [55.557495, 23.888054],
              [55.559441, 23.883888],
              [55.561386, 23.87194],
              [55.565277, 23.780552],
              [55.56472, 23.773609],
              [55.561386, 23.761944],
              [55.55888, 23.758053],
              [55.485832, 23.641666],
              [55.421944, 23.507221],
              [55.361382, 23.326111],
              [55.347221, 23.289165],
              [55.340553, 23.274441],
              [55.3275, 23.250553],
              [55.31972, 23.237221],
              [55.296387, 23.201385],
              [55.267494, 23.15778],
              [55.244164, 23.12194],
              [55.241661, 23.117496],
              [55.238327, 23.105831],
              [55.214996, 23.020554],
              [55.213882, 23.01444],
              [55.212776, 23.000553],
              [55.21222, 22.918331],
              [55.21333, 22.894165],
              [55.217216, 22.851665],
              [55.218605, 22.820553],
              [55.21833, 22.807499],
              [55.217216, 22.79361],
              [55.199165, 22.699718],
              [55.141659, 22.633329],
              [52.583328, 22.93889],
              [51.583328, 24.116659],
              [51.583611, 24.25972],
              [51.623329, 24.264442],
              [51.72583, 24.261108],
              [51.773605, 24.17833],
              [51.77, 24.152496],
              [51.772774, 24.129166],
              [51.786942, 24.049721],
              [51.789444, 24.039719],
              [51.798729, 24.016331],
              [51.801941, 24.01028],
              [51.807777, 24.002499],
              [51.81142, 24],
              [51.81667, 23.996387],
              [51.828049, 23.99305],
              [51.85416, 23.988052],
              [51.934166, 23.9875],
              [52.080551, 23.95555],
              [52.091385, 23.956387],
              [52.2075, 23.97],
              [52.231667, 23.97389],
              [52.25444, 23.98],
              [52.321533, 23.99908],
              [52.340271, 24.004997],
              [52.429718, 24.049721],
              [52.438606, 24.054996],
              [52.523048, 24.121666],
              [52.57666, 24.185555],
              [52.581665, 24.19444],
              [52.591385, 24.199718],
              [52.618332, 24.200554],
              [52.630554, 24.196388],
              [52.637772, 24.18972],
              [52.65361, 24.166664],
              [52.672493, 24.14305],
              [52.681938, 24.136387],
              [52.77222, 24.136387],
              [52.943604, 24.137775],
              [53.05555, 24.121666],
              [53.080276, 24.124165],
              [53.145828, 24.13583],
              [53.224442, 24.13611],
              [53.325829, 24.102776],
              [53.414993, 24.1075],
              [53.459717, 24.10611],
              [53.52333, 24.089443],
              [53.53555, 24.086109],
              [53.553329, 24.073887],
              [53.560555, 24.067219],
              [53.56472, 24.056942],
              [53.570274, 24.04888],
              [53.580826, 24.044167],
              [53.594719, 24.044167],
              [53.874161, 24.059719],
              [54.118607, 24.13944],
              [54.128883, 24.143887],
              [54.186386, 24.18305],
              [54.245827, 24.217777],
              [54.381943, 24.25222],
              [54.424164, 24.281666],
              [54.430832, 24.289719],
              [54.456383, 24.335278],
              [54.469444, 24.366943],
              [54.476105, 24.40694],
              [54.478882, 24.413609],
              [54.49444, 24.436108],
              [54.505554, 24.43972],
              [54.516937, 24.438889],
              [54.53916, 24.432777],
              [54.549164, 24.43222],
              [54.559166, 24.43444],
              [54.570274, 24.438053],
              [54.580826, 24.443886],
              [54.669167, 24.66333],
              [54.657494, 24.71778],
              [54.6486, 24.721664],
              [54.650276, 24.746944],
              [54.707771, 24.80139],
              [54.946388, 24.953609],
              [55.006371, 24.976044],
              [55.01694, 24.98305],
              [55.049995, 25.005833],
              [55.066383, 25.018055],
              [55.129715, 25.085552],
              [55.17805, 25.138885],
              [55.191666, 25.15416],
              [55.205551, 25.170277],
              [55.216942, 25.188053],
              [55.229164, 25.20472],
              [55.263885, 25.24361],
              [55.301941, 25.281944],
              [55.326714, 25.30559],
              [55.330826, 25.311943],
              [55.36972, 25.361111],
              [55.42485, 25.39424],
              [55.45916, 25.407497],
              [55.46833, 25.41333],
              [55.479439, 25.427498],
              [55.493019, 25.45944],
              [55.504166, 25.47361],
              [55.518074, 25.511868],
              [55.5275, 25.539997],
              [55.53833, 25.55917],
              [55.54361, 25.567776],
              [55.55055, 25.575832],
              [55.55971, 25.581665],
              [55.56879, 25.581463],
              [55.568077, 25.570807],
              [55.562397, 25.56228],
              [55.54558, 25.54807],
              [55.54203, 25.53884],
              [55.544399, 25.52605],
              [55.55032, 25.519423],
              [55.559792, 25.518711],
              [55.578735, 25.52605],
              [55.591759, 25.526762],
              [55.62846, 25.532919],
              [55.635803, 25.540024],
              [55.63912, 25.550678],
              [55.636749, 25.56086],
              [55.642197, 25.575306],
              [55.6525, 25.589165],
              [55.691109, 25.623055],
              [55.7471, 25.66111],
              [55.85527, 25.717499],
              [55.863609, 25.723331],
              [56.020271, 25.875832],
              [56.027222, 25.883888],
              [56.031387, 25.894722],
              [56.04361, 25.928608],
              [56.07222, 26.019722],
              [56.074997, 26.032219],
              [56.079941, 26.065559],
              [56.147491, 26.08416],
              [56.158878, 26.083611],
              [56.185551, 26.014721],
              [56.165821, 25.90805],
              [56.13916, 25.8325],
              [56.140831, 25.73499],
              [56.147221, 25.666109],
              [56.15897, 25.6625],
              [56.183331, 25.654989]
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
