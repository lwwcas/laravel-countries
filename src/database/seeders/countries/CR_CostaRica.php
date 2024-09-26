<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class CR_CostaRica extends Seeder
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
    public $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Costa Rica';

        // Set the country's official name
        $this->official_name = 'Republic of Costa Rica';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'CR';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'CRI';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '188';

        // Set the international dialing code
        $this->international_phone = '506';

        // Define the languages spoken in the country
        $this->languages = ['es']; // Spanish is the official language

        // Define the top-level domain(s)
        $this->tld = ['.cr'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '75 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '73%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Cybersecurity Directorate';

        // List popular web technologies in Costa Rica
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Ruby', 'Node.js'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'CS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3624060';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Costa Rican colón',
            // Currency code
            'code' => 'CRC',
            // Currency symbol
            'symbol' => '₡',
            // Main unit
            'main_unit' => 'colón',
            // Subunit
            'sub_unit' => 'céntimo',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1,000', '2,000', '5,000', '10,000', '20,000', '50,000'],
            // Main coins
            'coins_main' => ['5', '10', '25', '50', '100', '500'],
            // Subunit coins
            'coins_sub' => ['5', '10', '25'],
        ];

        // Set the population
        $this->population = 5189800; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 51100; // km²

        // Set the capital city
        $this->capital = 'San José';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Costa_Rica',
                // Standard time offset
                'standard_time' => 'UTC-6', // Central Standard Time (CST)
                // Costa Rica does not observe daylight saving time
            ],
        ];

        // Set the independence day
        $this->independence_day = '1821-09-15'; // Date of independence from Spain

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Central American Integration System (SICA)',
            'Organisation internationale de la Francophonie',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 64.5; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential constitutional republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football (soccer) is the most popular sport

        // Define bordering countries
        $this->borders = [
            ['name' => 'Nicaragua', 'iso_alpha_2' => 'NI'],
            ['name' => 'Panama', 'iso_alpha_2' => 'PA'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇨🇷',
            // Unicode code points
            'uCode' => 'U+1F1E8 U+1F1F7',
            // HTML entities
            'html' => '&#x1F1E8;&#x1F1F7;',
            // CSS entities
            'css' => '\\1F1E8\\1F1F7',
            // Decimal Unicode entities
            'decimal' => '&#127464;&#127479;',
            // Direct UTF-8 string
            'utf8' => '🇨🇷',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE8\uD83C\uDDF7',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-cr:',
            // Hexadecimal entity
            'hex' => '&#x1F1E8;&#x1F1F7;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002B7F',
                // RGB color values
                'rgb' => '0,43,127',
                // CMYK color values
                'cmyk' => '100,66,0,50',
                // HSL color values
                'hsl' => '218,100%,25%',
                // HSV color values
                'hsv' => '218,100%,50%',
                // Pantone color code
                'pantone' => 'Pantone 287 C',
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
                'hsl' => '350,85%,44%',
                // HSV color values
                'hsv' => '350,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '9.7489',
            // Longitude in decimal degrees
            'longitude' => '-83.7534',
            // Degrees with decimal
            'd' => '9.7489° N, 83.7534° W',
            // Degrees, minutes, seconds
            'dms' => '9°44\'56.04" N, 83°45\'12.24" W',
            // Degrees and decimal minutes
            'dm' => '9°44.934\' N, 83°45.204\' W',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N9°44\'56.04", W83°45\'12.24"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '9°44\'56.04"N, 83°45\'12.24"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '9 44 56.04, -83 45 12.24',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '094456.04, -0834512.24',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]ddd.dddd',
                    // Coordinates in this format
                    'coordinates' => '9.7489 -83.7534',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '9.74890°, -83.75340°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '9.7489000N83.7534000W',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '0944.934N08345.204W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '9°44\'56.04"N, 83°45\'12.24"W',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '094456.04N0834512.24W',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 9 44.934 W 83 45.204',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '9:44:56N,83:45:12W',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '9:44:56.04N 83:45:12.24W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '9°44\'56"N 83°45\'12"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '9°44\'56" -83°45\'12"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '9d 44\' 56" N 83d 45\' 12" W',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] ddd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '9.7489N 83.7534W',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '9° 44.934, -83° 45.204',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '0944.934, -08345.204',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '0944.934N, 08345.204W',
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
      "properties": { "cca2": "cr" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-85.11584, 10.07361],
              [-85.13417, 10.070833],
              [-85.15417, 10.071388],
              [-85.176117, 10.077499],
              [-85.18167, 10.082222],
              [-85.19723, 10.107777],
              [-85.198059, 10.11055],
              [-85.196945, 10.113054],
              [-85.179733, 10.119999],
              [-85.171112, 10.121387],
              [-85.161957, 10.1225],
              [-85.13417, 10.115276],
              [-85.10918, 10.105833],
              [-85.10751, 10.104166],
              [-85.097229, 10.086111],
              [-85.097778, 10.083332],
              [-85.103897, 10.078888],
              [-85.11584, 10.07361]
            ]
          ],
          [
            [
              [-85.08778, 11.009998],
              [-84.90279, 10.940832],
              [-84.67445, 11.07805],
              [-84.343063, 10.953888],
              [-84.27335, 10.898611],
              [-84.22084, 10.82472],
              [-84.22612, 10.819721],
              [-84.228058, 10.814722],
              [-84.228058, 10.81111],
              [-84.22696, 10.808887],
              [-84.22168, 10.80361],
              [-84.195908, 10.78452],
              [-84.19064, 10.782768],
              [-84.158051, 10.784105],
              [-84.117233, 10.76417],
              [-84.114731, 10.763332],
              [-84.08029, 10.766943],
              [-84.040558, 10.778055],
              [-83.99972, 10.769444],
              [-83.99501, 10.763611],
              [-83.958618, 10.73444],
              [-83.93001, 10.7125],
              [-83.92142, 10.709028],
              [-83.91556, 10.708611],
              [-83.87001, 10.7225],
              [-83.827515, 10.746111],
              [-83.776672, 10.769444],
              [-83.768097, 10.771065],
              [-83.760849, 10.77136],
              [-83.751709, 10.770479],
              [-83.69112, 10.785276],
              [-83.67723, 10.788887],
              [-83.66724, 10.7925],
              [-83.66028, 10.79972],
              [-83.65779, 10.803888],
              [-83.65529, 10.81167],
              [-83.65472, 10.82444],
              [-83.66223, 10.888611],
              [-83.645798, 10.924847],
              [-83.6425, 10.923611],
              [-83.64029, 10.922222],
              [-83.637077, 10.919969],
              [-83.63, 10.915],
              [-83.62334, 10.908054],
              [-83.62083, 10.90361],
              [-83.602234, 10.866665],
              [-83.59973, 10.859165],
              [-83.59306, 10.838055],
              [-83.576675, 10.785555],
              [-83.570007, 10.750277],
              [-83.558334, 10.7],
              [-83.55278, 10.684999],
              [-83.50917, 10.57639],
              [-83.5025, 10.562222],
              [-83.46167, 10.478888],
              [-83.41556, 10.404444],
              [-83.406113, 10.389444],
              [-83.339737, 10.299721],
              [-83.110565, 10.016109],
              [-83.09917, 10.003332],
              [-83.07973, 9.991665],
              [-83.07445, 9.99],
              [-83.01083, 9.950277],
              [-82.97974, 9.9088880000001],
              [-82.920288, 9.83],
              [-82.853058, 9.744444],
              [-82.77444, 9.659443],
              [-82.76862, 9.654999],
              [-82.75473, 9.6480540000001],
              [-82.70056, 9.631943],
              [-82.65973, 9.626944],
              [-82.608337, 9.602777],
              [-82.563568, 9.5628760000001],
              [-82.5614, 9.53555],
              [-82.607788, 9.4916650000001],
              [-82.61223, 9.4891660000001],
              [-82.63473, 9.487778],
              [-82.637787, 9.4883330000001],
              [-82.68028, 9.5075],
              [-82.684723, 9.509998],
              [-82.718903, 9.54666],
              [-82.74556, 9.5808320000001],
              [-82.7489, 9.584166],
              [-82.754181, 9.586111],
              [-82.81418, 9.606667],
              [-82.829727, 9.611666],
              [-82.833069, 9.61222],
              [-82.843063, 9.608332],
              [-82.845, 9.606667],
              [-82.86446, 9.585554],
              [-82.93472, 9.471666],
              [-82.931122, 9.19944],
              [-82.93047, 9.06312],
              [-82.88223, 9.067221],
              [-82.74695, 8.984444],
              [-82.74167, 8.97972],
              [-82.73889, 8.975555],
              [-82.71085, 8.9311100000001],
              [-82.711121, 8.922222],
              [-82.714737, 8.9158330000001],
              [-82.719864, 8.9108240000001],
              [-82.749725, 8.884998],
              [-82.757782, 8.879444],
              [-82.76807, 8.8758320000001],
              [-82.81334, 8.862499],
              [-82.8564, 8.844166],
              [-82.860565, 8.8413890000001],
              [-82.877792, 8.8275],
              [-82.88112, 8.824165],
              [-82.91446, 8.762777],
              [-82.91612, 8.742777],
              [-82.91612, 8.739166],
              [-82.91446, 8.733889],
              [-82.89667, 8.71],
              [-82.881668, 8.690832],
              [-82.877502, 8.6880550000001],
              [-82.84029, 8.642776],
              [-82.83446, 8.63444],
              [-82.83195, 8.626665],
              [-82.825562, 8.57],
              [-82.82993, 8.47465],
              [-82.866394, 8.433887],
              [-82.87195, 8.429165],
              [-82.87834, 8.4249990000001],
              [-82.889175, 8.4219440000001],
              [-82.91556, 8.41722],
              [-82.925, 8.416666],
              [-82.93306, 8.414444],
              [-82.952515, 8.39944],
              [-83.01779, 8.340277],
              [-83.03029, 8.310555],
              [-83.005, 8.291111],
              [-82.973343, 8.27583],
              [-82.97084, 8.276943],
              [-82.952515, 8.271387],
              [-82.94751, 8.269165],
              [-82.93584, 8.260277],
              [-82.93085, 8.254721],
              [-82.886124, 8.1033330000001],
              [-82.88583, 8.100277],
              [-82.88667, 8.0786090000001],
              [-82.88695, 8.07194],
              [-82.89111, 8.0411110000001],
              [-82.894455, 8.03083],
              [-82.89885, 8.025669],
              [-82.89557, 8.087221],
              [-82.895844, 8.093887],
              [-82.89889, 8.10111],
              [-82.937225, 8.179165],
              [-82.9425, 8.1874980000001],
              [-82.96695, 8.224722],
              [-82.975006, 8.2341650000001],
              [-82.99445, 8.25],
              [-83.041397, 8.28583],
              [-83.079178, 8.303333],
              [-83.08974, 8.309721],
              [-83.121399, 8.333611],
              [-83.13917, 8.349998],
              [-83.142227, 8.354166],
              [-83.145569, 8.361111],
              [-83.14639, 8.366943],
              [-83.14418, 8.378054],
              [-83.13917, 8.386944],
              [-83.13612, 8.391109],
              [-83.13084, 8.39583],
              [-83.126678, 8.398611],
              [-83.121399, 8.40028],
              [-83.11389, 8.406387],
              [-83.10973, 8.4127770000001],
              [-83.09807, 8.4319440000001],
              [-83.095001, 8.439165],
              [-83.0939, 8.445],
              [-83.0939, 8.44861],
              [-83.09529, 8.4538880000001],
              [-83.18028, 8.599722],
              [-83.23222, 8.624166],
              [-83.32251, 8.66805],
              [-83.32667, 8.670832],
              [-83.327225, 8.672777],
              [-83.32779, 8.694166],
              [-83.3239, 8.700554],
              [-83.3239, 8.70333],
              [-83.326401, 8.71472],
              [-83.341675, 8.7269440000001],
              [-83.34639, 8.729166],
              [-83.3739, 8.73222],
              [-83.40472, 8.729166],
              [-83.464172, 8.717499],
              [-83.479172, 8.711943],
              [-83.4814, 8.710554],
              [-83.48418, 8.706388],
              [-83.48473, 8.70333],
              [-83.48251, 8.6916660000001],
              [-83.426392, 8.6127780000001],
              [-83.40001, 8.586943],
              [-83.37889, 8.5772210000001],
              [-83.35583, 8.571943],
              [-83.345, 8.568888],
              [-83.32584, 8.56028],
              [-83.32362, 8.5588870000001],
              [-83.293335, 8.53055],
              [-83.272507, 8.465832],
              [-83.272507, 8.4597210000001],
              [-83.272232, 8.41972],
              [-83.27724, 8.3805540000001],
              [-83.281677, 8.374722],
              [-83.29112, 8.37028],
              [-83.30751, 8.3713870000001],
              [-83.31279, 8.37278],
              [-83.368057, 8.397221],
              [-83.390839, 8.412222],
              [-83.40085, 8.418055],
              [-83.44862, 8.433887],
              [-83.47862, 8.441944],
              [-83.487793, 8.443054],
              [-83.51112, 8.443054],
              [-83.59557, 8.468332],
              [-83.73083, 8.583055],
              [-83.73611, 8.591665],
              [-83.73584, 8.6124990000001],
              [-83.72945, 8.633888],
              [-83.72862, 8.63611],
              [-83.708618, 8.67472],
              [-83.70695, 8.6766660000001],
              [-83.704727, 8.67778],
              [-83.67418, 8.68861],
              [-83.593903, 8.832777],
              [-83.58723, 8.849443],
              [-83.587509, 8.874998],
              [-83.60251, 8.967777],
              [-83.62001, 9.0255550000001],
              [-83.62418, 9.0352760000001],
              [-83.63084, 9.0425],
              [-83.705, 9.118332],
              [-83.725845, 9.138887],
              [-83.77057, 9.1816650000001],
              [-83.93417, 9.302221],
              [-83.95056, 9.31278],
              [-83.957779, 9.31611],
              [-84.008896, 9.337776],
              [-84.073624, 9.359722],
              [-84.123062, 9.37028],
              [-84.14612, 9.3749980000001],
              [-84.14944, 9.378611],
              [-84.16473, 9.40111],
              [-84.22945, 9.468611],
              [-84.38139, 9.504166],
              [-84.47696, 9.52583],
              [-84.489456, 9.5261100000001],
              [-84.49335, 9.523054],
              [-84.49834, 9.521111],
              [-84.523056, 9.5188880000001],
              [-84.53279, 9.51861],
              [-84.537231, 9.520832],
              [-84.61528, 9.5758320000001],
              [-84.62195, 9.583055],
              [-84.658615, 9.633055],
              [-84.671402, 9.66194],
              [-84.675, 9.68528],
              [-84.675, 9.691387],
              [-84.671951, 9.696943],
              [-84.6564, 9.7225],
              [-84.65112, 9.727777],
              [-84.640015, 9.734444],
              [-84.63417, 9.7422220000001],
              [-84.63, 9.751665],
              [-84.629181, 9.764444],
              [-84.63057, 9.77],
              [-84.6339, 9.777222],
              [-84.7075, 9.918333],
              [-84.736389, 9.963333],
              [-84.74028, 9.966665],
              [-84.747223, 9.96833],
              [-84.7664, 9.970276],
              [-84.805557, 9.967777],
              [-84.88167, 10.003332],
              [-84.917511, 10.028332],
              [-85.040558, 10.130278],
              [-85.070023, 10.15534],
              [-85.22945, 10.210554],
              [-85.24306, 10.204166],
              [-85.24335, 10.180277],
              [-85.241119, 10.117498],
              [-85.24084, 10.114443],
              [-85.23723, 10.100832],
              [-85.235001, 10.096388],
              [-85.22862, 10.088888],
              [-85.22278, 10.084444],
              [-85.22029, 10.083332],
              [-85.199722, 10.079721],
              [-85.195557, 10.07694],
              [-85.15779, 10.04528],
              [-85.167282, 10.02011],
              [-85.150284, 10.003332],
              [-85.13444, 9.991665],
              [-85.131958, 9.990555],
              [-85.006393, 9.937222],
              [-84.93224, 9.892221],
              [-84.897232, 9.807499],
              [-84.95113, 9.730555],
              [-85.14223, 9.589443],
              [-85.226791, 9.7273480000001],
              [-85.270569, 9.78],
              [-85.28639, 9.791943],
              [-85.345001, 9.832777],
              [-85.38084, 9.845276],
              [-85.38917, 9.847221],
              [-85.43973, 9.858332],
              [-85.52, 9.87361],
              [-85.52585, 9.874722],
              [-85.53639, 9.871111],
              [-85.545288, 9.86972],
              [-85.551956, 9.8699990000001],
              [-85.57251, 9.873888],
              [-85.619171, 9.888887],
              [-85.64889, 9.901388],
              [-85.66446, 9.9086090000001],
              [-85.714172, 9.99472],
              [-85.75279, 10.048887],
              [-85.763062, 10.055555],
              [-85.76668, 10.058887],
              [-85.79529, 10.099998],
              [-85.83334, 10.19472],
              [-85.850281, 10.243332],
              [-85.85278, 10.25111],
              [-85.86168, 10.368332],
              [-85.85335, 10.370554],
              [-85.801392, 10.410831],
              [-85.65472, 10.590277],
              [-85.63306, 10.616943],
              [-85.631958, 10.626389],
              [-85.675568, 10.796944],
              [-85.68445, 10.80167],
              [-85.70807, 10.808887],
              [-85.73611, 10.815554],
              [-85.739456, 10.815554],
              [-85.8175, 10.846388],
              [-85.91139, 10.891109],
              [-85.88417, 10.91389],
              [-85.84889, 10.941666],
              [-85.820847, 10.943888],
              [-85.74306, 10.937498],
              [-85.735001, 10.93528],
              [-85.72862, 10.931389],
              [-85.726669, 10.929722],
              [-85.72473, 10.924999],
              [-85.719177, 10.919998],
              [-85.716675, 10.920277],
              [-85.71474, 10.92166],
              [-85.705, 10.933054],
              [-85.69029, 10.961666],
              [-85.68945, 10.964443],
              [-85.667236, 11.044443],
              [-85.666946, 11.053888],
              [-85.66945, 11.058332],
              [-85.674728, 11.063332],
              [-85.685837, 11.073332],
              [-85.69029, 11.075277],
              [-85.692383, 11.076061],
              [-85.616959, 11.210554],
              [-85.61446, 11.21361],
              [-85.611389, 11.21361],
              [-85.564178, 11.209721],
              [-85.526947, 11.166111],
              [-85.420837, 11.126389],
              [-85.365005, 11.123333],
              [-85.35417, 11.121111],
              [-85.2664, 11.084444],
              [-85.22157, 11.065256],
              [-85.17917, 11.046944],
              [-85.168335, 11.04278],
              [-85.16472, 11.042427],
              [-85.16139, 11.03944],
              [-85.133621, 11.027222],
              [-85.08778, 11.009998]
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
