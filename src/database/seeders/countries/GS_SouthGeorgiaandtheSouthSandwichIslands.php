<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GS_SouthGeorgiaandtheSouthSandwichIslands extends CountrySeeder
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
    public $region = 'oceania';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'South Georgia and the South Sandwich Islands';

        // Set the country's official name
        $this->official_name = 'South Georgia and the South Sandwich Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GS';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'SGS';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '239';

        // Set the international dialing code
        $this->international_phone = '500';

        // Define the languages spoken in the territory
        $this->languages = ['en']; // English is the de facto language

        // Define the top-level domain(s)
        $this->tld = ['.gs'];

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
        $this->wmo = 'GS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3474415';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Pound sterling',
            // Currency code
            'code' => 'GBP',
            // Currency symbol
            'symbol' => '£',
            // Main unit
            'main_unit' => 'pound',
            // Subunit
            'sub_unit' => 'penny',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1p', '2p', '5p', '10p', '20p', '50p'],
        ];

        // Set the population (no permanent residents)
        $this->population = 30; // Temporary staff and scientists

        // Set the area in square kilometers
        $this->area = 3903; // km²

        // Set the capital city (administrative center)
        $this->capital = 'King Edward Point';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Atlantic/South_Georgia',
                // Standard time offset
                'standard_time' => 'UTC-2',
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
            'img' => '🇬🇸',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1F8',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1F8;',
            // CSS entities
            'css' => '\\1F1EC\\1F1F8',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127480;',
            // Direct UTF-8 string
            'utf8' => '🇬🇸',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDF8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gs:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1F8;',
        ];

        // Define the colors of the territory's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'navy',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '224,100%,24%',
                // HSV color values
                'hsv' => '224,100%,49%',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-54.4296',
            // Longitude in decimal degrees
            'longitude' => '-36.5879',
            // Degrees with decimal
            'dd' => '54.4296° S, 36.5879° W',
            // Degrees, minutes, seconds
            'dms' => '54°25\'46.56" S, 36°35\'16.44" W',
            // Degrees and decimal minutes
            'dm' => '54°25.776\' S, 36°35.274\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"gs"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-27.32584,-59.427223],[-27.298058,-59.47306],[-27.33,-59.47056],[-27.34417,-59.46889],[-27.367226,-59.460281],[-27.374725,-59.45723],[-27.401947,-59.44334],[-27.408337,-59.43973],[-27.412502,-59.43445],[-27.410004,-59.429169],[-27.40278,-59.426117],[-27.37917,-59.42278],[-27.36584,-59.42195],[-27.3325,-59.42361],[-27.32584,-59.427223]]],[[[-26.582779,-59.07001],[-26.59222,-59.07001],[-26.621391,-59.0675],[-26.628891,-59.06473],[-26.63556,-59.06111],[-26.664448,-59.03223],[-26.665001,-59.02584],[-26.660835,-59.02139],[-26.64667,-59.014725],[-26.60389,-59.00084],[-26.595,-58.998062],[-26.585556,-58.998062],[-26.53472,-59.01973],[-26.50639,-59.0325],[-26.501114,-59.03695],[-26.5025,-59.04139],[-26.50778,-59.04528],[-26.53639,-59.058617],[-26.572781,-59.06778],[-26.582779,-59.07001]]],[[[-26.246391,-58.407501],[-26.24139,-58.471672],[-26.243614,-58.49473],[-26.24889,-58.49861],[-26.26417,-58.48806],[-26.286667,-58.47973],[-26.29528,-58.477501],[-26.37167,-58.463058],[-26.389725,-58.459724],[-26.401669,-58.460007],[-26.41139,-58.45889],[-26.42,-58.456673],[-26.45723,-58.43417],[-26.45917,-58.42722],[-26.43361,-58.38917],[-26.41667,-58.38361],[-26.40389,-58.38251],[-26.393059,-58.38278],[-26.31778,-58.38639],[-26.29639,-58.3875],[-26.286667,-58.388618],[-26.269447,-58.392784],[-26.261948,-58.395561],[-26.24695,-58.40139],[-26.246391,-58.407501]]],[[[-26.41278,-57.80806],[-26.426392,-57.81889],[-26.446667,-57.816948],[-26.49917,-57.79778],[-26.504448,-57.793335],[-26.512222,-57.77112],[-26.50833,-57.76667],[-26.469448,-57.73972],[-26.460281,-57.73972],[-26.44334,-57.743896],[-26.437225,-57.7475],[-26.39,-57.78861],[-26.41278,-57.80806]]],[[[-26.660835,-57.08639],[-26.68611,-57.08861],[-26.72389,-57.067223],[-26.72889,-57.06278],[-26.71722,-57.04945],[-26.709446,-57.050285],[-26.675835,-57.056396],[-26.664448,-57.06444],[-26.65556,-57.07417],[-26.65139,-57.079445],[-26.654446,-57.0825],[-26.660835,-57.08639]]],[[[-27.10861,-56.717506],[-27.162781,-56.72723],[-27.17861,-56.724449],[-27.20528,-56.71973],[-27.21083,-56.71722],[-27.210556,-56.69917],[-27.209724,-56.69361],[-27.204445,-56.689728],[-27.17028,-56.67945],[-27.159168,-56.67917],[-27.13834,-56.68084],[-27.12945,-56.682228],[-27.113056,-56.68667],[-27.09889,-56.692223],[-27.09167,-56.69528],[-27.08889,-56.70112],[-27.08972,-56.70695],[-27.09917,-56.71528],[-27.10861,-56.717506]]],[[[-27.563892,-56.320557],[-27.572224,-56.32167],[-27.579445,-56.318893],[-27.583889,-56.315834],[-27.60528,-56.300835],[-27.60611,-56.29667],[-27.602501,-56.28612],[-27.600002,-56.281113],[-27.595,-56.27723],[-27.577225,-56.273613],[-27.5675,-56.27167],[-27.55556,-56.27056],[-27.54945,-56.27417],[-27.540836,-56.28389],[-27.539448,-56.294174],[-27.55194,-56.31334],[-27.563892,-56.320557]]],[[[-37.038612,-54.51167],[-37.065834,-54.5164],[-37.076393,-54.515556],[-37.083618,-54.512779],[-37.105835,-54.48889],[-37.10806,-54.476669],[-37.105835,-54.471115],[-37.07751,-54.46695],[-37.068062,-54.468338],[-37.06111,-54.471115],[-37.04333,-54.481392],[-37.032784,-54.48889],[-37.023338,-54.49722],[-37.01973,-54.50194],[-37.021118,-54.50667],[-37.038612,-54.51167]]],[[[-37.495003,-54.01056],[-37.46139,-54.03612],[-37.373894,-54.04806],[-37.270279,-54.050285],[-37.16278,-54.03139],[-37.027779,-54.05611],[-36.80945,-54.088341],[-36.65639,-54.10778],[-36.626114,-54.118614],[-36.621391,-54.12278],[-36.58417,-54.20889],[-36.66,-54.240005],[-36.67278,-54.246117],[-36.677505,-54.25028],[-36.671394,-54.27278],[-36.65389,-54.277504],[-36.62667,-54.283615],[-36.60695,-54.26778],[-36.60111,-54.26445],[-36.56028,-54.24695],[-36.55334,-54.244171],[-36.523056,-54.23445],[-36.511116,-54.23445],[-36.48528,-54.23584],[-36.4725,-54.24195],[-36.47,-54.247223],[-36.46973,-54.2664],[-36.473061,-54.27139],[-36.47778,-54.27556],[-36.456116,-54.32751],[-36.370003,-54.355003],[-36.346115,-54.361671],[-36.335838,-54.354172],[-36.33223,-54.34945],[-36.3325,-54.34389],[-36.35556,-54.29945],[-36.36861,-54.286667],[-36.373337,-54.282501],[-36.381668,-54.28056],[-36.38862,-54.27778],[-36.39111,-54.27222],[-36.397507,-54.251114],[-36.397507,-54.24695],[-36.38667,-54.247505],[-36.29528,-54.26362],[-36.288063,-54.2664],[-36.28223,-54.26973],[-36.257225,-54.286667],[-36.229172,-54.33778],[-36.25333,-54.36056],[-36.258057,-54.364723],[-36.257782,-54.37167],[-36.25528,-54.37694],[-36.16,-54.444725],[-36.09862,-54.547226],[-36.095,-54.55195],[-36.06861,-54.57084],[-36.05917,-54.57223],[-35.979729,-54.5789],[-35.93472,-54.623062],[-35.9375,-54.69584],[-35.93028,-54.705284],[-35.92028,-54.71334],[-35.91445,-54.716949],[-35.85667,-54.743057],[-35.82806,-54.75084],[-35.811394,-54.755],[-35.79472,-54.7589],[-35.78722,-54.761391],[-35.7825,-54.765556],[-35.827782,-54.792778],[-35.90945,-54.81334],[-35.918892,-54.813614],[-35.95945,-54.81111],[-35.979729,-54.80917],[-35.994171,-54.803894],[-36.007225,-54.79778],[-36.025284,-54.787781],[-36.04584,-54.77889],[-36.074722,-54.76806],[-36.09,-54.763618],[-36.09972,-54.763618],[-36.10306,-54.76833],[-36.100563,-54.77389],[-36.09584,-54.77806],[-36.08362,-54.784729],[-36.021118,-54.817223],[-35.989723,-54.830559],[-35.97917,-54.83112],[-35.968613,-54.83028],[-35.957779,-54.83112],[-35.95167,-54.83417],[-35.92639,-54.84723],[-35.92139,-54.85111],[-35.92028,-54.85612],[-35.96139,-54.86945],[-36.076393,-54.890282],[-36.09778,-54.890282],[-36.107506,-54.88917],[-36.115837,-54.88722],[-36.12806,-54.88028],[-36.131668,-54.87556],[-36.132782,-54.86945],[-36.13334,-54.85028],[-36.19611,-54.81084],[-36.202225,-54.807503],[-36.297501,-54.73334],[-36.302505,-54.713058],[-36.31722,-54.686951],[-36.468613,-54.52889],[-36.51973,-54.49834],[-36.526947,-54.49556],[-36.53722,-54.496117],[-36.57751,-54.499168],[-36.58694,-54.50056],[-36.655556,-54.49111],[-36.73695,-54.470284],[-36.808891,-54.449722],[-36.811394,-54.444168],[-36.810005,-54.438057],[-36.800835,-54.416115],[-36.800835,-54.409447],[-36.80195,-54.403061],[-36.85861,-54.34972],[-36.863617,-54.34584],[-36.878891,-54.34084],[-36.92001,-54.3375],[-36.93056,-54.33834],[-36.99139,-54.350563],[-36.99972,-54.34862],[-37.05945,-54.33],[-37.08083,-54.321945],[-37.08667,-54.31834],[-37.08667,-54.31306],[-37.07973,-54.30334],[-37.078339,-54.29723],[-37.08083,-54.291672],[-37.090004,-54.28334],[-37.14612,-54.261391],[-37.23667,-54.24778],[-37.24695,-54.24695],[-37.253059,-54.25028],[-37.2625,-54.257225],[-37.267227,-54.261391],[-37.28223,-54.26611],[-37.365837,-54.27195],[-37.404167,-54.26973],[-37.41139,-54.26833],[-37.413612,-54.25194],[-37.406952,-54.186394],[-37.4,-54.183617],[-37.367226,-54.17556],[-37.335556,-54.17361],[-37.26417,-54.160561],[-37.25,-54.15528],[-37.23945,-54.14778],[-37.254723,-54.14556],[-37.484726,-54.129173],[-37.495003,-54.129723],[-37.552505,-54.136948],[-37.56195,-54.13917],[-37.56778,-54.1425],[-37.569168,-54.147224],[-37.56806,-54.151947],[-37.562225,-54.155556],[-37.55528,-54.15834],[-37.529449,-54.162506],[-37.562225,-54.170563],[-37.58,-54.173889],[-37.59889,-54.176674],[-37.64584,-54.181671],[-37.655006,-54.181671],[-37.68195,-54.176674],[-37.68861,-54.173889],[-37.71751,-54.143059],[-37.72084,-54.138062],[-37.720284,-54.097778],[-37.717781,-54.09222],[-37.711945,-54.08889],[-37.676392,-54.074722],[-37.668335,-54.07278],[-37.65806,-54.07362],[-37.647507,-54.07278],[-37.6414,-54.06945],[-37.621391,-54.052505],[-37.61667,-54.04834],[-37.616394,-54.042778],[-37.624725,-54.04084],[-37.69222,-54.035],[-37.897781,-54.047226],[-38.009727,-54.057228],[-38.018059,-54.05917],[-38.02945,-54.053612],[-38.03306,-54.048889],[-38.02862,-54.00973],[-38.02251,-54.00639],[-38.015282,-54.00389],[-37.933617,-53.992226],[-37.910278,-53.989723],[-37.747223,-53.995003],[-37.495003,-54.01056]]]]}}]}';
    }
}
