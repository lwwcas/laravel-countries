<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BF_BurkinaFaso extends Seeder
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
        $this->name = 'Burkina Faso';

        // Set the country's official name
        $this->official_name = 'Burkina Faso';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BF';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BFA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '854';

        // Set the international dialing code
        $this->international_phone = '226';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bf'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '5 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '20%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Agency for the Security of Information Systems (ANSSI)';

        // List popular web technologies in Burkina Faso
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'UV';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2361809';

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
        $this->population = 20903273; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 274200; // km²

        // Set the capital city
        $this->capital = 'Ouagadougou';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Africa/Ouagadougou',
            // Standard time offset
            'standard_time' => 'UTC+0', // Greenwich Mean Time
        ];

        // Set the independence day
        $this->independence_day = '1960-08-05'; // Date of independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union',
            'ECOWAS',
            'Organisation of Islamic Cooperation (OIC)',
            'La Francophonie',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 15.74; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Islam', 'Christianity', 'Traditional African religions'];

        // Describe the form of government
        $this->government = 'Unitary semi-presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Mali', 'iso_alpha_2' => 'ML'],
            ['name' => 'Niger', 'iso_alpha_2' => 'NE'],
            ['name' => 'Benin', 'iso_alpha_2' => 'BJ'],
            ['name' => 'Togo', 'iso_alpha_2' => 'TG'],
            ['name' => 'Ghana', 'iso_alpha_2' => 'GH'],
            ['name' => 'Ivory Coast', 'iso_alpha_2' => 'CI'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇫',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1EB',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1EB;',
            // CSS entities
            'css' => '\\1F1E7\\1F1EB',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127467;',
            // Direct UTF-8 string
            'utf8' => '🇧🇫',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDEB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bf:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1EB;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009639',
                // RGB color values
                'rgb' => '0,150,57',
                // CMYK color values
                'cmyk' => '100,0,62,41',
                // HSL color values
                'hsl' => '150,100%,29%',
                // HSV color values
                'hsv' => '150,100%,59%',
                // Pantone color code
                'pantone' => 'Green C',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '12.3714',
            // Longitude in decimal degrees
            'longitude' => '-1.5197',
            // Degrees with decimal
            'd' => '12.3714° N, 1.5197° W',
            // Degrees, minutes, seconds
            'dms' => '12°22\'17.04" N, 1°31\'10.92" W',
            // Degrees and decimal minutes
            'dm' => '12°22.284\' N, 1°31.182\' W',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]dd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N12°22\'17.04", W1°31\'10.92"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], dd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12°22\'17.04"N, 1°31\'10.92"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]dd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '12 22 17.04, -1 31 10.92',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '122217.04, -013110.92',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]dd.dddd',
                    // Coordinates in this format
                    'coordinates' => '12.3714 -1.5197',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]dd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '12.37140°,-1.51970°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]dd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '12.3714000N1.5197000W',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]ddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '1222.284N00131.182W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], dd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '12°22\'17.04"N, 1°31\'10.92"W',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]ddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '122217.04N013110.92W',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] dd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 12 22.284 W 1 31.182',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],dd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12:22:17N,1:31:10W',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] dd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12:22:17.04N 1:31:10.92W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] dd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12°22\'17"N 1°31\'10"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]dd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '12°22\'17" -1°31\'10"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] dd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '12d 22\' 17" N 1d 31\' 10" W',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] dd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12.3714N 1.5197W',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]dd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '12° 22.284, -1° 31.182',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '1222.284, -0131.182',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '1222.284N, 0131.182W',
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
      "properties": { "cca2": "bf" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-2.834048, 11.002007],
            [-2.833611, 10.957499],
            [-2.836945, 10.885832],
            [-2.905556, 10.739166],
            [-2.908334, 10.734999],
            [-2.927525, 10.708147],
            [-2.916111, 10.655277],
            [-2.916389, 10.598055],
            [-2.891945, 10.519444],
            [-2.833889, 10.365555],
            [-2.790556, 10.270832],
            [-2.771389, 10.216944],
            [-2.794445, 10.163055],
            [-2.796112, 10.057777],
            [-2.794723, 10.052221],
            [-2.777223, 10.008055],
            [-2.761389, 9.802221],
            [-2.765, 9.798887],
            [-2.794167, 9.735832],
            [-2.794167, 9.728888],
            [-2.7875, 9.694443],
            [-2.786111, 9.688889],
            [-2.783334, 9.684721],
            [-2.753612, 9.657776],
            [-2.749444, 9.654999],
            [-2.744666, 9.65304],
            [-2.760278, 9.629721],
            [-2.7625, 9.624998],
            [-2.768889, 9.603611],
            [-2.770278, 9.598055],
            [-2.771945, 9.578888],
            [-2.771111, 9.572777],
            [-2.769167, 9.567778],
            [-2.763611, 9.559444],
            [-2.756945, 9.551943],
            [-2.744445, 9.542776],
            [-2.739445, 9.540833],
            [-2.722778, 9.529722],
            [-2.718889, 9.526943],
            [-2.711945, 9.519999],
            [-2.702553, 9.508097],
            [-2.689167, 9.487499],
            [-2.685561, 9.481817],
            [-2.728889, 9.414999],
            [-2.734445, 9.406666],
            [-2.745, 9.396387],
            [-2.75, 9.394444],
            [-2.761667, 9.393888],
            [-2.771389, 9.398054],
            [-2.779723, 9.40361],
            [-2.801389, 9.423887],
            [-2.850833, 9.481388],
            [-2.918889, 9.571943],
            [-2.923056, 9.581665],
            [-2.9375, 9.627777],
            [-2.966667, 9.695276],
            [-2.971667, 9.704443],
            [-2.982778, 9.721109],
            [-2.989445, 9.727777],
            [-3.123889, 9.836111],
            [-3.208611, 9.901388],
            [-3.394167, 9.919998],
            [-3.633611, 9.954443],
            [-3.640556, 9.954443],
            [-3.706389, 9.943609],
            [-3.748056, 9.936388],
            [-3.759167, 9.933611],
            [-3.882223, 9.897778],
            [-3.890837, 9.894238],
            [-3.901389, 9.88361],
            [-3.905556, 9.880833],
            [-3.936389, 9.863054],
            [-4.034167, 9.806944],
            [-4.121389, 9.83],
            [-4.126945, 9.828609],
            [-4.255, 9.748055],
            [-4.259167, 9.745277],
            [-4.266945, 9.739166],
            [-4.279445, 9.67861],
            [-4.279445, 9.673054],
            [-4.283056, 9.651667],
            [-4.309723, 9.60111],
            [-4.312456, 9.599972],
            [-4.319445, 9.607222],
            [-4.331389, 9.61611],
            [-4.335556, 9.618889],
            [-4.426111, 9.657499],
            [-4.514723, 9.690277],
            [-4.602222, 9.721388],
            [-4.607779, 9.719999],
            [-4.650278, 9.708332],
            [-4.655556, 9.70611],
            [-4.6575, 9.701387],
            [-4.6575, 9.695833],
            [-4.704445, 9.698055],
            [-4.775278, 9.736666],
            [-4.812222, 9.771666],
            [-4.813612, 9.777222],
            [-4.810278, 9.780554],
            [-4.804723, 9.781944],
            [-4.797501, 9.781944],
            [-4.786389, 9.779165],
            [-4.77889, 9.785276],
            [-4.785556, 9.825277],
            [-4.787223, 9.830832],
            [-4.830278, 9.862499],
            [-4.949722, 9.94861],
            [-4.990278, 10.063889],
            [-5.121667, 10.299166],
            [-5.125, 10.302776],
            [-5.13, 10.304722],
            [-5.136111, 10.305555],
            [-5.24389, 10.319721],
            [-5.268612, 10.319166],
            [-5.307501, 10.305277],
            [-5.338334, 10.296944],
            [-5.371112, 10.289444],
            [-5.391667, 10.292776],
            [-5.4025, 10.295555],
            [-5.411112, 10.301109],
            [-5.468612, 10.346388],
            [-5.471945, 10.349722],
            [-5.520556, 10.424721],
            [-5.521111, 10.430832],
            [-5.51985, 10.436272],
            [-5.483612, 10.527222],
            [-5.473333, 10.6325],
            [-5.46639, 10.691111],
            [-5.462223, 10.707499],
            [-5.456208, 10.721651],
            [-5.444723, 10.763332],
            [-5.413334, 10.830276],
            [-5.411389, 10.834999],
            [-5.410001, 10.847221],
            [-5.410001, 10.854166],
            [-5.414167, 10.863888],
            [-5.424167, 10.874998],
            [-5.438056, 10.888611],
            [-5.443611, 10.896944],
            [-5.445834, 10.901667],
            [-5.479445, 11.002222],
            [-5.486112, 11.030277],
            [-5.486945, 11.036665],
            [-5.488334, 11.069443],
            [-5.488334, 11.076387],
            [-5.485278, 11.080555],
            [-5.480556, 11.082777],
            [-5.463612, 11.086943],
            [-5.394167, 11.094444],
            [-5.370278, 11.09861],
            [-5.355, 11.104166],
            [-5.330278, 11.114721],
            [-5.313612, 11.125555],
            [-5.299445, 11.139444],
            [-5.24875, 11.25],
            [-5.246945, 11.255278],
            [-5.208611, 11.461666],
            [-5.201667, 11.534721],
            [-5.201667, 11.541666],
            [-5.214445, 11.577499],
            [-5.22, 11.585554],
            [-5.230556, 11.596109],
            [-5.268612, 11.686943],
            [-5.2875, 11.788055],
            [-5.273056, 11.843887],
            [-5.168334, 11.935555],
            [-5.149167, 11.951387],
            [-5.145001, 11.954166],
            [-5.1175, 11.964443],
            [-5.079722, 11.975555],
            [-4.942779, 12.008608],
            [-4.698613, 12.062775],
            [-4.633427, 12.067223],
            [-4.630836, 12.090275],
            [-4.630002, 12.096386],
            [-4.625835, 12.113052],
            [-4.623891, 12.117775],
            [-4.569447, 12.201109],
            [-4.482501, 12.274719],
            [-4.4175, 12.300831],
            [-4.434446, 12.424164],
            [-4.437779, 12.434443],
            [-4.426391, 12.457775],
            [-4.419168, 12.471666],
            [-4.414445, 12.480555],
            [-4.400278, 12.50111],
            [-4.393889, 12.50861],
            [-4.381111, 12.516943],
            [-4.370278, 12.525833],
            [-4.365556, 12.533333],
            [-4.365556, 12.538887],
            [-4.419723, 12.622499],
            [-4.423056, 12.625832],
            [-4.430834, 12.632221],
            [-4.441389, 12.635555],
            [-4.447779, 12.634998],
            [-4.4525, 12.636944],
            [-4.456389, 12.640276],
            [-4.473889, 12.657776],
            [-4.475278, 12.663332],
            [-4.475278, 12.669998],
            [-4.470278, 12.71361],
            [-4.468889, 12.723888],
            [-4.288889, 12.714998],
            [-4.268889, 12.716389],
            [-4.257501, 12.719166],
            [-4.222778, 12.73361],
            [-4.219445, 12.736944],
            [-4.207223, 12.766388],
            [-4.205833, 12.771944],
            [-4.194445, 12.828609],
            [-4.205278, 12.940277],
            [-4.209445, 12.956665],
            [-4.214445, 12.965832],
            [-4.220834, 12.973331],
            [-4.246112, 12.99],
            [-4.251112, 12.991943],
            [-4.255279, 12.99472],
            [-4.268889, 13.009165],
            [-4.277223, 13.021666],
            [-4.335, 13.109999],
            [-4.337223, 13.115],
            [-4.337223, 13.121666],
            [-4.332778, 13.131388],
            [-4.315001, 13.162222],
            [-4.312222, 13.166388],
            [-4.236945, 13.240833],
            [-4.194445, 13.275],
            [-4.189445, 13.276943],
            [-4.166112, 13.273611],
            [-4.160278, 13.275],
            [-4.151945, 13.280277],
            [-4.148056, 13.283888],
            [-3.976111, 13.47611],
            [-3.964253, 13.50383],
            [-3.958333, 13.502777],
            [-3.954167, 13.5],
            [-3.9025, 13.457777],
            [-3.901111, 13.452221],
            [-3.904723, 13.441944],
            [-3.785725, 13.359068],
            [-3.616945, 13.22361],
            [-3.588611, 13.202776],
            [-3.540833, 13.178888],
            [-3.535278, 13.177776],
            [-3.508334, 13.178888],
            [-3.450834, 13.172222],
            [-3.446854, 13.170491],
            [-3.437675, 13.166498],
            [-3.43328, 13.172808],
            [-3.4275, 13.18111],
            [-3.423889, 13.191387],
            [-3.424445, 13.211388],
            [-3.43, 13.230833],
            [-3.43464, 13.239923],
            [-3.441112, 13.247221],
            [-3.444723, 13.257776],
            [-3.444445, 13.264721],
            [-3.440536, 13.274389],
            [-3.433333, 13.27611],
            [-3.430509, 13.27611],
            [-3.420278, 13.27611],
            [-3.394167, 13.276667],
            [-3.373889, 13.277222],
            [-3.232223, 13.288055],
            [-3.233889, 13.322498],
            [-3.237223, 13.359722],
            [-3.260278, 13.496387],
            [-3.273334, 13.550278],
            [-3.2575, 13.696665],
            [-3.211112, 13.708055],
            [-3.099445, 13.68611],
            [-2.958319, 13.629166],
            [-2.942223, 13.633055],
            [-2.879167, 13.655554],
            [-2.885278, 13.673054],
            [-2.904445, 13.721666],
            [-2.904445, 13.816666],
            [-2.903056, 13.828054],
            [-2.84, 14.005554],
            [-2.815556, 14.050278],
            [-2.646667, 14.161943],
            [-2.599722, 14.211666],
            [-2.474722, 14.287498],
            [-2.455556, 14.284721],
            [-2.384167, 14.265554],
            [-2.298611, 14.242222],
            [-2.280278, 14.234444],
            [-2.245, 14.217777],
            [-2.1075, 14.151388],
            [-2.103716, 14.15263],
            [-2.006945, 14.187777],
            [-1.996667, 14.308054],
            [-1.9925, 14.342499],
            [-1.989444, 14.376944],
            [-1.984167, 14.410276],
            [-1.980834, 14.474722],
            [-1.9075, 14.488609],
            [-1.777778, 14.48111],
            [-1.678334, 14.500555],
            [-1.361841, 14.701359],
            [-1.318889, 14.728611],
            [-1.093889, 14.784166],
            [-1.074167, 14.776943],
            [-1.003023, 14.840099],
            [-0.725278, 15.082777],
            [-0.723143, 15.082367],
            [-0.443611, 15.082777],
            [-0.386667, 15.005278],
            [-0.246389, 15.077499],
            [0, 14.99437],
            [0.235048, 14.915068],
            [0.237222, 14.887499],
            [0.235, 14.882776],
            [0.232222, 14.878611],
            [0.225, 14.871944],
            [0.215556, 14.867222],
            [0.208333, 14.860554],
            [0.199444, 14.848331],
            [0.193333, 14.835833],
            [0.241389, 14.752222],
            [0.225278, 14.700832],
            [0.166667, 14.523054],
            [0.189444, 14.464722],
            [0.233029, 14.425423],
            [0.296389, 14.367222],
            [0.321111, 14.362778],
            [0.384722, 14.283609],
            [0.405278, 14.254166],
            [0.410833, 14.245832],
            [0.409444, 14.240276],
            [0.393889, 14.182777],
            [0.390833, 14.17861],
            [0.366111, 14.154444],
            [0.356667, 14.142776],
            [0.354444, 14.138054],
            [0.351389, 14.126944],
            [0.3525, 14.121387],
            [0.465, 13.91361],
            [0.515556, 13.854166],
            [0.599444, 13.708055],
            [0.602222, 13.703888],
            [0.6125, 13.693333],
            [0.616111, 13.689999],
            [0.625, 13.684166],
            [0.786389, 13.668888],
            [0.995278, 13.568054],
            [0.998055, 13.563889],
            [1.013055, 13.537222],
            [1.017778, 13.528332],
            [1.018889, 13.522778],
            [1.013611, 13.506943],
            [1.013333, 13.5],
            [1.014444, 13.486944],
            [1.016667, 13.482222],
            [1.031667, 13.4625],
            [1.123889, 13.413332],
            [1.170833, 13.396387],
            [1.203333, 13.38722],
            [1.209722, 13.387777],
            [1.220278, 13.391109],
            [1.231667, 13.39361],
            [1.238333, 13.393888],
            [1.244444, 13.393055],
            [1.252222, 13.386665],
            [1.279166, 13.357777],
            [1.285306, 13.349957],
            [1.275772, 13.344206],
            [1.265833, 13.340277],
            [1.182222, 13.312777],
            [1.176666, 13.314165],
            [1.107778, 13.335278],
            [1.073333, 13.350555],
            [1.043889, 13.363609],
            [1.011667, 13.372776],
            [0.991667, 13.371666],
            [0.990833, 13.336666],
            [0.989244, 13.090567],
            [0.989167, 13.047222],
            [1.011389, 13.023888],
            [1.117222, 13.01111],
            [1.322288, 12.84252],
            [1.578333, 12.629999],
            [1.871666, 12.608889],
            [1.928056, 12.700554],
            [1.988889, 12.73111],
            [2.106389, 12.714722],
            [2.134444, 12.700277],
            [2.1425, 12.694443],
            [2.146111, 12.690832],
            [2.200833, 12.630833],
            [2.220833, 12.593611],
            [2.256111, 12.48111],
            [2.244999, 12.417219],
            [2.22611, 12.41972],
            [2.161666, 12.415552],
            [2.087777, 12.389997],
            [2.077777, 12.386108],
            [2.07111, 12.378885],
            [2.058332, 12.35722],
            [2.320872, 11.999996],
            [2.392092, 11.904013],
            [2.397925, 11.896152],
            [2.3925, 11.88722],
            [2.340833, 11.76861],
            [2.308888, 11.688332],
            [2.268333, 11.650276],
            [2.256111, 11.641666],
            [2.193889, 11.603611],
            [2.052222, 11.454721],
            [2.026944, 11.43111],
            [2.020033, 11.426077],
            [2.014722, 11.422499],
            [2.005, 11.41861],
            [1.992778, 11.416943],
            [1.985833, 11.417221],
            [1.902966, 11.429392],
            [1.891389, 11.433611],
            [1.887222, 11.436388],
            [1.880555, 11.443609],
            [1.868611, 11.445833],
            [1.862222, 11.445276],
            [1.803889, 11.439444],
            [1.736944, 11.415833],
            [1.615556, 11.388611],
            [1.609167, 11.388332],
            [1.593055, 11.393332],
            [1.585556, 11.399721],
            [1.584167, 11.405277],
            [1.582778, 11.424166],
            [1.571389, 11.44972],
            [1.568611, 11.452499],
            [1.546389, 11.457499],
            [1.54, 11.458055],
            [1.4825, 11.459721],
            [1.435278, 11.458887],
            [1.428602, 11.451466],
            [1.4225, 11.452221],
            [1.411111, 11.447222],
            [1.393333, 11.437222],
            [1.386667, 11.429722],
            [1.328333, 11.351387],
            [1.326944, 11.345833],
            [1.3275, 11.339722],
            [1.329444, 11.334721],
            [1.334722, 11.326387],
            [1.341666, 11.319443],
            [1.347778, 11.311666],
            [1.351111, 11.3025],
            [1.264722, 11.246111],
            [1.192778, 11.265276],
            [1.148889, 11.224443],
            [1.083055, 11.122499],
            [0.985278, 11.079443],
            [0.950278, 11.029444],
            [0.91797, 10.996399],
            [0.811944, 10.996944],
            [0.724444, 10.996944],
            [0.666111, 10.996111],
            [0.630833, 10.983889],
            [0.504167, 10.936943],
            [0.513333, 10.971388],
            [0.516389, 10.979443],
            [0.506944, 11.002499],
            [0.504167, 11.006666],
            [0.416944, 11.024443],
            [0.218889, 11.064165],
            [0.19, 11.070555],
            [0.050278, 11.098888],
            [-0.089722, 11.127222],
            [-0.142222, 11.137777],
            [-0.149762, 11.13854],
            [-0.176944, 11.144722],
            [-0.285278, 11.166666],
            [-0.286944, 11.161943],
            [-0.288611, 11.149443],
            [-0.286667, 11.144722],
            [-0.364167, 11.084721],
            [-0.61, 10.917221],
            [-0.618333, 10.911665],
            [-0.622778, 10.913332],
            [-0.664722, 10.954721],
            [-0.6675, 10.958887],
            [-0.678611, 10.988609],
            [-0.679834, 10.997797],
            [-0.784444, 10.998055],
            [-0.902222, 11.006666],
            [-0.986945, 11.014444],
            [-1.092222, 11.014721],
            [-1.092778, 11.013887],
            [-1.091111, 10.998055],
            [-1.372778, 10.999722],
            [-1.419675, 11.026468],
            [-1.555, 11.028332],
            [-1.56537, 11.018795],
            [-1.570833, 11.000277],
            [-1.728611, 11.000277],
            [-1.991389, 11.000277],
            [-2.3, 11.00111],
            [-2.735, 11.001944],
            [-2.834048, 11.002007]
          ]
        ]
      }
    }
  ]
}
';
    }
}
