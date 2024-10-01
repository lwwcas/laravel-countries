<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TL_TimorLeste extends CountrySeeder
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
    public ?string $region = 'asia';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Timor-Leste';

        // Set the country's official name
        $this->official_name = 'Democratic Republic of Timor-Leste';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'TL';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'TLS';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '626';

        // Set the international dialing code
        $this->international_phone = '670';

        // Define the languages spoken in the country
        $this->languages = ['pt', 'tet']; // Portuguese and Tetum are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.tl'];

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
        $this->internet_penetration = '25%'; // Low internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No dedicated cybersecurity agency

        // List popular web technologies in Timor-Leste
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'TL';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1966436';

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
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 1318445; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 14874; // km²

        // Set the capital city
        $this->capital = 'Dili';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Asia/Dili',
                // Standard time offset
                'standard_time' => 'UTC+9',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '2002-05-20'; // Independence from Indonesia

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Community of Portuguese Language Countries (CPLP)',
            'Association of Southeast Asian Nations (ASEAN) Observer',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholic)',
        ];

        // Describe the form of government
        $this->government = 'Semi-presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Timor-Leste

        // Define bordering countries
        $this->borders = [
            ['name' => 'Indonesia', 'iso_alpha_2' => 'ID'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇹🇱',
            // Unicode code points
            'uCode' => 'U+1F1F9 U+1F1F1',
            // HTML entities
            'html' => '&#x1F1F9;&#x1F1F1;',
            // CSS entities
            'css' => '\\1F1F9\\1F1F1',
            // Decimal Unicode entities
            'decimal' => '&#127481;&#127473;',
            // Direct UTF-8 string
            'utf8' => '🇹🇱',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF9\uD83C\uDDF1',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-tl:',
            // Hexadecimal entity
            'hex' => '&#x1F1F9;&#x1F1F1;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#BE0027',
                // RGB color values
                'rgb' => '190,0,39',
                // CMYK color values
                'cmyk' => '0,100,79,25',
                // HSL color values
                'hsl' => '348°,100%,37%',
                // HSV color values
                'hsv' => '348°,100%,75%',
                // Pantone color code
                'pantone' => '186 C',
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
                'pantone' => '109 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Black',
                // Web color name
                'web_name' => 'black',
                // Hexadecimal color code
                'hex' => '#000000',
                // RGB color values
                'rgb' => '0,0,0',
                // CMYK color values
                'cmyk' => '0,0,0,100',
                // HSL color values
                'hsl' => '0°,0%,0%',
                // HSV color values
                'hsv' => '0°,0%,0%',
                // Pantone color code
                'pantone' => 'Black C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-8.8742',
            // Longitude in decimal degrees
            'longitude' => '125.7275',
            // Degrees with decimal
            'dd' => '8.8742° S, 125.7275° E',
            // Degrees, minutes, seconds
            'dms' => '8°52\'27.12" S, 125°43\'39.00" E',
            // Degrees and decimal minutes
            'dm' => '8°52.452\' S, 125°43.65\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tl"},"geometry":{"type":"MultiPolygon","coordinates":[[[[124.4457272973,-9.1848014551586],[124.34309325995,-9.4633795565334],[124.04616116617,-9.33997920587],[124.066673,-9.33333],[124.136383,-9.3075],[124.150818,-9.3016659999999],[124.159149,-9.29555],[124.170822,-9.280001],[124.181091,-9.2630559999999],[124.184982,-9.26028],[124.290543,-9.22167],[124.413307,-9.18722],[124.418869,-9.185833],[124.424988,-9.18528],[124.4457272973,-9.1848014551586]]],[[[127.253052,-8.477499],[127.171371,-8.53917],[127.126373,-8.575832],[127.093323,-8.604445],[127.063309,-8.635557],[127.01944,-8.68028],[127.015266,-8.68278],[126.887772,-8.72889],[126.789703,-8.75611],[126.776657,-8.75528],[126.764427,-8.756668],[126.699417,-8.76694],[126.658867,-8.77444],[126.65332,-8.77639],[126.585541,-8.8083339999999],[126.578049,-8.81417],[126.540268,-8.85166],[126.532761,-8.86444],[126.528053,-8.879999],[126.520538,-8.89972],[126.496368,-8.93],[126.476646,-8.949722],[126.472488,-8.9525],[126.461647,-8.955],[126.324432,-8.97555],[126.258614,-8.98222],[126.239433,-8.980833],[126.225807,-8.980833],[126.164146,-8.987499],[126.15332,-8.990276],[126.1436,-8.99444],[126.126373,-9.00445],[126.114151,-9.012779],[126.086647,-9.03306],[125.943588,-9.12694],[125.924149,-9.1325],[125.918053,-9.133055],[125.891373,-9.1325],[125.8797,-9.13028],[125.867752,-9.12917],[125.848328,-9.13028],[125.842758,-9.13167],[125.783051,-9.147223],[125.559143,-9.21833],[125.404427,-9.26833],[125.394707,-9.2725],[125.354713,-9.294167],[125.350807,-9.296667],[125.330276,-9.31028],[125.286377,-9.34833],[125.234993,-9.39889],[125.223312,-9.414446],[125.211647,-9.42333],[125.201927,-9.427223],[125.191093,-9.43],[125.129417,-9.435287],[125.12798877127,-9.4359552177963],[124.97205197356,-9.2117960710896],[125.16404989666,-9.0661424742536],[124.94544874451,-8.9540393193029],[124.951897,-8.950127],[124.970543,-8.934723],[125.093048,-8.75944],[125.094994,-8.7411099999999],[125.10054,-8.712778],[125.106087,-8.69111],[125.109421,-8.680834],[125.118317,-8.6625],[125.124107,-8.6542],[125.126648,-8.650557],[125.136932,-8.640278],[125.145264,-8.634724],[125.218597,-8.612499],[125.229431,-8.60972],[125.424149,-8.57194],[125.606934,-8.5427779999999],[125.708328,-8.530556],[125.724991,-8.52639],[125.787201,-8.5066679999999],[125.796944,-8.50278],[125.805817,-8.49805],[125.818047,-8.48972],[125.827766,-8.485832],[125.844147,-8.481667],[125.856369,-8.48028],[125.888603,-8.48222],[125.907761,-8.48361],[125.938026,-8.487778],[125.965553,-8.49444],[125.986649,-8.50056],[126.021652,-8.520279],[126.03804,-8.524445],[126.044144,-8.525],[126.076393,-8.524445],[126.220261,-8.50139],[126.231934,-8.499166],[126.285538,-8.477499],[126.337486,-8.447779],[126.344994,-8.44111],[126.353867,-8.42944],[126.358871,-8.4275],[126.410263,-8.425278],[126.421921,-8.4275],[126.493042,-8.449722],[126.503326,-8.453054],[126.518333,-8.46528],[126.536102,-8.481667],[126.544434,-8.486944],[126.550537,-8.487778],[126.563026,-8.48639],[126.771378,-8.42417],[126.861099,-8.384167],[126.874687,-8.377222],[126.883041,-8.37194],[126.898613,-8.360277],[127.00499,-8.32444],[127.195534,-8.3325],[127.20166,-8.333055],[127.298866,-8.39278],[127.30304,-8.39555],[127.305817,-8.39972],[127.308357,-8.40964],[127.308594,-8.42417],[127.304428,-8.43361],[127.266663,-8.47083],[127.262497,-8.47361],[127.253052,-8.477499]]]]}}]}';
    }
}
