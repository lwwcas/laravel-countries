<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MH_MarshallIslands extends CountrySeeder
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
        $this->name = 'Marshall Islands';

        // Set the country's official name
        $this->official_name = 'Republic of the Marshall Islands';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MH';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MHL';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '584';

        // Set the international dialing code
        $this->international_phone = '692';

        // Define the languages spoken in the country
        $this->languages = ['mh', 'en']; // Marshallese and English are official languages

        // Define the top-level domain(s)
        $this->tld = ['.mh'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '15 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '13%'; // Low internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Marshall Islands CERT';

        // List popular web technologies in the Marshall Islands
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MH';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2080185';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'United States Dollar',
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
        $this->population = 59194; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 181; // km²

        // Set the capital city
        $this->capital = 'Majuro';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Pacific/Majuro',
                // Standard time offset
                'standard_time' => 'UTC+12',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1986-10-21'; // Independence from the United States

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'Pacific Islands Forum (PIF)',
            'World Health Organization (WHO)',
            'International Monetary Fund (IMF)',
            'World Trade Organization (WTO)',
            'Asian Development Bank (ADB)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 0.22; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic under a constitutional government';

        // Set the national sport
        $this->national_sport = 'Canoeing and Fishing'; // Traditional water-based sports are popular

        // Define bordering countries
        $this->borders = []; // As an island nation, the Marshall Islands has no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇭',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1ED',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1ED;',
            // CSS entities
            'css' => '\\1F1F2\\1F1ED',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127469;',
            // Direct UTF-8 string
            'utf8' => '🇲🇭',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDED',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mh:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1ED;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
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
                'cmyk' => '100,69,0,37',
                // HSL color values
                'hsl' => '220°,100%,41%',
                // HSV color values
                'hsv' => '220°,100%,63%',
                // Pantone color code
                'pantone' => 'Pantone 286 C',
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
                'name' => 'Orange',
                // Web color name
                'web_name' => 'orange',
                // Hexadecimal color code
                'hex' => '#FF8C00',
                // RGB color values
                'rgb' => '255,140,0',
                // CMYK color values
                'cmyk' => '0,45,100,0',
                // HSL color values
                'hsl' => '33°,100%,50%',
                // HSV color values
                'hsv' => '33°,100%,100%',
                // Pantone color code
                'pantone' => 'Orange 021 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '7.1315',
            // Longitude in decimal degrees
            'longitude' => '171.1845',
            // Degrees with decimal
            'dd' => '7.1315° N, 171.1845° E',
            // Degrees, minutes, seconds
            'dms' => '7°7\'53.40" N, 171°11\'4.20" E',
            // Degrees and decimal minutes
            'dm' => '7°7.890\' N, 171°11.070\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mh"},"geometry":{"type":"MultiPolygon","coordinates":[[[[168.113586,5.600277],[168.108002,5.600277],[168.103302,5.602499],[168.094971,5.608054],[168.094971,5.613333],[168.11969,5.639443],[168.12439,5.6416660000001],[168.12912,5.639443],[168.132721,5.633333],[168.132721,5.629166],[168.131348,5.62361],[168.129944,5.618332],[168.121613,5.605832],[168.118286,5.602499],[168.113586,5.600277]]],[[[168.09024,5.6305540000001],[168.085236,5.62861],[168.079132,5.629166],[168.074982,5.63194],[168.073029,5.6366660000001],[168.073029,5.642221],[168.074982,5.6472220000001],[168.077148,5.650265],[168.080536,5.651111],[168.09079,5.6408330000001],[168.092194,5.635555],[168.09024,5.6305540000001]]],[[[171.751923,6.080555],[171.756104,6.07667],[171.730804,6.07722],[171.726624,6.08],[171.727173,6.0861100000001],[171.732178,6.094999],[171.733582,6.096388],[171.751923,6.080555]]],[[[172.090515,6.219721],[172.086365,6.216944],[172.077454,6.218888],[172.074127,6.2222210000001],[172.07608,6.226944],[172.080261,6.22972],[172.084961,6.227777],[172.088562,6.224443],[172.090515,6.219721]]],[[[171.914154,7.092499],[171.902466,7.0911100000001],[171.896942,7.092499],[171.89386,7.09611],[171.894135,7.10166],[171.895538,7.10417],[171.922211,7.132221],[171.925262,7.1349990000001],[171.929962,7.133888],[171.933319,7.130554],[171.934967,7.125554],[171.934692,7.1199990000001],[171.925537,7.10139],[171.92276,7.097499],[171.914154,7.092499]]],[[[168.768036,7.29833],[168.786377,7.28889],[168.767212,7.28972],[168.70163,7.30528],[168.690796,7.3083320000001],[168.672485,7.317778],[168.669983,7.321944],[168.670258,7.328888],[168.674408,7.331388],[168.768036,7.29833]]],[[[168.574677,7.3980550000001],[168.569977,7.397499],[168.561096,7.402499],[168.558594,7.406666],[168.554962,7.423055],[168.553589,7.448332],[168.553589,7.469443],[168.558594,7.471388],[168.563293,7.469166],[168.565247,7.4644440000001],[168.573029,7.409721],[168.574677,7.3980550000001]]],[[[168.967194,7.57417],[168.961639,7.573055],[168.94165,7.6124990000001],[168.944427,7.615276],[168.956085,7.61694],[168.964966,7.6116660000001],[168.974976,7.60111],[168.978027,7.59083],[168.977173,7.5847220000001],[168.974976,7.58],[168.967194,7.57417]]],[[[168.251373,7.749443],[168.246613,7.747777],[168.233582,7.74861],[168.22467,7.75389],[168.218567,7.7613890000001],[168.220245,7.766944],[168.224976,7.7661100000001],[168.250824,7.75722],[168.25415,7.75361],[168.251373,7.749443]]],[[[167.738861,8.725275],[167.731903,8.72472],[167.726349,8.726387],[167.724396,8.729719],[167.736633,8.744997],[167.740784,8.74778],[167.74411,8.744997],[167.745514,8.7394410000001],[167.744415,8.733332],[167.742462,8.728609],[167.738861,8.725275]]],[[[170.844971,8.886944],[170.839966,8.884998],[170.836639,8.88861],[170.834961,8.89333],[170.83609,8.90639],[170.841919,8.9144440000001],[170.846924,8.916109],[170.851074,8.9133320000001],[170.854401,8.90972],[170.85553,8.90416],[170.854401,8.898054],[170.848572,8.8899990000001],[170.844971,8.886944]]],[[[165.536926,9.19722],[165.531372,9.19611],[165.527191,9.198887],[165.522491,9.207775],[165.522766,9.21472],[165.526917,9.2186090000001],[165.531097,9.215832],[165.536377,9.2075],[165.5383,9.20278],[165.536926,9.19722]]],[[[166.829956,9.32222],[166.823029,9.32222],[166.818298,9.324442],[166.814972,9.3280540000001],[166.811646,9.334164],[166.811646,9.336943],[166.824982,9.3372190000001],[166.830261,9.335831],[166.833862,9.33222],[166.836365,9.3280540000001],[166.83551,9.323332],[166.829956,9.32222]]],[[[170.248016,9.54472],[170.244965,9.5336090000001],[170.240784,9.536665],[170.233307,9.5588870000001],[170.237732,9.5613880000001],[170.243835,9.5605550000001],[170.247192,9.55694],[170.248291,9.55139],[170.248016,9.54472]]],[[[170.15387,9.639442],[170.135529,9.63333],[170.136658,9.639442],[170.139435,9.643332],[170.14386,9.645832],[170.156372,9.646944],[170.161652,9.645277],[170.158875,9.6413880000001],[170.15387,9.639442]]],[[[169.971619,10.436386],[169.969971,10.43222],[169.963867,10.433332],[169.959686,10.43611],[169.948853,10.44611],[169.944122,10.451109],[169.95108,10.45083],[169.960785,10.446386],[169.964966,10.44361],[169.971619,10.436386]]],[[[166.885254,11.144722],[166.879669,11.14361],[166.867188,11.145277],[166.841339,11.153332],[166.894989,11.16861],[166.900543,11.16861],[166.901917,11.16305],[166.899719,11.158333],[166.896637,11.154165],[166.889709,11.147499],[166.885254,11.144722]]],[[[169.866913,11.23277],[169.861908,11.230831],[169.85553,11.231941],[169.856628,11.23805],[169.858856,11.241386],[169.86911,11.237497],[169.866913,11.23277]]],[[[162.338287,11.351942],[162.332733,11.35083],[162.326355,11.35139],[162.323578,11.354164],[162.331085,11.360275],[162.33609,11.362219],[162.341644,11.362219],[162.345245,11.358887],[162.342468,11.35472],[162.338287,11.351942]]],[[[167.520813,11.37777],[167.516083,11.37722],[167.512482,11.380831],[167.512207,11.393888],[167.526093,11.38666],[167.525269,11.380552],[167.520813,11.37777]]],[[[165.556091,11.615831],[165.553864,11.61111],[165.513031,11.63861],[165.531921,11.640276],[165.537476,11.638887],[165.547211,11.634443],[165.550812,11.631109],[165.555542,11.621943],[165.556091,11.615831]]],[[[165.291656,11.700554],[165.282471,11.695831],[165.277466,11.696665],[165.274689,11.70083],[165.271912,11.706387],[165.274994,11.710276],[165.279144,11.713053],[165.284698,11.714165],[165.294434,11.709997],[165.294434,11.704443],[165.291656,11.700554]]],[[[168.987732,14.58083],[168.981079,14.580276],[168.974976,14.58111],[168.977173,14.584442],[168.985229,14.59055],[168.998291,14.59833],[169.003876,14.598053],[169.004425,14.591942],[169.001373,14.587776],[168.987732,14.58083]]]]}}]}';
    }
}
