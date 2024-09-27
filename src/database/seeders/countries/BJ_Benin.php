<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BJ_Benin extends Seeder
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
    public $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Benin';

        // Set the country's official name
        $this->official_name = 'Republic of Benin';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BJ';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BEN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '204';

        // Set the international dialing code
        $this->international_phone = '229';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bj'];

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
        $this->internet_penetration = '20%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agence Nationale de la Sécurité des Systèmes d\'Information (ANSSI)';

        // List popular web technologies in Benin
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'DN';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2395170';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'West African CFA franc',
            // Currency code
            'code' => 'XOF',
            // Currency symbol
            'symbol' => 'CFA',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['500', '1,000', '2,000', '5,000', '10,000'],
            // Main coins
            'coins_main' => ['50', '100', '200', '250', '500'],
            // Subunit coins
            'coins_sub' => [], // Centimes are not commonly used
        ];

        // Set the population
        $this->population = 12123198; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 114763; // km²

        // Set the capital city
        $this->capital = 'Porto-Novo';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Africa/Porto-Novo',
            // Standard time offset
            'standard_time' => 'UTC+1', // West Africa Time
        ];

        // Set the independence day
        $this->independence_day = '1960-08-01'; // Date of independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union',
            'ECOWAS',
            'Organisation of Islamic Cooperation',
            'La Francophonie',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 14; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity', 'Islam', 'Traditional African religions (Vodun)'];

        // Describe the form of government
        $this->government = 'Presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Nigeria', 'iso_alpha_2' => 'NG'],
            ['name' => 'Togo', 'iso_alpha_2' => 'TG'],
            ['name' => 'Burkina Faso', 'iso_alpha_2' => 'BF'],
            ['name' => 'Niger', 'iso_alpha_2' => 'NE'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇯',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1EF',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1EF;',
            // CSS entities
            'css' => '\\1F1E7\\1F1EF',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127471;',
            // Direct UTF-8 string
            'utf8' => '🇧🇯',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDEF',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bj:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1EF;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#008751',
                // RGB color values
                'rgb' => '0,135,81',
                // CMYK color values
                'cmyk' => '100,0,40,47',
                // HSL color values
                'hsl' => '154,100%,26%',
                // HSV color values
                'hsv' => '154,100%,53%',
                // Pantone color code
                'pantone' => '3415 C',
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
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#F31830',
                // RGB color values
                'rgb' => '243,24,48',
                // CMYK color values
                'cmyk' => '0,90,80,5',
                // HSL color values
                'hsl' => '351,90%,52%',
                // HSV color values
                'hsv' => '351,90%,95%',
                // Pantone color code
                'pantone' => 'Pantone 185 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '6.4969',
            // Longitude in decimal degrees
            'longitude' => '2.6289',
            // Degrees with decimal
            'dd' => '6.4969° N, 2.6289° E',
            // Degrees, minutes, seconds
            'dms' => '6°29\'48.84" N, 2°37\'44.04" E',
            // Degrees and decimal minutes
            'dm' => '6°29.814\' N, 2°37.734\' E',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N6°29\'48.84", E2°37\'44.04"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], dd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '6°29\'48.84"N, 2°37\'44.04"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]dd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '6 29 48.84, 2 37 44.04',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '062948.84, 023744.04',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]dd.dddd',
                    // Coordinates in this format
                    'coordinates' => '6.4969 2.6289',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]dd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '6.49690°,2.62890°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]dd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '6.4969000N2.6289000E',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]ddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '0629.814N00237.734E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], dd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '6°29\'48.84"N, 2°37\'44.04"E',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]ddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '062948.84N023744.04E',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] dd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 6 29.814 E 2 37.734',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '6:29:48N,2:37:44E',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '6:29:48.84N 2:37:44.04E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '6°29\'48"N 2°37\'44"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '6°29\'48" 2°37\'44"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '6d 29\' 48" N 2d 37\' 44" E',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '6.4969N 2.6289E',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '6° 29.814, 2° 37.734',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '0629.814, 0237.734',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '0629.814N, 0237.734E',
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
      "properties": { "cca2": "bj" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [2.484418, 6.340486],
            [2.48, 6.338611],
            [2.455, 6.333055],
            [2.404722, 6.33],
            [2.369722, 6.330277],
            [2.355833, 6.330555],
            [2.331111, 6.32861],
            [2.275833, 6.323333],
            [2.056111, 6.294167],
            [1.987352, 6.282105],
            [1.926944, 6.275277],
            [1.803333, 6.2575],
            [1.6975, 6.238055],
            [1.64, 6.22111],
            [1.635404, 6.218721],
            [1.630555, 6.232222],
            [1.628984, 6.23805],
            [1.6525, 6.250278],
            [1.675567, 6.258356],
            [1.680833, 6.259722],
            [1.700278, 6.261944],
            [1.7425, 6.269722],
            [1.797799, 6.280254],
            [1.799327, 6.281057],
            [1.795278, 6.308332],
            [1.7725, 6.412499],
            [1.770555, 6.417222],
            [1.749166, 6.456666],
            [1.693055, 6.549166],
            [1.670278, 6.575833],
            [1.666389, 6.578888],
            [1.661389, 6.578333],
            [1.658056, 6.575],
            [1.655421, 6.570669],
            [1.6475, 6.573055],
            [1.619167, 6.591666],
            [1.614444, 6.600833],
            [1.575278, 6.679722],
            [1.588611, 6.713611],
            [1.591666, 6.717777],
            [1.6075, 6.796666],
            [1.609167, 6.880833],
            [1.606111, 6.895277],
            [1.603333, 6.899444],
            [1.598055, 6.901667],
            [1.577024, 6.909273],
            [1.563889, 6.943055],
            [1.560833, 6.953333],
            [1.548523, 6.995179],
            [1.552222, 6.996666],
            [1.556389, 6.997222],
            [1.558396, 6.997183],
            [1.6425, 6.995555],
            [1.645555, 7.333888],
            [1.643744, 7.409674],
            [1.644444, 7.443055],
            [1.649722, 7.510833],
            [1.650555, 7.516944],
            [1.655421, 7.52977],
            [1.651944, 7.542222],
            [1.649444, 7.553333],
            [1.6425, 7.62],
            [1.641389, 7.636389],
            [1.639167, 7.757777],
            [1.639444, 7.761944],
            [1.638055, 7.99861],
            [1.634722, 8.357777],
            [1.627222, 8.362778],
            [1.617056, 8.367107],
            [1.624166, 8.425278],
            [1.625396, 8.587284],
            [1.626111, 8.726665],
            [1.626667, 8.846943],
            [1.620555, 9.026943],
            [1.62, 9.033333],
            [1.617778, 9.049721],
            [1.607778, 9.094166],
            [1.606389, 9.099722],
            [1.601944, 9.10861],
            [1.57, 9.165833],
            [1.567222, 9.169998],
            [1.551666, 9.18222],
            [1.543333, 9.187777],
            [1.538611, 9.189999],
            [1.526389, 9.19861],
            [1.510556, 9.210833],
            [1.493611, 9.228333],
            [1.452455, 9.280415],
            [1.431625, 9.301245],
            [1.419444, 9.316944],
            [1.416667, 9.32111],
            [1.406944, 9.344721],
            [1.400278, 9.378611],
            [1.398611, 9.397221],
            [1.398542, 9.429901],
            [1.393055, 9.479166],
            [1.388611, 9.492222],
            [1.385, 9.494444],
            [1.364254, 9.481348],
            [1.361111, 9.485554],
            [1.3375, 9.5425],
            [1.368333, 9.596666],
            [1.37, 9.636389],
            [1.358889, 9.914721],
            [1.355, 9.995277],
            [1.307778, 10.025276],
            [1.187222, 10.099998],
            [1.172404, 10.108603],
            [1.066944, 10.174444],
            [0.999373, 10.22007],
            [0.776667, 10.376665],
            [0.785278, 10.524443],
            [0.789722, 10.534166],
            [0.795555, 10.542221],
            [0.800555, 10.551109],
            [0.805, 10.567499],
            [0.806944, 10.579721],
            [0.8075, 10.607222],
            [0.804722, 10.638332],
            [0.803333, 10.643888],
            [0.800278, 10.68111],
            [0.800555, 10.701666],
            [0.802186, 10.712442],
            [0.804444, 10.718887],
            [0.809722, 10.727777],
            [0.879444, 10.799721],
            [0.893611, 10.866943],
            [0.890556, 10.91111],
            [0.91797, 10.996399],
            [0.950278, 11.029444],
            [0.985278, 11.079443],
            [1.083055, 11.122499],
            [1.148889, 11.224443],
            [1.192778, 11.265276],
            [1.264722, 11.246111],
            [1.351111, 11.3025],
            [1.347778, 11.311666],
            [1.341666, 11.319443],
            [1.334722, 11.326387],
            [1.329444, 11.334721],
            [1.3275, 11.339722],
            [1.326944, 11.345833],
            [1.328333, 11.351387],
            [1.386667, 11.429722],
            [1.393333, 11.437222],
            [1.411111, 11.447222],
            [1.4225, 11.452221],
            [1.428602, 11.451466],
            [1.435278, 11.458887],
            [1.4825, 11.459721],
            [1.54, 11.458055],
            [1.546389, 11.457499],
            [1.568611, 11.452499],
            [1.571389, 11.44972],
            [1.582778, 11.424166],
            [1.584167, 11.405277],
            [1.585556, 11.399721],
            [1.593055, 11.393332],
            [1.609167, 11.388332],
            [1.615556, 11.388611],
            [1.736944, 11.415833],
            [1.803889, 11.439444],
            [1.862222, 11.445276],
            [1.868611, 11.445833],
            [1.880555, 11.443609],
            [1.887222, 11.436388],
            [1.891389, 11.433611],
            [1.902966, 11.429392],
            [1.985833, 11.417221],
            [1.992778, 11.416943],
            [2.005, 11.41861],
            [2.014722, 11.422499],
            [2.020033, 11.426077],
            [2.026944, 11.43111],
            [2.052222, 11.454721],
            [2.193889, 11.603611],
            [2.256111, 11.641666],
            [2.268333, 11.650276],
            [2.308888, 11.688332],
            [2.340833, 11.76861],
            [2.3925, 11.88722],
            [2.397925, 11.896152],
            [2.401667, 11.95722],
            [2.403609, 12.084442],
            [2.389998, 12.124165],
            [2.387498, 12.135275],
            [2.376387, 12.206663],
            [2.376387, 12.234997],
            [2.378054, 12.240274],
            [2.385277, 12.246943],
            [2.389443, 12.24972],
            [2.394443, 12.251663],
            [2.535835, 12.281107],
            [2.61167, 12.292496],
            [2.665006, 12.302771],
            [2.712228, 12.348883],
            [2.725839, 12.356104],
            [2.775285, 12.379993],
            [2.785285, 12.383883],
            [2.83862, 12.396658],
            [2.856677, 12.387213],
            [2.872512, 12.376379],
            [3.010035, 12.268585],
            [3.162286, 12.113289],
            [3.250625, 12.020784],
            [3.253959, 12.017174],
            [3.257965, 12.007479],
            [3.259254, 11.999998],
            [3.261666, 11.977776],
            [3.27, 11.951944],
            [3.298055, 11.910276],
            [3.312222, 11.889999],
            [3.316389, 11.886944],
            [3.3275, 11.883888],
            [3.353611, 11.884998],
            [3.359444, 11.886389],
            [3.372222, 11.894165],
            [3.378055, 11.895277],
            [3.468889, 11.855833],
            [3.473611, 11.853611],
            [3.497777, 11.835554],
            [3.507222, 11.825554],
            [3.513333, 11.817778],
            [3.546111, 11.774443],
            [3.554166, 11.743332],
            [3.556111, 11.738333],
            [3.558888, 11.734165],
            [3.562222, 11.730555],
            [3.604459, 11.693274],
            [3.574166, 11.654999],
            [3.568333, 11.646944],
            [3.525278, 11.56361],
            [3.475, 11.429722],
            [3.60886, 11.25],
            [3.694722, 11.134722],
            [3.714167, 11.127222],
            [3.735774, 11.120634],
            [3.728611, 11.084166],
            [3.728889, 11.070833],
            [3.730556, 11.040554],
            [3.731667, 11.029444],
            [3.732778, 11.023888],
            [3.738889, 11.016109],
            [3.747222, 11.011665],
            [3.775278, 10.898611],
            [3.759444, 10.8475],
            [3.755, 10.839443],
            [3.748888, 10.831388],
            [3.746666, 10.826666],
            [3.745833, 10.820276],
            [3.748611, 10.803055],
            [3.753889, 10.794443],
            [3.785555, 10.756943],
            [3.826111, 10.714167],
            [3.835556, 10.709721],
            [3.846666, 10.703054],
            [3.848333, 10.689999],
            [3.855, 10.584999],
            [3.812778, 10.449444],
            [3.793611, 10.405554],
            [3.789444, 10.402777],
            [3.768611, 10.410555],
            [3.759166, 10.414999],
            [3.740555, 10.425278],
            [3.728333, 10.433887],
            [3.706388, 10.447222],
            [3.701389, 10.449444],
            [3.695278, 10.450277],
            [3.688889, 10.44972],
            [3.683888, 10.448055],
            [3.64, 10.415554],
            [3.637222, 10.411665],
            [3.581944, 10.275276],
            [3.644166, 10.199444],
            [3.657222, 10.192778],
            [3.666944, 10.188332],
            [3.676666, 10.183887],
            [3.680555, 10.180832],
            [3.683888, 10.170555],
            [3.684444, 10.15111],
            [3.68, 10.120277],
            [3.675833, 10.103333],
            [3.616111, 9.962221],
            [3.609444, 9.948055],
            [3.606389, 9.943888],
            [3.558888, 9.880278],
            [3.525278, 9.844166],
            [3.521111, 9.844444],
            [3.512222, 9.849443],
            [3.501944, 9.853333],
            [3.483889, 9.856667],
            [3.476944, 9.856943],
            [3.471389, 9.855833],
            [3.353889, 9.815832],
            [3.346666, 9.809166],
            [3.343889, 9.804998],
            [3.336389, 9.791388],
            [3.331666, 9.775276],
            [3.330833, 9.768888],
            [3.331111, 9.755833],
            [3.337222, 9.734999],
            [3.352777, 9.703054],
            [3.363328, 9.681939],
            [3.317222, 9.63611],
            [3.171389, 9.496387],
            [3.141666, 9.441111],
            [3.141944, 9.429165],
            [3.145, 9.418888],
            [3.152222, 9.405554],
            [3.16, 9.38611],
            [3.165833, 9.371387],
            [3.166944, 9.365833],
            [3.166389, 9.302776],
            [3.131389, 9.194443],
            [3.095, 9.090555],
            [3.005, 9.065277],
            [2.9875, 9.06111],
            [2.9675, 9.081665],
            [2.905278, 9.078888],
            [2.813611, 9.065277],
            [2.794722, 9.056944],
            [2.789444, 9.043888],
            [2.783055, 9.016666],
            [2.745277, 8.795277],
            [2.742958, 8.770763],
            [2.746944, 8.719444],
            [2.756389, 8.581944],
            [2.756389, 8.555277],
            [2.752966, 8.535576],
            [2.759722, 8.529722],
            [2.762777, 8.519165],
            [2.758333, 8.49111],
            [2.7525, 8.461943],
            [2.7475, 8.453054],
            [2.728889, 8.437222],
            [2.723055, 8.429165],
            [2.720833, 8.424444],
            [2.710278, 8.351944],
            [2.709167, 8.338888],
            [2.71, 8.326387],
            [2.728055, 8.256666],
            [2.733333, 8.248333],
            [2.74, 8.24111],
            [2.742777, 8.236944],
            [2.751111, 8.218054],
            [2.753611, 8.206944],
            [2.751111, 8.195555],
            [2.741389, 8.156111],
            [2.7275, 8.108332],
            [2.708889, 8.008055],
            [2.6925, 7.906388],
            [2.695278, 7.882222],
            [2.702926, 7.865039],
            [2.7375, 7.817778],
            [2.740278, 7.813611],
            [2.742222, 7.808611],
            [2.743055, 7.796389],
            [2.742777, 7.782777],
            [2.738611, 7.716389],
            [2.73295, 7.658206],
            [2.732222, 7.651944],
            [2.736666, 7.596389],
            [2.77, 7.254444],
            [2.778611, 7.134444],
            [2.749722, 7.094166],
            [2.725277, 6.954444],
            [2.726388, 6.948889],
            [2.728333, 6.944166],
            [2.731667, 6.940555],
            [2.747222, 6.928611],
            [2.750556, 6.924999],
            [2.753333, 6.920833],
            [2.756389, 6.910555],
            [2.762777, 6.764999],
            [2.761666, 6.671389],
            [2.756667, 6.570833],
            [2.754167, 6.559444],
            [2.727222, 6.474722],
            [2.719606, 6.452241],
            [2.719606, 6.365505],
            [2.643055, 6.356111],
            [2.54, 6.344999],
            [2.484418, 6.340486]
          ]
        ]
      }
    }
  ]
}
';
    }
}
