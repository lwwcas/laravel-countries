<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MW_Malawi extends CountrySeeder
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
        $this->name = 'Malawi';
        $this->official_name = 'Republic of Malawi';
        $this->iso_alpha_2 = 'MW';
        $this->iso_alpha_3 = 'MWI';
        $this->iso_numeric = '454';
        $this->international_phone = '265';

        $this->languages = ['en','ny'];
        $this->tld = ['.mw'];
        $this->wmo = 'MW';
        $this->geoname_id = '927384';

        $this->emoji = [
            'img' => '🇲🇼',
            'uCode' => 'U+1F1F2 U+1F1FC',
        ];
        $this->color = [
            'hex' => [
                '#000000',
                '#ff0000',
                '#008000',
            ],
            'rgb' => [
                '0,0,0',
                '255,0,0',
                '0,128,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '13 30 S',
                'desc' => '-13.523577690124512',
            ],
            'longitude' => [
                'classic' => '34 00 E',
                'desc' => '33.83546447753906',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-5',
                'min' => '-17.15',
            ],
            'longitude' => [
                'max' => '37',
                'min' => '32.716667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mw"},"geometry":{"type":"MultiPolygon","coordinates":[[[[34.732216,-12.09556],[34.726105,-12.09639],[34.716385,-12.09306],[34.70888,-12.0875],[34.706108,-12.082779],[34.70472,-12.07833],[34.716385,-12.04417],[34.723885,-12.032778],[34.726662,-12.031946],[34.748604,-12.036667],[34.752777,-12.039446],[34.75471,-12.04417],[34.748055,-12.079723],[34.747215,-12.08417],[34.744438,-12.088335],[34.736938,-12.09361],[34.732216,-12.09556]]],[[[34.623886,-12.036667],[34.618332,-12.03722],[34.602776,-12.01195],[34.604721,-12.00722],[34.608887,-12.00445],[34.613609,-12.00306],[34.61972,-12.00306],[34.623886,-12.005835],[34.63,-12.0125],[34.631386,-12.01806],[34.631386,-12.02389],[34.63,-12.02917],[34.62722,-12.033335],[34.623886,-12.036667]]],[[[33.13472,-9.49417],[33.192497,-9.50917],[33.20472,-9.507223],[33.208885,-9.505],[33.254715,-9.49222],[33.30194,-9.484167],[33.30888,-9.484167],[33.314438,-9.48556],[33.322495,-9.49028],[33.393883,-9.53806],[33.400833,-9.54556],[33.40361,-9.54972],[33.414444,-9.57139],[33.421387,-9.585556],[33.423882,-9.60306],[33.426109,-9.607779],[33.428886,-9.61195],[33.437775,-9.61583],[33.484444,-9.62195],[33.496109,-9.6225],[33.508888,-9.62195],[33.529442,-9.61528],[33.533607,-9.6125],[33.549438,-9.595001],[33.578888,-9.584723],[33.75583,-9.582779],[33.769997,-9.5875],[33.87138,-9.65972],[33.900276,-9.68417],[33.91803,-9.705812],[33.919609,-9.70766],[33.939438,-9.69278],[33.946106,-9.68611],[33.953049,-9.673334],[33.958611,-9.62861],[33.959999,-9.61056],[33.960548,-9.598333],[33.958611,-9.5875],[33.953049,-9.579445],[33.949715,-9.576113],[33.948326,-9.57056],[33.948326,-9.557222],[33.95027,-9.54639],[33.957222,-9.526669],[33.997498,-9.48944],[34.002495,-9.487501],[34.013329,-9.48472],[34.039444,-9.482779],[34.04361,-9.48472],[34.07444,-9.50778],[34.13636,-9.57117],[34.17638,-9.603613],[34.205826,-9.627501],[34.32527,-9.73278],[34.333328,-9.745001],[34.334717,-9.750278],[34.373886,-9.81167],[34.426666,-9.88139],[34.48277,-9.95139],[34.49638,-9.96306],[34.504715,-9.975],[34.5225,-10.01083],[34.526665,-10.020279],[34.533607,-10.04056],[34.53611,-10.05139],[34.573326,-10.346668],[34.56916,-10.36778],[34.565552,-10.39667],[34.565552,-10.40944],[34.575829,-10.51667],[34.58022,-10.534466],[34.580826,-10.53889],[34.584999,-10.56167],[34.621109,-10.60694],[34.649994,-10.64194],[34.652771,-10.64583],[34.656944,-10.65472],[34.658882,-10.67361],[34.66305,-10.72889],[34.66305,-10.761112],[34.649994,-10.890278],[34.643051,-10.921946],[34.639717,-10.93139],[34.62722,-10.95167],[34.600555,-10.97917],[34.59861,-10.98389],[34.593048,-11.01667],[34.5925,-11.022223],[34.593887,-11.02833],[34.613609,-11.105001],[34.614998,-11.10945],[34.621941,-11.12361],[34.628052,-11.13111],[34.63222,-11.13389],[34.641106,-11.137779],[34.653328,-11.145279],[34.707497,-11.19694],[34.710274,-11.20111],[34.799438,-11.33139],[34.80555,-11.332224],[34.85972,-11.35417],[34.867218,-11.360279],[34.890549,-11.383057],[34.955551,-11.47722],[34.959717,-11.486668],[34.964439,-11.50889],[34.96673,-11.572111],[34.95777,-11.5725],[34.890549,-11.573891],[34.703331,-11.57583],[34.626106,-11.57583],[34.623886,-11.580557],[34.623329,-11.58528],[34.625275,-11.60195],[34.62722,-11.606668],[34.631386,-11.62278],[34.63222,-11.62889],[34.634163,-11.66722],[34.63361,-11.69195],[34.62944,-11.714169],[34.619164,-11.74917],[34.614441,-11.763889],[34.610275,-11.7725],[34.60611,-11.78111],[34.554161,-11.869722],[34.55138,-11.87389],[34.514999,-11.923334],[34.475273,-11.97556],[34.469719,-11.98306],[34.464165,-11.991112],[34.41083,-12.08083],[34.387497,-12.12306],[34.381386,-12.13667],[34.375275,-12.155834],[34.371109,-12.177502],[34.368889,-12.19472],[34.367775,-12.21889],[34.371109,-12.23556],[34.373291,-12.24642],[34.40749,-12.31944],[34.424438,-12.410278],[34.444443,-12.503334],[34.449165,-12.519445],[34.465553,-12.56889],[34.473053,-12.589169],[34.479996,-12.601667],[34.495827,-12.62583],[34.501938,-12.63917],[34.506104,-12.64917],[34.50944,-12.65861],[34.523888,-12.714724],[34.529999,-12.75889],[34.532776,-12.78278],[34.534164,-12.84167],[34.53833,-12.91722],[34.539719,-12.935835],[34.541664,-12.960556],[34.54916,-13.01333],[34.556107,-13.04611],[34.563049,-13.28889],[34.563049,-13.29972],[34.563049,-13.31889],[34.564995,-13.33694],[34.566383,-13.34222],[34.577217,-13.365002],[34.586105,-13.38222],[34.658051,-13.49639],[34.830826,-13.496946],[34.86599,-13.50631],[34.899437,-13.5225],[35.095276,-13.68611],[35.171104,-13.796112],[35.205551,-13.84445],[35.490829,-14.155834],[35.504997,-14.19167],[35.53,-14.25111],[35.544716,-14.269445],[35.821388,-14.60278],[35.872459,-14.65115],[35.87722,-14.656113],[35.87722,-14.668612],[35.877502,-14.69978],[35.87861,-14.77403],[35.881104,-14.885],[35.924164,-14.885557],[35.91777,-14.902224],[35.86805,-15.019724],[35.800278,-15.17778],[35.804443,-15.195557],[35.840195,-15.324121],[35.853882,-15.3725],[35.867218,-15.419445],[35.864441,-15.453611],[35.86312,-15.45836],[35.862495,-15.47639],[35.83166,-15.855],[35.817497,-16.00778],[35.814438,-16.019447],[35.799164,-16.0475],[35.794167,-16.05528],[35.786942,-16.0625],[35.774162,-16.070557],[35.709442,-16.11056],[35.54028,-16.16445],[35.494995,-16.1375],[35.491661,-16.133614],[35.480553,-16.13],[35.448608,-16.12389],[35.435829,-16.12167],[35.429443,-16.12167],[35.41166,-16.12445],[35.402771,-16.129448],[35.296661,-16.220837],[35.293327,-16.22472],[35.28833,-16.23389],[35.274162,-16.30445],[35.254997,-16.40056],[35.251663,-16.45861],[35.245277,-16.47389],[35.237495,-16.48028],[35.19389,-16.506668],[35.14194,-16.54611],[35.1353,-16.553375],[35.156105,-16.599167],[35.16861,-16.621113],[35.176941,-16.627224],[35.190826,-16.633892],[35.213333,-16.641392],[35.22361,-16.645557],[35.227776,-16.648613],[35.255829,-16.677223],[35.27805,-16.70472],[35.302216,-16.80917],[35.289162,-16.86778],[35.282776,-16.96639],[35.296661,-17.015278],[35.30805,-17.06139],[35.306938,-17.09806],[35.306389,-17.105],[35.301941,-17.115],[35.290054,-17.134266],[35.271942,-17.135281],[35.12722,-17.130558],[35.09166,-17.12917],[35.083885,-17.125],[35.054993,-17.03806],[35.052498,-17.02722],[35.053329,-17.020279],[35.057777,-17.010281],[35.064163,-17.00361],[35.07278,-16.997501],[35.09166,-16.98778],[35.108887,-16.977779],[35.126106,-16.96722],[35.133331,-16.960003],[35.13916,-16.95195],[35.143608,-16.941669],[35.14527,-16.92834],[35.146385,-16.84111],[35.143883,-16.831112],[35.137497,-16.822781],[35.128326,-16.816948],[35.115555,-16.81611],[35.082222,-16.823059],[35.07,-16.824722],[35.049438,-16.823891],[35.03805,-16.82028],[35.027496,-16.81583],[35.018326,-16.81028],[35.00222,-16.797779],[34.99472,-16.790836],[34.844444,-16.625278],[34.837494,-16.61778],[34.767494,-16.54639],[34.719994,-16.50806],[34.66,-16.453613],[34.594162,-16.37945],[34.578888,-16.333614],[34.575554,-16.32389],[34.57,-16.315834],[34.562218,-16.308613],[34.553886,-16.30306],[34.543327,-16.29889],[34.531387,-16.295834],[34.518608,-16.293613],[34.50444,-16.292503],[34.492218,-16.294445],[34.473053,-16.29472],[34.462494,-16.29028],[34.454163,-16.284168],[34.44722,-16.277225],[34.440277,-16.26945],[34.43471,-16.261112],[34.410553,-16.205],[34.408607,-16.19334],[34.406387,-16.138058],[34.408607,-16.12583],[34.424995,-16.097504],[34.428604,-16.08667],[34.429718,-16.07445],[34.427773,-16.063614],[34.423882,-16.05389],[34.417496,-16.04639],[34.334999,-15.96139],[34.328049,-15.954445],[34.319717,-15.9475],[34.31055,-15.94195],[34.29166,-15.93195],[34.281105,-15.927502],[34.271942,-15.921946],[34.263611,-15.91639],[34.258888,-15.90861],[34.255554,-15.89917],[34.25444,-15.888889],[34.251106,-15.837778],[34.262772,-15.798334],[34.270828,-15.7875],[34.280273,-15.7775],[34.30055,-15.759445],[34.324165,-15.74361],[34.346939,-15.736668],[34.375832,-15.714169],[34.41861,-15.66639],[34.42472,-15.655001],[34.428329,-15.64417],[34.43833,-15.611668],[34.443329,-15.5475],[34.43805,-15.526945],[34.43388,-15.51722],[34.427773,-15.50694],[34.425278,-15.496668],[34.431938,-15.475],[34.436661,-15.464169],[34.523888,-15.34722],[34.533333,-15.337778],[34.543327,-15.33389],[34.556107,-15.33417],[34.566383,-15.32194],[34.589722,-15.282778],[34.59333,-15.25306],[34.59027,-15.23306],[34.586792,-15.22374],[34.577774,-15.21639],[34.573051,-15.20667],[34.56361,-15.11778],[34.566109,-15.06583],[34.568329,-15.05639],[34.588882,-14.96389],[34.561943,-14.76639],[34.541107,-14.615557],[34.532219,-14.592779],[34.522217,-14.57167],[34.501938,-14.554167],[34.490273,-14.546946],[34.478333,-14.53778],[34.468605,-14.52889],[34.460548,-14.51917],[34.44611,-14.49611],[34.426941,-14.46167],[34.41083,-14.429724],[34.388885,-14.397223],[34.379166,-14.389446],[34.368607,-14.386391],[34.358887,-14.385557],[34.12944,-14.44389],[33.892494,-14.48944],[33.777222,-14.51778],[33.696388,-14.53306],[33.633331,-14.53972],[33.531944,-14.431667],[33.434998,-14.32139],[33.349442,-14.212778],[33.34333,-14.205],[33.303604,-14.148056],[33.301109,-14.1375],[33.257774,-14.03611],[33.222229,-14.012566],[33.213333,-14.00611],[33.205826,-13.99917],[33.19944,-13.991667],[33.189995,-13.973612],[33.17416,-13.93611],[33.169441,-13.927223],[33.161659,-13.922224],[33.083611,-13.97639],[33.074165,-13.98583],[32.989998,-13.934723],[32.899162,-13.82],[32.832771,-13.709723],[32.828888,-13.698612],[32.785828,-13.640556],[32.776108,-13.63695],[32.754166,-13.64194],[32.71,-13.63139],[32.68972,-13.6225],[32.679993,-13.616112],[32.67889,-13.60639],[32.687492,-13.57528],[32.690552,-13.565001],[32.701942,-13.561945],[32.753326,-13.56389],[32.805275,-13.54444],[32.82222,-13.53806],[32.831665,-13.52861],[32.896385,-13.43028],[32.916107,-13.395],[32.92139,-13.38361],[32.977493,-13.22917],[32.987221,-13.146389],[32.985275,-13.134724],[32.986382,-13.09639],[32.992775,-13.03694],[33.002777,-13.00222],[33.010277,-12.981112],[33.020554,-12.96278],[33.028885,-12.94111],[33.034439,-12.91722],[33.035271,-12.910278],[33.03416,-12.898613],[33.03083,-12.88889],[33.025551,-12.88056],[33.016388,-12.875],[32.983604,-12.86389],[32.973328,-12.85806],[32.967773,-12.85056],[32.964722,-12.84],[32.959442,-12.76861],[32.960274,-12.76167],[32.964165,-12.750834],[33.046387,-12.60389],[33.063606,-12.589169],[33.07444,-12.58139],[33.13777,-12.58083],[33.149719,-12.58167],[33.159439,-12.584723],[33.169167,-12.59389],[33.238052,-12.58583],[33.357216,-12.54333],[33.370827,-12.5375],[33.478333,-12.44444],[33.480827,-12.43472],[33.476387,-12.412779],[33.505272,-12.38611],[33.528664,-12.377808],[33.537773,-12.368891],[33.54583,-12.35945],[33.547493,-12.348612],[33.546944,-12.33889],[33.544441,-12.327778],[33.493607,-12.31361],[33.483604,-12.310835],[33.470833,-12.31667],[33.436661,-12.33639],[33.41555,-12.34139],[33.405,-12.342501],[33.39444,-12.34167],[33.38472,-12.338612],[33.374443,-12.33167],[33.363327,-12.32083],[33.35527,-12.30972],[33.273331,-12.144445],[33.271111,-12.13139],[33.270554,-12.121946],[33.27444,-12.07111],[33.278328,-12.05945],[33.283607,-12.04917],[33.305275,-12.016945],[33.312775,-12.00139],[33.315826,-11.991112],[33.332222,-11.897223],[33.330826,-11.74472],[33.325554,-11.618334],[33.32361,-11.607779],[33.313606,-11.58639],[33.30389,-11.578611],[33.284439,-11.570557],[33.273331,-11.569723],[33.26194,-11.57139],[33.25417,-11.520279],[33.243332,-11.42389],[33.244164,-11.41306],[33.247215,-11.40333],[33.26333,-11.40389],[33.29305,-11.368057],[33.339439,-11.30028],[33.39111,-11.21556],[33.400833,-11.19389],[33.40916,-11.17],[33.41166,-11.156389],[33.38444,-11.113056],[33.361107,-11.093334],[33.35083,-11.082224],[33.343605,-11.072224],[33.250275,-10.8975],[33.250549,-10.88667],[33.253609,-10.87639],[33.258888,-10.86611],[33.268883,-10.856112],[33.34416,-10.81389],[33.396942,-10.79861],[33.41777,-10.803057],[33.447777,-10.807222],[33.45916,-10.805557],[33.46833,-10.800835],[33.510826,-10.775557],[33.540276,-10.749445],[33.543327,-10.73778],[33.54222,-10.72611],[33.545273,-10.71389],[33.550278,-10.70583],[33.60472,-10.647779],[33.637772,-10.621113],[33.673607,-10.60333],[33.687218,-10.589169],[33.693054,-10.581112],[33.698883,-10.572224],[33.702278,-10.56186],[33.687492,-10.54861],[33.646561,-10.50074],[33.567497,-10.3925],[33.547493,-10.345835],[33.544167,-10.335556],[33.543884,-10.323057],[33.54583,-10.29639],[33.550552,-10.271112],[33.559441,-10.25139],[33.561104,-10.238335],[33.559441,-10.22722],[33.554718,-10.22028],[33.53388,-10.206112],[33.46166,-10.165279],[33.333611,-10.076113],[33.324165,-10.06778],[33.323051,-10.05611],[33.330826,-9.99361],[33.359444,-9.933056],[33.322495,-9.81111],[33.302498,-9.79889],[33.238609,-9.73139],[33.22666,-9.711113],[33.222496,-9.699446],[33.221382,-9.68972],[33.224442,-9.68],[33.234444,-9.672779],[33.235275,-9.66806],[33.23416,-9.65556],[33.229164,-9.634167],[33.20694,-9.6025],[33.134995,-9.59806],[33.109161,-9.625],[33.07222,-9.631668],[33.024719,-9.63139],[33.012878,-9.631273],[33.004128,-9.6248],[32.99613,-9.618893],[32.948326,-9.482779],[32.945831,-9.471945],[32.943604,-9.45583],[32.939438,-9.41583],[32.940399,-9.405077],[32.940277,-9.403612],[32.94639,-9.396112],[32.967773,-9.38417],[32.997772,-9.373335],[33.00471,-9.380001],[33.016937,-9.395],[33.021851,-9.4045],[33.026428,-9.413361],[33.037498,-9.42472],[33.125832,-9.49028],[33.12944,-9.49278],[33.13472,-9.49417]]]]}}]}';
    }
}
