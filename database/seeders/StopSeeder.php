<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stops')->insert([
            ['name' => 'Balkhu', 'latitude' => 27.694197, 'longitude' => 85.2815846],
            ['name' => 'Baniyataar micro station', 'latitude' => 27.7537895, 'longitude' => 85.3186385],
            ['name' => 'Bhetghat chowk', 'latitude' => 27.7491774, 'longitude' => 85.3407459],
            ['name' => 'Trolly bus station', 'latitude' => 27.6886115605782, 'longitude' => 85.3391584476824],
            ['name' => 'Ratnapark micro bus station', 'latitude' => 27.7015810653245, 'longitude' => 85.3135065124901],
            ['name' => 'Sorakhutte', 'latitude' => 27.6313883, 'longitude' => 85.3057283],
            ['name' => 'Bungamati bus station', 'latitude' => 27.6285, 'longitude' => 85.3037],
            ['name' => 'Partner city maikarovasa park', 'latitude' => 27.679, 'longitude' => 85.3355],
            ['name' => 'Old baneshwor station one', 'latitude' => 27.7028082, 'longitude' => 85.3410202],
            ['name' => 'Chakrapath', 'latitude' => 27.7393761, 'longitude' => 85.3365784],
            ['name' => 'Buddha chok', 'latitude' => 27.7224756, 'longitude' => 85.2798018],
            ['name' => 'Cleanup bus stop', 'latitude' => 27.6849, 'longitude' => 85.2984],
            ['name' => 'Purano arab bank', 'latitude' => 27.7212674, 'longitude' => 85.368444],
            ['name' => 'Bus to syapru bensi (lantang) pasang lhamu bus counter', 'latitude' => 27.7352413, 'longitude' => 85.3058118],
            ['name' => 'Ratna park bus station', 'latitude' => 27.7067985, 'longitude' => 85.314477],
            ['name' => 'Tusal', 'latitude' => 27.7201347, 'longitude' => 85.3578632],
            ['name' => 'Nepal yatayat bus station', 'latitude' => 27.7125174, 'longitude' => 85.3927772],
            ['name' => 'Gelbu sherpa', 'latitude' => 27.7149, 'longitude' => 85.3265],
            ['name' => 'Gopi krishna bus stop', 'latitude' => 27.721682, 'longitude' => 85.3457274],
            ['name' => 'Harisiddhi', 'latitude' => 27.6267, 'longitude' => 85.3314],
            ['name' => 'Bus to pokhara #bor', 'latitude' => 27.7348577, 'longitude' => 85.3096909],
            ['name' => 'Tiwari tol', 'latitude' => 27.7190824, 'longitude' => 85.3939107],
            ['name' => 'Kavresthali bus park', 'latitude' => 27.7850619, 'longitude' => 85.3009324],
            ['name' => 'Bus stop', 'latitude' => 27.6967, 'longitude' => 85.3211],
            ['name' => 'Nepal saman dhuwani sang', 'latitude' => 27.7198455, 'longitude' => 85.2875317],
            ['name' => 'Bode micro bus station', 'latitude' => 27.6898742, 'longitude' => 85.390437],
            ['name' => 'Chunikhel', 'latitude' => 27.619243, 'longitude' => 85.3050941],
            ['name' => 'Nilo micro park', 'latitude' => 27.7348813, 'longitude' => 85.3602396],
            ['name' => 'Nag dhunga', 'latitude' => 27.6994712, 'longitude' => 85.2091263],
            ['name' => 'Tanki', 'latitude' => 27.7527395, 'longitude' => 85.3077158],
            ['name' => 'Old baneshwor bus station', 'latitude' => 27.7016, 'longitude' => 85.3399],
            ['name' => 'Nepal yatayat bus station', 'latitude' => 27.6941, 'longitude' => 85.3665],
            ['name' => 'Dhumbarahi bus stop', 'latitude' => 27.7315573, 'longitude' => 85.3445023],
            ['name' => 'Helambu bus park', 'latitude' => 27.7199697, 'longitude' => 85.3512235],
            ['name' => 'Miteri yatayat', 'latitude' => 27.7351476, 'longitude' => 85.311725],
            ['name' => 'न=>त्वा=> पलेस्वाँ पुखु', 'latitude' => 27.675681, 'longitude' => 85.3175952],
            ['name' => 'Umanga chowk', 'latitude' => 27.7418, 'longitude' => 85.3505],
            ['name' => 'Ragini chok', 'latitude' => 27.6667396, 'longitude' => 85.3660314],
            ['name' => 'Old baneshwar tempo station', 'latitude' => 27.7011045, 'longitude' => 85.3398868],
            ['name' => 'Naya bazaar', 'latitude' => 27.6491537, 'longitude' => 85.30524],
            ['name' => 'Singha durbar bus station', 'latitude' => 27.6975, 'longitude' => 85.3213],
            ['name' => 'Chabahil', 'latitude' => 27.7179011, 'longitude' => 85.3469402],
            ['name' => 'Chunikhel bus station', 'latitude' => 27.7534473, 'longitude' => 85.3674426],
            ['name' => 'Sarkari dhara', 'latitude' => 27.7266378, 'longitude' => 85.314237],
            ['name' => 'Kalanki', 'latitude' => 27.694197, 'longitude' => 85.2815846],
            ['name' => 'Laboratory school bus station', 'latitude' => 27.6771538, 'longitude' => 85.2938796],
            ['name' => 'Makalbari bus station', 'latitude' => 27.7373938, 'longitude' => 85.3868195],
            ['name' => 'New force park', 'latitude' => 27.7028101, 'longitude' => 85.3784411],
            ['name' => 'Sinamangal chok', 'latitude' => 27.6952655, 'longitude' => 85.3550202],
            ['name' => 'Khari bot micro bus station', 'latitude' => 27.6778, 'longitude' => 85.3386],
            ['name' => 'Santinagar ratnapark microbus stand', 'latitude' => 27.6418587373794, 'longitude' => 85.323446895392],
            ['name' => 'Boratar micro station', 'latitude' => 27.7356813, 'longitude' => 85.2955721],
            ['name' => 'Sukedhara bus stop', 'latitude' => 27.7279, 'longitude' => 85.345],
            ['name' => 'Sinamangal bus station', 'latitude' => 27.6957, 'longitude' => 85.3528],
            ['name' => 'Saraswatikhel buspark', 'latitude' => 27.6948937, 'longitude' => 85.3995058],
            ['name' => 'Kusunti height', 'latitude' => 27.6639122, 'longitude' => 85.3148968],
            ['name' => 'Taxi', 'latitude' => 27.7241189, 'longitude' => 85.2833044],
            ['name' => 'Dada gaun', 'latitude' => 27.7484002, 'longitude' => 85.3060868],
            ['name' => 'Bus to besisahar', 'latitude' => 27.7345526, 'longitude' => 85.3103386],
            ['name' => 'Kupondole bus stop', 'latitude' => 27.6876, 'longitude' => 85.3168],
            ['name' => 'Bansthali bus station', 'latitude' => 27.7246726, 'longitude' => 85.2974785],
            ['name' => 'Bus stop', 'latitude' => 27.6475, 'longitude' => 85.3362],
            ['name' => 'Thapa chok', 'latitude' => 27.7009965, 'longitude' => 85.3767257],
            ['name' => 'Shantinagar ratnapark bus station', 'latitude' => 27.6419039, 'longitude' => 85.3234091],
            ['name' => 'Milan chowk', 'latitude' => 27.715716, 'longitude' => 85.3982599],
            ['name' => 'Simaltar chowk bus station', 'latitude' => 27.7323, 'longitude' => 85.3741],
            ['name' => 'चप्पल कारखाना बस बिसौनी', 'latitude' => 27.7347, 'longitude' => 85.3423],
            ['name' => 'Radheradhe micro bus station', 'latitude' => 27.6772006, 'longitude' => 85.3982391],
            ['name' => 'Bhimsen gola', 'latitude' => 27.6998589, 'longitude' => 85.3442797],
            ['name' => 'Dhapasi height micro station', 'latitude' => 27.7498625, 'longitude' => 85.3380581],
            ['name' => 'Tourist bus stop - balaju', 'latitude' => 27.7257, 'longitude' => 85.3023],
            ['name' => 'Sayukta bus park', 'latitude' => 27.7619829977612, 'longitude' => 85.3641596919849],
            ['name' => 'Lubhu bus station', 'latitude' => 27.6427676, 'longitude' => 85.3733475],
            ['name' => 'Patan transportation system', 'latitude' => 27.6791195, 'longitude' => 85.3207483],
            ['name' => 'Nmc chowk', 'latitude' => 27.7328755, 'longitude' => 85.3811174],
            ['name' => 'Khokana bus park', 'latitude' => 27.6360036, 'longitude' => 85.3005718],
            ['name' => 'Mitranagar newbuspark', 'latitude' => 27.733, 'longitude' => 85.3082],
            ['name' => 'Khari booat', 'latitude' => 27.6597347102453, 'longitude' => 85.3065419900583],
            ['name' => 'Bhaktapur', 'latitude' => 27.7061265, 'longitude' => 85.316845],
            ['name' => 'Bus stop', 'latitude' => 27.7134899, 'longitude' => 85.3026616],
            ['name' => 'Dallu tempo station', 'latitude' => 27.7086745, 'longitude' => 85.3024797],
            ['name' => 'Microbus stop', 'latitude' => 27.7138734, 'longitude' => 85.3032678],
            ['name' => 'Garden area', 'latitude' => 27.694, 'longitude' => 85.3664],
            ['name' => 'Greenline travels', 'latitude' => 27.7134571587702, 'longitude' => 85.3150447837226],
            ['name' => 'Naya bus park', 'latitude' => 27.7329141458831, 'longitude' => 85.3080605370226],
            ['name' => 'To bautechaur bus station', 'latitude' => 27.7206434, 'longitude' => 85.3755661],
            ['name' => 'Balkot chowk', 'latitude' => 27.6650342, 'longitude' => 85.366705],
            ['name' => 'Nepal yatayat bus stop', 'latitude' => 27.694, 'longitude' => 85.3665],
            ['name' => 'New bus stand', 'latitude' => 27.7333541, 'longitude' => 85.3078997],
            ['name' => 'Bhimsengola bus station', 'latitude' => 27.6992, 'longitude' => 85.3459],
            ['name' => 'Bungmati buspark', 'latitude' => 27.6283402, 'longitude' => 85.3034037],
            ['name' => 'Nepal yatayaat bus station', 'latitude' => 27.6939444, 'longitude' => 85.3667750666667],
            ['name' => 'Lagankhel bus park', 'latitude' => 27.6673355397414, 'longitude' => 85.3231325084305],
            ['name' => 'Lalitpur-18 nakhu', 'latitude' => 27.657, 'longitude' => 85.2989],
            ['name' => 'Sajha yatayat', 'latitude' => 27.7008518, 'longitude' => 85.3569303],
            ['name' => 'New forcepark bus station', 'latitude' => 27.7027804, 'longitude' => 85.3787262],
            ['name' => 'Dhading bus park', 'latitude' => 27.7347719, 'longitude' => 85.3063383],
            ['name' => 'Bus stop', 'latitude' => 27.6933, 'longitude' => 85.3186],
            ['name' => 'Kohinor housing', 'latitude' => 27.6953, 'longitude' => 85.2772],
            ['name' => 'Tinkune bus station', 'latitude' => 27.6862652872097, 'longitude' => 85.3454712539884],
            ['name' => 'Dhokashi', 'latitude' => 27.670661, 'longitude' => 85.2790338],
            ['name' => 'Transport nepal', 'latitude' => 27.7404, 'longitude' => 85.3349],
            ['name' => 'Sukedhara', 'latitude' => 27.7279694, 'longitude' => 85.3457219],
            ['name' => 'Lhotse impex pvt ltd', 'latitude' => 27.6879, 'longitude' => 85.2876],
            ['name' => 'Shankhadol', 'latitude' => 27.7372032, 'longitude' => 85.3844621],
            ['name' => 'Ev yatayat pvt.ltd office', 'latitude' => 27.7199, 'longitude' => 85.3307],
            ['name' => 'Pasang lhamu ticket counter - trishuli', 'latitude' => 27.7353517, 'longitude' => 85.3057238],
            ['name' => 'Balkot', 'latitude' => 27.6610859, 'longitude' => 85.3697455],
            ['name' => 'Ghyampapati (school chok)', 'latitude' => 27.6497973, 'longitude' => 85.3589436],
            ['name' => 'Bus station', 'latitude' => 27.6652, 'longitude' => 85.3362],
            ['name' => 'Nepal yatayat buspark', 'latitude' => 27.6729306, 'longitude' => 85.3426794],
            ['name' => 'Toudal micro station', 'latitude' => 27.7384586, 'longitude' => 85.2909577],
            ['name' => 'Shubha homes bus station', 'latitude' => 27.7551919, 'longitude' => 85.3283093],
            ['name' => 'Nepal yatayat bus park', 'latitude' => 27.7223955170026, 'longitude' => 85.3456063088806],
            ['name' => 'Tourist bus station', 'latitude' => 27.7116217, 'longitude' => 85.3151174],
            ['name' => 'Nakkhu bus stop', 'latitude' => 27.6615864, 'longitude' => 85.3057703],
            ['name' => 'Maitighar bus stop', 'latitude' => 27.6938924, 'longitude' => 85.3212453],
            ['name' => 'Lagankhel bus station', 'latitude' => 27.6672, 'longitude' => 85.3234],
            ['name' => 'Milan chowk bus stop', 'latitude' => 27.6529, 'longitude' => 85.317],
            ['name' => 'वनस्थली चोक बस स्टप', 'latitude' => 27.725, 'longitude' => 85.2979],
            ['name' => 'Tilganga bus station', 'latitude' => 27.7044, 'longitude' => 85.3503],
            ['name' => 'Manamaiju', 'latitude' => 27.7518363, 'longitude' => 85.3121713],
            ['name' => 'Kalanki underground bridge', 'latitude' => 27.6935758, 'longitude' => 85.281698],
            ['name' => 'Aadeshwor micro station', 'latitude' => 27.7226101, 'longitude' => 85.2711553],
            ['name' => 'Ganga hall bus stop', 'latitude' => 27.7323, 'longitude' => 85.3053],
            ['name' => 'Acharya tole', 'latitude' => 27.6974105, 'longitude' => 85.2623483],
            ['name' => 'Seto micro park', 'latitude' => 27.7367112, 'longitude' => 85.3588897],
            ['name' => 'Khahare chok', 'latitude' => 27.7288688, 'longitude' => 85.3552257],
            ['name' => 'Riddhi siddhi bus park', 'latitude' => 27.6343, 'longitude' => 85.3522],
            ['name' => 'Balaju hight', 'latitude' => 27.7367, 'longitude' => 85.2939],
            ['name' => 'Ama yangri bus park', 'latitude' => 27.7215919, 'longitude' => 85.3826486],
            ['name' => 'Makalbari bus stand', 'latitude' => 27.7364897, 'longitude' => 85.3866638],
            ['name' => 'Lubhu bus park', 'latitude' => 27.6428938, 'longitude' => 85.3746139],
            ['name' => 'Dholahiti bus station', 'latitude' => 27.6403217, 'longitude' => 85.3184478],
            ['name' => 'Micro bus station', 'latitude' => 27.6569708, 'longitude' => 85.3261813],
            ['name' => 'Старт', 'latitude' => 27.7343375, 'longitude' => 85.3107264],
            ['name' => 'Janata yatayat bus park', 'latitude' => 27.7325549, 'longitude' => 85.3495634],
            ['name' => 'Lazimpat bus stop', 'latitude' => 27.7182, 'longitude' => 85.317],
            ['name' => 'Buses to delhi bus station', 'latitude' => 27.7209643, 'longitude' => 85.364192],
            ['name' => 'Star', 'latitude' => 27.650414, 'longitude' => 85.3828024],
            ['name' => 'Jadibuti bus station', 'latitude' => 27.6747, 'longitude' => 85.3547],
            ['name' => 'नेपाल यातायात बसपार्क पेप्सिकोला ८६६७', 'latitude' => 27.6940519, 'longitude' => 85.3667829],
            ['name' => 'Bhaktapur bus park', 'latitude' => 27.705635807988, 'longitude' => 85.3169701471339],
            ['name' => 'Shared jeep ticket counter (langtang)', 'latitude' => 27.7351934, 'longitude' => 85.3057394],
            ['name' => 'Gongabu bus park', 'latitude' => 27.7331, 'longitude' => 85.3084],
            ['name' => 'Batatar', 'latitude' => 27.7740965, 'longitude' => 85.2829839],
            ['name' => 'Airport bus station', 'latitude' => 27.70045705, 'longitude' => 85.3540571],
            ['name' => 'Sajha pasal bus park', 'latitude' => 27.6650654, 'longitude' => 85.2542022],
            ['name' => 'Purano baneshowor bus station', 'latitude' => 27.6999, 'longitude' => 85.3441],
            ['name' => 'Annapurna tempo station', 'latitude' => 27.7140593, 'longitude' => 85.3011139],
            ['name' => 'Jawalakhel', 'latitude' => 27.6733, 'longitude' => 85.3135],
            ['name' => 'Sajha Bus Stop', 'latitude' => 27.6739, 'longitude' => 85.3142],
            ['name' => 'pulchowk bus stop', 'latitude' => 27.6762, 'longitude' => 85.3158],
            ['name' => 'Krishnagali bus stop', 'latitude' => 27.6811, 'longitude' => 85.3176],
            ['name' => 'Jamal Bus Stop', 'latitude' => 27.7088, 'longitude' => 85.3146],
            ['name' => 'Pani Pokhari bus stop', 'latitude' => 27.7287, 'longitude' => 85.3249],
            ['name' => 'Teaching Bus Stop', 'latitude' => 27.7351, 'longitude' => 85.3313],
            ['name' => 'Basundhara Bus Stop', 'latitude' => 27.7356, 'longitude' => 85.3212],
            ['name' => 'Narayan Gopal Chowk', 'latitude' => 27.74, 'longitude' => 85.3372],
            ['name' => 'Gausala', 'latitude' => 27.7106, 'longitude' => 85.3444],
            ['name' => 'koteshwor bus stop', 'latitude' => 27.679, 'longitude' => 85.3497],
            ['name' => 'balkumari pul bus stop', 'latitude' => 27.6733, 'longitude' => 85.3421],
            ['name' => 'balkumari bus stop', 'latitude' => 27.6709, 'longitude' => 85.3397],
            ['name' => 'Kharibot bus stop', 'latitude' => 27.6703, 'longitude' => 85.3381],
        ]);
    }
}