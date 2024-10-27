<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class AX_AlandIslands extends CountrySeeder
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
    public ?string $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Åland Islands';

        // Set the country's official name
        $this->official_name = 'Åland Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'AX';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'ALA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '248';

        // Set the international dialing code
        $this->international_phone = '+358 18';

        // Define the languages spoken in the country
        $this->languages = ['sv']; // Swedish is the official language

        // Define the top-level domain(s)
        $this->tld = ['.ax'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '30 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '95%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Åland Government IT Department'; // Local authority responsible for cybersecurity

        // List popular web technologies in Åland Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress']; // Popular web technologies in Åland Islands

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'AX';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '661882';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Euro',
            // Currency code
            'code' => 'EUR',
            // Currency symbol
            'symbol' => '€',
            // Main unit
            'main_unit' => 'euro',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 29789; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 1580; // km²

        // Set the capital city
        $this->capital = 'Mariehamn';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Europe/Mariehamn',
            // Standard time offset
            'standard_time' => 'UTC+2', // Eastern European Time
            // Daylight saving time offset
            'daylight_saving_time' => 'UTC+3', // Eastern European Summer Time
        ];

        // Set the independence day
        $this->independence_day = null; // Åland Islands are an autonomous region of Finland

        // List international organizations the country is part of
        $this->international_organizations = ['European Union (as part of Finland)', 'Nordic Council']; // International affiliations

        // Set the GDP in billions of USD
        $this->gdp = 1.563; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity (Lutheranism)']; // Predominant religion

        // Describe the form of government
        $this->government = 'Autonomous region of Finland with its own parliament';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = []; // Island region with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇦🇽',
            // Unicode code points
            'uCode' => 'U+1F1E6 U+1F1FD',
            // HTML entities
            'html' => '&#x1F1E6;&#x1F1FD;',
            // CSS entities
            'css' => '\\1F1E6\\1F1FD',
            // Decimal Unicode entities
            'decimal' => '&#127462;&#127485;',
            // Direct UTF-8 string
            'utf8' => '🇦🇽',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE6\uD83C\uDDFD',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ax:',
            // Hexadecimal entity
            'hex' => '&#x1F1E6;&#x1F1FD;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0053A5',
                // RGB color values
                'rgb' => '0,83,165',
                // CMYK color values
                'cmyk' => '100,50,0,35',
                // HSL color values
                'hsl' => '210,100%,32%',
                // HSV color values
                'hsv' => '210,100%,65%',
                // Pantone color code
                'pantone' => 'Pantone 294 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
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
                'hsl' => '350,87%,44%',
                // HSV color values
                'hsv' => '350,92%,82%',
                // Pantone color code
                'pantone' => 'Pantone 186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFCD00',
                // RGB color values
                'rgb' => '255,205,0',
                // CMYK color values
                'cmyk' => '0,20,100,0',
                // HSL color values
                'hsl' => '48,100%,50%',
                // HSV color values
                'hsv' => '48,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '60.1167',
            // Longitude in decimal degrees
            'longitude' => '19.9000',
            // Degrees with decimal
            'dd' => '60.1167° N, 19.9000° E',
            // Degrees, minutes, seconds
            'dms' => '60°07\'00.12" N, 19°54\'00.00" E',
            // Degrees and decimal minutes
            'dm' => '60°07.002\' N, 19°54.000\' E',
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
      "properties": { "cca2": "ax" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [20.210831, 59.979996],
              [20.203327, 59.976944],
              [20.137215, 59.991661],
              [20.129162, 59.994995],
              [20.004166, 60.051109],
              [19.999165, 60.05527],
              [20.00278, 60.061943],
              [20.008331, 60.06694],
              [20.094166, 60.093048],
              [20.102776, 60.09555],
              [20.109165, 60.09166],
              [20.109997, 60.088051],
              [20.123055, 60.080551],
              [20.163609, 60.068604],
              [20.193054, 60.06472],
              [20.205276, 60.063606],
              [20.211941, 60.059998],
              [20.227497, 60.002777],
              [20.226036, 60],
              [20.210831, 59.979996]
            ]
          ],
          [
            [
              [20.270554, 60.057495],
              [20.263054, 60.054161],
              [20.204998, 60.081383],
              [20.200275, 60.085831],
              [20.198887, 60.09083],
              [20.20472, 60.109444],
              [20.215553, 60.13916],
              [20.223053, 60.142494],
              [20.269444, 60.14111],
              [20.276108, 60.137497],
              [20.2875, 60.12944],
              [20.29222, 60.12527],
              [20.295277, 60.12055],
              [20.298332, 60.109993],
              [20.29805, 60.104439],
              [20.270554, 60.057495]
            ]
          ],
          [
            [
              [19.676666, 60.15694],
              [19.67305, 60.150276],
              [19.604443, 60.153053],
              [19.57527, 60.121941],
              [19.562775, 60.122772],
              [19.551109, 60.124992],
              [19.542774, 60.128326],
              [19.52333, 60.150833],
              [19.510555, 60.175278],
              [19.512218, 60.181389],
              [19.535553, 60.225273],
              [19.541111, 60.23027],
              [19.564999, 60.248604],
              [19.571663, 60.252495],
              [19.58, 60.254997],
              [19.589443, 60.25666],
              [19.601944, 60.255829],
              [19.611942, 60.253052],
              [19.62722, 60.243889],
              [19.666111, 60.193329],
              [19.669167, 60.188606],
              [19.673885, 60.17305],
              [19.676666, 60.15694]
            ]
          ],
          [
            [
              [20.397221, 60.195],
              [20.387497, 60.193329],
              [20.345276, 60.230827],
              [20.341942, 60.235275],
              [20.340553, 60.24055],
              [20.342777, 60.246666],
              [20.348331, 60.251663],
              [20.366108, 60.265549],
              [20.375553, 60.26722],
              [20.39416, 60.266937],
              [20.436386, 60.2575],
              [20.44111, 60.253052],
              [20.442497, 60.248055],
              [20.441387, 60.24305],
              [20.409443, 60.203888],
              [20.397221, 60.195]
            ]
          ],
          [
            [
              [20.084721, 60.350273],
              [20.277496, 60.274162],
              [20.21778, 60.208328],
              [20.171665, 60.16389],
              [20.16222, 60.162216],
              [20.09222, 60.170273],
              [20.085552, 60.174164],
              [20.082497, 60.178886],
              [20.101109, 60.215553],
              [20.10583, 60.221382],
              [20.122776, 60.226105],
              [20.120277, 60.239998],
              [20.066666, 60.296387],
              [20.061665, 60.300827],
              [20.046944, 60.30778],
              [20.036942, 60.310555],
              [20.025276, 60.310555],
              [19.914165, 60.217216],
              [19.91389, 60.21166],
              [19.926666, 60.192772],
              [19.93111, 60.187775],
              [19.937496, 60.184166],
              [19.945831, 60.180832],
              [19.987499, 60.170273],
              [20.025776, 60.154274],
              [20.051388, 60.101105],
              [20.052776, 60.095833],
              [20.050831, 60.089722],
              [20.044441, 60.085548],
              [20.02166, 60.085831],
              [19.99944, 60.089439],
              [19.96833, 60.090271],
              [19.957775, 60.089439],
              [19.951385, 60.085274],
              [19.947777, 60.07861],
              [19.943886, 60.04277],
              [19.93861, 60.059166],
              [19.927776, 60.08416],
              [19.924721, 60.088882],
              [19.918053, 60.092773],
              [19.908054, 60.095276],
              [19.894722, 60.097221],
              [19.874996, 60.094994],
              [19.86861, 60.09083],
              [19.869999, 60.085548],
              [19.87305, 60.080826],
              [19.868332, 60.077217],
              [19.858887, 60.075829],
              [19.8475, 60.075829],
              [19.771664, 60.080826],
              [19.750832, 60.094994],
              [19.72166, 60.126106],
              [19.699165, 60.158882],
              [19.69611, 60.163605],
              [19.648331, 60.25666],
              [19.64861, 60.262497],
              [19.74889, 60.304718],
              [19.78283, 60.292664],
              [19.776943, 60.261108],
              [19.768055, 60.249443],
              [19.762497, 60.244438],
              [19.76055, 60.238327],
              [19.7925, 60.191383],
              [19.79583, 60.186661],
              [19.809166, 60.184998],
              [19.816666, 60.188332],
              [19.930832, 60.276939],
              [19.935276, 60.282776],
              [19.937222, 60.288887],
              [19.937496, 60.294716],
              [19.93111, 60.303886],
              [19.898609, 60.339722],
              [19.89222, 60.34333],
              [19.8825, 60.341942],
              [19.878052, 60.3361],
              [19.874443, 60.32944],
              [19.872498, 60.323326],
              [19.867775, 60.317497],
              [19.862221, 60.312492],
              [19.838942, 60.319824],
              [19.834274, 60.32216],
              [19.78, 60.34916],
              [19.782776, 60.354439],
              [19.808331, 60.377495],
              [19.824997, 60.39222],
              [19.85722, 60.40361],
              [19.86861, 60.40361],
              [19.90583, 60.399994],
              [20.084721, 60.350273]
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
