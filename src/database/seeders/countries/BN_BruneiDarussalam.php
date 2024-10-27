<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class BN_BruneiDarussalam extends CountrySeeder
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
        $this->name = 'Brunei';

        // Set the country's official name
        $this->official_name = 'Nation of Brunei, Abode of Peace';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BN';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BRN';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '096';

        // Set the international dialing code
        $this->international_phone = '673';

        // Define the languages spoken in the country
        $this->languages = ['ms']; // Malay is the official language

        // Define the top-level domain(s)
        $this->tld = ['.bn'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '150 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '30 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '95%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Cyber Security Brunei (CSB)';

        // List popular web technologies in Brunei
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Java', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BX';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1820814';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Brunei dollar',
            // Currency code
            'code' => 'BND',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'sen',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['1', '5', '10', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 460345; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 5765; // km²

        // Set the capital city
        $this->capital = 'Bandar Seri Begawan';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Asia/Brunei',
            // Standard time offset
            'standard_time' => 'UTC+8', // Brunei Darussalam Time
        ];

        // Set the independence day
        $this->independence_day = '1984-01-01'; // Date of independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'ASEAN',
            'Commonwealth of Nations',
            'OIC',
            'APEC',
            'Non-Aligned Movement',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 12.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Islam'];

        // Describe the form of government
        $this->government = 'Unitary Islamic absolute monarchy';

        // Set the national sport
        $this->national_sport = 'Silat'; // Traditional martial art; football is also popular

        // Define bordering countries
        $this->borders = [
            ['name' => 'Malaysia', 'iso_alpha_2' => 'MY'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇳',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1F3',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1F3;',
            // CSS entities
            'css' => '\\1F1E7\\1F1F3',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127475;',
            // Direct UTF-8 string
            'utf8' => '🇧🇳',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDF3',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bn:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1F3;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFD100',
                // RGB color values
                'rgb' => '255,209,0',
                // CMYK color values
                'cmyk' => '0,18,100,0',
                // HSL color values
                'hsl' => '50,100%,50%',
                // HSV color values
                'hsv' => '50,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 109 C',
                // Contrast color for readability
                'contrast' => '#000000',
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
                'pantone' => 'Black',
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
                'hsl' => '350,85%,44%',
                // HSV color values
                'hsv' => '350,92%,81%',
                // Pantone color code
                'pantone' => 'Pantone 186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '4.5353',
            // Longitude in decimal degrees
            'longitude' => '114.7277',
            // Degrees with decimal
            'dd' => '4.5353° N, 114.7277° E',
            // Degrees, minutes, seconds
            'dms' => '4°32\'07.08" N, 114°43\'39.72" E',
            // Degrees and decimal minutes
            'dm' => '4°32.118\' N, 114°43.662\' E',
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
      "properties": { "cca2": "bn" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [115.223038, 4.8049980000001],
              [115.261383, 4.6830540000001],
              [115.282494, 4.611666],
              [115.282494, 4.59861],
              [115.27832, 4.582777],
              [115.272774, 4.573889],
              [115.2686, 4.56444],
              [115.264427, 4.54111],
              [115.272491, 4.454166],
              [115.27388, 4.448609],
              [115.278053, 4.438888],
              [115.2836, 4.430832],
              [115.289146, 4.423055],
              [115.302757, 4.4102770000001],
              [115.314423, 4.399721],
              [115.321381, 4.393055],
              [115.344711, 4.368332],
              [115.350807, 4.36],
              [115.355553, 4.351665],
              [115.357758, 4.346944],
              [115.36026, 4.3361100000001],
              [115.36026, 4.329166],
              [115.355553, 4.320833],
              [115.348602, 4.314165],
              [115.343323, 4.31194],
              [115.33638, 4.311388],
              [115.320541, 4.315555],
              [115.113602, 4.3741660000001],
              [115.104156, 4.3788870000001],
              [115.10054, 4.3822210000001],
              [115.096367, 4.391388],
              [115.090271, 4.413333],
              [115.029427, 4.64583],
              [115.026657, 4.656666],
              [115.020538, 4.724443],
              [115.020828, 4.75333],
              [115.029129, 4.82021],
              [115.032211, 4.810555],
              [115.034988, 4.806388],
              [115.04248, 4.8002770000001],
              [115.047211, 4.7983320000001],
              [115.052757, 4.7983320000001],
              [115.061653, 4.803054],
              [115.124687, 4.849443],
              [115.132202, 4.855555],
              [115.134987, 4.85972],
              [115.145782, 4.90324],
              [115.1922, 4.849166],
              [115.223038, 4.8049980000001]
            ]
          ],
          [
            [
              [114.981369, 4.8924990000001],
              [114.982758, 4.88694],
              [115.018433, 4.8957950000001],
              [114.991928, 4.846666],
              [114.986366, 4.83917],
              [114.979431, 4.831666],
              [114.962196, 4.82194],
              [114.945824, 4.817222],
              [114.91748, 4.811666],
              [114.904427, 4.81111],
              [114.87915, 4.810277],
              [114.866653, 4.809721],
              [114.856369, 4.806388],
              [114.848877, 4.800832],
              [114.788879, 4.751666],
              [114.785263, 4.747499],
              [114.780548, 4.73861],
              [114.77916, 4.73305],
              [114.777771, 4.7208330000001],
              [114.779984, 4.709166],
              [114.785263, 4.7008320000001],
              [114.791656, 4.693888],
              [114.815536, 4.58083],
              [114.825821, 4.495832],
              [114.829163, 4.47389],
              [114.834717, 4.446387],
              [114.84082, 4.437499],
              [114.844147, 4.434721],
              [114.848877, 4.4327760000001],
              [114.85582, 4.4319430000001],
              [114.862198, 4.433332],
              [114.866928, 4.355277],
              [114.80748, 4.1469440000001],
              [114.805252, 4.142221],
              [114.793053, 4.126944],
              [114.709152, 4.05305],
              [114.70166, 4.046944],
              [114.669983, 4.02972],
              [114.649986, 4.02222],
              [114.641098, 4.018888],
              [114.634987, 4.0175],
              [114.623032, 4.02028],
              [114.618317, 4.02167],
              [114.613602, 4.0244440000001],
              [114.609993, 4.027777],
              [114.608871, 4.03389],
              [114.609421, 4.053332],
              [114.607483, 4.058054],
              [114.47554, 4.2000000000001],
              [114.399986, 4.2563890000001],
              [114.329987, 4.326944],
              [114.329163, 4.339999],
              [114.311371, 4.429166],
              [114.306641, 4.43722],
              [114.263893, 4.4974990000001],
              [114.246094, 4.521666],
              [114.235809, 4.531943],
              [114.188309, 4.566944],
              [114.179977, 4.5724990000001],
              [114.164993, 4.577777],
              [114.15332, 4.58],
              [114.095078, 4.59054],
              [114.101646, 4.591388],
              [114.139977, 4.59417],
              [114.160538, 4.59417],
              [114.179703, 4.59278],
              [114.190536, 4.59],
              [114.203049, 4.581666],
              [114.283867, 4.59194],
              [114.289978, 4.59278],
              [114.300812, 4.595554],
              [114.520264, 4.69111],
              [114.52916, 4.6958320000001],
              [114.544983, 4.7075],
              [114.555252, 4.717777],
              [114.564148, 4.7294440000001],
              [114.579987, 4.74778],
              [114.592758, 4.7622210000001],
              [114.633881, 4.803054],
              [114.655258, 4.82278],
              [114.666092, 4.8325],
              [114.685532, 4.847499],
              [114.716927, 4.8713870000001],
              [114.736649, 4.8858330000001],
              [114.913597, 4.996387],
              [114.931374, 5.005833],
              [114.954163, 5.0175],
              [114.963608, 5.02167],
              [115.00943, 5.03722],
              [115.040268, 5.047499],
              [115.051376, 5.050277],
              [115.069153, 5.05305],
              [115.082207, 5.05222],
              [115.098038, 5.047499],
              [115.102768, 5.045277],
              [115.105553, 5.04139],
              [115.104713, 5.036666],
              [115.101379, 5.033054],
              [115.041656, 4.968888],
              [114.9897, 4.904721],
              [114.981369, 4.8924990000001]
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
