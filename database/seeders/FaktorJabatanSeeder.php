<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaktorJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_faktor')->insert([
            'id' => '111',
            'nama_faktor' => 'Tingkat Faktor 1-1',
            'nilai' => '175',
            'indikator' => 'Ruang Lingkup : 
- Pekerjaan yang diarahkan bersifat prosedural, rutin
- Memberikan jasa kepada orang tertentu / unit organisasi terkecil dalam organisasi
Dampak : 
- Pekerjaan yang diarahkan memudahkan pekerjaan orang lain dalam sebuah SKPD
- Memberikan respon terhadap permintaan atau kebutuhan spesifik dari pegawai
- Hanya mempengaruhi fungsi tertentu yang terlokalisasi',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '112',
            'nama_faktor' => 'Tingkat Faktor 1-2',
            'nilai' => '350',
            'indikator' => 'Ruang Lingkup :
- Mengarahkan program / pekerjaan administratif, pekerjaan teknis / pekerjaan klerek yang rumit. Fungsi atau jasa yang diberikan mencakup geografis yang terbatas dan menunjang sebagian besar kegiatan kantor lapangan,  atau kegiatan setara dalam segmen program instansi.
Dampak :
- Jasa /produknya menunjang dan cukup mempengaruhi operasi kantor lapangan
- Mengarahkan sebuah kantor lapangan yang memberikan jasa kepada masyarakat atau memberikan sebagian jasa sesuai kasus yang dibutuhkan kepada masyarakat dalam populasi kecil
- Mengarahkan kegiatan sebuah bagian dari sebuah biro',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '113',
            'nama_faktor' => 'Tingkat Faktor 1-3',
            'nilai' => '550',
            'indikator' => 'Ruang Lingkup : 
- Mengarahkan pekerjaan teknis, pekerjaan administratif dan pekerjaan profesional. Pekerjaan yang diarahkan mencakup suatu daerah ibukota, suatu daerah, atau daerah kecil di beberapa tempat
Dampak :
- Kegiatan, fungsi, atau jasa yang diberikan secara langsung mempengaruhi pekerjaan instansi, pekerjaan instansi lain, operasi sektor industri atau masyarakat luas',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '114',
            'nama_faktor' => 'Tingkat Faktor 1-4',
            'nilai' => '775',
            'indikator' => 'Ruang Lingkup : 
- Mengarahkan program / pekerjaan pengembangan ilmiah, medis, hukum, administratif, peraturan / kebijakan.
- Merupakan operasi utama beberapa instalasi industri besar yang sangat rumit milik pemerintah.
- Mengarahkan pelayanan administrasi (analisis anggaran, manajemen atau pegawai) untuk seluruh kantor pusat atau sebagian besar kantor lapangan.
Dampak : 
- Memiliki dampak terhadap kantor pusat instansi, beberapa program di seluruh tingkat biro, atau sebagian besar kantor lapangan
- Mendapat perhatian yang berkesinambungan dari DPRD atau media massa',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '115',
            'nama_faktor' => 'Tingkat Faktor 1-5',
            'nilai' => '900',
            'indikator' => '- Memiliki dampak luas terhadap masyarakat
- Memimpin organisasi yang mempunyai tugas mengembangkan, mengeluarkan dan melaksanakan kebijakan / peraturan / pedoman yang dipergunakan oleh seluruh jajaran instansi, industri atau mempengaruhi masyarakat luas.',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '121',
            'nama_faktor' => 'Tingkat Faktor 2-1',
            'nilai' => '100',
            'indikator' => 'Jabatan ini bertanggung-jawab kepada jabatan yang berada pada satu atau beberapa tingkat di bawah jabatan tertinggi,',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '122',
            'nama_faktor' => 'Tingkat Faktor 2-2',
            'nilai' => '250',
            'indikator' => 'Jabatan ini bertanggung-jawab kepada suatu jabatan struktural tertinggi yaitu Sekretaris Daerah ',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '123',
            'nama_faktor' => 'Tingkat Faktor 2-3',
            'nilai' => '350',
            'indikator' => 'Jabatan ini adalah jabatan struktural tertinggi.',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '131',
            'nama_faktor' => 'Tingkat Faktor 3-1',
            'nilai' => '450',
            'indikator' => 'Merupakan kriteria yang berisi fungsi manajerial secara umum yang berlaku seluruh jabatan struktural, antara lain :
        - Merencanakan pekerjaan dengan output tahunan
        - Menyempurnakan metode atau prosedur kerja
        - Mengawasi pengembangan data, statistik, saran, masukan, informasi dll yang menjadi masukan bagi pimpinan dalam pengambilan kebijakan
        - Mempertimbangkan pembeliat peralatan baru',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '132',
            'nama_faktor' => 'Tingkat Faktor 3-2',
            'nilai' => '775',
            'indikator' => 'Memenuhi kriteria :
        - Mengampu sebuah segmen program atau urusan
        - Menetapkan tujuan, sasaran, rencana dan jadwal kerja tahunan dan multi tahun di lingkungan sendiri.',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '133',
            'nama_faktor' => 'Tingkat Faktor 3-3',
            'nilai' => '900',
            'indikator' => 'Memenuhi faktor level 1 dan 2 serta ditambah beberapa kriteria, yaitu :
        - Mengawasi seluruh perencanaan, pengarahan dan pelaksanaan atau beberapa bidang urusan
        - Berwenang dalam pengalokasian anggaran
        - Menyetujui rencana jangka panjang
        - Menetapkan tindakan kepegawaian dan proposal design organisasi',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '141',
            'nama_faktor' => 'Tingkat Faktor 4A-1',
            'nilai' => '25',
            'indikator' => 'Berhubungan dengan bawahan yang diselia, jabatan yang setingkat atau dengan staf administrasi/penunjang yang berada dalam organisasi yang sama',
            'tingkat' => 'Tingkat Faktor 4A',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '142',
            'nama_faktor' => 'Tingkat Faktor 4A-2',
            'nilai' => '50',
            'indikator' => 'Berwenang melakukan hubungan dengan salah satu dari mereka di bawah ini :
        - Anggota dunia usaha atau masyarakat luas misalnya petugas survey lokasi 
        - Pejabat penyelia yang kelasnya lebih tinggi dan staf unit kerja di lapangan atau unit utama organisasi dalam instansi misalnya pejabat yang memiliki tugas pemeriksaan
        - wakil kelompok kepentingan masyarakat setempat misalnya 
        - wartawan media massa lokal',
            'tingkat' => 'Tingkat Faktor 4A',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '143',
            'nama_faktor' => 'Tingkat Faktor 4A-3',
            'nilai' => '75',
            'indikator' => 'Dalam melaksanakan hubungan butuh persiapan yang panjang untuk menyusun bahan untuk topik yang rumit. Berwenang untuk melakukan hubungan dengan salah satu dari mereka di bawah ini :
        - Berhubungan dengan pejabat penyelia yang kelasnya lebih tinggi, atau pejabat yang setara di instansi lain 
        - Kelompok masyarakat yang memiliki pengaruh politik
        - Wartawan media massa besar
        - Perusahaan/industri berskala besar
        - Asosiasi perdagangan, kelompok masyarakat (LSM) atau organisasi profesional',
            'tingkat' => 'Tingkat Faktor 4A',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '144',
            'nama_faktor' => 'Tingkat Faktor 4A-4',
            'nilai' => '100',
            'indikator' => 'Hubungan terjadi dalam rapat, pengarahan, pidato, presentasi atau pemeriksaan, butuh jawaban yang tidak diduga sebelumnya. Membutuhkan analisis yang ekstensif dalam menyusun bahan. Memiliki wewenang untuk melakukan hubungan dengan salah satu dari mereka di bawah ini :
        - Orang atau kelompok organisasi yang berpengaruh dari luar instansi
        - Pejabat daerah lain / nasional, pimpinan asosiasi tingkat nasional
        - Staf Ahli DPR
        - Pejabat yang kelasnya lebih tinggi di instansi lain',
            'tingkat' => 'Tingkat Faktor 4A',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '151',
            'nama_faktor' => 'Tingkat Faktor 4B-1',
            'nilai' => '30',
            'indikator' => '- Membahas pelaksanaan pekerjaan
- Memberikan pelayanan
- Memberikan pelatihan, nasihat atau bimbingan kepada bawahan',
            'tingkat' => 'Tingkat Faktor 4B',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '152',
            'nama_faktor' => 'Tingkat Faktor 4B-2',
            'nilai' => '75',
            'indikator' => '- Merencanakan / mengkoordinasikan pekerjaan dengan pegawai yang berada di luar organisasi bawahan.
- Menyelesaikan perbedaan pendapat di antara pejabat penyelia, pegawai, kontraktor dan pihak lain',
            'tingkat' => 'Tingkat Faktor 4B',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '153',
            'nama_faktor' => 'Tingkat Faktor 4B-3',
            'nilai' => '100',
            'indikator' => '- Menimbang, mempertahankan atau merundingkan proyek / program untuk kesesuaian dengan kebijakan/peraturan atau kontrak yang ditetapkan.
- Melakukan pemeriksaan atau presentasi masalah / isu yang berdampak cukup besar pada program yang diarahkan',
            'tingkat' => 'Tingkat Faktor 4B',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '154',
            'nama_faktor' => 'Tingkat Faktor 4B-4',
            'nilai' => '125',
            'indikator' => '- Mempengaruhi, memotivasi, atau melakukan persuasi terhadap kelompok, untuk mendapatkan komitmen / sumber daya / dana dari pihak lain.
- Mengembangkan tujuan dan sasaran program
- Membutuhkan ketrampilan komunikasi / negosiasi untuk memperoleh hasil yang diinginkan',
            'tingkat' => 'Tingkat Faktor 4B',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '161',
            'nama_faktor' => 'Tingkat Faktor 5-1',
            'nilai' => '75',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 4 dan dibawahnya atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '162',
            'nama_faktor' => 'Tingkat Faktor 5-2',
            'nilai' => '205',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 5 atau 6 atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '163',
            'nama_faktor' => 'Tingkat Faktor 5-3',
            'nilai' => '340',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 7 atau 8 atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '164',
            'nama_faktor' => 'Tingkat Faktor 5-4',
            'nilai' => '505',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 9 atau 10 atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '165',
            'nama_faktor' => 'Tingkat Faktor 5-5',
            'nilai' => '650',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 11 atau 12 atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '166',
            'nama_faktor' => 'Tingkat Faktor 5-6',
            'nilai' => '800',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 13 atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '167',
            'nama_faktor' => 'Tingkat Faktor 5-7',
            'nilai' => '930',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 14 atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '168',
            'nama_faktor' => 'Tingkat Faktor 5-8',
            'nilai' => '1030',
            'indikator' => '• Membawahi jabatan fungsional yang nilai jabatannya pada kelas 15 atau lebih tinggi atau yang setara',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '171',
            'nama_faktor' => 'Tingkat Faktor 6-1',
            'nilai' => '310',
            'indikator' => 'Menyelia pejabat kelas 8 ke bawah',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '172',
            'nama_faktor' => 'Tingkat Faktor 6-2',
            'nilai' => '575',
            'indikator' => 'Menyelia pejabat kelas 9 dan 10
        Menyelia pejabat kelas 6,7, dan 8 tetapi memiliki kewenangan dan tanggung jawab penuh terhadap hasil final',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '173',
            'nama_faktor' => 'Tingkat Faktor 6-3',
            'nilai' => '975',
            'indikator' => 'Menyelia pejabat kelas 11 dan 12
        Menyelia pejabat kelas 9 dan 10 tetapi memiliki kewenangan dan tanggung jawab penuh terhadap hasil final
        ',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '174',
            'nama_faktor' => 'Tingkat Faktor 6-4',
            'nilai' => '1120',
            'indikator' => 'Menyelia pejabat kelas 13
        Menyelia pejabat yang menyelia pejabat kelas 11 dan 12',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '175',
            'nama_faktor' => 'Tingkat Faktor 6-5',
            'nilai' => '1225',
            'indikator' => 'Menyelia pejabat kelas 14
        Menyelia pejabat yang menyelia pejabat kelas 13',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '176',
            'nama_faktor' => 'Tingkat Faktor 6-6',
            'nilai' => '1325',
            'indikator' => 'Menyelia pejabat kelas 15 ke atas
        Menyelia pejabat yang menyelia pejabat kelas 14',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '6 Faktor',
            'created_at' => now()
        ]);

        // FAKTOR UNTUK PELAKSANA DAN FUNGSIONAL
        DB::table('data_faktor')->insert([
            'id' => '211',
            'nama_faktor' => 'Tingkat Faktor 1-1',
            'nilai' => '50',
            'indikator' => '• Memerlukan pengetahuan tentang tugas atau operasi yang sederhana, rutin, atau berulang, sedikit/sama sekali tidak membutuhkan pelatihan atau pengalaman sebelumnya',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '212',
            'nama_faktor' => 'Tingkat Faktor 1-2',
            'nilai' => '200',
            'indikator' => '• Memerlukan sedikit pelatihan / pengalaman untuk mengoperasikan alat',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '213',
            'nama_faktor' => 'Tingkat Faktor 1-3',
            'nilai' => '350',
            'indikator' => 'Ketrampilan yang membutuhkan pelatihan dan pengalaman yang cukup untuk mengoperasikan dan menyesuaikan peralatan untuk berbagai tujuan',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '214',
            'nama_faktor' => 'Tingkat Faktor 1-4',
            'nilai' => '550',
            'indikator' => '• Melaksanakan pekerjaan yang saling berhubungan serta menyelesaikan berbagai macam masalah.
• Menggunakan peralatan yang membutuhkan pertimbangan dan karakteristik tertentu 
• Menginterpreasikan hasil tes seperti pranata laboratorium
• Membuat kesimpulan / intisari dari suatu informasi / laporan',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '215',
            'nama_faktor' => 'Tingkat Faktor 1-5',
            'nilai' => '750',
            'indikator' => '• Memerlukan pengetahuan yang diperoleh dari pendidikan kesarjanaan (S1), atau
• Melaksanakan pekerjaan profesional dan administratif yang membutuhkan pelatihan seperti proyek yang membutuhkan teknik yang rumit dan khusus',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '216',
            'nama_faktor' => 'Tingkat Faktor 1-6',
            'nilai' => '950',
            'indikator' => '• Memerlukan pengetahuan yang diperoleh dari pendidikan kesarjanaan ditambah dengan pengalaman atau pendidikan profesi, misalnya : dokter, apoteker dll
• Membuat design/perencanaan yang sulit sebagai contoh untuk diaplikasikan di seluruh SKPD',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '217',
            'nama_faktor' => 'Tingkat Faktor 1-7',
            'nilai' => '1250',
            'indikator' => '• Membutuhkan pengetahuan yang diperoleh melalui pendidikan diatas sarjana 
Misalnya : Dokter Spesialis',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '218',
            'nama_faktor' => 'Tingkat Faktor 1-8',
            'nilai' => '1550',
            'indikator' => '• Membuat keputusan atau rekomendasi yang secara signifikan merubah, menafsirkan, atau mengembangkan program atau kebijakan publik yang penting
• Menerapkan teori yang tidak sesuai dengan metode yang sudah lazim',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '219',
            'nama_faktor' => 'Tingkat Faktor 1-9',
            'nilai' => '1850',
            'indikator' => '• Melaksanakan pekerjaan profesional untuk menciptakan dan mengembangkan teori dan hipotesa baru (sekelas dengan penyusunan disertasi)',
            'tingkat' => 'Tingkat Faktor 1',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '221',
            'nama_faktor' => 'Tingkat Faktor 2-1',
            'nilai' => '25',
            'indikator' => '• Tugas sejenis dan berulang, disertai dengan instruksi yang jelas, terperinci, dan spesifik. Pegawai bekerja sesuai dengan instruksi dan berkonsultasi dengan penyelia untuk persoalan yang tidak spesifik dicakup dalam instruksi/pedoman
        • Pekerjaan diawasi dengan teliti, dilakukan peninjauan pekerjaan atau pengecekan lapangan kemajuan pekerjaan.',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '222',
            'nama_faktor' => 'Tingkat Faktor 2-2',
            'nilai' => '125',
            'indikator' => '• Penyelia memberikan tugas berkelanjutan atau tugas tertentu dengan target kualitas, kuantitas, batas waktu penyelesaian dan prioritas.
        • Penyelia memberikan tambahan instruksi untuk tugas baru dan sulit/tidak biasa termasuk metode kerja yang disarankan.
        • Pegawai menggunakan inisiatif tanpa instruksi yang spesifik tetapi melaporkan jika ada permasalahan atau butuh keputusan dari penyelia.',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '223',
            'nama_faktor' => 'Tingkat Faktor 2-3',
            'nilai' => '275',
            'indikator' => '• Pegawai merencanakan dan melaksanakan langkah-langkah sesuai dengan kebijakan, latihan sebelumnya atau praktek yang biasanya berlaku
        • Pekerjaan yang sudah selesai dievaluasi secara teknik, kelayakan dan kesesuaian dengan kebijakan dan tidak ditinjau secara terperinci.',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '224',
            'nama_faktor' => 'Tingkat Faktor 2-4',
            'nilai' => '450',
            'indikator' => '• Penyelia menentukan tujuan dan sumber daya yang tersedia dan pegawai bertanggungjawab untuk perencanaan dan pelaksanaan tugas, pemecahan sebagian besar konflik yang timbul, pengkoordinasian pekerjaan dengan yang lainnya sebagaimana diperlukan, 
        • Kebijakan tidak spesifik, pegawai perlu menginterpretasikan kebijakan atas inisiatif sendiri sesuai dengan tujuan yang ditetapkan
        • Hasil pekerjaan yang sudah selesai dievaluasi secara umum dalam hal kelayakan, kesesuaian dengan pekerjaan yang lain atau keefektifan dalam memenuhi persyaratan atau hasil yang diharapkan.',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '225',
            'nama_faktor' => 'Tingkat Faktor 2-5',
            'nilai' => '650',
            'indikator' => '• Menerima perintah / tugas dalam level misi atau fungsi instansi yang masih perlu didefinisikan sendiri lebih lanjut (perencanaan, metode dan pelaksanaannya)
        • Pegawai bertanggung jawab atas perencanaan, desain dan pelaksanaan program.
        • Evaulasi pada kesesuaian dengan tujuan / outcome program / dampak',
            'tingkat' => 'Tingkat Faktor 2',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '231',
            'nama_faktor' => 'Tingkat Faktor 3-1',
            'nilai' => '25',
            'indikator' => '• Tersedia pedoman yang jelas, terperinci dan khusus pada seluruh aspek penting pelaksanaan tugas
        • Pegawai harus patuh dan taat pada pedoman, penyimpangan harus mendapat persetujuan dari penyelia.',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '232',
            'nama_faktor' => 'Tingkat Faktor 3-2',
            'nilai' => '125',
            'indikator' => '• Pedoman tersedia dalam berbagai metode sehingga untuk melaksanakan pekerjaan dan harus memilih metode yang paling tepat untuk mencapai efisiensi dan efektifitas pelaksanaan pekerjaan',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '233',
            'nama_faktor' => 'Tingkat Faktor 3-3',
            'nilai' => '275',
            'indikator' => '• Pedoman tersedia tetapi tidak sepenuhnya dapat diterapkan pada pekerjaan
        • Pegawai perlu mengadaptasikan pedoman sesuai dengan situasi dan kondisi yang ada',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '234',
            'nama_faktor' => 'Tingkat Faktor 3-4',
            'nilai' => '450',
            'indikator' => '• Melaksanakan tugas berdasarkan pedoman yang bersifat umum sehingga masih membutuhkan interpretasi dan pertimbangan tertentu.
        • Pegawai menggunakan inisiatif dan akal pikiran untuk melakukan penyimpangan dari pedoman untuk mengembangkan metode, kriteria atau kebijakan baru',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '235',
            'nama_faktor' => 'Tingkat Faktor 3-5',
            'nilai' => '650',
            'indikator' => '• Pedoman dinyatakan secara luas dan tidak spesifik (dalam bentuk kebijakan atau peraturan yang membutuhkan interpretasi yang luas.
        • Pegawai diberikan wewenang teknis untuk mengembangkan dan menginterpretasikan pedoman.
        ',
            'tingkat' => 'Tingkat Faktor 3',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '241',
            'nama_faktor' => 'Tingkat Faktor 4-1',
            'nilai' => '25',
            'indikator' => '• Pekerjaan terdiri dari tugas-tugas yang sudah jelas dan berhubungan secara langsung.
• Pegawai tidak perlu memilih apa yang harus dilakukan
• Tindakan yang akan diambil atau respons yang harus dibuat sudah dapat dilihat. 
• Pekerjaan secara cepat dapat dikuasai.',
            'tingkat' => 'Tingkat Faktor 4',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '242',
            'nama_faktor' => 'Tingkat Faktor 4-2',
            'nilai' => '75',
            'indikator' => '• Pekerjaan terdiri dari tugas yang mencakup langkah, proses atau metode yang berhubungan.
• Perlu memilih langkah-langkah yang akan dilakukan dengan berdasarkan situasi dan kondisi atau informasi-informasi yang mudah dikenali.
• Tindakan yang diambil bisa berbeda tergantung pada sumber informasi, cara mendapatkan informasi dan perbedaan lainnya',
            'tingkat' => 'Tingkat Faktor 4',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '243',
            'nama_faktor' => 'Tingkat Faktor 4-3',
            'nilai' => '150',
            'indikator' => '• Pekerjaan mencakup berbagai tugas yang melibatkan proses dan metode yang berbeda.
• Keputusan mengenai apa yang harus dilakukan, tergantung pada analisa subjek, fase, atau persoalan yang terlibat dalam setiap tugas, atau tindakan yang diambil harus dipilih dari berbagai macam alternatif.',
            'tingkat' => 'Tingkat Faktor 4',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '244',
            'nama_faktor' => 'Tingkat Faktor 4-4',
            'nilai' => '225',
            'indikator' => '• Membutuhkan penilaian dari keadaan yang tidak lazim, 
• Perlu variasi pendekatan, 
• Didukung dengan data yang tidak lengkap atau yang bermasalah.
• Perlu interpretasi data yang sangat besar, perencanaan kerj atau penyempurnaan metode dan teknik yang akan digunakan.',
            'tingkat' => 'Tingkat Faktor 4',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '245',
            'nama_faktor' => 'Tingkat Faktor 4-5',
            'nilai' => '325',
            'indikator' => '• Keputusan mengenai apa yang harus dilakukan, terdapat unsur ketidakpastian yang besar, terdapat fenomena yang tidak dapat diduga, atau persyaratan yang bermasalah.
• Pekerjaan membutuhkan metode / teknik baru, penetapan kriteria baru, atau pengembangan informasi baru',
            'tingkat' => 'Tingkat Faktor 4',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '246',
            'nama_faktor' => 'Tingkat Faktor 4-6',
            'nilai' => '450',
            'indikator' => '• Keputusan mengenai apa yang harus dilakukan, membutuhkan banyak isu atau elemen yang tidak terdefinisikan, yang membutuhkan analisa dan pembuktian yang ekstensif untuk menentukan sifat dan lingkup masalah.
• Membutuhkan usaha yang berkelanjutan untuk menetapkan konsep, teori, atau program, atau untuk memecahkan masalah yang sulit.',
            'tingkat' => 'Tingkat Faktor 4',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '251',
            'nama_faktor' => 'Tingkat Faktor 5-1',
            'nilai' => '25',
            'indikator' => '• Pekerjaan bersifat rutin dengan beberapa prosedur yang terpisah.
• Bersifat memfasilitasi pekerjaan orang lain dalam instansi tetapi mempunyai sedikit dampak di luar unit organisasi langsung',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);

        DB::table('data_faktor')->insert([
            'id' => '252',
            'nama_faktor' => 'Tingkat Faktor 5-2',
            'nilai' => '75',
            'indikator' => '• Pekerjaan meliputi pelaksanaan peraturan, regulasi tertentu dan merupakan bagian dari suatu tugas atau proyek dengan ruang lingkup yang lebih luas.
• Hasil kerja atau jasa mempengaruhi keakuratan, kelayakan, atau akseptabilitas dari proses atau pelayanan lebih lanjut.',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '253',
            'nama_faktor' => 'Tingkat Faktor 5-3',
            'nilai' => '150',
            'indikator' => '• Pekerjaan meliputi perlakuan terhadap berbagai macam masalah, pertanyaan,.
• Hasil kerja atau jasa mempengaruhi desain atau operasi dari sistem, program, atau peralatan; kelayakan kegiatan seperti investigasi lapangan, pengetesan operasi, atau hasil penelitian; atau kondisi sosial, fisik, dan ekonomi masyarakat',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '254',
            'nama_faktor' => 'Tingkat Faktor 5-4',
            'nilai' => '255',
            'indikator' => '• Pekerjaan meliputi penetapan kriteria; memformulasikan proyek; menilai efektifitas program; atau menginvestigasi atau menganalisa berbagai kondisi, masalah, atau pertanyaan yang tidak lazim.
• Hasil kerja atau jasa mempengaruhi berbagai aktivitas lembaga, aktifitas utama industri, atau operasi instansi lain.',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '255',
            'nama_faktor' => 'Tingkat Faktor 5-5',
            'nilai' => '325',
            'indikator' => '• Pekerjaan meliputi pendefinisian kondisi yang tidak diketahui, pemecahan masalah kritis, atau pengembangan teori baru
• Hasil kerja atau jasa berguna untuk  pengembangan aspek utama dari program atau misi pekerjaan administratif atau pengembangan ilmiah',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '256',
            'nama_faktor' => 'Tingkat Faktor 5-6',
            'nilai' => '450',
            'indikator' => '• Pekerjaan meliputi perencanaan, pengembangan, dan pelaksanaan program utama pekerjaan administratif atau pengembangan ilmiah
• Program tersebut penting untuk misi suatu lembaga atau mempengaruhi sejumlah besar orang dalam jangka panjang dan berkelanjutan',
            'tingkat' => 'Tingkat Faktor 5',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '261',
            'nama_faktor' => 'Tingkat Faktor 6-1',
            'nilai' => '10',
            'indikator' => '• Melaksanakan hubungan kerja terbatas dengan pegawai dalam satu instansi atau dengan pegawai di luar instansi yang memiliki fungsi sama.
• Melaksanakan hubungan dengan pegawai di instansi lain atau masyarakat terkait dengan  tugas yang sederhana, rutin dan biasa dilakukan',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '262',
            'nama_faktor' => 'Tingkat Faktor 6-2',
            'nilai' => '25',
            'indikator' => '• Melaksanakan hubungan kerja dengan pegawai di unit kerja lain yang memiliki fungsi yang berbeda.
• Berhubungan dengan masyarakat sesuai prosedur yang ada / sudah ada aturan yang jelas tetapi dengan berbagai maksud tujuan yang membutuhkan informasi /pemecahan yang berbeda-beda pula',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '263',
            'nama_faktor' => 'Tingkat Faktor 6-3',
            'nilai' => '60',
            'indikator' => '• Hubungan dengan individu atau kelompok diluar Pemda dalam situasi yang tidak terencana/insidental
• Terdapat unsur negosiasi/koordinasi yang menghasilkan suatu kesepakatan tertentu
• Misalnya dengan pengacara, kontraktor atau perwakilan dari organisasi profesional, media berita atau kelompok aksi masyarakat',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '264',
            'nama_faktor' => 'Tingkat Faktor 6-4',
            'nilai' => '110',
            'indikator' => '• Hubungan dengan pejabat tinggi dari luar instansi pada level nasional atau internasional, misalnya antara lain, hubungan dengan pejabat yang secara relatif tidak mudah dapat dicapai.
• Misalnya : anggota DPR, duta besar/atase perdagangan, pimpinan organisasi nasional, gubernur dll',
            'tingkat' => 'Tingkat Faktor 6',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '271',
            'nama_faktor' => 'Tingkat Faktor 7-1',
            'nilai' => '20',
            'indikator' => 'Memberi / meminta data, klarifikasi dari informasi sederhana maupun informasi yang sangat teknis
        ',
            'tingkat' => 'Tingkat Faktor 7',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '272',
            'nama_faktor' => 'Tingkat Faktor 7-2',
            'nilai' => '50',
            'indikator' => 'Merencanakan, mengkoordinasikan, mengarahkan, memecahkan masalah, motivasi demi tercapainya tujuan organisasi
        ',
            'tingkat' => 'Tingkat Faktor 7',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '273',
            'nama_faktor' => 'Tingkat Faktor 7-3',
            'nilai' => '120',
            'indikator' => '• Pengawasan, pemeriksaan khusus, negosiasi terhadap dengan orang atau kelompokyang sulit diajak bekerjasama / berbahaya
        • Harus memiliki keahlian dalam melakukan pendekatan
        ',
            'tingkat' => 'Tingkat Faktor 7',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '274',
            'nama_faktor' => 'Tingkat Faktor 7-4',
            'nilai' => '220',
            'indikator' => 'Menyelesaikan masalah yang bersifat kontroversial, menyampaikan gagasan ilmiah baru',
            'tingkat' => 'Tingkat Faktor 7',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '281',
            'nama_faktor' => 'Tingkat Faktor 8-1',
            'nilai' => '5',
            'indikator' => 'Pekerjaan adalah menetap. Pegawai dapat duduk dengan nyaman untuk melakukan pekerjaan. Walaupun demikian mungkin kadang-kadang berjalan, berdiri, menunduk, membawa benda ringan seperti kertas, buku atau bagian yang kecil; atau mengendarai mobil. Tidak ada persyaratan fisik khusus yang dibutuhkan untuk melaksanakan  pekerjaan',
            'tingkat' => 'Tingkat Faktor 8',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '282',
            'nama_faktor' => 'Tingkat Faktor 8-2',
            'nilai' => '20',
            'indikator' => 'Pekerjaan membutuhkan tenaga fisik seperti berdiri dalam waktu yang lama; berjalan di jalan yang kasar, tidak rata, atau permukaan berbatu; aktivitas memerlukan membengkok, meringkuk, membungkuk, merentangkan, mengapai, atau sejenisnya; mengangkat benda yang cukup berat berulang seperti mesin ketik atau kotak dokumen. Pekerjaan tersebut mungkin membutuhkan karakteristik dan kemampuan fisik seperti ketangkasan dan kegesitan di atas rata-rata.',
            'tingkat' => 'Tingkat Faktor 8',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '283',
            'nama_faktor' => 'Tingkat Faktor 8-3',
            'nilai' => '50',
            'indikator' => 'Pekerjaan ini membutuhkan tenaga fisik yang besar dan luar biasa seperti sering menaiki tangga yang tinggi, mengangkat benda berat di atas 20 kg, meringkuk atau merangkak di daerah terlarang, dan mempertahankan diri sendiri atau yang lain terhadap serangan fisi',
            'tingkat' => 'Tingkat Faktor 8',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '291',
            'nama_faktor' => 'Tingkat Faktor 9-1',
            'nilai' => '5',
            'indikator' => '• Bekerja pada tempat-tempat umum seperti pada tempat-tempat seperti, kantor, ruang rapat dan pelatihan, perpustakaan, perumahan, kendaraan umum dan lain-lain
• Lingkungan membawa resiko dan ketidaknyamanan setiap hari, yang membutuhkan tindakan pencegahan keamanan antara lain, penggunaan praktek kerja yang aman pada peralatan kantor, menghindari licin dan jatuh, pengamatan peraturan kebakaran dan tanda lalu lintas. 
• Situasi kerja cukup terang, tidak panas, dan cukup ventilasi.',
            'tingkat' => 'Tingkat Faktor 9',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '292',
            'nama_faktor' => 'Tingkat Faktor 9-2',
            'nilai' => '20',
            'indikator' => '• Memerlukan tindakan pencegahan keamanan khusus antara lain menggunakan pakaian pelindung, seperti topeng, baju, jaket, sepatu boot, kacamata debu, sarungtangan, masker, atau baju pelindung 
• Misalnya bekerja disekitar benda bergerak, kereta, atau mesin, berhadapan dengan penyakit menular atau iritasi bahan kimia',
            'tingkat' => 'Tingkat Faktor 9',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
        DB::table('data_faktor')->insert([
            'id' => '293',
            'nama_faktor' => 'Tingkat Faktor 9-3',
            'nilai' => '50',
            'indikator' => '• Bekerja pada lingkungan yang memiliki resiko tinggi, berhadapan pada situasi bahaya atau stres lingkungan yang tidak umum, yang mempersyaratkan pengamanan dan tindakan pencegahan.
Misalnya bekerja pada tempat yang sangat tinggi dibawah kondisi cuaca yang ekstrim, memungkinkan terjadinya serangan fisik, atau situasi sejenis dimana kondisi tidak dapat dikontrol misalnya melaksanakan pengamanan demonstrasi/kerusuhan',
            'tingkat' => 'Tingkat Faktor 9',
            'jenis_jabatan' => '9 Faktor',
            'created_at' => now()
        ]);
    }
}
