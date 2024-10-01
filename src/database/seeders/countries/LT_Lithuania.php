<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class LT_Lithuania extends CountrySeeder
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
        $this->name = 'Lithuania';
        $this->official_name = 'Republic of Lithuania';
        $this->iso_alpha_2 = 'LT';
        $this->iso_alpha_3 = 'LTU';
        $this->iso_numeric = '440';
        $this->international_phone = '370';

        $this->languages = ['lt'];
        $this->tld = ['.lt'];
        $this->wmo = 'LT';
        $this->geoname_id = '597427';

        $this->emoji = [
            'img' => '🇱🇹',
            'uCode' => 'U+1F1F1 U+1F1F9',
        ];
        $this->color = [
            'hex' => [
                '#ffff00',
                '#008000',
                '#ff0000',
            ],
            'rgb' => [
                '255,255,0',
                '0,128,0',
                '255,0,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '56 00 N',
                'desc' => '55.33871841430664',
            ],
            'longitude' => [
                'classic' => '24 00 E',
                'desc' => '23.87092399597168',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '56.441667',
                'min' => '53',
            ],
            'longitude' => [
                'max' => '27',
                'min' => '21',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"lt"},"geometry":{"type":"MultiPolygon","coordinates":[[[[21.044441,55.326385],[20.984814,55.27655],[20.942833,55.287201],[20.982773,55.330826],[21.002499,55.352493],[21.03944,55.400826],[21.04472,55.411659],[21.049999,55.422493],[21.064442,55.45166],[21.083054,55.499718],[21.088608,55.514717],[21.09249,55.531105],[21.09444,55.548882],[21.09583,55.594154],[21.096386,55.665268],[21.095276,55.678329],[21.09249,55.703323],[21.088329,55.718048],[21.09,55.719986],[21.097218,55.714714],[21.10944,55.703606],[21.114998,55.697487],[21.122498,55.688324],[21.127773,55.677773],[21.13472,55.629158],[21.128052,55.574997],[21.10305,55.42083],[21.04888,55.333054],[21.044441,55.326385]]],[[[25,56.29555],[25.072498,56.219154],[25.08111,56.210548],[25.096943,56.2011],[25.106106,56.197212],[25.133884,56.188881],[25.145828,56.186104],[25.160275,56.184433],[25.18305,56.183327],[25.262497,56.180824],[25.327496,56.16916],[25.429718,56.166382],[25.582775,56.151382],[25.696941,56.115273],[25.699162,56.108047],[25.704994,56.098045],[25.707771,56.09499],[25.714996,56.089989],[25.891106,55.999435],[25.932217,55.980545],[25.942219,55.97694],[25.996384,55.959717],[26.014275,55.955154],[26.058331,55.938042],[26.19083,55.867493],[26.20166,55.859993],[26.210827,55.85166],[26.221939,55.83999],[26.239162,55.818886],[26.240273,55.814995],[26.256943,55.78472],[26.263332,55.775269],[26.268887,55.76944],[26.275276,55.76416],[26.313332,55.73972],[26.338608,55.726379],[26.35833,55.71888],[26.375553,55.714157],[26.498329,55.686378],[26.51083,55.683876],[26.531387,55.680824],[26.57527,55.676102],[26.59138,55.674995],[26.613209,55.674835],[26.620831,55.661934],[26.624439,55.642769],[26.62916,55.605827],[26.62916,55.601662],[26.62666,55.593048],[26.526665,55.44694],[26.457218,55.349716],[26.455551,55.345543],[26.45583,55.34138],[26.45916,55.338882],[26.472771,55.3336],[26.505833,55.323883],[26.528885,55.317772],[26.554718,55.313049],[26.56694,55.314713],[26.619164,55.329437],[26.631386,55.33111],[26.645828,55.330276],[26.766941,55.313606],[26.783886,55.308884],[26.801109,55.301102],[26.811665,55.29361],[26.819717,55.285271],[26.819717,55.281105],[26.813885,55.274994],[26.79972,55.264442],[26.792221,55.259163],[26.775276,55.250549],[26.641663,55.190826],[26.521385,55.148331],[26.502777,55.152214],[26.481663,55.15499],[26.284164,55.148048],[26.27611,55.143326],[26.25944,55.129715],[26.25333,55.123604],[26.249718,55.11082],[26.250832,55.090546],[26.250275,55.08194],[26.24833,55.071106],[26.21944,55.029991],[26.209995,55.021378],[26.16083,54.977211],[26.076385,54.96194],[25.94333,54.95499],[25.929996,54.9561],[25.911942,54.953606],[25.87722,54.942215],[25.873051,54.93999],[25.795277,54.875824],[25.78889,54.87027],[25.73888,54.79305],[25.73666,54.789436],[25.736107,54.785],[25.72694,54.68305],[25.727219,54.666664],[25.731106,54.655823],[25.733051,54.652489],[25.748604,54.626381],[25.75666,54.61777],[25.761387,54.611382],[25.764164,54.60444],[25.765274,54.592491],[25.765553,54.588326],[25.764164,54.579163],[25.755554,54.56999],[25.74888,54.564438],[25.731106,54.55166],[25.71833,54.545273],[25.666939,54.530823],[25.658329,54.526657],[25.648884,54.517494],[25.55722,54.366104],[25.553051,54.359161],[25.550274,54.351105],[25.547497,54.332771],[25.547497,54.328606],[25.548607,54.324997],[25.55139,54.321938],[25.55833,54.31694],[25.568886,54.313606],[25.58194,54.311661],[25.611107,54.311378],[25.641384,54.314438],[25.659161,54.31721],[25.67555,54.320831],[25.691105,54.324997],[25.69833,54.330276],[25.70111,54.333328],[25.705273,54.335266],[25.710552,54.3336],[25.717495,54.328606],[25.804996,54.250832],[25.807774,54.248047],[25.80805,54.243881],[25.793053,54.17527],[25.79,54.167213],[25.785275,54.16054],[25.771664,54.154991],[25.766109,54.153877],[25.681107,54.137772],[25.66916,54.136108],[25.662216,54.136108],[25.551941,54.143051],[25.53889,54.145],[25.534443,54.146942],[25.504719,54.183052],[25.506107,54.18721],[25.54139,54.197769],[25.547775,54.203323],[25.575829,54.23638],[25.577221,54.240273],[25.57444,54.243607],[25.56472,54.251938],[25.50333,54.301933],[25.498882,54.304161],[25.47805,54.306656],[25.471661,54.306099],[25.466106,54.304993],[25.45194,54.299721],[25.438328,54.28889],[25.424164,54.2736],[25.41722,54.26833],[25.40583,54.26111],[25.391663,54.255829],[25.372498,54.254166],[25.345829,54.252777],[25.2075,54.221375],[25.201385,54.210548],[25.17888,54.186104],[25.161942,54.172493],[25.101387,54.14444],[25.082497,54.137497],[25.07194,54.13472],[25.043053,54.12971],[25.030552,54.12999],[25.02444,54.131104],[25.010277,54.13694],[25.006664,54.139435],[25.001389,54.145271],[24.986107,54.154709],[24.97583,54.157768],[24.968884,54.1586],[24.955273,54.158043],[24.86305,54.14666],[24.85083,54.145],[24.840275,54.14222],[24.836941,54.139717],[24.799721,54.10833],[24.79694,54.10527],[24.79555,54.10139],[24.80139,54.091377],[24.810555,54.07888],[24.822498,54.06388],[24.826107,54.061378],[24.83083,54.054993],[24.838329,54.041939],[24.840553,54.034439],[24.84138,54.018051],[24.839439,54.004166],[24.836109,53.996658],[24.829163,53.986382],[24.820831,53.977211],[24.734718,53.96888],[24.727772,53.9686],[24.720829,53.969437],[24.712772,53.973877],[24.70805,53.97999],[24.704163,53.990829],[24.702217,53.994156],[24.696663,54],[24.69166,54.001663],[24.685272,54.00194],[24.612217,53.992218],[24.523052,53.954712],[24.505833,53.946098],[24.471661,53.924713],[24.463329,53.920547],[24.406384,53.895],[24.392494,53.889717],[24.38694,53.8886],[24.38083,53.888046],[24.277775,53.899719],[24.269165,53.903877],[24.26277,53.909157],[24.25972,53.9161],[24.259163,53.924438],[24.25333,53.93443],[24.244995,53.943047],[24.238605,53.948326],[24.223606,53.9575],[24.209438,53.963326],[24.197216,53.96555],[24.175552,53.967491],[24.155273,53.966385],[24.143887,53.964157],[24.134995,53.960274],[24.123886,53.95305],[24.12138,53.949997],[24.110275,53.94249],[24.100552,53.93943],[24.088608,53.937492],[24.07527,53.93665],[24.016109,53.93721],[23.986107,53.93888],[23.898884,53.940544],[23.783886,53.93555],[23.70944,53.923882],[23.598885,53.928879],[23.589718,53.93277],[23.568607,53.939156],[23.54361,53.94332],[23.51667,53.946655],[23.50404,53.947044],[23.508053,53.960548],[23.517776,54.030273],[23.51722,54.047218],[23.49416,54.11721],[23.48444,54.138329],[23.45916,54.172768],[23.456383,54.17555],[23.361942,54.23193],[23.350273,54.238884],[23.333054,54.247215],[23.20444,54.287216],[23.115829,54.304436],[23.003052,54.37999],[23.001991,54.381054],[23,54.383049],[22.992771,54.387772],[22.987495,54.38916],[22.870274,54.408043],[22.85611,54.4086],[22.843609,54.406937],[22.826664,54.40332],[22.81361,54.397491],[22.810829,54.39444],[22.78588,54.36384],[22.776386,54.376938],[22.740829,54.419441],[22.731384,54.42749],[22.713608,54.439713],[22.707069,54.44812],[22.702217,54.455826],[22.694439,54.47332],[22.691383,54.493607],[22.69389,54.522766],[22.695827,54.53611],[22.719162,54.691376],[22.721107,54.694992],[22.74527,54.717209],[22.809441,54.769714],[22.81833,54.773605],[22.83194,54.77444],[22.837776,54.775826],[22.84249,54.777489],[22.84944,54.782768],[22.86138,54.80027],[22.867775,54.810547],[22.869164,54.814438],[22.869164,54.823326],[22.864998,54.8386],[22.853329,54.875824],[22.84944,54.887497],[22.84249,54.89694],[22.834995,54.901657],[22.732216,54.962494],[22.726662,54.963882],[22.71944,54.963608],[22.70166,54.960548],[22.68222,54.958328],[22.659161,54.9586],[22.653049,54.959717],[22.64833,54.961662],[22.643887,54.963608],[22.640831,54.966385],[22.63861,54.969711],[22.603607,55.043053],[22.602219,55.046661],[22.51277,55.063324],[22.27972,55.06721],[22.258053,55.066383],[22.197216,55.06166],[22.184162,55.060272],[22.146385,55.055267],[22.140553,55.053879],[22.13583,55.052216],[22.13222,55.049438],[22.124439,55.040276],[22.121109,55.037498],[22.108608,55.030823],[22.09805,55.028046],[22.077221,55.026657],[22.061943,55.027489],[22.050274,55.029991],[21.732216,55.132767],[21.722771,55.136658],[21.71999,55.139435],[21.715549,55.1461],[21.654442,55.178879],[21.640274,55.18471],[21.56416,55.19721],[21.431385,55.251938],[21.389717,55.282768],[21.381283,55.287094],[21.374165,55.288605],[21.367878,55.288307],[21.363308,55.286858],[21.327656,55.27063],[21.30027,55.258888],[21.280552,55.251938],[21.26915,55.249306],[21.263935,55.248985],[21.268602,55.260639],[21.266163,55.275684],[21.271448,55.279343],[21.288609,55.28333],[21.289719,55.287498],[21.289165,55.291664],[21.27673,55.322849],[21.253965,55.334641],[21.255999,55.365948],[21.238516,55.36676],[21.230789,55.359848],[21.194603,55.34074],[21.183626,55.34074],[21.186878,55.353344],[21.241768,55.418396],[21.24787,55.4371],[21.247215,55.463326],[21.244438,55.470543],[21.197495,55.574997],[21.145275,55.676102],[21.143051,55.679161],[21.116386,55.709435],[21.109997,55.715],[21.097496,55.722488],[21.079163,55.730545],[21.07611,55.73333],[21.073887,55.73666],[21.05833,55.78166],[21.04472,55.882767],[21.043331,55.90416],[21.043053,55.916664],[21.047775,55.927773],[21.057774,55.945541],[21.062218,55.95694],[21.066666,55.977768],[21.067219,55.991379],[21.060555,56.049995],[21.057774,56.061935],[21.051685,56.077309],[21.05805,56.079437],[21.089165,56.08416],[21.108887,56.086655],[21.123886,56.087494],[21.146664,56.088043],[21.197216,56.083328],[21.204716,56.083878],[21.209717,56.085548],[21.21805,56.089989],[21.223328,56.0961],[21.228882,56.107216],[21.23388,56.123047],[21.234718,56.141106],[21.239162,56.162209],[21.244438,56.168327],[21.258888,56.178604],[21.34583,56.23555],[21.354443,56.23999],[21.361107,56.240829],[21.376663,56.241104],[21.384995,56.240829],[21.391384,56.239716],[21.40777,56.239433],[21.42194,56.240547],[21.427773,56.241936],[21.44777,56.248878],[21.566666,56.295273],[21.73555,56.32333],[21.905273,56.36916],[22.038609,56.41277],[22.04888,56.4161],[22.067219,56.419441],[22.13944,56.423607],[22.154442,56.42416],[22.309441,56.403877],[22.481384,56.40638],[22.497215,56.40638],[22.519165,56.40443],[22.553608,56.399719],[22.586941,56.394714],[22.611942,56.389992],[22.623329,56.38694],[22.628052,56.384995],[22.63583,56.380272],[22.643608,56.375267],[22.653606,56.36721],[22.661385,56.362495],[22.671108,56.3586],[22.691383,56.35666],[22.827221,56.379158],[22.837498,56.382492],[22.846107,56.38694],[22.86027,56.397491],[22.886383,56.410271],[22.916939,56.420547],[22.92805,56.423325],[22.93388,56.424438],[22.94138,56.423882],[22.94694,56.422218],[22.955551,56.418053],[22.98666,56.3986],[22.992771,56.39305],[22.999161,56.383331],[23.008331,56.366104],[23.013054,56.35555],[23.018055,56.34943],[23.031387,56.33416],[23.0375,56.328606],[23.053886,56.319443],[23.068054,56.313606],[23.096107,56.305824],[23.104443,56.30555],[23.110275,56.306656],[23.129997,56.313881],[23.147217,56.32249],[23.180275,56.345543],[23.181385,56.348877],[23.177494,56.351105],[23.171108,56.352219],[23.16805,56.35527],[23.167496,56.359161],[23.171108,56.36194],[23.182217,56.36472],[23.296108,56.380821],[23.32,56.380272],[23.332218,56.377769],[23.35833,56.36916],[23.367775,56.364998],[23.441662,56.345268],[23.454441,56.343048],[23.525276,56.33416],[23.547497,56.334717],[23.559441,56.337212],[23.56805,56.341377],[23.578884,56.349159],[23.584721,56.35555],[23.596943,56.362213],[23.608608,56.364159],[23.726383,56.361382],[23.741104,56.359993],[23.873608,56.34277],[23.948883,56.332214],[23.99138,56.322769],[24.008331,56.318054],[24.065273,56.285553],[24.07444,56.281662],[24.13583,56.26416],[24.147774,56.261383],[24.16333,56.261108],[24.175274,56.263329],[24.265,56.289436],[24.320274,56.308327],[24.332218,56.310547],[24.339718,56.310822],[24.345276,56.309158],[24.364719,56.30166],[24.378883,56.29555],[24.404163,56.281937],[24.41833,56.2761],[24.42944,56.272766],[24.44944,56.269714],[24.47333,56.269157],[24.479996,56.269714],[24.558331,56.28833],[24.56277,56.29055],[24.582497,56.312492],[24.60278,56.329163],[24.653328,56.365829],[24.87944,56.448601],[24.891384,56.450829],[24.899719,56.450546],[24.906105,56.449432],[24.91555,56.445267],[24.922218,56.439987],[24.94222,56.40694],[24.956661,56.382492],[24.970551,56.353607],[24.981937,56.329163],[24.99305,56.304993],[25,56.29555]]]]}}]}';
    }
}
