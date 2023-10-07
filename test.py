# Input data as a list of tuples
data = [
   ('Baniyataar micro station', 27.7537895, 85.3186385),
('Bhetghat chowk', 27.7491774, 85.3407459),
('Trolly bus station', 27.6886115605782, 85.3391584476824),
('Ratnapark micro bus station', 27.7015810653245, 85.3135065124901),
('Sorakhutte', 27.6313883, 85.3057283),
('Bungamati bus station', 27.6285, 85.3037),
('Partner city maikarovasa park', 27.679, 85.3355),
('Old baneshwor station one', 27.7028082, 85.3410202),
('Chakrapath', 27.7393761, 85.3365784),
('Buddha chok', 27.7224756, 85.2798018),
('Cleanup bus stop', 27.6849, 85.2984),
('Purano arab bank', 27.7212674, 85.368444),
('Bus to syapru bensi (lantang) pasang lhamu bus counter', 27.7352413, 85.3058118),
('Ratna park bus station', 27.7067985, 85.314477),
('Tusal', 27.7201347, 85.3578632),    
('Nepal yatayat bus station', 27.7125174, 85.3927772),
('Gelbu sherpa', 27.7149, 85.3265),  
('Gopi krishna bus stop', 27.721682, 85.3457274),
('Harisiddhi', 27.6267, 85.3314),    
('Bus to pokhara #bor', 27.7348577, 85.3096909),
('Tiwari tol', 27.7190824, 85.3939107),
('Kavresthali bus park', 27.7850619, 85.3009324),
('Bus stop', 27.6967, 85.3211),      
('Nepal saman dhuwani sang', 27.7198455, 85.2875317),
('Bode micro bus station', 27.6898742, 85.390437),
('Chunikhel', 27.619243, 85.3050941),
('Nilo micro park', 27.7348813, 85.3602396),
('Nag dhunga', 27.6994712, 85.2091263),
('Tanki', 27.7527395, 85.3077158),    
('Old baneshwor bus station', 27.7016, 85.3399),
('Nepal yatayat bus station', 27.6941, 85.3665),
('Dhumbarahi bus stop', 27.7315573, 85.3445023),
('Helambu bus park', 27.7199697, 85.3512235),
('Miteri yatayat', 27.7351476, 85.311725),
('न:त्वा: पलेस्वाँ पुखु', 27.675681, 85.3175952),
('Umanga chowk', 27.7418, 85.3505),  
('Ragini chok', 27.6667396, 85.3660314),
('Old baneshwar tempo station', 27.7011045, 85.3398868),
('Naya bazaar', 27.6491537, 85.30524),
('Singha durbar bus station', 27.6975, 85.3213),
('Chabahil', 27.7179011, 85.3469402),
('Chunikhel bus station', 27.7534473, 85.3674426),
('Sarkari dhara', 27.7266378, 85.314237),
('Kalanki', 27.694197, 85.2815846),  
('Laboratory school bus station', 27.6771538, 85.2938796),
('Makalbari bus station', 27.7373938, 85.3868195),
('New force park', 27.7028101, 85.3784411),
('Sinamangal chok', 27.6952655, 85.3550202),
('Khari bot micro bus station', 27.6778, 85.3386),
('Santinagar ratnapark microbus stand', 27.6418587373794, 85.323446895392),
('Boratar micro station', 27.7356813, 85.2955721),
('Sukedhara bus stop', 27.7279, 85.345),
('Sinamangal bus station', 27.6957, 85.3528),
('Saraswatikhel buspark', 27.6948937, 85.3995058),
('Kusunti height', 27.6639122, 85.3148968),
('Taxi', 27.7241189, 85.2833044),    
('Dada gaun', 27.7484002, 85.3060868),
('Bus to besisahar', 27.7345526, 85.3103386),
('Kupondole bus stop', 27.6876, 85.3168),
('Bansthali bus station', 27.7246726, 85.2974785),
('Bus stop', 27.6475, 85.3362),      
('Thapa chok', 27.7009965, 85.3767257),
('Shantinagar ratnapark bus station', 27.6419039, 85.3234091),
('Milan chowk', 27.715716, 85.3982599),
('Simaltar chowk bus station', 27.7323, 85.3741),
('चप्पल कारखाना बस बिसौनी', 27.7347, 85.3423),
('Radheradhe micro bus station', 27.6772006, 85.3982391),
('Bhimsen gola', 27.6998589, 85.3442797),
('Dhapasi height micro station', 27.7498625, 85.3380581),
('Tourist bus stop - balaju', 27.7257, 85.3023),
('Sayukta bus park', 27.7619829977612, 85.3641596919849),
('Lubhu bus station', 27.6427676, 85.3733475),
('Patan transportation system', 27.6791195, 85.3207483),
('Nmc chowk', 27.7328755, 85.3811174),
('Khokana bus park', 27.6360036, 85.3005718),
('Mitranagar newbuspark', 27.733, 85.3082),
('Khari booat', 27.6597347102453, 85.3065419900583),
('Bhaktapur', 27.7061265, 85.316845),
('Bus stop', 27.7134899, 85.3026616),
('Dallu tempo station', 27.7086745, 85.3024797),
('Microbus stop', 27.7138734, 85.3032678),
('Garden area', 27.694, 85.3664),    
('Greenline travels', 27.7134571587702, 85.3150447837226),
('Naya bus park', 27.7329141458831, 85.3080605370226),
('To bautechaur bus station', 27.7206434, 85.3755661),
('Balkot chowk', 27.6650342, 85.366705),
('Nepal yatayat bus stop', 27.694, 85.3665),
('New bus stand', 27.7333541, 85.3078997),
('Bhimsengola bus station', 27.6992, 85.3459),
('Bungmati buspark', 27.6283402, 85.3034037),
('Nepal yatayaat bus station', 27.6939444, 85.3667750666667),
('Lagankhel bus park', 27.6673355397414, 85.3231325084305),
('Lalitpur-18 nakhu', 27.657, 85.2989),
('Sajha yatayat', 27.7008518, 85.3569303),
('New forcepark bus station', 27.7027804, 85.3787262),
('Dhading bus park', 27.7347719, 85.3063383),
('Bus stop', 27.6933, 85.3186),      
('Kohinor housing', 27.6953, 85.2772),
('Tinkune bus station', 27.6862652872097, 85.3454712539884),
('Dhokashi', 27.670661, 85.2790338),  
('Transport nepal', 27.7404, 85.3349),
('Sukedhara', 27.7279694, 85.3457219),
('Lhotse impex pvt ltd', 27.6879, 85.2876),
('Shankhadol', 27.7372032, 85.3844621),
('Ev yatayat pvt.ltd office', 27.7199, 85.3307),
('Pasang lhamu ticket counter - trishuli', 27.7353517, 85.3057238),
('Balkot', 27.6610859, 85.3697455),  
('Ghyampapati (school chok)', 27.6497973, 85.3589436),
('Bus station', 27.6652, 85.3362),    
('Nepal yatayat buspark', 27.6729306, 85.3426794),
('Toudal micro station', 27.7384586, 85.2909577),
('Shubha homes bus station', 27.7551919, 85.3283093),
('Nepal yatayat bus park', 27.7223955170026, 85.3456063088806),
('Tourist bus station', 27.7116217, 85.3151174),
('Nakkhu bus stop', 27.6615864, 85.3057703),
('Maitighar bus stop', 27.6938924, 85.3212453),
('Lagankhel bus station', 27.6672, 85.3234),
('Milan chowk bus stop', 27.6529, 85.317),
('वनस्थली चोक बस स्टप', 27.725, 85.2979),
('Tilganga bus station', 27.7044, 85.3503),
('Manamaiju', 27.7518363, 85.3121713),
('Kalanki underground bridge', 27.6935758, 85.281698),
('Aadeshwor micro station', 27.7226101, 85.2711553),
('Ganga hall bus stop', 27.7323, 85.3053),
('Acharya tole', 27.6974105, 85.2623483),
('Seto micro park', 27.7367112, 85.3588897),
('Khahare chok', 27.7288688, 85.3552257),
('Riddhi siddhi bus park', 27.6343, 85.3522),
('Balaju hight', 27.7367, 85.2939),  
('Ama yangri bus park', 27.7215919, 85.3826486),
('Makalbari bus stand', 27.7364897, 85.3866638),
('Lubhu bus park', 27.6428938, 85.3746139),
('Dholahiti bus station', 27.6403217, 85.3184478),
('Micro bus station', 27.6569708, 85.3261813),
('Старт', 27.7343375, 85.3107264),    
('Janata yatayat bus park', 27.7325549, 85.3495634),
('Lazimpat bus stop', 27.7182, 85.317),
('Buses to delhi bus station', 27.7209643, 85.364192),
('Star', 27.650414, 85.3828024),      
('Jadibuti bus station', 27.6747, 85.3547),
('नेपाल यातायात बसपार्क पेप्सिकोला ८६६७', 27.6940519, 85.3667829),
('Bhaktapur bus park', 27.705635807988, 85.3169701471339),
('Shared jeep ticket counter (langtang)', 27.7351934, 85.3057394),
('Gongabu bus park', 27.7331, 85.3084),
('Batatar', 27.7740965, 85.2829839),
('Airport bus station', 27.70045705, 85.3540571),
('Sajha pasal bus park', 27.6650654, 85.2542022),
('Purano baneshowor bus station', 27.6999, 85.3441),
('Annapurna tempo station', 27.7140593, 85.3011139),
]

# Convert data to a list of dictionaries
converted_data = [{'name': name, 'latitude': lat, 'longitude': lon} for name, lat, lon in data]

# Print the converted data to the console
for item in converted_data:
    print(item)