<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MT_Malta extends CountrySeeder
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
        $this->name = 'Malta';

        // Set the country's official name
        $this->official_name = 'Republic of Malta';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MT';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MLT';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '470';

        // Set the international dialing code
        $this->international_phone = '356';

        // Define the languages spoken in the country
        $this->languages = ['mt', 'en']; // Maltese and English are official languages

        // Define the top-level domain(s)
        $this->tld = ['.mt'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '120 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '80 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '90%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Malta Information Technology Agency (MITA)';

        // List popular web technologies in Malta
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'ML';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2562770';

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
        $this->population = 514564; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 316; // km²

        // Set the capital city
        $this->capital = 'Valletta';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Malta',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1964-09-21'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'European Union',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Commonwealth of Nations',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 17.5; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Malta

        // Define bordering countries
        $this->borders = []; // As an island, Malta has no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇹',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1F9',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1F9;',
            // CSS entities
            'css' => '\\1F1F2\\1F1F9',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127481;',
            // Direct UTF-8 string
            'utf8' => '🇲🇹',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDF9',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mt:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1F9;',
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
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
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
                'hex' => '#C8102E',
                // RGB color values
                'rgb' => '200,16,46',
                // CMYK color values
                'cmyk' => '0,100,76,23',
                // HSL color values
                'hsl' => '350°,84%,42%',
                // HSV color values
                'hsv' => '350°,92%,78%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '35.9375',
            // Longitude in decimal degrees
            'longitude' => '14.3754',
            // Degrees with decimal
            'dd' => '35.9375° N, 14.3754° E',
            // Degrees, minutes, seconds
            'dms' => '35°56\'15" N, 14°22\'31" E',
            // Degrees and decimal minutes
            'dm' => '35°56.25\' N, 14°22.52\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mt"},"geometry":{"type":"MultiPolygon","coordinates":[[[[14.562222,35.820274],[14.519722,35.799995],[14.42389,35.818604],[14.379721,35.844444],[14.374998,35.8475],[14.366943,35.854721],[14.347221,35.872498],[14.339443,35.879715],[14.336388,35.883888],[14.333055,35.894997],[14.324999,35.972771],[14.326387,35.97888],[14.332499,35.98111],[14.361666,35.99139],[14.368332,35.992493],[14.374998,35.990829],[14.443333,35.960274],[14.510277,35.92528],[14.548332,35.89222],[14.563889,35.877777],[14.57,35.869438],[14.568054,35.829437],[14.565832,35.824165],[14.562222,35.820274]]],[[[14.2675,36.011383],[14.251389,36.011383],[14.237221,36.012772],[14.196943,36.021942],[14.19111,36.02444],[14.185833,36.033333],[14.180832,36.055275],[14.18111,36.060829],[14.190832,36.066383],[14.208887,36.071663],[14.229166,36.074997],[14.245832,36.074165],[14.253332,36.073051],[14.314999,36.053329],[14.320555,36.051109],[14.34111,36.033882],[14.34083,36.029716],[14.335833,36.027222],[14.275,36.011665],[14.2675,36.011383]]]]}}]}';
    }
}
