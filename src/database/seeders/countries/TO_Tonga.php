<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TO_Tonga extends CountrySeeder
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
        $this->name = 'Tonga';

        // Set the country's official name
        $this->official_name = 'Kingdom of Tonga';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'TO';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'TON';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '776';

        // Set the international dialing code
        $this->international_phone = '676';

        // Define the languages spoken in the country
        $this->languages = ['to', 'en']; // Tongan and English are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.to'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '7 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '50%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Ministry of Communications of Tonga';

        // List popular web technologies in Tonga
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'TO';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4032283';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Tongan paʻanga',
            // Currency code
            'code' => 'TOP',
            // Currency symbol
            'symbol' => 'T$',
            // Main unit
            'main_unit' => 'paʻanga',
            // Subunit
            'sub_unit' => 'seniti',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['2', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 105697; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 747; // km²

        // Set the capital city
        $this->capital = 'Nukuʻalofa';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Tongatapu',
                // Standard time offset
                'standard_time' => 'UTC+13',
                // Daylight saving time observed during summer
                'daylight_saving_time' => 'UTC+14',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1970-06-04'; // Independence from British protectorate status

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum (PIF)',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.49; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Free Wesleyan Church of Tonga)',
        ];

        // Describe the form of government
        $this->government = 'Constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Rugby'; // Rugby is the most popular sport in Tonga

        // Define bordering countries
        $this->borders = []; // Tonga is an island nation with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇹🇴',
            // Unicode code points
            'uCode' => 'U+1F1F9 U+1F1F4',
            // HTML entities
            'html' => '&#x1F1F9;&#x1F1F4;',
            // CSS entities
            'css' => '\\1F1F9\\1F1F4',
            // Decimal Unicode entities
            'decimal' => '&#127481;&#127476;',
            // Direct UTF-8 string
            'utf8' => '🇹🇴',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF9\uD83C\uDDF4',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-to:',
            // Hexadecimal entity
            'hex' => '&#x1F1F9;&#x1F1F4;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#C8102E',
                // RGB color values
                'rgb' => '200,16,46',
                // CMYK color values
                'cmyk' => '0,100,77,13',
                // HSL color values
                'hsl' => '350°,86%,42%',
                // HSV color values
                'hsv' => '350°,92%,78%',
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
            'latitude' => '-21.1789',
            // Longitude in decimal degrees
            'longitude' => '-175.1982',
            // Degrees with decimal
            'dd' => '21.1789° S, 175.1982° W',
            // Degrees, minutes, seconds
            'dms' => '21°10\'44.04" S, 175°11\'53.52" W',
            // Degrees and decimal minutes
            'dm' => '21°10.734\' S, 175°11.892\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"to"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-174.910858,-21.42667],[-174.917267,-21.45417],[-174.924469,-21.452225],[-174.933929,-21.44611],[-174.96582,-21.417778],[-174.973602,-21.39139],[-174.974701,-21.365833],[-174.973907,-21.358894],[-174.970551,-21.35389],[-174.935272,-21.324722],[-174.911438,-21.30611],[-174.910858,-21.42667]]],[[[-175.145844,-21.17806],[-175.141693,-21.17862],[-175.13504,-21.173058],[-175.131958,-21.16305],[-175.131958,-21.15528],[-175.129456,-21.144726],[-175.123322,-21.135],[-175.119476,-21.1325],[-175.107239,-21.128059],[-175.093628,-21.125],[-175.07309,-21.12417],[-175.066986,-21.124725],[-175.060822,-21.127228],[-175.050293,-21.134445],[-175.047241,-21.13944],[-175.045563,-21.14583],[-175.046417,-21.1525],[-175.051697,-21.161671],[-175.118042,-21.26028],[-175.123627,-21.263889],[-175.13504,-21.26778],[-175.145294,-21.26806],[-175.186401,-21.252785],[-175.314453,-21.18],[-175.323639,-21.17444],[-175.336426,-21.161671],[-175.35141,-21.14333],[-175.356934,-21.133888],[-175.358032,-21.12944],[-175.360535,-21.1025],[-175.359467,-21.099171],[-175.35498,-21.09139],[-175.35141,-21.086117],[-175.343079,-21.07667],[-175.339172,-21.073055],[-175.316101,-21.06473],[-175.3125,-21.06362],[-175.305298,-21.065002],[-175.301941,-21.068058],[-175.302246,-21.071388],[-175.304749,-21.07445],[-175.276672,-21.125],[-175.152222,-21.175556],[-175.145844,-21.17806]]],[[[-174.760834,-20.27639],[-174.767548,-20.278057],[-174.777527,-20.275558],[-174.785309,-20.27167],[-174.78833,-20.2664],[-174.795868,-20.24528],[-174.795319,-20.238609],[-174.791962,-20.23472],[-174.786438,-20.23167],[-174.779175,-20.230831],[-174.765564,-20.23472],[-174.76004,-20.23722],[-174.756683,-20.242496],[-174.756134,-20.264446],[-174.758362,-20.272507],[-174.760834,-20.27639]]],[[[-174.41394,-19.926666],[-174.41864,-19.928333],[-174.422791,-19.927776],[-174.42392,-19.91472],[-174.422546,-19.910004],[-174.420013,-19.90556],[-174.405273,-19.888058],[-174.401123,-19.88361],[-174.395844,-19.880554],[-174.390869,-19.881668],[-174.387512,-19.88695],[-174.386719,-19.89389],[-174.388947,-19.90056],[-174.392792,-19.905003],[-174.41394,-19.926666]]],[[[-174.318604,-19.82194],[-174.327484,-19.825279],[-174.333313,-19.82472],[-174.348053,-19.81861],[-174.353088,-19.81556],[-174.35498,-19.811951],[-174.354431,-19.80639],[-174.325867,-19.76833],[-174.32254,-19.764446],[-174.315857,-19.76417],[-174.309723,-19.766949],[-174.306427,-19.77195],[-174.311707,-19.811394],[-174.314453,-19.81723],[-174.318604,-19.82194]]],[[[-175.056671,-19.800838],[-175.063324,-19.800838],[-175.069733,-19.79889],[-175.07724,-19.79361],[-175.080933,-19.789352],[-175.083893,-19.78612],[-175.085541,-19.7825],[-175.0914,-19.76806],[-175.098602,-19.749725],[-175.097809,-19.74139],[-175.090271,-19.711948],[-175.086945,-19.708057],[-175.081696,-19.70639],[-175.078369,-19.708057],[-175.058929,-19.71806],[-175.054749,-19.721947],[-175.050293,-19.728336],[-175.043884,-19.75917],[-175.042511,-19.78139],[-175.042267,-19.787502],[-175.044189,-19.792229],[-175.047546,-19.79611],[-175.051392,-19.799171],[-175.056671,-19.800838]]],[[[-174.272522,-19.752785],[-174.279175,-19.753616],[-174.292816,-19.751118],[-174.299164,-19.74861],[-174.304749,-19.74472],[-174.30722,-19.740833],[-174.305298,-19.736942],[-174.261719,-19.69111],[-174.256134,-19.688053],[-174.250854,-19.692226],[-174.247528,-19.697224],[-174.249176,-19.70723],[-174.263062,-19.74472],[-174.266449,-19.75],[-174.272522,-19.752785]]],[[[-175.018341,-19.691387],[-175.021149,-19.692497],[-175.025574,-19.69194],[-175.032043,-19.68877],[-175.033936,-19.686668],[-175.035004,-19.68361],[-175.036133,-19.67944],[-175.035858,-19.67667],[-175.031403,-19.66806],[-175.02533,-19.659721],[-175.01889,-19.654167],[-175.015015,-19.65167],[-175.01059,-19.65139],[-175.005585,-19.6525],[-175.003082,-19.656944],[-175.002838,-19.660278],[-175.003937,-19.66445],[-175.013947,-19.685558],[-175.018341,-19.691387]]],[[[-174.244476,-19.656113],[-174.250336,-19.65723],[-174.260834,-19.651943],[-174.273926,-19.64333],[-174.281952,-19.634445],[-174.290588,-19.61861],[-174.293884,-19.607227],[-174.293884,-19.60111],[-174.291962,-19.59444],[-174.286438,-19.59139],[-174.280029,-19.59278],[-174.241699,-19.642776],[-174.239197,-19.64695],[-174.238892,-19.651115],[-174.24057,-19.654449],[-174.244476,-19.656113]]],[[[-174.646973,-18.83028],[-174.653656,-18.83028],[-174.666962,-18.825832],[-174.673096,-18.81278],[-174.675049,-18.80445],[-174.674164,-18.79417],[-174.670868,-18.790279],[-174.665283,-18.787228],[-174.655609,-18.78389],[-174.64978,-18.78306],[-174.645599,-18.785561],[-174.62442,-18.806667],[-174.623077,-18.80944],[-174.62442,-18.814167],[-174.63031,-18.82334],[-174.638611,-18.8275],[-174.646973,-18.83028]]],[[[-174.061401,-18.704723],[-174.06665,-18.70639],[-174.090271,-18.703056],[-174.09613,-18.70111],[-174.097809,-18.696388],[-174.094177,-18.69111],[-174.085846,-18.68417],[-174.079712,-18.681393],[-174.073639,-18.68111],[-174.068909,-18.68222],[-174.065552,-18.687225],[-174.061707,-18.69861],[-174.061401,-18.704723]]],[[[-174.019745,-18.71722],[-174.0242,-18.71972],[-174.033356,-18.715553],[-174.03476,-18.713886],[-174.044464,-18.6875],[-174.045013,-18.683609],[-174.043335,-18.68084],[-174.041138,-18.68028],[-174.037537,-18.68084],[-174.029724,-18.68417],[-174.019196,-18.694447],[-174.015015,-18.705276],[-174.016449,-18.711948],[-174.019745,-18.71722]]],[[[-174.089722,-18.67417],[-174.123871,-18.70445],[-174.128052,-18.70333],[-174.128357,-18.697224],[-174.127808,-18.69028],[-174.126373,-18.68278],[-174.123627,-18.6775],[-174.115814,-18.67139],[-174.105835,-18.666664],[-174.091095,-18.66389],[-174.085297,-18.66555],[-174.0867,-18.67028],[-174.089722,-18.67417]]],[[[-173.910553,-18.63806],[-173.986969,-18.68417],[-174.054443,-18.66972],[-174.061951,-18.66222],[-174.064209,-18.65639],[-174.070038,-18.63944],[-174.070587,-18.6325],[-174.068054,-18.626392],[-174.0625,-18.62361],[-174.05722,-18.621117],[-174.049469,-18.621117],[-174.041382,-18.621117],[-174.033356,-18.621117],[-174.027222,-18.618893],[-174.023376,-18.61445],[-174.017242,-18.60305],[-174.013062,-18.58972],[-174.005585,-18.58001],[-174.000854,-18.57639],[-173.995544,-18.57334],[-173.989441,-18.571117],[-173.967529,-18.56806],[-173.939209,-18.568893],[-173.935577,-18.57083],[-173.931671,-18.575279],[-173.916687,-18.599728],[-173.907501,-18.62056],[-173.906158,-18.62694],[-173.907257,-18.63306],[-173.910553,-18.63806]]],[[[-175.644745,-15.629168],[-175.654724,-15.63028],[-175.665833,-15.62722],[-175.670013,-15.624166],[-175.679199,-15.615002],[-175.6828,-15.60778],[-175.684723,-15.59361],[-175.683929,-15.589724],[-175.67807,-15.576389],[-175.671661,-15.56861],[-175.667816,-15.56611],[-175.627228,-15.56028],[-175.621399,-15.560835],[-175.616669,-15.56333],[-175.608917,-15.57083],[-175.607239,-15.585],[-175.609467,-15.60055],[-175.611969,-15.60444],[-175.636414,-15.625],[-175.644745,-15.629168]]]]}}]}';
    }
}
