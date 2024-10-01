<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class IO_BritishIndianOceanTerritory extends CountrySeeder
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
        $this->name = 'British Indian Ocean Territory';

        // Set the country's official name
        $this->official_name = 'British Indian Ocean Territory';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'IO';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'IOT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '086';

        // Set the international dialing code
        $this->international_phone = '246';

        // Define the languages spoken in the territory
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.io'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds (limited due to remote location)
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => 'Limited',
            // Average mobile connection speed
            'average_speed_mobile' => 'Limited',
        ];

        // Define internet penetration rate
        $this->internet_penetration = 'Minimal'; // Very limited internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies (data not available)
        $this->popular_technologies = []; // No data due to lack of permanent population

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'IO';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1282588';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States dollar',
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
            'banknotes' => ['1', '2', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population (no permanent residents)
        $this->population = 0; // No permanent civilian population

        // Set the area in square kilometers
        $this->area = 60; // km²

        // Set the capital city (no capital, administered from the UK)
        $this->capital = null;

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Chagos',
                // Standard time offset
                'standard_time' => 'UTC+6',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // It is a British Overseas Territory

        // List international organizations the territory is part of
        $this->international_organizations = []; // Not a member of international organizations

        // Set the GDP in billions of USD
        $this->gdp = null; // Not applicable due to lack of economy

        // List the predominant religions
        $this->religions = [
            'None', // No permanent population
        ];

        // Describe the form of government
        $this->government = 'British Overseas Territory';

        // Set the national sport
        $this->national_sport = null; // Not applicable

        // Define bordering countries
        $this->borders = []; // It is an island territory with no land borders

        // Define the territory's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇮🇴',
            // Unicode code points
            'uCode' => 'U+1F1EE U+1F1F4',
            // HTML entities
            'html' => '&#x1F1EE;&#x1F1F4;',
            // CSS entities
            'css' => '\\1F1EE\\1F1F4',
            // Decimal Unicode entities
            'decimal' => '&#127470;&#127476;',
            // Direct UTF-8 string
            'utf8' => '🇮🇴',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEE\uD83C\uDDF4',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-io:',
            // Hexadecimal entity
            'hex' => '&#x1F1EE;&#x1F1F4;',
        ];

        // Define the colors of the territory's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'royal blue',
                // Hexadecimal color code
                'hex' => '#012169',
                // RGB color values
                'rgb' => '1,33,105',
                // CMYK color values
                'cmyk' => '99,69,0,59',
                // HSL color values
                'hsl' => '223,99%,21%',
                // HSV color values
                'hsv' => '223,99%,41%',
                // Pantone color code
                'pantone' => '280 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF142B',
                // RGB color values
                'rgb' => '207,20,43',
                // CMYK color values
                'cmyk' => '0,90,79,19',
                // HSL color values
                'hsl' => '350,82%,44%',
                // HSV color values
                'hsv' => '350,90%,81%',
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
                'hsl' => '152,100%,24%',
                // HSV color values
                'hsv' => '152,100%,48%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'gold',
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
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-7.3133',
            // Longitude in decimal degrees
            'longitude' => '72.4229',
            // Degrees with decimal
            'dd' => '7.3133° S, 72.4229° E',
            // Degrees, minutes, seconds
            'dms' => '7°18\'47.88" S, 72°25\'22.44" E',
            // Degrees and decimal minutes
            'dm' => '7°18.798\' S, 72°25.374\' E',
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
      "properties": { "cca2": "io" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [72.487198, -7.38194],
              [72.439972, -7.435833],
              [72.43637, -7.436666],
              [72.43254, -7.43474],
              [72.4272, -7.414166],
              [72.383606, -7.304167],
              [72.375259, -7.29889],
              [72.373032, -7.296389],
              [72.358597, -7.27417],
              [72.356934, -7.271389],
              [72.356934, -7.267778],
              [72.359146, -7.265278],
              [72.365265, -7.262222],
              [72.372208, -7.26083],
              [72.42499, -7.313889],
              [72.432755, -7.32444],
              [72.434708, -7.33167],
              [72.43692, -7.346667],
              [72.43692, -7.360278],
              [72.431366, -7.423333],
              [72.432755, -7.426666],
              [72.434982, -7.42889],
              [72.438309, -7.4275],
              [72.479156, -7.381389],
              [72.480545, -7.37833],
              [72.48027, -7.37417],
              [72.46693, -7.27333],
              [72.461929, -7.26917],
              [72.459991, -7.266389],
              [72.439697, -7.236388],
              [72.438309, -7.23305],
              [72.440262, -7.230278],
              [72.443863, -7.230278],
              [72.448868, -7.234445],
              [72.48997, -7.28556],
              [72.493042, -7.29139],
              [72.494141, -7.29528],
              [72.494431, -7.30305],
              [72.487198, -7.38194]
            ]
          ],
          [
            [
              [71.34833, -6.65889],
              [71.34471, -6.65889],
              [71.343323, -6.656667],
              [71.35054, -6.6525],
              [71.365265, -6.65167],
              [71.3647, -6.65472],
              [71.361923, -6.656667],
              [71.34833, -6.65889]
            ]
          ],
          [
            [
              [71.266388, -6.391945],
              [71.262207, -6.392222],
              [71.261383, -6.388612],
              [71.258606, -6.382222],
              [71.259155, -6.37806],
              [71.261932, -6.37167],
              [71.266098, -6.366666],
              [71.269714, -6.367499],
              [71.270264, -6.37083],
              [71.270264, -6.386389],
              [71.26915, -6.39],
              [71.266388, -6.391945]
            ]
          ],
          [
            [
              [71.347763, -6.206944],
              [71.344986, -6.208889],
              [71.34137, -6.207778],
              [71.339157, -6.205556],
              [71.338043, -6.201944],
              [71.338593, -6.19583],
              [71.3461, -6.18139],
              [71.35054, -6.17667],
              [71.353317, -6.175],
              [71.356934, -6.17417],
              [71.360809, -6.17417],
              [71.36304, -6.17639],
              [71.362488, -6.180555],
              [71.349991, -6.204722],
              [71.347763, -6.206944]
            ]
          ],
          [
            [
              [71.782486, -5.44028],
              [71.77916, -5.441667],
              [71.773315, -5.44028],
              [71.763046, -5.436388],
              [71.760544, -5.434722],
              [71.759995, -5.431389],
              [71.762772, -5.429722],
              [71.766388, -5.429722],
              [71.781937, -5.43694],
              [71.782486, -5.44028]
            ]
          ],
          [
            [
              [72.216385, -5.36222],
              [72.214157, -5.363334],
              [72.21138, -5.359722],
              [72.207764, -5.35444],
              [72.20694, -5.35055],
              [72.208603, -5.34806],
              [72.211929, -5.348333],
              [72.216095, -5.35805],
              [72.216385, -5.36222]
            ]
          ],
          [
            [
              [72.232483, -5.319722],
              [72.2211, -5.335556],
              [72.220261, -5.331944],
              [72.221649, -5.327778],
              [72.228043, -5.31583],
              [72.23082, -5.31417],
              [72.233597, -5.31583],
              [72.232483, -5.319722]
            ]
          ],
          [
            [
              [71.742203, -5.291111],
              [71.74054, -5.29389],
              [71.737198, -5.293333],
              [71.736649, -5.289166],
              [71.737198, -5.285277],
              [71.74054, -5.27111],
              [71.742203, -5.26833],
              [71.74498, -5.26639],
              [71.748596, -5.26556],
              [71.751099, -5.26778],
              [71.742203, -5.291111]
            ]
          ],
          [
            [
              [71.869431, -5.25778],
              [71.86499, -5.25778],
              [71.863037, -5.25528],
              [71.863876, -5.252501],
              [71.866653, -5.250556],
              [71.870255, -5.249722],
              [71.87442, -5.25],
              [71.880539, -5.253334],
              [71.882202, -5.25611],
              [71.8797, -5.25694],
              [71.869431, -5.25778]
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
