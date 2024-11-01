<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TK_Tokelau extends CountrySeeder
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
        $this->name = 'Tokelau';

        // Set the country's official name
        $this->official_name = 'Tokelau';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'TK';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'TKL';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '772';

        // Set the international dialing code
        $this->international_phone = '690';

        // Define the languages spoken in the country
        $this->languages = ['tkl', 'en']; // Tokelauan and English are the official languages

        // Define the top-level domain(s)
        $this->tld = ['.tk'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '2 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '1 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '10%'; // Limited internet access due to remoteness

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = null; // No dedicated cybersecurity agency

        // List popular web technologies in Tokelau
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'TK';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '4031074';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'New Zealand dollar',
            // Currency code
            'code' => 'NZD',
            // Currency symbol
            'symbol' => '$',
            // Main unit
            'main_unit' => 'dollar',
            // Subunit
            'sub_unit' => 'cent',
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
        $this->population = 1500; // Small population, mainly residing on three atolls

        // Set the area in square kilometers
        $this->area = 12; // km²

        // Set the capital city
        $this->capital = null; // Tokelau has no official capital but its administrative center is rotated among the three atolls

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Fakaofo',
                // Standard time offset
                'standard_time' => 'UTC+13',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // Tokelau is a dependent territory of New Zealand

        // List international organizations the country is part of
        $this->international_organizations = [
            'Pacific Islands Forum (PIF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = null; // No significant GDP due to limited economic activity

        // List the predominant religions
        $this->religions = [
            'Christianity (Congregationalist)',
        ];

        // Describe the form of government
        $this->government = 'Non-self-governing territory of New Zealand';

        // Set the national sport
        $this->national_sport = 'Rugby'; // Rugby is the most popular sport in Tokelau

        // Define bordering countries
        $this->borders = []; // Tokelau is an island territory with no land borders

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇹🇰',
            // Unicode code points
            'uCode' => 'U+1F1F9 U+1F1F0',
            // HTML entities
            'html' => '&#x1F1F9;&#x1F1F0;',
            // CSS entities
            'css' => '\\1F1F9\\1F1F0',
            // Decimal Unicode entities
            'decimal' => '&#127481;&#127472;',
            // Direct UTF-8 string
            'utf8' => '🇹🇰',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF9\uD83C\uDDF0',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-tk:',
            // Hexadecimal entity
            'hex' => '&#x1F1F9;&#x1F1F0;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00247D',
                // RGB color values
                'rgb' => '0,36,125',
                // CMYK color values
                'cmyk' => '100,71,0,51',
                // HSL color values
                'hsl' => '219°,100%,24%',
                // HSV color values
                'hsv' => '219°,100%,49%',
                // Pantone color code
                'pantone' => '280 C',
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
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-9.2000',
            // Longitude in decimal degrees
            'longitude' => '-171.8333',
            // Degrees with decimal
            'dd' => '9.2000° S, 171.8333° W',
            // Degrees, minutes, seconds
            'dms' => '9°12\'00" S, 171°50\'00" W',
            // Degrees and decimal minutes
            'dm' => '9°12.0\' S, 171°50.0\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tk"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-171.214722,-9.377499],[-171.219177,-9.38111],[-171.223907,-9.37889],[-171.23056,-9.35556],[-171.22998,-9.34806],[-171.224701,-9.34556],[-171.218628,-9.34694],[-171.215576,-9.35111],[-171.211426,-9.363056],[-171.214722,-9.377499]]],[[[-171.843079,-9.207502],[-171.844452,-9.21417],[-171.848053,-9.218889],[-171.853638,-9.218334],[-171.856766,-9.212779],[-171.858032,-9.209723],[-171.859161,-9.209723],[-171.860535,-9.20667],[-171.862518,-9.19028],[-171.864746,-9.181114],[-171.862213,-9.17778],[-171.86142,-9.17445],[-171.858368,-9.17055],[-171.853882,-9.16806],[-171.850006,-9.16972],[-171.847504,-9.174168],[-171.844757,-9.18472],[-171.844757,-9.19083],[-171.843628,-9.194447],[-171.843079,-9.207502]]],[[[-172.483917,-8.58722],[-172.488617,-8.5875],[-172.493042,-8.5825],[-172.49942,-8.56611],[-172.500336,-8.560556],[-172.496979,-8.553888],[-172.492249,-8.55361],[-172.488892,-8.555834],[-172.483612,-8.566666],[-172.481934,-8.58056],[-172.483917,-8.58722]]]]}}]}';
    }
}
