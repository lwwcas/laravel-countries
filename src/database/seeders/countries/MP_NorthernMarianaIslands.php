<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MP_NorthernMarianaIslands extends CountrySeeder
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
    public ?string $region = 'oceania';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Northern Mariana Islands';

        // Set the country's official name
        $this->official_name = 'Commonwealth of the Northern Mariana Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MP';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MNP';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '580';

        // Set the international dialing code
        $this->international_phone = '1-670';

        // Define the languages spoken in the country
        $this->languages = ['en', 'ch', 'tl']; // English, Chamorro, and Carolinian are official languages

        // Define the top-level domain(s)
        $this->tld = ['.mp'];

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
        $this->internet_penetration = '65%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Northern Mariana Islands CERT';

        // List popular web technologies in Northern Mariana Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MP';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4041468';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States Dollar',
            // Currency code
            'code' => 'USD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 57559; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 464; // km²

        // Set the capital city
        $this->capital = 'Saipan';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Saipan',
                // Standard time offset
                'standard_time' => 'UTC+10',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // The Northern Mariana Islands are a commonwealth of the United States and do not have an independence day

        // List international organizations the country is part of
        $this->international_organizations = [
            'World Health Organization (WHO)',
            'United Nations (represented by the United States)',
            'Pacific Community (SPC)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.24; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Commonwealth in political union with the United States';

        // Set the national sport
        $this->national_sport = 'Baseball'; // Baseball is highly popular in the Northern Mariana Islands

        // Define bordering countries
        $this->borders = []; // As an island, the Northern Mariana Islands have no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇵',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1F5',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1F5;',
            // CSS entities
            'css' => '\\1F1F2\\1F1F5',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127477;',
            // Direct UTF-8 string
            'utf8' => '🇲🇵',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDF5',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mp:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1F5;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0033A0',
                // RGB color values
                'rgb' => '0,51,160',
                // CMYK color values
                'cmyk' => '100,69,0,37',
                // HSL color values
                'hsl' => '220°,100%,41%',
                // HSV color values
                'hsv' => '220°,100%,63%',
                // Pantone color code
                'pantone' => '286 C',
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
            [
                // Color name
                'name' => 'Gray',
                // Web color name
                'web_name' => 'gray',
                // Hexadecimal color code
                'hex' => '#808080',
                // RGB color values
                'rgb' => '128,128,128',
                // CMYK color values
                'cmyk' => '0,0,0,50',
                // HSL color values
                'hsl' => '0°,0%,50%',
                // HSV color values
                'hsv' => '0°,0%,50%',
                // Pantone color code
                'pantone' => 'Cool Gray 6 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '15.0979',
            // Longitude in decimal degrees
            'longitude' => '145.6739',
            // Degrees with decimal
            'dd' => '15.0979° N, 145.6739° E',
            // Degrees, minutes, seconds
            'dms' => '15°5\'52.44" N, 145°40\'26.04" E',
            // Degrees and decimal minutes
            'dm' => '15°5.874\' N, 145°40.434\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mp"},"geometry":{"type":"MultiPolygon","coordinates":[[[[145.281647,14.158333],[145.20636,14.105276],[145.175537,14.121664],[145.170532,14.123886],[145.153595,14.12722],[145.147217,14.126387],[145.132172,14.114443],[145.125244,14.114443],[145.121887,14.117775],[145.119965,14.122498],[145.119965,14.12916],[145.121338,14.13444],[145.126617,14.142498],[145.130249,14.145832],[145.183594,14.173609],[145.237183,14.194998],[145.25415,14.198332],[145.268036,14.198332],[145.280273,14.196943],[145.284973,14.194998],[145.289703,14.186386],[145.289703,14.177776],[145.288574,14.171665],[145.284424,14.16222],[145.281647,14.158333]]],[[[145.535248,14.828331],[145.52887,14.827776],[145.52359,14.82916],[145.526367,14.844997],[145.529694,14.848331],[145.56192,14.85027],[145.567474,14.848886],[145.570251,14.844997],[145.568848,14.83972],[145.563873,14.833609],[145.535248,14.828331]]],[[[145.624115,14.908054],[145.618835,14.908054],[145.610504,14.91333],[145.607727,14.917221],[145.574127,14.998608],[145.572205,15.00333],[145.572205,15.01],[145.587189,15.034998],[145.626892,15.08333],[145.633026,15.083887],[145.638031,15.081942],[145.641357,15.078609],[145.647491,15.069443],[145.648865,15.064165],[145.661926,14.989441],[145.66275,14.976664],[145.660522,14.96555],[145.639984,14.91916],[145.633881,14.911943],[145.629669,14.909164],[145.624115,14.908054]]],[[[145.736084,15.13361],[145.73468,15.087219],[145.728302,15.088053],[145.691345,15.097219],[145.685791,15.098608],[145.681915,15.101109],[145.679138,15.105276],[145.67691,15.11639],[145.683868,15.14278],[145.695526,15.178055],[145.731079,15.238886],[145.735229,15.241386],[145.790802,15.267221],[145.795532,15.269165],[145.813293,15.267776],[145.818024,15.265833],[145.820801,15.26194],[145.820251,15.257221],[145.799713,15.244164],[145.793579,15.236664],[145.738556,15.14416],[145.736633,15.139442],[145.736084,15.13361]]],[[[145.655823,16.334721],[145.648865,16.334721],[145.63858,16.338051],[145.63443,16.34055],[145.62912,16.348606],[145.626892,16.35305],[145.625519,16.35833],[145.625519,16.364998],[145.626892,16.370274],[145.63443,16.376106],[145.639984,16.37749],[145.650269,16.37861],[145.700256,16.368328],[145.709137,16.363609],[145.714691,16.355831],[145.716064,16.350552],[145.714142,16.345829],[145.70636,16.339996],[145.69693,16.336109],[145.655823,16.334721]]],[[[145.798309,16.680275],[145.789429,16.67555],[145.779144,16.678883],[145.773041,16.68611],[145.770813,16.69083],[145.770264,16.696663],[145.772217,16.701385],[145.774994,16.705273],[145.779144,16.707771],[145.785248,16.708607],[145.790802,16.707218],[145.801636,16.70055],[145.80304,16.695274],[145.80304,16.688885],[145.801086,16.684162],[145.798309,16.680275]]],[[[145.860779,17.28722],[145.855225,17.285831],[145.844971,17.289165],[145.841339,17.292496],[145.836639,17.300831],[145.837463,17.313332],[145.84024,17.317219],[145.846924,17.317219],[145.861359,17.311386],[145.867462,17.304165],[145.868835,17.298885],[145.868286,17.29305],[145.860779,17.28722]]],[[[145.860779,17.567776],[145.854401,17.56694],[145.842194,17.568329],[145.832458,17.57222],[145.824402,17.577496],[145.823029,17.582775],[145.823029,17.589165],[145.824402,17.59444],[145.827179,17.598331],[145.833862,17.604996],[145.838013,17.607498],[145.843567,17.608887],[145.849121,17.608887],[145.858002,17.604164],[145.865509,17.598331],[145.870239,17.589718],[145.870789,17.583885],[145.870239,17.578053],[145.868286,17.57361],[145.860779,17.567776]]],[[[145.736084,18.04389],[145.724121,18.041943],[145.716644,18.047775],[145.716644,18.054443],[145.721619,18.068054],[145.779144,18.17083],[145.788025,18.175552],[145.806641,18.172218],[145.81192,18.17083],[145.824402,18.163052],[145.833313,18.15194],[145.836639,18.14222],[145.83609,18.129997],[145.833862,18.12527],[145.828583,18.117496],[145.824982,18.114162],[145.74411,18.049164],[145.736084,18.04389]]],[[[145.679138,18.721382],[145.673035,18.720829],[145.666656,18.721382],[145.657196,18.725273],[145.650269,18.731937],[145.645538,18.740273],[145.643311,18.751389],[145.644135,18.763611],[145.648865,18.784996],[145.654419,18.799442],[145.659149,18.807774],[145.6633,18.810276],[145.669434,18.811108],[145.674988,18.80972],[145.688019,18.802498],[145.694702,18.796108],[145.705811,18.780552],[145.709137,18.77333],[145.71051,18.76833],[145.709961,18.750832],[145.708588,18.74555],[145.703857,18.737217],[145.693573,18.727493],[145.689423,18.724716],[145.679138,18.721382]]],[[[145.405823,19.652775],[145.398865,19.652775],[145.392761,19.654716],[145.38443,19.66],[145.381622,19.663883],[145.378296,19.673328],[145.378845,19.679161],[145.384979,19.68638],[145.38916,19.68888],[145.394714,19.690273],[145.400818,19.68972],[145.405823,19.687496],[145.409698,19.684994],[145.415253,19.677219],[145.417206,19.672771],[145.417206,19.661106],[145.414703,19.657219],[145.405823,19.652775]]],[[[145.256927,20.01083],[145.251099,20.00972],[145.243835,20.009998],[145.238861,20.011387],[145.233856,20.014164],[145.227448,20.021942],[145.225525,20.027496],[145.225525,20.03361],[145.230255,20.04361],[145.233307,20.047775],[145.242188,20.052219],[145.247742,20.050831],[145.269989,20.039997],[145.27359,20.036385],[145.273315,20.02361],[145.261383,20.013611],[145.256927,20.01083]]],[[[144.921082,20.51833],[144.915802,20.51722],[144.906097,20.519718],[144.901917,20.522221],[144.899139,20.526108],[144.89859,20.53194],[144.899994,20.536942],[144.906097,20.550552],[144.908875,20.554443],[144.913605,20.55638],[144.920532,20.55638],[144.929962,20.552498],[144.934967,20.544163],[144.932739,20.53305],[144.92804,20.524719],[144.921082,20.51833]]]]}}]}';
    }
}
