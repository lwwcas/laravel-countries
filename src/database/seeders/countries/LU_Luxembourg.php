<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class LU_Luxembourg extends CountrySeeder
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
        $this->name = 'Luxembourg';

        // Set the country's official name
        $this->official_name = 'Grand Duchy of Luxembourg';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'LU';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'LUX';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '442';

        // Set the international dialing code
        $this->international_phone = '352';

        // Define the languages spoken in the country
        $this->languages = ['lb', 'fr', 'de']; // Luxembourgish, French, and German are official languages

        // Define the top-level domain(s)
        $this->tld = ['.lu'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '150 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '50 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '98%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'CERT-LU (Computer Emergency Response Team Luxembourg)';

        // List popular web technologies in Luxembourg
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Java'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'LU';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2960313';

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
        $this->population = 634730; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 2586; // km²

        // Set the capital city
        $this->capital = 'Luxembourg City';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Luxembourg',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1815-06-09'; // Gained independence after the Congress of Vienna

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'European Union (EU)',
            'North Atlantic Treaty Organization (NATO)',
            'Schengen Area',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Council of Europe',
            'Organisation for Economic Co-operation and Development (OECD)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 71.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
            'Protestantism',
            'Islam',
            'Judaism',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary constitutional monarchy';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is highly popular in Luxembourg

        // Define bordering countries
        $this->borders = [
            ['name' => 'Belgium', 'iso_alpha_2' => 'BE'],
            ['name' => 'Germany', 'iso_alpha_2' => 'DE'],
            ['name' => 'France', 'iso_alpha_2' => 'FR'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇱🇺',
            // Unicode code points
            'uCode' => 'U+1F1F1 U+1F1FA',
            // HTML entities
            'html' => '&#x1F1F1;&#x1F1FA;',
            // CSS entities
            'css' => '\\1F1F1\\1F1FA',
            // Decimal Unicode entities
            'decimal' => '&#127473;&#127482;',
            // Direct UTF-8 string
            'utf8' => '🇱🇺',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF1\uD83C\uDDFA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-lu:',
            // Hexadecimal entity
            'hex' => '&#x1F1F1;&#x1F1FA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#FF4A4A',
                // RGB color values
                'rgb' => '255,74,74',
                // CMYK color values
                'cmyk' => '0,71,71,0',
                // HSL color values
                'hsl' => '0°,100%,64%',
                // HSV color values
                'hsv' => '0°,71%,100%',
                // Pantone color code
                'pantone' => 'Warm Red C',
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
            [
                // Color name
                'name' => 'Sky Blue',
                // Web color name
                'web_name' => 'skyblue',
                // Hexadecimal color code
                'hex' => '#00A1DE',
                // RGB color values
                'rgb' => '0,161,222',
                // CMYK color values
                'cmyk' => '100,27,0,13',
                // HSL color values
                'hsl' => '196°,100%,44%',
                // HSV color values
                'hsv' => '196°,100%,87%',
                // Pantone color code
                'pantone' => '2995 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '49.8153',
            // Longitude in decimal degrees
            'longitude' => '6.1296',
            // Degrees with decimal
            'dd' => '49.8153° N, 6.1296° E',
            // Degrees, minutes, seconds
            'dms' => '49°48\'55.08" N, 6°7\'46.56" E',
            // Degrees and decimal minutes
            'dm' => '49°48.918\' N, 6°7.776\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"lu"},"geometry":{"type":"Polygon","coordinates":[[[6.026256,50.181252],[6.02861,50.166107],[6.031111,50.160828],[6.033889,50.159164],[6.12,50.131943],[6.134414,50.127846],[6.130278,50.121941],[6.128055,50.116386],[6.118333,50.090828],[6.112778,50.058884],[6.113333,50.055832],[6.130555,50.013885],[6.140555,49.993889],[6.173055,49.952217],[6.175278,49.949997],[6.234166,49.897499],[6.250278,49.884163],[6.255278,49.880554],[6.315938,49.855316],[6.321111,49.848328],[6.395555,49.817772],[6.429722,49.808884],[6.481944,49.811104],[6.522222,49.811104],[6.524444,49.808609],[6.524722,49.80555],[6.505835,49.706627],[6.484722,49.696106],[6.473055,49.693604],[6.46611,49.691109],[6.420833,49.665833],[6.356486,49.525864],[6.362778,49.489166],[6.36217,49.459389],[6.328333,49.469162],[6.302777,49.476662],[6.247318,49.505974],[6.239721,49.507774],[6.229722,49.508331],[6.165277,49.504715],[6.156111,49.503883],[6.124166,49.489716],[6.123055,49.487221],[6.122499,49.480553],[6.12,49.471664],[6.118055,49.469719],[6.094444,49.454163],[6.090555,49.453049],[5.981388,49.448326],[5.977777,49.448608],[5.855277,49.501106],[5.838611,49.51416],[5.811666,49.536385],[5.809999,49.538887],[5.80788,49.545044],[5.834167,49.549164],[5.837777,49.550278],[5.863055,49.571663],[5.900277,49.640549],[5.899166,49.662773],[5.87615,49.709885],[5.869444,49.719719],[5.790277,49.78083],[5.764999,49.789993],[5.750833,49.791107],[5.748055,49.79277],[5.746666,49.795273],[5.734444,49.834999],[5.747777,49.907494],[5.770833,49.95166],[5.774722,49.956108],[5.777499,49.957771],[5.791389,49.962494],[5.834444,49.986938],[5.883055,50.077217],[5.883055,50.080551],[5.886666,50.098885],[5.889444,50.104164],[5.891666,50.10611],[5.969722,50.16861],[5.976388,50.171387],[6.013888,50.181389],[6.021944,50.18222],[6.026256,50.181252]]]}}]}';
    }
}
