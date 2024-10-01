<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class EH_WesternSahara extends CountrySeeder
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
    public ?string $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Western Sahara';

        // Set the country's official name
        $this->official_name = 'Sahrawi Arab Democratic Republic';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'EH';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ESH';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '732';

        // Set the international dialing code
        $this->international_phone = '212'; // The international dialing code follows Morocco's, which administers the majority of the territory

        // Define the languages spoken in the country
        $this->languages = ['ar', 'es']; // Arabic is the official language, with Spanish commonly spoken

        // Define the top-level domain(s)
        $this->tld = ['.eh'];

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
        $this->internet_penetration = '22%'; // Percentage of the population with internet access is low due to territorial disputes and infrastructure limitations

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // The region lacks a formal cybersecurity agency

        // List popular web technologies in Western Sahara
        $this->popular_technologies = ['PHP', 'JavaScript'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'WS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2461445';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Moroccan dirham',
            // Currency code
            'code' => 'MAD',
            // Currency symbol
            'symbol' => 'د.م.',
            // Main unit
            'main_unit' => 'dirham',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '5', '10'],
            // Subunit coins
            'coins_sub' => ['10', '20', '50 centimes'],
        ];

        // Set the population
        $this->population = 652271; // Population is an estimate due to the conflict over the territory

        // Set the area in square kilometers
        $this->area = 266000; // km²

        // Set the capital city
        $this->capital = 'El Aaiún'; // Largest city in the region, under Moroccan administration

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/El_Aaiun',
                // Standard time offset
                'standard_time' => 'UTC+1', // Western European Time (WET) under Moroccan administration
            ],
        ];

        // Set the independence day
        $this->independence_day = '1976-02-27'; // Declared independence from Spain, but it remains a disputed territory

        // List international organizations the country is part of
        $this->international_organizations = [
            'African Union (AU)', // The Sahrawi Arab Democratic Republic is recognized by the African Union
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.9; // GDP in billions of USD is an approximation due to limited economic data

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni)',
        ];

        // Describe the form of government
        $this->government = 'Partially recognized government-in-exile (Sahrawi Arab Democratic Republic)';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football (soccer) is popular in Western Sahara

        // Define bordering countries
        $this->borders = [
            ['name' => 'Morocco', 'iso_alpha_2' => 'MA'],
            ['name' => 'Algeria', 'iso_alpha_2' => 'DZ'],
            ['name' => 'Mauritania', 'iso_alpha_2' => 'MR'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇪🇭',
            // Unicode code points
            'uCode' => 'U+1F1EA U+1F1ED',
            // HTML entities
            'html' => '&#x1F1EA;&#x1F1ED;',
            // CSS entities
            'css' => '\\1F1EA\\1F1ED',
            // Decimal Unicode entities
            'decimal' => '&#127466;&#127469;',
            // Direct UTF-8 string
            'utf8' => '🇪🇭',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEA\uD83C\uDDED',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-eh:',
            // Hexadecimal entity
            'hex' => '&#x1F1EA;&#x1F1ED;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#D21034',
                // RGB color values
                'rgb' => '210,16,52',
                // CMYK color values
                'cmyk' => '0,92,75,18',
                // HSL color values
                'hsl' => '346,87%,44%',
                // HSV color values
                'hsv' => '346,92%,82%',
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
                'pantone' => 'Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A33',
                // RGB color values
                'rgb' => '0,122,51',
                // CMYK color values
                'cmyk' => '100,0,58,52',
                // HSL color values
                'hsl' => '145,100%,24%',
                // HSV color values
                'hsv' => '145,100%,48%',
                // Pantone color code
                'pantone' => '349 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '24.2155',
            // Longitude in decimal degrees
            'longitude' => '-12.8858',
            // Degrees with decimal
            'dd' => '24.2155° N, 12.8858° W',
            // Degrees, minutes, seconds
            'dms' => '24°12\'55.80" N, 12°53\'8.88" W',
            // Degrees and decimal minutes
            'dm' => '24°12.930\' N, 12°53.148\' W',
            // Various GPS formats
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
      "properties": { "cca2": "eh" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-15.741997, 21.338284],
            [-15.892223, 21.338608],
            [-16.01778, 21.338886],
            [-16.146114, 21.339722],
            [-16.604725, 21.339722],
            [-16.953056, 21.338333],
            [-16.954445, 21.334999],
            [-16.960556, 21.300552],
            [-16.995003, 21.128052],
            [-17.038059, 21.004166],
            [-17.049168, 20.974442],
            [-17.070278, 20.92083],
            [-17.075558, 20.905552],
            [-17.075558, 20.892498],
            [-17.05233, 20.764095],
            [-17.055466, 20.765347],
            [-17.058613, 20.769444],
            [-17.098335, 20.829166],
            [-17.104168, 20.84333],
            [-17.105278, 20.848053],
            [-17.096947, 20.926388],
            [-17.095001, 20.944164],
            [-17.093891, 20.949718],
            [-17.091667, 20.95472],
            [-17.063614, 21.0975],
            [-17.029446, 21.285],
            [-17.021114, 21.365276],
            [-17.010559, 21.441109],
            [-17.005836, 21.463055],
            [-16.981945, 21.553608],
            [-16.968891, 21.625275],
            [-16.960003, 21.707497],
            [-16.964169, 21.774998],
            [-16.959446, 21.82222],
            [-16.956947, 21.833332],
            [-16.917225, 21.943054],
            [-16.915279, 21.947777],
            [-16.853336, 22.071388],
            [-16.850559, 22.075554],
            [-16.719448, 22.26083],
            [-16.673336, 22.29361],
            [-16.668892, 22.296387],
            [-16.662224, 22.296108],
            [-16.6525, 22.291664],
            [-16.644726, 22.285275],
            [-16.642223, 22.280552],
            [-16.638615, 22.277222],
            [-16.634167, 22.274719],
            [-16.628056, 22.273609],
            [-16.603889, 22.279442],
            [-16.593334, 22.283333],
            [-16.534725, 22.305832],
            [-16.504448, 22.319164],
            [-16.500278, 22.32222],
            [-16.49667, 22.325832],
            [-16.491112, 22.334164],
            [-16.466946, 22.378887],
            [-16.46389, 22.389164],
            [-16.460556, 22.412498],
            [-16.42889, 22.516109],
            [-16.425282, 22.519722],
            [-16.413334, 22.529163],
            [-16.396114, 22.540554],
            [-16.381958, 22.547886],
            [-16.372501, 22.553333],
            [-16.361946, 22.563889],
            [-16.359169, 22.568054],
            [-16.357224, 22.573055],
            [-16.345837, 22.63472],
            [-16.34, 22.687496],
            [-16.342503, 22.719444],
            [-16.33778, 22.754166],
            [-16.336391, 22.75972],
            [-16.323612, 22.794441],
            [-16.27528, 22.898609],
            [-16.262222, 22.900276],
            [-16.25639, 22.901943],
            [-16.235279, 22.910275],
            [-16.221668, 22.918331],
            [-16.200836, 22.93222],
            [-16.189724, 22.942219],
            [-16.181393, 22.95472],
            [-16.167225, 22.981941],
            [-16.162502, 22.991108],
            [-16.158611, 23.000553],
            [-16.154167, 23.016388],
            [-16.150558, 23.033054],
            [-16.148335, 23.050831],
            [-16.150002, 23.06361],
            [-16.151669, 23.068886],
            [-16.155556, 23.07222],
            [-16.178337, 23.084999],
            [-16.109447, 23.248055],
            [-16.075558, 23.324444],
            [-16.069447, 23.332222],
            [-16.058613, 23.342777],
            [-16.050003, 23.34861],
            [-16.035835, 23.362778],
            [-16.017223, 23.386665],
            [-16.008057, 23.398609],
            [-15.996946, 23.415276],
            [-15.982224, 23.442497],
            [-15.978889, 23.452774],
            [-15.970001, 23.497219],
            [-15.962778, 23.51722],
            [-15.925835, 23.577221],
            [-15.917501, 23.589722],
            [-15.882778, 23.638611],
            [-15.868612, 23.652775],
            [-15.835556, 23.677219],
            [-15.828611, 23.684166],
            [-15.820278, 23.696663],
            [-15.766668, 23.781666],
            [-15.762779, 23.791386],
            [-15.759445, 23.849998],
            [-15.760279, 23.863331],
            [-15.761946, 23.868889],
            [-15.777225, 23.908882],
            [-15.78167, 23.909996],
            [-15.869722, 23.828609],
            [-15.879723, 23.817219],
            [-15.889446, 23.805832],
            [-15.892223, 23.801941],
            [-15.899723, 23.788609],
            [-15.904446, 23.779442],
            [-15.92639, 23.726387],
            [-15.927223, 23.714165],
            [-15.928335, 23.708611],
            [-15.943335, 23.68222],
            [-15.984724, 23.645275],
            [-15.989723, 23.643055],
            [-15.995556, 23.642776],
            [-16.001667, 23.643887],
            [-16.006111, 23.646385],
            [-16.008614, 23.651108],
            [-16.009167, 23.656387],
            [-16.008614, 23.662777],
            [-16.00639, 23.6675],
            [-15.933056, 23.788055],
            [-15.911667, 23.821941],
            [-15.86639, 23.86861],
            [-15.838058, 23.896938],
            [-15.83028, 23.903328],
            [-15.822502, 23.909718],
            [-15.70278, 23.984993],
            [-15.582224, 24.060555],
            [-15.526112, 24.12611],
            [-15.4575, 24.201111],
            [-15.362501, 24.277222],
            [-15.30028, 24.330276],
            [-15.296391, 24.333611],
            [-15.282223, 24.355],
            [-15.256668, 24.394997],
            [-15.245556, 24.412498],
            [-15.233334, 24.436108],
            [-15.226389, 24.443333],
            [-15.180279, 24.488052],
            [-15.166389, 24.495831],
            [-15.146389, 24.504719],
            [-15.13028, 24.510555],
            [-15.100834, 24.51722],
            [-15.065001, 24.524998],
            [-15.059446, 24.526943],
            [-15.031389, 24.541664],
            [-14.904167, 24.683887],
            [-14.901112, 24.688053],
            [-14.894167, 24.702774],
            [-14.834723, 24.915276],
            [-14.834446, 24.921944],
            [-14.830557, 25.038055],
            [-14.832224, 25.069443],
            [-14.834446, 25.074444],
            [-14.845278, 25.091942],
            [-14.846945, 25.103611],
            [-14.847778, 25.123055],
            [-14.846668, 25.207497],
            [-14.845278, 25.220276],
            [-14.82889, 25.289997],
            [-14.815556, 25.34111],
            [-14.793056, 25.426109],
            [-14.788889, 25.436386],
            [-14.753613, 25.480553],
            [-14.682779, 25.623886],
            [-14.648056, 25.732777],
            [-14.63028, 25.771385],
            [-14.627779, 25.776108],
            [-14.608057, 25.806942],
            [-14.588057, 25.830276],
            [-14.569723, 25.848331],
            [-14.560001, 25.860275],
            [-14.542223, 25.88583],
            [-14.534723, 25.899998],
            [-14.517223, 25.934444],
            [-14.497223, 25.987499],
            [-14.493057, 26.000275],
            [-14.489168, 26.015274],
            [-14.483612, 26.055832],
            [-14.478889, 26.094166],
            [-14.478613, 26.10083],
            [-14.480835, 26.105831],
            [-14.486668, 26.114166],
            [-14.490002, 26.124722],
            [-14.490557, 26.130833],
            [-14.490002, 26.137775],
            [-14.486389, 26.155552],
            [-14.480278, 26.171108],
            [-14.424168, 26.245552],
            [-14.420834, 26.249443],
            [-14.40889, 26.259441],
            [-14.404167, 26.261944],
            [-14.374723, 26.269165],
            [-14.345278, 26.276386],
            [-14.321667, 26.283054],
            [-14.302223, 26.292774],
            [-14.291113, 26.301941],
            [-14.251945, 26.335552],
            [-14.225557, 26.359997],
            [-14.215834, 26.372219],
            [-14.197779, 26.397499],
            [-14.106112, 26.430553],
            [-14.066946, 26.435276],
            [-14.041945, 26.439999],
            [-14.031113, 26.443607],
            [-14.016111, 26.450554],
            [-13.9125, 26.507774],
            [-13.903334, 26.513054],
            [-13.709723, 26.625553],
            [-13.630001, 26.677498],
            [-13.618057, 26.687222],
            [-13.606668, 26.697777],
            [-13.595556, 26.708332],
            [-13.574167, 26.731667],
            [-13.551111, 26.759441],
            [-13.545834, 26.768887],
            [-13.517778, 26.820831],
            [-13.503889, 26.850555],
            [-13.483612, 26.895832],
            [-13.479168, 26.90583],
            [-13.427502, 27.06472],
            [-13.417223, 27.098053],
            [-13.416945, 27.118053],
            [-13.414722, 27.144997],
            [-13.412224, 27.161388],
            [-13.406668, 27.177498],
            [-13.397223, 27.19722],
            [-13.375, 27.23333],
            [-13.371946, 27.237221],
            [-13.365002, 27.245277],
            [-13.350279, 27.25972],
            [-13.333612, 27.27972],
            [-13.303335, 27.328053],
            [-13.251112, 27.438053],
            [-13.244446, 27.452774],
            [-13.222502, 27.511108],
            [-13.218889, 27.521942],
            [-13.174961, 27.666958],
            [-13.166945, 27.666386],
            [-13.067501, 27.666111],
            [-12.841103, 27.666447],
            [-10.299738, 27.666573],
            [-10.120514, 27.664772],
            [-10.06724, 27.664238],
            [-10.022517, 27.665009],
            [-10, 27.666386],
            [-9.933613, 27.666664],
            [-9.833334, 27.666664],
            [-9.667223, 27.666664],
            [-9.333612, 27.666664],
            [-9.300001, 27.666111],
            [-8.666668, 27.666664],
            [-8.667223, 27.59972],
            [-8.667223, 27.499443],
            [-8.66679, 27.290459],
            [-8.667223, 26.966389],
            [-8.667223, 26.833054],
            [-8.667223, 26.399719],
            [-8.666668, 26.133331],
            [-8.666389, 26.066387],
            [-8.666945, 26.000275],
            [-9.400002, 25.999443],
            [-9.567223, 26.000275],
            [-9.63389, 26.000275],
            [-9.700556, 26.000275],
            [-9.900002, 26],
            [-9.966667, 25.999722],
            [-10.000311, 25.997959],
            [-10.134123, 25.998199],
            [-10.500278, 25.999443],
            [-10.733334, 25.999443],
            [-11.266668, 25.999443],
            [-11.700556, 26],
            [-12.000557, 26],
            [-12, 25.733055],
            [-12, 25.666111],
            [-12.000834, 25.6325],
            [-12, 25.299721],
            [-12, 25.232777],
            [-12.000834, 25.199997],
            [-12, 24.866386],
            [-12, 24.799721],
            [-12.000834, 24.766109],
            [-12, 24.399719],
            [-12.000834, 24.333054],
            [-12.00028, 23.999996],
            [-12.000834, 23.799721],
            [-12.000278, 23.454441],
            [-12.09889, 23.429722],
            [-12.23139, 23.380554],
            [-12.365835, 23.318607],
            [-12.57139, 23.291386],
            [-12.597429, 23.276169],
            [-12.636667, 23.250832],
            [-12.745001, 23.182499],
            [-12.998335, 23.024719],
            [-13.049446, 22.962776],
            [-13.105278, 22.893055],
            [-13.13389, 22.809166],
            [-13.150278, 22.7575],
            [-13.094168, 22.570831],
            [-13.080002, 22.520275],
            [-13.0781, 22.5],
            [-13.077501, 22.49361],
            [-13.066389, 22.323887],
            [-13.059168, 22.20472],
            [-13.05139, 22.085831],
            [-13.047779, 22.033886],
            [-13.031389, 21.797775],
            [-13.005001, 21.423332],
            [-12.999723, 21.338055],
            [-13.376945, 21.339996],
            [-13.908335, 21.342499],
            [-14.285278, 21.34222],
            [-14.303474, 21.341667],
            [-14.467224, 21.340553],
            [-14.687223, 21.338608],
            [-15.00528, 21.336388],
            [-15.225557, 21.337498],
            [-15.741997, 21.338284]
          ]
        ]
      }
    }
  ]
}
';
    }
}
