<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class ML_Mali extends CountrySeeder
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
        $this->name = 'Mali';
        $this->official_name = 'Republic of Mali';
        $this->iso_alpha_2 = 'ML';
        $this->iso_alpha_3 = 'MLI';
        $this->iso_numeric = '466';
        $this->international_phone = '223';

        $this->languages = ['fr'];
        $this->tld = ['.ml'];
        $this->wmo = 'MI';
        $this->geoname_id = '2453866';

        $this->emoji = [
            'img' => '🇲🇱',
            'uCode' => 'U+1F1F2 U+1F1F1',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffff00',
                '#ff0000',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,0',
                '255,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '17 00 N',
                'desc' => '17.35776710510254',
            ],
            'longitude' => [
                'classic' => '4 00 W',
                'desc' => '-3.5273818969726562',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '26',
                'min' => '10.15',
            ],
            'longitude' => [
                'max' => '13',
                'min' => '-12.55',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"ml"},"geometry":{"type":"Polygon","coordinates":[[[-8.53388,11.49391],[-8.547779,11.48],[-8.575001,11.470833],[-8.580557,11.469166],[-8.601946,11.474443],[-8.6075,11.475832],[-8.636112,11.495832],[-8.640001,11.49861],[-8.655279,11.518332],[-8.658056,11.522499],[-8.672501,11.556665],[-8.689419,11.602476],[-8.694723,11.632221],[-8.698612,11.649443],[-8.703056,11.658888],[-8.708612,11.658888],[-8.713612,11.656666],[-8.729445,11.644722],[-8.732779,11.641109],[-8.740835,11.634998],[-8.745001,11.63361],[-8.771112,11.639166],[-8.776669,11.640554],[-8.831667,11.661665],[-8.792778,11.856667],[-8.779724,11.925833],[-8.796904,12.006344],[-8.931948,12.191387],[-8.941669,12.191111],[-8.959169,12.191666],[-8.965002,12.19972],[-8.979496,12.223265],[-8.980558,12.226387],[-8.982225,12.245554],[-8.980558,12.271111],[-8.974447,12.285831],[-8.955835,12.315554],[-8.944725,12.332222],[-8.942503,12.337221],[-8.943613,12.348888],[-8.953058,12.360554],[-8.978336,12.391109],[-8.98167,12.394444],[-9.048058,12.432777],[-9.057781,12.436666],[-9.070837,12.437777],[-9.084724,12.437498],[-9.150557,12.484165],[-9.155556,12.486111],[-9.253056,12.499722],[-9.311676,12.504696],[-9.3575,12.489443],[-9.362223,12.487499],[-9.400558,12.45583],[-9.401114,12.45083],[-9.398891,12.446108],[-9.345835,12.406385],[-9.296667,12.365831],[-9.293612,12.361664],[-9.293056,12.355553],[-9.301991,12.312813],[-9.313334,12.273331],[-9.323612,12.262775],[-9.345835,12.252775],[-9.370556,12.250275],[-9.398056,12.254442],[-9.580278,12.188053],[-9.628334,12.165552],[-9.641111,12.157219],[-9.648056,12.150274],[-9.660833,12.135553],[-9.667223,12.127775],[-9.670279,12.11722],[-9.670279,12.104998],[-9.668612,12.099442],[-9.665556,12.081663],[-9.666389,12.075552],[-9.668335,12.070553],[-9.701946,12.029163],[-9.754723,12.027496],[-9.761112,12.028053],[-9.865219,12.054811],[-9.911945,12.09333],[-10.095837,12.178053],[-10.101669,12.179996],[-10.323893,12.224997],[-10.328892,12.224163],[-10.331669,12.219997],[-10.331669,12.213608],[-10.32917,12.195274],[-10.329725,12.188887],[-10.333059,12.185274],[-10.357225,12.166386],[-10.446947,12.11833],[-10.458891,12.115831],[-10.562778,11.994444],[-10.652748,11.892609],[-10.685001,11.898054],[-10.714724,11.909721],[-10.728615,11.916943],[-10.731947,11.920277],[-10.73667,11.929722],[-10.740559,11.953888],[-10.745003,11.970276],[-10.747225,11.974998],[-10.814722,12.112776],[-10.886667,12.195831],[-10.888613,12.197775],[-10.892223,12.201109],[-10.909723,12.21583],[-10.92889,12.224442],[-10.951668,12.226664],[-10.964724,12.225554],[-11.041389,12.210552],[-11.045,12.20722],[-11.047501,12.203053],[-11.048889,12.197496],[-11.101112,12.117496],[-11.147221,12.047497],[-11.154165,12.040554],[-11.170473,12.02718],[-11.174444,12.019165],[-11.178057,12.015833],[-11.182779,12.013609],[-11.235281,11.994997],[-11.248058,11.994719],[-11.253614,11.996109],[-11.315556,12.022774],[-11.323612,12.028606],[-11.340054,12.046799],[-11.370556,12.100554],[-11.376945,12.108053],[-11.381945,12.109997],[-11.413334,12.119997],[-11.449394,12.130236],[-11.459446,12.136108],[-11.493612,12.170553],[-11.494722,12.182219],[-11.494722,12.206108],[-11.488056,12.220274],[-11.485279,12.224442],[-11.478334,12.231386],[-11.474167,12.234442],[-11.4575,12.238886],[-11.452501,12.241108],[-11.449167,12.244719],[-11.443611,12.253052],[-11.383059,12.383331],[-11.373058,12.407774],[-11.373613,12.447775],[-11.40889,12.535],[-11.416945,12.569443],[-11.424168,12.656111],[-11.395,12.831944],[-11.376112,12.923332],[-11.368057,12.928888],[-11.3675,12.935276],[-11.368057,12.941387],[-11.372501,12.972221],[-11.375834,12.983332],[-11.378056,12.988054],[-11.455557,13.083332],[-11.471111,13.088333],[-11.513613,13.109999],[-11.516668,13.114166],[-11.527779,13.137777],[-11.530001,13.1425],[-11.554167,13.19861],[-11.557501,13.209444],[-11.558056,13.215555],[-11.555,13.22611],[-11.541389,13.247221],[-11.537779,13.250555],[-11.536667,13.256109],[-11.541668,13.264999],[-11.552223,13.282776],[-11.608057,13.358332],[-11.632502,13.390276],[-11.636667,13.392776],[-11.713057,13.412222],[-11.719446,13.412777],[-11.739168,13.410831],[-11.742779,13.407221],[-11.756668,13.373055],[-11.760557,13.356388],[-11.794724,13.316111],[-11.798056,13.312777],[-11.806391,13.306944],[-11.81139,13.30611],[-11.816389,13.308054],[-11.885,13.374998],[-11.888056,13.379166],[-11.888056,13.38611],[-11.879168,13.418055],[-11.877224,13.422777],[-11.959446,13.525276],[-11.964724,13.527222],[-11.968889,13.529999],[-11.990835,13.556389],[-12.034445,13.610832],[-12.057222,13.664721],[-12.064445,13.695555],[-12.041389,13.728611],[-12.01,13.746666],[-11.993334,13.758055],[-11.985556,13.764444],[-11.971111,13.778055],[-11.964445,13.785276],[-11.958612,13.79361],[-11.952778,13.808332],[-11.947779,13.830276],[-11.942501,13.858889],[-11.941668,13.88361],[-11.942223,13.904444],[-11.944445,13.909166],[-11.951113,13.916388],[-11.966391,13.929165],[-11.974445,13.935276],[-11.983057,13.940277],[-11.990835,13.946388],[-11.998335,13.953054],[-12.005001,13.960554],[-12.007778,13.964443],[-12.009445,13.969999],[-12.015001,14.012499],[-12.013056,14.024443],[-12.00639,14.056944],[-12.002501,14.066666],[-11.980556,14.141666],[-11.979445,14.16111],[-11.982224,14.172777],[-12.021667,14.266666],[-12.030834,14.278889],[-12.034445,14.282221],[-12.150835,14.374166],[-12.2064,14.395288],[-12.226112,14.502222],[-12.225279,14.508333],[-12.216946,14.539721],[-12.178612,14.607498],[-12.244167,14.750555],[-12.244833,14.764385],[-12.175001,14.768332],[-12.100834,14.74361],[-12.087778,14.735554],[-12.062445,14.725958],[-12.057484,14.725321],[-11.978889,14.768888],[-11.969723,14.774166],[-11.866945,14.840832],[-11.841391,14.863054],[-11.815279,14.924999],[-11.796112,15.006943],[-11.795557,15.013054],[-11.797501,15.032221],[-11.802502,15.048611],[-11.806112,15.051943],[-11.811111,15.053888],[-11.817501,15.053055],[-11.8225,15.050833],[-11.829445,15.043888],[-11.835001,15.042221],[-11.839857,15.044117],[-11.843109,15.048353],[-11.845564,15.052912],[-11.846668,15.097221],[-11.832224,15.195276],[-11.795279,15.32111],[-11.755001,15.43861],[-11.7425,15.474165],[-11.740557,15.478888],[-11.736946,15.482498],[-11.720278,15.493889],[-11.713057,15.50111],[-11.711113,15.505833],[-11.710835,15.525833],[-11.711668,15.544998],[-11.642223,15.524166],[-11.637501,15.526388],[-11.604168,15.543055],[-11.595278,15.548054],[-11.537779,15.596388],[-11.503056,15.63722],[-11.494167,15.646387],[-11.455278,15.643332],[-11.426111,15.638054],[-11.420834,15.635832],[-11.416389,15.633333],[-11.409168,15.626665],[-11.36639,15.578054],[-11.36389,15.573332],[-11.337223,15.524443],[-11.302223,15.474998],[-11.286667,15.455555],[-11.253889,15.431389],[-11.236946,15.419998],[-11.200001,15.394165],[-11.172501,15.374722],[-10.993057,15.242777],[-10.985001,15.223055],[-10.976667,15.203333],[-10.971111,15.194443],[-10.914446,15.124722],[-10.899637,15.106874],[-10.893484,15.113855],[-10.848057,15.20611],[-10.76639,15.309999],[-10.762222,15.312777],[-10.73778,15.3375],[-10.73139,15.345276],[-10.720835,15.368889],[-10.718056,15.379999],[-10.716387,15.438902],[-10.682222,15.433054],[-10.667896,15.431204],[-10.650002,15.430277],[-10.605001,15.428055],[-10.584167,15.429165],[-10.565556,15.43222],[-10.560001,15.433887],[-10.470001,15.437222],[-10.31778,15.441111],[-10.303612,15.441387],[-10.292223,15.438889],[-10.287224,15.436943],[-10.212778,15.408054],[-10.118057,15.372776],[-10.086945,15.36861],[-10.060556,15.366943],[-10.032778,15.366943],[-9.81778,15.373888],[-9.805,15.375555],[-9.793335,15.378332],[-9.779167,15.385555],[-9.770279,15.390554],[-9.753334,15.401943],[-9.739168,15.409166],[-9.696667,15.429998],[-9.660833,15.43111],[-9.411112,15.443888],[-9.408335,15.444721],[-9.415279,15.478888],[-9.442501,15.596943],[-9.338057,15.704721],[-9.310556,15.68611],[-9.313057,15.668888],[-9.3325,15.56361],[-9.333612,15.499722],[-9.226389,15.49861],[-9.184669,15.498217],[-9.090557,15.498888],[-9.036945,15.498333],[-8.996389,15.498333],[-8.585279,15.50111],[-8.513889,15.501389],[-8.505087,15.500832],[-8.060001,15.501665],[-8.042223,15.50111],[-8.00139,15.500832],[-7.662223,15.503332],[-7.501112,15.504999],[-7.358334,15.505833],[-7.018889,15.507221],[-6.658611,15.505833],[-6.42639,15.504444],[-6.319167,15.503611],[-6.307979,15.502781],[-5.958889,15.504444],[-5.583611,15.499443],[-5.49505,15.498371],[-5.493611,15.515554],[-5.48389,15.567221],[-5.420279,15.894444],[-5.386111,16.066387],[-5.3725,16.135277],[-5.335,16.328053],[-5.601389,16.507774],[-5.628056,16.748608],[-5.694445,17.350277],[-5.747778,17.831108],[-5.782778,18.152496],[-5.803334,18.341389],[-5.837778,18.649998],[-5.853889,18.78722],[-5.884445,19.061665],[-5.901112,19.215832],[-5.918334,19.369999],[-5.956667,19.712498],[-5.974167,19.866386],[-6.006667,20.149166],[-6.055278,20.559444],[-6.0775,20.747219],[-6.107223,20.999443],[-6.132223,21.221107],[-6.153056,21.408886],[-6.174445,21.596386],[-6.208334,21.88583],[-6.226111,22.039165],[-6.298889,22.66861],[-6.319723,22.855553],[-6.325834,22.906387],[-6.335958,22.990261],[-6.366945,23.254719],[-6.441798,23.878765],[-6.475278,24.161388],[-6.511111,24.458054],[-6.52389,24.562775],[-6.533334,24.6325],[-6.577223,24.999165],[-6.500278,25],[-6.366945,25],[-6.299723,24.999443],[-6.133889,24.999443],[-5.767222,25],[-4.966667,24.999443],[-4.866667,24.999443],[-4.806111,25.000275],[-4.525278,24.824997],[-4.123056,24.57111],[-3.792222,24.360275],[-3.462778,24.148888],[-3.233775,24.000534],[-2.824985,23.734722],[-2.448334,23.487221],[-2.09,23.25],[-1.750556,23.023331],[-1.412222,22.795555],[-1.142778,22.612778],[-0.773889,22.361111],[-0.423333,22.11972],[-0.1075,21.900555],[-0.008056,21.830555],[0.015556,21.815277],[0.149722,21.733055],[0.267222,21.660831],[0.401111,21.578331],[0.768333,21.351665],[1.169662,21.102543],[1.171944,21.099163],[1.185555,21.057777],[1.194167,21.025555],[1.195555,21.019997],[1.197148,21.00248],[1.1925,20.937496],[1.186389,20.900555],[1.181389,20.877499],[1.175555,20.855],[1.170833,20.838886],[1.168333,20.834164],[1.160555,20.806942],[1.16,20.793331],[1.160833,20.76722],[1.161389,20.761108],[1.163889,20.75],[1.1675,20.741108],[1.173889,20.734722],[1.178889,20.732777],[1.351389,20.681942],[1.478333,20.641388],[1.518889,20.626663],[1.573611,20.601944],[1.582222,20.597775],[1.6275,20.57111],[1.660278,20.540276],[1.663055,20.53611],[1.672222,20.472221],[1.671667,20.457222],[1.669722,20.439442],[1.666389,20.424442],[1.665555,20.41972],[1.666111,20.413609],[1.668056,20.408607],[1.671667,20.405277],[1.715,20.369999],[1.783611,20.317497],[1.795833,20.308331],[1.810278,20.301109],[1.900278,20.25972],[2.078333,20.218052],[2.085,20.21722],[2.0975,20.218887],[2.1025,20.220833],[2.129167,20.236385],[2.169722,20.273609],[2.178055,20.279442],[2.194167,20.284721],[2.213055,20.281387],[2.2275,20.274166],[2.266944,20.249165],[2.271111,20.246109],[2.2825,20.236385],[2.32,20.203053],[2.344166,20.177776],[2.355278,20.16111],[2.376667,20.126942],[2.386389,20.108887],[2.398611,20.078888],[2.405278,20.064999],[2.408055,20.060833],[2.411666,20.057499],[2.421667,20.053055],[2.509166,20.023888],[2.520555,20.020554],[2.587778,20.001663],[2.693611,20.002777],[2.711667,20.00222],[2.902222,19.966942],[2.998611,19.93111],[3.013611,19.924442],[3.028611,19.917774],[3.228611,19.82333],[3.233055,19.820274],[3.235,19.815552],[3.235555,19.809444],[3.230833,19.737499],[3.223055,19.623333],[3.214444,19.589165],[3.210556,19.579166],[3.21,19.565277],[3.213055,19.548054],[3.243889,19.451942],[3.245833,19.446941],[3.249444,19.443607],[3.254444,19.441387],[3.262777,19.435555],[3.269722,19.428608],[3.2725,19.424164],[3.276667,19.414444],[3.277778,19.408886],[3.278333,19.402775],[3.277222,19.389721],[3.274722,19.37833],[3.269166,19.369442],[3.191111,19.256107],[3.146389,19.201942],[3.125833,19.179996],[3.114166,19.156387],[3.116666,19.145275],[3.118611,19.140274],[3.133889,19.120552],[3.140833,19.113609],[3.183888,19.078609],[3.331944,18.976387],[3.733333,19.051666],[3.909098,19.084814],[3.952777,19.093052],[4.080832,19.116665],[4.245277,19.146664],[4.245277,19.072498],[4.245832,18.866386],[4.245555,18.660553],[4.245,18.645275],[4.246666,17.998055],[4.24861,17.648052],[4.249722,17.476109],[4.251111,17.292011],[4.2525,16.994442],[4.250278,16.99361],[4.22111,16.914997],[4.198889,16.820831],[4.199166,16.755276],[4.2,16.738052],[4.200833,16.393887],[4.192778,16.388611],[4.1825,16.38472],[4.176666,16.38361],[4.166389,16.379997],[4.151944,16.373608],[4.138611,16.365833],[4.114166,16.348053],[4.103055,16.338055],[4.089722,16.32333],[4.074444,16.303333],[4.069722,16.293888],[3.980833,16.070274],[3.950277,15.941944],[3.902222,15.74861],[3.895,15.727499],[3.885,15.709166],[3.881944,15.706665],[3.848611,15.675554],[3.844166,15.672777],[3.823889,15.665277],[3.812222,15.662777],[3.786389,15.66111],[3.772222,15.661388],[3.747777,15.659443],[3.736111,15.657221],[3.726666,15.652777],[3.7225,15.65],[3.567222,15.51222],[3.535555,15.429165],[3.530833,15.398333],[3.523981,15.358152],[3.512222,15.361666],[3.30705,15.392378],[3.0325,15.433054],[3.0225,15.4175],[3.023056,15.410555],[3.020833,15.341944],[3.002778,15.341665],[2.86,15.344721],[2.628055,15.350555],[2.510555,15.344999],[1.974167,15.318888],[1.884722,15.315277],[1.3125,15.286665],[1.085556,15.079443],[0.994444,14.995277],[0.974722,14.978611],[0.938889,14.977499],[0.778333,14.968611],[0.731111,14.960833],[0.695,14.942221],[0.653889,14.955555],[0.618611,14.967499],[0.512222,15.000832],[0.450556,14.978611],[0.396667,14.960554],[0.334167,14.975555],[0.280833,14.988609],[0.245556,14.997499],[0.229992,15.002522],[0.232222,14.950277],[0.235048,14.915068],[0,14.99437],[-0.246389,15.077499],[-0.386667,15.005278],[-0.443611,15.082777],[-0.723143,15.082367],[-0.725278,15.082777],[-1.003023,14.840099],[-1.074167,14.776943],[-1.093889,14.784166],[-1.318889,14.728611],[-1.361841,14.701359],[-1.678334,14.500555],[-1.777778,14.48111],[-1.9075,14.488609],[-1.980834,14.474722],[-1.984167,14.410276],[-1.989444,14.376944],[-1.9925,14.342499],[-1.996667,14.308054],[-2.006945,14.187777],[-2.103716,14.15263],[-2.1075,14.151388],[-2.245,14.217777],[-2.280278,14.234444],[-2.298611,14.242222],[-2.384167,14.265554],[-2.455556,14.284721],[-2.474722,14.287498],[-2.599722,14.211666],[-2.646667,14.161943],[-2.815556,14.050278],[-2.84,14.005554],[-2.903056,13.828054],[-2.904445,13.816666],[-2.904445,13.721666],[-2.885278,13.673054],[-2.879167,13.655554],[-2.942223,13.633055],[-2.958319,13.629166],[-3.099445,13.68611],[-3.211112,13.708055],[-3.2575,13.696665],[-3.273334,13.550278],[-3.260278,13.496387],[-3.237223,13.359722],[-3.233889,13.322498],[-3.232223,13.288055],[-3.373889,13.277222],[-3.394167,13.276667],[-3.420278,13.27611],[-3.430509,13.27611],[-3.433333,13.27611],[-3.440536,13.274389],[-3.444445,13.264721],[-3.444723,13.257776],[-3.441112,13.247221],[-3.43464,13.239923],[-3.43,13.230833],[-3.424445,13.211388],[-3.423889,13.191387],[-3.4275,13.18111],[-3.43328,13.172808],[-3.437675,13.166498],[-3.446854,13.170491],[-3.450834,13.172222],[-3.508334,13.178888],[-3.535278,13.177776],[-3.540833,13.178888],[-3.588611,13.202776],[-3.616945,13.22361],[-3.785725,13.359068],[-3.904723,13.441944],[-3.901111,13.452221],[-3.9025,13.457777],[-3.954167,13.5],[-3.958333,13.502777],[-3.964253,13.50383],[-3.976111,13.47611],[-4.148056,13.283888],[-4.151945,13.280277],[-4.160278,13.275],[-4.166112,13.273611],[-4.189445,13.276943],[-4.194445,13.275],[-4.236945,13.240833],[-4.312222,13.166388],[-4.315001,13.162222],[-4.332778,13.131388],[-4.337223,13.121666],[-4.337223,13.115],[-4.335,13.109999],[-4.277223,13.021666],[-4.268889,13.009165],[-4.255279,12.99472],[-4.251112,12.991943],[-4.246112,12.99],[-4.220834,12.973331],[-4.214445,12.965832],[-4.209445,12.956665],[-4.205278,12.940277],[-4.194445,12.828609],[-4.205833,12.771944],[-4.207223,12.766388],[-4.219445,12.736944],[-4.222778,12.73361],[-4.257501,12.719166],[-4.268889,12.716389],[-4.288889,12.714998],[-4.468889,12.723888],[-4.470278,12.71361],[-4.475278,12.669998],[-4.475278,12.663332],[-4.473889,12.657776],[-4.456389,12.640276],[-4.4525,12.636944],[-4.447779,12.634998],[-4.441389,12.635555],[-4.430834,12.632221],[-4.423056,12.625832],[-4.419723,12.622499],[-4.365556,12.538887],[-4.365556,12.533333],[-4.370278,12.525833],[-4.381111,12.516943],[-4.393889,12.50861],[-4.400278,12.50111],[-4.414445,12.480555],[-4.419168,12.471666],[-4.426391,12.457775],[-4.437779,12.434443],[-4.434446,12.424164],[-4.4175,12.300831],[-4.482501,12.274719],[-4.569447,12.201109],[-4.623891,12.117775],[-4.625835,12.113052],[-4.630002,12.096386],[-4.630836,12.090275],[-4.633427,12.067223],[-4.698613,12.062775],[-4.942779,12.008608],[-5.079722,11.975555],[-5.1175,11.964443],[-5.145001,11.954166],[-5.149167,11.951387],[-5.168334,11.935555],[-5.273056,11.843887],[-5.2875,11.788055],[-5.268612,11.686943],[-5.230556,11.596109],[-5.22,11.585554],[-5.214445,11.577499],[-5.201667,11.541666],[-5.201667,11.534721],[-5.208611,11.461666],[-5.246945,11.255278],[-5.24875,11.25],[-5.299445,11.139444],[-5.313612,11.125555],[-5.330278,11.114721],[-5.355,11.104166],[-5.370278,11.09861],[-5.394167,11.094444],[-5.463612,11.086943],[-5.480556,11.082777],[-5.485278,11.080555],[-5.488334,11.076387],[-5.488334,11.069443],[-5.486945,11.036665],[-5.486112,11.030277],[-5.479445,11.002222],[-5.445834,10.901667],[-5.443611,10.896944],[-5.438056,10.888611],[-5.424167,10.874998],[-5.414167,10.863888],[-5.410001,10.854166],[-5.410001,10.847221],[-5.411389,10.834999],[-5.413334,10.830276],[-5.444723,10.763332],[-5.456208,10.721651],[-5.462223,10.707499],[-5.46639,10.691111],[-5.473333,10.6325],[-5.483612,10.527222],[-5.51985,10.436272],[-5.559723,10.45611],[-5.571667,10.458332],[-5.656389,10.450554],[-5.6675,10.447777],[-5.672501,10.445555],[-5.680556,10.439999],[-5.694445,10.433054],[-5.709167,10.426943],[-5.726111,10.422777],[-5.746389,10.423332],[-5.782308,10.426426],[-5.7925,10.423332],[-5.802501,10.419167],[-5.877778,10.375555],[-5.886667,10.363888],[-5.9375,10.284443],[-5.961945,10.242498],[-5.966111,10.232777],[-5.97139,10.224443],[-5.983334,10.208611],[-6.00139,10.191944],[-6.006945,10.190554],[-6.090279,10.190832],[-6.111389,10.197777],[-6.145556,10.211943],[-6.188334,10.231667],[-6.197167,10.236362],[-6.18,10.364721],[-6.180278,10.403055],[-6.181667,10.434721],[-6.183056,10.46361],[-6.212501,10.569443],[-6.190278,10.624722],[-6.188334,10.636389],[-6.18889,10.6425],[-6.222993,10.721649],[-6.225834,10.724165],[-6.243402,10.735256],[-6.405001,10.695],[-6.414167,10.690277],[-6.416667,10.68611],[-6.418334,10.680555],[-6.42,10.635832],[-6.419168,10.622776],[-6.416389,10.61861],[-6.412778,10.615276],[-6.400278,10.606943],[-6.395278,10.605],[-6.386667,10.599443],[-6.383334,10.596109],[-6.381945,10.590555],[-6.387501,10.582222],[-6.403334,10.56361],[-6.410278,10.556665],[-6.418056,10.550554],[-6.423612,10.549166],[-6.43,10.548332],[-6.533056,10.576111],[-6.585,10.607222],[-6.593612,10.612778],[-6.597778,10.622221],[-6.599723,10.634165],[-6.601389,10.639444],[-6.608334,10.653332],[-6.611945,10.656666],[-6.616112,10.659443],[-6.621112,10.661388],[-6.637801,10.666186],[-6.643612,10.666943],[-6.647655,10.66507],[-6.653334,10.657776],[-6.668334,10.630278],[-6.67,10.62611],[-6.676667,10.598331],[-6.685,10.491665],[-6.68,10.470554],[-6.674445,10.462221],[-6.667223,10.455276],[-6.655278,10.454721],[-6.650278,10.452776],[-6.631945,10.436388],[-6.631945,10.430832],[-6.648334,10.364721],[-6.653334,10.357222],[-6.656407,10.354067],[-6.719723,10.350555],[-6.938056,10.354443],[-6.943611,10.353054],[-6.957223,10.339167],[-6.960279,10.334999],[-6.962223,10.33],[-6.980556,10.259165],[-6.9825,10.247221],[-6.980556,10.242498],[-6.959167,10.228888],[-6.951667,10.222776],[-6.945834,10.214722],[-6.945001,10.201666],[-6.946945,10.183054],[-6.949722,10.171944],[-6.964445,10.158888],[-6.972778,10.153055],[-6.988056,10.147499],[-7.010279,10.141943],[-7.016667,10.141109],[-7.023056,10.141666],[-7.027779,10.143888],[-7.031945,10.146387],[-7.035556,10.15],[-7.041389,10.158054],[-7.049445,10.170555],[-7.053889,10.179998],[-7.059445,10.188332],[-7.0625,10.192499],[-7.069445,10.19861],[-7.078611,10.203333],[-7.122778,10.221388],[-7.133334,10.224722],[-7.183889,10.236666],[-7.269723,10.254444],[-7.347501,10.317221],[-7.346667,10.323332],[-7.347501,10.329443],[-7.351111,10.338333],[-7.359723,10.350832],[-7.451667,10.397221],[-7.63,10.447222],[-7.635556,10.448332],[-7.641111,10.446943],[-7.645278,10.444166],[-7.699445,10.406387],[-7.706944,10.400276],[-7.731945,10.377222],[-7.754723,10.330832],[-7.75639,10.309444],[-7.753334,10.298611],[-7.754177,10.294424],[-7.762501,10.281944],[-7.787778,10.245277],[-7.81889,10.206944],[-7.823056,10.204166],[-7.831944,10.199165],[-7.889167,10.173887],[-7.936389,10.157499],[-7.9425,10.156666],[-7.960834,10.159166],[-7.966667,10.160555],[-7.973984,10.165611],[-7.941389,10.232222],[-7.940278,10.237778],[-7.940278,10.243332],[-7.946112,10.25861],[-7.969167,10.318888],[-7.971111,10.32361],[-7.980556,10.334999],[-7.985001,10.337776],[-8.141111,10.423887],[-8.180279,10.416666],[-8.18639,10.415833],[-8.199167,10.416943],[-8.215279,10.421665],[-8.220835,10.429722],[-8.26889,10.5],[-8.271112,10.504999],[-8.281946,10.549444],[-8.32139,10.760832],[-8.2875,10.849443],[-8.289722,11.007776],[-8.338057,11.049166],[-8.345835,11.055277],[-8.350834,11.05722],[-8.35639,11.058611],[-8.363335,11.058332],[-8.458057,11.050833],[-8.511112,11.005554],[-8.583612,10.972776],[-8.665556,10.953609],[-8.671112,10.955],[-8.675556,10.957499],[-8.680557,10.966389],[-8.682779,10.978054],[-8.682779,10.991943],[-8.681667,10.997499],[-8.680279,11.003054],[-8.674446,11.0175],[-8.610001,11.127222],[-8.4825,11.284721],[-8.474724,11.291111],[-8.470001,11.293055],[-8.456667,11.293888],[-8.446667,11.289999],[-8.433889,11.281944],[-8.42889,11.279999],[-8.400278,11.279722],[-8.387501,11.279722],[-8.375834,11.281944],[-8.370834,11.284166],[-8.367224,11.287777],[-8.361946,11.295832],[-8.357779,11.305555],[-8.354445,11.322777],[-8.359579,11.371357],[-8.360834,11.373888],[-8.371389,11.383888],[-8.390556,11.392776],[-8.445002,11.414721],[-8.459723,11.420555],[-8.465279,11.421944],[-8.472502,11.421944],[-8.490835,11.418888],[-8.501112,11.422222],[-8.513889,11.430277],[-8.519167,11.439165],[-8.53388,11.49391]]]}}]}';
    }
}
