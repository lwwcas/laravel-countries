<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class WS_Samoa extends CountrySeeder
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
        $this->name = 'Samoa';

        // Set the country's official name
        $this->official_name = 'Independent State of Samoa';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'WS';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'WSM';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '882';

        // Set the international dialing code
        $this->international_phone = '685';

        // Define the languages spoken in the country
        $this->languages = ['sm', 'en']; // Samoan and English are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.ws'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '15 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '30%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Ministry of Communications and Information Technology (MCIT)';

        // List popular web technologies in Samoa
        $this->popular_technologies = ['PHP', 'JavaScript', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'WS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4034894';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Samoan tālā',
            // Currency code
            'code' => 'WST',
            // Currency symbol
            'symbol' => 'WS$',
            // Main unit
            'main_unit' => 'tālā',
            // Subunit
            'sub_unit' => 'sene',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['10', '20', '50'],
        ];

        // Set the population
        $this->population = 202506; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 2842; // km²

        // Set the capital city
        $this->capital = 'Apia';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Apia',
                // Standard time offset
                'standard_time' => 'UTC+13',
                // Daylight saving time offset (when applicable)
                'daylight_saving_time' => 'UTC+14',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1962-06-01'; // Independence from New Zealand

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum',
            'Commonwealth of Nations',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.86; // GDP in billions of USD (2023 estimates)

        // List the predominant religions
        $this->religions = [
            'Christianity (Congregationalism)',
            'Christianity (Methodism)',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Rugby Union'; // Rugby Union is the most popular sport in Samoa

        // Define bordering countries (Samoa has no land borders but shares maritime boundaries)
        $this->borders = [];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇼🇸',
            // Unicode code points
            'uCode' => 'U+1F1FC U+1F1F8',
            // HTML entities
            'html' => '&#x1F1FC;&#x1F1F8;',
            // CSS entities
            'css' => '\\1F1FC\\1F1F8',
            // Decimal Unicode entities
            'decimal' => '&#127484;&#127480;',
            // Direct UTF-8 string
            'utf8' => '🇼🇸',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDFC\uD83C\uDDF8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ws:',
            // Hexadecimal entity
            'hex' => '&#x1F1FC;&#x1F1F8;',
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
                'cmyk' => '0,92,77,22',
                // HSL color values
                'hsl' => '346°,86%,42%',
                // HSV color values
                'hsv' => '346°,92%,78%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0033A0',
                // RGB color values
                'rgb' => '0,51,160',
                // CMYK color values
                'cmyk' => '100,68,0,37',
                // HSL color values
                'hsl' => '218°,100%,31%',
                // HSV color values
                'hsv' => '218°,100%,63%',
                // Pantone color code
                'pantone' => '286 C',
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
            'latitude' => '-13.7590',
            // Longitude in decimal degrees
            'longitude' => '-172.1046',
            // Degrees with decimal
            'dd' => '13.7590° S, 172.1046° W',
            // Degrees, minutes, seconds
            'dms' => '13°45\'32.40" S, 172°6\'16.56" W',
            // Degrees and decimal minutes
            'dm' => '13°45.540\' S, 172°6.276\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ws"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-171.429749,-14.019724],[-171.441986,-14.057503],[-171.465271,-14.05278],[-171.47998,-14.050556],[-171.516663,-14.047779],[-171.524445,-14.047779],[-171.546112,-14.05028],[-171.588928,-14.052502],[-171.648376,-14.05028],[-171.768097,-14.03583],[-171.911133,-14.0125],[-172.04837,-13.91445],[-172.052826,-13.91056],[-172.056976,-13.906113],[-172.060028,-13.900278],[-172.064758,-13.88194],[-172.064758,-13.87444],[-172.061707,-13.869165],[-172.0578,-13.86472],[-172.030853,-13.84111],[-172.027802,-13.839443],[-171.906708,-13.80667],[-171.883911,-13.805555],[-171.822266,-13.807503],[-171.748077,-13.83167],[-171.619141,-13.87861],[-171.446136,-13.9825],[-171.44223,-13.98639],[-171.431976,-13.99944],[-171.429443,-14.005281],[-171.42865,-14.012779],[-171.429749,-14.019724]]],[[[-172.285858,-13.48639],[-172.222504,-13.563055],[-172.203064,-13.591946],[-172.193359,-13.613335],[-172.168884,-13.677502],[-172.167816,-13.68444],[-172.167816,-13.69139],[-172.210541,-13.80528],[-172.214172,-13.80778],[-172.225037,-13.808889],[-172.251953,-13.807503],[-172.257538,-13.80584],[-172.262268,-13.80195],[-172.393341,-13.79167],[-172.482788,-13.80667],[-172.489197,-13.80695],[-172.508911,-13.80667],[-172.51947,-13.80528],[-172.527222,-13.80389],[-172.532501,-13.800835],[-172.574432,-13.76584],[-172.590027,-13.73972],[-172.691101,-13.62611],[-172.75,-13.575832],[-172.753387,-13.57222],[-172.772827,-13.549999],[-172.779724,-13.53972],[-172.780609,-13.53333],[-172.780304,-13.53],[-172.77948,-13.52722],[-172.775024,-13.519445],[-172.77005,-13.515556],[-172.758087,-13.511112],[-172.753082,-13.509445],[-172.741699,-13.5075],[-172.736115,-13.509445],[-172.728638,-13.51333],[-172.655273,-13.51917],[-172.596497,-13.509113],[-172.551941,-13.49722],[-172.475281,-13.47972],[-172.391113,-13.464169],[-172.36084,-13.460556],[-172.348358,-13.46139],[-172.311401,-13.469168],[-172.304443,-13.47111],[-172.29892,-13.474169],[-172.289734,-13.481943],[-172.285858,-13.48639]]]]}}]}';
    }
}
