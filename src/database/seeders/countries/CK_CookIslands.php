<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class CK_CookIslands extends CountrySeeder
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
        $this->name = 'Cook Islands';

        // Set the country's official name
        $this->official_name = 'Cook Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'CK';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'COK';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '184';

        // Set the international dialing code
        $this->international_phone = '682';

        // Define the languages spoken in the country
        $this->languages = ['en', 'rar']; // English and Cook Islands Māori (Rarotongan) are official languages

        // Define the top-level domain(s)
        $this->tld = ['.ck'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps', // Estimated average speed
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '50%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No dedicated national cybersecurity agency

        // List popular web technologies in the Cook Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = null; // No specific WMO code

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1899402';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'New Zealand dollar',
            // Currency code
            'code' => 'NZD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['0.10', '0.20', '0.50'],
        ];

        // Set the population
        $this->population = 17564; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 236; // km²

        // Set the capital city
        $this->capital = 'Avarua';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Rarotonga',
                // Standard time offset
                'standard_time' => 'UTC-10', // Cook Islands Standard Time (CIST)
            ],
        ];

        // Set the independence day
        $this->independence_day = '1965-08-04'; // Date of self-governance in free association with New Zealand

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations (Non-member observer)',
            'Pacific Islands Forum',
            'Secretariat of the Pacific Community',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.38; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Cook Islands Christian Church, Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary democracy in free association with New Zealand';

        // Set the national sport
        $this->national_sport = 'Rugby union'; // Rugby union is the most popular sport

        // Define bordering countries
        $this->borders = []; // Island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇨🇰',
            // Unicode code points
            'uCode' => 'U+1F1E8 U+1F1F0',
            // HTML entities
            'html' => '&#x1F1E8;&#x1F1F0;',
            // CSS entities
            'css' => '\\1F1E8\\1F1F0',
            // Decimal Unicode entities
            'decimal' => '&#127464;&#127472;',
            // Direct UTF-8 string
            'utf8' => '🇨🇰',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE8\uD83C\uDDF0',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ck:',
            // Hexadecimal entity
            'hex' => '&#x1F1E8;&#x1F1F0;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '220,100%,24%',
                // HSV color values
                'hsv' => '220,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
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
            'latitude' => '-21.2367',
            // Longitude in decimal degrees
            'longitude' => '-159.7776',
            // Degrees with decimal
            'dd' => '21.2367° S, 159.7776° W',
            // Degrees, minutes, seconds
            'dms' => '21°14\'12.12" S, 159°46\'39.36" W',
            // Degrees and decimal minutes
            'dm' => '21°14.202\' S, 159°46.656\' W',
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
      "properties": { "cca2": "ck" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-157.890564, -21.938053],
              [-157.928894, -21.940834],
              [-157.945038, -21.940559],
              [-157.948883, -21.93861],
              [-157.963043, -21.92389],
              [-157.964478, -21.91695],
              [-157.964478, -21.91222],
              [-157.962799, -21.904167],
              [-157.95752, -21.895283],
              [-157.947784, -21.88806],
              [-157.929993, -21.87944],
              [-157.921967, -21.880283],
              [-157.917511, -21.88306],
              [-157.886719, -21.91833],
              [-157.883087, -21.92389],
              [-157.882507, -21.927223],
              [-157.883087, -21.931393],
              [-157.884766, -21.935558],
              [-157.890564, -21.938053]
            ]
          ],
          [
            [
              [-159.741119, -21.254169],
              [-159.746979, -21.256668],
              [-159.79364, -21.252785],
              [-159.830292, -21.249168],
              [-159.834747, -21.24778],
              [-159.838348, -21.24361],
              [-159.841675, -21.23472],
              [-159.835541, -21.202782],
              [-159.833893, -21.195831],
              [-159.830292, -21.19111],
              [-159.824188, -21.18861],
              [-159.78833, -21.1875],
              [-159.759766, -21.191669],
              [-159.752502, -21.19305],
              [-159.732788, -21.222778],
              [-159.733063, -21.22972],
              [-159.737213, -21.250835],
              [-159.741119, -21.254169]
            ]
          ],
          [
            [
              [-157.316437, -20.188053],
              [-157.31723, -20.188892],
              [-157.328064, -20.185837],
              [-157.327789, -20.18454],
              [-157.334442, -20.18028],
              [-157.337494, -20.17695],
              [-157.3414, -20.15],
              [-157.341095, -20.141949],
              [-157.338348, -20.13584],
              [-157.332214, -20.13306],
              [-157.320038, -20.135281],
              [-157.315002, -20.1375],
              [-157.309174, -20.147781],
              [-157.305878, -20.16639],
              [-157.308929, -20.17111],
              [-157.313904, -20.17361],
              [-157.316986, -20.17862],
              [-157.316437, -20.188053]
            ]
          ],
          [
            [
              [-158.098358, -20.016113],
              [-158.116669, -20.019173],
              [-158.126678, -20.00944],
              [-158.130859, -19.999725],
              [-158.129974, -19.990833],
              [-158.126923, -19.98056],
              [-158.123871, -19.97639],
              [-158.118591, -19.97306],
              [-158.113647, -19.971111],
              [-158.106934, -19.970554],
              [-158.094757, -19.974171],
              [-158.085297, -19.98194],
              [-158.08197, -19.98694],
              [-158.08139, -19.996387],
              [-158.084991, -20.00806],
              [-158.092529, -20.01334],
              [-158.098358, -20.016113]
            ]
          ],
          [
            [
              [-158.27948, -19.817783],
              [-158.262512, -19.83667],
              [-158.278351, -19.83833],
              [-158.281952, -19.836117],
              [-158.285553, -19.836948],
              [-158.291382, -19.83333],
              [-158.292816, -19.831116],
              [-158.293335, -19.82361],
              [-158.291962, -19.81972],
              [-158.286682, -19.81639],
              [-158.27948, -19.817783]
            ]
          ],
          [
            [
              [-157.708649, -19.85305],
              [-157.713043, -19.857227],
              [-157.718872, -19.851665],
              [-157.740265, -19.821117],
              [-157.741364, -19.814167],
              [-157.739197, -19.80751],
              [-157.718323, -19.774174],
              [-157.713928, -19.77028],
              [-157.709442, -19.77167],
              [-157.70752, -19.77639],
              [-157.703369, -19.83333],
              [-157.704163, -19.840282],
              [-157.708649, -19.85305]
            ]
          ],
          [
            [
              [-158.92865, -19.270283],
              [-158.934479, -19.27362],
              [-158.943909, -19.27195],
              [-158.955017, -19.250561],
              [-158.955017, -19.246387],
              [-158.951935, -19.242496],
              [-158.946686, -19.24056],
              [-158.941681, -19.24278],
              [-158.924713, -19.260284],
              [-158.925049, -19.2664],
              [-158.92865, -19.270283]
            ]
          ],
          [
            [
              [-159.78833, -18.890556],
              [-159.794189, -18.89333],
              [-159.799164, -18.890282],
              [-159.803345, -18.88],
              [-159.803345, -18.86139],
              [-159.800293, -18.849171],
              [-159.791382, -18.842503],
              [-159.78421, -18.84139],
              [-159.779175, -18.843616],
              [-159.777802, -18.845001],
              [-159.785309, -18.888058],
              [-159.78833, -18.890556]
            ]
          ],
          [
            [
              [-163.16333, -18.089443],
              [-163.169464, -18.091949],
              [-163.172241, -18.08889],
              [-163.170319, -18.079449],
              [-163.15863, -18.05722],
              [-163.154724, -18.056667],
              [-163.152222, -18.06222],
              [-163.153351, -18.06972],
              [-163.157257, -18.080559],
              [-163.16333, -18.089443]
            ]
          ],
          [
            [
              [-165.422241, -11.54833],
              [-165.43222, -11.55195],
              [-165.436401, -11.54917],
              [-165.4375, -11.54222],
              [-165.435028, -11.5375],
              [-165.427826, -11.533611],
              [-165.423096, -11.533335],
              [-165.419464, -11.534166],
              [-165.414185, -11.537781],
              [-165.415039, -11.541945],
              [-165.422241, -11.54833]
            ]
          ],
          [
            [
              [-165.82666, -10.88833],
              [-165.841675, -10.89084],
              [-165.848602, -10.890556],
              [-165.850281, -10.88417],
              [-165.84726, -10.88111],
              [-165.831146, -10.87694],
              [-165.826935, -10.87778],
              [-165.825867, -10.882221],
              [-165.82666, -10.88833]
            ]
          ],
          [
            [
              [-161.022827, -10.431391],
              [-161.026123, -10.432503],
              [-161.031708, -10.429724],
              [-161.043335, -10.41972],
              [-161.046661, -10.41472],
              [-161.051147, -10.40361],
              [-161.051697, -10.39695],
              [-161.048615, -10.392778],
              [-161.042511, -10.395],
              [-161.023071, -10.423058],
              [-161.021149, -10.428059],
              [-161.022827, -10.431391]
            ]
          ],
          [
            [
              [-160.975586, -10.395555],
              [-160.978333, -10.396389],
              [-160.98114, -10.396112],
              [-160.993347, -10.385557],
              [-161.012512, -10.35556],
              [-161.012512, -10.352777],
              [-161.001404, -10.355833],
              [-160.987762, -10.365833],
              [-160.979736, -10.37222],
              [-160.973602, -10.37806],
              [-160.97168, -10.386948],
              [-160.973358, -10.393614],
              [-160.975586, -10.395555]
            ]
          ],
          [
            [
              [-161.084442, -10.04194],
              [-161.088593, -10.045835],
              [-161.093323, -10.04361],
              [-161.09613, -10.036669],
              [-161.090576, -10.01833],
              [-161.082764, -10.010281],
              [-161.078369, -10.006947],
              [-161.072266, -10.008059],
              [-161.072266, -10.01195],
              [-161.074432, -10.018059],
              [-161.084442, -10.04194]
            ]
          ],
          [
            [
              [-157.941681, -8.982502],
              [-157.946686, -8.985279],
              [-157.962494, -8.984999],
              [-157.97226, -8.981943],
              [-157.991943, -8.97139],
              [-158.00589, -8.96083],
              [-158.009766, -8.95667],
              [-158.008362, -8.951389],
              [-158.003387, -8.948057],
              [-157.996399, -8.95],
              [-157.943054, -8.975834],
              [-157.940308, -8.97972],
              [-157.941681, -8.982502]
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
