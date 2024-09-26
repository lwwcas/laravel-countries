<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class AW_Aruba extends Seeder
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
        $this->name = 'Aruba';

        // Set the country's official name
        $this->official_name = 'Aruba';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AW';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ABW';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '533';

        // Set the international dialing code
        $this->international_phone = '297';

        // Define the languages spoken in the country
        $this->languages = ['nl', 'pa']; // Dutch and Papiamento are official languages

        // Define the top-level domain(s)
        $this->tld = ['.aw'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '70%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Department of Information and Communication Technology (DICT)';

        // List popular web technologies in Aruba
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'NU';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3577279';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Aruban florin',
            // Currency code
            'code' => 'AWG',
            // Currency symbol
            'symbol' => 'ƒ',
            // Main unit
            'main_unit' => 'florin',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '25', '50', '100', '200'],
            // Main coins
            'coins_main' => ['5'],
            // Subunit coins
            'coins_sub' => ['5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 106766; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 180; // km²

        // Set the capital city
        $this->capital = 'Oranjestad';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'America/Aruba',
            // Standard time offset
            'standard_time' => 'UTC−4', // Atlantic Standard Time (does not observe DST)
        ];

        // Set the independence day
        $this->independence_day = null; // Aruba is a constituent country within the Kingdom of the Netherlands

        // List international organizations the country is part of
        $this->international_organizations = ['CARICOM (Observer)', 'OECD (Associate)'];

        // Set the GDP in billions of USD
        $this->gdp = 2.5; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity (Catholicism)'];

        // Describe the form of government
        $this->government = 'Constitutional monarchy with parliamentary democracy';

        // Set the national sport
        $this->national_sport = 'Baseball';

        // Define bordering countries
        $this->borders = []; // Island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇼',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1FC',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1FC;',
            // CSS entities
            'css' => '\\1F1E6\\1F1FC',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127484;',
            // Direct UTF-8 string
            'utf8' => '🇦🇼',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDFC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-aw:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1FC;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'light blue',
                // Hexadecimal color code
                'hex' => '#0099CC',
                // RGB color values
                'rgb' => '0,153,204',
                // CMYK color values
                'cmyk' => '100,25,0,20',
                // HSL color values
                'hsl' => '195,100%,40%',
                // HSV color values
                'hsv' => '195,100%,80%',
                // Pantone color code
                'pantone' => 'Pantone 2995 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FEDD00',
                // RGB color values
                'rgb' => '254,221,0',
                // CMYK color values
                'cmyk' => '0,13,100,0',
                // HSL color values
                'hsl' => '52,100%,50%',
                // HSV color values
                'hsv' => '52,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 109 C',
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
                'hsl' => '348,85%,44%',
                // HSV color values
                'hsv' => '348,92%,81%',
                // Pantone color code
                'pantone' => 'Pantone 186 C',
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
                'pantone' => 'Pantone White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '12.5211',
            // Longitude in decimal degrees
            'longitude' => '-69.9683',
            // Degrees with decimal
            'd' => '12.5211° N, 69.9683° W',
            // Degrees, minutes, seconds
            'dms' => '12°31\'15.96" N, 69°58\'05.88" W',
            // Degrees and decimal minutes
            'dm' => '12°31.266\' N, 69°58.098\' W',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'N12°31\'15.96", W69°58\'05.88"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12°31\'15.96"N, 69°58\'05.88"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '12 31 15.96, -69 58 05.88',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '123115.96, -0695805.88',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]ddd.dddd',
                    // Coordinates in this format
                    'coordinates' => '12.5211 -69.9683',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '12.52110°,-69.96830°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '12.5211000N69.9683000W',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '1231.266N06958.098W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '12°31\'15.96"N, 69°58\'05.88"W',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '123115.96N0695805.88W',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'N 12 31.266 W 69 58.098',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12:31:15N,69:58:05W',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12:31:15.96N 69:58:05.88W',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12°31\'15"N 69°58\'05"W',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '12°31\'15" -69°58\'05"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '12d 31\' 15" N 69d 58\' 05" W',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] ddd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '12.5211N 69.9683W',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '12° 31.266, -69° 58.098',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '1231.266, -6958.098',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '1231.266N, 6958.098W',
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
      "properties": { "cca2": "aw" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-69.882233, 12.41111],
            [-69.946945, 12.436666],
            [-70.056122, 12.534443],
            [-70.059448, 12.538055],
            [-70.060287, 12.544167],
            [-70.063339, 12.621666],
            [-70.063065, 12.628611],
            [-70.058899, 12.631109],
            [-70.053345, 12.629721],
            [-70.035278, 12.61972],
            [-70.031113, 12.616943],
            [-69.932236, 12.528055],
            [-69.896957, 12.480833],
            [-69.891403, 12.472221],
            [-69.885559, 12.457777],
            [-69.873901, 12.421944],
            [-69.873337, 12.415833],
            [-69.876114, 12.411665],
            [-69.882233, 12.41111]
          ]
        ]
      }
    }
  ]
}
';
    }
}
