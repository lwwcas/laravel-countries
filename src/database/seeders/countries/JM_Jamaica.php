<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class JM_Jamaica extends CountrySeeder
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
        $this->name = 'Jamaica';

        // Set the country's official name
        $this->official_name = 'Jamaica';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'JM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'JAM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '388';

        // Set the international dialing code
        $this->international_phone = '1-876';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.jm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '25 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '55%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Jamaica Cyber Incident Response Team (JaCIRT)';

        // List popular web technologies in Jamaica
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'JM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3489940';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Jamaican dollar',
            // Currency code
            'code' => 'JMD',
            // Currency symbol
            'symbol' => 'J$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['50', '100', '500', '1000', '5000'],
            // Main coins
            'coins_main' => ['1', '5', '10', '20'],
            // Subunit coins
            'coins_sub' => ['1', '10', '25'],
        ];

        // Set the population
        $this->population = 2961167; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 10991; // km²

        // Set the capital city
        $this->capital = 'Kingston';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Jamaica',
                // Standard time offset
                'standard_time' => 'UTC-5',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1962-08-06'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Commonwealth of Nations',
            'Organization of American States (OAS)',
            'Caribbean Community (CARICOM)',
            'Association of Caribbean States (ACS)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 15.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism, Roman Catholicism)',
            'Rastafarianism',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Cricket'; // Cricket is considered the national sport

        // Define bordering countries
        $this->borders = []; // It is an island with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇯🇲',
            // Unicode code points
            'uCode' => 'U+1F1EF U+1F1F2',
            // HTML entities
            'html' => '&#x1F1EF;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1EF\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127471;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇯🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEF\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-jm:',
            // Hexadecimal entity
            'hex' => '&#x1F1EF;&#x1F1F2;',
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
                'hsl' => '0°,0%,0%',
                // HSV color values
                'hsv' => '0°,0%,0%',
                // Pantone color code
                'pantone' => 'Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'gold',
                // Hexadecimal color code
                'hex' => '#FED100',
                // RGB color values
                'rgb' => '254,209,0',
                // CMYK color values
                'cmyk' => '0,18,100,0',
                // HSL color values
                'hsl' => '49°,100%,50%',
                // HSV color values
                'hsv' => '49°,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009B3A',
                // RGB color values
                'rgb' => '0,155,58',
                // CMYK color values
                'cmyk' => '100,0,63,39',
                // HSL color values
                'hsl' => '147°,100%,30%',
                // HSV color values
                'hsv' => '147°,100%,61%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '18.1096',
            // Longitude in decimal degrees
            'longitude' => '-77.2975',
            // Degrees with decimal
            'dd' => '18.1096° N, 77.2975° W',
            // Degrees, minutes, seconds
            'dms' => '18°6\'34.56" N, 77°17\'51.00" W',
            // Degrees and decimal minutes
            'dm' => '18°6.576\' N, 77°17.850\' W',
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
      "properties": { "cca2": "jm" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-77.131958, 17.878887],
            [-77.147507, 17.864166],
            [-77.150284, 17.860275],
            [-77.193893, 17.77972],
            [-77.147232, 17.761108],
            [-77.142227, 17.761387],
            [-77.138626, 17.757774],
            [-77.126953, 17.732498],
            [-77.12529, 17.727497],
            [-77.124725, 17.722775],
            [-77.130005, 17.714165],
            [-77.138336, 17.708332],
            [-77.152512, 17.701385],
            [-77.162781, 17.697777],
            [-77.168625, 17.696663],
            [-77.18251, 17.698055],
            [-77.217514, 17.713608],
            [-77.226959, 17.718887],
            [-77.238617, 17.728333],
            [-77.349167, 17.821663],
            [-77.395905, 17.851879],
            [-77.412231, 17.859722],
            [-77.450562, 17.856667],
            [-77.455841, 17.855],
            [-77.482513, 17.839722],
            [-77.487503, 17.837776],
            [-77.493347, 17.836666],
            [-77.507233, 17.836666],
            [-77.518616, 17.839996],
            [-77.566391, 17.859474],
            [-77.609726, 17.854443],
            [-77.719727, 17.847221],
            [-77.733337, 17.84861],
            [-77.737793, 17.851387],
            [-77.789459, 17.885555],
            [-77.793625, 17.888332],
            [-77.797226, 17.891941],
            [-77.820007, 17.937775],
            [-77.835007, 17.987778],
            [-77.840836, 18.002499],
            [-77.846954, 18.010555],
            [-77.85112, 18.013332],
            [-77.870834, 18.022499],
            [-77.878067, 18.022778],
            [-77.904175, 18.021111],
            [-77.936401, 18.026108],
            [-77.948624, 18.02861],
            [-77.952789, 18.031666],
            [-77.961319, 18.054749],
            [-77.963898, 18.061108],
            [-77.969177, 18.069443],
            [-77.980011, 18.086388],
            [-78.041946, 18.182777],
            [-78.044724, 18.186943],
            [-78.057236, 18.196388],
            [-78.074173, 18.201385],
            [-78.101959, 18.202499],
            [-78.128616, 18.203053],
            [-78.194458, 18.199718],
            [-78.20639, 18.19722],
            [-78.226959, 18.189999],
            [-78.232788, 18.188889],
            [-78.238617, 18.190277],
            [-78.254181, 18.194443],
            [-78.336395, 18.217777],
            [-78.3414, 18.220276],
            [-78.362228, 18.234722],
            [-78.369446, 18.241943],
            [-78.373901, 18.25111],
            [-78.373901, 18.258053],
            [-78.372787, 18.262775],
            [-78.371124, 18.266666],
            [-78.365005, 18.274719],
            [-78.342514, 18.298611],
            [-78.345566, 18.335278],
            [-78.341675, 18.35722],
            [-78.339737, 18.362499],
            [-78.336121, 18.365833],
            [-78.213898, 18.450832],
            [-78.208069, 18.451942],
            [-78.023895, 18.452499],
            [-78.015015, 18.451385],
            [-78.000015, 18.441383],
            [-77.936111, 18.496109],
            [-77.920837, 18.509163],
            [-77.882507, 18.519722],
            [-77.864456, 18.522499],
            [-77.849731, 18.521664],
            [-77.73584, 18.505016],
            [-77.700012, 18.489441],
            [-77.688614, 18.486385],
            [-77.640015, 18.479164],
            [-77.615845, 18.483055],
            [-77.611679, 18.484165],
            [-77.601959, 18.488609],
            [-77.595566, 18.488888],
            [-77.564178, 18.489441],
            [-77.558334, 18.489166],
            [-77.484177, 18.478886],
            [-77.478622, 18.477219],
            [-77.466766, 18.469219],
            [-77.460846, 18.46611],
            [-77.407791, 18.456665],
            [-77.343338, 18.451664],
            [-77.339737, 18.453609],
            [-77.323334, 18.458332],
            [-77.316956, 18.458611],
            [-77.250565, 18.452774],
            [-77.243896, 18.451664],
            [-77.181671, 18.434166],
            [-77.166122, 18.428055],
            [-77.157791, 18.422222],
            [-77.136673, 18.407219],
            [-77.067932, 18.406925],
            [-77.056122, 18.410831],
            [-77.043625, 18.412498],
            [-77.037231, 18.411388],
            [-76.945282, 18.394444],
            [-76.896118, 18.374722],
            [-76.854446, 18.344997],
            [-76.805557, 18.302776],
            [-76.790283, 18.276386],
            [-76.787506, 18.272221],
            [-76.782791, 18.26833],
            [-76.724167, 18.263332],
            [-76.718903, 18.263885],
            [-76.7034, 18.266483],
            [-76.65918, 18.235832],
            [-76.640289, 18.223053],
            [-76.551392, 18.19722],
            [-76.53334, 18.192776],
            [-76.458618, 18.180553],
            [-76.386124, 18.167774],
            [-76.380569, 18.166111],
            [-76.365005, 18.159721],
            [-76.341675, 18.149719],
            [-76.292511, 18.078053],
            [-76.2789, 18.050552],
            [-76.274445, 18.041386],
            [-76.258102, 17.995758],
            [-76.234177, 17.941387],
            [-76.221115, 17.904163],
            [-76.265289, 17.879719],
            [-76.306671, 17.865555],
            [-76.350571, 17.855553],
            [-76.53418, 17.856941],
            [-76.591125, 17.860832],
            [-76.597504, 17.861664],
            [-76.607513, 17.866386],
            [-76.613892, 17.873608],
            [-76.6577, 17.929253],
            [-76.693619, 17.937496],
            [-76.724731, 17.948887],
            [-76.727509, 17.953053],
            [-76.73584, 17.959164],
            [-76.746399, 17.963055],
            [-76.800606, 17.966686],
            [-76.811401, 17.976665],
            [-76.819168, 17.98333],
            [-76.829727, 17.987221],
            [-76.836121, 17.986942],
            [-76.847778, 17.982594],
            [-76.894455, 17.888611],
            [-76.914459, 17.851944],
            [-76.920837, 17.843887],
            [-76.924454, 17.840832],
            [-76.929169, 17.838333],
            [-76.948334, 17.829441],
            [-76.954727, 17.829166],
            [-77.00528, 17.844719],
            [-77.03418, 17.886944],
            [-77.038345, 17.889721],
            [-77.048889, 17.893887],
            [-77.054733, 17.895275],
            [-77.080292, 17.899441],
            [-77.101669, 17.895554],
            [-77.111954, 17.891941],
            [-77.131958, 17.878887]
          ]
        ]
      }
    }
  ]
}
';
    }
}
