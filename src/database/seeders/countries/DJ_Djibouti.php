<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class DJ_Djibouti extends CountrySeeder
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
    public ?string $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Djibouti';

        // Set the country's official name
        $this->official_name = 'Republic of Djibouti';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'DJ';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'DJI';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '262';

        // Set the international dialing code
        $this->international_phone = '253';

        // Define the languages spoken in the country
        $this->languages = ['fr', 'ar']; // French and Arabic are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.dj'];

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
        $this->internet_penetration = '21%'; // Percentage of the population with internet access

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agence Nationale de la Sécurité des Systèmes d\'Information (ANSSI)';

        // List popular web technologies in Djibouti
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'DJ';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '223817';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Djiboutian franc',
            // Currency code
            'code' => 'DJF',
            // Currency symbol
            'symbol' => 'Fdj',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['500', '1,000', '2,000', '5,000', '10,000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10', '20', '50', '100'],
            // Subunit coins
            'coins_sub' => ['1 centime', '5 centimes', '10 centimes'],
        ];

        // Set the population
        $this->population = 1078373; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 23200; // km²

        // Set the capital city
        $this->capital = 'Djibouti City';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Djibouti',
                // Standard time offset
                'standard_time' => 'UTC+3', // East Africa Time (EAT)
                // Djibouti does not observe daylight saving time
            ],
        ];

        // Set the independence day
        $this->independence_day = '1977-06-27'; // Date of independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Arab League',
            'Intergovernmental Authority on Development (IGAD)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 3.38; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam (Sunni)',
        ];

        // Describe the form of government
        $this->government = 'Unitary dominant-party presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football (soccer) is the most popular sport

        // Define bordering countries
        $this->borders = [
            ['name' => 'Eritrea', 'iso_alpha_2' => 'ER'],
            ['name' => 'Ethiopia', 'iso_alpha_2' => 'ET'],
            ['name' => 'Somalia', 'iso_alpha_2' => 'SO'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇩🇯',
            // Unicode code points
            'uCode' => 'U+1F1E9 U+1F1EF',
            // HTML entities
            'html' => '&#x1F1E9;&#x1F1EF;',
            // CSS entities
            'css' => '\\1F1E9\\1F1EF',
            // Decimal Unicode entities
            'decimal' => '&#127465;&#127471;',
            // Direct UTF-8 string
            'utf8' => '🇩🇯',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDE9\uD83C\uDDEF',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-dj:',
            // Hexadecimal entity
            'hex' => '&#x1F1E9;&#x1F1EF;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Sky Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00A1DE',
                // RGB color values
                'rgb' => '0,161,222',
                // CMYK color values
                'cmyk' => '100,27,0,13',
                // HSL color values
                'hsl' => '196,100%,44%',
                // HSV color values
                'hsv' => '196,100%,87%',
                // Pantone color code
                'pantone' => '299 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Grass Green',
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
                'hsl' => '0,100%,50%',
                // HSV color values
                'hsv' => '0,100%,100%',
                // Pantone color code
                'pantone' => 'Red 032 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '11.8251',
            // Longitude in decimal degrees
            'longitude' => '42.5903',
            // Degrees with decimal
            'dd' => '11.8251° N, 42.5903° E',
            // Degrees, minutes, seconds
            'dms' => '11°49\'30.36" N, 42°35\'25.08" E',
            // Degrees and decimal minutes
            'dm' => '11°49.506\' N, 42°35.418\' E',
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
      "properties": { "cca2": "dj" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [42.866806, 11.585428],
            [42.873055, 11.582222],
            [42.882774, 11.58111],
            [42.903885, 11.581665],
            [42.947495, 11.585278],
            [43.023964, 11.581244],
            [43.031944, 11.580276],
            [43.119438, 11.57111],
            [43.157219, 11.570833],
            [43.234993, 11.488888],
            [43.249222, 11.469534],
            [43.224998, 11.430832],
            [43.205475, 11.397829],
            [43.186386, 11.370277],
            [43.106201, 11.25],
            [43.064163, 11.186943],
            [42.975555, 11.05361],
            [42.953606, 11.020277],
            [42.944092, 11.002438],
            [42.897217, 10.981667],
            [42.88472, 10.982498],
            [42.814163, 10.987778],
            [42.807777, 10.988888],
            [42.798332, 10.993332],
            [42.78611, 11.002222],
            [42.772774, 11.016388],
            [42.765831, 11.029999],
            [42.762215, 11.046665],
            [42.76194, 11.052776],
            [42.75972, 11.063889],
            [42.755272, 11.073055],
            [42.751938, 11.076666],
            [42.744438, 11.079166],
            [42.646385, 11.096109],
            [42.634438, 11.098055],
            [42.608238, 11.091576],
            [42.501106, 11.06361],
            [42.358887, 11.019165],
            [42.300552, 11.011389],
            [42.178604, 11],
            [42.164719, 11.000555],
            [42.128326, 11],
            [42.122772, 10.998888],
            [42.086105, 10.981943],
            [42.08194, 10.979443],
            [42.078049, 10.97611],
            [42.075272, 10.972221],
            [42.027222, 10.947498],
            [42.012215, 10.941944],
            [41.991943, 10.942221],
            [41.940277, 10.949999],
            [41.918053, 10.953609],
            [41.881943, 10.960833],
            [41.837219, 10.973055],
            [41.808327, 10.985277],
            [41.789719, 11.008055],
            [41.800552, 11.031111],
            [41.80291, 11.098972],
            [41.806664, 11.168333],
            [41.812492, 11.24861],
            [41.811386, 11.267221],
            [41.79583, 11.372221],
            [41.791664, 11.389721],
            [41.75972, 11.505278],
            [41.759995, 11.510555],
            [41.79805, 11.638332],
            [41.828606, 11.74],
            [41.829437, 11.741943],
            [41.891388, 11.773611],
            [41.948608, 11.816666],
            [42.025078, 11.926363],
            [42.058609, 11.975832],
            [42.12722, 12.090277],
            [42.168884, 12.13722],
            [42.255554, 12.263332],
            [42.292221, 12.293888],
            [42.308327, 12.308332],
            [42.325554, 12.359165],
            [42.339439, 12.396944],
            [42.366104, 12.430277],
            [42.399719, 12.469721],
            [42.456108, 12.529165],
            [42.48481, 12.521847],
            [42.501389, 12.516666],
            [42.535828, 12.504166],
            [42.586937, 12.468887],
            [42.589722, 12.466665],
            [42.620277, 12.430832],
            [42.649162, 12.398611],
            [42.698608, 12.363888],
            [42.747772, 12.386389],
            [42.751938, 12.388887],
            [42.808884, 12.429722],
            [42.816109, 12.43611],
            [42.81916, 12.440277],
            [42.821663, 12.444721],
            [42.822495, 12.451111],
            [42.82222, 12.455832],
            [42.813889, 12.474722],
            [42.808609, 12.483332],
            [42.805832, 12.49361],
            [42.805275, 12.5],
            [42.805832, 12.513611],
            [42.806389, 12.520555],
            [42.808052, 12.525833],
            [42.821938, 12.539721],
            [42.929718, 12.623888],
            [43.121384, 12.708332],
            [43.148048, 12.662777],
            [43.153328, 12.654165],
            [43.176666, 12.622221],
            [43.182777, 12.614443],
            [43.207497, 12.584444],
            [43.287773, 12.49361],
            [43.31694, 12.48111],
            [43.327496, 12.476728],
            [43.328331, 12.438889],
            [43.330826, 12.428888],
            [43.374161, 12.284721],
            [43.383888, 12.266943],
            [43.39222, 12.26111],
            [43.405548, 12.247499],
            [43.409996, 12.238333],
            [43.412498, 12.226387],
            [43.419998, 12.144999],
            [43.42083, 12.1325],
            [43.415833, 12.069166],
            [43.413887, 12.056944],
            [43.404442, 12.038887],
            [43.378906, 12],
            [43.376389, 11.996666],
            [43.369164, 11.99],
            [43.359161, 11.986387],
            [43.298332, 11.966944],
            [43.286942, 11.964167],
            [43.251663, 11.958611],
            [43.224716, 11.958611],
            [43.212776, 11.956944],
            [43.199165, 11.951944],
            [43.18972, 11.944166],
            [43.142494, 11.896666],
            [43.104721, 11.853333],
            [43.052216, 11.801388],
            [43.043053, 11.798887],
            [43.023888, 11.794167],
            [43.013054, 11.792776],
            [42.982773, 11.794754],
            [42.883606, 11.774166],
            [42.822777, 11.753332],
            [42.784996, 11.740276],
            [42.774719, 11.733889],
            [42.765274, 11.725277],
            [42.716385, 11.652222],
            [42.696388, 11.614443],
            [42.686661, 11.584721],
            [42.684998, 11.575832],
            [42.681107, 11.566944],
            [42.66861, 11.557777],
            [42.62722, 11.544443],
            [42.561386, 11.563889],
            [42.553886, 11.57361],
            [42.544441, 11.580276],
            [42.534721, 11.581388],
            [42.525551, 11.58111],
            [42.515549, 11.577499],
            [42.508606, 11.567221],
            [42.532654, 11.547274],
            [42.528885, 11.516943],
            [42.534164, 11.506943],
            [42.590271, 11.470833],
            [42.599998, 11.466389],
            [42.623886, 11.466665],
            [42.676941, 11.476944],
            [42.685829, 11.485554],
            [42.686943, 11.494999],
            [42.682495, 11.504166],
            [42.673332, 11.508055],
            [42.664444, 11.509722],
            [42.663055, 11.527777],
            [42.685272, 11.538055],
            [42.696106, 11.542221],
            [42.72805, 11.551109],
            [42.828331, 11.577221],
            [42.866806, 11.585428]
          ]
        ]
      }
    }
  ]
}
';
    }
}
