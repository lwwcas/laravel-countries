<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class BI_Burundi extends Seeder
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
    public $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Burundi';

        // Set the country's official name
        $this->official_name = 'Republic of Burundi';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'BI';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'BDI';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '108';

        // Set the international dialing code
        $this->international_phone = '257';

        // Define the languages spoken in the country
        $this->languages = ['rn', 'fr', 'en', 'sw']; // Kirundi and French are official; English and Swahili are recognized

        // Define the top-level domain(s)
        $this->tld = ['.bi'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '5 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '5%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Agency for the Security of Information Systems (ANSMSI)';

        // List popular web technologies in Burundi
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'BI';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '433561';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Burundian franc',
            // Currency code
            'code' => 'BIF',
            // Currency symbol
            'symbol' => 'FBu',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '500', '1,000', '2,000', '5,000', '10,000'],
            // Main coins
            'coins_main' => ['1', '5', '10'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '50'],
        ];

        // Set the population
        $this->population = 11890781; // As of recent estimates

        // Set the area in square kilometers
        $this->area = 27834; // km²

        // Set the capital city
        $this->capital = 'Gitega';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            // Time zone identifier
            'timezone_id' => 'Africa/Bujumbura',
            // Standard time offset
            'standard_time' => 'UTC+2', // Central Africa Time
        ];

        // Set the independence day
        $this->independence_day = '1962-07-01'; // Date of independence from Belgium

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union',
            'East African Community',
            'COMESA',
            'Organisation of Islamic Cooperation',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 3.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = ['Christianity', 'Traditional African religions', 'Islam'];

        // Describe the form of government
        $this->government = 'Presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)';

        // Define bordering countries
        $this->borders = [
            ['name' => 'Rwanda', 'iso_alpha_2' => 'RW'],
            ['name' => 'Tanzania', 'iso_alpha_2' => 'TZ'],
            ['name' => 'Democratic Republic of the Congo', 'iso_alpha_2' => 'CD'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇧🇮',
            // Unicode code points
            'uCode' => 'U+1F1E7 U+1F1EE',
            // HTML entities
            'html' => '&#x1F1E7;&#x1F1EE;',
            // CSS entities
            'css' => '\\1F1E7\\1F1EE',
            // Decimal Unicode entities
            'decimal' => '&#127463;&#127470;',
            // Direct UTF-8 string
            'utf8' => '🇧🇮',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE7\uD83C\uDDEE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-bi:',
            // Hexadecimal entity
            'hex' => '&#x1F1E7;&#x1F1EE;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CF2029',
                // RGB color values
                'rgb' => '207,32,41',
                // CMYK color values
                'cmyk' => '0,85,80,19',
                // HSL color values
                'hsl' => '357,73%,47%',
                // HSV color values
                'hsv' => '357,85%,81%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007749',
                // RGB color values
                'rgb' => '0,119,73',
                // CMYK color values
                'cmyk' => '100,0,39,53',
                // HSL color values
                'hsl' => '158,100%,23%',
                // HSV color values
                'hsv' => '158,100%,47%',
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
            'latitude' => '-3.3731',
            // Longitude in decimal degrees
            'longitude' => '29.9189',
            // Degrees with decimal
            'dd' => '3.3731° S, 29.9189° E',
            // Degrees, minutes, seconds
            'dms' => '3°22\'23.16" S, 29°55\'08.04" E',
            // Degrees and decimal minutes
            'dm' => '3°22.386\' S, 29°55.134\' E',
            // Various GPS formats
            'gps' => [
                [
                    // Format description
                    'format' => '[N,S]dd°mm\'ss.ssss", [E,W]ddd°mm\'ss.ssss"',
                    // Coordinates in this format
                    'coordinates' => 'S3°22\'23.16", E29°55\'08.04"',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.ssss"[N,S], ddd°mm\'ss.ssss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '3°22\'23.16"S, 29°55\'08.04"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd mm ss.ssss, [-]ddd mm ss.ssss',
                    // Coordinates in this format
                    'coordinates' => '-3 22 23.16, 29 55 08.04',
                ],
                [
                    // Format description
                    'format' => 'ISO 6709: [-]ddmmss.ssss, [-]dddmmss.ssss',
                    // Coordinates in this format
                    'coordinates' => '-032223.16, 0295508.04',
                ],
                [
                    // Format description
                    'format' => '[-]dd.dddd [-]ddd.dddd',
                    // Coordinates in this format
                    'coordinates' => '-3.3731 29.9189',
                ],
                [
                    // Format description
                    'format' => '[-]dd.ddddd°,[-]ddd.ddddd° (Dec Degs)',
                    // Coordinates in this format
                    'coordinates' => '-3.37310°,29.91890°',
                ],
                [
                    // Format description
                    'format' => 'dd.ddddd[N,S]ddd.ddddd[E,W] (Dec Degs Micro)',
                    // Coordinates in this format
                    'coordinates' => '3.3731000S29.9189000E',
                ],
                [
                    // Format description
                    'format' => 'ddmm.mmmm[N,S]dddmm.mmmm[E,W] (Dec Min)',
                    // Coordinates in this format
                    'coordinates' => '0322.386S02955.134E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss.sss"[N,S], ddd°mm\'ss.sss"[E,W] (Deg Min Secs)',
                    // Coordinates in this format
                    'coordinates' => '3°22\'23.16"S, 29°55\'08.04"E',
                ],
                [
                    // Format description
                    'format' => 'ddmmss.sss[N,S]dddmmss.sss[E,W] (Deg Mins Secs)',
                    // Coordinates in this format
                    'coordinates' => '032223.16S0295508.04E',
                ],
                [
                    // Format description
                    'format' => '[N,S] dd mm.mmm [E,W] ddd mm.mmm',
                    // Coordinates in this format
                    'coordinates' => 'S 3 22.386 E 29 55.134',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss[N,S],ddd:mm:ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '3:22:23S,29:55:08E',
                ],
                [
                    // Format description
                    'format' => 'dd:mm:ss.ss[N,S] ddd:mm:ss.ss[E,W]',
                    // Coordinates in this format
                    'coordinates' => '3:22:23.16S 29:55:08.04E',
                ],
                [
                    // Format description
                    'format' => 'dd°mm\'ss"[N,S] ddd°mm\'ss"[E,W]',
                    // Coordinates in this format
                    'coordinates' => '3°22\'23"S 29°55\'08"E',
                ],
                [
                    // Format description
                    'format' => '[-]dd°mm\'ss" [-]ddd°mm\'ss"',
                    // Coordinates in this format
                    'coordinates' => '-3°22\'23" 29°55\'08"',
                ],
                [
                    // Format description
                    'format' => 'dd mm\' ss" [N,S] ddd mm\' ss" [E,W]',
                    // Coordinates in this format
                    'coordinates' => '3d 22\' 23" S 29d 55\' 08" E',
                ],
                [
                    // Format description
                    'format' => 'dd.dddd[N,S] ddd.dddd[E,W]',
                    // Coordinates in this format
                    'coordinates' => '3.3731S 29.9189E',
                ],
                [
                    // Format description
                    'format' => '[-]dd° mm.mmmmm [-]ddd° mm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '-3° 22.386, 29° 55.134',
                ],
                [
                    // Format description
                    'format' => '[-] mmmm.mmmmm, [-] mmmm.mmmmm',
                    // Coordinates in this format
                    'coordinates' => '-0322.386, 2955.134',
                ],
                [
                    // Format description
                    'format' => 'mmmm.mmmmm[N,S] mmmm.mmmmm[E,W]',
                    // Coordinates in this format
                    'coordinates' => '0322.386S, 2955.134E',
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
      "properties": { "cca2": "bi" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [29.229897, -3.750964],
            [29.232498, -3.743333],
            [29.236385, -3.719722],
            [29.238888, -3.701945],
            [29.241386, -3.683889],
            [29.246944, -3.594445],
            [29.241943, -3.496111],
            [29.237499, -3.459167],
            [29.231941, -3.422778],
            [29.225277, -3.387778],
            [29.213608, -3.333611],
            [29.208332, -3.311667],
            [29.208885, -3.298611],
            [29.210831, -3.293612],
            [29.216942, -3.286111],
            [29.221107, -3.283056],
            [29.236965, -3.271866],
            [29.223331, -3.258334],
            [29.214165, -3.246945],
            [29.210552, -3.236667],
            [29.211666, -3.1575],
            [29.212776, -3.151945],
            [29.215553, -3.147778],
            [29.240555, -3.117778],
            [29.240555, -3.075834],
            [29.239166, -3.063612],
            [29.237778, -3.058056],
            [29.231388, -3.043612],
            [29.221943, -3.025278],
            [29.219166, -3.021111],
            [29.213608, -3.019722],
            [29.207497, -3.020556],
            [29.196663, -3.023612],
            [29.18972, -3.023612],
            [29.179165, -3.020278],
            [29.174999, -3.017778],
            [29.148609, -2.996111],
            [28.993889, -2.818056],
            [28.987499, -2.810556],
            [28.983887, -2.800278],
            [28.983887, -2.786667],
            [28.984444, -2.780278],
            [28.987778, -2.77],
            [28.993053, -2.761667],
            [28.996387, -2.758334],
            [29.000553, -2.755556],
            [29.010277, -2.751112],
            [29.024441, -2.744722],
            [29.038887, -2.733612],
            [29.044167, -2.725278],
            [29.052219, -2.705833],
            [29.053608, -2.700278],
            [29.054165, -2.694167],
            [29.053333, -2.688056],
            [29.047497, -2.673056],
            [29.046665, -2.66],
            [29.053608, -2.613611],
            [29.058887, -2.604722],
            [29.066387, -2.598333],
            [29.071388, -2.596389],
            [29.088333, -2.592778],
            [29.099998, -2.591667],
            [29.140553, -2.589167],
            [29.27972, -2.634445],
            [29.328888, -2.653611],
            [29.328888, -2.660556],
            [29.325832, -2.683328],
            [29.351665, -2.7125],
            [29.356667, -2.721389],
            [29.354721, -2.733056],
            [29.34861, -2.740834],
            [29.337776, -2.750556],
            [29.337219, -2.763611],
            [29.34972, -2.808056],
            [29.355831, -2.815556],
            [29.363052, -2.8225],
            [29.367222, -2.825],
            [29.372498, -2.826389],
            [29.379444, -2.826111],
            [29.384998, -2.824722],
            [29.443892, -2.795836],
            [29.461941, -2.805],
            [29.466663, -2.806945],
            [29.527496, -2.826667],
            [29.533607, -2.826111],
            [29.538609, -2.823889],
            [29.5425, -2.821111],
            [29.570551, -2.799999],
            [29.585552, -2.803889],
            [29.591942, -2.804445],
            [29.602776, -2.801667],
            [29.607777, -2.799445],
            [29.615833, -2.793889],
            [29.630831, -2.781113],
            [29.680553, -2.803889],
            [29.691666, -2.806389],
            [29.705555, -2.806111],
            [29.736385, -2.803611],
            [29.741943, -2.802222],
            [29.821941, -2.772778],
            [29.85083, -2.759722],
            [29.863052, -2.751389],
            [29.876389, -2.7375],
            [29.899441, -2.705556],
            [29.907497, -2.693056],
            [29.909443, -2.688056],
            [29.921944, -2.652779],
            [29.920277, -2.641945],
            [29.916386, -2.566389],
            [29.935276, -2.370833],
            [29.946941, -2.321111],
            [29.952221, -2.309445],
            [30.004166, -2.336112],
            [30.089165, -2.406111],
            [30.096943, -2.412222],
            [30.109997, -2.419445],
            [30.114998, -2.421389],
            [30.15361, -2.430556],
            [30.163055, -2.426111],
            [30.285942, -2.355989],
            [30.356388, -2.336389],
            [30.374443, -2.306389],
            [30.381107, -2.299445],
            [30.386665, -2.298056],
            [30.392776, -2.298611],
            [30.402496, -2.3025],
            [30.429443, -2.315278],
            [30.444721, -2.324722],
            [30.446388, -2.33],
            [30.449165, -2.334167],
            [30.461666, -2.348889],
            [30.468609, -2.355834],
            [30.504997, -2.381111],
            [30.513885, -2.385834],
            [30.555553, -2.398889],
            [30.567219, -2.400834],
            [30.57333, -2.399167],
            [30.526108, -2.453611],
            [30.523331, -2.457778],
            [30.519444, -2.4675],
            [30.479721, -2.591389],
            [30.415276, -2.844722],
            [30.414719, -2.850833],
            [30.4175, -2.861945],
            [30.420277, -2.866667],
            [30.484997, -2.947222],
            [30.494825, -2.949033],
            [30.547497, -2.898056],
            [30.55722, -2.893889],
            [30.563332, -2.893056],
            [30.568333, -2.895],
            [30.612778, -2.918889],
            [30.648888, -2.945278],
            [30.652496, -2.948611],
            [30.653889, -2.954167],
            [30.654163, -2.967778],
            [30.656944, -2.971945],
            [30.666111, -2.976389],
            [30.742775, -2.989722],
            [30.754444, -2.991389],
            [30.843662, -2.978794],
            [30.837227, -2.994732],
            [30.827499, -3.078333],
            [30.833885, -3.085556],
            [30.836109, -3.090556],
            [30.852219, -3.145278],
            [30.853886, -3.1575],
            [30.853333, -3.163611],
            [30.834999, -3.256945],
            [30.832222, -3.261111],
            [30.804996, -3.282222],
            [30.801109, -3.285],
            [30.773052, -3.298611],
            [30.767498, -3.3],
            [30.761944, -3.298889],
            [30.738331, -3.282778],
            [30.663887, -3.323889],
            [30.65583, -3.329445],
            [30.651665, -3.3325],
            [30.641388, -3.342778],
            [30.635555, -3.350556],
            [30.6222, -3.370114],
            [30.628887, -3.373333],
            [30.632271, -3.373628],
            [30.635277, -3.373889],
            [30.646111, -3.376667],
            [30.65583, -3.380556],
            [30.66, -3.383056],
            [30.663609, -3.386667],
            [30.665833, -3.391389],
            [30.667221, -3.396945],
            [30.6675, -3.403611],
            [30.664719, -3.414722],
            [30.66222, -3.418889],
            [30.631664, -3.450556],
            [30.62833, -3.453889],
            [30.623608, -3.456111],
            [30.618053, -3.4575],
            [30.598053, -3.458611],
            [30.592499, -3.46],
            [30.587776, -3.462223],
            [30.534443, -3.489167],
            [30.50222, -3.505556],
            [30.455276, -3.540278],
            [30.449165, -3.547223],
            [30.444721, -3.558333],
            [30.396664, -3.689167],
            [30.391388, -3.711109],
            [30.401665, -3.748333],
            [30.40472, -3.766111],
            [30.404999, -3.771667],
            [30.404163, -3.777778],
            [30.400833, -3.786111],
            [30.381386, -3.7775],
            [30.373055, -3.772223],
            [30.367496, -3.770833],
            [30.346107, -3.770556],
            [30.339996, -3.771389],
            [30.32111, -3.786667],
            [30.318333, -3.790833],
            [30.228054, -3.928056],
            [30.225555, -3.939167],
            [30.22472, -3.965278],
            [30.176941, -4.0775],
            [30.172222, -4.086667],
            [30.026108, -4.269444],
            [29.941387, -4.330001],
            [29.929165, -4.338334],
            [29.766388, -4.438056],
            [29.672497, -4.446389],
            [29.437775, -4.448056],
            [29.423885, -4.448056],
            [29.407497, -4.369167],
            [29.397499, -4.295834],
            [29.394444, -4.228889],
            [29.393055, -4.195278],
            [29.390831, -4.176667],
            [29.387218, -4.159445],
            [29.37833, -4.133612],
            [29.348331, -4.059723],
            [29.344166, -4.05],
            [29.339165, -4.041112],
            [29.333611, -4.033056],
            [29.313053, -4.005],
            [29.294167, -3.9825],
            [29.274998, -3.960278],
            [29.268055, -3.953333],
            [29.263885, -3.950834],
            [29.252777, -3.941389],
            [29.249165, -3.937778],
            [29.240833, -3.925556],
            [29.236385, -3.916111],
            [29.232498, -3.885],
            [29.22361, -3.796389],
            [29.22361, -3.789444],
            [29.224163, -3.776389],
            [29.229897, -3.750964]
          ]
        ]
      }
    }
  ]
}
';
    }
}
