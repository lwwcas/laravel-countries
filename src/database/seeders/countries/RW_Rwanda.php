<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class RW_Rwanda extends CountrySeeder
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
        $this->name = 'Rwanda';

        // Set the country's official name
        $this->official_name = 'Republic of Rwanda';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'RW';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'RWA';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '646';

        // Set the international dialing code
        $this->international_phone = '250';

        // Define the languages spoken in the country
        $this->languages = ['rw', 'fr', 'en']; // Kinyarwanda, French, and English are official languages

        // Define the top-level domain(s)
        $this->tld = ['.rw'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '20 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '15 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '38%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Rwanda Information Society Authority (RISA)';

        // List popular web technologies in Rwanda
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'RW';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '49518';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Rwandan franc',
            // Currency code
            'code' => 'RWF',
            // Currency symbol
            'symbol' => 'FRw',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['500', '1000', '2000', '5000'],
            // Main coins
            'coins_main' => ['1', '5', '10', '50', '100'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10'],
        ];

        // Set the population
        $this->population = 13077543; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 26338; // km²

        // Set the capital city
        $this->capital = 'Kigali';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Kigali',
                // Standard time offset
                'standard_time' => 'UTC+2',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1962-07-01'; // Independence from Belgium

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'East African Community (EAC)',
            'Commonwealth of Nations',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 10.1; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
        ];

        // Describe the form of government
        $this->government = 'Unitary presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Rwanda

        // Define bordering countries
        $this->borders = [
            ['name' => 'Uganda', 'iso_alpha_2' => 'UG'],
            ['name' => 'Tanzania', 'iso_alpha_2' => 'TZ'],
            ['name' => 'Burundi', 'iso_alpha_2' => 'BI'],
            ['name' => 'Democratic Republic of the Congo', 'iso_alpha_2' => 'CD'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇷🇼',
            // Unicode code points
            'uCode' => 'U+1F1F7 U+1F1FC',
            // HTML entities
            'html' => '&#x1F1F7;&#x1F1FC;',
            // CSS entities
            'css' => '\\1F1F7\\1F1FC',
            // Decimal Unicode entities
            'decimal' => '&#127479;&#127484;',
            // Direct UTF-8 string
            'utf8' => '🇷🇼',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF7\uD83C\uDDFC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-rw:',
            // Hexadecimal entity
            'hex' => '&#x1F1F7;&#x1F1FC;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#00A1DE',
                // RGB color values
                'rgb' => '0,161,222',
                // CMYK color values
                'cmyk' => '100,27,0,13',
                // HSL color values
                'hsl' => '195°,100%,44%',
                // HSV color values
                'hsv' => '195°,100%,87%',
                // Pantone color code
                'pantone' => '2995 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FCD116',
                // RGB color values
                'rgb' => '252,209,22',
                // CMYK color values
                'cmyk' => '0,17,91,1',
                // HSL color values
                'hsl' => '48°,97%,54%',
                // HSV color values
                'hsv' => '48°,91%,99%',
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
                'hex' => '#009739',
                // RGB color values
                'rgb' => '0,151,57',
                // CMYK color values
                'cmyk' => '100,0,100,41',
                // HSL color values
                'hsl' => '147°,100%,30%',
                // HSV color values
                'hsv' => '147°,100%,59%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '-1.9403',
            // Longitude in decimal degrees
            'longitude' => '29.8739',
            // Degrees with decimal
            'dd' => '1.9403° S, 29.8739° E',
            // Degrees, minutes, seconds
            'dms' => '1°56\'25.08" S, 29°52\'26.04" E',
            // Degrees and decimal minutes
            'dm' => '1°56.418\' S, 29°52.434\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"rw"},"geometry":{"type":"Polygon","coordinates":[[[29.952221,-2.309445],[29.946941,-2.321111],[29.935276,-2.370833],[29.916386,-2.566389],[29.920277,-2.641945],[29.921944,-2.652779],[29.909443,-2.688056],[29.907497,-2.693056],[29.899441,-2.705556],[29.876389,-2.7375],[29.863052,-2.751389],[29.85083,-2.759722],[29.821941,-2.772778],[29.741943,-2.802222],[29.736385,-2.803611],[29.705555,-2.806111],[29.691666,-2.806389],[29.680553,-2.803889],[29.630831,-2.781113],[29.615833,-2.793889],[29.607777,-2.799445],[29.602776,-2.801667],[29.591942,-2.804445],[29.585552,-2.803889],[29.570551,-2.799999],[29.5425,-2.821111],[29.538609,-2.823889],[29.533607,-2.826111],[29.527496,-2.826667],[29.466663,-2.806945],[29.461941,-2.805],[29.443892,-2.795836],[29.384998,-2.824722],[29.379444,-2.826111],[29.372498,-2.826389],[29.367222,-2.825],[29.363052,-2.8225],[29.355831,-2.815556],[29.34972,-2.808056],[29.337219,-2.763611],[29.337776,-2.750556],[29.34861,-2.740834],[29.354721,-2.733056],[29.356667,-2.721389],[29.351665,-2.7125],[29.325832,-2.683328],[29.328888,-2.660556],[29.328888,-2.653611],[29.27972,-2.634445],[29.140553,-2.589167],[29.099998,-2.591667],[29.088333,-2.592778],[29.071388,-2.596389],[29.066387,-2.598333],[29.058887,-2.604722],[29.053608,-2.613611],[29.046665,-2.66],[29.047497,-2.673056],[29.053333,-2.688056],[29.054165,-2.694167],[29.053608,-2.700278],[29.052219,-2.705833],[29.044167,-2.725278],[29.038887,-2.733612],[29.024441,-2.744722],[29.025139,-2.738343],[29.018608,-2.724167],[29.015831,-2.720278],[29.008888,-2.713334],[28.989998,-2.697778],[28.98111,-2.693056],[28.975555,-2.691945],[28.956944,-2.694167],[28.950275,-2.694167],[28.935555,-2.688334],[28.927219,-2.683056],[28.91972,-2.676945],[28.902222,-2.66],[28.855553,-2.531945],[28.853333,-2.520278],[28.863609,-2.410278],[28.864998,-2.404723],[28.868332,-2.394444],[28.872776,-2.385278],[28.881107,-2.373056],[28.889164,-2.367222],[28.898609,-2.363056],[28.904999,-2.362223],[28.984997,-2.334445],[29.091942,-2.273056],[29.100277,-2.2675],[29.106941,-2.260556],[29.114998,-2.248056],[29.121666,-2.234167],[29.130489,-2.212948],[29.143887,-2.189167],[29.156387,-2.160833],[29.164444,-2.141389],[29.168331,-2.125],[29.170555,-2.100278],[29.170555,-2.086389],[29.168888,-2.074167],[29.166111,-2.063056],[29.148212,-2.014362],[29.135277,-1.976389],[29.128052,-1.948889],[29.124722,-1.924167],[29.123886,-1.911389],[29.123886,-1.904444],[29.12722,-1.860278],[29.129997,-1.849445],[29.135277,-1.834167],[29.141109,-1.819722],[29.145832,-1.810556],[29.251389,-1.654722],[29.270832,-1.626389],[29.355,-1.517778],[29.361111,-1.510278],[29.364719,-1.508056],[29.367222,-1.5075],[29.442776,-1.504167],[29.45639,-1.504167],[29.469997,-1.4825],[29.49361,-1.451389],[29.496944,-1.447778],[29.53833,-1.413611],[29.568886,-1.395833],[29.577774,-1.391111],[29.596943,-1.385834],[29.607777,-1.387222],[29.626942,-1.386945],[29.640831,-1.386667],[29.671665,-1.382778],[29.683331,-1.380556],[29.692776,-1.376111],[29.702774,-1.358889],[29.706108,-1.355278],[29.717777,-1.346389],[29.7225,-1.344167],[29.829166,-1.319167],[29.841389,-1.320278],[29.855274,-1.326945],[29.883331,-1.367778],[29.884998,-1.373056],[29.88583,-1.386111],[29.883888,-1.397778],[29.884163,-1.411667],[29.890553,-1.432778],[29.901943,-1.455833],[29.907497,-1.464167],[29.91111,-1.4675],[29.919441,-1.472778],[29.92972,-1.47611],[29.936665,-1.475833],[29.974998,-1.464445],[29.984444,-1.46],[30.109165,-1.3675],[30.171665,-1.315],[30.229164,-1.266667],[30.27972,-1.214445],[30.283054,-1.210834],[30.285553,-1.206667],[30.297775,-1.184722],[30.315357,-1.143762],[30.353886,-1.067778],[30.359997,-1.06],[30.364719,-1.058056],[30.443054,-1.053889],[30.460831,-1.055],[30.466942,-1.055556],[30.477219,-1.058889],[30.481422,-1.061436],[30.48222,-1.063334],[30.473331,-1.067778],[30.465832,-1.073889],[30.455276,-1.090556],[30.453331,-1.095556],[30.455555,-1.107222],[30.469444,-1.158334],[30.471664,-1.163056],[30.561665,-1.326945],[30.567776,-1.334445],[30.637497,-1.389445],[30.686108,-1.387222],[30.739166,-1.436944],[30.739998,-1.438334],[30.748886,-1.513611],[30.748886,-1.520556],[30.830936,-1.6549],[30.811108,-1.700556],[30.817219,-1.725278],[30.819443,-1.732222],[30.834999,-1.800556],[30.824718,-1.846667],[30.808331,-1.929445],[30.871429,-2.038265],[30.89222,-2.071389],[30.894165,-2.076111],[30.894444,-2.083056],[30.893055,-2.088611],[30.890274,-2.093334],[30.883053,-2.099722],[30.87833,-2.1075],[30.848888,-2.186944],[30.8475,-2.1925],[30.843052,-2.215278],[30.84333,-2.233056],[30.847221,-2.255556],[30.850277,-2.266667],[30.851944,-2.291389],[30.851665,-2.304445],[30.847775,-2.320834],[30.843887,-2.330556],[30.834442,-2.349445],[30.829166,-2.357778],[30.824997,-2.360556],[30.782219,-2.380556],[30.734444,-2.360834],[30.71833,-2.349445],[30.712776,-2.348056],[30.699718,-2.3475],[30.589722,-2.385834],[30.584721,-2.388056],[30.58083,-2.390833],[30.57333,-2.399167],[30.567219,-2.400834],[30.555553,-2.398889],[30.513885,-2.385834],[30.504997,-2.381111],[30.468609,-2.355834],[30.461666,-2.348889],[30.449165,-2.334167],[30.446388,-2.33],[30.444721,-2.324722],[30.429443,-2.315278],[30.402496,-2.3025],[30.392776,-2.298611],[30.386665,-2.298056],[30.381107,-2.299445],[30.374443,-2.306389],[30.356388,-2.336389],[30.285942,-2.355989],[30.163055,-2.426111],[30.15361,-2.430556],[30.114998,-2.421389],[30.109997,-2.419445],[30.096943,-2.412222],[30.089165,-2.406111],[30.004166,-2.336112],[29.952221,-2.309445]]]}}]}';
    }
}
