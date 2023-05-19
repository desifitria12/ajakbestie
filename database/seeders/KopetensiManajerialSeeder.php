<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class KopetensiManajerialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('data_kompetensi')->insert([
            'id' => '11',
            'nama_kompetensi' => 'Integritas',
            'level' => '1',
            'deskripsi' => 'Mampu bertindak sesuai nilai, norma, etika organisasi dalam kapasitas pribadi',
            'indikator' => '1.1.Bertingkah laku sesuai dengan perkataan; berkata sesuai dengan fakta;
1.2.Melaksanakan peraturan, kode etik organisasi dalam lingkungan kerja seharihari, pada tataran individu/pribadi;
1.3.Tidak menjanjikan/memberikan sesuatu yang bertentangan dengan aturan organisasi.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '12',
            'nama_kompetensi' => 'Integritas',
            'level' => '2',
            'deskripsi' => 'Mampu mengingatkan, mengajak rekan kerja untuk bertindak sesuai nilai, norma, dan etika organisasi ',
            'indikator' => '2.1.Mengingatkan rekan kerja untuk bertindak sesuai dengan nilai, norma, dan etika organisasi dalam segala situasi dan kondisi; Mengajak orang lain untuk bertindak sesuai etika dan kode etik.
2.2.Menerapkan norma-norma secara konsisten dalam setiap situasi, pada unit kerja terkecil/kelompok kerjanya.
2.3.Memberikan informasi yang dapat dipercaya sesuai dengan etika organisasi.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '13',
            'nama_kompetensi' => 'Integritas',
            'level' => '3',
            'deskripsi' => 'Mampu memastikan, menanamkan keyakinan bersama agar anggota yang dipimpin bertindak sesuai nilai, norma, dan etika organisasi, dalam lingkup formal',
            'indikator' => '3.1.Memastikan anggota yang dipimpin bertindak sesuai dengan nilai, norma, dan etika organisasi dalam segala situasi dan kondisi.
3.2.Mampu untuk memberi apresiasi dan teguran bagi anggota yang dipimpin agar bertindak selaras dengan nilai, norma, dan etika organisasi dalam segala situasi dan kondisi.
3.3.Melakukan monitoring dan evaluasi terhadap penerapan sikap integritas di dalam unit kerja yang dipimpin.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '14',
            'nama_kompetensi' => 'Integritas',
            'level' => '4',
            'deskripsi' => 'Mampu menciptakan situasi kerja yang mendorong kepatuhan pada nilai, norma, dan etika organisasi',
            'indikator' => '4.1.Menciptakan situasi kerja yang mendorong seluruh pemangku kepentingan mematuhi nilai, norma, dan etika organisasi dalam segala situasi dan kondisi.
4.2.Mendukung dan menerapkan prinsip moral dan standar etika yang tinggi, serta berani menanggung konsekuensinya.
4.3.Berani melakukan koreksi atau mengambil tindakan atas penyimpangan kode etik/nilai-nilai yang dilakukan oleh orang lain, pada tataran lingkup kerja setingkat instansi meskipun ada resiko.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '15',
            'nama_kompetensi' => 'Integritas',
            'level' => '5',
            'deskripsi' => 'Mampu menjadi role model dalam penerapan standar keadilan dan etika di tingkat nasional',
            'indikator' => '5.1.Mempertahankan tingkat standar keadilan dan etika yang tinggi dalam perkataan dan tindakan sehari-hari yang dipatuhi oleh seluruh pemangku kepentingan pada lingkup instansi yang ipimpinnya.
5.2.Menjadi “role model” /keteladanan dalam penerapan standar keadilan dan etika yang tinggi di tingkat nasional
5.3Membuat konsep kebijakan dan strategi penerapan sikap integritas dalam pelaksanaan tugas dan norma-norma yang sejalan dengan nilai strategis organisasi.
',
            'created_at' => now()
        ]); DB::table('data_kompetensi')->insert([
            'id' => '21',
            'nama_kompetensi' => 'Kerjasama',
            'level' => '1',
            'deskripsi' => 'Berpartisipasi dalam kelompok kerja',
            'indikator' => '1.1.Berpartisipasi sebagai anggota tim yang baik, melakukan tugas/bagiannya, dan mendukung keputusan tim;
1.2.Mendengarkan dan menghargaimasukan dari orang lain dan memberikan usulan-usulan bagikepentingan tim;
1.3.Mampu menjalin interaksi sosial untuk penyelesaian tugas',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '22',
            'nama_kompetensi' => 'Kerjasama',
            'level' => '2',
            'deskripsi' => 'Menumbuhkan tim kerja yang partisipatif dan efektif',
            'indikator' => '2.1.Membantu orang lain dalam menyelesaikan tugas-tugas mereka untuk mendukung sasaran tim;
2.2.Berbagi informasi yang relevan atau bermanfaat pada anggota tim; mempertimbangkan masukan dan keahlian anggota dalam tim/kelompok kerja serta bersedia untuk belajar dari orang lain;
2.3.Membangun komitmen yang tinggiuntuk menyelesaikan tugas tim.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '23',
            'nama_kompetensi' => 'Kerjasama',
            'level' => '3',
            'deskripsi' => 'Efektif membangun tim kerja untuk peningkatan kinerja organisasi',
            'indikator' => '3.1.Melihat kekuatan/kelemahan anggota tim, membentuk tim yang tepat, mengantisipasi kemungkinan hambatan, dan mencari solusi yang optimal
3.2.Mengupayakan dan mengutamakan pengambilan keputusan berdasarkan penerapan standar keadilan dan etika yang tinggi di tingkat nasional.
3.3.usulan-usulan anggota tim/kelompok, bernegosiasi secara efektif untuk upaya penyelesaikan pekerjaan yang menjadi target kinerja kelompok dan/atau unit kerja Membangun aliansi dengan para pemangku kepentingan dalam rangka mendukung penyelesaian target kerja kelompok',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '24',
            'nama_kompetensi' => 'Kerjasama',
            'level' => '4',
            'deskripsi' => 'Membangun komitmen tim, sinergi',
            'indikator' => '4.1.Membangun sinergi antar unit kerja di lingkup instansi yang dipimpin
4.2.Memfasilitasi kepentingan yang berbeda dari unit kerja lain sehingga tercipta sinergi dalam rangka pencapaian target kerja organisasi.
4.3.Mengembangkan sistem yang menghargai kerja sama antar unit, memberikan dukungan / semangat untuk memastikan tercapainya sinergi dalam rangka pencapaian target kerja organisasi.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '25',
            'nama_kompetensi' => 'Kerjasama',
            'level' => '5',
            'deskripsi' => 'Menciptakan situasi kerja sama secara konsisten, baik di dalam maupun di luar instansi',
            'indikator' => '5.1.Menciptakan hubungan kerja yang konstruktif dengan menerapkannorma / etos / nilai-nilai kerja yang baik di dalam dan di luar organisasi; meningkatkan produktivitas dan menjadi panutan dalam organisasi
5.2.Secara konsisten menjaga sinergi agar pemangku kepentingan dapat bekerja sama dengan orang di dalam maupun di luar organisasi.
5.3.Membangun konsensus untuk menggabungkan sumberdaya dari berbagai pemangku kepentingan untuk tujuan bangsa dan negara.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '31',
            'nama_kompetensi' => 'Komunikasi',
            'level' => '1',
            'deskripsi' => 'Menyampaikan informasi dengan jelas, lengkap, pemahaman yang sama',
            'indikator' => '1.1.Menyampaikan informasi (data), pikiran atau pendapat dengan jelas, singkat dan tepat dengan menggunakan cara/media yang sesuai dan mengikuti alur yang logis;
1.2.Memastikan pemahaman yang samaatas instruksi yang diterima/ diberikan
1.3.Mampu melaksanakan kegiatan surat menyurat sesuai tata naskah organisasi.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '32',
            'nama_kompetensi' => 'Komunikasi',
            'level' => '2',
            'deskripsi' => 'Aktif menjalankan komunikasi secara formal dan informal; Bersedia mendengarkan orang lain, menginterpretasikan pesan dengan respon yang sesuai, mampu menyusun materi presentasi, pidato, naskah, laporan, dll',
            'indikator' => '2.1.Menggunakan gaya komunikasi informal untuk meningkatkan hubungan profesional;
2.2.Mendengarkan pihak lain secara aktif; menangkap dan menginterpretasikan pesan-pesan dari orang lain, serta memberikan respon yang sesuai;
2.3.Membuat materi presentasi, pidato, draft naskah, laporan dll sesuai arahan pimpinan',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '33',
            'nama_kompetensi' => 'Komunikasi',
            'level' => '3',
            'deskripsi' => 'Berkomunikasi secara asertif, Terampil berkomunikasi lisan/ tertulis untuk menyampaikan informasi yang sensitif/ rumit/ kompleks',
            'indikator' => '3.1.Menyampaikan suatu informasi yang sensitif/rumit dengan cara penyampaian dan kondisi yang tepat,sehingga dapat dipahami dan diterima oleh pihak lain;
3.2.Menyederhanakan topik yang rumit dan sensitif sehingga lebih mudah dipahami dan diterima orang lain;
3.3.Membuat laporan tahunan/ periodik/naskah/dokumen/ proposal yang kompleks; Membuat surat resmi yang sistematis dan tidak menimbulkan pemahaman yang berbeda; membuat proposal yang rinci dan lengkap;',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '34',
            'nama_kompetensi' => 'Komunikasi',
            'level' => '4',
            'deskripsi' => 'Mampu mengemukakan pemikiran multidimensi secara lisan dan tertulis untuk mendorong kesepakatan dengan tujuan meningkatkan kinerja secara',
            'indikator' => '4.1.Mengintegrasikan informasi-informasi penting dari berbagai sumber dengan pihak lain untuk mendapatkan pemahaman yang sama;
4.2.Menuangkan pemikiran/konsep dariberbagai sudut pandang/ multidimensi dalam bentuk tulisan formal;
4.3.Menyampaikan informasi secara persuasif untuk mendorong pemangku kepentingan sepakat pada langkah-langkah bersama dengan keseluruhan tujuan meningkatkan kinerja secara keseluruhan.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '35',
            'nama_kompetensi' => 'Komunikasi',
            'level' => '5',
            'deskripsi' => 'Menggagas sistem komunikasi yang terbuka secara strategis untuk mencari solusi dengan tujuan meningkatkan kinerja',
            'indikator' => '5.1.Menghilangkan hambatan komunikasi, mampu berkomunikasi dalam isu-isu nasional yang memilikiresiko tinggi, menggalang hubungandalam skala strategis di tingkat nasional
5.2.Menggunakan saluran komunikasi formal dan non formal guna mencapai kesepakatan dengan tujuan meningkatkan kinerja di tingkat instansi/nasional
5.3.Menggagas sistem komunikasi dengan melibatkan pemangku kepentingan sejak dini untuk mencari solusi dengan tujuan meningkatkan kinerja di tingkat instansi/nasional',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '41',
            'nama_kompetensi' => 'Orientasi Pada Hasil',
            'level' => '1',
            'deskripsi' => 'Betanggung jawab untuk memenuhi standar kerja',
            'indikator' => '1.1.Menyelesaikan tugas dengan tuntas; dapat diandalkan;
1.2.Bekerja dengan teliti dan hati-hati guna meminimalkan kesalahan dengan mengacu pada standar kualitas (SOP).
1.3.Bersedia menerima masukan, mengikuti contoh cara bekerja yanglebih efektif, efisien di lingkungan kerjanya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '42',
            'nama_kompetensi' => 'Orientasi Pada Hasil',
            'level' => '2',
            'deskripsi' => 'Berupaya meningkatkan hasil kerja pribadi yang lebih tinggi dari standar yang ditetapkan,',
            'indikator' => '2.1.Menetapkan dan berupaya mencapai standar kerja pribadi yang lebih tinggi dari standar kerja yang ditetapkan organisasi
2.2.Mencari, mencoba metode kerja alternatif untuk meningkatkan hasil kerjanya. mencari, mencoba ketode alternatif untuk eningkatanKinerja
2.3.Memberi contoh kepada orang-orang di unit kerjanya untuk mencoba menerapkan metode kerja yang lebih efektif yang sudah dilakukannya',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '43',
            'nama_kompetensi' => 'Orientasi Pada Hasil',
            'level' => '3',
            'deskripsi' => 'Menetapkan target kerja yang menantang bagi unit kerja, memberi apresiasi dan teguran untuk mendorong kinerja',
            'indikator' => '3.1.Menetapkan target kinerja unit yang lebih tinggi dari target yang ditetapkan organisasi
3.2.Memberikan apresiasi dan teguran untuk mendorong pencapaian hasil unit kerjanya.
3.3.Mengembangkan metode kerja yang lebih efektif dan efisien untukmencapai target kerja unitnya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '44',
            'nama_kompetensi' => 'Orientasi Pada Hasil',
            'level' => '4',
            'deskripsi' => 'Mendorong unit  kerja mencapai target yang ditetapkan atau melebihi hasil kerja sebelumnya',
            'indikator' => '4.1.Mendorong unit kerja di tingkat instansi untuk mencapai kinerja yang melebihi target yang ditetapkan.
4.2.Memantau dan mengevaluasi hasil kerja unitnya agar selaras dengan sasaran strategis instansi.
4.3.Mendorong pemanfaatan sumber daya bersama antar unit kerja dalam rangka meningkatkan efektifitas dan efisiensi pencaian target organisasi',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '45',
            'nama_kompetensi' => 'Orientasi Pada Hasil',
            'level' => '5',
            'deskripsi' => 'Meningkatkan mutu pencapaian kerja organisasi',
            'indikator' => '5.1.Memastikan kualitas sesuai standar dan keberlanjutan hasil kerja organisasi yang memberi kontribusi pada pencapaian target prioritas nasional.
5.2.Memastikan tersedianya sumber daya organisasi untuk menjamin tercapainya target prioritas instansi/nasional.
5.3.Membuat kebijakan untuk menerapkan metode kerja yang lebih efektif-efisien dalam mencapai tujuan prioritas nasional',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '51',
            'nama_kompetensi' => 'Pelayanan Publik',
            'level' => '1',
            'deskripsi' => 'Menjalankan tugas mengikuti standar pelayanan.',
            'indikator' => '1.1.Mampu mengerjakan tugas-tugasdengan mengikuti standar pelayanan yang objektif, netral, tidak memihak, tidak diskriminatif, transparan dan tidak terpengaruh kepentingan pribadi/kelompok/ partai politik.
1.2.Melayani kebutuhan, permintaan dan keluhan pemangku kepentingan
1.3.Menyelesaikan masalah dengan tepat tanpa bersikap membela diri dalam kapasitas sebagai pelaksana pelayanan publik.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '52',
            'nama_kompetensi' => 'Pelayanan Publik',
            'level' => '2',
            'deskripsi' => 'Mampu mensupervisi/meng awasi/menyelia dan menjelaskan proses pelaksanaan tugas tugas pemerintahan/pelay anan publik secara transparan',
            'indikator' => '2.1.Menunjukan sikap yakin dalam mengerjakan tugas-tugas pemerintahan/pelayanan publik, mampu menyelia dan menjelaskan secara obyektif bila ada yang mempertanyakan kebijakan yang diambil;
2.2.Secara aktif mencari informasi untuk mengenali kebutuhan pemangku kepentingan agar dapat menjalankan pelaksanaan tugas pemerintahan, pembangunan dan pelayanan publik secara cepat dan tanggap;
2.3.Mampu mengenali dan zemanfaatkan kebiasaan, tatacara, situasi tertentu sehingga apa yang disampaikan menjadi perhatian pemangku kepentingan dalam hal penyelesaian tugas-tugas pemerintahan, pembangunan dan pelayanan publik.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '53',
            'nama_kompetensi' => 'Pelayanan Publik',
            'level' => '3',
            'deskripsi' => 'Mampu memanfaatkan kekuatan kelompok serta memperbaiki  standar pelayanan publik di lingkup unit kerja',
            'indikator' => '3.1.Memahami, mendeskripsikan pengaruh dan hubungan/kekuatan kelompok yang sedang berjalan di organisasi (aliansi atau persaingan), dan dampaknya terhadap unit kerja untuk menjalankan tugas pemerintahansecara profesional dan netral, tidak memihak;
3.2.Menggunakan keterampilan dan pemahaman lintas organisasi untuk secara efektif memfasilitasi kebutuhan kelompok yang lebih besar dengan cara-cara yang mengikuti standar objektif, transparan, profesional, sehingga tidak merugikan para pihak di lingkup pelayanan publik unit kerjanya;
3.3.Mengimplementasikan cara-cara yang efektif untuk memantau danmengevaluasi masalah yang dihadapi pemangku kepentingan/masyarakat serta mengantisipasi kebutuhan mereka saat menjalankan tugas pelayanan publik di unit kerjanya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '54',
            'nama_kompetensi' => 'Pelayanan Publik',
            'level' => '4',
            'deskripsi' => 'Mampu memonitor, mengevaluasi, Memperhitungkan dan mengantisipasi dampak dari isu-isu jangka panjang, kesempatan, atau kekuatan politik dalam hal Pelayanan kebutuhan pemangku kepentingan yang transparan, objektif, dan profesional',
            'indikator' => '4.1.Memahami dan memberi perhatiankepada isu-isu jangka panjang, kesempatan atau kekuatan politik yang mempengaruhi organisasi dalam hubungannya dengan dunia luar, memperhitungkan dan mengantisipasi dampak terhadap pelaksanaan tugastugas pelayanan publik secara objektif, transparan, dan professional dalam lingkup organisasi;
4.2.Menjaga agar kebijakan pelayananpublik yang diselenggarakan oleh instansinya telah selaras dengan standar pelayanan yang objektif, netral, tidak memihak, tidak diskriminatif, serta tidak terpengaruh kepentingan pribadi/kelompok/partai politik;
4.3.Menerapkan strategi jangka panjang yang berfokus pada pemenuhan kebutuhan pemangku kepentingan dalam menyusun kebijakan dengan mengikuti standar objektif, netral, tidak memihak, tidak diskriminatif, transparan, tidak terpengaruh kepentingan pribadi/kelompok.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '55',
            'nama_kompetensi' => 'Pelayanan Publik',
            'level' => '5',
            'deskripsi' => 'Mampu memastikan kebijakan kebijakan pelayanan publik yang menjamin terselenggaranya pelayanan publik yang objektif, netral, tidak memihak, tidak diskriminatif, serta tidak terpengaruh kepentingan pribadi/kelompok/partai politik.',
            'indikator' => '5.1.Mampu menciptakan kebijakan kebijakan pelayanan publik yang menjamin terselenggaranya pelayanan publik yang objektif, netral, tidak memihak, tidak diskriminatif, serta tidak terpengaruh kepentingan pribadi/kelompok/partai politik.
5.2.Menginternalisasikan nilai dan semangat pelayanan publik yang mengikuti standar objektif, netral, tidak memihak, tidak diskriminatif, transparan, tidak terpengaruh kepentingan pribadi/kelompok kepada setiap individu di lingkungan instansi/nasional.
5.3.Menjamin terselenggaranya  pelayanan publik yang objektif, netral, tidak memihak, tidak diskriminatif, serta tidak terpengaruh kepentingan pribadi/kelompok/partai politik.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '61',
            'nama_kompetensi' => 'Pengembangan diri dan Orang Lain',
            'level' => '1',
            'deskripsi' => 'Pengembangan diri',
            'indikator' => '1.1.Mengidentifikasi kebutuhan pengembangan diri dan menyeleksi sumber serta metodologi pembelajaran yang diperlukan
1.2.Menunjukkan usaha mandiri untuk mempelajari keterampilan atau kemampuan baru dari berbagai media pembelajaran
1.3.Berupaya meningkatkan diri dengan belajar dari orang-orang lain yang berwawasan luas di dalam organisasi',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '62',
            'nama_kompetensi' => 'Pengembangan diri dan Orang Lain',
            'level' => '2',
            'deskripsi' => 'Meningkatkan kemampuan bawahan dengan memberikan contoh dan penjelasan cara melaksanakan suatu pekerjaan',
            'indikator' => '2.1.Meningkatkan kemampuan bawahan dengan memberikan contoh, instruksi, penjelasan dan petunjuk praktis yang jelas kepada bawahan dalam menyelesaikan suatu pekerjaan.
2.2.Membantu bawahan untuk mempelajari proses, program atau sistem baru
2.3.Menggunakan metode lain untuk meyakinkan bahwa orang lain telah memahami penjelasan atau pengarahan',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '63',
            'nama_kompetensi' => 'Pengembangan diri dan Orang Lain',
            'level' => '3',
            'deskripsi' => 'Memberikan umpan balik, membimbing',
            'indikator' => '3.1.Memberikan tugas-tugas yang menantang pada bawahan sebagai media belajar untuk mengembangkan kemampuannya.
3.2.Mengamati bawahan dalam mengerjakan tugasnya dan memberikan umpan balik yang objektif dan jujur; melakukan diskusi dengan bawahan untuk memberikan bimbingan dan umpan balik yang berguna bagi bawahan.
3.3.Mendorong kepercayaan diri bawahan; memberikan kepercayaan penuh pada bawahan untuk mengerjakan tugas dengan caranya sendiri; memberi kesempatan dan membantu bawahan menemukan peluang untuk berkembang.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '64',
            'nama_kompetensi' => 'Pengembangan diri dan Orang Lain',
            'level' => '4',
            'deskripsi' => 'Menyusun program pengembangan jangka panjang dalam rangka mendorong manajemen pembelajaran',
            'indikator' => '4.1.Menyusun program pengembangan jangka panjang bersama-sama dengan bawahan, termasuk didalamnya penetapan tujuan, bimbingan, penugasan dan pengalaman lainnya, serta mengalokasikan waktu untuk mengikuti pelatihan/pendidikan/ pengembangan kompetensi dan karir;
4.2.Melaksanakan manajemen pembelajaran termasuk evaluasi dan umpan balik pada tataran organisasi;
4.3.Mengembangkan orang-orang disekitarnya secara konsisten, melakukan kaderisasi untuk posisiposisi di unit kerjanya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '65',
            'nama_kompetensi' => 'Pengembangan diri dan Orang Lain',
            'level' => '5',
            'deskripsi' => 'Menciptakan situasi yang mendorong organisasi untuk mengembangkan kemampuan belajar secara berkelanjutan dalam rangka mendukung pencapaian hasil',
            'indikator' => '5.1.Menciptakan situasi yang mendorong individu, kelompok, unit kerja untuk mengembangkan kemampuan belajar secara berkelanjutan di tingkat instansi;
5.2.Merekomendasikan/memberikan penghargaan bagi upaya pengembangan yang berhasil, memastikan dukungan bagi orang lain dalam mengembangkan kemampuan dalam unit kerja di tingkat instansi;
5.3.Memberikan inspirasi kepada individu atau kelompok untuk belajar secara berkelanjutan dalam penerapan di tingkat instansi.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '71',
            'nama_kompetensi' => 'Mengelola Perubahan',
            'level' => '1',
            'deskripsi' => 'Mengikuti perubahan dengan',
            'indikator' => '1.1.Sadar mengenai perubahan yang terjadi di organisasi dan berusaha menyesuaikan diri dengan perubahan arahan tersebut.
1.2.Mengikuti perubahan secara terbuka sesuai petunjuk/pedoman.
1.3.Menyesuaikan cara kerja lama dengan menerapkan metode/proses baru dengan bimbingan orang lain.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '72',
            'nama_kompetensi' => 'Mengelola Perubahan',
            'level' => '2',
            'deskripsi' => 'Proaktif beradaptasi mengikuti perubahan',
            'indikator' => '2.1.Menyesuaikan cara kerja lama dengan menerapkan metode/proses baru selaras dengan ketentuan yang berlaku tanpa arahan orang lain
2.2.Mengembangkan kemampuan diri untuk menghadapi perubahan
2.3.Cepat dan tanggap dalam menerima perubahan',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '73',
            'nama_kompetensi' => 'Mengelola Perubahan',
            'level' => '3',
            'deskripsi' => 'Membantu orang lain mengikuti perubahan,mengantisipasi perubahan secara tepat',
            'indikator' => '3.1.Membantu orang lain dalam melakukan perubahan
3.2.Menyesuaikan prioritas kerja secara berulang-ulang jika diperlukan
3.3.Mengantisipasi perubahan yang dibutuhkan oleh unit kerjanya secara tepat. Memberikan solusi efektif terhadap masalah yang ditimbulkan oleh adanya perubahan',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '74',
            'nama_kompetensi' => 'Mengelola Perubahan',
            'level' => '4',
            'deskripsi' => 'Memimpin perubahan pada unit kerja',
            'indikator' => '4.1.Mengarahkan unit kerja untuk lebih siap dalam menghadapi perubahan termasuk  memitigasi risiko yang mungkin terjadi;
4.2.Memastikan perubahan sudah diterapkan secara aktif di lingkup unit  kerjanya secara berkala;
4.3.Memimpin dan memastikan penerapan program-program perubahan selaras antar unit kerja.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '75',
            'nama_kompetensi' => 'Mengelola Perubahan',
            'level' => '5',
            'deskripsi' => 'Memimpin, menggalang dan menggerakkan dukungan pemangku kepentingan untuk menjalankan perubahan secara berkelanjutan pada tingkat instansi/nasional',
            'indikator' => '5.1.Membuat kebijakan-kebijakan yang mendorong perubahan yang berdampak pada pencapaian sasaran prioritas nasional;
5.2.Menggalang dan menggerakkan dukungan para pemangku kepentingan  untuk mengimplementasikan perubahan yang telah ditetapkan
5.3.Secara berkelanjutan, mencari caracara baru untuk memberi nilai tambah bagi perubahan yang tengah dijalankan agar memberi manfaat yang lebih besar bagi para pemangku kepentingan.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '81',
            'nama_kompetensi' => 'Pengambilan Keputusan',
            'level' => '1',
            'deskripsi' => 'Mengumpulkan informasi untuk bertindak sesuai kewenangan',
            'indikator' => '1.1.Mengumpulkan dan mempertimbangkan informasi yang dibutuhkan dalam mencari solusi.
1.2.Mengenali situasi/pilihan yang tepat untuk bertindak sesuai kewenangan.
1.3.Mempertimbangkan kemungkinan solusi yang dapat diterapkan dalam pekerjaan rutin berdasarkan kebijakan dan prosedur yang telah ditentukan.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '82',
            'nama_kompetensi' => 'Pengambilan Keputusan',
            'level' => '2',
            'deskripsi' => 'Menganalisis masalah secara mendalam',
            'indikator' => '2.1.Melakukan analisis secara mendalam terhadap informasi yang tersedia dalam upaya mencari solusi.
2.2.Mempertimbangkan berbagai alternatif yang ada sebelum membuat kesimpulan;
2.3.Membuat keputusan operasional berdasarkan kesimpulan dari berbagai sumber informasi sesuai dengan pedoman yang ada.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '83',
            'nama_kompetensi' => 'Pengambilan Keputusan',
            'level' => '3',
            'deskripsi' => 'Membandingkan berbagai alternatif, menyeimbangkan risiko keberhasilan dalam implementasi',
            'indikator' => '3.1.Membandingkan berbagai alternatif tindakan dan implikasinya,
3.2.Memilih alternatif solusi yang terbaik, membuat keputusan operasional mengacu pada alternatif solusi terbaik yang didasarkan pada analisis data yang sistematis, seksama, mengikuti prinsip kehati-hatian.
3.3.Menyeimbangkan antara kemungkinan risiko dan keberhasilan dalam implementasinya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '84',
            'nama_kompetensi' => 'Pengambilan Keputusan',
            'level' => '4',
            'deskripsi' => 'Menyelesaikan masalah yang mengandung risiko tinggi, mengantisipasi dampak keputusan, membuat tindakan pengamanan; mitigasi risiko',
            'indikator' => '4.1.Menyusun dan/atau memutuskan konsep penyelesaian masalah yang melibatkan beberapa/seluruh fungsi dalam organisasi.
4.2.Menghasilkan solusi dari berbagai masalah yang kompleks, terkait dengan bidang kerjanya yang berdampak pada pihak lain.
4.3.Membuat keputusan dan mengantisipasi  dampak keputusannya serta menyiapkan tindakan penanganannya (mitigasi risiko)',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '85',
            'nama_kompetensi' => 'Pengambilan Keputusan',
            'level' => '5',
            'deskripsi' => 'Menghasilkan solusi dan mengambil keputusan untuk mengatasi permasalahan jangka panjang/strategis, berdampak nasional',
            'indikator' => '5.1.Menghasilkan solusi yang dapat mengatasi permasalahan jangka panjang.
5.2.Menghasilkan solusi strategis yang berdampak pada tataran instansi/nasional.
5.3.Membuat keputusan atau kebijakan yang berdampak nasional dengan memitigasi risiko yang mungkin timbul.',
            'created_at' => now()
        ]);
         DB::table('data_kompetensi')->insert([
            'id' => '91',
            'nama_kompetensi' => 'Perekat Bangsa',
            'level' => '1',
            'deskripsi' => 'Peka memahami dan menerima kemajemukan',
            'indikator' => '1.1.Mampu memahami, menerima, peka terhadap perbedaan individu/kelompok masyarakat;
1.2.Terbuka, ingin belajar tentang perbedaan/kemajemukan masyarakat;
1.3.Mampu bekerja bersama dengan individu yang berbeda latar belakang dengan-nya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '92',
            'nama_kompetensi' => 'Perekat Bangsa',
            'level' => '2',
            'deskripsi' => 'Aktif mengembangkan sikap saling menghargai,  menekankan persamaan dan persatuan',
            'indikator' => '2.1Menampilkan sikap dan perilaku yang peduli akan nilai-nilai keberagaman dan menghargai perbedaan;
2.2Membangun hubungan baik antar individu dalam organisasi, mitra kerja, pemangku kepentingan;
2.3Bersikap tenang, mampu mengendalikan emosi, kemarahan dan frustasi dalam menghadapi pertentangan yang ditimbulkan oleh perbedaan latar belakang, agama/kepercayaan, suku, jender, sosial ekonomi, preferensi politik di lingkungan unit kerjanya.',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '93',
            'nama_kompetensi' => 'Perekat Bangsa',
            'level' => '3',
            'deskripsi' => 'Mempromosikan, mengembangkan sikap toleransi dan persatuan',
            'indikator' => '3.1Mempromosikan sikap menghargai perbedaan di antara orang-orang yang mendorong toleransi dan keterbukaan.
3.2Melakukan pemetaan sosial di masyarakat sehingga dapat memberikan respon yang sesuai dengan budaya yang berlaku. Mengidentifikasi potensi kesalahpahaman yang diakibatkan adanya keragaman budaya yang ada
3.3Menjadi mediator untuk menyelesaikan konflik atau mengurangi dampak negatif darikonflik atau potensi konflik',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '94',
            'nama_kompetensi' => 'Perekat Bangsa',
            'level' => '4',
            'deskripsi' => 'Mendayagunakan perbedaan secara konstruktif dan kreatif untuk meningkatkan efektifitas organisasi',
            'indikator' => '4.1Menginisiasi dan merepresentasikan pemerintah di lingkungan kerja dan masyarakat untuk senantiasa menjaga persatuan dan kesatuan dalam keberagaman dan menerima segala bentuk perbedaan dalam kehidupan bermasyarakat;
4.2Mampu mendayagunakan perbedaan latar belakang, agama/kepercayaan, suku, jender, sosial ekonomi, preferensi politik untuk mencapai kelancaran pencapaian tujuanorganisasi.
4.3Mampu membuat program yang mengakomodasi perbedaan latar belakang, agama/kepercayaan, suku, jender, sosial ekonomi, preferensi politik',
            'created_at' => now()
        ]);
 DB::table('data_kompetensi')->insert([
            'id' => '95',
            'nama_kompetensi' => 'Perekat Bangsa',
            'level' => '5',
            'deskripsi' => 'Wakil pemerintah untuk membangun hubungan sosial psikologis',
            'indikator' => '5.1Menjadi wakil pemerintah yang mampu membangun hubungan sosial psikologis dengan masyarakat sehingga menciptakan kelekatan yang kuat antara ASN dan para pemangku kepentingan serta diantara para pemangku kepentingan itu sendiri.
5.2Mampu mengkomunikasikan dampak risiko yang teridentifikasi dan merekomendasikan tindakan korektif berdasarkan pertimbangan perbedaan latar belakang, agama/kepercayaan, suku, jender, sosial ekonomi, preferensi politik untuk membangun hubungan jangka panjang
5.3Mampu membuat kebijakan yang mengakomodasi perbedaan latar belakang, agama/kepercayaan, suku, jender, sosial ekonomi, preferensi politik yang berdampak positif secara nasional',
            'created_at' => now()
        ]);

    }
}
