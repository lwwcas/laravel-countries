<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class PW_Palau extends CountrySeeder
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
        $this->name = 'Palau';

        // Set the country's official name
        $this->official_name = 'Republic of Palau';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'PW';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'PLW';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '585';

        // Set the international dialing code
        $this->international_phone = '680';

        // Define the languages spoken in the country
        $this->languages = ['en', 'pau']; // English and Palauan are official languages

        // Define the top-level domain(s)
        $this->tld = ['.pw'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '10 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '3 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '48%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Palau Information and Communications Technology Office';

        // List popular web technologies in Palau
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'PW';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1559582';

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
            'banknotes' => ['1', '5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 18000; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 459; // km²

        // Set the capital city
        $this->capital = 'Ngerulmud';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Palau',
                // Standard time offset
                'standard_time' => 'UTC+9',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1994-10-01'; // Independence from the United States-administered Trust Territory

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum (PIF)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.28; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential constitutional republic';

        // Set the national sport
        $this->national_sport = 'Canoeing'; // Canoeing is a traditional sport in Palau

        // Define bordering countries
        $this->borders = []; // Palau is an island and has no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇵🇼',
            // Unicode code points
            'uCode' => 'U+1F1F5 U+1F1FC',
            // HTML entities
            'html' => '&#x1F1F5;&#x1F1FC;',
            // CSS entities
            'css' => '\\1F1F5\\1F1FC',
            // Decimal Unicode entities
            'decimal' => '&#127477;&#127484;',
            // Direct UTF-8 string
            'utf8' => '🇵🇼',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF5\uD83C\uDDFC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-pw:',
            // Hexadecimal entity
            'hex' => '&#x1F1F5;&#x1F1FC;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#4AADD6',
                // RGB color values
                'rgb' => '74,173,214',
                // CMYK color values
                'cmyk' => '65,19,0,16',
                // HSL color values
                'hsl' => '196°,65%,57%',
                // HSV color values
                'hsv' => '196°,65%,84%',
                // Pantone color code
                'pantone' => '2905 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
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
                'hsl' => '48°,100%,50%',
                // HSV color values
                'hsv' => '48°,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '7.5149',
            // Longitude in decimal degrees
            'longitude' => '134.5825',
            // Degrees with decimal
            'dd' => '7.5149° N, 134.5825° E',
            // Degrees, minutes, seconds
            'dms' => '7°30\'53.64" N, 134°34\'57" E',
            // Degrees and decimal minutes
            'dm' => '7°30.894\' N, 134°34.95\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"pw"},"geometry":{"type":"MultiPolygon","coordinates":[[[[132.226624,5.2927770000001],[132.22052,5.29222],[132.21579,5.2927770000001],[132.212189,5.29611],[132.209686,5.300277],[132.208313,5.305832],[132.208313,5.31111],[132.217743,5.315276],[132.226074,5.309999],[132.230255,5.307221],[132.231354,5.3016650000001],[132.230255,5.29611],[132.226624,5.2927770000001]]],[[[134.166077,6.885277],[134.159973,6.884444],[134.153595,6.885277],[134.144714,6.89],[134.13858,6.897499],[134.136658,6.902222],[134.133881,6.9130540000001],[134.13443,6.92611],[134.135803,6.931388],[134.139435,6.9347210000001],[134.144135,6.936943],[134.150269,6.9374990000001],[134.160522,6.935555],[134.168854,6.931388],[134.174988,6.92389],[134.17691,6.919166],[134.178314,6.906943],[134.176361,6.895277],[134.170807,6.8872210000001],[134.166077,6.885277]]],[[[134.274994,7.010278],[134.235229,6.981666],[134.23053,6.98389],[134.227753,6.987777],[134.226898,6.99416],[134.266663,7.063333],[134.26944,7.067499],[134.273041,7.070833],[134.27832,7.070833],[134.282471,7.06805],[134.284424,7.063333],[134.284424,7.058054],[134.276917,7.015],[134.274994,7.010278]]],[[[134.392761,7.14028],[134.386658,7.139443],[134.381073,7.14083],[134.372192,7.145555],[134.364685,7.15167],[134.355804,7.163333],[134.353851,7.168055],[134.353027,7.174166],[134.359131,7.180277],[134.376892,7.1905550000001],[134.381897,7.1925],[134.387207,7.1925],[134.389984,7.18861],[134.400269,7.15167],[134.401093,7.145555],[134.397766,7.142221],[134.392761,7.14028]]],[[[134.377747,7.21583],[134.370789,7.21583],[134.360504,7.219166],[134.356354,7.221944],[134.351074,7.2300000000001],[134.344116,7.24361],[134.341339,7.254444],[134.34079,7.26055],[134.341339,7.265277],[134.344116,7.269444],[134.348297,7.272222],[134.438873,7.278888],[134.44635,7.249721],[134.377747,7.21583]]],[[[134.470795,7.36111],[134.513306,7.343611],[134.517487,7.340833],[134.523041,7.33278],[134.524994,7.32778],[134.524994,7.321111],[134.521088,7.3116660000001],[134.517487,7.308054],[134.513306,7.30555],[134.495514,7.32861],[134.48941,7.33611],[134.481354,7.34139],[134.471619,7.345554],[134.466064,7.34417],[134.463287,7.34],[134.459961,7.33],[134.455811,7.327222],[134.45163,7.32861],[134.448303,7.33194],[134.444977,7.34222],[134.445526,7.3549990000001],[134.449127,7.358333],[134.453857,7.360555],[134.459137,7.361943],[134.465515,7.362499],[134.470795,7.36111]]],[[[134.561371,7.37194],[134.531372,7.354444],[134.525818,7.3558320000001],[134.51886,7.362499],[134.485229,7.438054],[134.544983,7.59611],[134.55304,7.60861],[134.562195,7.613333],[134.58609,7.6166660000001],[134.593018,7.6166660000001],[134.605225,7.618054],[134.621613,7.6219430000001],[134.631348,7.62611],[134.635529,7.628887],[134.641663,7.636388],[134.643036,7.6486100000001],[134.638031,7.670833],[134.632721,7.685832],[134.623016,7.70361],[134.618835,7.713055],[134.617462,7.71861],[134.618835,7.723888],[134.621613,7.728055],[134.627167,7.729444],[134.634155,7.729444],[134.638885,7.72722],[134.645538,7.720554],[134.650543,7.710278],[134.652466,7.705555],[134.654694,7.6941650000001],[134.658875,7.657499],[134.658875,7.643888],[134.654694,7.600277],[134.649719,7.578055],[134.628571,7.490276],[134.561371,7.37194]]]]}}]}';
    }
}
