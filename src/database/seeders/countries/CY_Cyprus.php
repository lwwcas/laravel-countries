<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class CY_Cyprus extends CountrySeeder
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
        $this->name = 'Cyprus';

        // Set the country's official name
        $this->official_name = 'Republic of Cyprus';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'CY';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'CYP';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '196';

        // Set the international dialing code
        $this->international_phone = '357';

        // Define the languages spoken in the country
        $this->languages = ['el', 'tr']; // Greek and Turkish are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.cy'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '100 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '45 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '95%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Cyprus Computer Emergency Response Team (CY-CERT)';

        // List popular web technologies in Cyprus
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Python', 'React'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'CY';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '146669';

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
        $this->population = 1207359; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 9251; // km²

        // Set the capital city
        $this->capital = 'Nicosia';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Nicosia',
                // Standard time offset
                'standard_time' => 'UTC+2', // Eastern European Time (EET)
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+3', // Eastern European Summer Time (EEST)
            ],
        ];

        // Set the independence day
        $this->independence_day = '1960-10-01'; // Date of independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'World Trade Organization (WTO)',
            'European Union (EU)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Commonwealth of Nations',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 25.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Greek Orthodox Church)',
            'Islam',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential representative republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football (soccer) is the most popular sport

        // Define bordering countries
        $this->borders = []; // Cyprus is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇨🇾',
            // Unicode code points
            'uCode' => 'U+1F1E8 U+1F1FE',
            // HTML entities
            'html' => '&#x1F1E8;&#x1F1FE;',
            // CSS entities
            'css' => '\\1F1E8\\1F1FE',
            // Decimal Unicode entities
            'decimal' => '&#127464;&#127486;',
            // Direct UTF-8 string
            'utf8' => '🇨🇾',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE8\uD83C\uDDFE',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-cy:',
            // Hexadecimal entity
            'hex' => '&#x1F1E8;&#x1F1FE;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'name' => 'Copper Orange',
                // Web color name
                'web_name' => 'orange',
                // Hexadecimal color code
                'hex' => '#D57800',
                // RGB color values
                'rgb' => '213,120,0',
                // CMYK color values
                'cmyk' => '0,44,100,16',
                // HSL color values
                'hsl' => '31,100%,42%',
                // HSV color values
                'hsv' => '31,100%,83%',
                // Pantone color code
                'pantone' => '144 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A33',
                // RGB color values
                'rgb' => '0,122,51',
                // CMYK color values
                'cmyk' => '100,0,58,52',
                // HSL color values
                'hsl' => '148,100%,24%',
                // HSV color values
                'hsv' => '148,100%,48%',
                // Pantone color code
                'pantone' => 'Pantone 356 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '35.1264',
            // Longitude in decimal degrees
            'longitude' => '33.4299',
            // Degrees with decimal
            'dd' => '35.1264° N, 33.4299° E',
            // Degrees, minutes, seconds
            'dms' => '35°7\'35.04" N, 33°25\'47.64" E',
            // Degrees and decimal minutes
            'dm' => '35°7.584\' N, 33°25.794\' E',
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
      "properties": { "cca2": "cy" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [33.652618, 35.354103],
            [33.713051, 35.381943],
            [33.749161, 35.397217],
            [33.756943, 35.399719],
            [33.774994, 35.402222],
            [33.80722, 35.400276],
            [33.853607, 35.403053],
            [33.871109, 35.406387],
            [33.969719, 35.436104],
            [34.292221, 35.566666],
            [34.314163, 35.575554],
            [34.336662, 35.589439],
            [34.342499, 35.599159],
            [34.349998, 35.606941],
            [34.360275, 35.611938],
            [34.389442, 35.623886],
            [34.549438, 35.680832],
            [34.556938, 35.683327],
            [34.581665, 35.688606],
            [34.590271, 35.690277],
            [34.590553, 35.686943],
            [34.569717, 35.643608],
            [34.386665, 35.535271],
            [34.28083, 35.476944],
            [34.259438, 35.467499],
            [34.225273, 35.455551],
            [34.119995, 35.400833],
            [33.958054, 35.312775],
            [33.948326, 35.30722],
            [33.940552, 35.299438],
            [33.921387, 35.272774],
            [33.910553, 35.253052],
            [33.90583, 35.242218],
            [33.901939, 35.215828],
            [33.900276, 35.198051],
            [33.901665, 35.164444],
            [33.902496, 35.161659],
            [33.973885, 35.088051],
            [34.030548, 35.046387],
            [34.035553, 35.041382],
            [34.054443, 35.020554],
            [34.067215, 35.003883],
            [34.077217, 34.989998],
            [34.079163, 34.986938],
            [34.087219, 34.963882],
            [34.083328, 34.959442],
            [34.067215, 34.960274],
            [34.062775, 34.961662],
            [34.034721, 34.971939],
            [34.026108, 34.978607],
            [34.02166, 34.979996],
            [33.976944, 34.981384],
            [33.955826, 34.97805],
            [33.929443, 34.97361],
            [33.91333, 34.969444],
            [33.903053, 34.964165],
            [33.899162, 34.959717],
            [33.896385, 34.955551],
            [33.885277, 34.946106],
            [33.882217, 34.94416],
            [33.86805, 34.937775],
            [33.864166, 34.936661],
            [33.858887, 34.936661],
            [33.848328, 34.942497],
            [33.834717, 34.954163],
            [33.830276, 34.959442],
            [33.814438, 34.965828],
            [33.790276, 34.970276],
            [33.763054, 34.972771],
            [33.709999, 34.974159],
            [33.705276, 34.97361],
            [33.685272, 34.968048],
            [33.677498, 34.965553],
            [33.667496, 34.960274],
            [33.661942, 34.955551],
            [33.649719, 34.942215],
            [33.646111, 34.935555],
            [33.640549, 34.92083],
            [33.638611, 34.912773],
            [33.636108, 34.899994],
            [33.632774, 34.873886],
            [33.637772, 34.864998],
            [33.638054, 34.860832],
            [33.636108, 34.857773],
            [33.606667, 34.820274],
            [33.599998, 34.816666],
            [33.516388, 34.783607],
            [33.372772, 34.727776],
            [33.365273, 34.725273],
            [33.326385, 34.71611],
            [33.317215, 34.714722],
            [33.272293, 34.709549],
            [33.217216, 34.69944],
            [33.153053, 34.702499],
            [33.133606, 34.70166],
            [33.116943, 34.698608],
            [33.104996, 34.695274],
            [33.066666, 34.68222],
            [33.059715, 34.679161],
            [33.029999, 34.657776],
            [33.007023, 34.632397],
            [33.007023, 34.595886],
            [33.030838, 34.56255],
            [32.981625, 34.572071],
            [32.941936, 34.56255],
            [32.941936, 34.594299],
            [32.918125, 34.629223],
            [32.899075, 34.651447],
            [32.859444, 34.666107],
            [32.831108, 34.667496],
            [32.769165, 34.656944],
            [32.761108, 34.654716],
            [32.751663, 34.648888],
            [32.744438, 34.645828],
            [32.739998, 34.644997],
            [32.713882, 34.640274],
            [32.698326, 34.64222],
            [32.654716, 34.65361],
            [32.641663, 34.657219],
            [32.491943, 34.702217],
            [32.471107, 34.713051],
            [32.407494, 34.748886],
            [32.40416, 34.750832],
            [32.342773, 34.859993],
            [32.339996, 34.866661],
            [32.323326, 34.909439],
            [32.276382, 35.036942],
            [32.274162, 35.043884],
            [32.270271, 35.062492],
            [32.269165, 35.07444],
            [32.270554, 35.083328],
            [32.275276, 35.093605],
            [32.281944, 35.097221],
            [32.291939, 35.096664],
            [32.298332, 35.092499],
            [32.304718, 35.08416],
            [32.312492, 35.076942],
            [32.32666, 35.065552],
            [32.341385, 35.054443],
            [32.354164, 35.046387],
            [32.369164, 35.039719],
            [32.373604, 35.038605],
            [32.378609, 35.037773],
            [32.397774, 35.039444],
            [32.419998, 35.043053],
            [32.428055, 35.045273],
            [32.438606, 35.050278],
            [32.460274, 35.064438],
            [32.491661, 35.094162],
            [32.496109, 35.099716],
            [32.501938, 35.109161],
            [32.515831, 35.135826],
            [32.522217, 35.14444],
            [32.549164, 35.173607],
            [32.553604, 35.173332],
            [32.565552, 35.168884],
            [32.622215, 35.184166],
            [32.651382, 35.189163],
            [32.660553, 35.190277],
            [32.721939, 35.180832],
            [32.769722, 35.163887],
            [32.808609, 35.148331],
            [32.820549, 35.143883],
            [32.830551, 35.14222],
            [32.839722, 35.143608],
            [32.85833, 35.150551],
            [32.882774, 35.162216],
            [32.895828, 35.169716],
            [32.901939, 35.174164],
            [32.906944, 35.179443],
            [32.912773, 35.188606],
            [32.916939, 35.199997],
            [32.932098, 35.263626],
            [32.939163, 35.327499],
            [32.922886, 35.35828],
            [32.921299, 35.393208],
            [32.938763, 35.394001],
            [33.002777, 35.365555],
            [33.271942, 35.339722],
            [33.354439, 35.330276],
            [33.369438, 35.328606],
            [33.385277, 35.328331],
            [33.427498, 35.328049],
            [33.468048, 35.328049],
            [33.477219, 35.329163],
            [33.63166, 35.350273],
            [33.652618, 35.354103]
          ]
        ]
      }
    }
  ]
}
';
    }
}
