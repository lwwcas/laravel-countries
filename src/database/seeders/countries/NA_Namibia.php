<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class NA_Namibia extends CountrySeeder
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
        $this->name = 'Namibia';
        $this->official_name = 'Republic of Namibia';
        $this->iso_alpha_2 = 'NA';
        $this->iso_alpha_3 = 'NAM';
        $this->iso_numeric = '516';
        $this->international_phone = '264';

        $this->languages = ['en','af'];
        $this->tld = ['.na'];
        $this->wmo = 'NM';
        $this->geoname_id = '3355338';

        $this->emoji = [
            'img' => '🇳🇦',
            'uCode' => 'U+1F1F3 U+1F1E6',
        ];
        $this->color = [
            'hex' => [
                '#0000ff',
                '#ff0000',
                '#008000',
                '#ffffff',
                '#ffff00',
            ],
            'rgb' => [
                '0,0,255',
                '255,0,0',
                '0,128,0',
                '255,255,255',
                '255,255,0',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '22 00 S',
                'desc' => '-22.150699615478516',
            ],
            'longitude' => [
                'classic' => '17 00 E',
                'desc' => '17.177526473999023',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '-16.983333',
                'min' => '-28.933333',
            ],
            'longitude' => [
                'max' => '25.25',
                'min' => '12.016667',
            ],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"na"},"geometry":{"type":"Polygon","coordinates":[[[23.284721,-17.662502],[23.289165,-17.661114],[23.476109,-17.625835],[23.820831,-17.56028],[24.021942,-17.521389],[24.03611,-17.51778],[24.239086,-17.478432],[24.374722,-17.472778],[24.387775,-17.474167],[24.437222,-17.48167],[24.443054,-17.483059],[24.502499,-17.508057],[24.542221,-17.525002],[24.562222,-17.533058],[24.568607,-17.53389],[24.590275,-17.53389],[24.615276,-17.508892],[24.623055,-17.502781],[24.6325,-17.498058],[24.643887,-17.495281],[24.663887,-17.493614],[24.708611,-17.498337],[24.817776,-17.515556],[24.912498,-17.540836],[24.969997,-17.559723],[24.982498,-17.582226],[24.986111,-17.585556],[25.029999,-17.610001],[25.065277,-17.624725],[25.247219,-17.777225],[25.256664,-17.788891],[25.264431,-17.80225],[25.255314,-17.796417],[25.249443,-17.795002],[25.183887,-17.782501],[25.178055,-17.781391],[25.171665,-17.781948],[25.147221,-17.786392],[25.139442,-17.792503],[25.136665,-17.796669],[25.133053,-17.800282],[25.125832,-17.807224],[25.122219,-17.810558],[25.103054,-17.826389],[25.098053,-17.828613],[25.09222,-17.830002],[25.072777,-17.832226],[25.059998,-17.832226],[25,-17.82605],[24.972775,-17.821114],[24.936108,-17.813892],[24.839722,-17.835835],[24.828331,-17.838612],[24.82333,-17.840557],[24.679165,-17.944168],[24.580276,-18.048615],[24.57111,-18.053612],[24.560276,-18.056946],[24.553608,-18.057781],[24.524166,-18.060001],[24.501942,-18.060558],[24.496109,-18.059448],[24.491665,-18.056667],[24.47361,-18.03278],[24.451942,-17.999168],[24.441109,-17.981945],[24.438889,-17.977222],[24.438053,-17.971111],[24.419441,-17.954723],[24.414444,-17.952778],[24.388332,-17.945835],[24.368332,-17.947224],[24.362499,-17.948612],[24.353054,-17.953613],[24.268887,-18.013336],[24.006664,-18.167778],[23.96722,-18.185001],[23.91222,-18.236946],[23.88694,-18.264763],[23.874722,-18.260281],[23.866108,-18.265835],[23.845833,-18.287502],[23.84222,-18.292503],[23.832775,-18.310837],[23.826942,-18.319168],[23.791664,-18.354168],[23.719166,-18.425282],[23.650555,-18.469723],[23.615578,-18.485069],[23.610935,-18.485252],[23.598331,-18.482502],[23.582497,-18.476948],[23.578053,-18.474167],[23.570831,-18.467224],[23.563889,-18.437225],[23.548885,-18.369167],[23.551109,-18.364445],[23.559719,-18.358891],[23.560555,-18.354168],[23.554165,-18.326115],[23.519722,-18.266945],[23.503052,-18.248337],[23.455555,-18.205002],[23.451385,-18.202225],[23.43111,-18.19389],[23.398052,-18.176113],[23.363052,-18.127224],[23.329998,-18.076389],[23.325832,-18.045002],[23.317497,-18.017502],[23.315277,-18.013336],[23.297108,-17.995949],[23.287113,-17.996336],[23.077774,-18.004448],[22.637218,-18.08667],[22.5,-18.111267],[22.262218,-18.153893],[21.816944,-18.238335],[21.462498,-18.304447],[21.235554,-18.311947],[20.993286,-18.318417],[20.99361,-18.338612],[20.994164,-18.475559],[20.994164,-18.695278],[20.99353,-19.171947],[20.993076,-19.998222],[20.993332,-20.179169],[20.992809,-20.824272],[20.993031,-20.992451],[20.992496,-21.01889],[20.992496,-21.322224],[20.992775,-21.597225],[20.992775,-21.941948],[20.992775,-21.969448],[20.991943,-21.996948],[20.917774,-21.998337],[20.649719,-22],[20.308331,-22.001392],[20.000473,-22.001564],[19.996666,-22.005001],[19.996109,-22.087502],[19.997219,-22.266945],[19.997595,-22.5],[19.997498,-22.722504],[19.997776,-22.943336],[19.998278,-22.959921],[19.998608,-22.970837],[19.998886,-23.12278],[19.998901,-23.308697],[19.999443,-23.45417],[20,-23.647503],[20.000275,-23.757225],[20.000538,-23.86441],[20,-23.950836],[20.000553,-24.282223],[20.00111,-24.406391],[20.001942,-24.572224],[20.00222,-24.724167],[20.000942,-24.765408],[20.001663,-24.793613],[20.001663,-24.862782],[20.001389,-25.083614],[20.000553,-25.221668],[20.000275,-25.415001],[20.000435,-25.616489],[20,-25.870834],[20,-26.409168],[19.999443,-27.030281],[19.999165,-27.320278],[19.998764,-27.369499],[19.998333,-27.485836],[19.998055,-27.582226],[19.997776,-27.871948],[19.998333,-28.065002],[19.998055,-28.354725],[19.997776,-28.409725],[19.99612,-28.421448],[19.820831,-28.490002],[19.803608,-28.495003],[19.797222,-28.496113],[19.782219,-28.495003],[19.756664,-28.489445],[19.745831,-28.485001],[19.739441,-28.483612],[19.732498,-28.484169],[19.569462,-28.526829],[19.565453,-28.529835],[19.513332,-28.595001],[19.493889,-28.633057],[19.491943,-28.666668],[19.489441,-28.671391],[19.466389,-28.699722],[19.447777,-28.710835],[19.418331,-28.718891],[19.358887,-28.734447],[19.339165,-28.737225],[19.325275,-28.728615],[19.319721,-28.726391],[19.304996,-28.725281],[19.297775,-28.725559],[19.285275,-28.728058],[19.269165,-28.734447],[19.262497,-28.7425],[19.259998,-28.747223],[19.240833,-28.793613],[19.239166,-28.798889],[19.238888,-28.805836],[19.240276,-28.81139],[19.248055,-28.831669],[19.256664,-28.851112],[19.263332,-28.859726],[19.253887,-28.899445],[19.191109,-28.933334],[19.176666,-28.941113],[19.151108,-28.952778],[19.140553,-28.957226],[19.123055,-28.962223],[19.108055,-28.962502],[19.101109,-28.961391],[19.009441,-28.932224],[18.995552,-28.923615],[18.989719,-28.915279],[18.985275,-28.905281],[18.983887,-28.899723],[18.973888,-28.881668],[18.966942,-28.873611],[18.957775,-28.868057],[18.945274,-28.864723],[18.723053,-28.83667],[18.715275,-28.836391],[18.338333,-28.884445],[18.189999,-28.90778],[18.183609,-28.90889],[18.175831,-28.908611],[18.051666,-28.872223],[18.046387,-28.870003],[18.041664,-28.866947],[18.038055,-28.863335],[18.031387,-28.855556],[18.020832,-28.84417],[18.001389,-28.826946],[17.984722,-28.813892],[17.971664,-28.804169],[17.961666,-28.799168],[17.912498,-28.779167],[17.749722,-28.746391],[17.710831,-28.756668],[17.684998,-28.768059],[17.673611,-28.771667],[17.655552,-28.775837],[17.647499,-28.775558],[17.635277,-28.772224],[17.613609,-28.763058],[17.604443,-28.756947],[17.602497,-28.752224],[17.600555,-28.74028],[17.602219,-28.727222],[17.602219,-28.714169],[17.598331,-28.697502],[17.595276,-28.693336],[17.588055,-28.686111],[17.57737,-28.681221],[17.497776,-28.694725],[17.461109,-28.702778],[17.439442,-28.710835],[17.422775,-28.716393],[17.416386,-28.717503],[17.409443,-28.716393],[17.40472,-28.713612],[17.401108,-28.710003],[17.398888,-28.705002],[17.361385,-28.535004],[17.375553,-28.433056],[17.38472,-28.427223],[17.388054,-28.423058],[17.39333,-28.413612],[17.396111,-28.402225],[17.399441,-28.372501],[17.399719,-28.353889],[17.398052,-28.342224],[17.351109,-28.24139],[17.348888,-28.236668],[17.340832,-28.230003],[17.331665,-28.224167],[17.32111,-28.219448],[17.313015,-28.219139],[17.306942,-28.22028],[17.297222,-28.225281],[17.285553,-28.235836],[17.28083,-28.238335],[17.274441,-28.239445],[17.226944,-28.246948],[17.221642,-28.244678],[17.213333,-28.238335],[17.198608,-28.223614],[17.186108,-28.207226],[17.184158,-28.202534],[17.183609,-28.196114],[17.188332,-28.171658],[17.195553,-28.126945],[17.192219,-28.11639],[17.186386,-28.108059],[17.181923,-28.105042],[17.171658,-28.102264],[17.16328,-28.099995],[17.144997,-28.095001],[17.139442,-28.092781],[17.129166,-28.08139],[17.123608,-28.072781],[17.117222,-28.058056],[17.111664,-28.049446],[17.104164,-28.042225],[17.089722,-28.03389],[17.078331,-28.030003],[17.071388,-28.028893],[17.06361,-28.028614],[16.9175,-28.063892],[16.912777,-28.066669],[16.908607,-28.069725],[16.890274,-28.088337],[16.88361,-28.09639],[16.822498,-28.237782],[16.798611,-28.348335],[16.803333,-28.364445],[16.802219,-28.369167],[16.776665,-28.441669],[16.727776,-28.496113],[16.722775,-28.498611],[16.71722,-28.500557],[16.710278,-28.500835],[16.70472,-28.498611],[16.701111,-28.494724],[16.699165,-28.490002],[16.697498,-28.478058],[16.693333,-28.468334],[16.690552,-28.46389],[16.684998,-28.46167],[16.678055,-28.460556],[16.6675,-28.465],[16.624996,-28.496113],[16.48959,-28.578178],[16.458054,-28.612225],[16.453888,-28.61528],[16.449165,-28.617779],[16.441944,-28.618336],[16.435833,-28.616669],[16.39333,-28.591114],[16.354443,-28.562778],[16.171944,-28.39917],[16.158054,-28.383892],[16.117222,-28.337502],[16.049721,-28.266392],[16.027775,-28.244724],[16.018608,-28.238613],[15.997499,-28.229168],[15.973331,-28.215],[15.898611,-28.162781],[15.759998,-28.037781],[15.752777,-28.030556],[15.736111,-28.011112],[15.689722,-27.956112],[15.676388,-27.933891],[15.676109,-27.927502],[15.677221,-27.921391],[15.680832,-27.917503],[15.683332,-27.912781],[15.683887,-27.905834],[15.682777,-27.90028],[15.672777,-27.875557],[15.669998,-27.871391],[15.646944,-27.843891],[15.609165,-27.801113],[15.601944,-27.793892],[15.570276,-27.767223],[15.5525,-27.754448],[15.534166,-27.736115],[15.52861,-27.727501],[15.527222,-27.721947],[15.520555,-27.68417],[15.523333,-27.679447],[15.530277,-27.671669],[15.532776,-27.666946],[15.533333,-27.661392],[15.528055,-27.645836],[15.519165,-27.626945],[15.399166,-27.455002],[15.360554,-27.407223],[15.294167,-27.322502],[15.287222,-27.302223],[15.264999,-27.223335],[15.262499,-27.212223],[15.264999,-27.200001],[15.269999,-27.162224],[15.237778,-26.977222],[15.234722,-26.966667],[15.230833,-26.956669],[15.223055,-26.943058],[15.214167,-26.930279],[15.205276,-26.924168],[15.199165,-26.922501],[15.179165,-26.918335],[15.157776,-26.902779],[15.112499,-26.78389],[15.094999,-26.735279],[15.084999,-26.70417],[15.083887,-26.698612],[15.082222,-26.680557],[15.079721,-26.650002],[15.092222,-26.636112],[15.095833,-26.632225],[15.123055,-26.627502],[15.129444,-26.626667],[15.134722,-26.628891],[15.138332,-26.632504],[15.138611,-26.638889],[15.13722,-26.645],[15.134722,-26.671669],[15.135832,-26.677502],[15.141943,-26.67778],[15.166666,-26.623337],[15.172499,-26.606945],[15.17111,-26.59639],[15.131109,-26.478615],[15.121111,-26.453892],[15.113609,-26.440281],[15.094444,-26.410004],[15.087915,-26.400978],[15.075554,-26.39167],[15.047499,-26.375],[15.031944,-26.367779],[15.014444,-26.361946],[14.991943,-26.353615],[14.975555,-26.346947],[14.971109,-26.34417],[14.968332,-26.339725],[14.964443,-26.329723],[14.959166,-26.308056],[14.93861,-26.139446],[14.941944,-26.135559],[14.948055,-26.135834],[14.960833,-26.138615],[14.967222,-26.137779],[14.971943,-26.135281],[14.978054,-26.126667],[14.98,-26.121113],[14.981667,-26.08889],[14.981667,-26.069447],[14.98,-26.057503],[14.969444,-26.014168],[14.958887,-25.990002],[14.95611,-25.985558],[14.935555,-25.963058],[14.919443,-25.943336],[14.91111,-25.930279],[14.837776,-25.761948],[14.834444,-25.745003],[14.834166,-25.738892],[14.846666,-25.642223],[14.851665,-25.625],[14.863333,-25.592503],[14.86611,-25.588058],[14.878332,-25.578335],[14.881666,-25.574448],[14.882221,-25.567501],[14.881388,-25.548889],[14.843887,-25.426113],[14.838055,-25.411114],[14.835278,-25.406948],[14.82472,-25.395836],[14.82,-25.386669],[14.814165,-25.37167],[14.800833,-25.285004],[14.800554,-25.278893],[14.801666,-25.272781],[14.811666,-25.253334],[14.834166,-25.1875],[14.857777,-25.087223],[14.858332,-25.067223],[14.855,-25.050556],[14.838888,-25.011391],[14.832073,-24.999439],[14.801109,-24.956669],[14.792776,-24.943611],[14.790554,-24.932224],[14.787222,-24.896114],[14.786943,-24.890003],[14.791943,-24.86528],[14.796389,-24.855278],[14.796944,-24.848335],[14.781666,-24.808613],[14.776943,-24.799446],[14.732222,-24.718334],[14.726665,-24.709724],[14.664721,-24.642223],[14.609999,-24.582779],[14.603611,-24.574722],[14.599165,-24.565556],[14.596943,-24.554169],[14.598055,-24.530003],[14.599998,-24.524723],[14.603333,-24.520836],[14.608055,-24.518333],[14.615276,-24.512501],[14.618055,-24.507778],[14.619444,-24.490002],[14.619165,-24.483612],[14.615833,-24.466946],[14.612778,-24.45639],[14.570833,-24.359726],[14.554443,-24.333614],[14.510832,-24.251945],[14.488333,-24.199448],[14.472776,-24.153336],[14.463333,-24.109169],[14.461943,-24.097504],[14.455276,-23.987782],[14.45611,-23.967503],[14.457499,-23.961391],[14.461943,-23.951389],[14.464722,-23.946667],[14.471943,-23.939445],[14.510277,-23.826389],[14.500555,-23.616947],[14.496111,-23.588337],[14.493889,-23.577225],[14.49,-23.567223],[14.481943,-23.554169],[14.478611,-23.550556],[14.473055,-23.541946],[14.440832,-23.451389],[14.434444,-23.417778],[14.434166,-23.411392],[14.439999,-23.395279],[14.442499,-23.390556],[14.469999,-23.346668],[14.474722,-23.34417],[14.48,-23.346668],[14.480276,-23.352779],[14.477777,-23.36528],[14.475832,-23.370556],[14.47611,-23.376945],[14.478054,-23.381668],[14.483889,-23.382225],[14.488609,-23.379723],[14.491943,-23.375835],[14.496111,-23.350559],[14.498333,-23.330559],[14.497776,-23.318058],[14.483889,-23.245281],[14.481667,-23.233891],[14.461388,-23.166389],[14.453884,-23.146397],[14.451111,-23.142223],[14.440554,-23.124168],[14.43111,-23.099445],[14.41,-23.032223],[14.408888,-23.026669],[14.408333,-23.014168],[14.410555,-22.967224],[14.429165,-22.890278],[14.434444,-22.881111],[14.438332,-22.877781],[14.444443,-22.879723],[14.448889,-22.917225],[14.446665,-22.935837],[14.444721,-22.960556],[14.458611,-22.997501],[14.462776,-23.000557],[14.469444,-22.9925],[14.51222,-22.933891],[14.518055,-22.925282],[14.525833,-22.911114],[14.533609,-22.889446],[14.53611,-22.877224],[14.536665,-22.870281],[14.539165,-22.805],[14.538887,-22.798615],[14.529165,-22.720001],[14.524845,-22.692066],[14.527161,-22.673544],[14.527777,-22.668613],[14.527498,-22.656113],[14.525833,-22.638058],[14.523333,-22.620003],[14.511389,-22.55278],[14.416388,-22.334446],[14.391666,-22.290001],[14.38361,-22.276947],[14.285831,-22.123337],[14.127777,-21.940556],[14.108055,-21.91917],[14.096943,-21.90889],[14.0425,-21.862225],[13.952499,-21.785557],[13.949165,-21.781948],[13.949444,-21.77639],[13.954721,-21.767223],[13.958055,-21.763336],[13.965832,-21.749168],[13.969721,-21.738335],[13.970276,-21.73167],[13.96611,-21.719448],[13.961666,-21.710281],[13.951666,-21.693611],[13.935555,-21.674446],[13.879721,-21.599445],[13.87611,-21.589725],[13.867498,-21.557224],[13.864443,-21.540558],[13.861944,-21.51667],[13.859165,-21.506111],[13.853611,-21.49139],[13.815832,-21.435558],[13.809721,-21.427502],[13.779165,-21.394169],[13.701111,-21.296112],[13.576944,-21.129169],[13.407776,-20.868893],[13.4,-20.855835],[13.384998,-20.824448],[13.377777,-20.804447],[13.374722,-20.787781],[13.374443,-20.77528],[13.377499,-20.748611],[13.375277,-20.731113],[13.369444,-20.703892],[13.352777,-20.646667],[13.311666,-20.564167],[13.304165,-20.551392],[13.298054,-20.543335],[13.284721,-20.528336],[13.27611,-20.516113],[13.270832,-20.507504],[13.255278,-20.475281],[13.250832,-20.465836],[13.249166,-20.460835],[13.244165,-20.433056],[13.242222,-20.4025],[13.238888,-20.373058],[13.223888,-20.307781],[13.217499,-20.287502],[13.198889,-20.238335],[13.174999,-20.180836],[13.159721,-20.154724],[13.140276,-20.131111],[13.123888,-20.118893],[13.114721,-20.113335],[13.104166,-20.109169],[13.084444,-20.099445],[13.060276,-20.079445],[13.051109,-20.06778],[13.044167,-20.054169],[13.039721,-20.038612],[13.030277,-20.001392],[12.989166,-19.909447],[12.979721,-19.891392],[12.970276,-19.873337],[12.944443,-19.823891],[12.931665,-19.795834],[12.923887,-19.78278],[12.811943,-19.598335],[12.791388,-19.565002],[12.773336,-19.539093],[12.707222,-19.417778],[12.69861,-19.39917],[12.688055,-19.369446],[12.639999,-19.261669],[12.586943,-19.1525],[12.542221,-19.06778],[12.460833,-18.928059],[12.441666,-18.89917],[12.421665,-18.870556],[12.415833,-18.862503],[12.306665,-18.717224],[12.29611,-18.706112],[12.285555,-18.695557],[12.230833,-18.650558],[12.21361,-18.638615],[12.196665,-18.626945],[12.179443,-18.61528],[12.169722,-18.610279],[12.146111,-18.593056],[12.125555,-18.577778],[12.083055,-18.535557],[12.020832,-18.471111],[11.998888,-18.418892],[11.996944,-18.40778],[11.998888,-18.381111],[11.996944,-18.370003],[11.995277,-18.365002],[11.953054,-18.265835],[11.948889,-18.25639],[11.938889,-18.23917],[11.898333,-18.186947],[11.891666,-18.179447],[11.881109,-18.168892],[11.853611,-18.146667],[11.840555,-18.131668],[11.809721,-18.090557],[11.804722,-18.081947],[11.770277,-17.995556],[11.764999,-17.980835],[11.762499,-17.97028],[11.759722,-17.953335],[11.741943,-17.83028],[11.732498,-17.761948],[11.716665,-17.564167],[11.716389,-17.539169],[11.717222,-17.483612],[11.720554,-17.457226],[11.730833,-17.378334],[11.73361,-17.366112],[11.747776,-17.329723],[11.749722,-17.30917],[11.753736,-17.265011],[11.752783,-17.254833],[11.804998,-17.271667],[11.810833,-17.271389],[11.825832,-17.266392],[11.880833,-17.228336],[11.888332,-17.220558],[11.902222,-17.205833],[11.92861,-17.182781],[11.937498,-17.178612],[11.97611,-17.164169],[12.048054,-17.14389],[12.084721,-17.135281],[12.090832,-17.137779],[12.205832,-17.194725],[12.238054,-17.215279],[12.292221,-17.229725],[12.434166,-17.21278],[12.478888,-17.241669],[12.55722,-17.243336],[12.604443,-17.225834],[12.816111,-17.108891],[12.819721,-17.105278],[12.851387,-17.072502],[12.874998,-17.04528],[12.8825,-17.036392],[12.886665,-17.033611],[12.923332,-17.016392],[12.985832,-16.991112],[13.013332,-16.980003],[13.023611,-16.976112],[13.149166,-16.95417],[13.160555,-16.952778],[13.166943,-16.953335],[13.170832,-16.95528],[13.185276,-16.96389],[13.208887,-16.973614],[13.251665,-16.985279],[13.269999,-16.984447],[13.317778,-16.978058],[13.34631,-16.970669],[13.366665,-16.96917],[13.373333,-16.969448],[13.379444,-16.97139],[13.384722,-16.973614],[13.469721,-17.009724],[13.474443,-17.011948],[13.492498,-17.023613],[13.496111,-17.0275],[13.52611,-17.077778],[13.529999,-17.086945],[13.531111,-17.092781],[13.530832,-17.098892],[13.527777,-17.110836],[13.655832,-17.215557],[13.665554,-17.222225],[13.697777,-17.24139],[13.841389,-17.323612],[13.928888,-17.401112],[13.993219,-17.423946],[14.013054,-17.411667],[14.016943,-17.410278],[14.023611,-17.410004],[14.051109,-17.419445],[14.079721,-17.429726],[14.086111,-17.430279],[14.165833,-17.421947],[14.176943,-17.42028],[14.191111,-17.415001],[14.198332,-17.40778],[14.218054,-17.386948],[14.361666,-17.387222],[14.448055,-17.387501],[14.634722,-17.388336],[14.993889,-17.389725],[15.496944,-17.389446],[15.583055,-17.389168],[15.956665,-17.386669],[16.00333,-17.386669],[16.60611,-17.390835],[17.278831,-17.392223],[17.510555,-17.391945],[17.561665,-17.390835],[17.733887,-17.388889],[18.000549,-17.386169],[18.117222,-17.386948],[18.188889,-17.387222],[18.389999,-17.386948],[18.451538,-17.389835],[18.513332,-17.472778],[18.578331,-17.572224],[18.641941,-17.648056],[18.748608,-17.74139],[18.756386,-17.74778],[18.761108,-17.750557],[18.801666,-17.76778],[18.806942,-17.77],[18.915833,-17.815556],[18.923054,-17.817223],[18.980553,-17.825558],[18.987221,-17.826389],[19.025833,-17.830002],[19.055832,-17.827778],[19.114441,-17.820835],[19.119164,-17.818058],[19.122498,-17.815002],[19.132221,-17.802502],[19.136944,-17.800282],[19.142776,-17.799725],[19.175278,-17.801113],[19.242222,-17.805836],[19.248886,-17.806667],[19.290833,-17.821945],[19.306664,-17.828056],[19.333885,-17.841393],[19.337776,-17.84528],[19.34333,-17.847504],[19.41333,-17.861115],[19.445831,-17.862782],[19.559166,-17.8675],[19.701385,-17.870556],[19.79361,-17.86639],[19.802219,-17.861115],[19.811943,-17.858334],[19.825275,-17.85778],[19.920555,-17.857224],[19.941109,-17.861389],[19.951385,-17.86528],[19.959999,-17.871391],[19.968609,-17.877781],[19.975555,-17.885002],[19.98111,-17.886391],[20.016941,-17.890835],[20.098888,-17.896389],[20.128887,-17.894447],[20.239719,-17.881947],[20.249722,-17.878334],[20.267776,-17.861946],[20.273888,-17.860558],[20.311386,-17.856945],[20.324444,-17.856945],[20.338055,-17.858059],[20.437496,-17.897224],[20.446941,-17.901669],[20.458885,-17.911392],[20.492554,-17.941891],[20.547497,-17.98167],[20.553055,-17.983612],[20.566666,-17.985279],[20.595554,-17.981392],[20.631664,-17.978058],[20.645275,-17.978889],[20.751942,-17.996113],[20.781586,-18.010204],[20.854164,-18.016392],[20.889721,-17.994446],[20.944164,-17.971111],[20.954166,-17.967503],[20.970833,-17.963337],[21.021385,-17.953335],[21.138611,-17.934448],[21.163887,-17.931393],[21.167847,-17.931541],[21.228611,-17.93528],[21.241943,-17.938892],[21.248333,-17.946114],[21.256107,-17.952503],[21.270554,-17.960281],[21.379356,-18.014889],[21.755405,-17.947346],[22.290276,-17.850002],[22.564163,-17.798889],[22.881107,-17.739445],[22.91,-17.733334],[22.996387,-17.716946],[23.284721,-17.662502]]]}}]}';
    }
}
