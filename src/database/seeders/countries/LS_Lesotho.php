<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class LS_Lesotho extends CountrySeeder
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
        $this->name = 'Lesotho';

        // Set the country's official name
        $this->official_name = 'Kingdom of Lesotho';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'LS';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'LSO';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '426';

        // Set the international dialing code
        $this->international_phone = '266';

        // Define the languages spoken in the country
        $this->languages = ['en', 'st']; // English and Sesotho are official languages

        // Define the top-level domain(s)
        $this->tld = ['.ls'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '10 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '31%'; // As per recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Lesotho Communications Authority';

        // List popular web technologies in Lesotho
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'LS';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '932692';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Lesotho loti',
            // Currency code
            'code' => 'LSL',
            // Currency symbol
            'symbol' => 'L',
            // Main unit
            'main_unit' => 'loti',
            // Subunit
            'sub_unit' => 'sente',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1', '2', '5'],
            // Subunit coins
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 2142249; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 30355; // km²

        // Set the capital city
        $this->capital = 'Maseru';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Maseru',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1966-10-04'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Southern African Development Community (SADC)',
            'Commonwealth of Nations',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 2.7; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
            'Traditional African religions',
        ];

        // Describe the form of government
        $this->government = 'Constitutional monarchy with a parliamentary system';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Lesotho

        // Define bordering countries
        $this->borders = [
            ['name' => 'South Africa', 'iso_alpha_2' => 'ZA'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇱🇸',
            // Unicode code points
            'uCode' => 'U+1F1F1 U+1F1F8',
            // HTML entities
            'html' => '&#x1F1F1;&#x1F1F8;',
            // CSS entities
            'css' => '\\1F1F1\\1F1F8',
            // Decimal Unicode entities
            'decimal' => '&#127473;&#127480;',
            // Direct UTF-8 string
            'utf8' => '🇱🇸',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF1\uD83C\uDDF8',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-ls:',
            // Hexadecimal entity
            'hex' => '&#x1F1F1;&#x1F1F8;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00209F',
                // RGB color values
                'rgb' => '0,32,159',
                // CMYK color values
                'cmyk' => '100,80,0,38',
                // HSL color values
                'hsl' => '227°,100%,31%',
                // HSV color values
                'hsv' => '227°,100%,62%',
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
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#009739',
                // RGB color values
                'rgb' => '0,151,57',
                // CMYK color values
                'cmyk' => '100,0,62,41',
                // HSL color values
                'hsl' => '143°,100%,29%',
                // HSV color values
                'hsv' => '143°,100%,59%',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-29.6099',
            // Longitude in decimal degrees
            'longitude' => '28.2336',
            // Degrees with decimal
            'dd' => '29.6099° S, 28.2336° E',
            // Degrees, minutes, seconds
            'dms' => '29°36\'35.64" S, 28°14\'1.0" E',
            // Degrees and decimal minutes
            'dm' => '29°36.594\' S, 28°14.017\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ls"},"geometry":{"type":"Polygon","coordinates":[[[27.564617,-30.404911],[27.464722,-30.321392],[27.416943,-30.318336],[27.378922,-30.317329],[27.362499,-30.226112],[27.296944,-30.046669],[27.226387,-29.996391],[27.223888,-29.9925],[27.204441,-29.951668],[27.191437,-29.923708],[27.16,-29.856113],[27.100277,-29.735558],[27.071663,-29.697502],[27.068333,-29.693611],[27.064442,-29.690281],[27.059444,-29.6875],[27.042774,-29.681667],[27.037777,-29.679169],[27.030552,-29.671669],[27.011726,-29.644104],[27.011108,-29.625278],[27.014164,-29.621113],[27.018887,-29.618057],[27.151402,-29.568611],[27.163055,-29.565002],[27.214996,-29.554447],[27.251942,-29.546112],[27.292774,-29.53278],[27.30055,-29.525839],[27.312496,-29.499447],[27.359165,-29.449448],[27.451385,-29.300003],[27.492008,-29.276756],[27.540833,-29.20639],[27.629166,-29.10667],[27.643053,-29.09111],[27.633888,-29.078335],[27.633053,-29.073612],[27.636108,-29.042503],[27.637497,-29.038334],[27.797497,-28.918056],[27.89222,-28.9025],[28.016666,-28.862225],[28.066944,-28.810001],[28.11861,-28.74028],[28.174721,-28.699448],[28.179165,-28.696667],[28.186386,-28.697224],[28.191109,-28.699722],[28.20083,-28.711943],[28.279442,-28.710556],[28.295277,-28.710003],[28.34972,-28.697502],[28.355,-28.695278],[28.358887,-28.691669],[28.361111,-28.686668],[28.365276,-28.670002],[28.367496,-28.665279],[28.370277,-28.661114],[28.397499,-28.629169],[28.401943,-28.626392],[28.459721,-28.613613],[28.488205,-28.610035],[28.513885,-28.611389],[28.565552,-28.610001],[28.572498,-28.608891],[28.578888,-28.607502],[28.594997,-28.600834],[28.611111,-28.587223],[28.639442,-28.571667],[28.644722,-28.569725],[28.651108,-28.569447],[28.65583,-28.571945],[28.680275,-28.591114],[28.692497,-28.601112],[28.7925,-28.706947],[28.80694,-28.757502],[28.865726,-28.76162],[28.871109,-28.764446],[28.898052,-28.789169],[28.908054,-28.801392],[28.933331,-28.841946],[28.946941,-28.87167],[28.949718,-28.876392],[28.953609,-28.879723],[28.998333,-28.909447],[29.200554,-29.033611],[29.279442,-29.070835],[29.292221,-29.073059],[29.315277,-29.080559],[29.326385,-29.084446],[29.333054,-29.092503],[29.430832,-29.278614],[29.454998,-29.342503],[29.456108,-29.347225],[29.455555,-29.353336],[29.429996,-29.416389],[29.425831,-29.426113],[29.418053,-29.433334],[29.413609,-29.436111],[29.407219,-29.437778],[29.39222,-29.438892],[29.380074,-29.442131],[29.368053,-29.446114],[29.347221,-29.455559],[29.312496,-29.474167],[29.307777,-29.476948],[29.296665,-29.494446],[29.293331,-29.505001],[29.292809,-29.510712],[29.295277,-29.581949],[29.298611,-29.606113],[29.296665,-29.617779],[29.293888,-29.621948],[29.283886,-29.627224],[29.271111,-29.630558],[29.247498,-29.631111],[29.234165,-29.633614],[29.216942,-29.639725],[29.176666,-29.660278],[29.169167,-29.667503],[29.146664,-29.714447],[29.144444,-29.719448],[29.133053,-29.748611],[29.132774,-29.761669],[29.136665,-29.779449],[29.12722,-29.798336],[29.124996,-29.803337],[29.122498,-29.814445],[29.121944,-29.820557],[29.123055,-29.826668],[29.124722,-29.832226],[29.128052,-29.836113],[29.141941,-29.844723],[29.148331,-29.845837],[29.153332,-29.848335],[29.157497,-29.851669],[29.170277,-29.908337],[29.168888,-29.913891],[29.165833,-29.918335],[29.16111,-29.921112],[29.101387,-29.953335],[29.043888,-29.980003],[29.022499,-29.989841],[28.906387,-30.055279],[28.885277,-30.065002],[28.790554,-30.101391],[28.674442,-30.135281],[28.624996,-30.13139],[28.612778,-30.128334],[28.521385,-30.128891],[28.41222,-30.14167],[28.40583,-30.143059],[28.400276,-30.145279],[28.377777,-30.16028],[28.351665,-30.205833],[28.34861,-30.210003],[28.310276,-30.246948],[28.2575,-30.326668],[28.16,-30.498337],[28.149166,-30.549446],[28.146942,-30.554447],[28.079937,-30.650528],[28.021664,-30.64917],[27.972775,-30.644169],[27.93972,-30.638889],[27.926941,-30.636391],[27.74361,-30.599724],[27.738052,-30.597778],[27.733887,-30.594448],[27.615555,-30.488613],[27.609165,-30.480556],[27.576385,-30.432503],[27.570553,-30.423615],[27.564617,-30.404911]]]}}]}';
    }
}
