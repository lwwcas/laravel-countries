<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MU_Mauritius extends CountrySeeder
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
        $this->name = 'Mauritius';

        // Set the country's official name
        $this->official_name = 'Republic of Mauritius';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MU';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MUS';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '480';

        // Set the international dialing code
        $this->international_phone = '230';

        // Define the languages spoken in the country
        $this->languages = ['en', 'fr', 'mfe']; // English is the official language, French and Mauritian Creole are widely spoken

        // Define the top-level domain(s)
        $this->tld = ['.mu'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '35 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '65%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Mauritius CERT-MU';

        // List popular web technologies in Mauritius
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MU';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '934292';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Mauritian rupee',
            // Currency code
            'code' => 'MUR',
            // Currency symbol
            'symbol' => '₨',
            // Main unit
            'main_unit' => 'rupee',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['25', '50', '100', '200', '500', '1000', '2000'],
            // Main coins
            'coins_main' => ['1', '5', '10', '20'],
            // Subunit coins
            'coins_sub' => ['5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 1265740; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 2040; // km²

        // Set the capital city
        $this->capital = 'Port Louis';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Mauritius',
                // Standard time offset
                'standard_time' => 'UTC+4',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1968-03-12'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Commonwealth of Nations',
            'African Union (AU)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 14.5; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Hinduism',
            'Christianity (Roman Catholicism)',
            'Islam',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is highly popular in Mauritius

        // Define bordering countries
        $this->borders = []; // As an island, Mauritius has no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇺',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1FA',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1FA;',
            // CSS entities
            'css' => '\\1F1F2\\1F1FA',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127482;',
            // Direct UTF-8 string
            'utf8' => '🇲🇺',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDFA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mu:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1FA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'hsl' => '0°,100%,50%',
                // HSV color values
                'hsv' => '0°,100%,100%',
                // Pantone color code
                'pantone' => '485 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#0000FF',
                // RGB color values
                'rgb' => '0,0,255',
                // CMYK color values
                'cmyk' => '100,100,0,0',
                // HSL color values
                'hsl' => '240°,100%,50%',
                // HSV color values
                'hsv' => '240°,100%,100%',
                // Pantone color code
                'pantone' => '286 C',
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
                'hsl' => '50°,100%,50%',
                // HSV color values
                'hsv' => '50°,100%,100%',
                // Pantone color code
                'pantone' => '116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#00FF00',
                // RGB color values
                'rgb' => '0,255,0',
                // CMYK color values
                'cmyk' => '100,0,100,0',
                // HSL color values
                'hsl' => '120°,100%,50%',
                // HSV color values
                'hsv' => '120°,100%,100%',
                // Pantone color code
                'pantone' => '355 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-20.3484',
            // Longitude in decimal degrees
            'longitude' => '57.5522',
            // Degrees with decimal
            'dd' => '20.3484° S, 57.5522° E',
            // Degrees, minutes, seconds
            'dms' => '20°20\'54.24" S, 57°33\'7.92" E',
            // Degrees and decimal minutes
            'dm' => '20°20.904\' S, 57°33.132\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mu"},"geometry":{"type":"MultiPolygon","coordinates":[[[[57.572495,-20.51417],[57.529442,-20.520557],[57.470833,-20.516113],[57.38611,-20.50306],[57.307495,-20.46],[57.30555,-20.45528],[57.304718,-20.44917],[57.306389,-20.43667],[57.307777,-20.431393],[57.376663,-20.245003],[57.385551,-20.225834],[57.404716,-20.19583],[57.413605,-20.18361],[57.533882,-20.020557],[57.589439,-19.988056],[57.593887,-19.985558],[57.596939,-19.984726],[57.624443,-19.98639],[57.669716,-19.99889],[57.67472,-20.00111],[57.682777,-20.01417],[57.794998,-20.224445],[57.79583,-20.23056],[57.791939,-20.27084],[57.790276,-20.283337],[57.78889,-20.28861],[57.722771,-20.438892],[57.705276,-20.45528],[57.679443,-20.479168],[57.669998,-20.48389],[57.572495,-20.51417]]],[[[63.466385,-19.735836],[63.369438,-19.76667],[63.362778,-19.766113],[63.35333,-19.761391],[63.33416,-19.74556],[63.33111,-19.74278],[63.328606,-19.73806],[63.330551,-19.71806],[63.33416,-19.714725],[63.338333,-19.71167],[63.348328,-19.7075],[63.434441,-19.67417],[63.4611,-19.673058],[63.467773,-19.67361],[63.47805,-19.6775],[63.493332,-19.68111],[63.497772,-19.683891],[63.498604,-19.68861],[63.496941,-19.703056],[63.49555,-19.70861],[63.492775,-19.71278],[63.471382,-19.733612],[63.466385,-19.735836]]],[[[56.564438,-10.397223],[56.56305,-10.398613],[56.557495,-10.397223],[56.553604,-10.394445],[56.54438,-10.382559],[56.54055,-10.38],[56.533607,-10.37306],[56.517776,-10.354445],[56.511665,-10.346668],[56.50972,-10.341946],[56.50722,-10.33111],[56.507774,-10.324722],[56.513611,-10.316668],[56.518326,-10.317501],[56.558609,-10.38],[56.563889,-10.38833],[56.565277,-10.39389],[56.564438,-10.397223]]]]}}]}';
    }
}
