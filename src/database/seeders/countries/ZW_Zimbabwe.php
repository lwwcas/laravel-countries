<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class ZW_Zimbabwe extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->name = 'Zimbabwe';
        $this->official_name = 'Republic of Zimbabwe';
        $this->iso_alpha_2 = 'ZW';
        $this->iso_alpha_3 = 'ZWE';
        $this->iso_numeric = '716';
        $this->international_phone = '263';

        $this->languages = ['en','sn','nd'];
        $this->tld = ['.zw'];
        $this->wmo = 'ZW';
        $this->geoname_id = '878675';

        $this->emoji = [
            'img' => '🇿🇼',
            'uCode' => 'U+1F1FF U+1F1FC',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffff00',
                '#ff0000',
                '#000000',
                '#ffffff',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,0',
                '255,0,0',
                '0,0,0',
                '255,255,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '20 00 S',
                'desc' => '-19.000280380249023',
            ],
            'longitude' => [
                'classic' => '30 00 E',
                'desc' => '29.86876106262207',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-15.6',
                'min' => '-22.316667',
            ],
            'longitude' => [
                'max' => '33.05',
                'min' => '25.333333',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"zw"},"geometry":{"type":"Polygon","coordinates":[[[32.987808,-17.265003],[32.990829,-17.300835],[32.991943,-17.306393],[32.994164,-17.310837],[32.998329,-17.314167],[33.017494,-17.324722],[33.033882,-17.337502],[33.041107,-17.344448],[33.04203,-17.356483],[32.956383,-17.495003],[32.954163,-17.500278],[32.955276,-17.505836],[32.960274,-17.520836],[32.971107,-17.550282],[32.97361,-17.554726],[32.981667,-17.561111],[32.986664,-17.563614],[33.026939,-17.576115],[33.029999,-17.580002],[33.039993,-17.597504],[33.041664,-17.602501],[33.04361,-17.620003],[33.041107,-17.638615],[33.014999,-17.745281],[32.996384,-17.809448],[32.983055,-17.809723],[32.977776,-17.81139],[32.970551,-17.818336],[32.968048,-17.823059],[32.953049,-17.877781],[32.95166,-17.883892],[32.946106,-17.975002],[32.95472,-18.041668],[32.962494,-18.073612],[32.96666,-18.083057],[32.977219,-18.102222],[32.987221,-18.119724],[32.988884,-18.124725],[33.000275,-18.17778],[33.001106,-18.183334],[33.000549,-18.190281],[32.995277,-18.199448],[32.971939,-18.226669],[32.96666,-18.235836],[32.969444,-18.246391],[32.974442,-18.25528],[32.977493,-18.259167],[33.019997,-18.30167],[33.050278,-18.328892],[33.070549,-18.344448],[33.073051,-18.348892],[33.071388,-18.352779],[33.023888,-18.456112],[33.01722,-18.463337],[32.998604,-18.480278],[32.993889,-18.48278],[32.950554,-18.504723],[32.940552,-18.509445],[32.920555,-18.511948],[32.909996,-18.516113],[32.888329,-18.530556],[32.888885,-18.568336],[32.889999,-18.574448],[32.90583,-18.613335],[32.949715,-18.690281],[32.928055,-18.767223],[32.924995,-18.773056],[32.918053,-18.780281],[32.909996,-18.786392],[32.899994,-18.791115],[32.886108,-18.791115],[32.869164,-18.787502],[32.84333,-18.778893],[32.837494,-18.777779],[32.830826,-18.7775],[32.817215,-18.779167],[32.790276,-18.788891],[32.707222,-18.82917],[32.701111,-18.836945],[32.699165,-18.944447],[32.699715,-18.951389],[32.708611,-19.007778],[32.712219,-19.018612],[32.71611,-19.021946],[32.721107,-19.023613],[32.739716,-19.025837],[32.76722,-19.025558],[32.780273,-19.023335],[32.791664,-19.02],[32.822777,-19.018612],[32.829437,-19.01889],[32.839165,-19.023056],[32.844719,-19.03167],[32.884163,-19.09528],[32.885826,-19.100834],[32.88472,-19.112503],[32.854996,-19.27417],[32.840271,-19.302502],[32.80722,-19.352779],[32.803886,-19.356392],[32.798882,-19.358612],[32.792496,-19.359726],[32.78833,-19.362782],[32.784721,-19.36639],[32.783607,-19.371391],[32.781387,-19.454723],[32.783051,-19.467781],[32.786385,-19.471668],[32.790833,-19.474167],[32.796104,-19.475834],[32.809998,-19.475834],[32.816383,-19.474724],[32.826385,-19.470001],[32.832222,-19.469448],[32.837219,-19.47139],[32.844444,-19.478336],[32.846939,-19.483059],[32.850555,-19.493893],[32.85305,-19.506111],[32.850555,-19.617779],[32.984718,-19.687225],[33.059441,-19.780281],[33.018883,-19.943336],[32.982773,-20.022224],[32.90416,-20.124168],[32.892494,-20.166389],[32.885551,-20.225281],[32.883331,-20.236389],[32.876106,-20.269447],[32.871666,-20.278614],[32.802498,-20.362782],[32.665833,-20.557224],[32.550827,-20.555],[32.50222,-20.598614],[32.483604,-20.661667],[32.484718,-20.67889],[32.500832,-20.819447],[32.510277,-20.859447],[32.521385,-20.914169],[32.480827,-20.992226],[32.376106,-21.106113],[32.35833,-21.130558],[32.362778,-21.140556],[32.412216,-21.217781],[32.476231,-21.321854],[32.488876,-21.344448],[32.469994,-21.327503],[32.460831,-21.322502],[32.416107,-21.307217],[32.408821,-21.314018],[32.399437,-21.322781],[31.926388,-21.811111],[31.68861,-22.054447],[31.407497,-22.340279],[31.39333,-22.354168],[31.354721,-22.379448],[31.306004,-22.409519],[31.297504,-22.414764],[31.290276,-22.403336],[31.273052,-22.377224],[31.269997,-22.373337],[31.261944,-22.366947],[31.2575,-22.36417],[31.166386,-22.325279],[31.15583,-22.321667],[31.141388,-22.321667],[31.12833,-22.323612],[31.116386,-22.326946],[31.096943,-22.334724],[31.089443,-22.337502],[31.06472,-22.333614],[30.979164,-22.315002],[30.96611,-22.306667],[30.928886,-22.293892],[30.907776,-22.289448],[30.900833,-22.289169],[30.838886,-22.287781],[30.781109,-22.293335],[30.703609,-22.310001],[30.639721,-22.328892],[30.633888,-22.330559],[30.559444,-22.321945],[30.518055,-22.313614],[30.506107,-22.31139],[30.492496,-22.310558],[30.48,-22.313057],[30.460278,-22.323059],[30.425831,-22.333614],[30.407497,-22.33778],[30.367496,-22.343613],[30.306942,-22.345558],[30.294998,-22.343334],[30.031109,-22.237782],[29.945553,-22.194447],[29.932499,-22.188057],[29.908054,-22.194447],[29.900833,-22.195004],[29.893887,-22.194447],[29.834164,-22.176945],[29.828888,-22.175003],[29.810555,-22.164722],[29.726109,-22.139168],[29.669998,-22.136391],[29.450832,-22.163334],[29.438332,-22.165836],[29.373623,-22.19241],[29.361942,-22.176945],[29.267776,-22.077778],[29.256107,-22.066391],[29.241386,-22.073891],[29.223888,-22.078613],[29.21722,-22.079445],[29.188053,-22.08139],[29.174721,-22.08028],[29.156666,-22.076946],[29.139999,-22.071945],[29.113609,-22.0625],[29.093887,-22.053612],[29.077774,-22.041115],[29.073887,-22.037781],[29.061386,-22.021667],[29.055832,-22.012779],[29.046108,-21.993893],[29.03722,-21.974167],[29.032776,-21.956947],[29.031944,-21.93639],[29.033886,-21.911392],[29.037777,-21.894726],[29.041111,-21.884445],[29.048611,-21.870834],[29.065552,-21.845558],[29.074989,-21.833216],[29.078331,-21.830002],[29.081181,-21.82539],[29.080627,-21.82098],[29.076111,-21.81139],[29.072777,-21.807224],[29.060555,-21.798058],[28.993332,-21.771389],[28.980831,-21.769726],[28.958611,-21.770557],[28.951942,-21.771667],[28.93111,-21.770836],[28.919167,-21.768612],[28.868053,-21.754448],[28.858887,-21.749168],[28.648888,-21.650558],[28.643608,-21.648613],[28.574165,-21.632225],[28.568054,-21.631111],[28.555553,-21.633614],[28.526386,-21.648056],[28.513332,-21.656948],[28.50972,-21.660278],[28.504719,-21.662781],[28.498055,-21.662224],[28.468052,-21.656113],[28.456944,-21.653057],[28.408054,-21.630558],[28.380833,-21.615559],[28.350555,-21.602501],[28.288609,-21.587223],[28.281944,-21.58667],[28.262775,-21.59],[28.238331,-21.595558],[28.202774,-21.596668],[28.161942,-21.593613],[28.054722,-21.577503],[28.042774,-21.575001],[28.015831,-21.566113],[28.012775,-21.56139],[28.007774,-21.545559],[27.972775,-21.445278],[27.968052,-21.435558],[27.941944,-21.383335],[27.899719,-21.308613],[27.84861,-21.23167],[27.839165,-21.219448],[27.835552,-21.216114],[27.779999,-21.16917],[27.751663,-21.154724],[27.747219,-21.152225],[27.739441,-21.145557],[27.731941,-21.138058],[27.722775,-21.125835],[27.688053,-21.075279],[27.685555,-21.070557],[27.685276,-21.063614],[27.68972,-20.934723],[27.693054,-20.869167],[27.693607,-20.862782],[27.696388,-20.858612],[27.707222,-20.848057],[27.712776,-20.839725],[27.726944,-20.791946],[27.730831,-20.748337],[27.726387,-20.548889],[27.724163,-20.522781],[27.718609,-20.513889],[27.713165,-20.506432],[27.706387,-20.49778],[27.702774,-20.494446],[27.693607,-20.48917],[27.68861,-20.487225],[27.682499,-20.485836],[27.615276,-20.471668],[27.609444,-20.470558],[27.602776,-20.47139],[27.516388,-20.476391],[27.432499,-20.472225],[27.363888,-20.465557],[27.35722,-20.465],[27.344719,-20.467224],[27.338886,-20.468891],[27.323055,-20.474724],[27.293888,-20.48917],[27.287453,-20.494965],[27.290833,-20.454723],[27.29583,-20.385281],[27.298885,-20.315002],[27.298885,-20.308056],[27.290554,-20.241669],[27.282497,-20.221111],[27.237499,-20.116947],[27.232777,-20.107224],[27.22361,-20.09528],[27.219997,-20.091667],[27.207222,-20.083057],[27.079166,-20.026669],[26.988888,-20.012222],[26.981667,-20.012222],[26.975555,-20.011112],[26.969719,-20.009724],[26.737499,-19.933891],[26.732498,-19.931946],[26.72361,-19.92667],[26.720554,-19.922501],[26.695835,-19.87788],[26.641109,-19.866947],[26.629444,-19.864445],[26.619164,-19.860558],[26.614719,-19.85778],[26.607777,-19.850559],[26.601944,-19.842224],[26.597221,-19.832779],[26.594166,-19.821945],[26.591663,-19.803337],[26.588608,-19.799168],[26.568672,-19.785217],[26.536663,-19.763615],[26.404442,-19.675835],[26.356667,-19.616947],[26.266941,-19.577225],[26.260277,-19.576668],[26.248608,-19.574169],[26.238331,-19.570004],[26.201385,-19.550003],[26.191944,-19.544724],[26.174164,-19.53389],[26.166111,-19.527779],[26.163055,-19.523891],[26.154163,-19.511669],[26.149441,-19.501392],[26.09861,-19.375557],[26.054722,-19.265003],[26.022221,-19.187778],[26,-19.160835],[25.970276,-19.120003],[25.963333,-19.105556],[25.961941,-19.100281],[25.961941,-19.093334],[25.964165,-19.061668],[25.986675,-18.998287],[25.986942,-18.988056],[25.98,-18.960003],[25.973331,-18.945557],[25.956108,-18.913612],[25.944164,-18.896667],[25.936943,-18.889725],[25.874722,-18.846668],[25.865833,-18.841393],[25.796665,-18.711945],[25.718887,-18.591393],[25.661663,-18.535835],[25.603886,-18.480835],[25.599442,-18.478336],[25.53083,-18.403614],[25.521942,-18.391392],[25.516666,-18.382504],[25.512218,-18.37278],[25.506386,-18.351112],[25.500832,-18.328335],[25.479443,-18.274445],[25.449997,-18.220001],[25.401943,-18.134724],[25.39333,-18.122501],[25.388885,-18.119724],[25.36861,-18.111946],[25.364166,-18.109169],[25.322777,-18.080002],[25.314999,-18.073891],[25.309166,-18.065834],[25.276665,-18.007778],[25.274441,-18.003056],[25.241386,-17.924446],[25.239166,-17.913059],[25.236664,-17.894447],[25.239441,-17.863056],[25.244164,-17.847225],[25.264431,-17.80225],[25.312496,-17.832226],[25.326664,-17.840279],[25.332222,-17.842503],[25.345833,-17.845001],[25.41111,-17.854168],[25.432777,-17.856945],[25.513885,-17.863056],[25.605831,-17.840557],[25.616386,-17.83778],[25.625832,-17.833614],[25.64222,-17.821667],[25.655552,-17.814167],[25.660275,-17.811947],[25.670277,-17.808334],[25.68222,-17.807224],[25.689442,-17.808056],[25.782497,-17.864723],[25.854164,-17.908611],[25.858055,-17.911945],[25.860275,-17.916389],[25.861111,-17.921947],[25.858887,-17.925835],[25.855,-17.92889],[25.845276,-17.929726],[25.841942,-17.932224],[25.840553,-17.938057],[25.842777,-17.94278],[25.859722,-17.973335],[25.863609,-17.976669],[25.904442,-17.988892],[25.951664,-18.002502],[25.964443,-18.005558],[25.971664,-18.00639],[25.98222,-18.003613],[26.092777,-17.967224],[26.123608,-17.931393],[26.190552,-17.901947],[26.23,-17.902779],[26.361664,-17.931114],[26.429443,-17.950001],[26.563889,-17.994446],[26.572777,-18.000278],[26.593609,-18.024445],[26.598888,-18.03278],[26.601944,-18.043056],[26.60611,-18.046112],[26.610832,-18.048889],[26.689163,-18.075279],[26.696411,-18.076126],[26.702633,-18.075562],[26.706104,-18.072723],[26.725555,-18.049725],[26.740555,-18.036392],[26.749443,-18.031113],[26.841389,-18.000557],[26.888054,-17.985836],[26.943886,-17.974445],[26.996109,-17.966946],[27.020741,-17.963085],[27.038055,-17.959446],[27.146385,-17.861115],[27.149719,-17.857224],[27.151943,-17.851948],[27.152775,-17.84639],[27.143608,-17.816113],[27.143608,-17.810001],[27.148609,-17.800003],[27.347775,-17.575279],[27.519695,-17.423939],[27.609165,-17.34528],[27.619164,-17.337223],[27.638885,-17.224724],[27.70583,-17.128056],[27.807499,-16.983334],[27.825275,-16.959167],[28.025833,-16.873089],[28.138611,-16.823612],[28.259998,-16.724167],[28.585552,-16.590279],[28.74472,-16.558056],[28.750553,-16.557503],[28.755833,-16.555836],[28.759441,-16.552223],[28.812775,-16.488056],[28.818886,-16.479446],[28.824444,-16.470558],[28.826664,-16.465],[28.850555,-16.399723],[28.854164,-16.388336],[28.855831,-16.374447],[28.855831,-16.368336],[28.853611,-16.357502],[28.848888,-16.348614],[28.845554,-16.344723],[28.841663,-16.335281],[28.837776,-16.306946],[28.837219,-16.301392],[28.847775,-16.160004],[28.85833,-16.0625],[28.860554,-16.049446],[28.864719,-16.038891],[28.867496,-16.034168],[28.91972,-15.978889],[28.927219,-15.972223],[28.931942,-15.969168],[28.943222,-15.96373],[28.988888,-15.951946],[29.07972,-15.889723],[29.241108,-15.779724],[29.250275,-15.775002],[29.337498,-15.739723],[29.352776,-15.733612],[29.563332,-15.662224],[29.574444,-15.660002],[29.58083,-15.660002],[29.595276,-15.66139],[29.601387,-15.662779],[29.623608,-15.670834],[29.630833,-15.671667],[29.656109,-15.670834],[29.728054,-15.648056],[29.799442,-15.624445],[29.819721,-15.617779],[29.831387,-15.616112],[29.844444,-15.616112],[30.153053,-15.631111],[30.166664,-15.631945],[30.258053,-15.639446],[30.264442,-15.640835],[30.293686,-15.650362],[30.3475,-15.659168],[30.353054,-15.660002],[30.35833,-15.658335],[30.378052,-15.650557],[30.391666,-15.64389],[30.415756,-15.631872],[30.417292,-15.642143],[30.421944,-16.001945],[30.422775,-16.009167],[30.820831,-16.004448],[31.07111,-16.015278],[31.137497,-15.995001],[31.143608,-15.994167],[31.157219,-15.994722],[31.276665,-16.018612],[31.311943,-16.032501],[31.340832,-16.067501],[31.34333,-16.078056],[31.342499,-16.091114],[31.344997,-16.095558],[31.400833,-16.146389],[31.423885,-16.161114],[31.428608,-16.163612],[31.51083,-16.18639],[31.553333,-16.194725],[31.559166,-16.195278],[31.570274,-16.192223],[31.583885,-16.19278],[31.66222,-16.198612],[31.708332,-16.20639],[31.721943,-16.214725],[31.782219,-16.260834],[31.899441,-16.355556],[31.902775,-16.359447],[31.905277,-16.370003],[31.904442,-16.376945],[31.90472,-16.395836],[31.906387,-16.413334],[31.908054,-16.418335],[31.925552,-16.423336],[31.983055,-16.43528],[32.048332,-16.447781],[32.062775,-16.449169],[32.075829,-16.449169],[32.093887,-16.447224],[32.156105,-16.441391],[32.220833,-16.439167],[32.240273,-16.438892],[32.254715,-16.440281],[32.293053,-16.448334],[32.353607,-16.463612],[32.377777,-16.470001],[32.407219,-16.478336],[32.579994,-16.545834],[32.701111,-16.600834],[32.708328,-16.60778],[32.709999,-16.619167],[32.72805,-16.693611],[32.767464,-16.71804],[32.799438,-16.718334],[32.923332,-16.703892],[32.928604,-16.702503],[32.934998,-16.702225],[32.98114,-16.709053],[32.974998,-16.746113],[32.972221,-16.758335],[32.966942,-16.77528],[32.95916,-16.796947],[32.948326,-16.822781],[32.938606,-16.842224],[32.926666,-16.859169],[32.912773,-16.874447],[32.895828,-16.893059],[32.888611,-16.900002],[32.864998,-16.918613],[32.917496,-17.054726],[32.934715,-17.085556],[32.96833,-17.147503],[32.978607,-17.177502],[32.98111,-17.188335],[32.987221,-17.227779],[32.988609,-17.252224],[32.987808,-17.265003]]]}}]}';
    }
}
