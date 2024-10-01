<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MG_Madagascar extends CountrySeeder
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
        $this->name = 'Madagascar';

        // Set the country's official name
        $this->official_name = 'Republic of Madagascar';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MG';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MDG';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '450';

        // Set the international dialing code
        $this->international_phone = '261';

        // Define the languages spoken in the country
        $this->languages = ['mg', 'fr']; // Malagasy and French are official languages

        // Define the top-level domain(s)
        $this->tld = ['.mg'];

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
        $this->internet_penetration = '9%'; // Low internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Madagascar CERT';

        // List popular web technologies in Madagascar
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MG';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '1062947';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Malagasy ariary',
            // Currency code
            'code' => 'MGA',
            // Currency symbol
            'symbol' => 'Ar',
            // Main unit
            'main_unit' => 'ariary',
            // Subunit
            'sub_unit' => 'iraimbilanja',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 5, // 1 ariary = 5 iraimbilanja
            // Banknotes in circulation
            'banknotes' => ['100', '200', '500', '1000', '2000', '5000', '10000', '20000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10', '20', '50', '100'],
            // Subunit coins
            'coins_sub' => ['1', '2', '4', '5', '10'],
        ];

        // Set the population
        $this->population = 28173112; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 587041; // km²

        // Set the capital city
        $this->capital = 'Antananarivo';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Indian/Antananarivo',
                // Standard time offset
                'standard_time' => 'UTC+3',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1960-06-26'; // Independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Organisation internationale de la Francophonie',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 14.2; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism, Protestantism)',
            'Traditional beliefs',
        ];

        // Describe the form of government
        $this->government = 'Unitary semi-presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is highly popular in Madagascar

        // Define bordering countries
        $this->borders = []; // As an island, Madagascar has no bordering countries

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇬',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1EC',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1EC;',
            // CSS entities
            'css' => '\\1F1F2\\1F1EC',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127468;',
            // Direct UTF-8 string
            'utf8' => '🇲🇬',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDEC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mg:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1EC;',
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
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A33',
                // RGB color values
                'rgb' => '0,122,51',
                // CMYK color values
                'cmyk' => '100,0,58,52',
                // HSL color values
                'hsl' => '146°,100%,24%',
                // HSV color values
                'hsv' => '146°,100%,48%',
                // Pantone color code
                'pantone' => '348 C',
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
            'latitude' => '-18.7669',
            // Longitude in decimal degrees
            'longitude' => '46.8691',
            // Degrees with decimal
            'dd' => '18.7669° S, 46.8691° E',
            // Degrees, minutes, seconds
            'dms' => '18°46\'0.84" S, 46°52\'8.76" E',
            // Degrees and decimal minutes
            'dm' => '18°46.014\' S, 46°52.146\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mg"},"geometry":{"type":"MultiPolygon","coordinates":[[[[49.833611,-17.089725],[49.827217,-17.09528],[49.82,-17.088337],[49.81721,-17.049168],[49.818054,-17.03945],[49.86055,-16.91389],[49.867218,-16.902779],[49.961662,-16.759724],[50.010551,-16.72556],[49.95222,-16.87861],[49.93972,-16.907501],[49.91,-16.958889],[49.833611,-17.089725]]],[[[47.219719,-15.436668],[47.212776,-15.436668],[47.207771,-15.434446],[47.203331,-15.431667],[47.200554,-15.427502],[47.20666,-15.42056],[47.213051,-15.42],[47.219444,-15.420834],[47.22361,-15.42361],[47.22583,-15.42861],[47.224159,-15.434168],[47.219719,-15.436668]]],[[[48.342499,-13.41806],[48.33194,-13.42],[48.224442,-13.406113],[48.220276,-13.40472],[48.208885,-13.394724],[48.205551,-13.39139],[48.198051,-13.364168],[48.192215,-13.338057],[48.191666,-13.318056],[48.196663,-13.27],[48.26639,-13.2025],[48.281387,-13.19667],[48.286942,-13.19528],[48.294167,-13.19528],[48.319443,-13.19583],[48.32222,-13.2],[48.324997,-13.211113],[48.361938,-13.39417],[48.363327,-13.40667],[48.359718,-13.41],[48.342499,-13.41806]]],[[[49.604439,-12.62639],[49.598053,-12.62694],[49.594444,-12.62361],[49.5925,-12.61889],[49.5925,-12.613335],[49.59583,-12.610001],[49.602219,-12.61056],[49.60583,-12.614168],[49.607773,-12.61889],[49.607773,-12.624445],[49.604439,-12.62639]]],[[[49.356941,-12.09083],[49.369995,-12.187223],[49.371941,-12.207224],[49.362778,-12.20444],[49.35527,-12.19389],[49.34972,-12.184446],[49.335274,-12.16445],[49.325554,-12.1575],[49.26194,-12.14389],[49.251938,-12.148056],[49.243885,-12.16745],[49.240551,-12.17228],[49.232498,-12.225],[49.267494,-12.27861],[49.27444,-12.28556],[49.327499,-12.301111],[49.346382,-12.303335],[49.356384,-12.29945],[49.364166,-12.293335],[49.368332,-12.28361],[49.37055,-12.272223],[49.366386,-12.2625],[49.428604,-12.28278],[49.518326,-12.34583],[49.54388,-12.38444],[49.590828,-12.485279],[49.595551,-12.50778],[49.59666,-12.520279],[49.59666,-12.5325],[49.5925,-12.54222],[49.574886,-12.565103],[49.576527,-12.582493],[49.574558,-12.59988],[49.566685,-12.609398],[49.56242,-12.61826],[49.562092,-12.633349],[49.570621,-12.648771],[49.589981,-12.652052],[49.59861,-12.64833],[49.65361,-12.701946],[49.79805,-12.81611],[49.894722,-12.95],[49.900276,-12.95833],[49.943329,-13.03945],[49.947495,-13.07445],[49.94722,-13.08667],[49.943604,-13.096945],[49.940826,-13.118891],[49.933327,-13.18111],[49.943604,-13.224445],[49.979439,-13.34667],[50.024719,-13.44945],[50.038055,-13.46389],[50.034439,-13.48389],[50.034439,-13.496113],[50.037773,-13.51333],[50.04333,-13.52167],[50.051109,-13.52917],[50.059441,-13.53472],[50.066666,-13.541668],[50.071388,-13.550556],[50.101944,-13.627501],[50.138054,-13.76195],[50.140274,-13.773613],[50.148331,-13.82028],[50.149719,-13.832779],[50.150276,-13.852501],[50.14666,-13.876667],[50.145271,-13.896389],[50.144165,-13.98889],[50.149719,-13.99861],[50.160828,-14.015],[50.17499,-14.04945],[50.176109,-14.061945],[50.171104,-14.105],[50.160553,-14.20167],[50.159996,-14.22167],[50.16333,-14.23194],[50.168327,-14.241667],[50.174721,-14.249168],[50.182495,-14.25528],[50.19221,-14.25944],[50.199997,-14.26583],[50.205551,-14.27389],[50.215553,-14.291945],[50.216942,-14.304167],[50.216942,-14.31111],[50.213882,-14.342501],[50.203888,-14.374723],[50.19221,-14.41861],[50.190826,-14.43111],[50.190552,-14.45167],[50.199997,-14.57028],[50.238327,-14.71139],[50.271942,-14.82611],[50.299995,-14.905001],[50.337494,-14.99861],[50.401108,-15.09778],[50.433609,-15.14583],[50.48389,-15.20389],[50.49678,-15.249453],[50.498055,-15.262779],[50.501389,-15.308889],[50.501389,-15.32278],[50.482773,-15.405834],[50.433609,-15.58],[50.326385,-15.81889],[50.299721,-15.87361],[50.240829,-15.968889],[50.23222,-15.97444],[50.172775,-15.97972],[50.137932,-15.92751],[50.10444,-15.92306],[50.096664,-15.91806],[50.033882,-15.866945],[50.02916,-15.8575],[50.026382,-15.810556],[50.026665,-15.798334],[49.961662,-15.68111],[49.903885,-15.56111],[49.903053,-15.54806],[49.902222,-15.468334],[49.866104,-15.432501],[49.824165,-15.431667],[49.751389,-15.435835],[49.729996,-15.44278],[49.720551,-15.4475],[49.69611,-15.46583],[49.676941,-15.488335],[49.664444,-15.504723],[49.64139,-15.5375],[49.63361,-15.5575],[49.632774,-15.570557],[49.633888,-15.583612],[49.65749,-15.68195],[49.666664,-15.70611],[49.675827,-15.725279],[49.733604,-15.89972],[49.734444,-15.90861],[49.732773,-15.917501],[49.72916,-15.92639],[49.71777,-15.945557],[49.70472,-15.964169],[49.687775,-16.01],[49.681389,-16.030556],[49.679718,-16.039448],[49.680275,-16.05056],[49.682495,-16.05945],[49.695831,-16.09806],[49.699997,-16.10973],[49.704163,-16.118614],[49.709717,-16.1275],[49.720551,-16.138058],[49.729721,-16.145557],[49.748886,-16.15334],[49.759163,-16.15472],[49.769165,-16.15222],[49.81694,-16.18195],[49.836105,-16.19722],[49.850273,-16.21722],[49.853607,-16.226948],[49.854439,-16.23584],[49.852219,-16.2475],[49.838333,-16.286667],[49.8325,-16.308613],[49.825829,-16.33889],[49.824997,-16.347778],[49.825554,-16.365559],[49.830276,-16.395279],[49.834442,-16.41639],[49.843887,-16.42417],[49.853882,-16.42417],[49.859444,-16.43445],[49.86305,-16.45528],[49.862778,-16.47389],[49.84861,-16.554169],[49.84583,-16.565834],[49.799438,-16.64167],[49.791939,-16.65139],[49.772499,-16.67195],[49.753883,-16.68972],[49.74305,-16.69722],[49.724159,-16.70583],[49.71916,-16.71472],[49.717499,-16.72389],[49.716942,-16.73278],[49.720833,-16.75695],[49.736664,-16.78639],[49.74305,-16.796112],[49.75,-16.80584],[49.75944,-16.81417],[49.779442,-16.826115],[49.788605,-16.83028],[49.63805,-16.8875],[49.628052,-16.88972],[49.617218,-16.894169],[49.60694,-16.90056],[49.596939,-16.908611],[49.590271,-16.919445],[49.53166,-17.04639],[49.428886,-17.29723],[49.422775,-17.31583],[49.42055,-17.326115],[49.418884,-17.34389],[49.42166,-17.362503],[49.435272,-17.381947],[49.453049,-17.41083],[49.456383,-17.42],[49.475273,-17.48695],[49.488609,-17.55445],[49.50972,-17.678337],[49.511108,-17.68944],[49.510277,-17.711391],[49.501106,-17.771114],[49.494995,-17.79389],[49.48167,-17.83139],[49.455551,-17.91584],[49.445831,-17.94806],[49.433327,-17.99695],[49.414444,-18.0725],[49.38416,-18.21389],[49.372215,-18.31278],[49.370827,-18.32528],[49.368332,-18.35139],[49.30416,-18.53722],[49.231384,-18.703892],[49.16777,-18.879448],[49.143883,-18.940281],[49.130272,-18.97056],[49.097496,-19.03472],[49.075272,-19.06889],[49.066383,-19.088058],[49.031662,-19.194447],[49.024994,-19.215836],[49.018051,-19.25083],[49.01416,-19.276112],[49.00249,-19.334446],[48.996384,-19.35639],[48.98888,-19.37694],[48.956383,-19.457779],[48.921944,-19.53167],[48.892776,-19.58861],[48.883049,-19.60778],[48.875549,-19.628334],[48.869438,-19.65028],[48.861664,-19.68445],[48.84916,-19.74278],[48.844444,-19.766113],[48.83361,-19.825279],[48.813049,-19.93306],[48.778053,-20.03917],[48.759163,-20.09111],[48.750832,-20.11111],[48.722221,-20.16722],[48.705826,-20.193058],[48.69138,-20.221668],[48.654442,-20.298336],[48.636383,-20.33667],[48.616661,-20.38806],[48.607788,-20.416176],[48.601105,-20.43944],[48.585,-20.493614],[48.539444,-20.645557],[48.521111,-20.6975],[48.467773,-20.914169],[48.456383,-20.985558],[48.370552,-21.29222],[48.304161,-21.47972],[48.217773,-21.745003],[48.140831,-21.923058],[48.120277,-21.95917],[48.110275,-21.978336],[48.050827,-22.110558],[48.015274,-22.19111],[48.003052,-22.22056],[47.919716,-22.43195],[47.908051,-22.461945],[47.900833,-22.48584],[47.89444,-22.513889],[47.864716,-22.669445],[47.847771,-22.78167],[47.8425,-22.82667],[47.839722,-22.849445],[47.837219,-22.867226],[47.831665,-22.88834],[47.810555,-22.968334],[47.802773,-22.99778],[47.75972,-23.13834],[47.712494,-23.339725],[47.628883,-23.56167],[47.616943,-23.62195],[47.615829,-23.643059],[47.612495,-23.664448],[47.58722,-23.79417],[47.575829,-23.83917],[47.563332,-23.8725],[47.498055,-24.015],[47.488052,-24.030834],[47.426178,-24.124126],[47.40361,-24.17778],[47.339439,-24.306114],[47.31972,-24.412502],[47.31555,-24.458889],[47.313049,-24.47111],[47.303329,-24.50389],[47.281662,-24.557503],[47.19861,-24.74139],[47.148605,-24.813614],[47.135277,-24.831669],[47.131386,-24.84139],[47.12888,-24.85083],[47.12722,-24.86111],[47.126938,-24.870556],[47.127495,-24.88028],[47.12944,-24.89056],[47.133888,-24.899445],[47.136665,-24.908337],[47.137772,-24.91722],[47.133049,-24.928059],[47.094444,-24.97389],[46.906387,-25.06861],[46.73027,-25.167503],[46.719444,-25.17139],[46.64666,-25.191669],[46.58416,-25.18278],[46.54417,-25.175003],[46.52333,-25.16695],[46.503052,-25.16167],[46.41333,-25.16167],[46.336662,-25.17361],[46.290833,-25.18611],[46.258049,-25.19694],[46.193329,-25.219448],[46.171944,-25.226948],[45.963051,-25.31],[45.92305,-25.328892],[45.904716,-25.339447],[45.794441,-25.403336],[45.739166,-25.43611],[45.713608,-25.453892],[45.698608,-25.46806],[45.67055,-25.49722],[45.65333,-25.50917],[45.571663,-25.551392],[45.550278,-25.562225],[45.530273,-25.56861],[45.48778,-25.57556],[45.462494,-25.57833],[45.214722,-25.588337],[45.12944,-25.553059],[45.125275,-25.54417],[45.11805,-25.535],[45.098053,-25.52084],[44.914719,-25.4025],[44.808327,-25.335556],[44.78249,-25.321114],[44.769722,-25.31667],[44.747498,-25.31056],[44.711388,-25.30389],[44.587776,-25.29389],[44.522217,-25.28639],[44.443329,-25.27278],[44.35583,-25.255558],[44.34916,-25.246391],[44.297218,-25.16806],[44.293327,-25.15778],[44.303055,-25.15861],[44.323051,-25.167503],[44.3325,-25.17667],[44.349998,-25.194447],[44.368607,-25.215557],[44.38916,-25.23278],[44.39916,-25.230278],[44.407776,-25.220837],[44.411942,-25.21167],[44.401939,-25.19334],[44.337219,-25.153057],[44.184441,-25.069168],[44.174721,-25.064724],[44.162773,-25.05945],[44.15028,-25.055836],[44.139717,-25.05389],[44.12971,-25.057781],[44.11972,-25.06278],[44.10833,-25.061668],[44.0975,-25.05445],[44.032219,-25.004448],[44.01722,-24.985279],[44.016937,-24.97639],[44.023048,-24.95834],[44.021942,-24.944447],[44.016388,-24.92028],[44.011108,-24.89972],[44.005272,-24.88028],[43.993889,-24.86139],[43.985275,-24.85028],[43.9675,-24.83028],[43.953888,-24.81084],[43.925827,-24.761112],[43.91777,-24.74111],[43.91333,-24.7225],[43.915276,-24.71278],[43.928886,-24.688057],[43.931107,-24.677223],[43.931389,-24.668335],[43.924438,-24.638615],[43.921104,-24.629448],[43.90583,-24.59889],[43.834442,-24.50528],[43.819443,-24.491669],[43.797493,-24.47722],[43.787216,-24.47139],[43.765831,-24.4625],[43.755554,-24.45639],[43.732216,-24.438614],[43.711937,-24.41722],[43.691666,-24.38444],[43.67139,-24.331669],[43.664162,-24.31139],[43.664444,-24.188892],[43.664719,-24.043613],[43.662216,-23.86861],[43.65416,-23.82917],[43.652222,-23.81972],[43.648888,-23.810001],[43.624992,-23.76167],[43.636383,-23.65778],[43.638329,-23.647781],[43.647217,-23.62806],[43.652222,-23.61945],[43.673332,-23.613892],[43.703888,-23.60278],[43.735275,-23.58889],[43.745827,-23.58167],[43.75,-23.573059],[43.760551,-23.4725],[43.759438,-23.463612],[43.753052,-23.452225],[43.745277,-23.44306],[43.687492,-23.395],[43.646385,-23.36195],[43.63694,-23.3575],[43.630554,-23.347504],[43.614998,-23.31139],[43.611664,-23.30167],[43.606941,-23.278057],[43.605827,-23.26583],[43.597496,-23.17083],[43.596939,-23.150837],[43.597771,-23.12945],[43.596939,-23.09917],[43.588051,-23.07833],[43.578331,-23.06778],[43.555832,-23.04889],[43.520554,-23.023056],[43.504715,-23.01278],[43.492775,-23.008057],[43.482216,-22.9975],[43.392776,-22.89584],[43.375832,-22.875278],[43.366104,-22.86195],[43.361938,-22.852779],[43.35805,-22.841667],[43.348885,-22.800835],[43.31721,-22.659447],[43.28611,-22.498058],[43.238884,-22.282501],[43.260826,-22.21334],[43.25055,-22.162781],[43.24721,-22.152225],[43.236824,-22.06874],[43.27916,-21.908337],[43.314438,-21.88278],[43.328049,-21.84639],[43.332771,-21.776947],[43.33416,-21.75861],[43.421104,-21.67056],[43.431107,-21.66389],[43.443054,-21.661114],[43.452499,-21.66222],[43.47222,-21.672501],[43.4725,-21.66361],[43.469444,-21.59806],[43.46611,-21.47639],[43.46611,-21.463337],[43.476387,-21.395557],[43.478333,-21.38333],[43.481941,-21.372501],[43.500549,-21.333889],[43.544998,-21.30139],[43.57972,-21.28056],[43.59166,-21.27889],[43.616104,-21.27639],[43.664993,-21.27222],[43.69888,-21.27195],[43.712219,-21.27389],[43.722221,-21.276947],[43.73027,-21.283611],[43.741104,-21.286114],[43.768326,-21.270557],[43.776665,-21.26472],[43.802498,-21.23333],[43.808609,-21.225281],[43.81972,-21.207226],[43.84111,-21.15695],[43.861382,-21.08],[43.87555,-21.00889],[43.878883,-20.94583],[43.897774,-20.879169],[43.90666,-20.85945],[43.911659,-20.85],[43.94944,-20.78806],[43.968048,-20.76417],[43.991943,-20.74361],[44.002777,-20.74611],[44.01527,-20.74583],[44.023605,-20.74],[44.03611,-20.72389],[44.04166,-20.715],[44.07944,-20.651947],[44.100555,-20.600834],[44.104164,-20.59],[44.176109,-20.441948],[44.266388,-20.29444],[44.340271,-20.15722],[44.353333,-20.13722],[44.361107,-20.12861],[44.370827,-20.11972],[44.39,-20.103336],[44.399719,-20.09611],[44.42889,-20.077778],[44.437492,-20.06861],[44.47972,-19.98056],[44.482216,-19.97028],[44.48333,-19.961391],[44.482498,-19.94139],[44.473328,-19.88195],[44.47055,-19.87278],[44.440277,-19.84556],[44.430832,-19.841114],[44.42139,-19.84139],[44.410271,-19.840279],[44.399719,-19.8325],[44.387497,-19.81222],[44.371666,-19.78195],[44.369995,-19.772224],[44.438332,-19.55722],[44.442215,-19.54834],[44.45472,-19.54472],[44.464996,-19.545002],[44.476105,-19.542503],[44.482216,-19.53167],[44.484161,-19.52222],[44.482773,-19.502781],[44.46916,-19.438335],[44.438606,-19.378891],[44.42555,-19.35778],[44.35166,-19.25139],[44.336388,-19.230003],[44.286385,-19.16917],[44.265671,-19.14494],[44.26194,-19.14],[44.231384,-19.081112],[44.227493,-19.070557],[44.227219,-19.06167],[44.231384,-18.973614],[44.247772,-18.966114],[44.249443,-18.957226],[44.261665,-18.85306],[44.261383,-18.841946],[44.25694,-18.820557],[44.241661,-18.770279],[44.23111,-18.74111],[44.19916,-18.6675],[44.163605,-18.591114],[44.158882,-18.582226],[44.11388,-18.51361],[44.105553,-18.50167],[44.082222,-18.470001],[44.072495,-18.45917],[44.063332,-18.45139],[44.054161,-18.44195],[44.04055,-18.423058],[44.035828,-18.4125],[44.035553,-18.40361],[44.04305,-18.34028],[44.04583,-18.240559],[44.04361,-18.201389],[44.03944,-18.167503],[44.034164,-18.135559],[44.03166,-18.126667],[44.026108,-18.116669],[44.023048,-18.10778],[44.01194,-18.05639],[44.003609,-17.980278],[44.001389,-17.95889],[44.001106,-17.94861],[44.002777,-17.929169],[44.004715,-17.9175],[44.013611,-17.8775],[44.021942,-17.865837],[44.026939,-17.84695],[44.030273,-17.8175],[44.031944,-17.77556],[44.031387,-17.75695],[43.993607,-17.69278],[43.988052,-17.683613],[43.969444,-17.66222],[43.959717,-17.652225],[43.943329,-17.6325],[43.928886,-17.61195],[43.924438,-17.600834],[43.921661,-17.58056],[43.922775,-17.57028],[43.92944,-17.512222],[43.931389,-17.50056],[43.937218,-17.479446],[43.94722,-17.45084],[43.9525,-17.43944],[43.964165,-17.421112],[44.039719,-17.317223],[44.13777,-17.17639],[44.182495,-17.09806],[44.215271,-17.03722],[44.275276,-16.91972],[44.346107,-16.79695],[44.35166,-16.788334],[44.363327,-16.779167],[44.373604,-16.772503],[44.383331,-16.763889],[44.392494,-16.753334],[44.432495,-16.703613],[44.437775,-16.69222],[44.46583,-16.506668],[44.46611,-16.495834],[44.46333,-16.47778],[44.458611,-16.46667],[44.453331,-16.4575],[44.436943,-16.43333],[44.421944,-16.41306],[44.409721,-16.39333],[44.404442,-16.38278],[44.400551,-16.37361],[44.398605,-16.364723],[44.397217,-16.346111],[44.398888,-16.337223],[44.438889,-16.214725],[44.442772,-16.20389],[44.44944,-16.19528],[44.45916,-16.18445],[44.46139,-16.183334],[44.48888,-16.177223],[44.50027,-16.176392],[44.507217,-16.183334],[44.57305,-16.18695],[44.609444,-16.188335],[44.80305,-16.19972],[44.873604,-16.210281],[45,-16.142685],[45.034439,-16.12056],[45.049995,-16.10778],[45.056664,-16.10056],[45.062492,-16.092503],[45.073326,-16.07417],[45.09111,-16.04945],[45.129997,-16.00389],[45.136665,-15.996389],[45.14472,-15.990557],[45.216942,-15.950279],[45.254715,-15.93139],[45.264999,-15.927502],[45.273888,-15.93278],[45.277222,-15.94306],[45.29361,-16.055557],[45.291107,-16.067223],[45.288605,-16.093334],[45.288605,-16.100281],[45.291664,-16.11056],[45.298607,-16.11778],[45.306664,-16.11778],[45.326942,-16.110279],[45.335548,-16.105003],[45.395554,-16.066948],[45.412773,-16.04139],[45.41111,-16.031113],[45.401108,-16.02667],[45.395832,-16.032686],[45.388611,-16.03389],[45.37444,-16.00639],[45.365829,-15.98778],[45.368332,-15.97889],[45.390549,-15.97333],[45.57249,-15.94917],[45.59416,-15.987501],[45.593605,-15.99861],[45.589165,-16.00806],[45.577217,-16.02417],[45.573326,-16.034447],[45.579437,-16.04222],[45.606941,-16.05528],[45.617775,-16.057503],[45.627495,-16.036667],[45.645271,-15.90722],[45.645554,-15.894724],[45.643883,-15.883057],[45.71666,-15.791668],[45.739166,-15.79778],[45.807495,-15.81472],[45.82611,-15.81472],[45.834717,-15.809446],[45.868889,-15.78694],[45.87833,-15.78222],[45.91083,-15.773056],[45.921387,-15.7725],[45.9575,-15.78389],[45.956383,-15.80444],[45.951942,-15.835279],[45.955826,-15.845001],[45.964996,-15.85333],[46.063606,-15.87195],[46.072495,-15.86111],[46.07194,-15.810835],[46.070549,-15.78417],[46.060555,-15.78306],[46.048882,-15.78889],[46.038605,-15.798334],[46.031105,-15.80778],[46.02166,-15.81639],[46.011383,-15.82389],[46.003326,-15.813334],[46.006386,-15.80444],[46.013054,-15.79361],[46.027771,-15.775278],[46.048332,-15.75667],[46.068886,-15.74],[46.07972,-15.73222],[46.09944,-15.720278],[46.120552,-15.71111],[46.151382,-15.70361],[46.171944,-15.70361],[46.20194,-15.705],[46.232498,-15.714169],[46.246109,-15.759724],[46.23555,-15.80611],[46.24667,-15.846945],[46.257217,-15.878334],[46.265831,-15.90111],[46.28,-15.9325],[46.293053,-15.951946],[46.302216,-15.961113],[46.32111,-15.97333],[46.33111,-15.97722],[46.477219,-15.966112],[46.478333,-15.95667],[46.44722,-15.88583],[46.413055,-15.85389],[46.38472,-15.8375],[46.37555,-15.83389],[46.34,-15.778057],[46.304443,-15.71722],[46.302498,-15.7075],[46.308884,-15.68639],[46.312775,-15.67472],[46.329163,-15.645],[46.331665,-15.63417],[46.338333,-15.624723],[46.347221,-15.615835],[46.462776,-15.50611],[46.47361,-15.498056],[46.483887,-15.493334],[46.574165,-15.44333],[46.705276,-15.36472],[46.833611,-15.268057],[46.84166,-15.261946],[46.855553,-15.24778],[46.880272,-15.23056],[46.889442,-15.225834],[46.94722,-15.198891],[46.95916,-15.197224],[46.96833,-15.202223],[46.974716,-15.21],[47.076385,-15.334446],[47.07194,-15.34389],[47.05499,-15.368891],[47.048332,-15.37639],[47.04055,-15.3825],[47.013054,-15.3975],[47.007217,-15.405834],[46.962219,-15.502224],[46.958885,-15.51333],[46.95694,-15.539446],[46.95694,-15.546112],[46.959442,-15.55806],[46.969444,-15.55472],[46.974716,-15.545834],[47.04222,-15.49361],[47.093048,-15.47972],[47.129013,-15.44518],[47.14268,-15.44464],[47.180779,-15.458771],[47.20666,-15.44846],[47.223618,-15.44846],[47.237835,-15.42167],[47.235645,-15.41292],[47.212219,-15.413334],[47.196106,-15.40139],[47.111938,-15.305557],[47.083054,-15.260279],[47.059715,-15.223333],[47.05805,-15.198057],[47.05833,-15.185],[47.063049,-15.17528],[47.080551,-15.150278],[47.105553,-15.119167],[47.111938,-15.11195],[47.222771,-14.993891],[47.310555,-14.9125],[47.299995,-14.875278],[47.28833,-14.858612],[47.285431,-14.85286],[47.29277,-14.84222],[47.31638,-14.809723],[47.34166,-14.777779],[47.389717,-14.726667],[47.454994,-14.665279],[47.465553,-14.663612],[47.500832,-14.71167],[47.50639,-14.82695],[47.49944,-14.848333],[47.494995,-14.857779],[47.47666,-14.88139],[47.470276,-14.888889],[47.448326,-14.90972],[47.436104,-14.92528],[47.412498,-14.97139],[47.410828,-14.9825],[47.409164,-15.086945],[47.41111,-15.09861],[47.416664,-15.10694],[47.427216,-15.11056],[47.438606,-15.10806],[47.448051,-15.10333],[47.48333,-15.082779],[47.491943,-15.07667],[47.56694,-14.950279],[47.613052,-14.85722],[47.624992,-14.82722],[47.63916,-14.7875],[47.643608,-14.778057],[47.687775,-14.701946],[47.698608,-14.68361],[47.811275,-14.60389],[47.968605,-14.621668],[47.978607,-14.625834],[47.984161,-14.634167],[47.99555,-14.6625],[47.998886,-14.68667],[47.997772,-14.70639],[47.991661,-14.728334],[47.989441,-14.740002],[47.987495,-14.76],[47.992493,-14.76889],[48.001663,-14.76556],[48.013329,-14.749445],[48.020828,-14.72806],[48.022499,-14.71583],[48.022499,-14.708889],[48.01722,-14.63945],[48.013329,-14.63111],[48.00694,-14.62278],[47.941109,-14.57583],[47.931938,-14.57083],[47.91917,-14.56917],[47.906387,-14.57056],[47.895828,-14.573612],[47.887215,-14.57917],[47.827888,-14.590891],[47.755554,-14.60361],[47.74638,-14.60278],[47.720833,-14.558334],[47.70166,-14.44278],[47.69944,-14.42056],[47.699715,-14.40833],[47.713882,-14.35722],[47.717773,-14.34694],[47.778885,-14.26139],[47.82611,-14.230835],[47.833885,-14.23695],[47.85278,-14.246389],[47.875275,-14.25222],[47.927773,-14.25389],[47.935715,-14.226223],[47.941551,-14.215223],[47.948387,-14.188557],[47.949387,-14.18106],[47.947384,-14.17489],[47.942497,-14.13389],[47.935555,-14.128334],[47.919441,-14.115],[47.90416,-14.101112],[47.904442,-14.092779],[47.914162,-14.08889],[47.92555,-14.08889],[47.945831,-14.09833],[47.987221,-14.12028],[47.995827,-14.125834],[48.01111,-14.13833],[48.016663,-14.1475],[48.014999,-14.158335],[47.998722,-14.192112],[47.99605,-14.197945],[47.98772,-14.23144],[47.974442,-14.28472],[47.971382,-14.30667],[47.974716,-14.31695],[47.980827,-14.32445],[47.99305,-14.32695],[48.003052,-14.32278],[48.048332,-14.15556],[48.052498,-14.10611],[48.044716,-14.07917],[48.041107,-14.06889],[48.031403,-14.06341],[48.003883,-14.056667],[47.99472,-14.051668],[47.98638,-14.04611],[47.948051,-14.014723],[47.94194,-14.00639],[47.946388,-13.99667],[47.95916,-13.99556],[47.9725,-13.99639],[47.983055,-13.99472],[48.023048,-13.965],[48.021111,-13.95611],[47.968048,-13.925],[47.949165,-13.91528],[47.926666,-13.909445],[47.910553,-13.897501],[47.90166,-13.87806],[47.88361,-13.82695],[47.87444,-13.788334],[47.872498,-13.776669],[47.89027,-13.651669],[47.892494,-13.63917],[47.897774,-13.616667],[47.905273,-13.59639],[47.912498,-13.589445],[47.922493,-13.585556],[47.931664,-13.589169],[47.94277,-13.59222],[47.955551,-13.59222],[48.019722,-13.581112],[48.02694,-13.57417],[48.04777,-13.550001],[48.045273,-13.54028],[48.037498,-13.53389],[48.02861,-13.52917],[48.023048,-13.52083],[48.03083,-13.514723],[48.037773,-13.514723],[48.063332,-13.518057],[48.071663,-13.523613],[48.152771,-13.60083],[48.165833,-13.663612],[48.174995,-13.71583],[48.179993,-13.754168],[48.186943,-13.76111],[48.241943,-13.80444],[48.252495,-13.808056],[48.287216,-13.808056],[48.30555,-13.79861],[48.31416,-13.79333],[48.321938,-13.78722],[48.335548,-13.773056],[48.355827,-13.60722],[48.355827,-13.60056],[48.352493,-13.589445],[48.346382,-13.581945],[48.335274,-13.56528],[48.33416,-13.554167],[48.34111,-13.547501],[48.35055,-13.54278],[48.425552,-13.525278],[48.50388,-13.515556],[48.50055,-13.444168],[48.536942,-13.425556],[48.645271,-13.441389],[48.656387,-13.444168],[48.66555,-13.44917],[48.682495,-13.439724],[48.721382,-13.42306],[48.732216,-13.42111],[48.73972,-13.427223],[48.79277,-13.36778],[48.798332,-13.354168],[48.80833,-13.286945],[48.815552,-13.21917],[48.81249,-13.19806],[48.81249,-13.19056],[48.823883,-13.12],[48.844719,-13.07778],[48.863609,-13.04111],[48.897217,-12.976946],[48.903053,-12.96889],[48.91805,-12.95611],[48.945549,-12.88722],[48.949165,-12.87694],[48.959442,-12.822224],[48.95694,-12.81139],[48.902496,-12.67389],[48.879715,-12.573057],[48.82222,-12.50722],[48.782219,-12.46583],[48.771111,-12.46028],[48.763329,-12.45667],[48.74472,-12.446945],[48.736382,-12.44111],[48.730827,-12.43417],[48.756386,-12.40306],[48.766388,-12.39917],[48.85083,-12.413334],[48.861938,-12.416113],[48.870277,-12.42306],[48.875549,-12.445],[48.87917,-12.455278],[48.895554,-12.480001],[48.907219,-12.495834],[48.91861,-12.494722],[48.940277,-12.48889],[48.948051,-12.48278],[48.953888,-12.47444],[48.961388,-12.415001],[48.96916,-12.35778],[48.974159,-12.34889],[48.980553,-12.34139],[49.063889,-12.276669],[49.096664,-12.28056],[49.15083,-12.252224],[49.164444,-12.23806],[49.169441,-12.22917],[49.191105,-12.163445],[49.19194,-12.156112],[49.189438,-12.12556],[49.163605,-12.114168],[49.12944,-12.103613],[49.157219,-12.05389],[49.22083,-11.97806],[49.22805,-11.97139],[49.258331,-11.945557],[49.27,-11.94639],[49.27444,-11.947779],[49.283882,-11.95417],[49.29722,-11.964445],[49.30971,-11.98445],[49.320549,-12.00306],[49.347221,-12.06194],[49.356941,-12.09083]]]]}}]}';
    }
}
