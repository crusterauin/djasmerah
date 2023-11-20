<?php
include_once('script.php');

$belanda = new SoalRincian();
$belanda->setGambar('aset/voc.png');
$belanda->setTeksMateri('Pernahkah kalian mendengar kata "kolonialisme"? Kolonialisme adalah suatu keadaan di mana suatu negara menguasai negara lain dan menjadikannya sebagai jajahannya. Nah, tahukah kamu.. Indonesia juga pernah dijajah loh… Indonesia pernah dijajah berbagai negara salah satunya belanda selama ratusan tahun. Yuk kita acari tahu lebih dalam!<br><br>
Pada zaman dulu, di abad ke-16, tepatnya pada tahun 1596 sebuah bangsa yang bernama Belanda pertama kali datang ke Indonesia. Mereka datang dengan tujuan awal yang baik, mencari rempah-rempah berharga seperti lada, pala, dan cengkeh. Namun, niat mereka berubah seiring waktu, dan mereka mulai ingin menguasai sumber daya Indonesia. Pada tahun 1602, mereka mendirikan perusahaan besar yang sangat kuat, VOC (Vereenigde Oost-Indische Compagnie) yang bahkan memiliki tentara sendiri. Dengan paksaan dan peraturan-peraturan yang tidak adil, mereka mulai menindas rakyat Indonesia.<br><br>
Selama masa penjajahan Belanda, rakyat Indonesia mengalami penderitaan yang tak terhitung banyaknya. Mereka dipaksa bekerja di perkebunan dan pabrik Belanda, membayar pajak tinggi, dan dilarang mendapatkan pendidikan tinggi. Namun, rakyat Indonesia tidak tinggal diam. Mereka memulai perjuangan melawan penjajahan Belanda, dan perang demi perang terjadi, seperti Perang Diponegoro, Perang Padri, Perang Aceh, dan Perang Puputan Margarana.<br><br>
Namun, perjuangan berlarut-larut ini tidak sia-sia. Setelah bertahun-tahun berjuang, akhirnya, pada tahun 1949, Belanda mengakui kekalahan mereka dan menarik diri dari Indonesia. Mereka menyadari bahwa upaya mereka untuk menjajah Indonesia telah gagal. Ini terjadi setelah perundingan diplomatik yang panjang dan beberapa konflik bersenjata.<br><br>
');
$belanda->setMateri('Kolonialisme Belanda');
$belanda->setJumlahSoal('3');
$belanda->setSoal(
    'Kapan Pertama kali Belanda datang ke Indonesia?',
    'Mengapa Belanda Menjajah Indonesia?',
    'Apa kepanjangan VOC?'
);
$belanda->setJawabanBenar(
    '1596',
    'Ingin menguasai rempah rempah dan sumber daya Indonesia',
    'Vereenigde Oost-Indische Compagnie'
);

$belanda->setJawabanSalah1(
    '1959',
    '1602',
    '1859',
);
$belanda->setJawabanSalah2(
    'Untuk mengamankan emas',
    'Agar bisa mencuri kebudayaan Indonesia',
    'Untuk mempelajari resep masakan tradisional',
);
$belanda->setJawabanSalah3(
    'Vliegende Oude Compagnie',
    'Verenigde Oostindische Compagnie',
    'Vreemde Ongebruikelijke Corporatie',
);


$pemuda = new SoalRincian();
$pemuda->setGambar('');
$pemuda->setTeksMateri('Pada tahun 1926, Indonesia menjadi saksi dari sebuah peristiwa yang sangat penting dalam sejarahnya. Ini adalah kisah tentang perjuangan dan semangat pemuda-pemuda Indonesia dalam mencapai kemerdekaan.<br><br>
Dulu, di zaman sebelum kemerdekaan, pada tahun 1926, para pemuda dari berbagai organisasi berkumpul di Jakarta untuk menghadiri Kongres Pemuda 1. Mereka berkumpul di Gedung Katholieke Jongelingen Bond (KJB), yang sekarang menjadi Museum Sumpah Pemuda jakarta. Kongres ini adalah gagasan dari Persatuan Pelajar-pelajar Indonesia (PPPI), sebuah organisasi pemuda yang baru saja terbentuk. Lebih dari 60 pemuda dari berbagai organisasi seperti PPPI, Jong Java, Jong Sumatranen Bond, Jong Islamieten Bond, dan Jong Bataks Bond berkumpul di sini. Mereka berkumpul untuk tujuan mulia: mempererat persatuan pemuda Indonesia dan menanamkan cinta pada tanah air mereka.<br><br>
Di Kongres Pemuda 1, pemuda-pemuda ini berbicara tentang hal-hal penting seperti persatuan, bahasa, dan pendidikan. Mereka juga merumuskan Sumpah Pemuda, sebuah ikrar suci yang mengikat mereka sebagai satu. Sumpah ini berisi janji-janji suci:<br><br>
- Mereka berjanji untuk satu tanah air, Indonesia.<br><br>
- Mereka berjanji untuk satu bangsa, bangsa Indonesia.<br><br>
- Mereka berjanji untuk menjaga bahasa persatuan, bahasa Indonesia.<br><br>
Sumpah Pemuda diucapkan pada tanggal 28 Oktober 1928 sebagai penutup Kongres Pemuda 1. Itu adalah momen bersejarah yang mengikat pemuda Indonesia dalam semangat persatuan.<br><br>
Namun, petualangan pemuda-pemuda Indonesia belum selesai. Dua tahun kemudian, pada tahun 1928, mereka berkumpul kembali untuk Kongres Pemuda 2. Kali ini, mereka berkumpul di Gedung Indonesische Clubgebouw, yang juka berada di Batavia (Sekarang Jakarta). Kongres Pemuda 2, yang diinisiasi oleh Persatuan Pemuda Indonesia (PPI), bertujuan untuk melanjutkan perjuangan yang dimulai dari Kongres Pemuda 1. Lebih dari 70 pemuda dari berbagai organisasi berkumpul di sini, bersatu di bawah pimpinan Soegondo Djojopuspito dari Jong Java. Mereka membahas berbagai hal penting, seperti pendidikan, kebudayaan, dan ekonomi. Namun, yang paling penting, mereka tetap memegang teguh komitmen mereka terhadap Sumpah Pemuda.<br><br>
Kongres Pemuda 2 menjadi puncak perjuangan pemuda-pemuda Indonesia dalam mencapai persatuan yang kuat. Itu menjadi lambang identitas nasional Indonesia dan menjadi awal dari perjalanan menuju kemerdekaan Indonesia yang kita cintai.<br><br>
');
$pemuda->setMateri('Konggres Pemuda');
$pemuda->setJumlahSoal('3');
$pemuda->setSoal(
    'Apa tujuan Kongres Pemuda 1 dan 2?',
    'Kapan Kongres Pemuda 1 dan 2 diadakan?',
    'Di mana Kongres Pemuda 1 dan 2 diadakan?'
);

$jepang = new SoalRincian();
$jepang->setGambar('');
$jepang->setTeksMateri('Pada tahun 1942, Indonesia menyaksikan kedatangan tentara Jepang dengan janji-janji manis, seolah-olah mereka adalah sekutu yang akan membantu Indonesia membebaskan diri dari penjajahan Belanda. Waktu itu, rakyat Indonesia sangat berharap akan kemerdekaan yang telah mereka impikan selama bertahun-tahun.<br><br>
Jepang tiba di Indonesia dengan mengumbar janji-janji pembebasan, harapan akan masa depan yang lebih baik, dan kemerdekaan dari penjajahan Belanda. Rakyat Indonesia pun menyambut kedatangan mereka dengan senang hati, percaya bahwa Jepang akan membantu mereka mencapai kemerdekaan.<br><br>
Namun, harapan itu berubah menjadi kekecewaan yang mendalam. Jepang tidak hanya gagal memenuhi janji-janji mereka, tetapi juga melakukan kekejaman terhadap rakyat Indonesia. Mereka memaksa warga Indonesia untuk bekerja paksa (romusha), merampas harta benda mereka, dan menerapkan penyiksaan yang mengerikan. Semua ini berbanding terbalik dengan janji-janji manis yang pernah diucapkan.<br><br>
Salah satu peristiwa kekejaman yang sangat terkenal adalah Pembantaian Rawagede pada tanggal 10 Desember 1942, di mana Jepang membunuh sekitar 400 rakyat Indonesia. Itu adalah salah satu contoh kekejamannya yang paling mengerikan.<br><br>
Namun, rakyat Indonesia tidak tinggal diam menghadapi kekejaman Jepang. Mereka mulai berani melakukan perlawanan. Pertempuran Surabaya pada tanggal 10 November 1945 adalah salah satu perlawanan yang paling terkenal. Dalam pertempuran ini, rakyat Indonesia berhasil mengusir Jepang dari Surabaya. Mereka berjuang dengan gigih dan gagah berani untuk meraih kemerdekaan yang telah lama mereka idamkan.<br><br>
Akhirnya, pada tanggal 17 Agustus 1945, Indonesia memproklamasikan kemerdekaannya. Mereka berhasil mengusir Jepang dari tanah air mereka dan meraih kemerdekaan yang begitu mereka perjuangkan dengan penuh semangat dan tekad. Momen ini menjadi titik awal bagi perjalanan panjang menuju kemerdekaan, yang berkat perjuangan gigih dan semangat yang membara, akhirnya menjadi kenyataan yang indah bagi rakyat Indonesia.<br><br>
');
$jepang->setMateri('Kolonialisme Jepang');
$jepang->setJumlahSoal('3');
$jepang->setSoal(
    'Sebutkan salah satu cara Jepang menjajah dan menyiksa penduduk Indonesia?',
    'Kapan Jepang menjajah Indonesia?',
    'Apa taktik Jepang dalam upaya untuk menarik simpati warga Indonesia?',
);

$jepang->setJawabanBenar(
    'Dengan memaksakan kerja paksa (romusha).',
    'Pada tahun 1942-1945 selama Perang Dunia II',
    'Dengan menjanjikan kemerdekaan',
);

$jepang->setJawabanSalah1(
    'Dengan memberikan bantuan ekonomi besar kepada Indonesia.',
    'Dengan mempromosikan pendidikan dan kebudayaan Jepang di Indonesia.',
    'Dengan bersekutu dengan Belanda.',
);

$jepang->setJawabanSalah2(
    'Pada masa penjajahan Belanda',
    'Pada abad ke-18',
    'Pada Tahun 1900-1945',
);
$jepang->setJawabanSalah3(
    'Dengan mempromosikan bahasa Jepang di sekolah-sekolah',
    'Dengan membangun infrastruktur modern',
    'Dengan menggunakan Anime',
);

$rengasdengklok = new SoalRincian();
$rengasdengklok->setGambar('');
$rengasdengklok->setTeksMateri('Pada tahun 1945, di tengah kendali Jepang, sebuah peristiwa bersejarah melanda Indonesia. Meskipun Jepang masih berkuasa, semangat kemerdekaan tak pernah padam di hati para pemuda  yang tak sabar untuk menyatakan kemerdekaan Indonesia. Meskipun begitu, terdapat tantangan besar yang mengahalangi niat akbar para pemuda dimana  Bung Karno dan Bung Hatta, dua pemimpin Indonesia, masih merasa ragu untuk segera memproklamasikan kemerdekaan. Mereka berpendapat bahwa menunggu keputusan sidang PPKI terkait kemerdekaan adalah langkah yang bijak, sekaligus menghindari pertumpahan darah yang tidak perlu dari pihak Jepang.<br><br>
Meski begitu Pada tanggal 16 Agustus 1945, sekelompok pemuda yang dipimpin oleh Soekarni, Wikana, dan Chaerul Saleh, akhirnya memutuskan untuk mengambil tindakan berani. Mereka menculik Bung Karno dan Bung Hatta, membawa mereka ke Rengasdengklok, Karawang, dengan tuntutan yang jelas: memproklamasikan kemerdekaan Indonesia tanpa ragu.<br><br>
Awalnya, Bung Karno dan Bung Hatta menolak keras permintaan para pemuda ini. Mereka bersikeras bahwa proklamasi kemerdekaan harus dilakukan di Jakarta, ibu kota Indonesia, bukan di Rengasdengklok yang terpencil. Namun, para pemuda tak goyah. Mereka dengan tegas mengingatkan bahwa jika proklamasi tak segera diumumkan, Jepang bisa saja kembali menguasai Indonesia.<br><br>
Setelah perdebatan panjang dan penuh ketegangan, Bung Karno dan Bung Hatta akhirnya setuju untuk kembali ke Jakarta. Di ibu kota, mereka bertemu dengan Mr. Achmad Subardjo, seorang tokoh pemuda yang juga anggota Panitia Persiapan Kemerdekaan Indonesia (PPKI). Mr. Achmad Subardjo dengan penuh semangat mendukung Bung Karno dan Bung Hatta dalam usaha mereka untuk memproklamasikan kemerdekaan.<br><br>
Pada tanggal 17 Agustus 1945, di Jalan Pegangsaan Timur No. 56, Jakarta, Bung Karno dan Bung Hatta akhirnya mengumumkan proklamasi kemerdekaan Indonesia. Suara proklamasi itu merdu dan bergetar, dan bergema di seluruh Indonesia. Momen bersejarah ini disambut dengan suka cita dan air mata haru oleh rakyat yang telah lama merindukan kemerdekaan mereka. Itu adalah awal dari perjalanan Indonesia menuju kemerdekaan yang merdeka dan penuh harapan.<br><br>
');
$rengasdengklok->setMateri('Peristiwa Rengasdengklok');
$rengasdengklok->setJumlahSoal('3');
$rengasdengklok->setSoal(
    'Apa yang mendorong para pemuda Indonesia, seperti Soekarni, Wikana, dan Chaerul Saleh, untuk menculik Bung Karno dan Bung Hatta?',
    'Mengapa Bung Karno dan Bung Hatta awalnya menolak permintaan para pemuda untuk memproklamasikan kemerdekaan di Rengasdengklok?',
    'Kapan peristiwa Rengasdengklok terjadi?',
);
$rengasdengklok->setJawabanBenar(
    'Untuk mendesak proklamasi kemerdekaan harus segera dilaksanakan',
    'Mereka menghindari pertumpahan darah dengan Jepang.',
    'Peristiwa Rengasdengklok terjadi pada tanggal 16 Agustus 1945.',
);

$rengasdengklok->setJawabanSalah1(
    'Mereka menculiknya untuk memaksa mereka mengambil alih pemerintahan kolonial Belanda.',
    'Mereka menculiknya untuk memastikan kehadiran Bung Karno dan Bung Hatta saat proklamasi kemerdekaan pada tanggal 17 Agustus 1945.',
    'Mereka menculiknya untuk menggagalkan perundingan antara pemuda dan pemerintah Belanda.',
);
$rengasdengklok->setJawabanSalah2(
    'Mereka takut akan reaksi keras dari pemerintah kolonial Belanda.',
    'Mereka ingin lebih dulu berunding dengan pihak Belanda untuk mencapai kesepakatan damai.',
    'Mereka tidak percaya pada pemuda yang menculik mereka.',

);
$rengasdengklok->setJawabanSalah3(
    'Peristiwa Rengasdengklok terjadi pada tanggal 17 Agustus 1945',
    'Peristiwa Rengasdengklok terjadi pada tanggal 19 Agustus 1945.',
    'Peristiwa Rengasdengklok terjadi pada tanggal 20 Agustus 1945.',
    
);


$proklamasi = new SoalRincian();
$proklamasi->setGambar('');
$proklamasi->setTeksMateri('Tahun 1945 adalah saksi bagi momen bersejarah dalam sejarah Indonesia. Di tengah kekuasaan Jepang yang masih mencengkram, semangat kemerdekaan yang menggebu di dalam hati rakyat tidak bisa dipadamkan.<br><br>
Setelah peristiwa Rengasdengklok, Soekarno dan Hatta segera bergegas kembali ke Jakarta untuk mempersiapkan proklamasi kemerdekaan. Mereka berkumpul di rumah Laksamana Maeda, yang terletak di Jalan Imam Bonjol No. 1, Jakarta Pusat. Di sana, mereka mulai merumuskan teks proklamasi kemerdekaan yang akan mengubah nasib bangsa IndonesiaTeks proklamasi tersebut disusun oleh Soekarno dan Hatta dengan bantuan Achmad Soebardjo. Dengan penuh hati-hati, mereka menggunakan pensil untuk menulis teks proklamasi tersebut di atas secarik kertas. Meskipun sederhana, kalimat-kalimat itu memuat makna yang dalam.<br><br>
Teks proklamasi kemerdekaan terdiri dari tiga kalimat yang penuh arti:<br><br>
1. "Kami bangsa Indonesia dengan ini menyatakan kemerdekaan Indonesia."<br><br>
2. "Hal-hal yang mengenai pemindahan kekuasaan dan lain-lain akan diselenggarakan dengan cara saksama dan dalam tempo yang sesingkat-singkatnya."<br><br>
3. "Djakarta, hari 17 bulan 8 tahun 05."<br><br>
Pada tanggal 17 Agustus 1945, pukul 10.00 WIB, Soekarno dan Hatta dengan hati penuh keyakinan membacakan teks proklamasi kemerdekaan Indonesia di depan rumah Ir. Soekarno, yang terletak di Jalan Pegangsaan Timur No. 56, Jakarta Pusat. Teks proklamasi itu diteriakkan dengan suara yang merdu, mengumumkan kemerdekaan Indonesia kepada dunia.<br><br>
Pembacaan teks proklamasi kemerdekaan disaksikan oleh sejumlah tokoh terkemuka dan rakyat Indonesia yang telah lama merindukan saat ini. Proklamasi kemerdekaan Indonesia disambut dengan gegap gempita oleh semua yang hadir, dan air mata haru mengalir sebagai tanda penghormatan kepada para pejuang kemerdekaan yang telah lama merindukan momen bersejarah ini.<br><br>
');
$proklamasi->setMateri('Proklamasi');
$proklamasi->setJumlahSoal('3');
$proklamasi->setSoal(
    'Kapan pembacaan teks proklamasi kemerdekaan Indonesia dibacakan?',
    'Dimana tempat Soekarno dan Hatta berkumpul untuk merumuskan teks proklamasi kemerdekaan Indonesia?',
    'Kenapa momen proklamasi kemerdekaan Indonesia dianggap sebagai momen bersejarah bagi bangsa Indonesia?',
);

$proklamasi->setJawabanBenar(
    '17 Agustus 1945.',
    'Rumah Laksamana Maeda, Jalan Imam Bonjol No. 1, Jakarta Pusat.',
    'Karena saat adalah saat di mana proklamasi kemerdekaan Indonesia diumumkan kepada dunia dan memunculkan harapan bagi rakyat Indonesia.',
);

$proklamasi->setJawabanSalah1(
    '16 Agustus 1945',
    '18 Agustus 1945',
    '19 Agustus 1945',
);
$proklamasi->setJawabanSalah2(
    'Gedung Merdeka, Bandung.',
    'Istana Negara, Jakarta.',
    'Museum Nasional, Jakarta.',
 
);
$proklamasi->setJawabanSalah3(
    'Karena saat itu adalah hari ulang tahun Bung Karno dan Bung Hatta.',
    'Karena saat itu adalah hari ketika Indonesia memenangkan Perang Dunia II.',
    'Karena saat itu adalah hari ketika Jepang meninggalkan Indonesia.',

);


$ppki = new SoalRincian();
$ppki->setGambar('');
$ppki->setTeksMateri(' Meskipun Proklamasi Kemerdekaan telah diumumkan pada 17 Agustus 1945, pengakuan internasional atas kemerdekaan Indonesia masih menjadi hal yang harus dicapai. Dalam upaya mengukuhkan kemerdekaan mereka, pemimpin-pemimpin Indonesia melangsungkan Sidang PPKI (Panitia Persiapan Kemerdekaan Indonesia), suatu langkah penting dalam perjalanan menuju kemerdekaan. Sidang ini dimulai pada tanggal 18 Agustus 1945, di Gedung Kesenian, Jakarta. Sebanyak 27 tokoh penting, termasuk Soekarno, Hatta, dan Achmad Soebardjo, berkumpul dalam sidang bersejarah ini..<br><br>
Sidang PPKI memiliki tiga agenda utama. Agenda pertama adalah pengesahan Undang-Undang Dasar 1945, sebuah hukum dasar yang akan membentuk negara Indonesia. Dalam diskusi yang tekun, para anggota PPKI sepakat untuk tidak mengubah apapun dalam Undang-Undang Dasar tersebut.<br><br>
Agenda kedua adalah pemilihan Presiden dan Wakil Presiden. Soekarno dan Hatta adalah tokoh yang sangat dicintai oleh rakyat Indonesia, dan mereka terpilih secara musyawarah dan mufakat sebagai Presiden dan Wakil Presiden Indonesia.<br><br>
Kemudian, pada agenda ketiga, mereka membentuk Komite Nasional Indonesia Pusat (KNIP), sebuah lembaga yang akan membantu presiden dalam memerintah negara dan membuat undang-undang. KNIP juga akan mengawasi kinerja pemerintah.<br><br>
Sidang PPKI berlangsung selama dua hari, penuh dengan diskusi dan musyawarah. Hasil dari sidang ini menjadi dasar yang kuat bagi pembentukan Indonesia yang merdeka.<br><br>
Sejak saat itu, Indonesia memiliki fondasi yang kuat untuk membangun masa depan yang lebih baik. Semangat persatuan dan perjuangan terus berkobar di hati rakyat Indonesia, yang bertekad untuk menjadikan negara ini lebih kuat dan berdaulat.<br><br>
');
$ppki->setMateri('PPKI');
$ppki->setJumlahSoal('3');
$ppki->setSoal(
    'Kapan Sidang PPKI dilangsungkan?',
    'Apa saja agenda-agenda utama yang dibahas dalam Sidang PPKI?',
    'Apa yang dimaksud KNIP?',
);

$ppki->setJawabanBenar(
    '18 Agustus 1945.',
    'Pengesahan Undang-Undang Dasar 1945; pemilihan Presiden dan Wakil Presiden; pembentukan Komite Nasional Indonesia Pusat.',
    'Komite Nasional Indonesia Pusat.',
);

$ppki->setJawabanSalah1(
    '17 Agustus 1945',
    '19 Agustus 1945',
    '20 Agustus 1945',    
);

$ppki->setJawabanSalah2(
    'Pengesahan Pancasila sebagai ideologi negara; memperkuat peran militer di pemerintahan.',
    'Pemilihan presiden dan wakil presiden; mengukuhkan kedaulatan negara.',
    'Pembentukan parlemen baru; perubahan wilayah administratif.',
);
$ppki->setJawabanSalah3(
    '"Komite Negara Indonesia Pusat"',
    '"Komisi Nasional Indonesia Pusat"',
    '"Komite Nasional Indonesia Perintis"',
);


$ditii = new SoalRincian();
$ditii->setGambar('');
$ditii->setTeksMateri('Pada tahun 1948 hingga 1962, Indonesia menjadi saksi dari sebuah gerakan yang membangkitkan perbedaan pandangan yang mendalam dalam upaya mencapai kemerdekaan. Gerakan Darul Islam/Tentara Islam Indonesia (DI/TII), yang dipimpin oleh Sekarmadji Maridjan Kartosoewirjo, seorang ulama dan tokoh pergerakan nasional, menjadi titik sentral dari konflik ini.<br><br>
Segalanya dimulai dengan penculikan Soekarno dan Hatta pada tanggal 16 Agustus 1945 oleh para pemuda yang khawatir akan pengaruh Jepang terhadap kedua pemimpin tersebut. Mereka dibawa ke Rengasdengklok, Karawang, Jawa Barat, untuk membahas proklamasi kemerdekaan. Setelah diskusi yang panjang, Soekarno dan Hatta akhirnya sepakat untuk memproklamasikan kemerdekaan Indonesia pada tanggal 17 Agustus 1945.<br><br>
Namun, setelah proklamasi kemerdekaan, Kartosoewirjo menolak untuk mengakui kedaulatan Republik Indonesia. Ia menginginkan Indonesia menjadi negara Islam yang dipimpin oleh seorang kepala negara beragama Islam. Pada tanggal 22 Desember 1948, Kartosoewirjo memproklamirkan Negara Islam Indonesia (NII) di Tasikmalaya, Jawa Barat, yang menjadi awal dari gerakan DI/TII.<br><br>
Gerakan DI/TII mendapat dukungan dari berbagai kelompok masyarakat, terutama di Jawa Barat, Jawa Tengah, dan Sulawesi Selatan, serta mendapat simpati dari beberapa negara Arab seperti Mesir dan Saudi Arabia. Pemerintah Indonesia melakukan berbagai upaya untuk mengatasi gerakan ini, termasuk operasi militer, diplomasi, dan pendekatan keagamaan.<br><br>
Setelah perjuangan yang panjang, gerakan DI/TII akhirnya berhasil ditumpas oleh pemerintah Indonesia. Kartosoewirjo ditangkap dan dihukum mati pada tanggal 4 Juni 1962. Gerakan DI/TII memunculkan latar belakang yang kompleks, termasuk perbedaan ideologi, pengaruh agama, dan ketidakpuasan terhadap pemerintah. Dampak dari gerakan ini mencakup kerugian material, moral, dan kerusakan hubungan internasional. Semua ini memberikan pelajaran berharga bagi Indonesia tentang pentingnya menjaga persatuan dan stabilitas negara dalam menghadapi perbedaan pandangan dan aspirasi masyarakat.<br><br>
');
$ditii->setMateri('DI/TII');
$ditii->setJumlahSoal('3');
$ditii->setSoal(
    'Apa yang menjadi motivasi utama Sekarmadji Maridjan Kartosoewirjo dalam mendirikan Negara Islam Indonesia (NII)?',
    'Bagaimana pemerintah Indonesia merespons gerakan DI/TII?',
    'Kapan gerakan DI/TII pertama kali muncul?',
);
$ditii->setJawabanBenar(
    'Mewujudkan Indonesia sebagai negara Islam dengan kepala negara beragama Islam',
    'Dengan berbagai upaya, termasuk operasi militer, diplomasi, dan pendekatan keagamaan',
    'Pada tahun 1948',
);

$ditii->setJawabanSalah1(
    'Menjadi pemimpin Indonesia.',
    'Meningkatkan hubungan dengan negara-negara Arab.',
    'Mewujudkan demokrasi di Indonesia.',
    
);
$ditii->setJawabanSalah2(
    'Dengan memberikan dukungan penuh kepada gerakan DI/TII.',
    'Dengan mengadakan negosiasi damai.',
    'Dengan memberlakukan sanksi ekonomi terhadap gerakan DI/TII.',
    
);
$ditii->setJawabanSalah3(
    'Pada tanggal 17 Agustus 1945.',
    'Pada tahun 1962.',
    'Pada tahun 1998.',   
);


$g30spki = new SoalRincian();
$g30spki->setGambar('');
$g30spki->setTeksMateri('Pada suatu malam tanggal 30 September dan awal 1 Oktober tahun 1965, Indonesia mengalami peristiwa yang mengubah sejarahnya. Peristiwa ini dikenal dengan nama Gerakan 30 September (G30S/PKI), yang meninggalkan cerita tragis yang tak terlupakan di Museum Pancasila Sakti Lubang Buaya, Jakarta Timur<br><br>
Ketika itu, pemerintah Indonesia menduga bahwa Partai Komunis Indonesia (PKI) terlibat dalam peristiwa G30S/PKI. Mereka berasumsi bahwa PKI mempunyai ideologi yang berbeda, yang ingin menggulingkan pemerintahan saat itu dan mendirikan negara dengan prinsip komunis.<br><br>
PKI sejak lama telah melakukan persiapan yang mencurigakan, seperti melatih anggotanya dalam penggunaan senjata, menyembunyikan senjata-senjata di tempat-tempat tersembunyi, dan merencanakan segalanya dengan sangat rapi. Beberapa tokoh penting PKI, seperti DN Aidit, pemimpin PKI, bersama dengan kader-kadernya seperti Untung Syamsuri, komandan pasukan Cakrabirawa, dan Latief Hendraningrat, komandan pasukan pengawal presiden, terlibat dalam peristiwa G30S/PKI.<br><br>
Peristiwa G30S/PKI dimulai pada malam tanggal 30 September 1965 ketika pasukan Cakrabirawa yang dikomandoi oleh Untung Syamsuri menculik enam jenderal dan satu perwira pertama militer Indonesia. Para jenderal tersebut adalah tokoh penting dalam pemerintahan militer dan sipil. Mereka adalah:<br><br>
- Ahmad Yani<br><br>
- MT Haryono<br><br>
- Soeprapto<br><br>
- DN Pandjaitan<br><br>
- Sutoyo Siswomiharjo<br><br>
- Parman<br><br>
- Pierre Andreas Tendean<br><br>
Para jenderal ini dibawa ke Lubang Buaya, Jakarta Timur, tempat yang kemudian menjadi saksi bisu dari tindakan tragis yang menimpa mereka. Mereka disiksa dan akhirnya dibunuh, dengan jenazah mereka dimasukkan ke dalam lubang sumur tua.<br><br>
Pada tanggal 1 Oktober 1965, pasukan Kostrad di bawah pimpinan Soeharto berhasil menggagalkan upaya kudeta G30S/PKI. Soeharto kemudian mengambil alih kepemimpinan dari Presiden Soekarno.<br><br>
Peristiwa G30S/PKI memiliki dampak yang besar dan meluas. Partai Komunis Indonesia (PKI) dibubarkan dan kegiatan komunisme dilarang di Indonesia. Kepergian para jenderal merupakan sebuah kerugian yang sangat besar bagi Indonesia. Peristiwa ini juga menciptakan perpecahan dalam masyarakat, antara pendukung PKI dan yang menentang PKI.<br><br>
');
$g30spki->setMateri('G30SPKI');
$g30spki->setJumlahSoal('3');
$belanda->setSoal(
    'Apa yang menjadi penyebab utama terjadinya peristiwa G30S/PKI pada tahun 1965?',
    'Siapa target utama dalam peristiwa G30S/PKI?',
    'Bagaimana peristiwa G30S/PKI mempengaruhi Indonesia?',
);
$g30spki->setJawabanBenar(
    'Perbedaan ideologi dan krisis ekonomi di Indonesia',
    'Jenderal-jenderal militer Indonesia',
    'Mengubah kepemimpinan nasional dengan Soeharto mengambil alih kekuasaan dari Soekarno',
);

$g30spki->setJawabanSalah1(
    'Upaya pemberontakan militer.',
    'Pemilihan umum yang tidak adil.',
    'Pembubaran Partai Komunis Indonesia (PKI).',
);
$g30spki->setJawabanSalah2(
    'Tokoh-tokoh terkemuka dalam pemerintahan Soekarno.',
    'Warga sipil yang tidak setuju dengan PKI.',
    'Warga asing di Indonesia.',
    
);
$g30spki->setJawabanSalah3(
    'Membawa perdamaian dan stabilitas.',
    'Membubarkan Partai Komunis Indonesia (PKI).',
    'Meningkatkan kesejahteraan masyarakat.',
);


$konflik98 = new SoalRincian();
$konflik98->setGambar('');
$konflik98->setTeksMateri('Pada tahun 1998, terjadi lagi peristiwa yang tidak bisa dipisahkan dari Sejarah Indonesia, sebuah konflik besar yang dikenal dengan sebutan Konflik 1998. Konflik ini adalah serangkaian kerusuhan dan demonstrasi yang dimulai karena krisis ekonomi yang melanda Indonesia.<br><br>
Semua dimulai pada tahun 1997, ketika Indonesia terjatuh dalam krisis ekonomi yang membuat harga-harga barang pokok melonjak dan membuat hidup masyarakat semakin sulit. Situasi memburuk pada tanggal 12 Mei 1998, ketika aparat keamanan menembak mati empat mahasiswa dari Universitas Trisakti yang sedang berunjuk rasa menuntut perubahan. Tindakan ini memicu kemarahan rakyat, dan demonstrasi pun meluas, berubah menjadi kerusuhan di berbagai kota Indonesia.<br><br>
Kerusuhan berlangsung beberapa hari, menyebabkan banyak korban jiwa dan kerusakan harta benda yang signifikan. Akibatnya, tekanan masyarakat membuat Soeharto mengundurkan diri dari jabatannya sebagai Presiden Indonesia pada tanggal 21 Mei 1998.<br><br>
Ada beberapa alasan mengapa Konflik 1998 terjadi. Krisis ekonomi yang hebat adalah faktor utama, dengan harga-harga yang naik membuat hidup jadi sulit bagi banyak orang. Kebijakan pemerintah yang dianggap kurang jelas dan tidak pro-rakyat juga turut memicu perasaan ketidakpuasan. Sementara itu, ketidakpuasan masyarakat terhadap kepemimpinan Soeharto yang dianggap otoriter dan kurang demokratis juga menciptakan ketegangan.<br><br>
Konflik 1998 membawa dampak yang besar bagi Indonesia. Terlepas dari semua masalahnya, konflik ini juga membawa sesuatu yang positif. Perubahan besar terjadi, seperti berakhirnya kekuasaan Soeharto, munculnya era reformasi, dan perkembangan demokrasi. Konflik ini juga membuat masyarakat lebih sadar akan pentingnya demokrasi dan hak asasi manusia.<br><br>
Tapi, sayangnya, Konflik 1998 juga meninggalkan bekas yang kelam. Banyak orang kehilangan nyawa, dan harta benda hancur dalam kerusuhan ini. Kekerasan dan perpecahan di masyarakat juga menyisakan dampak negatif. Meskipun berat, Konflik 1998 menjadi awal dari perjalanan Indonesia menuju masyarakat yang lebih demokratis dan terbuka.<br><br>
');
$konflik98->setMateri('Konflik 1998');
$konflik98->setJumlahSoal('3');
$konflik98->setSoal(
    'Apa yang memicu terjadinya Konflik 1998 di Indonesia?',
    'Bagaimana masyarakat Indonesia merespons peristiwa penculikan mahasiswa Universitas Trisakti pada tahun 1998?',
    'Apa dampak positif dari Konflik 1998?',
);
$konflik98->setJawabanBenar(
    'Krisis ekonomi disertai Kenaikan harga-harga kebutuhan pokok',
    'Dengan memicu kemarahan dan menyebabkan kerusuhan di berbagai kota',
    'Reformasi di Indonesia dan peningkatan kesadaran akan demokrasi',
);

$konflik98->setJawabanSalah1(
    'Krisis politik.',
    'Konflik agama.',
    'Tindakan terorisme.',
);

$konflik98->setJawabanSalah2(
    'Dengan merayakan peristiwa tersebut.',
    'Dengan mengabaikan peristiwa tersebut.',
    'Dengan meminta bantuan asing.',
);

$konflik98->setJawabanSalah3(
    'Kekerasan dan perpecahan di masyarakat.',
    'Peningkatan harga-harga kebutuhan pokok.',
    'Kehilangan banyak nyawa.',
);

$materi = new MateriPilihan();
$materiPilihan = new MateriPilihan();
$quiz = new QuizHandler(${$_GET['materi']});
?>