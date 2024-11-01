<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class JO_Jordan extends CountrySeeder
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
        $this->name = 'Jordan';

        // Set the country's official name
        $this->official_name = 'Hashemite Kingdom of Jordan';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'JO';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'JOR';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '400';

        // Set the international dialing code
        $this->international_phone = '962';

        // Define the languages spoken in the country
        $this->languages = ['ar']; // Arabic is the official language

        // Define the top-level domain(s)
        $this->tld = ['.jo'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '25 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '67%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Jordanian National Cyber Security Center';

        // List popular web technologies in Jordan
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'JD';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '248816';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Jordanian dinar',
            // Currency code
            'code' => 'JOD',
            // Currency symbol
            'symbol' => 'د.ا',
            // Main unit
            'main_unit' => 'dinar',
            // Subunit
            'sub_unit' => 'piastre (qirsh)',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '20', '50'],
            // Main coins
            'coins_main' => ['0.5', '1'],
            // Subunit coins
            'coins_sub' => ['0.5', '1', '5', '10', '25'],
        ];

        // Set the population
        $this->population = 10203134; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 89342; // km²

        // Set the capital city
        $this->capital = 'Amman';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Amman',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+3',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1946-05-25'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Arab League',
            'Organization of Islamic Cooperation (OIC)',
            'Non-Aligned Movement',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'World Bank',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 42; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni)',
            'Christianity',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Saudi Arabia', 'iso_alpha_2' => 'SA'],
            ['name' => 'Iraq', 'iso_alpha_2' => 'IQ'],
            ['name' => 'Syria', 'iso_alpha_2' => 'SY'],
            ['name' => 'Israel', 'iso_alpha_2' => 'IL'],
            ['name' => 'Palestine', 'iso_alpha_2' => 'PS'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇯🇴',
            // Unicode code points
            'uCode' => 'U+1F1EF U+1F1F4',
            // HTML entities
            'html' => '&#x1F1EF;&#x1F1F4;',
            // CSS entities
            'css' => '\\1F1EF\\1F1F4',
            // Decimal Unicode entities
            'decimal' => '&#127471;&#127476;',
            // Direct UTF-8 string
            'utf8' => '🇯🇴',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEF\uD83C\uDDF4',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-jo:',
            // Hexadecimal entity
            'hex' => '&#x1F1EF;&#x1F1F4;',
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
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A3D',
                // RGB color values
                'rgb' => '0,122,61',
                // CMYK color values
                'cmyk' => '100,0,50,52',
                // HSL color values
                'hsl' => '152°,100%,24%',
                // HSV color values
                'hsv' => '152°,100%,48%',
                // Pantone color code
                'pantone' => '355 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
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
                'hsl' => '350°,84%,44%',
                // HSV color values
                'hsv' => '350°,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '31.9454',
            // Longitude in decimal degrees
            'longitude' => '35.9284',
            // Degrees with decimal
            'dd' => '31.9454° N, 35.9284° E',
            // Degrees, minutes, seconds
            'dms' => '31°56\'43.44" N, 35°55\'42.24" E',
            // Degrees and decimal minutes
            'dm' => '31°56.724\' N, 35°55.704\' E',
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
      "properties": { "cca2": "jo" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [34.961388, 29.360832],
            [34.959999, 29.368332],
            [34.960274, 29.37722],
            [34.961388, 29.395832],
            [34.966942, 29.448887],
            [34.97361, 29.471386],
            [34.977219, 29.477497],
            [34.989441, 29.489719],
            [35.002777, 29.519165],
            [35.005272, 29.526108],
            [35.00444, 29.532497],
            [35.00222, 29.535],
            [34.97998, 29.545753],
            [34.977493, 29.57],
            [34.974625, 29.577015],
            [35.007217, 29.640831],
            [35.075554, 29.858887],
            [35.076111, 29.876663],
            [35.073326, 29.885277],
            [35.07222, 29.898052],
            [35.07222, 29.92083],
            [35.073051, 29.953609],
            [35.101662, 30.043888],
            [35.104439, 30.051666],
            [35.106941, 30.05611],
            [35.112221, 30.062496],
            [35.125275, 30.077499],
            [35.143883, 30.094166],
            [35.156944, 30.109444],
            [35.162216, 30.118889],
            [35.164719, 30.126389],
            [35.166939, 30.151665],
            [35.161385, 30.319443],
            [35.15609, 30.415279],
            [35.158607, 30.444164],
            [35.206108, 30.594719],
            [35.219719, 30.621944],
            [35.255554, 30.681942],
            [35.292496, 30.759163],
            [35.299995, 30.791111],
            [35.337776, 30.886944],
            [35.354721, 30.918053],
            [35.361107, 30.924164],
            [35.368134, 30.928661],
            [35.390976, 30.942017],
            [35.396378, 30.947216],
            [35.402214, 30.955818],
            [35.454994, 31.09972],
            [35.462219, 31.121109],
            [35.462219, 31.149441],
            [35.459442, 31.158333],
            [35.454163, 31.170555],
            [35.432777, 31.200275],
            [35.411385, 31.225277],
            [35.452499, 31.351387],
            [35.471107, 31.400833],
            [35.473885, 31.411942],
            [35.476387, 31.427776],
            [35.478607, 31.449165],
            [35.478195, 31.497322],
            [35.479164, 31.529442],
            [35.482773, 31.562222],
            [35.489716, 31.603886],
            [35.498055, 31.641666],
            [35.526108, 31.711666],
            [35.538673, 31.73494],
            [35.554985, 31.761703],
            [35.555824, 31.766106],
            [35.548882, 31.828331],
            [35.535545, 31.929718],
            [35.526382, 31.995274],
            [35.523605, 31.997215],
            [35.522774, 31.998886],
            [35.522217, 32.000832],
            [35.516388, 32.041107],
            [35.558609, 32.203049],
            [35.568329, 32.211388],
            [35.572495, 32.222221],
            [35.573296, 32.225548],
            [35.562233, 32.36969],
            [35.559715, 32.383606],
            [35.557251, 32.388321],
            [35.552567, 32.394196],
            [35.546944, 32.404999],
            [35.571938, 32.645828],
            [35.609764, 32.676132],
            [35.615829, 32.680275],
            [35.627762, 32.686096],
            [35.631935, 32.687218],
            [35.648888, 32.685272],
            [35.681107, 32.707222],
            [35.682777, 32.708328],
            [35.698051, 32.71611],
            [35.763321, 32.748886],
            [35.79361, 32.744164],
            [35.928886, 32.721664],
            [35.933609, 32.718887],
            [36.003326, 32.66333],
            [36.025833, 32.613609],
            [36.079994, 32.543327],
            [36.125832, 32.527771],
            [36.165604, 32.518227],
            [36.197495, 32.533333],
            [36.314438, 32.459717],
            [36.346664, 32.433052],
            [36.400276, 32.381943],
            [36.486938, 32.375832],
            [36.488609, 32.375549],
            [36.516106, 32.363052],
            [36.643051, 32.349159],
            [36.724159, 32.336662],
            [36.837776, 32.313606],
            [36.866386, 32.34166],
            [37.153275, 32.50029],
            [37.493889, 32.687218],
            [37.495667, 32.688881],
            [37.498604, 32.68972],
            [37.624992, 32.758331],
            [37.958885, 32.937492],
            [38.318924, 33.128738],
            [38.533562, 33.241104],
            [38.697495, 33.327499],
            [38.794701, 33.377594],
            [39.08601, 32.501511],
            [38.986019, 32.477661],
            [39.043652, 32.30405],
            [39.259998, 32.355541],
            [39.301109, 32.236382],
            [39.196743, 32.154942],
            [39.07222, 32.057777],
            [39.004997, 32.005554],
            [38.488327, 31.879166],
            [37.986664, 31.754051],
            [37.963882, 31.748333],
            [37.709496, 31.684666],
            [37.471939, 31.624996],
            [37.202202, 31.55616],
            [37.005272, 31.505554],
            [37.294991, 31.217224],
            [37.489998, 31.023052],
            [37.561089, 30.951088],
            [38.001389, 30.504166],
            [37.667496, 30.336388],
            [37.502777, 30.00222],
            [37.410095, 29.98558],
            [37.034439, 29.918053],
            [36.743607, 29.864719],
            [36.500549, 29.502777],
            [36.272728, 29.336529],
            [36.07, 29.188889],
            [35.541107, 29.272499],
            [35.187218, 29.326942],
            [34.961388, 29.360832]
          ]
        ]
      }
    }
  ]
}
';
    }
}
