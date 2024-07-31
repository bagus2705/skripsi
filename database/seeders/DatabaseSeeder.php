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
            'name' => 'Budaya',
            'slug' => 'budaya'
        ]);
        Category::create([
            'name' => 'Religi',
            'slug' => 'religi'
        ]);
        Category::create([
            'name' => 'Matematika',
            'slug' => 'matematika'
        ]);
        Category::create([
            'name' => 'Ilmu Pengetahuan',
            'slug' => 'ilmu-pengetahuan'
        ]);
        Category::create([
            'name' => 'Sejarah',
            'slug' => 'sejarah'
        ]);
        Category::create([
            'name' => 'Sastra',
            'slug' => 'sastra'
        ]);
        Category::create([
            'name' => 'Seni',
            'slug' => 'seni'
        ]);
        Category::create([
            'name' => 'Musik',
            'slug' => 'musik'
        ]);
        Category::create([
            'name' => 'Geografi',
            'slug' => 'geografi'
        ]);
        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);
        Category::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);
        Category::create([
            'name' => 'Ekonomi',
            'slug' => 'ekonomi'
        ]);

        Script::create([
            'category_id' => 1,
            'title' => 'Manuskrip Kuno Bali',
            'pengarang' => 'Anonim',
            'lokasi' => 'Bali',
            'tahun' => 1920,
            'bahasa' => 'Balinese',
            'slug' => 'manuskrip-kuno-bali',
            'detail' => 'Manuskrip yang berisi tentang tradisi dan kebudayaan Bali.',
            'transliterasi' => 'Transliterasi asli dari manuskrip kuno Bali.',
        ]);

        Script::create([
            'category_id' => 2,
            'title' => 'Quran Manuscript',
            'lokasi' => 'Middle East',
            'tahun' => 1500,
            'bahasa' => 'Arabic',
            'slug' => 'quran-manuscript',
            'detail' => 'Ancient Quran manuscript.',
            'transliterasi' => 'Original transcriptions of the Quran.',
        ]);

        Script::create([
            'category_id' => 3,
            'title' => 'Al-Khwarizmi\'s Algebra',
            'pengarang' => 'Al-Khwarizmi',
            'lokasi' => 'Baghdad',
            'tahun' => 825,
            'bahasa' => 'Arabic',
            'slug' => 'al-khwarizmi-algebra',
            'detail' => 'A foundational text in algebra by the Persian mathematician Al-Khwarizmi.',
            'transliterasi' => 'Original Arabic text of Al-Khwarizmi\'s Algebra.',
        ]);

        Script::create([
            'category_id' => 4,
            'title' => 'On the Origin of Species',
            'pengarang' => 'Charles Darwin',
            'lokasi' => 'England',
            'tahun' => 1859,
            'bahasa' => 'English',
            'slug' => 'on-the-origin-of-species',
            'detail' => 'The foundation of evolutionary biology.',
            'transliterasi' => 'Original English text of Darwin\'s work.',
        ]);

        Script::create([
            'category_id' => 5,
            'title' => 'The History of the Decline and Fall of the Roman Empire',
            'pengarang' => 'Edward Gibbon',
            'lokasi' => 'England',
            'tahun' => 1776,
            'bahasa' => 'English',
            'slug' => 'decline-fall-roman-empire',
            'detail' => 'A comprehensive history of the Roman Empire from the height of the empire to the fall of Byzantium.',
            'transliterasi' => 'Original English text.',
        ]);


        Script::create([
            'category_id' => 6,
            'title' => 'The Divine Comedy',
            'pengarang' => 'Dante Alighieri',
            'lokasi' => 'Italy',
            'tahun' => 1320,
            'bahasa' => 'Italian',
            'slug' => 'the-divine-comedy',
            'detail' => 'An epic poem describing the journey through Hell, Purgatory, and Paradise.',
            'transliterasi' => 'Original Italian text.',
        ]);

        Script::create([
            'category_id' => 7,
            'title' => 'The Notebooks of Leonardo da Vinci',
            'pengarang' => 'Leonardo da Vinci',
            'lokasi' => 'Italy',
            'tahun' => 1519,
            'bahasa' => 'Italian',
            'slug' => 'da-vinci-notebooks',
            'detail' => 'Notes on art, science, and design.',
            'transliterasi' => 'Original Italian text.',
        ]);

        Script::create([
            'category_id' => 8,
            'title' => 'The Well-Tempered Clavier',
            'pengarang' => 'Johann Sebastian Bach',
            'lokasi' => 'Germany',
            'tahun' => 1722,
            'bahasa' => 'German',
            'slug' => 'the-well-tempered-clavier',
            'detail' => 'A collection of two sets of preludes and fugues in all 24 major and minor keys.',
            'transliterasi' => 'Original German text.',
        ]);

        Script::create([
            'category_id' => 9,
            'title' => 'The Travels of Marco Polo',
            'pengarang' => 'Marco Polo',
            'lokasi' => 'Venice',
            'tahun' => 1300,
            'bahasa' => 'Venetian',
            'slug' => 'the-travels-of-marco-polo',
            'detail' => 'A travelogue describing Polo\'s travels through Asia.',
            'transliterasi' => 'Original Venetian text.',
        ]);

        Script::create([
            'category_id' => 10,
            'title' => 'Principia Mathematica',
            'pengarang' => 'Isaac Newton',
            'lokasi' => 'England',
            'tahun' => 1687,
            'bahasa' => 'Latin',
            'slug' => 'principia-mathematica',
            'detail' => 'A work in three books by Isaac Newton, in Latin, first published 5 July 1687.',
            'transliterasi' => 'Original Latin text.',
        ]);

        Script::create([
            'category_id' => 11,
            'title' => 'De Humani Corporis Fabrica',
            'pengarang' => 'Andreas Vesalius',
            'lokasi' => 'Belgium',
            'tahun' => 1543,
            'bahasa' => 'Latin',
            'slug' => 'de-humani-corporis-fabrica',
            'detail' => 'A set of books on human anatomy written by Andreas Vesalius.',
            'transliterasi' => 'Original Latin text.',
        ]);

        Script::create([
            'category_id' => 12,
            'title' => 'Emile, or On Education',
            'pengarang' => 'Jean-Jacques Rousseau',
            'lokasi' => 'France',
            'tahun' => 1762,
            'bahasa' => 'French',
            'slug' => 'emile-on-education',
            'detail' => 'A treatise on the nature of education and on the nature of man.',
            'transliterasi' => 'Original French text.',
        ]);

        Script::create([
            'category_id' => 13,
            'title' => 'The Wealth of Nations',
            'pengarang' => 'Adam Smith',
            'lokasi' => 'Scotland',
            'tahun' => 1776,
            'bahasa' => 'English',
            'slug' => 'the-wealth-of-nations',
            'detail' => 'An inquiry into the nature and causes of the wealth of nations.',
            'transliterasi' => 'Original English text.',
        ]);
        Script::create([
            'category_id' => 1,
            'title' => 'The Epic of Gilgamesh',
            'pengarang' => 'Anonymous',
            'lokasi' => 'Mesopotamia',
            'tahun' => 2100,
            'bahasa' => 'Akkadian',
            'slug' => 'epic-of-gilgamesh',
            'detail' => 'Sebuah epik kuno dari Mesopotamia yang merupakan salah satu karya sastra terawal.',
            'transliterasi' => 'Original Akkadian text.',
        ]);

        Script::create([
            'category_id' => 2,
            'title' => 'The Bhagavad Gita',
            'pengarang' => 'Anonymous',
            'lokasi' => 'India',
            'tahun' => 500,
            'bahasa' => 'Sanskrit',
            'slug' => 'bhagavad-gita',
            'detail' => 'Sebuah teks suci Hindu yang merupakan bagian dari Mahabharata.',
            'transliterasi' => 'Original Sanskrit text.',
        ]);

        Script::create([
            'category_id' => 3,
            'title' => 'Euclid\'s Elements',
            'pengarang' => 'Euclid',
            'lokasi' => 'Greece',
            'tahun' => 300,
            'bahasa' => 'Ancient Greek',
            'slug' => 'euclids-elements',
            'detail' => 'Karya matematika yang sangat berpengaruh mengenai geometri.',
            'transliterasi' => 'Original Ancient Greek text.',
        ]);

        Script::create([
            'category_id' => 4,
            'title' => 'Principles of Geology',
            'pengarang' => 'Charles Lyell',
            'lokasi' => 'England',
            'tahun' => 1830,
            'bahasa' => 'English',
            'slug' => 'principles-of-geology',
            'detail' => 'Karya yang memperkenalkan ide uniformitarianisme dalam geologi.',
            'transliterasi' => 'Original English text.',
        ]);

        Script::create([
            'category_id' => 5,
            'title' => 'Annals',
            'pengarang' => 'Tacitus',
            'lokasi' => 'Rome',
            'tahun' => 116,
            'bahasa' => 'Latin',
            'slug' => 'annals',
            'detail' => 'A historical work by Tacitus that covers the history of the Roman Empire from the death of Augustus to the end of Nero’s reign.',
            'transliterasi' => 'Original Latin text.',
        ]);

        Script::create([
            'category_id' => 6,
            'title' => 'Don Quixote',
            'pengarang' => 'Miguel de Cervantes',
            'lokasi' => 'Spain',
            'tahun' => 1605,
            'bahasa' => 'Spanish',
            'slug' => 'don-quixote',
            'detail' => 'Novel yang sering dianggap sebagai salah satu karya sastra terbesar.',
            'transliterasi' => 'Original Spanish text.',
        ]);

        Script::create([
            'category_id' => 7,
            'title' => 'The Book of Kells',
            'pengarang' => 'Anonymous',
            'lokasi' => 'Ireland',
            'tahun' => 800,
            'bahasa' => 'Latin',
            'slug' => 'book-of-kells',
            'detail' => 'Manuskrip iluminasi yang merupakan contoh indah seni abad pertengahan.',
            'transliterasi' => 'Original Latin text.',
        ]);

        Script::create([
            'category_id' => 8,
            'title' => 'Eine kleine Nachtmusik',
            'pengarang' => 'Wolfgang Amadeus Mozart',
            'lokasi' => 'Austria',
            'tahun' => 1787,
            'bahasa' => 'German',
            'slug' => 'eine-kleine-nachtmusik',
            'detail' => 'Komposisi musik terkenal oleh Mozart.',
            'transliterasi' => 'Original German text.',
        ]);

        Script::create([
            'category_id' => 9,
            'title' => 'The Pillow Book',
            'pengarang' => 'Sei Shonagon',
            'lokasi' => 'Japan',
            'tahun' => 1002,
            'bahasa' => 'Japanese',
            'slug' => 'the-pillow-book',
            'detail' => 'Sebuah jurnal berisi catatan pribadi dan observasi.',
            'transliterasi' => 'Original Japanese text.',
        ]);

        Script::create([
            'category_id' => 10,
            'title' => 'The Critique of Pure Reason',
            'pengarang' => 'Immanuel Kant',
            'lokasi' => 'Germany',
            'tahun' => 1781,
            'bahasa' => 'German',
            'slug' => 'critique-of-pure-reason',
            'detail' => 'Karya utama dalam filsafat modern yang membahas teori pengetahuan.',
            'transliterasi' => 'Original German text.',
        ]);

        Script::create([
            'category_id' => 11,
            'title' => 'The Principles of Psychology',
            'pengarang' => 'William James',
            'lokasi' => 'United States',
            'tahun' => 1890,
            'bahasa' => 'English',
            'slug' => 'principles-of-psychology',
            'detail' => 'Sebuah karya awal dalam psikologi yang menguraikan berbagai teori.',
            'transliterasi' => 'Original English text.',
        ]);

        Script::create([
            'category_id' => 12,
            'title' => 'The Spirit of the Laws',
            'pengarang' => 'Montesquieu',
            'lokasi' => 'France',
            'tahun' => 1748,
            'bahasa' => 'French',
            'slug' => 'spirit-of-laws',
            'detail' => 'Sebuah karya tentang teori pemerintahan dan hukum.',
            'transliterasi' => 'Original French text.',
        ]);

        Script::create([
            'category_id' => 13,
            'title' => 'The General Theory of Employment, Interest and Money',
            'pengarang' => 'John Maynard Keynes',
            'lokasi' => 'United Kingdom',
            'tahun' => 1936,
            'bahasa' => 'English',
            'slug' => 'general-theory-employment',
            'detail' => 'Sebuah karya yang membahas teori ekonomi dan kebijakan pemerintah.',
            'transliterasi' => 'Original English text.',
        ]);
    }
}
