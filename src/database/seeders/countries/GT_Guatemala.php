<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GT_Guatemala extends CountrySeeder
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
    public ?string $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Guatemala';

        // Set the country's official name
        $this->official_name = 'Republic of Guatemala';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GT';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GTM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '320';

        // Set the international dialing code
        $this->international_phone = '502';

        // Define the languages spoken in the country
        $this->languages = ['es']; // Spanish is the official language, with 23 recognized indigenous languages

        // Define the top-level domain(s)
        $this->tld = ['.gt'];

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
        $this->internet_penetration = '45%'; // As of recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'CERT-gt (Computer Emergency Response Team of Guatemala)';

        // List popular web technologies in Guatemala
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GT';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3595528';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Guatemalan quetzal',
            // Currency code
            'code' => 'GTQ',
            // Currency symbol
            'symbol' => 'Q',
            // Main unit
            'main_unit' => 'quetzal',
            // Subunit
            'sub_unit' => 'centavo',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50 centavos'],
        ];

        // Set the population
        $this->population = 17915568; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 108889; // km²

        // Set the capital city
        $this->capital = 'Guatemala City';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Guatemala',
                // Standard time offset
                'standard_time' => 'UTC-6', // Central Standard Time (CST)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1821-09-15'; // Independence from Spain

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Organization of American States (OAS)',
            'Central American Integration System (SICA)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 76.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
            'Indigenous Mayan religions',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential constitutional republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Guatemala

        // Define bordering countries
        $this->borders = [
            ['name' => 'Mexico', 'iso_alpha_2' => 'MX'],
            ['name' => 'Belize', 'iso_alpha_2' => 'BZ'],
            ['name' => 'Honduras', 'iso_alpha_2' => 'HN'],
            ['name' => 'El Salvador', 'iso_alpha_2' => 'SV'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇹',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1F9',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1F9;',
            // CSS entities
            'css' => '\\1F1EC\\1F1F9',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127481;',
            // Direct UTF-8 string
            'utf8' => '🇬🇹',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDF9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gt:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1F9;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'sky blue',
                // Hexadecimal color code
                'hex' => '#4997D0',
                // RGB color values
                'rgb' => '73,151,208',
                // CMYK color values
                'cmyk' => '65,27,0,18',
                // HSL color values
                'hsl' => '205,61%,55%',
                // HSV color values
                'hsv' => '205,65%,82%',
                // Pantone color code
                'pantone' => '2925 C',
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
            'latitude' => '15.7835',
            // Longitude in decimal degrees
            'longitude' => '-90.2308',
            // Degrees with decimal
            'dd' => '15.7835° N, 90.2308° W',
            // Degrees, minutes, seconds
            'dms' => '15°47\'0.60" N, 90°13\'50.88" W',
            // Degrees and decimal minutes
            'dm' => '15°47.010\' N, 90°13.848\' W',
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
      "properties": { "cca2": "gt" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-90.627625, 13.930555],
            [-90.67334, 13.929443],
            [-90.771957, 13.926388],
            [-90.889725, 13.921665],
            [-90.943893, 13.917776],
            [-91.015839, 13.913055],
            [-91.08139, 13.913055],
            [-91.106125, 13.915833],
            [-91.179733, 13.925278],
            [-91.188339, 13.926943],
            [-91.296402, 13.953888],
            [-91.384735, 13.978888],
            [-91.493622, 14.029722],
            [-91.527985, 14.043488],
            [-91.563614, 14.064999],
            [-91.587784, 14.078333],
            [-91.621399, 14.093332],
            [-91.640015, 14.106388],
            [-91.65889, 14.122391],
            [-91.680557, 14.138887],
            [-91.697235, 14.15],
            [-91.770004, 14.191944],
            [-91.803345, 14.206944],
            [-91.813065, 14.211388],
            [-91.81723, 14.214167],
            [-91.91362, 14.287777],
            [-91.960556, 14.324444],
            [-91.990845, 14.349998],
            [-92.081116, 14.424721],
            [-92.164459, 14.483891],
            [-92.218903, 14.521666],
            [-92.238457, 14.540218],
            [-92.245834, 14.547222],
            [-92.24678, 14.550547],
            [-92.237946, 14.551992],
            [-92.216675, 14.558054],
            [-92.187225, 14.588333],
            [-92.154449, 14.675833],
            [-92.152237, 14.690277],
            [-92.152237, 14.700277],
            [-92.153061, 14.706388],
            [-92.15834, 14.729443],
            [-92.169174, 14.76861],
            [-92.18251, 14.809166],
            [-92.183334, 14.811943],
            [-92.185013, 14.830276],
            [-92.185837, 14.843611],
            [-92.182236, 14.853611],
            [-92.149734, 14.934721],
            [-92.114456, 15.01861],
            [-92.104446, 15.019444],
            [-92.09584, 15.021944],
            [-92.090012, 15.026388],
            [-92.08667, 15.029999],
            [-92.07251, 15.059721],
            [-92.065842, 15.077776],
            [-92.072197, 15.085834],
            [-92.211395, 15.26222],
            [-92.107941, 15.437597],
            [-91.828613, 15.908888],
            [-91.797501, 15.961111],
            [-91.729172, 16.074997],
            [-91.704178, 16.075554],
            [-91.540009, 16.075832],
            [-90.991547, 16.075745],
            [-90.804459, 16.075832],
            [-90.625839, 16.075554],
            [-90.458069, 16.074718],
            [-90.456711, 16.07477],
            [-90.450836, 16.074997],
            [-90.447617, 16.078842],
            [-90.441956, 16.088333],
            [-90.43251, 16.129719],
            [-90.431671, 16.13583],
            [-90.427505, 16.1675],
            [-90.42778, 16.170277],
            [-90.430557, 16.174164],
            [-90.434448, 16.177498],
            [-90.444168, 16.181942],
            [-90.452515, 16.183887],
            [-90.45668, 16.186665],
            [-90.459732, 16.19083],
            [-90.461395, 16.203053],
            [-90.459457, 16.252777],
            [-90.45668, 16.260555],
            [-90.438614, 16.307499],
            [-90.408615, 16.333611],
            [-90.404449, 16.336388],
            [-90.384445, 16.376942],
            [-90.393341, 16.401108],
            [-90.406403, 16.416386],
            [-90.486115, 16.461109],
            [-90.505005, 16.468609],
            [-90.545288, 16.473331],
            [-90.587509, 16.476109],
            [-90.593903, 16.476665],
            [-90.609177, 16.489166],
            [-90.645004, 16.519165],
            [-90.645569, 16.522221],
            [-90.646667, 16.558331],
            [-90.644455, 16.562775],
            [-90.641403, 16.566666],
            [-90.64418, 16.595276],
            [-90.658066, 16.644165],
            [-90.678894, 16.675831],
            [-90.714279, 16.72646],
            [-90.748611, 16.756943],
            [-90.803345, 16.804996],
            [-90.806122, 16.805832],
            [-90.866669, 16.817776],
            [-90.913895, 16.826385],
            [-90.916672, 16.826942],
            [-90.921112, 16.82972],
            [-90.924728, 16.836388],
            [-90.948898, 16.889164],
            [-90.986679, 16.896111],
            [-91.063614, 16.924442],
            [-91.184448, 17.035553],
            [-91.267227, 17.131664],
            [-91.26973, 17.136387],
            [-91.33223, 17.188053],
            [-91.419449, 17.220554],
            [-91.428345, 17.22583],
            [-91.434448, 17.233608],
            [-91.4375, 17.241108],
            [-91.438065, 17.244164],
            [-91.436951, 17.2575],
            [-90.983902, 17.256107],
            [-90.983612, 17.584999],
            [-90.983063, 17.817776],
            [-90.982422, 17.820652],
            [-90.979172, 17.82],
            [-90.921677, 17.82],
            [-90.777786, 17.820274],
            [-90.590836, 17.82111],
            [-90.238342, 17.82111],
            [-90, 17.820976],
            [-89.742233, 17.820831],
            [-89.430435, 17.819721],
            [-89.141953, 17.818886],
            [-89.142227, 17.719444],
            [-89.143433, 17.341801],
            [-89.145004, 17.013885],
            [-89.184174, 16.414444],
            [-89.204178, 16.104164],
            [-89.2164, 15.915277],
            [-89.216171, 15.889851],
            [-89.172791, 15.909443],
            [-89.166672, 15.910831],
            [-89.047226, 15.906387],
            [-88.980835, 15.898054],
            [-88.910568, 15.89361],
            [-88.883347, 15.866665],
            [-88.878891, 15.863888],
            [-88.871674, 15.861111],
            [-88.858063, 15.860277],
            [-88.837234, 15.863609],
            [-88.83223, 15.865833],
            [-88.812225, 15.865555],
            [-88.786118, 15.856667],
            [-88.753342, 15.840555],
            [-88.742508, 15.833887],
            [-88.678619, 15.778055],
            [-88.638062, 15.720833],
            [-88.639725, 15.715555],
            [-88.639175, 15.709166],
            [-88.636948, 15.704443],
            [-88.631119, 15.69972],
            [-88.622513, 15.697777],
            [-88.612228, 15.697498],
            [-88.6064, 15.699165],
            [-88.602234, 15.701944],
            [-88.593903, 15.710833],
            [-88.492783, 15.839722],
            [-88.490845, 15.844721],
            [-88.492783, 15.849998],
            [-88.506958, 15.863609],
            [-88.550003, 15.897778],
            [-88.576675, 15.916388],
            [-88.551392, 15.940832],
            [-88.406403, 15.837776],
            [-88.257233, 15.737778],
            [-88.252228, 15.735832],
            [-88.236954, 15.730276],
            [-88.233109, 15.730036],
            [-88.223618, 15.729443],
            [-88.22084, 15.728611],
            [-88.214737, 15.724443],
            [-88.240005, 15.714167],
            [-88.313904, 15.671389],
            [-88.317024, 15.663283],
            [-88.327789, 15.635277],
            [-88.486511, 15.50462],
            [-88.552505, 15.44972],
            [-88.668335, 15.349998],
            [-88.758118, 15.295523],
            [-88.837234, 15.247221],
            [-88.98056, 15.135555],
            [-89.142792, 15.076944],
            [-89.150375, 15.073481],
            [-89.15834, 15.056944],
            [-89.170837, 15.029999],
            [-89.181396, 15.003332],
            [-89.180557, 15.000555],
            [-89.17778, 14.996387],
            [-89.170013, 14.993889],
            [-89.156952, 14.985832],
            [-89.154175, 14.981388],
            [-89.154175, 14.978054],
            [-89.170288, 14.935833],
            [-89.174454, 14.926109],
            [-89.179169, 14.917221],
            [-89.185989, 14.907612],
            [-89.203339, 14.895832],
            [-89.209732, 14.891388],
            [-89.22139, 14.878887],
            [-89.224731, 14.865],
            [-89.224731, 14.855555],
            [-89.222229, 14.843887],
            [-89.220001, 14.839167],
            [-89.161392, 14.740276],
            [-89.156403, 14.734444],
            [-89.150848, 14.729721],
            [-89.131073, 14.715069],
            [-89.137787, 14.684721],
            [-89.194458, 14.584166],
            [-89.200012, 14.585833],
            [-89.229446, 14.584721],
            [-89.235001, 14.583332],
            [-89.239456, 14.580832],
            [-89.347229, 14.479443],
            [-89.350845, 14.472776],
            [-89.351959, 14.466944],
            [-89.348312, 14.431982],
            [-89.43251, 14.414999],
            [-89.438614, 14.414721],
            [-89.49501, 14.421389],
            [-89.545288, 14.42111],
            [-89.551682, 14.420555],
            [-89.568893, 14.416111],
            [-89.573059, 14.413332],
            [-89.583344, 14.385832],
            [-89.590836, 14.324999],
            [-89.590286, 14.321943],
            [-89.588898, 14.319721],
            [-89.58667, 14.318333],
            [-89.580566, 14.317499],
            [-89.569168, 14.320276],
            [-89.563904, 14.318333],
            [-89.54834, 14.309721],
            [-89.544724, 14.306389],
            [-89.541946, 14.301943],
            [-89.513062, 14.247499],
            [-89.512512, 14.24472],
            [-89.513062, 14.239443],
            [-89.517792, 14.230276],
            [-89.522232, 14.227221],
            [-89.573624, 14.208887],
            [-89.585281, 14.20611],
            [-89.595566, 14.205555],
            [-89.614731, 14.210833],
            [-89.624176, 14.210278],
            [-89.62973, 14.208332],
            [-89.645844, 14.19972],
            [-89.65834, 14.191387],
            [-89.686401, 14.169998],
            [-89.705841, 14.15111],
            [-89.714447, 14.138887],
            [-89.725006, 14.121387],
            [-89.728622, 14.114443],
            [-89.74556, 14.079721],
            [-89.746948, 14.074165],
            [-89.747787, 14.064999],
            [-89.746399, 14.059444],
            [-89.739731, 14.041388],
            [-89.806122, 14.065832],
            [-89.814728, 14.067499],
            [-89.821671, 14.067221],
            [-89.830292, 14.065277],
            [-89.854446, 14.059444],
            [-89.885834, 14.04611],
            [-89.892227, 14.042221],
            [-90.01889, 13.940277],
            [-90.022232, 13.936943],
            [-90.080566, 13.876389],
            [-90.092514, 13.860554],
            [-90.103897, 13.823332],
            [-90.108337, 13.795277],
            [-90.107788, 13.782776],
            [-90.09639, 13.745832],
            [-90.10556, 13.747221],
            [-90.151947, 13.763332],
            [-90.217514, 13.791666],
            [-90.237137, 13.801279],
            [-90.349167, 13.847776],
            [-90.411118, 13.873055],
            [-90.462509, 13.891388],
            [-90.492233, 13.900276],
            [-90.589447, 13.924721],
            [-90.612503, 13.929165],
            [-90.627625, 13.930555]
          ]
        ]
      }
    }
  ]
}
';
    }
}
