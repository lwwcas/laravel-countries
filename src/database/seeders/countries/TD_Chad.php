<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TD_Chad extends CountrySeeder
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
        $this->name = 'Chad';
        $this->official_name = 'Republic of Chad';
        $this->iso_alpha_2 = 'TD';
        $this->iso_alpha_3 = 'TCD';
        $this->iso_numeric = '148';
        $this->international_phone = '235';

        $this->languages = ['fr','ar'];
        $this->tld = ['.td'];
        $this->wmo = 'CD';
        $this->geoname_id = '2434508';

        $this->emoji = [
            'img' => '🇹🇩',
            'uCode' => 'U+1F1F9 U+1F1E9',
        ];
        $this->color = [
            'hex' => [
                '#00008b',
                '#ffd700',
                '#cc0000',
            ],
            'rgb' => [
                '0,0,139',
                '255,215,0',
                '204,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '15 00 N',
                'desc' => '15.367652893066406',
            ],
            'longitude' => [
                'classic' => '19 00 E',
                'desc' => '18.66758155822754',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '26',
                'min' => '7.5',
            ],
            'longitude' => [
                'max' => '24',
                'min' => '2',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"td"},"geometry":{"type":"Polygon","coordinates":[[[14.500875,13.001314],[14.486944,13.019722],[14.472776,13.040277],[14.459444,13.061388],[14.454721,13.070555],[14.443054,13.084721],[14.428888,13.085278],[14.159721,13.083055],[14.07472,13.081665],[13.901077,13.328215],[13.760015,13.527803],[13.634722,13.703888],[13.62512,13.718338],[13.600555,13.828609],[13.562229,13.993265],[13.462221,14.428055],[13.461666,14.433054],[13.463333,14.445276],[13.466665,14.456388],[13.468887,14.461111],[13.482777,14.474998],[13.49472,14.484444],[13.517221,14.496944],[13.540277,14.50861],[13.554722,14.514999],[13.615181,14.516262],[13.629721,14.521666],[13.647778,14.531666],[13.665277,14.541943],[13.672777,14.548611],[13.67861,14.556944],[13.680832,14.561666],[13.684166,14.572498],[13.684721,14.586388],[13.684444,14.599443],[13.681389,14.617498],[13.759165,14.705555],[13.794167,14.732777],[13.77861,14.802221],[13.767221,14.848055],[13.786388,14.888887],[13.859165,15.037777],[13.997221,15.205832],[14.072222,15.313889],[14.195555,15.489166],[14.271666,15.596943],[14.368889,15.733889],[14.572222,15.947777],[14.904444,16.29472],[15.122221,16.521385],[15.238609,16.641388],[15.354166,16.761108],[15.456944,16.867775],[15.482498,16.894444],[15.485138,16.89809],[15.489166,16.914165],[15.490276,16.927776],[15.523611,17.359997],[15.558979,17.999454],[15.573055,18.248886],[15.574444,18.289719],[15.602499,18.782219],[15.610832,18.841663],[15.634165,19.018887],[15.713055,19.618889],[15.730276,19.755276],[15.753887,19.932499],[15.804165,20.019997],[15.873333,20.139721],[15.981943,20.326385],[15.996666,20.353054],[15.673887,20.698887],[15.668888,20.701111],[15.656666,20.703888],[15.633055,20.716663],[15.61611,20.728611],[15.60861,20.734997],[15.582777,20.758888],[15.575832,20.766388],[15.568609,20.77972],[15.55722,20.81583],[15.554165,20.852497],[15.554998,20.866108],[15.558332,20.884441],[15.56361,20.900833],[15.568609,20.910275],[15.584444,20.929996],[15.603888,20.94611],[15.612778,20.951111],[15.618889,20.952221],[15.627222,20.955276],[15.583055,21.018608],[15.533333,21.089722],[15.284443,21.445274],[15.216665,21.487778],[15.202499,21.495831],[15.201387,21.517776],[15.199999,21.614166],[15.199444,21.655277],[15.197498,21.82],[15.194721,21.998886],[15.154461,22.202774],[15.047777,22.751663],[15.006943,22.959442],[14.997889,23.000591],[15.132776,23.062222],[15.335278,23.153332],[16.000832,23.450554],[16.346107,23.292221],[16.980274,22.998333],[17.656326,22.68092],[17.687183,22.666252],[18.036638,22.5],[18.363609,22.344444],[18.76833,22.150276],[18.999722,22.03828],[19.298054,21.893887],[19.873886,21.611664],[20.408333,21.3475],[20.959442,21.072498],[21.378887,20.860832],[21.384998,20.856667],[21.781666,20.656109],[22.321388,20.379997],[23.020554,20.017776],[23.456665,19.789444],[24.002747,19.499065],[23.999722,19.465832],[23.999443,19.432777],[23.999165,18.832775],[23.999805,18.754303],[23.999165,18.532497],[23.999165,18.299442],[23.999165,16.266109],[24,16.132774],[24,15.832777],[23.999634,15.708706],[23.999603,15.698709],[23.991386,15.695276],[23.979164,15.696388],[23.96722,15.699444],[23.956387,15.703333],[23.945831,15.707777],[23.864998,15.730555],[23.806942,15.746666],[23.793888,15.749166],[23.66333,15.7575],[23.608887,15.758333],[23.597221,15.756666],[23.564163,15.749722],[23.531666,15.741665],[23.479164,15.725832],[23.468887,15.721388],[23.451385,15.712221],[23.433887,15.700832],[23.414444,15.692499],[23.40361,15.689165],[23.381386,15.684999],[23.356941,15.681665],[23.32972,15.683611],[23.305553,15.686943],[23.244442,15.701111],[23.170277,15.710554],[23.143608,15.711111],[23.118156,15.710293],[23.108608,15.706388],[22.937222,15.561943],[22.925278,15.545555],[22.921387,15.534721],[22.91972,15.522221],[22.919441,15.509165],[22.923054,15.487221],[22.932777,15.468887],[22.938053,15.460554],[22.974442,15.426666],[22.980831,15.418888],[22.986111,15.410555],[22.989441,15.400833],[22.996109,15.379999],[22.998055,15.368889],[22.998333,15.356388],[22.997219,15.335833],[22.991386,15.283333],[22.984722,15.23111],[22.980553,15.213333],[22.976944,15.202499],[22.938332,15.120832],[22.935833,15.11611],[22.926666,15.111387],[22.916664,15.107777],[22.892776,15.104721],[22.87722,15.099443],[22.868332,15.094444],[22.849163,15.078333],[22.84222,15.071388],[22.78611,15.014999],[22.75333,14.976944],[22.670555,14.859444],[22.667774,14.848055],[22.668888,14.823055],[22.670277,14.804998],[22.677498,14.765833],[22.68222,14.750277],[22.695553,14.71611],[22.699997,14.706944],[22.701664,14.701944],[22.702499,14.691387],[22.5,14.637438],[22.469997,14.629444],[22.416111,14.600277],[22.403332,14.592222],[22.393887,14.580276],[22.388885,14.57111],[22.384163,14.554165],[22.380833,14.535555],[22.380276,14.52861],[22.381386,14.523054],[22.38472,14.519444],[22.389442,14.516943],[22.399998,14.513054],[22.434444,14.496111],[22.441944,14.489443],[22.445553,14.479721],[22.446663,14.467777],[22.449165,14.379166],[22.449444,14.33],[22.511665,14.240276],[22.550278,14.234165],[22.555275,14.231943],[22.559166,14.215832],[22.566666,14.170277],[22.566944,14.164165],[22.558609,14.136389],[22.554996,14.125555],[22.552498,14.120832],[22.434444,14.051666],[22.370831,14.028889],[22.319721,14.011665],[22.314442,14.009722],[22.238331,13.968332],[22.230274,13.962776],[22.19833,13.922499],[22.084442,13.779165],[22.133888,13.669722],[22.138332,13.660276],[22.227497,13.495554],[22.29361,13.382776],[22.295277,13.377777],[22.295555,13.371666],[22.294167,13.35861],[22.285,13.340555],[22.269444,13.320833],[22.159721,13.190277],[22.146385,13.182777],[22.075554,13.150833],[22.059444,13.146387],[22.029442,13.142776],[22.020554,13.137777],[21.943333,13.05361],[21.94083,13.048887],[21.895275,12.961943],[21.888611,12.946943],[21.828346,12.801491],[21.827774,12.797499],[21.831944,12.788332],[21.883053,12.701387],[21.893887,12.684721],[21.906944,12.669443],[21.919167,12.660276],[21.931942,12.651943],[21.952774,12.643888],[21.977219,12.638611],[22.004719,12.636389],[22.049999,12.637499],[22.074444,12.639999],[22.114441,12.647221],[22.125275,12.65],[22.140553,12.655277],[22.149998,12.659443],[22.158054,12.665277],[22.165833,12.672222],[22.199718,12.715555],[22.223331,12.747221],[22.331665,12.673332],[22.466942,12.621666],[22.461666,12.608055],[22.408886,12.487221],[22.406387,12.483055],[22.436386,12.354721],[22.441666,12.339722],[22.50333,12.165833],[22.56361,12.07472],[22.611385,11.992777],[22.597775,11.926666],[22.572777,11.799166],[22.553333,11.672499],[22.552776,11.665554],[22.553333,11.653332],[22.556389,11.636389],[22.561665,11.621666],[22.569443,11.609999],[22.581108,11.593887],[22.613331,11.550554],[22.625553,11.534443],[22.641941,11.516109],[22.65472,11.5075],[22.790276,11.429443],[22.930832,11.415833],[22.935555,11.401667],[22.970833,11.283054],[22.971943,11.277498],[22.975277,11.215832],[22.97472,11.209166],[22.971107,11.198332],[22.893608,10.976944],[22.866505,10.922447],[22.824997,10.93111],[22.676388,10.969444],[22.46611,11.001389],[22.460552,11.000277],[22.435833,10.990833],[22.429722,10.983055],[22.427498,10.978333],[22.414997,10.962776],[22.406387,10.957777],[22.364109,10.955044],[22.333054,10.945276],[22.322777,10.941666],[22.24472,10.910831],[22.006107,10.768888],[21.957222,10.732222],[21.895832,10.705],[21.828609,10.678055],[21.822498,10.679165],[21.816666,10.678333],[21.811108,10.677221],[21.785831,10.668333],[21.723888,10.641943],[21.719444,10.639444],[21.716389,10.635555],[21.702774,10.566666],[21.702221,10.559999],[21.700832,10.526943],[21.701385,10.514444],[21.703331,10.503332],[21.706387,10.492777],[21.714996,10.474165],[21.723888,10.4625],[21.731941,10.456665],[21.738609,10.449165],[21.740276,10.444166],[21.746666,10.412222],[21.747776,10.406666],[21.722221,10.305277],[21.720276,10.299999],[21.715553,10.290554],[21.666943,10.235832],[21.638885,10.223055],[21.614441,10.213333],[21.603054,10.211388],[21.574444,10.211111],[21.563332,10.214722],[21.546387,10.214167],[21.540276,10.213888],[21.535275,10.212221],[21.526943,10.206388],[21.520275,10.199444],[21.5,10.177776],[21.47361,10.147778],[21.455276,10.116388],[21.453609,10.111111],[21.454998,10.099165],[21.453331,10.086388],[21.438332,10.045832],[21.43222,10.037777],[21.408333,10.006943],[21.371944,9.973888],[21.354721,9.964167],[21.34222,9.958611],[21.336109,9.958332],[21.29472,9.970554],[21.290833,9.97361],[21.276386,9.980555],[21.269444,9.98111],[21.260277,9.976944],[21.256386,9.97361],[21.224998,9.942499],[21.048054,9.766388],[20.974442,9.603333],[20.895832,9.521666],[20.89222,9.51861],[20.882221,9.514999],[20.869164,9.5075],[20.837776,9.476387],[20.827221,9.451387],[20.816841,9.415667],[20.800831,9.420555],[20.502087,9.280092],[20.498474,9.277681],[20.496666,9.272825],[20.498886,9.244165],[20.500832,9.239166],[20.487778,9.209721],[20.459164,9.175554],[20.422222,9.139721],[20.371666,9.108332],[20.328888,9.104443],[20.321941,9.105],[20.270275,9.118332],[20.186943,9.125832],[20.067497,9.135277],[20.061943,9.134443],[19.963333,9.08],[19.93375,9.05752],[19.905552,9.059166],[19.830555,9.053055],[19.610832,9.026667],[19.411388,9.016109],[19.193321,9.02099],[19.109444,9.013611],[19.086941,9.009443],[19.027775,8.986944],[19.019165,8.981943],[18.988888,8.964167],[18.929443,8.920555],[18.892498,8.891388],[18.874722,8.874443],[18.868889,8.866665],[18.866665,8.854443],[18.86861,8.849443],[18.876373,8.841427],[18.925552,8.794167],[18.987221,8.765276],[19.02861,8.756388],[19.032776,8.753332],[19.114998,8.691387],[19.125832,8.672777],[19.095276,8.648333],[19.081944,8.633888],[19.058792,8.578382],[18.987499,8.49361],[18.934444,8.428333],[18.929165,8.419443],[18.926109,8.40111],[18.924442,8.395832],[18.91972,8.386389],[18.904163,8.367222],[18.840275,8.292221],[18.809444,8.260832],[18.805832,8.2575],[18.796665,8.253054],[18.764164,8.245277],[18.754166,8.241665],[18.70472,8.22361],[18.686665,8.214167],[18.66861,8.197777],[18.662498,8.189999],[18.645275,8.165277],[18.636665,8.145832],[18.634998,8.140276],[18.63361,8.127499],[18.634998,8.102499],[18.636665,8.090832],[18.635277,8.077776],[18.618332,8.060276],[18.588886,8.040277],[18.561108,8.039721],[18.408054,8.033054],[18.240833,8.025555],[18.046108,8.016666],[18.037777,8.015554],[18.023609,8.010832],[17.88361,7.958333],[17.71833,7.983611],[17.656944,7.989721],[17.640831,7.987222],[17.632774,7.981388],[17.628887,7.97111],[17.626389,7.959722],[17.622498,7.956388],[17.589722,7.934722],[17.584721,7.932777],[17.51083,7.912222],[17.458332,7.900277],[17.452774,7.901667],[17.445831,7.902222],[17.369442,7.867222],[17.254997,7.812499],[17.237221,7.803055],[17.218609,7.758611],[17.138332,7.700555],[17.058887,7.662777],[16.984444,7.654444],[16.91333,7.6425],[16.874443,7.626944],[16.870831,7.623888],[16.867775,7.619721],[16.866108,7.614444],[16.864998,7.601388],[16.865276,7.594999],[16.867222,7.590278],[16.859997,7.569166],[16.833611,7.550555],[16.829441,7.548055],[16.817451,7.546301],[16.781666,7.565833],[16.569443,7.781111],[16.566666,7.785277],[16.560555,7.819166],[16.561665,7.825277],[16.563889,7.83],[16.568607,7.846389],[16.569164,7.853333],[16.568607,7.859444],[16.566528,7.873506],[16.533607,7.867777],[16.503052,7.850555],[16.430832,7.798055],[16.41,7.767221],[16.404163,7.714722],[16.407497,7.691111],[16.224163,7.616388],[16.219166,7.614444],[16.213608,7.613333],[16.148609,7.600833],[16.113052,7.59611],[16.082497,7.594722],[16.076385,7.594166],[16.039444,7.576666],[16.029442,7.566111],[16.024998,7.556666],[16.019997,7.540277],[16.014999,7.531666],[15.980555,7.504167],[15.97611,7.501666],[15.971388,7.499722],[15.913887,7.482778],[15.795277,7.458611],[15.782776,7.457777],[15.776388,7.458888],[15.736666,7.468611],[15.731388,7.469999],[15.724722,7.477221],[15.718887,7.491944],[15.715832,7.502222],[15.711388,7.511389],[15.699444,7.52],[15.694443,7.522499],[15.689165,7.523889],[15.6775,7.525277],[15.651667,7.524166],[15.63361,7.521944],[15.616943,7.518611],[15.568888,7.512777],[15.562498,7.5125],[15.5425,7.513888],[15.51861,7.518332],[15.499008,7.526609],[15.501944,7.529444],[15.541388,7.57361],[15.547222,7.581666],[15.549721,7.586389],[15.572777,7.629999],[15.584166,7.686666],[15.584444,7.69361],[15.581944,7.736111],[15.579977,7.760406],[15.530554,7.773333],[15.5175,7.774444],[15.504862,7.772637],[15.499722,7.777222],[15.480555,7.80611],[15.475277,7.814444],[15.444721,7.882222],[15.433332,7.911666],[15.391666,8.031944],[15.386665,8.047222],[15.381388,8.068888],[15.379166,8.086666],[15.379721,8.100555],[15.379166,8.106667],[15.375555,8.116388],[15.371666,8.124722],[15.361944,8.1425],[15.343611,8.171944],[15.264721,8.339167],[15.225202,8.436199],[15.2125,8.468887],[15.201944,8.485832],[15.079166,8.638332],[15.069166,8.648888],[14.922777,8.775276],[14.883055,8.805555],[14.869165,8.813055],[14.858889,8.816666],[14.852777,8.817778],[14.840832,8.816111],[14.82472,8.81111],[14.621111,8.960554],[14.566111,9.001665],[14.552776,9.013332],[14.348055,9.196943],[14.352499,9.23],[14.328609,9.258333],[14.0175,9.612778],[14.016109,9.614166],[14.007221,9.617777],[13.991943,9.623888],[13.979443,9.625555],[13.973888,9.627222],[13.964167,9.631666],[13.960278,9.634443],[13.957499,9.638611],[13.956944,9.644999],[13.958055,9.65111],[14.009998,9.73],[14.028332,9.753611],[14.039999,9.762777],[14.056944,9.773333],[14.061943,9.775],[14.07111,9.779722],[14.083887,9.787498],[14.10861,9.811388],[14.123333,9.831665],[14.13722,9.853333],[14.144722,9.866665],[14.178333,9.93111],[14.182777,9.940554],[14.194769,9.98175],[14.442778,9.997221],[14.458332,9.998888],[14.486111,9.993889],[14.652777,9.959166],[14.776388,9.92111],[14.790554,9.925278],[14.918055,9.970276],[14.920277,9.971666],[14.934166,9.969166],[15.0175,9.94972],[15.043888,9.947222],[15.062222,9.949444],[15.079166,9.952776],[15.087776,9.958055],[15.099443,9.974165],[15.103054,9.977499],[15.12361,9.984165],[15.159443,9.989166],[15.24,9.987499],[15.284166,9.97361],[15.422222,9.926943],[15.535,9.953609],[15.591665,9.967222],[15.668747,9.98639],[15.68185,9.989649],[15.655554,10.010277],[15.651388,10.013332],[15.630278,10.027222],[15.589167,10.049444],[15.541943,10.072498],[15.503611,10.0975],[15.499722,10.100277],[15.496387,10.103888],[15.373055,10.24861],[15.276943,10.390554],[15.190277,10.502777],[15.150276,10.612499],[15.149721,10.61861],[15.136665,10.660555],[15.116388,10.701944],[15.113888,10.70611],[15.092222,10.731667],[15.061666,10.789999],[15.057777,10.799999],[15.056665,10.805555],[15.056665,10.812222],[15.058054,10.825277],[15.066387,10.844999],[15.075832,10.870832],[15.078609,10.889444],[15.078054,10.895555],[15.073889,10.911665],[15.026062,11.079407],[15.019165,11.136944],[15.0175,11.18611],[15.017221,11.199165],[15.019165,11.211666],[15.050554,11.393055],[15.051388,11.396666],[15.065277,11.431944],[15.07,11.441387],[15.107777,11.494444],[15.110832,11.49861],[15.093611,11.582499],[15.09111,11.586943],[15.089167,11.591665],[15.062777,11.681665],[15.061666,11.687222],[15.061943,11.692778],[15.06361,11.698332],[15.081944,11.754721],[15.042597,12.078888],[14.985277,12.094166],[14.97611,12.089722],[14.968887,12.089998],[14.963333,12.091665],[14.953609,12.096109],[14.949444,12.099165],[14.901667,12.142776],[14.891754,12.153397],[14.890327,12.158451],[14.89361,12.16861],[14.898888,12.200277],[14.902222,12.228333],[14.908333,12.320555],[14.902348,12.375975],[14.825853,12.630348],[14.818995,12.637205],[14.711666,12.713888],[14.705832,12.715555],[14.624201,12.734604],[14.58861,12.738054],[14.583055,12.736944],[14.577221,12.738609],[14.547777,12.766388],[14.544722,12.776943],[14.539721,12.853054],[14.525555,12.974998],[14.500875,13.001314]]]}}]}';
    }
}
