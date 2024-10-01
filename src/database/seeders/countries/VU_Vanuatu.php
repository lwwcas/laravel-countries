<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class VU_Vanuatu extends CountrySeeder
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
        $this->name = 'Vanuatu';
        $this->official_name = 'Republic of Vanuatu';
        $this->iso_alpha_2 = 'VU';
        $this->iso_alpha_3 = 'VUT';
        $this->iso_numeric = '548';
        $this->international_phone = '678';

        $this->languages = ['bi','en','fr'];
        $this->tld = ['.vu'];
        $this->wmo = 'NV';
        $this->geoname_id = '2134431';

        $this->emoji = [
            'img' => '🇻🇺',
            'uCode' => 'U+1F1FB U+1F1FA',
        ];
        $this->color = [
            'hex' => [
            ],
            'rgb' => [
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '16 00 S',
                'desc' => '-16.376684188842773',
            ],
            'longitude' => [
                'classic' => '167 00 E',
                'desc' => '167.5625',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-13.066667',
                'min' => '-20.25',
            ],
            'longitude' => [
                'max' => '170.216667',
                'min' => '166.016667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"vu"},"geometry":{"type":"MultiPolygon","coordinates":[[[[169.846069,-20.252224],[169.826904,-20.25417],[169.770264,-20.24055],[169.761932,-20.234444],[169.738007,-20.20861],[169.736084,-20.20361],[169.733307,-20.18639],[169.733032,-20.18],[169.735229,-20.16778],[169.742462,-20.15361],[169.745514,-20.149445],[169.74939,-20.146389],[169.75415,-20.143612],[169.75943,-20.141945],[169.789703,-20.138611],[169.796356,-20.13805],[169.829132,-20.141666],[169.835785,-20.142776],[169.847473,-20.14583],[169.869415,-20.158611],[169.886658,-20.17055],[169.889984,-20.174168],[169.891937,-20.17916],[169.894135,-20.195831],[169.893585,-20.2025],[169.890259,-20.213612],[169.886108,-20.22361],[169.879669,-20.231667],[169.866364,-20.24555],[169.861908,-20.24805],[169.856628,-20.25],[169.846069,-20.252224]]],[[[170.217468,-19.55944],[170.212463,-19.56],[170.203308,-19.547779],[170.203583,-19.529167],[170.205231,-19.525],[170.21109,-19.52389],[170.232452,-19.52417],[170.235229,-19.54306],[170.234131,-19.547779],[170.23053,-19.55111],[170.217468,-19.55944]]],[[[169.498291,-19.545002],[169.431366,-19.658054],[169.424133,-19.657776],[169.397766,-19.655],[169.349701,-19.63694],[169.279694,-19.58445],[169.233856,-19.5275],[169.224396,-19.509167],[169.219971,-19.5],[169.202759,-19.46167],[169.203857,-19.456944],[169.23053,-19.35583],[169.232452,-19.350277],[169.235504,-19.34639],[169.248291,-19.338055],[169.263611,-19.331669],[169.301361,-19.32056],[169.335785,-19.32],[169.353577,-19.33139],[169.354675,-19.336945],[169.418854,-19.4825],[169.479401,-19.51778],[169.497742,-19.531113],[169.498291,-19.545002]]],[[[169.594971,-19.273613],[169.591064,-19.276947],[169.585236,-19.276669],[169.581085,-19.273613],[169.579132,-19.268612],[169.578583,-19.2625],[169.579681,-19.25639],[169.586639,-19.237221],[169.589142,-19.232498],[169.594971,-19.23139],[169.599976,-19.23361],[169.600525,-19.237221],[169.60025,-19.257225],[169.597473,-19.26889],[169.594971,-19.273613]]],[[[169.305237,-18.97889],[169.271088,-19],[169.236908,-18.98305],[169.123016,-18.938053],[169.107178,-18.931667],[168.994415,-18.88333],[168.989136,-18.88083],[168.983856,-18.8725],[168.979675,-18.85639],[168.979401,-18.849998],[168.982178,-18.68944],[168.983307,-18.68333],[168.987732,-18.67305],[169.000275,-18.65722],[169.018585,-18.64],[169.039978,-18.625832],[169.051086,-18.623055],[169.089966,-18.619999],[169.096619,-18.61972],[169.133881,-18.6325],[169.14386,-18.637222],[169.148041,-18.64028],[169.150818,-18.64444],[169.164703,-18.67222],[169.184418,-18.73972],[169.193848,-18.79195],[169.195801,-18.79695],[169.204681,-18.809166],[169.217743,-18.82444],[169.221344,-18.828056],[169.23053,-18.83333],[169.236908,-18.83417],[169.248566,-18.8375],[169.294128,-18.86195],[169.309418,-18.875278],[169.316376,-18.8825],[169.323303,-18.889721],[169.328583,-18.89833],[169.330536,-18.904446],[169.336639,-18.925556],[169.336365,-18.93111],[169.334137,-18.94361],[169.324402,-18.9625],[169.305237,-18.97889]]],[[[168.574677,-17.69278],[168.579407,-17.7125],[168.547485,-17.789169],[168.544983,-17.79389],[168.538574,-17.80194],[168.49469,-17.821114],[168.48941,-17.823055],[168.475525,-17.821667],[168.431915,-17.822224],[168.384155,-17.83],[168.36911,-17.79667],[168.284424,-17.713886],[168.276917,-17.707222],[168.245514,-17.69444],[168.239685,-17.69278],[168.224121,-17.69805],[168.21579,-17.703888],[168.193573,-17.72417],[168.191071,-17.72889],[168.187469,-17.74],[168.181366,-17.74778],[168.170807,-17.751392],[168.161926,-17.74194],[168.148041,-17.719719],[168.148865,-17.713612],[168.176361,-17.65472],[168.238861,-17.581669],[168.275818,-17.54611],[168.311096,-17.53139],[168.392487,-17.53417],[168.434418,-17.53778],[168.439423,-17.54],[168.443573,-17.54306],[168.574677,-17.69278]]],[[[168.399139,-16.78278],[168.404968,-16.78306],[168.409973,-16.78111],[168.416382,-16.77444],[168.424408,-16.76861],[168.429688,-16.76694],[168.436371,-16.76667],[168.442749,-16.7675],[168.453308,-16.77167],[168.456909,-16.77528],[168.4758,-16.798611],[168.475525,-16.84084],[168.474396,-16.84695],[168.471344,-16.84889],[168.381897,-16.804722],[168.352173,-16.79056],[168.346344,-16.78889],[168.339966,-16.78805],[168.329132,-16.78805],[168.309418,-16.789169],[168.29776,-16.791111],[168.287476,-16.79472],[168.251373,-16.815277],[168.245789,-16.823891],[168.24411,-16.829445],[168.2258,-16.831944],[168.221344,-16.83028],[168.190247,-16.8175],[168.17276,-16.808334],[168.168579,-16.80528],[168.146088,-16.778336],[168.118835,-16.71222],[168.117737,-16.70666],[168.116058,-16.672501],[168.117462,-16.65944],[168.148315,-16.580555],[168.178314,-16.575832],[168.184143,-16.57611],[168.187469,-16.579723],[168.19693,-16.59139],[168.199402,-16.59555],[168.272217,-16.68028],[168.360504,-16.76945],[168.364685,-16.772503],[168.399139,-16.78278]]],[[[168.231079,-16.516113],[168.22525,-16.51722],[168.218567,-16.516113],[168.208008,-16.51222],[168.202454,-16.50611],[168.201355,-16.50056],[168.202454,-16.494442],[168.221069,-16.43555],[168.229401,-16.429722],[168.242462,-16.429165],[168.24884,-16.43028],[168.253876,-16.432499],[168.255829,-16.43555],[168.243286,-16.492496],[168.239685,-16.503334],[168.23468,-16.512779],[168.231079,-16.516113]]],[[[168.21524,-16.174168],[168.258026,-16.25],[168.301636,-16.27167],[168.310516,-16.277225],[168.320801,-16.28805],[168.322754,-16.29306],[168.324982,-16.304169],[168.324677,-16.30972],[168.323029,-16.315277],[168.320526,-16.32],[168.308014,-16.336113],[168.304138,-16.339443],[168.284149,-16.347221],[168.267212,-16.35139],[168.254974,-16.35278],[168.248566,-16.35166],[168.243561,-16.34917],[168.237732,-16.3475],[168.224121,-16.346111],[168.217468,-16.34639],[168.166656,-16.349445],[168.144135,-16.36222],[168.103302,-16.34472],[168.062195,-16.33],[168.039978,-16.32389],[168.02832,-16.326111],[168.021912,-16.32639],[167.919708,-16.265278],[167.917755,-16.260281],[167.91275,-16.236942],[167.913025,-16.23],[167.917206,-16.22],[167.921082,-16.21666],[167.926361,-16.21472],[167.999115,-16.19361],[168.004974,-16.19278],[168.033051,-16.195],[168.056366,-16.194721],[168.062195,-16.19361],[168.082458,-16.17889],[168.086365,-16.175556],[168.11969,-16.137779],[168.125244,-16.12889],[168.129395,-16.11889],[168.129669,-16.11195],[168.132721,-16.10028],[168.138306,-16.09139],[168.143311,-16.089722],[168.16748,-16.08611],[168.182465,-16.09028],[168.186646,-16.093334],[168.192749,-16.10139],[168.21524,-16.174168]]],[[[167.416656,-16.110001],[167.621613,-16.259167],[167.743011,-16.33833],[167.748016,-16.340557],[167.753876,-16.339443],[167.822754,-16.42389],[167.825256,-16.42833],[167.837189,-16.4575],[167.838287,-16.463055],[167.837463,-16.46778],[167.772491,-16.535],[167.731903,-16.536945],[167.72467,-16.52333],[167.717194,-16.516666],[167.664978,-16.50222],[167.60025,-16.49778],[167.494965,-16.593334],[167.462463,-16.57778],[167.427185,-16.54222],[167.41748,-16.53222],[167.372192,-16.3475],[167.381622,-16.267223],[167.376068,-16.190556],[167.32663,-16.125278],[167.319702,-16.12056],[167.313019,-16.120834],[167.291931,-16.127499],[167.287201,-16.13],[167.281647,-16.138611],[167.279968,-16.144165],[167.277466,-16.148888],[167.250549,-16.16389],[167.240784,-16.16833],[167.227753,-16.16889],[167.224976,-16.16806],[167.181091,-16.14833],[167.17691,-16.145279],[167.151093,-16.095001],[167.146637,-16.08583],[167.14444,-16.07444],[167.143585,-16.055557],[167.172485,-15.91556],[167.175262,-15.90389],[167.177765,-15.89917],[167.184692,-15.89194],[167.21109,-15.87611],[167.222198,-15.873055],[167.247742,-15.8775],[167.327454,-15.911667],[167.331635,-15.91472],[167.38858,-16.01334],[167.391083,-16.01778],[167.393311,-16.02889],[167.393585,-16.035278],[167.391937,-16.04056],[167.378021,-16.055],[167.379669,-16.06],[167.399719,-16.091667],[167.416656,-16.110001]]],[[[167.209137,-15.755556],[167.195526,-15.75611],[167.188873,-15.75528],[167.17746,-15.75167],[167.162201,-15.74528],[167.10553,-15.715],[167.091644,-15.70722],[167.083862,-15.70028],[167.077179,-15.693056],[167.074677,-15.688889],[167.070801,-15.678888],[167.069702,-15.67306],[167.069122,-15.66056],[167.070251,-15.654446],[167.071899,-15.64889],[167.077454,-15.640278],[167.085236,-15.63361],[167.092743,-15.629166],[167.10968,-15.62528],[167.128571,-15.62361],[167.142761,-15.62444],[167.210236,-15.6325],[167.223022,-15.63472],[167.227173,-15.637779],[167.233307,-15.64555],[167.234955,-15.650557],[167.235504,-15.656944],[167.236359,-15.73361],[167.23468,-15.73889],[167.229126,-15.74778],[167.220245,-15.75278],[167.209137,-15.755556]]],[[[167.258606,-15.588055],[167.251923,-15.58833],[167.247742,-15.586666],[167.243561,-15.583611],[167.239136,-15.57444],[167.261108,-15.54639],[167.265533,-15.54389],[167.271362,-15.544167],[167.276917,-15.546112],[167.281097,-15.54889],[167.286377,-15.5575],[167.289978,-15.5675],[167.288879,-15.573889],[167.281921,-15.581112],[167.273041,-15.586111],[167.258606,-15.588055]]],[[[167.202454,-15.60861],[167.192749,-15.61139],[167.138031,-15.6075],[167.128021,-15.60555],[167.11969,-15.60166],[167.115509,-15.59861],[167.112183,-15.595],[167.110229,-15.59],[167.112183,-15.584444],[167.122192,-15.57333],[167.155243,-15.5425],[167.16275,-15.535833],[167.167206,-15.533333],[167.17746,-15.52972],[167.190521,-15.52917],[167.195526,-15.531668],[167.198303,-15.534445],[167.21051,-15.580278],[167.208008,-15.59972],[167.205536,-15.60444],[167.202454,-15.60861]]],[[[168.210785,-15.998055],[168.204407,-15.998333],[168.183044,-15.97833],[168.170258,-15.89083],[168.156921,-15.808056],[168.153046,-15.798334],[168.141937,-15.78167],[168.134979,-15.77417],[168.133026,-15.76917],[168.123291,-15.738333],[168.112183,-15.681944],[168.111908,-15.675556],[168.11496,-15.64583],[168.125519,-15.59778],[168.15332,-15.492222],[168.17691,-15.498333],[168.203308,-15.52833],[168.205231,-15.533333],[168.203308,-15.57833],[168.199707,-15.58917],[168.194977,-15.59889],[168.193298,-15.604166],[168.19165,-15.617498],[168.191925,-15.62361],[168.222748,-15.742222],[168.226624,-15.75194],[168.22995,-15.755556],[168.237732,-15.768612],[168.244415,-15.78278],[168.246063,-15.78778],[168.264435,-15.85972],[168.266663,-15.870832],[168.268311,-15.90639],[168.269135,-15.92944],[168.268585,-15.93639],[168.263031,-15.97305],[168.242188,-15.994722],[168.236908,-15.996666],[168.210785,-15.998055]]],[[[167.855804,-15.48583],[167.846924,-15.49083],[167.7258,-15.48694],[167.719421,-15.48611],[167.675812,-15.466944],[167.672485,-15.46333],[167.670532,-15.45833],[167.668304,-15.446945],[167.670258,-15.44167],[167.69165,-15.42055],[167.728302,-15.386389],[167.791351,-15.32944],[167.80304,-15.31944],[167.813293,-15.315834],[167.904968,-15.28972],[167.922485,-15.28639],[167.968018,-15.281389],[167.97467,-15.280834],[167.987457,-15.28306],[168.002197,-15.29],[168.0047,-15.29444],[168.000824,-15.30305],[167.930542,-15.41889],[167.924133,-15.42694],[167.906647,-15.44472],[167.855804,-15.48583]]],[[[167.175262,-15.266666],[167.168579,-15.266945],[167.163025,-15.265278],[167.161926,-15.259724],[167.163605,-15.25417],[167.16803,-15.25167],[167.171082,-15.25194],[167.179413,-15.25667],[167.181091,-15.26167],[167.180267,-15.265],[167.175262,-15.266666]]],[[[167.14444,-14.971388],[167.13858,-14.9725],[167.134155,-14.972221],[167.129395,-14.97],[167.118835,-14.964445],[167.101898,-14.9475],[167.098572,-14.94361],[167.096619,-14.93861],[167.096344,-14.932501],[167.10025,-14.929167],[167.105804,-14.930834],[167.110779,-14.933332],[167.151093,-14.957777],[167.154419,-14.96167],[167.148865,-14.968889],[167.14444,-14.971388]]],[[[168.169128,-15.39583],[168.135803,-15.39667],[168.130524,-15.352777],[168.106628,-15.078611],[168.088867,-14.951944],[168.093018,-14.928333],[168.09552,-14.92361],[168.099976,-14.92111],[168.105804,-14.92],[168.112183,-14.91972],[168.118011,-14.921389],[168.122192,-14.92444],[168.126617,-14.933889],[168.13858,-14.962778],[168.190247,-15.21472],[168.193298,-15.238611],[168.193298,-15.25167],[168.192749,-15.371387],[168.190521,-15.37611],[168.174133,-15.395279],[168.169128,-15.39583]]],[[[166.802765,-15.157501],[166.83551,-15.165],[166.907471,-15.163612],[166.914154,-15.16333],[166.919983,-15.16222],[166.924988,-15.160278],[166.928314,-15.156389],[166.954407,-15.118332],[166.961914,-15.10417],[166.967194,-15.087778],[166.968567,-15.074722],[166.967194,-15.062778],[166.962738,-15.02083],[166.963867,-14.95389],[166.96579,-14.94861],[166.968842,-14.94444],[166.981628,-14.93611],[166.994415,-14.928057],[167.0047,-14.92444],[167.011108,-14.92528],[167.040802,-14.93278],[167.058868,-14.945],[167.049408,-14.956944],[167.046936,-14.96167],[167.045258,-14.966944],[167.065247,-15.085],[167.085236,-15.13361],[167.089691,-15.142778],[167.092468,-15.14389],[167.1008,-15.13806],[167.104126,-15.13389],[167.107819,-15.1237],[167.116364,-15.121387],[167.132446,-15.127222],[167.136658,-15.13028],[167.139984,-15.13389],[167.156586,-15.203565],[167.153,-15.240646],[167.146042,-15.248443],[167.158051,-15.26761],[167.167114,-15.27309],[167.187469,-15.302223],[167.171356,-15.340277],[167.205521,-15.45988],[167.22525,-15.48305],[167.241623,-15.49033],[167.242065,-15.500333],[167.237717,-15.52426],[167.229019,-15.526433],[167.194977,-15.51694],[167.151154,-15.520343],[167.087738,-15.59278],[167.083313,-15.59528],[167.071625,-15.59805],[167.064972,-15.59861],[167.057739,-15.59805],[167.039429,-15.59417],[167.034424,-15.59194],[167.030273,-15.588888],[167.027771,-15.584444],[167.02359,-15.581388],[166.982452,-15.580555],[166.941345,-15.58],[166.920258,-15.579721],[166.913879,-15.58],[166.902771,-15.582777],[166.84079,-15.62639],[166.838287,-15.63111],[166.83551,-15.642778],[166.834137,-15.654446],[166.830261,-15.657778],[166.825806,-15.660278],[166.814697,-15.66305],[166.796082,-15.65917],[166.784698,-15.655834],[166.765259,-15.64639],[166.761932,-15.642778],[166.636658,-15.433332],[166.619415,-15.395555],[166.617737,-15.390556],[166.617462,-15.384445],[166.61911,-15.378887],[166.62912,-15.345278],[166.638306,-15.325832],[166.639709,-15.319721],[166.640808,-15.313334],[166.648315,-15.26222],[166.649994,-15.249166],[166.650543,-15.229166],[166.578308,-15.01528],[166.535797,-14.894445],[166.532745,-14.88389],[166.526917,-14.862778],[166.52359,-14.845833],[166.521637,-14.821388],[166.529144,-14.72972],[166.531921,-14.71833],[166.545807,-14.66972],[166.549408,-14.658611],[166.55191,-14.65389],[166.563873,-14.645],[166.592743,-14.62444],[166.599121,-14.624166],[166.602448,-14.62778],[166.620789,-14.65806],[166.622467,-14.66305],[166.626617,-14.67944],[166.639435,-14.71417],[166.675537,-14.768612],[166.693024,-14.786945],[166.718842,-14.810833],[166.732727,-14.83167],[166.749695,-14.86972],[166.761108,-14.905834],[166.786102,-15.032501],[166.7883,-15.06889],[166.787476,-15.09167],[166.794128,-15.13194],[166.795258,-15.1375],[166.802765,-15.157501]]],[[[167.527466,-14.32667],[167.521088,-14.32694],[167.427765,-14.32444],[167.421906,-14.32417],[167.417206,-14.32194],[167.394989,-14.308056],[167.39386,-14.3025],[167.39444,-14.29555],[167.401642,-14.2325],[167.405823,-14.200277],[167.411102,-14.18361],[167.413605,-14.17889],[167.444122,-14.16056],[167.448578,-14.15806],[167.527191,-14.15333],[167.583588,-14.17055],[167.588287,-14.172777],[167.598572,-14.19417],[167.597748,-14.22],[167.596619,-14.22611],[167.591644,-14.250278],[167.588013,-14.26111],[167.558014,-14.309723],[167.551636,-14.317499],[167.548035,-14.320833],[167.539154,-14.32444],[167.527466,-14.32667]]],[[[167.479126,-13.94833],[167.468292,-13.95111],[167.457184,-13.897501],[167.454681,-13.89333],[167.447205,-13.88639],[167.413025,-13.85611],[167.38916,-13.837221],[167.386658,-13.833055],[167.385529,-13.827223],[167.387482,-13.77167],[167.389709,-13.76694],[167.407745,-13.742222],[167.414703,-13.735],[167.418579,-13.73167],[167.431641,-13.72417],[167.464966,-13.708611],[167.469971,-13.706944],[167.476624,-13.70667],[167.487732,-13.71],[167.506653,-13.718611],[167.524414,-13.74694],[167.577759,-13.84722],[167.572754,-13.860832],[167.486633,-13.941668],[167.483032,-13.945],[167.479126,-13.94833]]],[[[167.705536,-13.675001],[167.635254,-13.6975],[167.628296,-13.696945],[167.625519,-13.69555],[167.623566,-13.69194],[167.625244,-13.68639],[167.667755,-13.63667],[167.682739,-13.62361],[167.687744,-13.62167],[167.700806,-13.62111],[167.711365,-13.625],[167.713867,-13.62944],[167.716644,-13.657501],[167.716064,-13.664446],[167.709961,-13.672501],[167.705536,-13.675001]]],[[[167.347198,-13.56139],[167.341339,-13.5625],[167.313873,-13.554445],[167.30304,-13.544167],[167.299713,-13.54056],[167.293304,-13.52639],[167.292755,-13.513613],[167.294434,-13.50833],[167.297485,-13.50417],[167.312744,-13.49111],[167.322205,-13.486944],[167.328857,-13.48639],[167.348572,-13.489166],[167.353577,-13.49139],[167.356903,-13.494999],[167.369415,-13.525],[167.371063,-13.530001],[167.367737,-13.54083],[167.365234,-13.545834],[167.358856,-13.553612],[167.356079,-13.556389],[167.347198,-13.56139]]],[[[166.67746,-13.4525],[166.673035,-13.455],[166.668579,-13.454721],[166.664429,-13.45167],[166.648865,-13.42583],[166.647217,-13.42083],[166.648315,-13.414446],[166.650818,-13.40972],[166.660248,-13.405556],[166.678314,-13.403055],[166.683319,-13.405556],[166.690521,-13.41222],[166.694122,-13.41583],[166.696625,-13.42028],[166.698029,-13.43083],[166.695526,-13.435556],[166.681091,-13.44917],[166.67746,-13.4525]]],[[[166.631622,-13.38139],[166.626617,-13.38194],[166.597473,-13.34611],[166.596069,-13.33417],[166.601349,-13.332222],[166.613281,-13.335278],[166.635254,-13.34889],[166.641357,-13.35694],[166.643036,-13.359999],[166.644135,-13.36555],[166.640808,-13.37639],[166.636932,-13.37972],[166.631622,-13.38139]]],[[[166.620239,-13.27139],[166.609131,-13.27444],[166.602753,-13.27333],[166.579407,-13.26139],[166.578308,-13.255835],[166.576355,-13.24028],[166.578033,-13.235],[166.583862,-13.22611],[166.587463,-13.22305],[166.592743,-13.221111],[166.622742,-13.2175],[166.629944,-13.217777],[166.635529,-13.219444],[166.638306,-13.22167],[166.639435,-13.2275],[166.639435,-13.24055],[166.637207,-13.253056],[166.62384,-13.26833],[166.620239,-13.27139]]],[[[166.559692,-13.18639],[166.554688,-13.188334],[166.548859,-13.187778],[166.538574,-13.18389],[166.5336,-13.18139],[166.526093,-13.17472],[166.523041,-13.148056],[166.516663,-13.07861],[166.518311,-13.07333],[166.521362,-13.070555],[166.534973,-13.072222],[166.546082,-13.07556],[166.551086,-13.07806],[166.559143,-13.08417],[166.564972,-13.091944],[166.568848,-13.12167],[166.571899,-13.154446],[166.563599,-13.183332],[166.559692,-13.18639]]]]}}]}';
    }
}
