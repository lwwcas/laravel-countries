<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PS_PalestinianTerritory extends CountrySeeder
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
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Palestine';

        // Set the country's official name
        $this->official_name = 'State of Palestine';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'PS';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'PSE';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '275';

        // Set the international dialing code
        $this->international_phone = '970';

        // Define the languages spoken in the country
        $this->languages = ['ar']; // Arabic is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ps'];

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
        $this->internet_penetration = '63%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Palestinian Computer Emergency Response Team (PalCERT)';

        // List popular web technologies in Palestine
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'PS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '6254930';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Israeli new shekel',
            // Currency code
            'code' => 'ILS',
            // Currency symbol
            'symbol' => '₪',
            // Main unit
            'main_unit' => 'shekel',
            // Subunit
            'sub_unit' => 'agora',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10'],
            // Subunit coins
            'coins_sub' => ['10', '50'],
        ];

        // Set the population
        $this->population = 5186790; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 6220; // km² (including the West Bank and Gaza Strip)

        // Set the capital city
        $this->capital = 'East Jerusalem'; // Proclaimed capital, although not universally recognized

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Gaza',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+3',
            ],
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Hebron',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+3',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1988-11-15'; // Declaration of Independence

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (observer status)',
            'Arab League',
            'Organization of Islamic Cooperation (OIC)',
            'Non-Aligned Movement (NAM)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 14.6; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni)',
            'Christianity',
        ];

        // Describe the form of government
        $this->government = 'Semi-presidential republic under Israeli occupation';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Palestine

        // Define bordering countries
        $this->borders = [
            ['name' => 'Israel', 'iso_alpha_2' => 'IL'],
            ['name' => 'Jordan', 'iso_alpha_2' => 'JO'],
            ['name' => 'Egypt', 'iso_alpha_2' => 'EG'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇵🇸',
            // Unicode code points
            'uCode' => 'U+1F1F5 U+1F1F8',
            // HTML entities
            'html' => '&#x1F1F5;&#x1F1F8;',
            // CSS entities
            'css' => '\\1F1F5\\1F1F8',
            // Decimal Unicode entities
            'decimal' => '&#127477;&#127480;',
            // Direct UTF-8 string
            'utf8' => '🇵🇸',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF5\uD83C\uDDF8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ps:',
            // Hexadecimal entity
            'hex' => '&#x1F1F5;&#x1F1F8;',
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
                'hsl' => '0°,100%,50%',
                // HSV color values
                'hsv' => '0°,100%,100%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#008000',
                // RGB color values
                'rgb' => '0,128,0',
                // CMYK color values
                'cmyk' => '100,0,100,0',
                // HSL color values
                'hsl' => '120°,100%,25%',
                // HSV color values
                'hsv' => '120°,100%,50%',
                // Pantone color code
                'pantone' => 'Green C',
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
            'latitude' => '31.9522',
            // Longitude in decimal degrees
            'longitude' => '35.2332',
            // Degrees with decimal
            'dd' => '31.9522° N, 35.2332° E',
            // Degrees, minutes, seconds
            'dms' => '31°57\'7.92" N, 35°13\'59.52" E',
            // Degrees and decimal minutes
            'dm' => '31°57.132\' N, 35°13.992\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ps"},"geometry":{"type":"MultiPolygon","coordinates":[[[[34.33416,31.25972],[34.267578,31.216541],[34.23917,31.29472],[34.21666,31.32333],[34.248055,31.34972],[34.276108,31.373886],[34.401108,31.489166],[34.455826,31.549721],[34.477219,31.574997],[34.48805,31.59111],[34.490547,31.596096],[34.559166,31.546944],[34.558609,31.533054],[34.539993,31.514721],[34.513329,31.498608],[34.478607,31.471107],[34.388885,31.394722],[34.364166,31.360832],[34.364998,31.34777],[34.373604,31.31444],[34.373055,31.29972],[34.37055,31.29472],[34.367775,31.291111],[34.33416,31.25972]]],[[[35.282494,32.516937],[35.29555,32.515549],[35.311943,32.516106],[35.32278,32.517776],[35.347221,32.523888],[35.349716,32.523888],[35.35805,32.522217],[35.40416,32.5075],[35.412216,32.500832],[35.422493,32.48805],[35.425278,32.48333],[35.48111,32.412773],[35.55257,32.394196],[35.557251,32.388321],[35.559715,32.383606],[35.562233,32.36969],[35.573296,32.225548],[35.572495,32.222221],[35.568329,32.211388],[35.558609,32.203049],[35.516388,32.04111],[35.522217,32.000832],[35.522774,31.998886],[35.5236,31.997215],[35.526382,31.995274],[35.535545,31.929718],[35.548882,31.828331],[35.555824,31.76611],[35.554985,31.761703],[35.538673,31.73494],[35.526108,31.711666],[35.498055,31.641666],[35.489716,31.60389],[35.482773,31.562222],[35.47916,31.529442],[35.478195,31.497322],[35.45916,31.49944],[35.443054,31.49944],[35.405273,31.494999],[35.39608,31.492119],[35.383888,31.48722],[35.373329,31.48111],[35.259163,31.40361],[35.24055,31.384163],[35.229721,31.37861],[35.211105,31.374996],[35.138611,31.361942],[34.94694,31.350277],[34.933609,31.349998],[34.922775,31.352219],[34.912216,31.357498],[34.90416,31.363609],[34.896111,31.370831],[34.890549,31.377499],[34.88777,31.3825],[34.884995,31.391388],[34.884438,31.40472],[34.89194,31.420277],[34.910553,31.443886],[34.937218,31.481667],[34.942497,31.489998],[34.945,31.495552],[34.947777,31.503609],[34.95027,31.518887],[34.945831,31.559166],[34.948326,31.581387],[34.950829,31.589722],[34.95361,31.594719],[34.961365,31.603355],[34.98555,31.633331],[35.001663,31.64694],[35.0975,31.708332],[35.158882,31.743889],[35.166939,31.745831],[35.209717,31.75],[35.153053,31.813053],[35.108284,31.833073],[35.035828,31.82222],[35.01416,31.82027],[34.979164,31.821941],[34.971107,31.824718],[34.965557,31.830551],[34.96611,31.86138],[34.987495,31.968887],[35.00086,31.985317],[35.0075,32.028053],[35.006104,32.054161],[34.985832,32.1325],[34.979164,32.15305],[35.02416,32.237778],[35.026939,32.240829],[35.04722,32.363609],[35.048332,32.371384],[35.04583,32.383331],[35.04722,32.39444],[35.056664,32.425278],[35.06638,32.44722],[35.077217,32.46722],[35.079994,32.470551],[35.092773,32.480827],[35.179443,32.527496],[35.208054,32.546387],[35.258049,32.523605],[35.268883,32.519722],[35.282494,32.516937]],[[35.251663,31.788055],[35.25444,31.78639],[35.25972,31.78722],[35.262497,31.789719],[35.26361,31.803608],[35.256386,31.80805],[35.248886,31.808887],[35.24638,31.80805],[35.243607,31.803886],[35.251663,31.788055]]]]}}]}';
    }
}
