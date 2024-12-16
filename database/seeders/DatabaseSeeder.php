<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Script;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::create([
            'email' => 'pembaca@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'pembaca'
        ]);
        User::create([
            'email' => 'filolog@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'filologis'
        ]);

        Category::create([
            'name' => 'Agama',
            'slug' => 'agama'
        ]);
        Category::create([
            'name' => 'Budaya',
            'slug' => 'budaya'
        ]);
        Category::create([
            'name' => 'Astrologi',
            'slug' => 'astrologi'
        ]);
        Category::create([
            'name' => 'Peraturan',
            'slug' => 'peraturan'
        ]);
        Category::create([
            'name' => 'Sejarah',
            'slug' => 'sejarah'
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Prayer to Allah',
            'pengarang' => 'Anonim',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Arabic',
            'slug' => 'prayer-to-allah',
            'detail' => 'Manuskrip koleksi dari Saihana Pelu.',
            'transliterasi' => 'Transliterasi asli dari manuskrip.',
        ]);
        Script::create([
            'category_id' => 4,
            'title' => 'Rules of family and kingship',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Malay',
            'slug' => 'rules-family-kingship',
            'detail' => 'Manuskrip koleksi dari Saihana Pelu.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);

        Script::create([
            'category_id' => 2,
            'title' => 'Story of hikayat Nur Muhammad',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Malay',
            'slug' => 'hikayat-nur-muhammad',
            'detail' => 'Manuskrip koleksi dari Bangsa Amanullah.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Story of hikayat Abu Bakar',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Malay',
            'slug' => 'hikayat-abu-bakar',
            'detail' => 'Manuskrip koleksi dari Bangsa Amanullah.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Gold Coin',
            'pengarang' => 'Dimiter Golemanov',
            'lokasi' => 'Bulgaria',
            'bahasa' => 'Bulgarian',
            'slug' => 'gold-coin',
            'detail' => 'Dongeng  ditulis oleh Dimiter Golemanov dari Sliven,Bulgari.Dia adalah seorang aktivis dan intelektual Roma dari masa rezim Komunis.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Proshtalno',
            'pengarang' => 'Dimiter Golemanov',
            'lokasi' => 'Bulgaria',
            'bahasa' => 'Bulgarian',
            'slug' => 'proshtalno',
            'detail' => 'Lagu ditulis oleh Dimiter Golemanov dari Sliven,Bulgari.Dia adalah seorang aktivis dan intelektual Roma dari masa rezim Komunis.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Dorogi',
            'pengarang' => 'Dimiter Golemanov',
            'lokasi' => 'Bulgaria',
            'bahasa' => 'Bulgarian',
            'slug' => 'dorogi',
            'detail' => 'Lagu ditulis oleh Dimiter Golemanov dari Sliven,Bulgari.Dia adalah seorang aktivis dan intelektual Roma dari masa rezim Komunis.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Legenda',
            'pengarang' => 'Dimiter Golemanov',
            'lokasi' => 'Bulgaria',
            'bahasa' => 'Bulgarian',
            'slug' => 'legenda',
            'detail' => 'Lagu ditulis oleh Dimiter Golemanov dari Sliven,Bulgari.Dia adalah seorang aktivis dan intelektual Roma dari masa rezim Komunis.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'bum Ka',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'bum-ka',
            'detail' => 'Volume ini berisi 100.000 ayat sutra kebijaksanaan yang lembut dan sempurna.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'brgyad stong ka',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'brgyad-stong-ka',
            'detail' => 'Volume ini berisi 80.000 ayat sutra kebijaksanaan yang lembut dan sempurna.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'mde sde Tsa',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'mde-sde-tsa',
            'detail' => 'Volume ini berisi teks-teks milik kumpulan sutra dari korpus Kanjur',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'rgyud bum Ja',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'rgyud-bum-ja',
            'detail' => 'Volume ini berisi literatur Buddhis yang termasuk dalam kategori tantra atau teks keagamaan esoteris.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 5,
            'title' => 'Babad Diponegara II',
            'pengarang' => 'Tirtodiningrat Purwastar',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Javanese',
            'slug' => 'babad-diponegara-ii',
            'detail' => 'Ini merupakan transliterasi Kronik Diponegoro yang disimpan di Koleksi Khusus Perpustakaan Leiden (L/Or 6547 M-d, 4 jilid) yang dibuat oleh sarjana sastra Jawa kenamaan, Cornelis Christiaan Berg (1900-1990) dan Tirtodiningrat Purwastar pada tahun 1946',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 5,
            'title' => 'Babad Diponegara I',
            'pengarang' => 'Tirtodiningrat Purwastar',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Javanese',
            'slug' => 'babad-diponegara-i',
            'detail' => 'Ini merupakan transliterasi Kronik Diponegoro yang disimpan di Koleksi Khusus Perpustakaan Leiden (L/Or 6547 M-d, 4 jilid) yang dibuat oleh sarjana sastra Jawa kenamaan, Cornelis Christiaan Berg (1900-1990) dan Tirtodiningrat Purwastar pada tahun 1946',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 5,
            'title' => 'Serat Salasilah para Loeloehoer ing Kadanoeredjan Jogja',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Javanese',
            'slug' => 'serat-salasilah-loelohoer',
            'detail' => 'Silsilah keluarga Danurejan. Selain membahas kedudukan penting Danureja I (menjabat, 1755-1799) dan penerusnya di Keraton Yogyakarta, silsilah ini juga menguraikan asal usul keluarga di Banyumas dan mengaitkannya dengan tokoh-tokoh Islam legendaris.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'أدعاء',
            'pengarang' => 'Shaykh Jetemiodara',
            'lokasi' => 'Nigeria',
            'bahasa' => 'Arabic',
            'slug' => 'أدعاء',
            'detail' => 'Kekuatan spiritual digunakan untuk mencari kekayaan dan hal-hal baik lainnya dari Allah',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'أسأسرار',
            'pengarang' => 'Anonymous',
            'lokasi' => 'Nigeria',
            'bahasa' => 'Arabic',
            'slug' => 'أسأسرار',
            'detail' => 'Kekuatan spiritual untuk meningkatkan jual beli, digunakan untuk pertumbuhan dan pengembangan bisnis dan pasar.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'أسرار',
            'pengarang' => 'Nurudeen Al-Dimyaty',
            'lokasi' => 'Nigeria',
            'bahasa' => 'Arabic',
            'slug' => 'أسرار',
            'detail' => 'Naskah tersebut berisi kitab spiritual yang dikenal dengan nama Al-Dimyati, yang biasa digunakan untuk perlindungan dari segala bentuk kejahatan.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 3,
            'title' => 'Variable star observations by Alexander William Roberts for the period 1891-1933',
            'pengarang' => 'Alexander William Roberts',
            'lokasi' => 'Afrika Selatan',
            'bahasa' => 'English',
            'slug' => 'أstar-observation-awroberts',
            'detail' => 'Seri ini berisi 95 set dokumen tulisan tangan, bertanggal antara tahun 1891 dan 1933, berisi pengamatan astronomi asli yang dilakukan oleh A. W. Roberts dari observatorium pribadinya, Observatorium Lovedale, dekat kota Alice di Provinsi Eastern Cape, Afrika Selatan. Selain observasi mentah, terdapat juga draft artikel, perhitungan jangka panjang, diagram, grafik, dan diagram bintang kustom.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 3,
            'title' => 'A. W. Roberts handwritten notes and observations of R Lupi 3',
            'pengarang' => 'Alexander William Roberts',
            'lokasi' => 'Afrika Selatan',
            'bahasa' => 'English',
            'slug' => 'rlupi-awroberts',
            'detail' => 'Draf artikel, daftar observasi, catatan, diagram, dan observasi (1894 08 Juni hingga 1916 15 September) oleh R Lup.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'دلائل الخيرات وشوارق الأنوار في ذكر الصلاة على النبي المختار',
            'pengarang' => 'Al-Jazuli',
            'lokasi' => 'Palestina',
            'tahun' => '1714',
            'bahasa' => 'Arabic',
            'slug' => 'دلائل الخيرات وشوارق الأنوار في ذكر الصلاة على النبي المختار',
            'detail' => 'Naskah tersebut berkaitan dengan denominasi tasawuf.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);

        Script::create([
            'category_id' => 1,
            'title' => 'परमार्थनामसंगिती',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'परमार्थनामसंगिती',
            'detail' => 'Ini adalah tantra kelas nondual (advaya) yang merupakan ajaran paling maju yang diberikan oleh Sang Buddha. Ini mewakili puncak dari semua ajarannya',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 3,
            'title' => 'जन्मफल शुभाशुभ',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'जन्मफल शुभाशुभ',
            'detail' => 'Risalah Astrologi',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Fortune Telling',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => 'fortune-telling',
            'detail' => 'mantra, jimat dan petunjuk meramal untuk mengenali penyakit yang disebabkan oleh dewa, menemukan pengobatan yang tepat; memprediksi cuaca buruk; menemukan hari dan bulan yang memburuk. 54 halaman. Naskah Cham diikat dengan benang; penutup menggunakan kulit industri; ditulis dengan tinta Cina di atas kertas Cina yang dilipat dua; Naskah Akhar Thrah. Ukuran: 20cm x 13,5cm. ',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Phat Mo Rang ',
            'lokasi' => 'India',
            'bahasa' => 'Tai',
            'slug' => 'phat-mo-rang',
            'detail' => 'Naskah ini berisi mantra untuk memanggil para Dewa dan Dewi agar datang dan menerima persembahan mereka.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Lit lai ',
            'lokasi' => 'India',
            'bahasa' => 'Tai',
            'slug' => 'lit-lai',
            'detail' => 'Ini adalah naskah Buddha. Ini berisi kisah Sang Buddha. Sering ada penyebutan Si Kia Phura yang merujuk pada Sang Buddha.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Tham Tang',
            'lokasi' => 'India',
            'bahasa' => 'Tai',
            'slug' => 'tham-tang',
            'detail' => 'Naskah ini berisi singgungan kepada leluhur yang mencari berkah. Nenek moyang disuguhi ayam dan diyakini ayam tersebut mati ketika mantra dari naskah ini dibacakan.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Literatura religiosa-1',
            'lokasi' => 'Peru',
            'bahasa' => 'Spanish',
            'slug' => 'literatura-religiosa-1',
            'detail' => 'Sepotong dramatis tentang Kelahiran. Anonim. Karakter: para gembala dan Saint Joseph. Fragmen.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Coplas para sacar al Niño Dios',
            'lokasi' => 'Peru',
            'bahasa' => 'Spanish',
            'slug' => 'coplas-para-sacar',
            'detail' => 'Komposisi puisi yang didedikasikan untuk Yesus.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'The teaching of madam Thruh palei',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => 'madam-thruh-palei1',
            'detail' => 'Ajaran Nyonya Thruh palei kepada pemuda dan pemudi Cham untuk hidup sesuai tradisi leluhur.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Ritual to call the house owner in Cham Ahier funeral',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => 'cham-ahier',
            'detail' => 'mantra dan petunjuk melakukan ritual memanggil pemilik rumah untuk menyambut kembali pulangnya rombongan orang yang mengantar orang meninggal. Ritual tersebut dilakukan oleh dukun Gru Urang',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'The teaching of madam Thruh palei',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => 'madam-thruh-palei2',
            'detail' => 'Ajaran Nyonya Thruh palei kepada pemuda dan pemudi Cham untuk hidup sesuai tradisi leluhur.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'மருத்துவம்',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'மருத்துவம்',
            'detail' => 'Naskah ini berkaitan dengan kedokteran. Disebutkan tentang minyak untuk Karuṅkiranti dan minyak nimba untuk ibu hamil.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'மருத்துவம்',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'மருத்துவம்-2',
            'detail' => 'Naskah ini berkaitan dengan kedokteran. Disebutkan tentang balsam Keruṭāra, minyak patiṉeṭṭucaṉṉikku, minyak māta caṉṉikku, minyak piḷḷaikkirantiy, minyak vīramāṇikka.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'மருத்துவம்',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'மருத்துவம்-3',
            'detail' => 'Naskah ini berkaitan dengan kedokteran. Disebutkan tentang balsam Keruṭāra, minyak patiṉeṭṭucaṉṉikku, minyak māta caṉṉikku, minyak piḷḷaikkirantiy, minyak vīramāṇikka.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'சித்தாரூடம் ',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'சித்தாரூடம் ',
            'detail' => 'Naskah daun lontar ini berkaitan dengan pengobatan terhadap racun. Berisi rincian tentang sejarah, warna ular, warna racun dan gigi ular.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);

        Script::create([
            'category_id' => 1,
            'title' => 'Literatura religiosa-2',
            'lokasi' => 'Peru',
            'bahasa' => 'Spanish',
            'slug' => 'literatura-religiosa-2',
            'detail' => 'Berisi berbagai teks literatur keagamaan seperti pujian, representasi dramatis dan komposisi puisi, tentang Natal dan topik lainnya. Dari 1 hingga 15.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Songs of Bhaba Pagla',
            'pengarang' => 'Bhaba Pagla',
            'lokasi' => 'India',
            'bahasa' => 'Bengali',
            'slug' => 'songs-of-bhaba-pagla',
            'detail' => 'Notebook berisi lagu-lagu yang ditulis dan disusun oleh Bhaba Pagla. Foto-foto Bhaba Pagla ditempel di sampul bagian dalam.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'كتاب التنوير في إسقاط التدبير',
            'tahun' => '1767',
            'lokasi' => 'Palestina',
            'bahasa' => 'Arabic',
            'slug' => 'كتاب التنوير في إسقاط التدبير',
            'detail' => 'Naskah tersebut berkaitan dengan denominasi tasawuf.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'ورقة في الطب والحكمة',
            'lokasi' => 'Palestina',
            'bahasa' => 'Arabic',
            'slug' => 'ورقة في الطب والحكمة',
            'detail' => 'studi dan pengobatan penyakit dan cedera.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Practice of ceremonies',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => 'katap-ngap-kareh',
            'detail' => 'Naskah tersebut memuat tentang praktek upacara adat, antara lain Kareh (upacara kedewasaan), Athad bah (upacara pembersihan badan), dan Likkhah (pernikahan).',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 5,
            'title' => 'சித்திரபுத்ரர் கதை , மாற்கண்டர் முனிவர் கதை',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'சித்திரபுத்ரர் கதை , மாற்கண்டர் முனிவர் கதை',
            'detail' => 'Materi ini adalah manuskrip daun palem Tamil berjudul “Cittiraputrar katai dan Māṟkaṇṭar muṉivar katai” dari Provinsi Utara, Sri Lanka. Penulis, waktu dan tempat pasti naskah ini tidak diketahui. Namun diperkirakan pada tahun 1800-1900. Naskah ini mempunyai dua cerita orang suci agama (Cittiraputrar dan Māṟkaṇṭar muṉivar). Ini berisi sejarah hidup mereka (Kisah seperti kelahiran Cittiraputrar).',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'கஞ்சன் அம்மாணை',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'கஞ்சன் அம்மாணை',
            'detail' => 'Materi ini adalah naskah daun palem Tamil berjudul Kañcaṉ ammāṇai dari wilayah Timur, Sri Lanka. Hal ini terkait dengan kisah hidup Lord Krisha. Naskah ditulis dalam format Ammāṇai. Ammāṇai adalah bentuk musik Tamil. Lagu-lagu tersebut dinyanyikan dengan irama Ammāṇai yang disebut Ammāṇai. Naskah tersebut diberikan kepada Muttuppiḷḷai putra Kaṇṇāppaṇikkap pōṭi. ',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'تحفة الحكام في نكت العقود',
            'lokasi' => 'Mali',
            'tahun' => '1712',
            'bahasa' => 'Arabic',
            'slug' => 'تحفة الحكام في نكت العقود',
            'detail' => 'Petunjuk tentang kebersihan, wudhu, mentruasi, shalat, puasa, sedekah, haji, kurban, shalat jenazah, pembagian warisan dan sejenisnya.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'صحيح البخاري',
            'lokasi' => 'Mali',
            'bahasa' => 'Arabic',
            'slug' => 'ححيح البخاري',
            'detail' => 'Risalah Charia tentang berbagai tema Islam seperti wahyu, berbagai aspek pernikahan, pertemuan, salam, petunjuk cara memasuki rumah seseorang, dan lain-lain.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'قصة المعراج',
            'lokasi' => 'Mali',
            'bahasa' => 'Arabic',
            'slug' => 'قصة المعراج',
            'detail' => 'Narasi tentang kenaikan Nabi SAW kepada Allah.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);

        Script::create([
            'category_id' => 1,
            'title' => 'Cham Awal rituals',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => 'cham-awal-rituals',
            'detail' => 'Panduan Sholat dan Melaksanakan Ritual dalam Agama Bani.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Collection of texts devoted to St. Mary [20th century]',
            'lokasi' => 'Ethiopia',
            'bahasa' => 'Geez',
            'slug' => 'texts-St.Mary ',
            'detail' => 'Teks-teks tersebut digunakan untuk kebaktian gereja dan pengabdian pribadi. Naskah tersebut berisi homili dan komposisi puisi yang dipersembahkan untuk St. Mary, dan satu miniatur bagus.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 3,
            'title' => 'षोडष दोष परिक्षा',
            'lokasi' => 'Nepal',
            'bahasa' => 'Newari',
            'slug' => 'षोडष दोष परिक्षा',
            'detail' => 'Ini adalah naskah astrologi. Itu datang dalam batas agama Hindu. Sejarah kustodian',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Goviin Lha text',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'goviin-lha-text',
            'detail' => 'Goviin Lha adalah dewa yang dianggap dilahirkan bersama seseorang dan melindungi orang tersebut sepanjang hidup. Ada 5 dewa atau Dewa yang berbeda (Dewi Perempuan, Dewa Laki-laki, Dewa Wilayah, Dewa Musuh, dan Dewa Kehidupan). Sekali dibaca, seseorang dianggap dilindungi oleh dewa-dewa tersebut.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Altangerel sutra',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'altangerel-sutra',
            'detail' => 'Salah satu manuskrip Buddha tertua dan sangat dihormati, oleh setiap keluarga, di Mongolia. Naskah tersebut dipercaya dapat melindungi seseorang dari perbuatan jahat dan kemalangan, menyembuhkan dosa-dosanya dan membawa kebahagiaan bagi semua yang membaca naskah tersebut dan menyimpannya di rumah. Saat ini, hampir setiap rumah tangga menyimpan versi salinan modern (bahkan teks Mongolia) dari sutra tersebut yang ditempatkan tinggi di atas altar.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 3,
            'title' => 'Sāraṇī',
            'bahasa' => 'Sanskrit',
            'slug' => 'Sāraṇī',
            'detail' => '
The text deals with mathematic calculations of astrology.
',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Vividha Puja Vidhi',
            'bahasa' => 'Sanskrit',
            'lokasi' => 'Nepal',
            'slug' => 'vividha-puja-vidhi',
            'detail' => '
Ini adalah naskah ritual dalam bahasa Sansekerta. Ditulis dengan aksara Pracalit Newari. 
',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Dharani of Sitatapatra for Aversion of Contaminations',
            'lokasi' => 'Russia',
            'bahasa' => 'Tibetan',
            'slug' => 'dharani-sitatapatra',
            'detail' => 'Penomoran halaman Tibet.. Ms, kertas tua Rusia, tinta hitam, 5 baris di halaman, 7,5x16 cm. 1r-37v.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);

        Script::create([
            'category_id' => 1,
            'title' => 'baćaġ-un nom orusiba',
            'lokasi' => 'Russia',
            'bahasa' => 'Mongolian',
            'slug' => 'baćaġ-un nom orusiba',
            'detail' => 'Instruksi menjaga puasa agama Buddha Halaman Mongolia.. Ms, kertas tua Rusia, tinta hitam, 18 baris di halaman, 8x21 cm. 1r-5v.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'विचित्रकर्णिकावदान',
            'lokasi' => 'Nepal',
            'bahasa' => 'Newari',
            'slug' => 'विचित्रकर्णिकावदान',
            'detail' => 'Ini adalah salah satu cerita Avadana kumpulan cerita Buddha Avadana yang sangat populer. Riwayat Kustodian : Diwarisi dari ayah',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Phat Mohang',
            'bahasa' => 'Tai',
            'slug' => 'phat-mohang',
            'detail' => 'Ini berisi mantra untuk memanggil para Dewa untuk puja.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Chandi ',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'chandi',
            'detail' => 'Naskah ini sangat merupakan doa Durga Bhawani. Hal ini dibacakan terutama selama festival Dashain oleh umat Hindu di Nepal. Itu milik tradisi Shakta.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Order of Shatariyah of Muhammadiyah',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Javanese',
            'slug' => 'order-shatariyah',
            'detail' => 'Tentang tata cara shatariyyah, tata cara salat dan bacaannya, kewajiban khitanan.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Aditya Stava',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'aditya-stava',
            'detail' => 'Ini adalah Stotra dewa Matahari. Bahasanya adalah Sansekerta dan aksaranya adalah Dewanagari.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '齋醮神目科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '齋醮神目科',
            'detail' => ' Instruksi untuk mengundang semua roh untuk bergabung dalam upacara. Termasuk Sepuluh Hakim Api Penyucian, Dewa Panas, dll.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '會聖凈壇斎事科 ',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '會聖凈壇斎事科',
            'detail' => ' Instruksi tentang memanggil berbagai dewa, dan mempersiapkan altar yang bersih untuk turunnya mereka.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '贖魂 ',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '贖魂',
            'detail' => ' Sutra yang digunakan untuk mengaku dosa dan mengumpulkan jiwa.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);

        Script::create([
            'category_id' => 1,
            'title' => 'byin rlabs mchog stsol ma bzhugs so ',
            'lokasi' => 'Tibet',
            'bahasa' => 'Tibetan',
            'slug' => 'byinr-labs-mchog-stsol-ma-bzhugs-so',
            'detail' => ' Instruksi untuk memberi berkah pagination Tibet.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Bhuvanesvari Kavaca',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'bhuvanesvari-kavaca',
            'detail' => ' Naskah ini adalah Stotra dewi Bhuvanesvari. Dia adalah bentuk lain dari Durga. Itu dalam aksara Sansekerta dan Pracalit Newari',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'مختارات النوازل',
            'lokasi' => 'Arab',
            'bahasa' => 'Arabic',
            'slug' => 'مختارات النوازل',
            'detail' => ' Naskah tersebut berkaitan dengan fikih Islam Al-Hanafi.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Maha praj napara mita sutra',
            'lokasi' => 'Arab',
            'bahasa' => 'Arabic',
            'slug' => 'maha-praj-napara-mita-sutra',
            'detail' => ' Teks agama Buddha, sutra.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '大齋符吏勅壇科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '大齋符吏勅壇科',
            'detail' => ' Kumpulan lima sutra yang digunakan dalam pertunjukan ritual termasuk memanggil pasukan spiritual, memperpanjang hidup, menyapa Raja, dan membangun altar.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Karmavipāka prāyaścittaṃ',
            'lokasi' => 'India',
            'bahasa' => 'Sanskrit',
            'slug' => 'Karmavipāka-prāyaścittaṃ',
            'detail' => ' Ritual, Yurisprudensi. Daun Palem.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => '一本亡秘語',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '一本亡秘語',
            'detail' => ' Petunjuk tentang berbagai detail dalam retret almarhum dan upacara pemakaman.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '洪恩大會科壹本',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '洪恩大會科壹本',
            'detail' => ' Sihir untuk membersihkan tanah dan menciptakan kembali dunia baru setelah banjir.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Требник, отрывок',
            'lokasi' => 'Russia',
            'bahasa' => 'Slavic',
            'slug' => 'Требник, отрывок',
            'detail' => ' Penggalan Breviary mencakup upacara pemakaman (tanpa awal) dan doa untuk kesehatan. Naskah tersebut ditulis pada abad ke-18 karena kertas tersebut mempunyai watermark Pro Patria. Naskah tersebut dibawa dari wilayah Ploes di distrik Arkhangelsk.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'zheng qi lian dong ri',
            'lokasi' => 'China',
            'bahasa' => 'Sui',
            'slug' => 'zheng-qi-lian-dong-ri',
            'detail' => ' Ini adalah teks dasar bagi para pendeta Shui dan berisi prinsip-prinsip umum untuk memperoleh nasib baik dan melarikan diri dari gangguan setan',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Puja ya Saphu',
            'lokasi' => 'Nepal',
            'bahasa' => 'Newari',
            'slug' => 'puja-ya-saphu',
            'detail' => ' naskah ini adalah panduan ritual Puja. Jadi, ini adalah buku ritual. Bahasanya adalah Newari dan aksara yang digunakan adalah Dewanagari.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Gleng sakun - Bói toán',
            'lokasi' => 'Vietnam',
            'bahasa' => 'Cham',
            'slug' => ' Gleng sakun - Bói toán',
            'detail' => ' Ramalan dan feng shui; cara menemukan barang yang hilang',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => '一本小南靈科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '一本小南靈科',
            'detail' => ' Upacara pelepasan orang yang baru meninggal.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'कारण्डव्यूह सुत्र',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'कारण्डव्यूह सुत्र',
            'detail' => ' Sutra Karandavyuha adalah Sutra Mantrayāna yang memuji kebajikan dan kekuatan Avalokiteśvara. Sutra ini disusun pada akhir abad ke-4 atau awal abad ke-5 Masehi. Ini memperkenalkan Mantra Buddha Om Mani Padme Hum, yang diyakini mengarah pada pembebasan dan akhirnya mencapai Kebuddhaan.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '重集百解秘語',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '重集百解秘語',
            'detail' => ' instruksi lain-lain tentang ritual penyembuhan pengusir setan.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'देवदेवी महिमा',
            'lokasi' => 'Nepal',
            'bahasa' => 'Nepali',
            'slug' => 'देवदेवी महिमा',
            'detail' => ' Ini adalah teks yang mengagungkan berbagai dewa Hindu.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Daloil ul-Khairot',
            'lokasi' => 'Tajikistan',
            'bahasa' => 'Persian',
            'slug' => 'Daloil ul-Khairot',
            'detail' => ' Karya teologi Islam tentang doa.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'किराँत प्रार्थना',
            'lokasi' => 'Tajikistan',
            'bahasa' => 'Kiranti',
            'slug' => 'किराँत प्रार्थना',
            'detail' => ' Ini adalah buku Doa Kiranta dalam bahasa Kiranta. Itu ditulis dengan aksara Sirijangha.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '一本引朝科',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '一本引朝科',
            'detail' => ' Petunjuk tentang mengadakan audiensi dengan para dewa.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '水符科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '水符科',
            'detail' => ' Sutra yang digunakan dalam pertunjukan ritual untuk mengundang berbagai dewa dan roh dari Air.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '一本萬範完滿科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '一本萬範完滿科',
            'detail' => ' Sutra yang digunakan untuk menebus dosa orang mati, mencari keberuntungan dan menjamin keselamatan dan kebahagiaan masyarakat.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 3,
            'title' => 'Ratnamala Muhurta Prakarana',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'ratnamala-muhurta-prakarana',
            'detail' => ' Subjeknya adalah astrologi. Itu ditulis oleh Sripati Nanda. Naskah ini berbahasa Sansekerta dan ditulis dengan aksara Dewanagari.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => '尊帝心印經',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '尊帝心印經',
            'detail' => ' Upacara pemberian tiga persembahan untuk Yuhuang (Kaisar Giok) dalam satu hari.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '延生貢王救苦單朝科一卷',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '延生貢王救苦單朝科一卷',
            'detail' => ' Upacara mengadakan audiensi dengan para dewa.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => '下堂煉度科壹本',
            'lokasi' => 'Laos',
            'bahasa' => 'Chinese',
            'slug' => '下堂煉度科壹本',
            'detail' => ' petunjuk menyucikan/membersihkan jenazah leluhur setelah diselamatkan dari Api Penyucian pada ritual kematian kedua. Bagian terakhir dari upacara ini di mana mereka telah diselamatkan dan dapat bergabung dengan tablet leluhur. Orang mati dimandikan, diberi baju baru, dan diberi makan. Mereka menjadi nenek moyang resmi.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'कर्मविपाक',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'कर्मविपाक',
            'detail' => ' Teks ini membahas tentang ritual, mantra, pertunjukan, dan sebagainya dalam praktik keagamaan dan budaya Hindu.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'ग्वाराचाली',
            'lokasi' => 'Nepal',
            'bahasa' => 'Newari',
            'slug' => 'ग्वाराचाली',
            'detail' => ' Ini adalah buku Bhajan komunitas Maharjan di Tahachal, Kathmandu. Ini disusun menurut raga tradisional.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'மந்திரம்,மருத்துவம்',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'மந்திரம்,மருத்துவம்',
            'detail' => ' materinya adalah manuskrip daun lontar Tamil dari Provinsi Timur, Sri Lanka. Tidak diketahui periode penulis naskah ini, namun diperkirakan antara tahun 1901-1950. Naskah ini adalah kombinasi pengobatan dan sihir. Naskah tersebut berisi penjelasan rinci tentang praktik yang digunakan untuk mengusir roh dari tubuh, melakukan kontak dengan roh, menghilangkan kutukan, praktik ritual berbasis air, dll.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Siddhi Lakshmi Mala Mantra',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'Siddhi Lakshmi Mala Mantra',
            'detail' => 'manuskripnya adalah Sahasrakshara Mala Mantra Dewi Siddhi Lakshmi, dewa wanita yang sangat populer di kalangan Newars di Bhaktapur. Ini adalah naskah Mantra. Ini dalam aksara Sansekerta dan Dewanagari.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'تنبيه الغافلين',
            'lokasi' => 'Indonesia',
            'bahasa' => 'Javanese',
            'slug' => 'تنبيه الغافلين',
            'detail' => 'Naskah tersebut berisi teks Tanbihul Ghafilin yang disusun oleh Abu Al Laits As Samarqandi (Abad ke-10); Teks tersebut berisi hadits untuk seluruh umat Islam',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'आयुर्वेद',
            'lokasi' => 'Nepal',
            'bahasa' => 'Newari',
            'slug' => 'आयुर्वेद',
            'detail' => 'Ini adalah teks Ayurveda yang membahas tentang penyakit dan pengobatannya.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Nepal Mahatmya',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'nepal-mahatmya',
            'detail' => 'Naskah ini adalah naskah Mahatmya dalam aksara Sansekerta dan Dewanagari. Ini adalah kisah legendaris tentang tempat suci dan dewa Nepal.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => 'Saṅkṣipta Kalaśārcan Vidhi',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'Saṅkṣipta-kalaśārcan-vidhi',
            'detail' => 'Penjelasan singkat tentang tata cara Kalaśārcan selama berbagai ritual Newar, misalnya Nāmākaraṇa, Jaṅkva, dll.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'गुह्यकालीदेव्या सहस्रनाम स्तुती',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'गुह्यकालीदेव्या सहस्रनाम स्तुती',
            'detail' => 'Kali adalah Dewi Hindu. Guhya Kali adalah salah satu dari beberapa turunan Dewi. Ini adalah Stotra Guhya Kali',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Сборник старообрядческий',
            'lokasi' => 'Russia',
            'bahasa' => 'Slavic',
            'slug' => 'Сборник старообрядческий',
            'detail' => 'Miscellanea, yang ditulis oleh orang percaya lama - strannitsa Anastasia Dmitrievna, termasuk kutipannya dari Kitab Suci, Holy Farthers dan sumber-sumber lain tentang penebusan dosa, masa-masa terakhir, Teodisi, Nasib pria setelah kematian. Terdapat kutipan dari buku sekolah tahun 1930 yang tidak diketahui tentang pembangunan sosialisme di Uni Soviet dan politik internasionalnya.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'ग्रहउपरिधारणम्',
            'lokasi' => 'Nepal',
            'bahasa' => 'Sanskrit',
            'slug' => 'ग्रहउपरिधारणम्',
            'detail' => 'Ini adalah Mantra Hindu dalam bahasa Sansekerta.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '招兵科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '招兵科',
            'detail' => 'Petunjuk untuk mengatur dan melakukan ritual penyembuhan/pengusir setan yang di dalamnya segala keburukan rumah diwujudkan dalam seekor ayam yang diedarkan ke seluruh tubuh pemilik rumah.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 2,
            'title' => '壹本迓王科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '壹本迓王科',
            'detail' => 'Sutra yang digunakan dalam pertunjukan ritual untuk menyambut Raja.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 6,
            'title' => 'கை வாகடம்',
            'lokasi' => 'Sri Lanka',
            'bahasa' => 'Tamil',
            'slug' => 'கை வாகடம்',
            'detail' => 'Naskah ini berisi tentang penyakit dan obat-obatannya. Disebutkan juga tentang Pattāma paṇṭitar pēṟu, Mēka tailam, cūlai, vātam, kaḷāvātam, dan pīṉica kapāla kiranti.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '接聖科大獻科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '接聖科大獻科',
            'detail' => 'Upacara pemanggilan berbagai dewa penjaga.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'Odob-ul-Askhob',
            'lokasi' => 'Tajikistan',
            'bahasa' => 'Persian',
            'slug' => 'odob-ul-askhob',
            'detail' => 'Karya etika agama dan sekuler, dikumpulkan dari tulisan para syekh dan ulama Naqshibandi dari abad ke-9 sesuai penanggalan Islam (hijrah).',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => '一本朝天科',
            'lokasi' => 'China',
            'bahasa' => 'Chinese',
            'slug' => '一本朝天科',
            'detail' => 'Sutra yang digunakan oleh pendeta Yao untuk memuja dewa di surga.',
            'transliterasi' => 'Transliterasi asli dari manuskrip',
        ]);
    }
}
