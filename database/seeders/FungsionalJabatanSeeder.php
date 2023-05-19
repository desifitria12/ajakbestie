<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FungsionalJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert([
            'id' => '3395',
            'nama_jabatan' => 'Administrator Kesehatan Pertama',
            'nama_unit' => 'Administrator Kesehatan Pertama',
            'ikhtisar' => 'Melaksanakan analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi pelaksanaan program-program pembangunan kesehatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Bidang Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Administrator Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Administrator Kesehatan Pertama
2. Data, Bahan dan Informasi terkait Administrator Kesehatan Pertama
3. Produk hukum terkait jabatan Administrator Kesehatan Pertama
4. Dokumen Administrator Kesehatan Pertama
5. Dokumentasi kegiatan Administrator Kesehatan Pertama
6. Hasil Kajian Administrator Kesehatan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Administrator Kesehatan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Administrator Kesehatan Pertama
9. Laporan pelaksanaan kegiatan Administrator Kesehatan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi program-program pembangunan kesehatan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi program-program pembangunan kesehatan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3396',
            'nama_jabatan' => 'Administrator Kesehatan Muda',
            'nama_unit' => 'Administrator Kesehatan Muda',
            'ikhtisar' => 'Melaksanakan analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi pelaksanaan program-program pembangunan kesehatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Bidang Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Administrator Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Administrator Kesehatan Muda
2. Data, Bahan dan Informasi terkait Administrator Kesehatan Muda
3. Produk hukum terkait jabatan Administrator Kesehatan Muda
4. Dokumen Administrator Kesehatan Muda
5. Dokumentasi kegiatan Administrator Kesehatan Muda
6. Hasil Kajian Administrator Kesehatan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Administrator Kesehatan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Administrator Kesehatan Muda
9. Laporan pelaksanaan kegiatan Administrator Kesehatan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi program-program pembangunan kesehatan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi program-program pembangunan kesehatan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3397',
            'nama_jabatan' => 'Administrator Kesehatan Madya',
            'nama_unit' => 'Administrator Kesehatan Madya',
            'ikhtisar' => 'Melaksanakan analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi pelaksanaan program-program pembangunan kesehatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Bidang Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Administrator Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Administrator Kesehatan Madya
2. Data, Bahan dan Informasi terkait Administrator Kesehatan Madya
3. Produk hukum terkait jabatan Administrator Kesehatan Madya
4. Dokumen Administrator Kesehatan Madya
5. Dokumentasi kegiatan Administrator Kesehatan Madya
6. Hasil Kajian Administrator Kesehatan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Administrator Kesehatan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Administrator Kesehatan Madya
9. Laporan pelaksanaan kegiatan Administrator Kesehatan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi program-program pembangunan kesehatan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis kebijakan di bidang administrasi pelayanan, perijinan, akreditasi dan sertifikasi program-program pembangunan kesehatan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3398',
            'nama_jabatan' => 'Analis Keuangan Pusat dan Daerah Ahli Utama',
            'nama_unit' => 'Analis Keuangan Pusat dan Daerah Ahli Utama',
            'ikhtisar' => 'Melakukan kegiatan analisis dibidang keuangan pusat dan daerah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Ekonomi/Keuangan/Hukum/Administrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pelatihanan fungsional Analis keuangan pusat dan daerah',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Keuangan Pusat dan Daerah Ahli Utama
2. Data, Bahan dan Informasi terkait Analis Keuangan Pusat dan Daerah Ahli Utama
3. Produk hukum terkait jabatan Analis Keuangan Pusat dan Daerah Ahli Utama
4. Dokumen Analis Keuangan Pusat dan Daerah Ahli Utama
5. Dokumentasi kegiatan Analis Keuangan Pusat dan Daerah Ahli Utama
6. Hasil Kajian Analis Keuangan Pusat dan Daerah Ahli Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Keuangan Pusat dan Daerah Ahli Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Keuangan Pusat dan Daerah Ahli Utama
9. Laporan pelaksanaan kegiatan Analis Keuangan Pusat dan Daerah Ahli Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3399',
            'nama_jabatan' => 'Analis Keuangan Pusat dan Daerah Ahli Madya',
            'nama_unit' => 'Analis Keuangan Pusat dan Daerah Ahli Madya',
            'ikhtisar' => 'Melakukan kegiatan analisis dibidang keuangan pusat dan daerah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Ekonomi/Keuangan/Hukum/Administrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pelatihanan fungsional Analis keuangan pusat dan daerah',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Keuangan Pusat dan Daerah Ahli Madya
2. Data, Bahan dan Informasi terkait Analis Keuangan Pusat dan Daerah Ahli Madya
3. Produk hukum terkait jabatan Analis Keuangan Pusat dan Daerah Ahli Madya
4. Dokumen Analis Keuangan Pusat dan Daerah Ahli Madya
5. Dokumentasi kegiatan Analis Keuangan Pusat dan Daerah Ahli Madya
6. Hasil Kajian Analis Keuangan Pusat dan Daerah Ahli Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Keuangan Pusat dan Daerah Ahli Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Keuangan Pusat dan Daerah Ahli Madya
9. Laporan pelaksanaan kegiatan Analis Keuangan Pusat dan Daerah Ahli Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3400',
            'nama_jabatan' => 'Analis Keuangan Pusat dan Daerah Ahli Muda',
            'nama_unit' => 'Analis Keuangan Pusat dan Daerah Ahli Muda',
            'ikhtisar' => 'Melakukan kegiatan analisis dibidang keuangan pusat dan daerah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Ekonomi/Keuangan/Hukum/Administrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pelatihanan fungsional Analis keuangan pusat dan daerah',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Keuangan Pusat dan Daerah Ahli Muda
2. Data, Bahan dan Informasi terkait Analis Keuangan Pusat dan Daerah Ahli Muda
3. Produk hukum terkait jabatan Analis Keuangan Pusat dan Daerah Ahli Muda
4. Dokumen Analis Keuangan Pusat dan Daerah Ahli Muda
5. Dokumentasi kegiatan Analis Keuangan Pusat dan Daerah Ahli Muda
6. Hasil Kajian Analis Keuangan Pusat dan Daerah Ahli Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Keuangan Pusat dan Daerah Ahli Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Keuangan Pusat dan Daerah Ahli Muda
9. Laporan pelaksanaan kegiatan Analis Keuangan Pusat dan Daerah Ahli Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3401',
            'nama_jabatan' => 'Analis Keuangan Pusat dan Daerah Ahli Pertama',
            'nama_unit' => 'Analis Keuangan Pusat dan Daerah Ahli Pertama',
            'ikhtisar' => 'Melakukan kegiatan analisis dibidang keuangan pusat dan daerah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S1/D IV Ekonomi/Keuangan/Hukum/Administrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pelatihanan fungsional Analis keuangan pusat dan daerah',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Keuangan Pusat dan Daerah Ahli Pertama
2. Data, Bahan dan Informasi terkait Analis Keuangan Pusat dan Daerah Ahli Pertama
3. Produk hukum terkait jabatan Analis Keuangan Pusat dan Daerah Ahli Pertama
4. Dokumen Analis Keuangan Pusat dan Daerah Ahli Pertama
5. Dokumentasi kegiatan Analis Keuangan Pusat dan Daerah Ahli Pertama
6. Hasil Kajian Analis Keuangan Pusat dan Daerah Ahli Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Keuangan Pusat dan Daerah Ahli Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Keuangan Pusat dan Daerah Ahli Pertama
9. Laporan pelaksanaan kegiatan Analis Keuangan Pusat dan Daerah Ahli Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan analisis keuangan pusat dan daerah dalam lingkungan Instansi Pusat dan Instansi Daerah',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3402',
            'nama_jabatan' => 'Polisi Pamong Praja Madya',
            'nama_unit' => 'Polisi Pamong Praja Madya',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Ilmu Pemerintahan, Sosial, Politik, Hukum, Ekonomi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp Keahlian',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Madya
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Madya
3. Produk hukum terkait jabatan Polisi Pamong Praja Madya
4. Dokumen Polisi Pamong Praja Madya
5. Dokumentasi kegiatan Polisi Pamong Praja Madya
6. Hasil Kajian Polisi Pamong Praja Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Madya
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan tindakan penertiban non yustisial terhadap warga masyarakat, aparatur, atau badan hukum yang melakukan pelanggaran atas Perda dan/atau Perkada',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3403',
            'nama_jabatan' => 'Polisi Pamong Praja Muda',
            'nama_unit' => 'Polisi Pamong Praja Muda',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Ilmu Pemerintahan, Sosial, Politik, Hukum, Ekonomi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp Keahlian',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Muda
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Muda
3. Produk hukum terkait jabatan Polisi Pamong Praja Muda
4. Dokumen Polisi Pamong Praja Muda
5. Dokumentasi kegiatan Polisi Pamong Praja Muda
6. Hasil Kajian Polisi Pamong Praja Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Muda
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penegakan peraturan daerah dan penyelenggaraan ketertiban umum dan ketenteraman masyarakat sesuai dengan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3404',
            'nama_jabatan' => 'Polisi Pamong Praja Pertama',
            'nama_unit' => 'Polisi Pamong Praja Pertama',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Ilmu Pemerintahan, Sosial, Politik, Hukum, Ekonomi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp Keahlian',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Pertama
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Pertama
3. Produk hukum terkait jabatan Polisi Pamong Praja Pertama
4. Dokumen Polisi Pamong Praja Pertama
5. Dokumentasi kegiatan Polisi Pamong Praja Pertama
6. Hasil Kajian Polisi Pamong Praja Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Pertama
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penegakan peraturan daerah dan penyelenggaraan ketertiban umum dan ketenteraman masyarakat sesuai dengan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3405',
            'nama_jabatan' => 'Polisi Pamong Praja Penyelia',
            'nama_unit' => 'Polisi Pamong Praja Penyelia',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA atau yang setingkat dengan kualifikasi yang ditetapkan oleh Menteri Dalam Negeri selaku pimpinan instansi pembina ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp keterampilan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Penyelia
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Penyelia
3. Produk hukum terkait jabatan Polisi Pamong Praja Penyelia
4. Dokumen Polisi Pamong Praja Penyelia
5. Dokumentasi kegiatan Polisi Pamong Praja Penyelia
6. Hasil Kajian Polisi Pamong Praja Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Penyelia
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penegakan peraturan daerah dan penyelenggaraan ketertiban umum dan ketenteraman masyarakat sesuai dengan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3406',
            'nama_jabatan' => 'Polisi Pamong Praja Mahir',
            'nama_unit' => 'Polisi Pamong Praja Mahir',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA atau yang setingkat dengan kualifikasi yang ditetapkan oleh Menteri Dalam Negeri selaku pimpinan instansi pembina ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp keterampilan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Mahir
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Mahir
3. Produk hukum terkait jabatan Polisi Pamong Praja Mahir
4. Dokumen Polisi Pamong Praja Mahir
5. Dokumentasi kegiatan Polisi Pamong Praja Mahir
6. Hasil Kajian Polisi Pamong Praja Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Mahir
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penegakan peraturan daerah dan penyelenggaraan ketertiban umum dan ketenteraman masyarakat sesuai dengan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3407',
            'nama_jabatan' => 'Polisi Pamong Praja Terampil',
            'nama_unit' => 'Polisi Pamong Praja Terampil',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA atau yang setingkat dengan kualifikasi yang ditetapkan oleh Menteri Dalam Negeri selaku pimpinan instansi pembina ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp keterampilan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Terampil
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Terampil
3. Produk hukum terkait jabatan Polisi Pamong Praja Terampil
4. Dokumen Polisi Pamong Praja Terampil
5. Dokumentasi kegiatan Polisi Pamong Praja Terampil
6. Hasil Kajian Polisi Pamong Praja Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Terampil
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penegakan peraturan daerah dan penyelenggaraan ketertiban umum dan ketenteraman masyarakat sesuai dengan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3408',
            'nama_jabatan' => 'Polisi Pamong Praja Pemula',
            'nama_unit' => 'Polisi Pamong Praja Pemula',
            'ikhtisar' => 'Penegakan Perda dan penyelenggaraan ketertiban umum dan ketenteraman Masyarakat',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA atau yang setingkat dengan kualifikasi yang ditetapkan oleh Menteri Dalam Negeri selaku pimpinan instansi pembina ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan dasar pol pp keterampilan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Pamong Praja Pemula
2. Data, Bahan dan Informasi terkait Polisi Pamong Praja Pemula
3. Produk hukum terkait jabatan Polisi Pamong Praja Pemula
4. Dokumen Polisi Pamong Praja Pemula
5. Dokumentasi kegiatan Polisi Pamong Praja Pemula
6. Hasil Kajian Polisi Pamong Praja Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Pamong Praja Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Pamong Praja Pemula
9. Laporan pelaksanaan kegiatan Polisi Pamong Praja Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terselenggaranya penegakan peraturan daerah dan perkada sesuai dengan prosedur yang ada
- Terjaganya keamanan obyek vital
- Terdeteksinya secara dini potensi gangguan keamanan dan ketertiban yang akan terjadi',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penegakan peraturan daerah dan penyelenggaraan ketertiban umum dan ketenteraman masyarakat sesuai dengan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3409',
            'nama_jabatan' => 'Pranata SDM Aparatur Terampil',
            'nama_unit' => 'Pranata SDM Aparatur Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan penataan administrasi pengelolaan dan pelayanan kepegawaian aparatur sipil negara',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III di Bidang ilmu kepegawaian/sumber daya manusia, manajemen/ administrasi perkantoran, administrasi pemerintahan, kesekretariatan, dan teknik informatika/manajemen informatika/ilmu komputer/teknik komputer',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata SDM Aparatur Terampil
2. Data, Bahan dan Informasi terkait Pranata SDM Aparatur Terampil
3. Produk hukum terkait jabatan Pranata SDM Aparatur Terampil
4. Dokumen Pranata SDM Aparatur Terampil
5. Dokumentasi kegiatan Pranata SDM Aparatur Terampil
6. Hasil Kajian Pranata SDM Aparatur Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata SDM Aparatur Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata SDM Aparatur Terampil
9. Laporan pelaksanaan kegiatan Pranata SDM Aparatur Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan penataan administrasi pengelolaan dan pelayanan kepegawaian aparatur sipil negara',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3410',
            'nama_jabatan' => 'Pranata SDM Aparatur Mahir',
            'nama_unit' => 'Pranata SDM Aparatur Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan penataan administrasi pengelolaan dan pelayanan kepegawaian aparatur sipil negara',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III di Bidang ilmu kepegawaian/sumber daya manusia, manajemen/ administrasi perkantoran, administrasi pemerintahan, kesekretariatan, dan teknik informatika/manajemen informatika/ilmu komputer/teknik komputer',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata SDM Aparatur Mahir
2. Data, Bahan dan Informasi terkait Pranata SDM Aparatur Mahir
3. Produk hukum terkait jabatan Pranata SDM Aparatur Mahir
4. Dokumen Pranata SDM Aparatur Mahir
5. Dokumentasi kegiatan Pranata SDM Aparatur Mahir
6. Hasil Kajian Pranata SDM Aparatur Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata SDM Aparatur Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata SDM Aparatur Mahir
9. Laporan pelaksanaan kegiatan Pranata SDM Aparatur Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan penataan administrasi pengelolaan dan pelayanan kepegawaian aparatur sipil negara',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3411',
            'nama_jabatan' => 'Pranata SDM Aparatur Penyelia',
            'nama_unit' => 'Pranata SDM Aparatur Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan penataan administrasi pengelolaan dan pelayanan kepegawaian aparatur sipil negara',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III di Bidang ilmu kepegawaian/sumber daya manusia, manajemen/ administrasi perkantoran, administrasi pemerintahan, kesekretariatan, dan teknik informatika/manajemen informatika/ilmu komputer/teknik komputer',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata SDM Aparatur Penyelia
2. Data, Bahan dan Informasi terkait Pranata SDM Aparatur Penyelia
3. Produk hukum terkait jabatan Pranata SDM Aparatur Penyelia
4. Dokumen Pranata SDM Aparatur Penyelia
5. Dokumentasi kegiatan Pranata SDM Aparatur Penyelia
6. Hasil Kajian Pranata SDM Aparatur Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata SDM Aparatur Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata SDM Aparatur Penyelia
9. Laporan pelaksanaan kegiatan Pranata SDM Aparatur Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan penataan administrasi pengelolaan dan pelayanan kepegawaian aparatur sipil negara',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3412',
            'nama_jabatan' => 'Analis SDM Aparatur Pertama',
            'nama_unit' => 'Analis SDM Aparatur Pertama',
            'ikhtisar' => 'Melakukan pengelolaan sistem SDM Aparatur melalui kegiatan perumusan, analisis, evaluasi, pengembangan, asistensi, konsultasi dan penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1/D IV Bidang ilmu administrasi negara/publik, kebijakan publik, manajemen publik, manajemen/pengembangan sumber daya manusia, pemerintahan, dan informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis SDM Aparatur Pertama
2. Data, Bahan dan Informasi terkait Analis SDM Aparatur Pertama
3. Produk hukum terkait jabatan Analis SDM Aparatur Pertama
4. Dokumen Analis SDM Aparatur Pertama
5. Dokumentasi kegiatan Analis SDM Aparatur Pertama
6. Hasil Kajian Analis SDM Aparatur Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis SDM Aparatur Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis SDM Aparatur Pertama
9. Laporan pelaksanaan kegiatan Analis SDM Aparatur Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. melakukan pengelolaan sistem SDM Aparatur 
2. perumusan sistem SDM Aparatur, 
3. analisis sistem SDM Aparatur, 
4. evaluasi sistem SDM Aparatur, 
5. pengembangan sistem SDM Aparatur, 
6. asistensi sistem SDM Aparatur, 
7. konsultasi sistem SDM Aparatur dan 
8. penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3413',
            'nama_jabatan' => 'Analis SDM Aparatur Muda',
            'nama_unit' => 'Analis SDM Aparatur Muda',
            'ikhtisar' => 'Melakukan pengelolaan sistem SDM Aparatur melalui kegiatan perumusan, analisis, evaluasi, pengembangan, asistensi, konsultasi dan penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1/D IV Bidang ilmu administrasi negara/publik, kebijakan publik, manajemen publik, manajemen/pengembangan sumber daya manusia, pemerintahan, dan informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis SDM Aparatur Muda
2. Data, Bahan dan Informasi terkait Analis SDM Aparatur Muda
3. Produk hukum terkait jabatan Analis SDM Aparatur Muda
4. Dokumen Analis SDM Aparatur Muda
5. Dokumentasi kegiatan Analis SDM Aparatur Muda
6. Hasil Kajian Analis SDM Aparatur Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Analis SDM Aparatur Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis SDM Aparatur Muda
9. Laporan pelaksanaan kegiatan Analis SDM Aparatur Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. melakukan pengelolaan sistem SDM Aparatur 
2. perumusan sistem SDM Aparatur, 
3. analisis sistem SDM Aparatur, 
4. evaluasi sistem SDM Aparatur, 
5. pengembangan sistem SDM Aparatur, 
6. asistensi sistem SDM Aparatur, 
7. konsultasi sistem SDM Aparatur dan 
8. penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3414',
            'nama_jabatan' => 'Analis SDM Aparatur Madya',
            'nama_unit' => 'Analis SDM Aparatur Madya',
            'ikhtisar' => 'Melakukan pengelolaan sistem SDM Aparatur melalui kegiatan perumusan, analisis, evaluasi, pengembangan, asistensi, konsultasi dan penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1/D IV Bidang ilmu administrasi negara/publik, kebijakan publik, manajemen publik, manajemen/pengembangan sumber daya manusia, pemerintahan, dan informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis SDM Aparatur Madya
2. Data, Bahan dan Informasi terkait Analis SDM Aparatur Madya
3. Produk hukum terkait jabatan Analis SDM Aparatur Madya
4. Dokumen Analis SDM Aparatur Madya
5. Dokumentasi kegiatan Analis SDM Aparatur Madya
6. Hasil Kajian Analis SDM Aparatur Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Analis SDM Aparatur Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis SDM Aparatur Madya
9. Laporan pelaksanaan kegiatan Analis SDM Aparatur Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. melakukan pengelolaan sistem SDM Aparatur 
2. perumusan sistem SDM Aparatur, 
3. analisis sistem SDM Aparatur, 
4. evaluasi sistem SDM Aparatur, 
5. pengembangan sistem SDM Aparatur, 
6. asistensi sistem SDM Aparatur, 
7. konsultasi sistem SDM Aparatur dan 
8. penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3415',
            'nama_jabatan' => 'Analis SDM Aparatur Utama',
            'nama_unit' => 'Analis SDM Aparatur Utama',
            'ikhtisar' => 'Melakukan pengelolaan sistem SDM Aparatur melalui kegiatan perumusan, analisis, evaluasi, pengembangan, asistensi, konsultasi dan penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1/D IV Bidang ilmu administrasi negara/publik, kebijakan publik, manajemen publik, manajemen/pengembangan sumber daya manusia, pemerintahan, dan informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis SDM Aparatur Utama
2. Data, Bahan dan Informasi terkait Analis SDM Aparatur Utama
3. Produk hukum terkait jabatan Analis SDM Aparatur Utama
4. Dokumen Analis SDM Aparatur Utama
5. Dokumentasi kegiatan Analis SDM Aparatur Utama
6. Hasil Kajian Analis SDM Aparatur Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis SDM Aparatur Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis SDM Aparatur Utama
9. Laporan pelaksanaan kegiatan Analis SDM Aparatur Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. melakukan pengelolaan sistem SDM Aparatur 
2. perumusan sistem SDM Aparatur, 
3. analisis sistem SDM Aparatur, 
4. evaluasi sistem SDM Aparatur, 
5. pengembangan sistem SDM Aparatur, 
6. asistensi sistem SDM Aparatur, 
7. konsultasi sistem SDM Aparatur dan 
8. penyusunan saran kebijakan dalam konteks kebutuhan serta kepentingan terbaik organisasi sesuai dengan peraturan perundang-undangan dan praktik SDM profesional mutakhir',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data kepegawaian
b. Menggunakan aplikasi kepegawaian
c. Mengubah data kepegawaian dalam aplikasi kepegawaian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3416',
            'nama_jabatan' => 'Analis Kebijakan Pertama',
            'nama_unit' => 'Analis Kebijakan Pertama',
            'ikhtisar' => 'Melaksanakan kajian dan analisis kebijakan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => '-',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional analis kebijakan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Kebijakan Pertama
2. Data, Bahan dan Informasi terkait Analis Kebijakan Pertama
3. Produk hukum terkait jabatan Analis Kebijakan Pertama
4. Dokumen Analis Kebijakan Pertama
5. Dokumentasi kegiatan Analis Kebijakan Pertama
6. Hasil Kajian Analis Kebijakan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Kebijakan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Kebijakan Pertama
9. Laporan pelaksanaan kegiatan Analis Kebijakan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3417',
            'nama_jabatan' => 'Analis Kebijakan Muda',
            'nama_unit' => 'Analis Kebijakan Muda',
            'ikhtisar' => 'Melaksanakan kajian dan analisis kebijakan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => '-',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional analis kebijakan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Kebijakan Muda
2. Data, Bahan dan Informasi terkait Analis Kebijakan Muda
3. Produk hukum terkait jabatan Analis Kebijakan Muda
4. Dokumen Analis Kebijakan Muda
5. Dokumentasi kegiatan Analis Kebijakan Muda
6. Hasil Kajian Analis Kebijakan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Kebijakan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Kebijakan Muda
9. Laporan pelaksanaan kegiatan Analis Kebijakan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3418',
            'nama_jabatan' => 'Analis Kebijakan Madya',
            'nama_unit' => 'Analis Kebijakan Madya',
            'ikhtisar' => 'Melaksanakan kajian dan analisis kebijakan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => '-',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional analis kebijakan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Kebijakan Madya
2. Data, Bahan dan Informasi terkait Analis Kebijakan Madya
3. Produk hukum terkait jabatan Analis Kebijakan Madya
4. Dokumen Analis Kebijakan Madya
5. Dokumentasi kegiatan Analis Kebijakan Madya
6. Hasil Kajian Analis Kebijakan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Kebijakan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Kebijakan Madya
9. Laporan pelaksanaan kegiatan Analis Kebijakan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3419',
            'nama_jabatan' => 'Analis Kebijakan Utama',
            'nama_unit' => 'Analis Kebijakan Utama',
            'ikhtisar' => 'Melaksanakan kajian dan analisis kebijakan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => '-',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional analis kebijakan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Kebijakan Utama
2. Data, Bahan dan Informasi terkait Analis Kebijakan Utama
3. Produk hukum terkait jabatan Analis Kebijakan Utama
4. Dokumen Analis Kebijakan Utama
5. Dokumentasi kegiatan Analis Kebijakan Utama
6. Hasil Kajian Analis Kebijakan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Kebijakan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Kebijakan Utama
9. Laporan pelaksanaan kegiatan Analis Kebijakan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kajian dan analisis kebijakan dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3420',
            'nama_jabatan' => 'Analis Pasar Hasil Pertanian Terampil',
            'nama_unit' => 'Analis Pasar Hasil Pertanian Terampil',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengkaji kebijakan dan mengembangkan pelayanan di bidang analisis pasar hasil pertanian ',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Sekolah Pertanian Pembangunan (SPP)/dan atau Sekolah Menengah Kejuruan (SMK) di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Pasar Hasil Pertanian Terampil
2. Data, Bahan dan Informasi terkait Analis Pasar Hasil Pertanian Terampil
3. Produk hukum terkait jabatan Analis Pasar Hasil Pertanian Terampil
4. Dokumen Analis Pasar Hasil Pertanian Terampil
5. Dokumentasi kegiatan Analis Pasar Hasil Pertanian Terampil
6. Hasil Kajian Analis Pasar Hasil Pertanian Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Pasar Hasil Pertanian Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Pasar Hasil Pertanian Terampil
9. Laporan pelaksanaan kegiatan Analis Pasar Hasil Pertanian Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis pasar hasil pertanian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis pasar hasil pertanian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3421',
            'nama_jabatan' => 'Analis Pasar Hasil Pertanian Mahir',
            'nama_unit' => 'Analis Pasar Hasil Pertanian Mahir',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengkaji kebijakan dan mengembangkan pelayanan di bidang analisis pasar hasil pertanian ',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Sekolah Pertanian Pembangunan (SPP)/dan atau Sekolah Menengah Kejuruan (SMK) di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Pasar Hasil Pertanian Mahir
2. Data, Bahan dan Informasi terkait Analis Pasar Hasil Pertanian Mahir
3. Produk hukum terkait jabatan Analis Pasar Hasil Pertanian Mahir
4. Dokumen Analis Pasar Hasil Pertanian Mahir
5. Dokumentasi kegiatan Analis Pasar Hasil Pertanian Mahir
6. Hasil Kajian Analis Pasar Hasil Pertanian Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Pasar Hasil Pertanian Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Pasar Hasil Pertanian Mahir
9. Laporan pelaksanaan kegiatan Analis Pasar Hasil Pertanian Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis pasar hasil pertanian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis pasar hasil pertanian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3422',
            'nama_jabatan' => 'Analis Pasar Hasil Pertanian Penyelia',
            'nama_unit' => 'Analis Pasar Hasil Pertanian Penyelia',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengkaji kebijakan dan mengembangkan pelayanan di bidang analisis pasar hasil pertanian ',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Sekolah Pertanian Pembangunan (SPP)/dan atau Sekolah Menengah Kejuruan (SMK) di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Pasar Hasil Pertanian Penyelia
2. Data, Bahan dan Informasi terkait Analis Pasar Hasil Pertanian Penyelia
3. Produk hukum terkait jabatan Analis Pasar Hasil Pertanian Penyelia
4. Dokumen Analis Pasar Hasil Pertanian Penyelia
5. Dokumentasi kegiatan Analis Pasar Hasil Pertanian Penyelia
6. Hasil Kajian Analis Pasar Hasil Pertanian Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Pasar Hasil Pertanian Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Pasar Hasil Pertanian Penyelia
9. Laporan pelaksanaan kegiatan Analis Pasar Hasil Pertanian Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis pasar hasil pertanian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis pasar hasil pertanian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3423',
            'nama_jabatan' => 'Analis Pasar Hasil Pertanian Pertama',
            'nama_unit' => 'Analis Pasar Hasil Pertanian Pertama',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengkaji kebijakan dan mengembangkan pelayanan dibidang analisis pasar basil pertanian. ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Pasar Hasil Pertanian Pertama
2. Data, Bahan dan Informasi terkait Analis Pasar Hasil Pertanian Pertama
3. Produk hukum terkait jabatan Analis Pasar Hasil Pertanian Pertama
4. Dokumen Analis Pasar Hasil Pertanian Pertama
5. Dokumentasi kegiatan Analis Pasar Hasil Pertanian Pertama
6. Hasil Kajian Analis Pasar Hasil Pertanian Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Pasar Hasil Pertanian Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Pasar Hasil Pertanian Pertama
9. Laporan pelaksanaan kegiatan Analis Pasar Hasil Pertanian Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis pasar hasil pertanian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis pasar hasil pertanian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3424',
            'nama_jabatan' => 'Analis Pasar Hasil Pertanian Muda',
            'nama_unit' => 'Analis Pasar Hasil Pertanian Muda',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengkaji kebijakan dan mengembangkan pelayanan dibidang analisis pasar basil pertanian. ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Pasar Hasil Pertanian Muda
2. Data, Bahan dan Informasi terkait Analis Pasar Hasil Pertanian Muda
3. Produk hukum terkait jabatan Analis Pasar Hasil Pertanian Muda
4. Dokumen Analis Pasar Hasil Pertanian Muda
5. Dokumentasi kegiatan Analis Pasar Hasil Pertanian Muda
6. Hasil Kajian Analis Pasar Hasil Pertanian Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Pasar Hasil Pertanian Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Pasar Hasil Pertanian Muda
9. Laporan pelaksanaan kegiatan Analis Pasar Hasil Pertanian Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis pasar hasil pertanian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis pasar hasil pertanian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3425',
            'nama_jabatan' => 'Analis Pasar Hasil Pertanian Madya',
            'nama_unit' => 'Analis Pasar Hasil Pertanian Madya',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengkaji kebijakan dan mengembangkan pelayanan dibidang analisis pasar basil pertanian. ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Pasar Hasil Pertanian Madya
2. Data, Bahan dan Informasi terkait Analis Pasar Hasil Pertanian Madya
3. Produk hukum terkait jabatan Analis Pasar Hasil Pertanian Madya
4. Dokumen Analis Pasar Hasil Pertanian Madya
5. Dokumentasi kegiatan Analis Pasar Hasil Pertanian Madya
6. Hasil Kajian Analis Pasar Hasil Pertanian Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Pasar Hasil Pertanian Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Pasar Hasil Pertanian Madya
9. Laporan pelaksanaan kegiatan Analis Pasar Hasil Pertanian Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya analisis pasar hasil pertanian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan analisis pasar hasil pertanian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3426',
            'nama_jabatan' => 'Apoteker Pertama',
            'nama_unit' => 'Apoteker Pertama',
            'ikhtisar' => 'Melaksanakan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, pengelolaan perbekalan farmasi, pelayanan farmasi klinik dan pelayanan farmasi khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Apoteker Pertama
2. Data, Bahan dan Informasi terkait Apoteker Pertama
3. Produk hukum terkait jabatan Apoteker Pertama
4. Dokumen Apoteker Pertama
5. Dokumentasi kegiatan Apoteker Pertama
6. Hasil Kajian Apoteker Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Apoteker Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Apoteker Pertama
9. Laporan pelaksanaan kegiatan Apoteker Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3427',
            'nama_jabatan' => 'Apoteker Muda',
            'nama_unit' => 'Apoteker Muda',
            'ikhtisar' => 'Melaksanakan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, pengelolaan perbekalan farmasi, pelayanan farmasi klinik dan pelayanan farmasi khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Apoteker Muda
2. Data, Bahan dan Informasi terkait Apoteker Muda
3. Produk hukum terkait jabatan Apoteker Muda
4. Dokumen Apoteker Muda
5. Dokumentasi kegiatan Apoteker Muda
6. Hasil Kajian Apoteker Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Apoteker Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Apoteker Muda
9. Laporan pelaksanaan kegiatan Apoteker Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3428',
            'nama_jabatan' => 'Apoteker Madya',
            'nama_unit' => 'Apoteker Madya',
            'ikhtisar' => 'Melaksanakan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, pengelolaan perbekalan farmasi, pelayanan farmasi klinik dan pelayanan farmasi khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Apoteker Madya
2. Data, Bahan dan Informasi terkait Apoteker Madya
3. Produk hukum terkait jabatan Apoteker Madya
4. Dokumen Apoteker Madya
5. Dokumentasi kegiatan Apoteker Madya
6. Hasil Kajian Apoteker Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Apoteker Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Apoteker Madya
9. Laporan pelaksanaan kegiatan Apoteker Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3429',
            'nama_jabatan' => 'Apoteker Utama',
            'nama_unit' => 'Apoteker Utama',
            'ikhtisar' => 'Melaksanakan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, pengelolaan perbekalan farmasi, pelayanan farmasi klinik dan pelayanan farmasi khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Apoteker Utama
2. Data, Bahan dan Informasi terkait Apoteker Utama
3. Produk hukum terkait jabatan Apoteker Utama
4. Dokumen Apoteker Utama
5. Dokumentasi kegiatan Apoteker Utama
6. Hasil Kajian Apoteker Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Apoteker Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Apoteker Utama
9. Laporan pelaksanaan kegiatan Apoteker Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3430',
            'nama_jabatan' => 'Arsiparis Terampil',
            'nama_unit' => 'Arsiparis Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Terampil
2. Data, Bahan dan Informasi terkait Arsiparis Terampil
3. Produk hukum terkait jabatan Arsiparis Terampil
4. Dokumen Arsiparis Terampil
5. Dokumentasi kegiatan Arsiparis Terampil
6. Hasil Kajian Arsiparis Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Terampil
9. Laporan pelaksanaan kegiatan Arsiparis Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3431',
            'nama_jabatan' => 'Arsiparis Mahir',
            'nama_unit' => 'Arsiparis Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Mahir
2. Data, Bahan dan Informasi terkait Arsiparis Mahir
3. Produk hukum terkait jabatan Arsiparis Mahir
4. Dokumen Arsiparis Mahir
5. Dokumentasi kegiatan Arsiparis Mahir
6. Hasil Kajian Arsiparis Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Mahir
9. Laporan pelaksanaan kegiatan Arsiparis Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3432',
            'nama_jabatan' => 'Arsiparis Penyelia',
            'nama_unit' => 'Arsiparis Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Penyelia
2. Data, Bahan dan Informasi terkait Arsiparis Penyelia
3. Produk hukum terkait jabatan Arsiparis Penyelia
4. Dokumen Arsiparis Penyelia
5. Dokumentasi kegiatan Arsiparis Penyelia
6. Hasil Kajian Arsiparis Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Penyelia
9. Laporan pelaksanaan kegiatan Arsiparis Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3433',
            'nama_jabatan' => 'Arsiparis Pertama',
            'nama_unit' => 'Arsiparis Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Pertama
2. Data, Bahan dan Informasi terkait Arsiparis Pertama
3. Produk hukum terkait jabatan Arsiparis Pertama
4. Dokumen Arsiparis Pertama
5. Dokumentasi kegiatan Arsiparis Pertama
6. Hasil Kajian Arsiparis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Pertama
9. Laporan pelaksanaan kegiatan Arsiparis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3434',
            'nama_jabatan' => 'Arsiparis Muda',
            'nama_unit' => 'Arsiparis Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Muda
2. Data, Bahan dan Informasi terkait Arsiparis Muda
3. Produk hukum terkait jabatan Arsiparis Muda
4. Dokumen Arsiparis Muda
5. Dokumentasi kegiatan Arsiparis Muda
6. Hasil Kajian Arsiparis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Muda
9. Laporan pelaksanaan kegiatan Arsiparis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3435',
            'nama_jabatan' => 'Arsiparis Madya',
            'nama_unit' => 'Arsiparis Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Madya
2. Data, Bahan dan Informasi terkait Arsiparis Madya
3. Produk hukum terkait jabatan Arsiparis Madya
4. Dokumen Arsiparis Madya
5. Dokumentasi kegiatan Arsiparis Madya
6. Hasil Kajian Arsiparis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Madya
9. Laporan pelaksanaan kegiatan Arsiparis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3436',
            'nama_jabatan' => 'Arsiparis Utama',
            'nama_unit' => 'Arsiparis Utama',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan arsip dinamis, pengelolaan arsipstatis, pembinaan kearsipan dan pengolahan dan penyajian arsip menjadi informasi ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kearsipan atau bidang Ilmu lain yg ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Arsiparis Utama
2. Data, Bahan dan Informasi terkait Arsiparis Utama
3. Produk hukum terkait jabatan Arsiparis Utama
4. Dokumen Arsiparis Utama
5. Dokumentasi kegiatan Arsiparis Utama
6. Hasil Kajian Arsiparis Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Arsiparis Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Arsiparis Utama
9. Laporan pelaksanaan kegiatan Arsiparis Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan surat/dokumen/arsip
b. Kelengkapan peralatan kerja
c. Kerapihan kearsipan
d. Kelancaran proses pelaksanaan tugas pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan surat atau dokumen masuk untuk pimpinan
b. Menggunakan peralatan kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3437',
            'nama_jabatan' => 'Asesor SDM Aparatur Pertama',
            'nama_unit' => 'Asesor SDM Aparatur Pertama',
            'ikhtisar' => 'Melakukan kegiatan asesmen kompetensi/potensi sebagai dasar dalam praktik pengelolaan/manajemen sumber daya manusia aparatur',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Administrasi Negara/Publik, Pemerintahan, Kebijakan Publik, Manajemen/Pengembangan Sumber Daya Manusia, atau Psikologi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asesor SDM Aparatur Pertama
2. Data, Bahan dan Informasi terkait Asesor SDM Aparatur Pertama
3. Produk hukum terkait jabatan Asesor SDM Aparatur Pertama
4. Dokumen Asesor SDM Aparatur Pertama
5. Dokumentasi kegiatan Asesor SDM Aparatur Pertama
6. Hasil Kajian Asesor SDM Aparatur Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Asesor SDM Aparatur Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asesor SDM Aparatur Pertama
9. Laporan pelaksanaan kegiatan Asesor SDM Aparatur Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melakukan kegiatan penilaian kompetensi manajerial sesuai dengan prosedur',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penilaian kompetensi manajerial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3438',
            'nama_jabatan' => 'Asesor SDM Aparatur Muda',
            'nama_unit' => 'Asesor SDM Aparatur Muda',
            'ikhtisar' => 'Melakukan kegiatan asesmen kompetensi/potensi sebagai dasar dalam praktik pengelolaan/manajemen sumber daya manusia aparatur',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Administrasi Negara/Publik, Pemerintahan, Kebijakan Publik, Manajemen/Pengembangan Sumber Daya Manusia, atau Psikologi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asesor SDM Aparatur Muda
2. Data, Bahan dan Informasi terkait Asesor SDM Aparatur Muda
3. Produk hukum terkait jabatan Asesor SDM Aparatur Muda
4. Dokumen Asesor SDM Aparatur Muda
5. Dokumentasi kegiatan Asesor SDM Aparatur Muda
6. Hasil Kajian Asesor SDM Aparatur Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Asesor SDM Aparatur Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asesor SDM Aparatur Muda
9. Laporan pelaksanaan kegiatan Asesor SDM Aparatur Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melakukan kegiatan penilaian kompetensi manajerial sesuai dengan prosedur',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penilaian kompetensi manajerial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3439',
            'nama_jabatan' => 'Asesor SDM Aparatur Madya',
            'nama_unit' => 'Asesor SDM Aparatur Madya',
            'ikhtisar' => 'Melakukan kegiatan asesmen kompetensi/potensi sebagai dasar dalam praktik pengelolaan/manajemen sumber daya manusia aparatur',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Administrasi Negara/Publik, Pemerintahan, Kebijakan Publik, Manajemen/Pengembangan Sumber Daya Manusia, atau Psikologi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asesor SDM Aparatur Madya
2. Data, Bahan dan Informasi terkait Asesor SDM Aparatur Madya
3. Produk hukum terkait jabatan Asesor SDM Aparatur Madya
4. Dokumen Asesor SDM Aparatur Madya
5. Dokumentasi kegiatan Asesor SDM Aparatur Madya
6. Hasil Kajian Asesor SDM Aparatur Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Asesor SDM Aparatur Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asesor SDM Aparatur Madya
9. Laporan pelaksanaan kegiatan Asesor SDM Aparatur Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melakukan kegiatan penilaian kompetensi manajerial sesuai dengan prosedur',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penilaian kompetensi manajerial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3440',
            'nama_jabatan' => 'Asesor SDM Aparatur Utama',
            'nama_unit' => 'Asesor SDM Aparatur Utama',
            'ikhtisar' => 'Melakukan kegiatan asesmen kompetensi/potensi sebagai dasar dalam praktik pengelolaan/manajemen sumber daya manusia aparatur',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Administrasi Negara/Publik, Pemerintahan, Kebijakan Publik, Manajemen/Pengembangan Sumber Daya Manusia, atau Psikologi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asesor SDM Aparatur Utama
2. Data, Bahan dan Informasi terkait Asesor SDM Aparatur Utama
3. Produk hukum terkait jabatan Asesor SDM Aparatur Utama
4. Dokumen Asesor SDM Aparatur Utama
5. Dokumentasi kegiatan Asesor SDM Aparatur Utama
6. Hasil Kajian Asesor SDM Aparatur Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Asesor SDM Aparatur Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asesor SDM Aparatur Utama
9. Laporan pelaksanaan kegiatan Asesor SDM Aparatur Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melakukan kegiatan penilaian kompetensi manajerial sesuai dengan prosedur',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan penilaian kompetensi manajerial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3441',
            'nama_jabatan' => 'Asisten Apoteker Pemula',
            'nama_unit' => 'Asisten Apoteker Pemula',
            'ikhtisar' => 'Melaksanakan penyiapan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, penyiapan pengelolaan perbekalan farmasi dan penyiapan pelayanan farmasi klinik',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Berijazah Asisten Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Apoteker Pemula
2. Data, Bahan dan Informasi terkait Asisten Apoteker Pemula
3. Produk hukum terkait jabatan Asisten Apoteker Pemula
4. Dokumen Asisten Apoteker Pemula
5. Dokumentasi kegiatan Asisten Apoteker Pemula
6. Hasil Kajian Asisten Apoteker Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Apoteker Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Apoteker Pemula
9. Laporan pelaksanaan kegiatan Asisten Apoteker Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan kepada pihak terkait',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3442',
            'nama_jabatan' => 'Asisten Apoteker Terampil',
            'nama_unit' => 'Asisten Apoteker Terampil',
            'ikhtisar' => 'Melaksanakan penyiapan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, penyiapan pengelolaan perbekalan farmasi dan penyiapan pelayanan farmasi klinik',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Berijazah Asisten Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Apoteker Terampil
2. Data, Bahan dan Informasi terkait Asisten Apoteker Terampil
3. Produk hukum terkait jabatan Asisten Apoteker Terampil
4. Dokumen Asisten Apoteker Terampil
5. Dokumentasi kegiatan Asisten Apoteker Terampil
6. Hasil Kajian Asisten Apoteker Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Apoteker Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Apoteker Terampil
9. Laporan pelaksanaan kegiatan Asisten Apoteker Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan kepada pihak terkait',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3443',
            'nama_jabatan' => 'Asisten Apoteker Mahir',
            'nama_unit' => 'Asisten Apoteker Mahir',
            'ikhtisar' => 'Melaksanakan penyiapan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, penyiapan pengelolaan perbekalan farmasi dan penyiapan pelayanan farmasi klinik',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Berijazah Asisten Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Apoteker Mahir
2. Data, Bahan dan Informasi terkait Asisten Apoteker Mahir
3. Produk hukum terkait jabatan Asisten Apoteker Mahir
4. Dokumen Asisten Apoteker Mahir
5. Dokumentasi kegiatan Asisten Apoteker Mahir
6. Hasil Kajian Asisten Apoteker Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Apoteker Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Apoteker Mahir
9. Laporan pelaksanaan kegiatan Asisten Apoteker Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan kepada pihak terkait',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3444',
            'nama_jabatan' => 'Asisten Apoteker Penyelia',
            'nama_unit' => 'Asisten Apoteker Penyelia',
            'ikhtisar' => 'Melaksanakan penyiapan pekerjaan kefarmasian yang meliputi penyiapan rencana kerja kefarmasian, penyiapan pengelolaan perbekalan farmasi dan penyiapan pelayanan farmasi klinik',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'Berijazah Asisten Apoteker',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Apoteker Penyelia
2. Data, Bahan dan Informasi terkait Asisten Apoteker Penyelia
3. Produk hukum terkait jabatan Asisten Apoteker Penyelia
4. Dokumen Asisten Apoteker Penyelia
5. Dokumentasi kegiatan Asisten Apoteker Penyelia
6. Hasil Kajian Asisten Apoteker Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Apoteker Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Apoteker Penyelia
9. Laporan pelaksanaan kegiatan Asisten Apoteker Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan kepada pihak terkait',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3445',
            'nama_jabatan' => 'Auditor Terampil',
            'nama_unit' => 'Auditor Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian dan evaluasi pengawasan',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Terampil
2. Data, Bahan dan Informasi terkait Auditor Terampil
3. Produk hukum terkait jabatan Auditor Terampil
4. Dokumen Auditor Terampil
5. Dokumentasi kegiatan Auditor Terampil
6. Hasil Kajian Auditor Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Terampil
9. Laporan pelaksanaan kegiatan Auditor Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3446',
            'nama_jabatan' => 'Auditor Mahir',
            'nama_unit' => 'Auditor Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian, dan evaluasi pengawasan',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Mahir
2. Data, Bahan dan Informasi terkait Auditor Mahir
3. Produk hukum terkait jabatan Auditor Mahir
4. Dokumen Auditor Mahir
5. Dokumentasi kegiatan Auditor Mahir
6. Hasil Kajian Auditor Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Mahir
9. Laporan pelaksanaan kegiatan Auditor Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3447',
            'nama_jabatan' => 'Auditor Penyelia',
            'nama_unit' => 'Auditor Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian, dan evaluasi pengawasan',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Penyelia
2. Data, Bahan dan Informasi terkait Auditor Penyelia
3. Produk hukum terkait jabatan Auditor Penyelia
4. Dokumen Auditor Penyelia
5. Dokumentasi kegiatan Auditor Penyelia
6. Hasil Kajian Auditor Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Penyelia
9. Laporan pelaksanaan kegiatan Auditor Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3448',
            'nama_jabatan' => 'Auditor Pertama',
            'nama_unit' => 'Auditor Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian, dan evaluasi pengawasan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Pertama
2. Data, Bahan dan Informasi terkait Auditor Pertama
3. Produk hukum terkait jabatan Auditor Pertama
4. Dokumen Auditor Pertama
5. Dokumentasi kegiatan Auditor Pertama
6. Hasil Kajian Auditor Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Pertama
9. Laporan pelaksanaan kegiatan Auditor Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3449',
            'nama_jabatan' => 'Auditor Muda',
            'nama_unit' => 'Auditor Muda',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian, dan evaluasi pengawasan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Muda
2. Data, Bahan dan Informasi terkait Auditor Muda
3. Produk hukum terkait jabatan Auditor Muda
4. Dokumen Auditor Muda
5. Dokumentasi kegiatan Auditor Muda
6. Hasil Kajian Auditor Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Muda
9. Laporan pelaksanaan kegiatan Auditor Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3450',
            'nama_jabatan' => 'Auditor Madya',
            'nama_unit' => 'Auditor Madya',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian, dan evaluasi pengawasan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Madya
2. Data, Bahan dan Informasi terkait Auditor Madya
3. Produk hukum terkait jabatan Auditor Madya
4. Dokumen Auditor Madya
5. Dokumentasi kegiatan Auditor Madya
6. Hasil Kajian Auditor Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Madya
9. Laporan pelaksanaan kegiatan Auditor Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3451',
            'nama_jabatan' => 'Auditor Utama',
            'nama_unit' => 'Auditor Utama',
            'ikhtisar' => 'Melaksanakan kegiatan perencanaan, pengorganisasian, pelaksanaan teknis, pengendalian, dan evaluasi pengawasan',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Auditor Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Utama
2. Data, Bahan dan Informasi terkait Auditor Utama
3. Produk hukum terkait jabatan Auditor Utama
4. Dokumen Auditor Utama
5. Dokumentasi kegiatan Auditor Utama
6. Hasil Kajian Auditor Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Utama
9. Laporan pelaksanaan kegiatan Auditor Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen keuangan yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan hasil audit
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. memperoleh keterangan dan/atau dokumen yang wajib diberikan oleh unit yang diawasi dan pihak yang terkait;
2. melakukan pemeriksaan di tempat penyimpanan uang dan barang milik negara, di tempat pelaksanaan kegiatan, pembukuan dan tata usaha keuangan negara, serta pemeriksaan terhadap perhitunganperhitungan, surat-surat, bukti-bukti, rekening koran,
3. pertanggungjawaban, dan daftar lainnya yang terkait dengan penugasan;
4. menetapkan jenis dokumen, data, serta informasi yang diperlukan dalam penugasan pengawasan;
5. memeriksa secara fisik setiap aset yang berada dalam pengurusan pejabat instansi yang diawasi; dan
6. menggunakan tenaga ahli di luar tenaga Auditor, jika diperlukan.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3452',
            'nama_jabatan' => 'Auditor Kepegawaian Pertama',
            'nama_unit' => 'Auditor Kepegawaian Pertama',
            'ikhtisar' => 'Melaksanakan wasdalpeg',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Manajemen, Hukum, Administrasi dan Sosial Politik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Kepegawaian Pertama
2. Data, Bahan dan Informasi terkait Auditor Kepegawaian Pertama
3. Produk hukum terkait jabatan Auditor Kepegawaian Pertama
4. Dokumen Auditor Kepegawaian Pertama
5. Dokumentasi kegiatan Auditor Kepegawaian Pertama
6. Hasil Kajian Auditor Kepegawaian Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Kepegawaian Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Kepegawaian Pertama
9. Laporan pelaksanaan kegiatan Auditor Kepegawaian Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan audit kepegawaian secara obyektif dan sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. meminta keterangan atau dokumen/bahan/data serta informasi dari pejabat yang berwenang;
b. menetapkan jenis keterangan atau dokumen/bahan/data serta informasi yang diperlukan dalam wasdalpeg;
c. mengamankan dokumen/bahan/data yang terkait dengan obyek wasdalpeg;
d. memeriksa dan meneliti secara fisik setiap keterangan atau dokumen/bahan/data yang berada dalam pengadministrasian kepegawaian; dan
e. melaksanakan kewenangan lain yang diberikan oleh pejabat yang berwenang dalam lingkup wasdalpeg.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3453',
            'nama_jabatan' => 'Auditor Kepegawaian Muda',
            'nama_unit' => 'Auditor Kepegawaian Muda',
            'ikhtisar' => 'Melaksanakan wasdalpeg',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Manajemen, Hukum, Administrasi dan Sosial Politik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Kepegawaian Muda
2. Data, Bahan dan Informasi terkait Auditor Kepegawaian Muda
3. Produk hukum terkait jabatan Auditor Kepegawaian Muda
4. Dokumen Auditor Kepegawaian Muda
5. Dokumentasi kegiatan Auditor Kepegawaian Muda
6. Hasil Kajian Auditor Kepegawaian Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Kepegawaian Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Kepegawaian Muda
9. Laporan pelaksanaan kegiatan Auditor Kepegawaian Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan audit kepegawaian secara obyektif dan sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. meminta keterangan atau dokumen/bahan/data serta informasi dari pejabat yang berwenang;
b. menetapkan jenis keterangan atau dokumen/bahan/data serta informasi yang diperlukan dalam wasdalpeg;
c. mengamankan dokumen/bahan/data yang terkait dengan obyek wasdalpeg;
d. memeriksa dan meneliti secara fisik setiap keterangan atau dokumen/bahan/data yang berada dalam pengadministrasian kepegawaian; dan
e. melaksanakan kewenangan lain yang diberikan oleh pejabat yang berwenang dalam lingkup wasdalpeg.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3454',
            'nama_jabatan' => 'Auditor Kepegawaian Madya',
            'nama_unit' => 'Auditor Kepegawaian Madya',
            'ikhtisar' => 'Melaksanakan wasdalpeg',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Manajemen, Hukum, Administrasi dan Sosial Politik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Auditor Kepegawaian Madya
2. Data, Bahan dan Informasi terkait Auditor Kepegawaian Madya
3. Produk hukum terkait jabatan Auditor Kepegawaian Madya
4. Dokumen Auditor Kepegawaian Madya
5. Dokumentasi kegiatan Auditor Kepegawaian Madya
6. Hasil Kajian Auditor Kepegawaian Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Auditor Kepegawaian Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Auditor Kepegawaian Madya
9. Laporan pelaksanaan kegiatan Auditor Kepegawaian Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan audit kepegawaian secara obyektif dan sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. meminta keterangan atau dokumen/bahan/data serta informasi dari pejabat yang berwenang;
b. menetapkan jenis keterangan atau dokumen/bahan/data serta informasi yang diperlukan dalam wasdalpeg;
c. mengamankan dokumen/bahan/data yang terkait dengan obyek wasdalpeg;
d. memeriksa dan meneliti secara fisik setiap keterangan atau dokumen/bahan/data yang berada dalam pengadministrasian kepegawaian; dan
e. melaksanakan kewenangan lain yang diberikan oleh pejabat yang berwenang dalam lingkup wasdalpeg.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3455',
            'nama_jabatan' => 'Bidan Terampil',
            'nama_unit' => 'Bidan Terampil',
            'ikhtisar' => 'Melakukan kegiatan kebidanan yang meliputi persiapan, pelaksanaan, dan pengelolaan pelayanan kebidanan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Diploma III di Bidang Kebidanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Bidan Terampil
2. Data, Bahan dan Informasi terkait Bidan Terampil
3. Produk hukum terkait jabatan Bidan Terampil
4. Dokumen Bidan Terampil
5. Dokumentasi kegiatan Bidan Terampil
6. Hasil Kajian Bidan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Bidan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Bidan Terampil
9. Laporan pelaksanaan kegiatan Bidan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3456',
            'nama_jabatan' => 'Bidan Mahir',
            'nama_unit' => 'Bidan Mahir',
            'ikhtisar' => 'Melakukan kegiatan kebidanan yang meliputi persiapan, pelaksanaan, dan pengelolaan pelayanan kebidanan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Diploma III di Bidang Kebidanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Bidan Mahir
2. Data, Bahan dan Informasi terkait Bidan Mahir
3. Produk hukum terkait jabatan Bidan Mahir
4. Dokumen Bidan Mahir
5. Dokumentasi kegiatan Bidan Mahir
6. Hasil Kajian Bidan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Bidan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Bidan Mahir
9. Laporan pelaksanaan kegiatan Bidan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3457',
            'nama_jabatan' => 'Bidan Penyelia',
            'nama_unit' => 'Bidan Penyelia',
            'ikhtisar' => 'Melakukan kegiatan kebidanan yang meliputi persiapan, pelaksanaan, dan pengelolaan pelayanan kebidanan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Diploma III di Bidang Kebidanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Bidan Penyelia
2. Data, Bahan dan Informasi terkait Bidan Penyelia
3. Produk hukum terkait jabatan Bidan Penyelia
4. Dokumen Bidan Penyelia
5. Dokumentasi kegiatan Bidan Penyelia
6. Hasil Kajian Bidan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Bidan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Bidan Penyelia
9. Laporan pelaksanaan kegiatan Bidan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3458',
            'nama_jabatan' => 'Bidan Pertama',
            'nama_unit' => 'Bidan Pertama',
            'ikhtisar' => 'Melakukan kegiatan kebidanan yang meliputi persiapan, pelaksanaan, dan pengelolaan pelayanan kebidanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Pendidikan Profesi Bidan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Bidan Pertama
2. Data, Bahan dan Informasi terkait Bidan Pertama
3. Produk hukum terkait jabatan Bidan Pertama
4. Dokumen Bidan Pertama
5. Dokumentasi kegiatan Bidan Pertama
6. Hasil Kajian Bidan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Bidan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Bidan Pertama
9. Laporan pelaksanaan kegiatan Bidan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3459',
            'nama_jabatan' => 'Bidan Muda',
            'nama_unit' => 'Bidan Muda',
            'ikhtisar' => 'Melakukan kegiatan kebidanan yang meliputi persiapan, pelaksanaan, dan pengelolaan pelayanan kebidanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Pendidikan Profesi Bidan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Bidan Muda
2. Data, Bahan dan Informasi terkait Bidan Muda
3. Produk hukum terkait jabatan Bidan Muda
4. Dokumen Bidan Muda
5. Dokumentasi kegiatan Bidan Muda
6. Hasil Kajian Bidan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Bidan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Bidan Muda
9. Laporan pelaksanaan kegiatan Bidan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3460',
            'nama_jabatan' => 'Bidan Madya',
            'nama_unit' => 'Bidan Madya',
            'ikhtisar' => 'Melakukan kegiatan kebidanan yang meliputi persiapan, pelaksanaan, dan pengelolaan pelayanan kebidanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Pendidikan Profesi Bidan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Bidan Madya
2. Data, Bahan dan Informasi terkait Bidan Madya
3. Produk hukum terkait jabatan Bidan Madya
4. Dokumen Bidan Madya
5. Dokumentasi kegiatan Bidan Madya
6. Hasil Kajian Bidan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Bidan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Bidan Madya
9. Laporan pelaksanaan kegiatan Bidan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3461',
            'nama_jabatan' => 'Dokter Pertama',
            'nama_unit' => 'Dokter Pertama',
            'ikhtisar' => 'Memberikan pelayanan kesehatan pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan kepada masyarakat',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Pertama
2. Data, Bahan dan Informasi terkait Dokter Pertama
3. Produk hukum terkait jabatan Dokter Pertama
4. Dokumen Dokter Pertama
5. Dokumentasi kegiatan Dokter Pertama
6. Hasil Kajian Dokter Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Pertama
9. Laporan pelaksanaan kegiatan Dokter Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3462',
            'nama_jabatan' => 'Dokter Muda',
            'nama_unit' => 'Dokter Muda',
            'ikhtisar' => 'Memberikan pelayanan kesehatan pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan kepada masyarakat',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Muda
2. Data, Bahan dan Informasi terkait Dokter Muda
3. Produk hukum terkait jabatan Dokter Muda
4. Dokumen Dokter Muda
5. Dokumentasi kegiatan Dokter Muda
6. Hasil Kajian Dokter Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Muda
9. Laporan pelaksanaan kegiatan Dokter Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3463',
            'nama_jabatan' => 'Dokter Madya',
            'nama_unit' => 'Dokter Madya',
            'ikhtisar' => 'Memberikan pelayanan kesehatan pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan kepada masyarakat',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Madya
2. Data, Bahan dan Informasi terkait Dokter Madya
3. Produk hukum terkait jabatan Dokter Madya
4. Dokumen Dokter Madya
5. Dokumentasi kegiatan Dokter Madya
6. Hasil Kajian Dokter Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Madya
9. Laporan pelaksanaan kegiatan Dokter Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3464',
            'nama_jabatan' => 'Dokter Utama',
            'nama_unit' => 'Dokter Utama',
            'ikhtisar' => 'Memberikan pelayanan kesehatan pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan kepada masyarakat',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Utama
2. Data, Bahan dan Informasi terkait Dokter Utama
3. Produk hukum terkait jabatan Dokter Utama
4. Dokumen Dokter Utama
5. Dokumentasi kegiatan Dokter Utama
6. Hasil Kajian Dokter Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Utama
9. Laporan pelaksanaan kegiatan Dokter Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3465',
            'nama_jabatan' => 'Dokter Gigi Pertama',
            'nama_unit' => 'Dokter Gigi Pertama',
            'ikhtisar' => 'Memberikan pelayanan kesehatan gigi dan mulut pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan gigi dan mulut kepada masyarakat.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter Gigi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Gigi Pertama
2. Data, Bahan dan Informasi terkait Dokter Gigi Pertama
3. Produk hukum terkait jabatan Dokter Gigi Pertama
4. Dokumen Dokter Gigi Pertama
5. Dokumentasi kegiatan Dokter Gigi Pertama
6. Hasil Kajian Dokter Gigi Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Gigi Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Gigi Pertama
9. Laporan pelaksanaan kegiatan Dokter Gigi Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3466',
            'nama_jabatan' => 'Dokter Gigi Muda',
            'nama_unit' => 'Dokter Gigi Muda',
            'ikhtisar' => 'Memberikan pelayanan kesehatan gigi dan mulut pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan gigi dan mulut kepada masyarakat.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter Gigi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Gigi Muda
2. Data, Bahan dan Informasi terkait Dokter Gigi Muda
3. Produk hukum terkait jabatan Dokter Gigi Muda
4. Dokumen Dokter Gigi Muda
5. Dokumentasi kegiatan Dokter Gigi Muda
6. Hasil Kajian Dokter Gigi Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Gigi Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Gigi Muda
9. Laporan pelaksanaan kegiatan Dokter Gigi Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3467',
            'nama_jabatan' => 'Dokter Gigi Madya',
            'nama_unit' => 'Dokter Gigi Madya',
            'ikhtisar' => 'Memberikan pelayanan kesehatan gigi dan mulut pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan gigi dan mulut kepada masyarakat.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter Gigi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Gigi Madya
2. Data, Bahan dan Informasi terkait Dokter Gigi Madya
3. Produk hukum terkait jabatan Dokter Gigi Madya
4. Dokumen Dokter Gigi Madya
5. Dokumentasi kegiatan Dokter Gigi Madya
6. Hasil Kajian Dokter Gigi Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Gigi Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Gigi Madya
9. Laporan pelaksanaan kegiatan Dokter Gigi Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3468',
            'nama_jabatan' => 'Dokter Gigi Utama',
            'nama_unit' => 'Dokter Gigi Utama',
            'ikhtisar' => 'Memberikan pelayanan kesehatan gigi dan mulut pada sarana pelayanan kesehatan yang meliputi promotif, preventif, kuratif dan rehabilitatif untuk meningkatkan derajat kesehatan masyarakat, serta membina peran serta masyarakat dalam rangka kemandirian di bidang kesehatan gigi dan mulut kepada masyarakat.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah Dokter Gigi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Gigi Utama
2. Data, Bahan dan Informasi terkait Dokter Gigi Utama
3. Produk hukum terkait jabatan Dokter Gigi Utama
4. Dokumen Dokter Gigi Utama
5. Dokumentasi kegiatan Dokter Gigi Utama
6. Hasil Kajian Dokter Gigi Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Gigi Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Gigi Utama
9. Laporan pelaksanaan kegiatan Dokter Gigi Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3469',
            'nama_jabatan' => 'Dokter Pendidik Klinis Pertama',
            'nama_unit' => 'Dokter Pendidik Klinis Pertama',
            'ikhtisar' => 'Melaksanakan pelayanan spesialistik, pengabdian masyarakat, pelayanan pendidikan dokter dan dokter spesialis, serta melakukan penelitian guna pengembangan ilmu kedokteran di Rumah Sakit Pendidikan',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah paling rendah Dokter Spesialis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Pendidik Klinis Pertama
2. Data, Bahan dan Informasi terkait Dokter Pendidik Klinis Pertama
3. Produk hukum terkait jabatan Dokter Pendidik Klinis Pertama
4. Dokumen Dokter Pendidik Klinis Pertama
5. Dokumentasi kegiatan Dokter Pendidik Klinis Pertama
6. Hasil Kajian Dokter Pendidik Klinis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Pendidik Klinis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Pendidik Klinis Pertama
9. Laporan pelaksanaan kegiatan Dokter Pendidik Klinis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Menggunakan metode yang sesuai untuk melakukan pembimbingan terhadap peserta pendidikan dokter',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3470',
            'nama_jabatan' => 'Dokter Pendidik Klinis Muda',
            'nama_unit' => 'Dokter Pendidik Klinis Muda',
            'ikhtisar' => 'Melaksanakan pelayanan spesialistik, pengabdian masyarakat, pelayanan pendidikan dokter dan dokter spesialis, serta melakukan penelitian guna pengembangan ilmu kedokteran di Rumah Sakit Pendidikan',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah paling rendah Dokter Spesialis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Pendidik Klinis Muda
2. Data, Bahan dan Informasi terkait Dokter Pendidik Klinis Muda
3. Produk hukum terkait jabatan Dokter Pendidik Klinis Muda
4. Dokumen Dokter Pendidik Klinis Muda
5. Dokumentasi kegiatan Dokter Pendidik Klinis Muda
6. Hasil Kajian Dokter Pendidik Klinis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Pendidik Klinis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Pendidik Klinis Muda
9. Laporan pelaksanaan kegiatan Dokter Pendidik Klinis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Menggunakan metode yang sesuai untuk melakukan pembimbingan terhadap peserta pendidikan dokter',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3471',
            'nama_jabatan' => 'Dokter Pendidik Klinis Madya',
            'nama_unit' => 'Dokter Pendidik Klinis Madya',
            'ikhtisar' => 'Melaksanakan pelayanan spesialistik, pengabdian masyarakat, pelayanan pendidikan dokter dan dokter spesialis, serta melakukan penelitian guna pengembangan ilmu kedokteran di Rumah Sakit Pendidikan',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah paling rendah Dokter Spesialis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Pendidik Klinis Madya
2. Data, Bahan dan Informasi terkait Dokter Pendidik Klinis Madya
3. Produk hukum terkait jabatan Dokter Pendidik Klinis Madya
4. Dokumen Dokter Pendidik Klinis Madya
5. Dokumentasi kegiatan Dokter Pendidik Klinis Madya
6. Hasil Kajian Dokter Pendidik Klinis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Pendidik Klinis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Pendidik Klinis Madya
9. Laporan pelaksanaan kegiatan Dokter Pendidik Klinis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Menggunakan metode yang sesuai untuk melakukan pembimbingan terhadap peserta pendidikan dokter',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3472',
            'nama_jabatan' => 'Dokter Pendidik Klinis Utama',
            'nama_unit' => 'Dokter Pendidik Klinis Utama',
            'ikhtisar' => 'Melaksanakan pelayanan spesialistik, pengabdian masyarakat, pelayanan pendidikan dokter dan dokter spesialis, serta melakukan penelitian guna pengembangan ilmu kedokteran di Rumah Sakit Pendidikan',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Berijazah paling rendah Dokter Spesialis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Dokter Pendidik Klinis Utama
2. Data, Bahan dan Informasi terkait Dokter Pendidik Klinis Utama
3. Produk hukum terkait jabatan Dokter Pendidik Klinis Utama
4. Dokumen Dokter Pendidik Klinis Utama
5. Dokumentasi kegiatan Dokter Pendidik Klinis Utama
6. Hasil Kajian Dokter Pendidik Klinis Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Dokter Pendidik Klinis Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Dokter Pendidik Klinis Utama
9. Laporan pelaksanaan kegiatan Dokter Pendidik Klinis Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kerahasiaan hasil kerja
e. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia
c. Menggunakan metode yang sesuai untuk melakukan pembimbingan terhadap peserta pendidikan dokter',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3473',
            'nama_jabatan' => 'Epidemiolog Kesehatan Pemula',
            'nama_unit' => 'Epidemiolog Kesehatan Pemula',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Pemula
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Pemula
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Pemula
4. Dokumen Epidemiolog Kesehatan Pemula
5. Dokumentasi kegiatan Epidemiolog Kesehatan Pemula
6. Hasil Kajian Epidemiolog Kesehatan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Pemula
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3474',
            'nama_jabatan' => 'Epidemiolog Kesehatan Terampil',
            'nama_unit' => 'Epidemiolog Kesehatan Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Terampil
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Terampil
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Terampil
4. Dokumen Epidemiolog Kesehatan Terampil
5. Dokumentasi kegiatan Epidemiolog Kesehatan Terampil
6. Hasil Kajian Epidemiolog Kesehatan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Terampil
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3475',
            'nama_jabatan' => 'Epidemiolog Kesehatan Mahir',
            'nama_unit' => 'Epidemiolog Kesehatan Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Mahir
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Mahir
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Mahir
4. Dokumen Epidemiolog Kesehatan Mahir
5. Dokumentasi kegiatan Epidemiolog Kesehatan Mahir
6. Hasil Kajian Epidemiolog Kesehatan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Mahir
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3476',
            'nama_jabatan' => 'Epidemiolog Kesehatan Penyelia',
            'nama_unit' => 'Epidemiolog Kesehatan Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Penyelia
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Penyelia
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Penyelia
4. Dokumen Epidemiolog Kesehatan Penyelia
5. Dokumentasi kegiatan Epidemiolog Kesehatan Penyelia
6. Hasil Kajian Epidemiolog Kesehatan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Penyelia
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3477',
            'nama_jabatan' => 'Epidemiolog Kesehatan Pertama',
            'nama_unit' => 'Epidemiolog Kesehatan Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Pertama
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Pertama
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Pertama
4. Dokumen Epidemiolog Kesehatan Pertama
5. Dokumentasi kegiatan Epidemiolog Kesehatan Pertama
6. Hasil Kajian Epidemiolog Kesehatan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Pertama
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3478',
            'nama_jabatan' => 'Epidemiolog Kesehatan Muda',
            'nama_unit' => 'Epidemiolog Kesehatan Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Muda
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Muda
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Muda
4. Dokumen Epidemiolog Kesehatan Muda
5. Dokumentasi kegiatan Epidemiolog Kesehatan Muda
6. Hasil Kajian Epidemiolog Kesehatan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Muda
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3479',
            'nama_jabatan' => 'Epidemiolog Kesehatan Madya',
            'nama_unit' => 'Epidemiolog Kesehatan Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pengamatan, penyelidikan, tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh, secara cepat dan tepat dengan melakukan pengumpulan, pengolahan, analisa data dan interprestasi, melakukan penyelidikan epidemiologi utk tindakan pengamanan penanggulangan penyebaran/penularan penyakit dan faktor-faktor yang sangat berpengaruh.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Epidemiolog Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Epidemiolog Kesehatan Madya
2. Data, Bahan dan Informasi terkait Epidemiolog Kesehatan Madya
3. Produk hukum terkait jabatan Epidemiolog Kesehatan Madya
4. Dokumen Epidemiolog Kesehatan Madya
5. Dokumentasi kegiatan Epidemiolog Kesehatan Madya
6. Hasil Kajian Epidemiolog Kesehatan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Epidemiolog Kesehatan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Epidemiolog Kesehatan Madya
9. Laporan pelaksanaan kegiatan Epidemiolog Kesehatan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3480',
            'nama_jabatan' => 'Entomolog Kesehatan Pemula',
            'nama_unit' => 'Entomolog Kesehatan Pemula',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Bidang Entomolog Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Pemula
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Pemula
3. Produk hukum terkait jabatan Entomolog Kesehatan Pemula
4. Dokumen Entomolog Kesehatan Pemula
5. Dokumentasi kegiatan Entomolog Kesehatan Pemula
6. Hasil Kajian Entomolog Kesehatan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Pemula
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3481',
            'nama_jabatan' => 'Entomolog Kesehatan Terampil',
            'nama_unit' => 'Entomolog Kesehatan Terampil',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Bidang Entomolog Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Terampil
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Terampil
3. Produk hukum terkait jabatan Entomolog Kesehatan Terampil
4. Dokumen Entomolog Kesehatan Terampil
5. Dokumentasi kegiatan Entomolog Kesehatan Terampil
6. Hasil Kajian Entomolog Kesehatan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Terampil
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3482',
            'nama_jabatan' => 'Entomolog Kesehatan Mahir',
            'nama_unit' => 'Entomolog Kesehatan Mahir',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Bidang Entomolog Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Mahir
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Mahir
3. Produk hukum terkait jabatan Entomolog Kesehatan Mahir
4. Dokumen Entomolog Kesehatan Mahir
5. Dokumentasi kegiatan Entomolog Kesehatan Mahir
6. Hasil Kajian Entomolog Kesehatan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Mahir
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3483',
            'nama_jabatan' => 'Entomolog Kesehatan Penyelia',
            'nama_unit' => 'Entomolog Kesehatan Penyelia',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Bidang Entomolog Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Penyelia
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Penyelia
3. Produk hukum terkait jabatan Entomolog Kesehatan Penyelia
4. Dokumen Entomolog Kesehatan Penyelia
5. Dokumentasi kegiatan Entomolog Kesehatan Penyelia
6. Hasil Kajian Entomolog Kesehatan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Penyelia
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3484',
            'nama_jabatan' => 'Entomolog Kesehatan Pertama',
            'nama_unit' => 'Entomolog Kesehatan Pertama',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Biologi, Kedokteran Hewan, Kesehatan yg berhubungan dengan entomolog kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Pertama
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Pertama
3. Produk hukum terkait jabatan Entomolog Kesehatan Pertama
4. Dokumen Entomolog Kesehatan Pertama
5. Dokumentasi kegiatan Entomolog Kesehatan Pertama
6. Hasil Kajian Entomolog Kesehatan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Pertama
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3485',
            'nama_jabatan' => 'Entomolog Kesehatan Muda',
            'nama_unit' => 'Entomolog Kesehatan Muda',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Biologi, Kedokteran Hewan, Kesehatan yg berhubungan dengan entomolog kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Muda
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Muda
3. Produk hukum terkait jabatan Entomolog Kesehatan Muda
4. Dokumen Entomolog Kesehatan Muda
5. Dokumentasi kegiatan Entomolog Kesehatan Muda
6. Hasil Kajian Entomolog Kesehatan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Muda
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3486',
            'nama_jabatan' => 'Entomolog Kesehatan Madya',
            'nama_unit' => 'Entomolog Kesehatan Madya',
            'ikhtisar' => 'Melaksanakan pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit untuk mencegah penularan penyakit, serta terhadap serangga pengganggu untuk meningkatkan kenyamanan hidup manusia dan lingkungannya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Biologi, Kedokteran Hewan, Kesehatan yg berhubungan dengan entomolog kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Entomolog Kesehatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Entomolog Kesehatan Madya
2. Data, Bahan dan Informasi terkait Entomolog Kesehatan Madya
3. Produk hukum terkait jabatan Entomolog Kesehatan Madya
4. Dokumen Entomolog Kesehatan Madya
5. Dokumentasi kegiatan Entomolog Kesehatan Madya
6. Hasil Kajian Entomolog Kesehatan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Entomolog Kesehatan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Entomolog Kesehatan Madya
9. Laporan pelaksanaan kegiatan Entomolog Kesehatan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional pengamatan, penyelidikan, pemberantasan dan pengendalian terhadap vektor penyakit/serangga pengganggu.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3487',
            'nama_jabatan' => 'Fisioterapis Terampil',
            'nama_unit' => 'Fisioterapis Terampil',
            'ikhtisar' => 'Melaksanakan pelayanan fisioterapi, mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi dan komunikasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Fisioterapis Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Fisioterapis Terampil
2. Data, Bahan dan Informasi terkait Fisioterapis Terampil
3. Produk hukum terkait jabatan Fisioterapis Terampil
4. Dokumen Fisioterapis Terampil
5. Dokumentasi kegiatan Fisioterapis Terampil
6. Hasil Kajian Fisioterapis Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Fisioterapis Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Fisioterapis Terampil
9. Laporan pelaksanaan kegiatan Fisioterapis Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Fungsi gerak pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3488',
            'nama_jabatan' => 'Fisioterapis Mahir',
            'nama_unit' => 'Fisioterapis Mahir',
            'ikhtisar' => 'Melaksanakan pelayanan fisioterapi, mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi dan komunikasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Fisioterapis Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Fisioterapis Mahir
2. Data, Bahan dan Informasi terkait Fisioterapis Mahir
3. Produk hukum terkait jabatan Fisioterapis Mahir
4. Dokumen Fisioterapis Mahir
5. Dokumentasi kegiatan Fisioterapis Mahir
6. Hasil Kajian Fisioterapis Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Fisioterapis Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Fisioterapis Mahir
9. Laporan pelaksanaan kegiatan Fisioterapis Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Fungsi gerak pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3489',
            'nama_jabatan' => 'Fisioterapis Penyelia',
            'nama_unit' => 'Fisioterapis Penyelia',
            'ikhtisar' => 'Melaksanakan pelayanan fisioterapi, mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi dan komunikasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Fisioterapis Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Fisioterapis Penyelia
2. Data, Bahan dan Informasi terkait Fisioterapis Penyelia
3. Produk hukum terkait jabatan Fisioterapis Penyelia
4. Dokumen Fisioterapis Penyelia
5. Dokumentasi kegiatan Fisioterapis Penyelia
6. Hasil Kajian Fisioterapis Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Fisioterapis Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Fisioterapis Penyelia
9. Laporan pelaksanaan kegiatan Fisioterapis Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Fungsi gerak pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3490',
            'nama_jabatan' => 'Fisioterapis Pertama',
            'nama_unit' => 'Fisioterapis Pertama',
            'ikhtisar' => 'Melaksanakan pelayanan fisioterapi, mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi dan komunikasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Fisioterapis Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Fisioterapis Pertama
2. Data, Bahan dan Informasi terkait Fisioterapis Pertama
3. Produk hukum terkait jabatan Fisioterapis Pertama
4. Dokumen Fisioterapis Pertama
5. Dokumentasi kegiatan Fisioterapis Pertama
6. Hasil Kajian Fisioterapis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Fisioterapis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Fisioterapis Pertama
9. Laporan pelaksanaan kegiatan Fisioterapis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Fungsi gerak pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3491',
            'nama_jabatan' => 'Fisioterapis Muda',
            'nama_unit' => 'Fisioterapis Muda',
            'ikhtisar' => 'Melaksanakan pelayanan fisioterapi, mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi dan komunikasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Fisioterapis Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Fisioterapis Muda
2. Data, Bahan dan Informasi terkait Fisioterapis Muda
3. Produk hukum terkait jabatan Fisioterapis Muda
4. Dokumen Fisioterapis Muda
5. Dokumentasi kegiatan Fisioterapis Muda
6. Hasil Kajian Fisioterapis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Fisioterapis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Fisioterapis Muda
9. Laporan pelaksanaan kegiatan Fisioterapis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Fungsi gerak pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3492',
            'nama_jabatan' => 'Fisioterapis Madya',
            'nama_unit' => 'Fisioterapis Madya',
            'ikhtisar' => 'Melaksanakan pelayanan fisioterapi, mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis), pelatihan fungsi dan komunikasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Fisioterapis Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Fisioterapis Madya
2. Data, Bahan dan Informasi terkait Fisioterapis Madya
3. Produk hukum terkait jabatan Fisioterapis Madya
4. Dokumen Fisioterapis Madya
5. Dokumentasi kegiatan Fisioterapis Madya
6. Hasil Kajian Fisioterapis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Fisioterapis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Fisioterapis Madya
9. Laporan pelaksanaan kegiatan Fisioterapis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Fungsi gerak pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3493',
            'nama_jabatan' => 'Guru Pertama',
            'nama_unit' => 'Guru Pertama',
            'ikhtisar' => 'Mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur pendidikan formal, pendidikan dasar, dan pendidikan menengah serta tugas tambahan yang relevan dengan fungsi sekolah/madrasah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV dan bersertifikat Pendidik ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Guru Pertama
2. Data, Bahan dan Informasi terkait Guru Pertama
3. Produk hukum terkait jabatan Guru Pertama
4. Dokumen Guru Pertama
5. Dokumentasi kegiatan Guru Pertama
6. Hasil Kajian Guru Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Guru Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Guru Pertama
9. Laporan pelaksanaan kegiatan Guru Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Menyelesaikan tugas utama dan kewajiban sebagai pendidik sesuai dengan yang dibebankan kepadanya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memilih dan menentukan materi, strategi, metode, media pernbelajaran / bimbingan dan alat penilaian/evaluasi dalam melaksanakan proses pembelajaran / bimbingan untuk mencapai hasil pendidikan yang bermutu sesuai dengan kode etik profesi Guru
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3494',
            'nama_jabatan' => 'Guru Muda',
            'nama_unit' => 'Guru Muda',
            'ikhtisar' => 'Mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur pendidikan formal, pendidikan dasar, dan pendidikan menengah serta tugas tambahan yang relevan dengan fungsi sekolah/madrasah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV dan bersertifikat Pendidik ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Guru Muda
2. Data, Bahan dan Informasi terkait Guru Muda
3. Produk hukum terkait jabatan Guru Muda
4. Dokumen Guru Muda
5. Dokumentasi kegiatan Guru Muda
6. Hasil Kajian Guru Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Guru Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Guru Muda
9. Laporan pelaksanaan kegiatan Guru Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Menyelesaikan tugas utama dan kewajiban sebagai pendidik sesuai dengan yang dibebankan kepadanya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memilih dan menentukan materi, strategi, metode, media pernbelajaran / bimbingan dan alat penilaian/evaluasi dalam melaksanakan proses pembelajaran / bimbingan untuk mencapai hasil pendidikan yang bermutu sesuai dengan kode etik profesi Guru
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3495',
            'nama_jabatan' => 'Guru Madya',
            'nama_unit' => 'Guru Madya',
            'ikhtisar' => 'Mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur pendidikan formal, pendidikan dasar, dan pendidikan menengah serta tugas tambahan yang relevan dengan fungsi sekolah/madrasah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV dan bersertifikat Pendidik ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Guru Madya
2. Data, Bahan dan Informasi terkait Guru Madya
3. Produk hukum terkait jabatan Guru Madya
4. Dokumen Guru Madya
5. Dokumentasi kegiatan Guru Madya
6. Hasil Kajian Guru Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Guru Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Guru Madya
9. Laporan pelaksanaan kegiatan Guru Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Menyelesaikan tugas utama dan kewajiban sebagai pendidik sesuai dengan yang dibebankan kepadanya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memilih dan menentukan materi, strategi, metode, media pernbelajaran / bimbingan dan alat penilaian/evaluasi dalam melaksanakan proses pembelajaran / bimbingan untuk mencapai hasil pendidikan yang bermutu sesuai dengan kode etik profesi Guru
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3496',
            'nama_jabatan' => 'Guru Utama',
            'nama_unit' => 'Guru Utama',
            'ikhtisar' => 'Mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur pendidikan formal, pendidikan dasar, dan pendidikan menengah serta tugas tambahan yang relevan dengan fungsi sekolah/madrasah',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV dan bersertifikat Pendidik ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Guru Utama
2. Data, Bahan dan Informasi terkait Guru Utama
3. Produk hukum terkait jabatan Guru Utama
4. Dokumen Guru Utama
5. Dokumentasi kegiatan Guru Utama
6. Hasil Kajian Guru Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Guru Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Guru Utama
9. Laporan pelaksanaan kegiatan Guru Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Menyelesaikan tugas utama dan kewajiban sebagai pendidik sesuai dengan yang dibebankan kepadanya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memilih dan menentukan materi, strategi, metode, media pernbelajaran / bimbingan dan alat penilaian/evaluasi dalam melaksanakan proses pembelajaran / bimbingan untuk mencapai hasil pendidikan yang bermutu sesuai dengan kode etik profesi Guru
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3497',
            'nama_jabatan' => 'Inspektur Ketenagalistrikan Pertama',
            'nama_unit' => 'Inspektur Ketenagalistrikan Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang inspeksi ketenagalistrikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Teknik Pertambangan/Teknik Geologi/Teknik Sipil/Teknik Mesin/Teknik Kimia/Teknik Fisika/Teknik Lingkungan/Teknik Elektro/Teknik Metalurgi/Teknik Geodesi/ Teknik Geofisika/Teknik Industri/Teknik Perminyakan atau D IV Keinspekturan Tambang, dan kualifikasi lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji Kompetensi Teknis, Kompetensi Manajerial, dan Kompetensi Sosial Kultural sesuai standar kompetensi yang telah disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Inspektur Ketenagalistrikan Pertama
2. Data, Bahan dan Informasi terkait Inspektur Ketenagalistrikan Pertama
3. Produk hukum terkait jabatan Inspektur Ketenagalistrikan Pertama
4. Dokumen Inspektur Ketenagalistrikan Pertama
5. Dokumentasi kegiatan Inspektur Ketenagalistrikan Pertama
6. Hasil Kajian Inspektur Ketenagalistrikan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Inspektur Ketenagalistrikan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Inspektur Ketenagalistrikan Pertama
9. Laporan pelaksanaan kegiatan Inspektur Ketenagalistrikan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Pelaksanaan inspeksi, 
b. Dokumen pengujian, 
c. Dokumen penelaahan proses dan gejala berbagai aspek ketenagalistrikan, 
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Inpeksi Ketenagaan Listrik ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3498',
            'nama_jabatan' => 'Inspektur Ketenagalistrikan Muda',
            'nama_unit' => 'Inspektur Ketenagalistrikan Muda',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang inspeksi ketenagalistrikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Teknik Pertambangan/Teknik Geologi/Teknik Sipil/Teknik Mesin/Teknik Kimia/Teknik Fisika/Teknik Lingkungan/Teknik Elektro/Teknik Metalurgi/Teknik Geodesi/ Teknik Geofisika/Teknik Industri/Teknik Perminyakan atau D IV Keinspekturan Tambang, dan kualifikasi lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji Kompetensi Teknis, Kompetensi Manajerial, dan Kompetensi Sosial Kultural sesuai standar kompetensi yang telah disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Inspektur Ketenagalistrikan Muda
2. Data, Bahan dan Informasi terkait Inspektur Ketenagalistrikan Muda
3. Produk hukum terkait jabatan Inspektur Ketenagalistrikan Muda
4. Dokumen Inspektur Ketenagalistrikan Muda
5. Dokumentasi kegiatan Inspektur Ketenagalistrikan Muda
6. Hasil Kajian Inspektur Ketenagalistrikan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Inspektur Ketenagalistrikan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Inspektur Ketenagalistrikan Muda
9. Laporan pelaksanaan kegiatan Inspektur Ketenagalistrikan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Pelaksanaan inspeksi, 
b. Dokumen pengujian, 
c. Dokumen penelaahan proses dan gejala berbagai aspek ketenagalistrikan, 
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Inpeksi Ketenagaan Listrik ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3499',
            'nama_jabatan' => 'Inspektur Ketenagalistrikan Madya',
            'nama_unit' => 'Inspektur Ketenagalistrikan Madya',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang inspeksi ketenagalistrikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Teknik Pertambangan/Teknik Geologi/Teknik Sipil/Teknik Mesin/Teknik Kimia/Teknik Fisika/Teknik Lingkungan/Teknik Elektro/Teknik Metalurgi/Teknik Geodesi/ Teknik Geofisika/Teknik Industri/Teknik Perminyakan atau D IV Keinspekturan Tambang, dan kualifikasi lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji Kompetensi Teknis, Kompetensi Manajerial, dan Kompetensi Sosial Kultural sesuai standar kompetensi yang telah disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Inspektur Ketenagalistrikan Madya
2. Data, Bahan dan Informasi terkait Inspektur Ketenagalistrikan Madya
3. Produk hukum terkait jabatan Inspektur Ketenagalistrikan Madya
4. Dokumen Inspektur Ketenagalistrikan Madya
5. Dokumentasi kegiatan Inspektur Ketenagalistrikan Madya
6. Hasil Kajian Inspektur Ketenagalistrikan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Inspektur Ketenagalistrikan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Inspektur Ketenagalistrikan Madya
9. Laporan pelaksanaan kegiatan Inspektur Ketenagalistrikan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Pelaksanaan inspeksi, 
b. Dokumen pengujian, 
c. Dokumen penelaahan proses dan gejala berbagai aspek ketenagalistrikan, 
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Inpeksi Ketenagaan Listrik ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3500',
            'nama_jabatan' => 'Instruktur Terampil',
            'nama_unit' => 'Instruktur Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pelatihan dan pembelajaran serta pengembangan pelatihan ',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'Diploma II Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Instruktur Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Instruktur Terampil
2. Data, Bahan dan Informasi terkait Instruktur Terampil
3. Produk hukum terkait jabatan Instruktur Terampil
4. Dokumen Instruktur Terampil
5. Dokumentasi kegiatan Instruktur Terampil
6. Hasil Kajian Instruktur Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Instruktur Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Instruktur Terampil
9. Laporan pelaksanaan kegiatan Instruktur Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan bahan latihan
b. Kelancaran proses latihan
c. ketepatan waktu melatih',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menentukan metode latihan
b. Memberikan penilaian atas kemajuan peserta latih
c. Menggunakan perangkat latihan yang tersedia
d. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3501',
            'nama_jabatan' => 'Instruktur Mahir',
            'nama_unit' => 'Instruktur Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pelatihan dan pembelajaran serta pengembangan pelatihan ',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'Diploma II Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Instruktur Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Instruktur Mahir
2. Data, Bahan dan Informasi terkait Instruktur Mahir
3. Produk hukum terkait jabatan Instruktur Mahir
4. Dokumen Instruktur Mahir
5. Dokumentasi kegiatan Instruktur Mahir
6. Hasil Kajian Instruktur Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Instruktur Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Instruktur Mahir
9. Laporan pelaksanaan kegiatan Instruktur Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan bahan latihan
b. Kelancaran proses latihan
c. ketepatan waktu melatih',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menentukan metode latihan
b. Memberikan penilaian atas kemajuan peserta latih
c. Menggunakan perangkat latihan yang tersedia
d. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3502',
            'nama_jabatan' => 'Instruktur Penyelia',
            'nama_unit' => 'Instruktur Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pelatihan dan pembelajaran serta pengembangan pelatihan ',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'Diploma II Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Instruktur Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Instruktur Penyelia
2. Data, Bahan dan Informasi terkait Instruktur Penyelia
3. Produk hukum terkait jabatan Instruktur Penyelia
4. Dokumen Instruktur Penyelia
5. Dokumentasi kegiatan Instruktur Penyelia
6. Hasil Kajian Instruktur Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Instruktur Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Instruktur Penyelia
9. Laporan pelaksanaan kegiatan Instruktur Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan bahan latihan
b. Kelancaran proses latihan
c. ketepatan waktu melatih',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Memberikan penilaian atas kemajuan peserta latih
b. Menggunakan perangkat latihan yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3503',
            'nama_jabatan' => 'Instruktur Pertama',
            'nama_unit' => 'Instruktur Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pelatihan dan pembelajaran serta pengembangan pelatihan ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Instruktur Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Instruktur Pertama
2. Data, Bahan dan Informasi terkait Instruktur Pertama
3. Produk hukum terkait jabatan Instruktur Pertama
4. Dokumen Instruktur Pertama
5. Dokumentasi kegiatan Instruktur Pertama
6. Hasil Kajian Instruktur Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Instruktur Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Instruktur Pertama
9. Laporan pelaksanaan kegiatan Instruktur Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan bahan latihan
b. Kelancaran proses latihan
c. ketepatan waktu melatih',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menentukan metode latihan
b. Memberikan penilaian atas kemajuan peserta latih
c. Menggunakan perangkat latihan yang tersedia
d. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3504',
            'nama_jabatan' => 'Instruktur Muda',
            'nama_unit' => 'Instruktur Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pelatihan dan pembelajaran serta pengembangan pelatihan ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Instruktur Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Instruktur Muda
2. Data, Bahan dan Informasi terkait Instruktur Muda
3. Produk hukum terkait jabatan Instruktur Muda
4. Dokumen Instruktur Muda
5. Dokumentasi kegiatan Instruktur Muda
6. Hasil Kajian Instruktur Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Instruktur Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Instruktur Muda
9. Laporan pelaksanaan kegiatan Instruktur Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan bahan latihan
b. Kelancaran proses latihan
c. ketepatan waktu melatih',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menentukan metode latihan
b. Memberikan penilaian atas kemajuan peserta latih
c. Menggunakan perangkat latihan yang tersedia
d. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3505',
            'nama_jabatan' => 'Instruktur Madya',
            'nama_unit' => 'Instruktur Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pelatihan dan pembelajaran serta pengembangan pelatihan ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Instruktur Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Instruktur Madya
2. Data, Bahan dan Informasi terkait Instruktur Madya
3. Produk hukum terkait jabatan Instruktur Madya
4. Dokumen Instruktur Madya
5. Dokumentasi kegiatan Instruktur Madya
6. Hasil Kajian Instruktur Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Instruktur Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Instruktur Madya
9. Laporan pelaksanaan kegiatan Instruktur Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan bahan latihan
b. Kelancaran proses latihan
c. ketepatan waktu melatih',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menentukan metode latihan
b. Memberikan penilaian atas kemajuan peserta latih
c. Menggunakan perangkat latihan yang tersedia
d. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3506',
            'nama_jabatan' => 'Medik Veteriner Pertama',
            'nama_unit' => 'Medik Veteriner Pertama',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan, pengamanan produk hewan serta pengembangan kesehatan hewan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Dokter Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Medik Veteriner Pertama
2. Data, Bahan dan Informasi terkait Medik Veteriner Pertama
3. Produk hukum terkait jabatan Medik Veteriner Pertama
4. Dokumen Medik Veteriner Pertama
5. Dokumentasi kegiatan Medik Veteriner Pertama
6. Hasil Kajian Medik Veteriner Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Medik Veteriner Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Medik Veteriner Pertama
9. Laporan pelaksanaan kegiatan Medik Veteriner Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan pengobatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3507',
            'nama_jabatan' => 'Medik Veteriner Muda',
            'nama_unit' => 'Medik Veteriner Muda',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan, pengamanan produk hewan serta pengembangan kesehatan hewan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Dokter Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Medik Veteriner Muda
2. Data, Bahan dan Informasi terkait Medik Veteriner Muda
3. Produk hukum terkait jabatan Medik Veteriner Muda
4. Dokumen Medik Veteriner Muda
5. Dokumentasi kegiatan Medik Veteriner Muda
6. Hasil Kajian Medik Veteriner Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Medik Veteriner Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Medik Veteriner Muda
9. Laporan pelaksanaan kegiatan Medik Veteriner Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan pengobatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3508',
            'nama_jabatan' => 'Medik Veteriner Madya',
            'nama_unit' => 'Medik Veteriner Madya',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan, pengamanan produk hewan serta pengembangan kesehatan hewan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Dokter Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Medik Veteriner Madya
2. Data, Bahan dan Informasi terkait Medik Veteriner Madya
3. Produk hukum terkait jabatan Medik Veteriner Madya
4. Dokumen Medik Veteriner Madya
5. Dokumentasi kegiatan Medik Veteriner Madya
6. Hasil Kajian Medik Veteriner Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Medik Veteriner Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Medik Veteriner Madya
9. Laporan pelaksanaan kegiatan Medik Veteriner Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan pengobatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3509',
            'nama_jabatan' => 'Mediator Hubungan Industrial Pertama',
            'nama_unit' => 'Mediator Hubungan Industrial Pertama',
            'ikhtisar' => 'Melakukan pembinaan dan pengembangan hubungan industrial serta penyelesaian perselisihan industrial.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Paling lama 2 th setelah diangkat harus mengikuti diklat fungsional MHI dan mendapat legitimasi sebagai MHI dari Menakertrans',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Mediator Hubungan Industrial Pertama
2. Data, Bahan dan Informasi terkait Mediator Hubungan Industrial Pertama
3. Produk hukum terkait jabatan Mediator Hubungan Industrial Pertama
4. Dokumen Mediator Hubungan Industrial Pertama
5. Dokumentasi kegiatan Mediator Hubungan Industrial Pertama
6. Hasil Kajian Mediator Hubungan Industrial Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Mediator Hubungan Industrial Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Mediator Hubungan Industrial Pertama
9. Laporan pelaksanaan kegiatan Mediator Hubungan Industrial Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Memperjuangkan, membela serta melindungi hak dan kepentingan pekerja / buruh serta meningkatkan kesejahteraan pekerja / buruh dan keluarganya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengumpulan data dan informasi serta melakukan pendekatan antara pihak-pihak yang berselisih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3510',
            'nama_jabatan' => 'Mediator Hubungan Industrial Muda',
            'nama_unit' => 'Mediator Hubungan Industrial Muda',
            'ikhtisar' => 'Melakukan pembinaan dan pengembangan hubungan industrial serta penyelesaian perselisihan industrial.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Paling lama 2 th setelah diangkat harus mengikuti diklat fungsional MHI dan mendapat legitimasi sebagai MHI dari Menakertrans',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Mediator Hubungan Industrial Muda
2. Data, Bahan dan Informasi terkait Mediator Hubungan Industrial Muda
3. Produk hukum terkait jabatan Mediator Hubungan Industrial Muda
4. Dokumen Mediator Hubungan Industrial Muda
5. Dokumentasi kegiatan Mediator Hubungan Industrial Muda
6. Hasil Kajian Mediator Hubungan Industrial Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Mediator Hubungan Industrial Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Mediator Hubungan Industrial Muda
9. Laporan pelaksanaan kegiatan Mediator Hubungan Industrial Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Memperjuangkan, membela serta melindungi hak dan kepentingan pekerja / buruh serta meningkatkan kesejahteraan pekerja / buruh dan keluarganya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengumpulan data dan informasi serta melakukan pendekatan antara pihak-pihak yang berselisih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3511',
            'nama_jabatan' => 'Mediator Hubungan Industrial Madya',
            'nama_unit' => 'Mediator Hubungan Industrial Madya',
            'ikhtisar' => 'Melakukan pembinaan dan pengembangan hubungan industrial serta penyelesaian perselisihan industrial.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Paling lama 2 th setelah diangkat harus mengikuti diklat fungsional MHI dan mendapat legitimasi sebagai MHI dari Menakertrans',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Mediator Hubungan Industrial Madya
2. Data, Bahan dan Informasi terkait Mediator Hubungan Industrial Madya
3. Produk hukum terkait jabatan Mediator Hubungan Industrial Madya
4. Dokumen Mediator Hubungan Industrial Madya
5. Dokumentasi kegiatan Mediator Hubungan Industrial Madya
6. Hasil Kajian Mediator Hubungan Industrial Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Mediator Hubungan Industrial Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Mediator Hubungan Industrial Madya
9. Laporan pelaksanaan kegiatan Mediator Hubungan Industrial Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Memperjuangkan, membela serta melindungi hak dan kepentingan pekerja / buruh serta meningkatkan kesejahteraan pekerja / buruh dan keluarganya',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengumpulan data dan informasi serta melakukan pendekatan antara pihak-pihak yang berselisih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3512',
            'nama_jabatan' => 'Nutrisionis Terampil',
            'nama_unit' => 'Nutrisionis Terampil',
            'ikhtisar' => 'Melaksanakan pelayanan di bidang gizi, makanan dan dietetik yang meliputi pengamatan, penyusunan program, pelaksanaan, penilaian gizi bagi perorangan, kelompok di masyarakat dan di Rumah Sakit',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Dilpoma III Gizi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Nutrisionis Terampil
2. Data, Bahan dan Informasi terkait Nutrisionis Terampil
3. Produk hukum terkait jabatan Nutrisionis Terampil
4. Dokumen Nutrisionis Terampil
5. Dokumentasi kegiatan Nutrisionis Terampil
6. Hasil Kajian Nutrisionis Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Nutrisionis Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Nutrisionis Terampil
9. Laporan pelaksanaan kegiatan Nutrisionis Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3513',
            'nama_jabatan' => 'Nutrisionis Mahir',
            'nama_unit' => 'Nutrisionis Mahir',
            'ikhtisar' => 'Melaksanakan pelayanan di bidang gizi, makanan dan dietetik yang meliputi pengamatan, penyusunan program, pelaksanaan, penilaian gizi bagi perorangan, kelompok di masyarakat dan di Rumah Sakit',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Dilpoma III Gizi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Nutrisionis Mahir
2. Data, Bahan dan Informasi terkait Nutrisionis Mahir
3. Produk hukum terkait jabatan Nutrisionis Mahir
4. Dokumen Nutrisionis Mahir
5. Dokumentasi kegiatan Nutrisionis Mahir
6. Hasil Kajian Nutrisionis Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Nutrisionis Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Nutrisionis Mahir
9. Laporan pelaksanaan kegiatan Nutrisionis Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3514',
            'nama_jabatan' => 'Nutrisionis Penyelia',
            'nama_unit' => 'Nutrisionis Penyelia',
            'ikhtisar' => 'Melaksanakan pelayanan di bidang gizi, makanan dan dietetik yang meliputi pengamatan, penyusunan program, pelaksanaan, penilaian gizi bagi perorangan, kelompok di masyarakat dan di Rumah Sakit',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Dilpoma III Gizi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Nutrisionis Penyelia
2. Data, Bahan dan Informasi terkait Nutrisionis Penyelia
3. Produk hukum terkait jabatan Nutrisionis Penyelia
4. Dokumen Nutrisionis Penyelia
5. Dokumentasi kegiatan Nutrisionis Penyelia
6. Hasil Kajian Nutrisionis Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Nutrisionis Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Nutrisionis Penyelia
9. Laporan pelaksanaan kegiatan Nutrisionis Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3515',
            'nama_jabatan' => 'Nutrisionis Pertama',
            'nama_unit' => 'Nutrisionis Pertama',
            'ikhtisar' => 'Melaksanakan pelayanan di bidang gizi, makanan dan dietetik yang meliputi pengamatan, penyusunan program, pelaksanaan, penilaian gizi bagi perorangan, kelompok di masyarakat dan di Rumah Sakit',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Gizi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Nutrisionis Pertama
2. Data, Bahan dan Informasi terkait Nutrisionis Pertama
3. Produk hukum terkait jabatan Nutrisionis Pertama
4. Dokumen Nutrisionis Pertama
5. Dokumentasi kegiatan Nutrisionis Pertama
6. Hasil Kajian Nutrisionis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Nutrisionis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Nutrisionis Pertama
9. Laporan pelaksanaan kegiatan Nutrisionis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3516',
            'nama_jabatan' => 'Nutrisionis Muda',
            'nama_unit' => 'Nutrisionis Muda',
            'ikhtisar' => 'Melaksanakan pelayanan di bidang gizi, makanan dan dietetik yang meliputi pengamatan, penyusunan program, pelaksanaan, penilaian gizi bagi perorangan, kelompok di masyarakat dan di Rumah Sakit',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Gizi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Nutrisionis Muda
2. Data, Bahan dan Informasi terkait Nutrisionis Muda
3. Produk hukum terkait jabatan Nutrisionis Muda
4. Dokumen Nutrisionis Muda
5. Dokumentasi kegiatan Nutrisionis Muda
6. Hasil Kajian Nutrisionis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Nutrisionis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Nutrisionis Muda
9. Laporan pelaksanaan kegiatan Nutrisionis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3517',
            'nama_jabatan' => 'Nutrisionis Madya',
            'nama_unit' => 'Nutrisionis Madya',
            'ikhtisar' => 'Melaksanakan pelayanan di bidang gizi, makanan dan dietetik yang meliputi pengamatan, penyusunan program, pelaksanaan, penilaian gizi bagi perorangan, kelompok di masyarakat dan di Rumah Sakit',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Gizi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Nutrisionis Madya
2. Data, Bahan dan Informasi terkait Nutrisionis Madya
3. Produk hukum terkait jabatan Nutrisionis Madya
4. Dokumen Nutrisionis Madya
5. Dokumentasi kegiatan Nutrisionis Madya
6. Hasil Kajian Nutrisionis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Nutrisionis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Nutrisionis Madya
9. Laporan pelaksanaan kegiatan Nutrisionis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3518',
            'nama_jabatan' => 'Okupasi Terapis Terampil',
            'nama_unit' => 'Okupasi Terapis Terampil',
            'ikhtisar' => 'Melakukan pelayanan okupasi terapi yang meliputi pengembangan, pemeliharaan, dan pemulihan aktivitas perawatan diri, produktivitas, pemanfaatan waktu luang, memfungsikan peralatan adaptif dan alat bantu tertentu, serta pelatihan komponen kinerja okupasi terapis pada sarana layanan kesehatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Akademi Okupasi Terapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Okupasi Terapis Terampil
2. Data, Bahan dan Informasi terkait Okupasi Terapis Terampil
3. Produk hukum terkait jabatan Okupasi Terapis Terampil
4. Dokumen Okupasi Terapis Terampil
5. Dokumentasi kegiatan Okupasi Terapis Terampil
6. Hasil Kajian Okupasi Terapis Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Okupasi Terapis Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Okupasi Terapis Terampil
9. Laporan pelaksanaan kegiatan Okupasi Terapis Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3519',
            'nama_jabatan' => 'Okupasi Terapis Mahir',
            'nama_unit' => 'Okupasi Terapis Mahir',
            'ikhtisar' => 'Melakukan pelayanan okupasi terapi yang meliputi pengembangan, pemeliharaan, dan pemulihan aktivitas perawatan diri, produktivitas, pemanfaatan waktu luang, memfungsikan peralatan adaptif dan alat bantu tertentu, serta pelatihan komponen kinerja okupasi terapis pada sarana layanan kesehatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Akademi Okupasi Terapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Okupasi Terapis Mahir
2. Data, Bahan dan Informasi terkait Okupasi Terapis Mahir
3. Produk hukum terkait jabatan Okupasi Terapis Mahir
4. Dokumen Okupasi Terapis Mahir
5. Dokumentasi kegiatan Okupasi Terapis Mahir
6. Hasil Kajian Okupasi Terapis Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Okupasi Terapis Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Okupasi Terapis Mahir
9. Laporan pelaksanaan kegiatan Okupasi Terapis Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3520',
            'nama_jabatan' => 'Okupasi Terapis Penyelia',
            'nama_unit' => 'Okupasi Terapis Penyelia',
            'ikhtisar' => 'Melakukan pelayanan okupasi terapi yang meliputi pengembangan, pemeliharaan, dan pemulihan aktivitas perawatan diri, produktivitas, pemanfaatan waktu luang, memfungsikan peralatan adaptif dan alat bantu tertentu, serta pelatihan komponen kinerja okupasi terapis pada sarana layanan kesehatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Akademi Okupasi Terapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Okupasi Terapis Penyelia
2. Data, Bahan dan Informasi terkait Okupasi Terapis Penyelia
3. Produk hukum terkait jabatan Okupasi Terapis Penyelia
4. Dokumen Okupasi Terapis Penyelia
5. Dokumentasi kegiatan Okupasi Terapis Penyelia
6. Hasil Kajian Okupasi Terapis Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Okupasi Terapis Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Okupasi Terapis Penyelia
9. Laporan pelaksanaan kegiatan Okupasi Terapis Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data klien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kualitas dan kuantitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3521',
            'nama_jabatan' => 'Pamong Belajar Pertama',
            'nama_unit' => 'Pamong Belajar Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan belajar mengajar, mengkaji program, dan mengembangkan model di bidang PNFI',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D-IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pamong Belajar Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Belajar Pertama
2. Data, Bahan dan Informasi terkait Pamong Belajar Pertama
3. Produk hukum terkait jabatan Pamong Belajar Pertama
4. Dokumen Pamong Belajar Pertama
5. Dokumentasi kegiatan Pamong Belajar Pertama
6. Hasil Kajian Pamong Belajar Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Belajar Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Belajar Pertama
9. Laporan pelaksanaan kegiatan Pamong Belajar Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pembelajaran, pelatihan dan pembimbingan sesuai dengan target yang ditetapkan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan pembelajaran, pelatihan dan pembimbingan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3522',
            'nama_jabatan' => 'Pamong Belajar Muda',
            'nama_unit' => 'Pamong Belajar Muda',
            'ikhtisar' => 'Melaksanakan kegiatan belajar mengajar, mengkaji program, dan mengembangkan model di bidang PNFI',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D-IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pamong Belajar Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Belajar Muda
2. Data, Bahan dan Informasi terkait Pamong Belajar Muda
3. Produk hukum terkait jabatan Pamong Belajar Muda
4. Dokumen Pamong Belajar Muda
5. Dokumentasi kegiatan Pamong Belajar Muda
6. Hasil Kajian Pamong Belajar Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Belajar Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Belajar Muda
9. Laporan pelaksanaan kegiatan Pamong Belajar Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pembelajaran, pelatihan dan pembimbingan sesuai dengan target yang ditetapkan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan pembelajaran, pelatihan dan pembimbingan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3523',
            'nama_jabatan' => 'Pamong Belajar Madya',
            'nama_unit' => 'Pamong Belajar Madya',
            'ikhtisar' => 'Melaksanakan kegiatan belajar mengajar, mengkaji program, dan mengembangkan model di bidang PNFI',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D-IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pamong Belajar Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Belajar Madya
2. Data, Bahan dan Informasi terkait Pamong Belajar Madya
3. Produk hukum terkait jabatan Pamong Belajar Madya
4. Dokumen Pamong Belajar Madya
5. Dokumentasi kegiatan Pamong Belajar Madya
6. Hasil Kajian Pamong Belajar Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Belajar Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Belajar Madya
9. Laporan pelaksanaan kegiatan Pamong Belajar Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pembelajaran, pelatihan dan pembimbingan sesuai dengan target yang ditetapkan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan pembelajaran, pelatihan dan pembimbingan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3524',
            'nama_jabatan' => 'Pamong Budaya Terampil',
            'nama_unit' => 'Pamong Budaya Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan Pemajuan Kebudayaan & Pelestarian Cagar Budaya.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Ilmu Sosial, Ilmu Seni, Desain, dan Media ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Budaya Terampil
2. Data, Bahan dan Informasi terkait Pamong Budaya Terampil
3. Produk hukum terkait jabatan Pamong Budaya Terampil
4. Dokumen Pamong Budaya Terampil
5. Dokumentasi kegiatan Pamong Budaya Terampil
6. Hasil Kajian Pamong Budaya Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Budaya Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Budaya Terampil
9. Laporan pelaksanaan kegiatan Pamong Budaya Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Dokumen kebudayaan di bidang nilai budaya, 
b. Inventaris pembinaan kesejarahan Melaksanakan pembinaan kesenian, 
c. Dokuemtasi pembinaan permuseuman, kepurbakalaan dan kebahasaan.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pelestarian dan Keberadaan Budaya ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3525',
            'nama_jabatan' => 'Pamong Budaya Mahir',
            'nama_unit' => 'Pamong Budaya Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan Pemajuan Kebudayaan & Pelestarian Cagar Budaya.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Ilmu Sosial, Ilmu Seni, Desain, dan Media ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Budaya Mahir
2. Data, Bahan dan Informasi terkait Pamong Budaya Mahir
3. Produk hukum terkait jabatan Pamong Budaya Mahir
4. Dokumen Pamong Budaya Mahir
5. Dokumentasi kegiatan Pamong Budaya Mahir
6. Hasil Kajian Pamong Budaya Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Budaya Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Budaya Mahir
9. Laporan pelaksanaan kegiatan Pamong Budaya Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Dokumen kebudayaan di bidang nilai budaya, 
b. Inventaris pembinaan kesejarahan Melaksanakan pembinaan kesenian, 
c. Dokuemtasi pembinaan permuseuman, kepurbakalaan dan kebahasaan.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pelestarian dan Keberadaan Budaya ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3526',
            'nama_jabatan' => 'Pamong Budaya Penyelia',
            'nama_unit' => 'Pamong Budaya Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan Pemajuan Kebudayaan & Pelestarian Cagar Budaya.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Ilmu Sosial, Ilmu Seni, Desain, dan Media ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Budaya Penyelia
2. Data, Bahan dan Informasi terkait Pamong Budaya Penyelia
3. Produk hukum terkait jabatan Pamong Budaya Penyelia
4. Dokumen Pamong Budaya Penyelia
5. Dokumentasi kegiatan Pamong Budaya Penyelia
6. Hasil Kajian Pamong Budaya Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Budaya Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Budaya Penyelia
9. Laporan pelaksanaan kegiatan Pamong Budaya Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Dokumen kebudayaan di bidang nilai budaya, 
b. Inventaris pembinaan kesejarahan Melaksanakan pembinaan kesenian, 
c. Dokuemtasi pembinaan permuseuman, kepurbakalaan dan kebahasaan.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pelestarian dan Keberadaan Budaya ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3527',
            'nama_jabatan' => 'Pamong Budaya Pertama',
            'nama_unit' => 'Pamong Budaya Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan Pemajuan Kebudayaan & Pelestarian Cagar Budaya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D-IV Ilmu Sosial Humaniora, Agama, Filsafat, Ilmu Seni, Desain, dan Media ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Budaya Pertama
2. Data, Bahan dan Informasi terkait Pamong Budaya Pertama
3. Produk hukum terkait jabatan Pamong Budaya Pertama
4. Dokumen Pamong Budaya Pertama
5. Dokumentasi kegiatan Pamong Budaya Pertama
6. Hasil Kajian Pamong Budaya Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Budaya Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Budaya Pertama
9. Laporan pelaksanaan kegiatan Pamong Budaya Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Dokumen kebudayaan di bidang nilai budaya, 
b. Inventaris pembinaan kesejarahan Melaksanakan pembinaan kesenian, 
c. Dokuemtasi pembinaan permuseuman, kepurbakalaan dan kebahasaan.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pelestarian dan Keberadaan Budaya ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3528',
            'nama_jabatan' => 'Pamong Budaya Muda',
            'nama_unit' => 'Pamong Budaya Muda',
            'ikhtisar' => 'Melaksanakan kegiatan Pemajuan Kebudayaan & Pelestarian Cagar Budaya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D-IV Ilmu Sosial Humaniora, Agama, Filsafat, Ilmu Seni, Desain, dan Media ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Budaya Muda
2. Data, Bahan dan Informasi terkait Pamong Budaya Muda
3. Produk hukum terkait jabatan Pamong Budaya Muda
4. Dokumen Pamong Budaya Muda
5. Dokumentasi kegiatan Pamong Budaya Muda
6. Hasil Kajian Pamong Budaya Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Budaya Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Budaya Muda
9. Laporan pelaksanaan kegiatan Pamong Budaya Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Dokumen kebudayaan di bidang nilai budaya, 
b. Inventaris pembinaan kesejarahan Melaksanakan pembinaan kesenian, 
c. Dokuemtasi pembinaan permuseuman, kepurbakalaan dan kebahasaan.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pelestarian dan Keberadaan Budaya ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3529',
            'nama_jabatan' => 'Pamong Budaya Madya',
            'nama_unit' => 'Pamong Budaya Madya',
            'ikhtisar' => 'Melaksanakan kegiatan Pemajuan Kebudayaan & Pelestarian Cagar Budaya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D-IV Ilmu Sosial Humaniora, Agama, Filsafat, Ilmu Seni, Desain, dan Media ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pamong Budaya Madya
2. Data, Bahan dan Informasi terkait Pamong Budaya Madya
3. Produk hukum terkait jabatan Pamong Budaya Madya
4. Dokumen Pamong Budaya Madya
5. Dokumentasi kegiatan Pamong Budaya Madya
6. Hasil Kajian Pamong Budaya Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pamong Budaya Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pamong Budaya Madya
9. Laporan pelaksanaan kegiatan Pamong Budaya Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Dokumen kebudayaan di bidang nilai budaya, 
b. Inventaris pembinaan kesejarahan Melaksanakan pembinaan kesenian, 
c. Dokuemtasi pembinaan permuseuman, kepurbakalaan dan kebahasaan.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pelestarian dan Keberadaan Budaya ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3530',
            'nama_jabatan' => 'Paramedik Veteriner Pemula',
            'nama_unit' => 'Paramedik Veteriner Pemula',
            'ikhtisar' => 'Menyiapkan, melaksanakan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan dan pengamanan produk hewan',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan atau Kesehatan Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Paramedik Veteriner Pemula
2. Data, Bahan dan Informasi terkait Paramedik Veteriner Pemula
3. Produk hukum terkait jabatan Paramedik Veteriner Pemula
4. Dokumen Paramedik Veteriner Pemula
5. Dokumentasi kegiatan Paramedik Veteriner Pemula
6. Hasil Kajian Paramedik Veteriner Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Paramedik Veteriner Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Paramedik Veteriner Pemula
9. Laporan pelaksanaan kegiatan Paramedik Veteriner Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan perawatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3531',
            'nama_jabatan' => 'Paramedik Veteriner Terampil',
            'nama_unit' => 'Paramedik Veteriner Terampil',
            'ikhtisar' => 'Menyiapkan, melaksanakan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan dan pengamanan produk hewan',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan atau Kesehatan Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Paramedik Veteriner Terampil
2. Data, Bahan dan Informasi terkait Paramedik Veteriner Terampil
3. Produk hukum terkait jabatan Paramedik Veteriner Terampil
4. Dokumen Paramedik Veteriner Terampil
5. Dokumentasi kegiatan Paramedik Veteriner Terampil
6. Hasil Kajian Paramedik Veteriner Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Paramedik Veteriner Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Paramedik Veteriner Terampil
9. Laporan pelaksanaan kegiatan Paramedik Veteriner Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan perawatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3532',
            'nama_jabatan' => 'Paramedik Veteriner Mahir',
            'nama_unit' => 'Paramedik Veteriner Mahir',
            'ikhtisar' => 'Menyiapkan, melaksanakan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan dan pengamanan produk hewan',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan atau Kesehatan Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Paramedik Veteriner Mahir
2. Data, Bahan dan Informasi terkait Paramedik Veteriner Mahir
3. Produk hukum terkait jabatan Paramedik Veteriner Mahir
4. Dokumen Paramedik Veteriner Mahir
5. Dokumentasi kegiatan Paramedik Veteriner Mahir
6. Hasil Kajian Paramedik Veteriner Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Paramedik Veteriner Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Paramedik Veteriner Mahir
9. Laporan pelaksanaan kegiatan Paramedik Veteriner Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan perawatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3533',
            'nama_jabatan' => 'Paramedik Veteriner Penyelia',
            'nama_unit' => 'Paramedik Veteriner Penyelia',
            'ikhtisar' => 'Menyiapkan, melaksanakan, dan melaporkan kegiatan pengendalian hama dan penyakit hewan dan pengamanan produk hewan',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan atau Kesehatan Hewan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Paramedik Veteriner Penyelia
2. Data, Bahan dan Informasi terkait Paramedik Veteriner Penyelia
3. Produk hukum terkait jabatan Paramedik Veteriner Penyelia
4. Dokumen Paramedik Veteriner Penyelia
5. Dokumentasi kegiatan Paramedik Veteriner Penyelia
6. Hasil Kajian Paramedik Veteriner Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Paramedik Veteriner Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Paramedik Veteriner Penyelia
9. Laporan pelaksanaan kegiatan Paramedik Veteriner Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksankan pelayanan kesehatan hewan sesuai dengan prsedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Meminta data dan informasi tentang penyakit hewan
- Melakukan tindakan perawatan terhadap hewan yang sakit',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3534',
            'nama_jabatan' => 'Pekerja Sosial Pemula',
            'nama_unit' => 'Pekerja Sosial Pemula',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Pemula
2. Data, Bahan dan Informasi terkait Pekerja Sosial Pemula
3. Produk hukum terkait jabatan Pekerja Sosial Pemula
4. Dokumen Pekerja Sosial Pemula
5. Dokumentasi kegiatan Pekerja Sosial Pemula
6. Hasil Kajian Pekerja Sosial Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Pemula
9. Laporan pelaksanaan kegiatan Pekerja Sosial Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3535',
            'nama_jabatan' => 'Pekerja Sosial Terampil',
            'nama_unit' => 'Pekerja Sosial Terampil',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Terampil
2. Data, Bahan dan Informasi terkait Pekerja Sosial Terampil
3. Produk hukum terkait jabatan Pekerja Sosial Terampil
4. Dokumen Pekerja Sosial Terampil
5. Dokumentasi kegiatan Pekerja Sosial Terampil
6. Hasil Kajian Pekerja Sosial Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Terampil
9. Laporan pelaksanaan kegiatan Pekerja Sosial Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3536',
            'nama_jabatan' => 'Pekerja Sosial Mahir',
            'nama_unit' => 'Pekerja Sosial Mahir',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Mahir
2. Data, Bahan dan Informasi terkait Pekerja Sosial Mahir
3. Produk hukum terkait jabatan Pekerja Sosial Mahir
4. Dokumen Pekerja Sosial Mahir
5. Dokumentasi kegiatan Pekerja Sosial Mahir
6. Hasil Kajian Pekerja Sosial Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Mahir
9. Laporan pelaksanaan kegiatan Pekerja Sosial Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3537',
            'nama_jabatan' => 'Pekerja Sosial Penyelia',
            'nama_unit' => 'Pekerja Sosial Penyelia',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Penyelia
2. Data, Bahan dan Informasi terkait Pekerja Sosial Penyelia
3. Produk hukum terkait jabatan Pekerja Sosial Penyelia
4. Dokumen Pekerja Sosial Penyelia
5. Dokumentasi kegiatan Pekerja Sosial Penyelia
6. Hasil Kajian Pekerja Sosial Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Penyelia
9. Laporan pelaksanaan kegiatan Pekerja Sosial Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3538',
            'nama_jabatan' => 'Pekerja Sosial Pertama',
            'nama_unit' => 'Pekerja Sosial Pertama',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pekerjaan Sosial dan Kesejahteraan Sosial',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Pertama
2. Data, Bahan dan Informasi terkait Pekerja Sosial Pertama
3. Produk hukum terkait jabatan Pekerja Sosial Pertama
4. Dokumen Pekerja Sosial Pertama
5. Dokumentasi kegiatan Pekerja Sosial Pertama
6. Hasil Kajian Pekerja Sosial Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Pertama
9. Laporan pelaksanaan kegiatan Pekerja Sosial Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku
Mealkukan kajian secara obyektif dengan data yang valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3539',
            'nama_jabatan' => 'Pekerja Sosial Muda',
            'nama_unit' => 'Pekerja Sosial Muda',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pekerjaan Sosial dan Kesejahteraan Sosial',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Muda
2. Data, Bahan dan Informasi terkait Pekerja Sosial Muda
3. Produk hukum terkait jabatan Pekerja Sosial Muda
4. Dokumen Pekerja Sosial Muda
5. Dokumentasi kegiatan Pekerja Sosial Muda
6. Hasil Kajian Pekerja Sosial Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Muda
9. Laporan pelaksanaan kegiatan Pekerja Sosial Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku
Mealkukan kajian secara obyektif dengan data yang valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3540',
            'nama_jabatan' => 'Pekerja Sosial Madya',
            'nama_unit' => 'Pekerja Sosial Madya',
            'ikhtisar' => 'Melakukan Penyelenggaraan Kesejahteraan Sosial meliputi pendekatan awal, pengungkapan dan pemecahan masalah, penyusunan rencana intervensi, intervensi, evaluasi, terminasi dan rujukan, serta bimbingan dan pembinaan lanjut.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pekerjaan Sosial dan Kesejahteraan Sosial',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pekerja Sosial Madya
2. Data, Bahan dan Informasi terkait Pekerja Sosial Madya
3. Produk hukum terkait jabatan Pekerja Sosial Madya
4. Dokumen Pekerja Sosial Madya
5. Dokumentasi kegiatan Pekerja Sosial Madya
6. Hasil Kajian Pekerja Sosial Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pekerja Sosial Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pekerja Sosial Madya
9. Laporan pelaksanaan kegiatan Pekerja Sosial Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pelayanan kesejahteraan sosial sesuai dengan prosedure yang berlaku
Mealkukan kajian secara obyektif dengan data yang valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data dan informasi 
- Melakukan kegiatan pelayanan kesejahteraan sosial',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3541',
            'nama_jabatan' => 'Pembimbing Kesehatan Kerja Pertama',
            'nama_unit' => 'Pembimbing Kesehatan Kerja Pertama',
            'ikhtisar' => 'Melakukan kegiatan pembimbingan kesehatan kerja yang meliputi persiapan, pelaksanaan, monitoring dan evaluasi di bidang kesehatan kerja.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sarjana Terapan di Bidang Kesehatan kerja/Hyperkes',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pembimbing Kesehatan Kerja Pertama
2. Data, Bahan dan Informasi terkait Pembimbing Kesehatan Kerja Pertama
3. Produk hukum terkait jabatan Pembimbing Kesehatan Kerja Pertama
4. Dokumen Pembimbing Kesehatan Kerja Pertama
5. Dokumentasi kegiatan Pembimbing Kesehatan Kerja Pertama
6. Hasil Kajian Pembimbing Kesehatan Kerja Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pembimbing Kesehatan Kerja Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pembimbing Kesehatan Kerja Pertama
9. Laporan pelaksanaan kegiatan Pembimbing Kesehatan Kerja Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3542',
            'nama_jabatan' => 'Pembimbing Kesehatan Kerja Muda',
            'nama_unit' => 'Pembimbing Kesehatan Kerja Muda',
            'ikhtisar' => 'Melakukan kegiatan pembimbingan kesehatan kerja yang meliputi persiapan, pelaksanaan, monitoring dan evaluasi di bidang kesehatan kerja.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sarjana Terapan di Bidang Kesehatan kerja/Hyperkes',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pembimbing Kesehatan Kerja Muda
2. Data, Bahan dan Informasi terkait Pembimbing Kesehatan Kerja Muda
3. Produk hukum terkait jabatan Pembimbing Kesehatan Kerja Muda
4. Dokumen Pembimbing Kesehatan Kerja Muda
5. Dokumentasi kegiatan Pembimbing Kesehatan Kerja Muda
6. Hasil Kajian Pembimbing Kesehatan Kerja Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pembimbing Kesehatan Kerja Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pembimbing Kesehatan Kerja Muda
9. Laporan pelaksanaan kegiatan Pembimbing Kesehatan Kerja Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3543',
            'nama_jabatan' => 'Pembimbing Kesehatan Kerja Madya',
            'nama_unit' => 'Pembimbing Kesehatan Kerja Madya',
            'ikhtisar' => 'Melakukan kegiatan pembimbingan kesehatan kerja yang meliputi persiapan, pelaksanaan, monitoring dan evaluasi di bidang kesehatan kerja.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sarjana Terapan di Bidang Kesehatan kerja/Hyperkes',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pembimbing Kesehatan Kerja Madya
2. Data, Bahan dan Informasi terkait Pembimbing Kesehatan Kerja Madya
3. Produk hukum terkait jabatan Pembimbing Kesehatan Kerja Madya
4. Dokumen Pembimbing Kesehatan Kerja Madya
5. Dokumentasi kegiatan Pembimbing Kesehatan Kerja Madya
6. Hasil Kajian Pembimbing Kesehatan Kerja Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pembimbing Kesehatan Kerja Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pembimbing Kesehatan Kerja Madya
9. Laporan pelaksanaan kegiatan Pembimbing Kesehatan Kerja Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3544',
            'nama_jabatan' => 'Penata Anestesi Pertama',
            'nama_unit' => 'Penata Anestesi Pertama',
            'ikhtisar' => 'Melakukan pelayanan asuhan kepenataan anestesi dan/atau membantu pelayanan anestesi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Keperawatan Anestesiologi atau Penata Anestesi dan memiliki Surat Tanda Registrasi Perawat Anestesi atau Penata Anestesi (STRPA)',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus diklat fungsional di bidang pelayanan anestesi',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Anestesi Pertama
2. Data, Bahan dan Informasi terkait Penata Anestesi Pertama
3. Produk hukum terkait jabatan Penata Anestesi Pertama
4. Dokumen Penata Anestesi Pertama
5. Dokumentasi kegiatan Penata Anestesi Pertama
6. Hasil Kajian Penata Anestesi Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Anestesi Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Anestesi Pertama
9. Laporan pelaksanaan kegiatan Penata Anestesi Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'pelayanan asuhan kepenataan anestesi pada praanestesi, intraanestesi dan pascaanestesi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3545',
            'nama_jabatan' => 'Penata Anestesi Muda',
            'nama_unit' => 'Penata Anestesi Muda',
            'ikhtisar' => 'Melakukan pelayanan asuhan kepenataan anestesi dan/atau membantu pelayanan anestesi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Keperawatan Anestesiologi atau Penata Anestesi dan memiliki Surat Tanda Registrasi Perawat Anestesi atau Penata Anestesi (STRPA)',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus diklat fungsional di bidang pelayanan anestesi',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Anestesi Muda
2. Data, Bahan dan Informasi terkait Penata Anestesi Muda
3. Produk hukum terkait jabatan Penata Anestesi Muda
4. Dokumen Penata Anestesi Muda
5. Dokumentasi kegiatan Penata Anestesi Muda
6. Hasil Kajian Penata Anestesi Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Anestesi Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Anestesi Muda
9. Laporan pelaksanaan kegiatan Penata Anestesi Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'pelayanan asuhan kepenataan anestesi pada praanestesi, intraanestesi dan pascaanestesi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3546',
            'nama_jabatan' => 'Penata Anestesi Madya',
            'nama_unit' => 'Penata Anestesi Madya',
            'ikhtisar' => 'Melakukan pelayanan asuhan kepenataan anestesi dan/atau membantu pelayanan anestesi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Keperawatan Anestesiologi atau Penata Anestesi dan memiliki Surat Tanda Registrasi Perawat Anestesi atau Penata Anestesi (STRPA)',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus diklat fungsional di bidang pelayanan anestesi',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Anestesi Madya
2. Data, Bahan dan Informasi terkait Penata Anestesi Madya
3. Produk hukum terkait jabatan Penata Anestesi Madya
4. Dokumen Penata Anestesi Madya
5. Dokumentasi kegiatan Penata Anestesi Madya
6. Hasil Kajian Penata Anestesi Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Anestesi Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Anestesi Madya
9. Laporan pelaksanaan kegiatan Penata Anestesi Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'pelayanan asuhan kepenataan anestesi pada praanestesi, intraanestesi dan pascaanestesi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3547',
            'nama_jabatan' => 'Asisten Penata Anestesi Terampil',
            'nama_unit' => 'Asisten Penata Anestesi Terampil',
            'ikhtisar' => 'Melakukan pelayanan asuhan kepenataan anestesi dan/atau membantu pelayanan anestesi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Keperawatan Anestesi atau Kepenataan Anestesi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional di bidang pelayanan  anestesi',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Penata Anestesi Terampil
2. Data, Bahan dan Informasi terkait Asisten Penata Anestesi Terampil
3. Produk hukum terkait jabatan Asisten Penata Anestesi Terampil
4. Dokumen Asisten Penata Anestesi Terampil
5. Dokumentasi kegiatan Asisten Penata Anestesi Terampil
6. Hasil Kajian Asisten Penata Anestesi Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Penata Anestesi Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Penata Anestesi Terampil
9. Laporan pelaksanaan kegiatan Asisten Penata Anestesi Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3548',
            'nama_jabatan' => 'Asisten Penata Anestesi Mahir',
            'nama_unit' => 'Asisten Penata Anestesi Mahir',
            'ikhtisar' => 'Melakukan pelayanan asuhan kepenataan anestesi dan/atau membantu pelayanan anestesi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Keperawatan Anestesi atau Kepenataan Anestesi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional di bidang pelayanan  anestesi',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Penata Anestesi Mahir
2. Data, Bahan dan Informasi terkait Asisten Penata Anestesi Mahir
3. Produk hukum terkait jabatan Asisten Penata Anestesi Mahir
4. Dokumen Asisten Penata Anestesi Mahir
5. Dokumentasi kegiatan Asisten Penata Anestesi Mahir
6. Hasil Kajian Asisten Penata Anestesi Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Penata Anestesi Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Penata Anestesi Mahir
9. Laporan pelaksanaan kegiatan Asisten Penata Anestesi Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3549',
            'nama_jabatan' => 'Asisten Penata Anestesi Penyelia',
            'nama_unit' => 'Asisten Penata Anestesi Penyelia',
            'ikhtisar' => 'Melakukan pelayanan asuhan kepenataan anestesi dan/atau membantu pelayanan anestesi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Keperawatan Anestesi atau Kepenataan Anestesi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus pendidikan dan pelatihan fungsional di bidang pelayanan  anestesi',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Asisten Penata Anestesi Penyelia
2. Data, Bahan dan Informasi terkait Asisten Penata Anestesi Penyelia
3. Produk hukum terkait jabatan Asisten Penata Anestesi Penyelia
4. Dokumen Asisten Penata Anestesi Penyelia
5. Dokumentasi kegiatan Asisten Penata Anestesi Penyelia
6. Hasil Kajian Asisten Penata Anestesi Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Asisten Penata Anestesi Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Asisten Penata Anestesi Penyelia
9. Laporan pelaksanaan kegiatan Asisten Penata Anestesi Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pelayanan asuhan kepenataan anestesi sesuai kewenangan dan peraturan perundang-undangan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3550',
            'nama_jabatan' => 'Penata Ruang Pertama',
            'nama_unit' => 'Penata Ruang Pertama',
            'ikhtisar' => 'Melakukan kegiatan perencanaan tata ruang dan pengendalian pemanfaatan ruang.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'S 1 Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Ruang Pertama
2. Data, Bahan dan Informasi terkait Penata Ruang Pertama
3. Produk hukum terkait jabatan Penata Ruang Pertama
4. Dokumen Penata Ruang Pertama
5. Dokumentasi kegiatan Penata Ruang Pertama
6. Hasil Kajian Penata Ruang Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Ruang Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Ruang Pertama
9. Laporan pelaksanaan kegiatan Penata Ruang Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Informasi perencanaan tata ruang, 
b. Dokumen pengendalian tata ruang. pemanfaatan ruang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penataan Ruang dan Permukima Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3551',
            'nama_jabatan' => 'Penata Ruang Muda',
            'nama_unit' => 'Penata Ruang Muda',
            'ikhtisar' => 'Melakukan kegiatan perencanaan tata ruang dan pengendalian pemanfaatan ruang.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'S 1 Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Ruang Muda
2. Data, Bahan dan Informasi terkait Penata Ruang Muda
3. Produk hukum terkait jabatan Penata Ruang Muda
4. Dokumen Penata Ruang Muda
5. Dokumentasi kegiatan Penata Ruang Muda
6. Hasil Kajian Penata Ruang Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Ruang Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Ruang Muda
9. Laporan pelaksanaan kegiatan Penata Ruang Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Informasi perencanaan tata ruang, 
b. Dokumen pengendalian tata ruang. pemanfaatan ruang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penataan Ruang dan Permukima Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3552',
            'nama_jabatan' => 'Penata Ruang Madya',
            'nama_unit' => 'Penata Ruang Madya',
            'ikhtisar' => 'Melakukan kegiatan perencanaan tata ruang dan pengendalian pemanfaatan ruang.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'S 1 Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Ruang Madya
2. Data, Bahan dan Informasi terkait Penata Ruang Madya
3. Produk hukum terkait jabatan Penata Ruang Madya
4. Dokumen Penata Ruang Madya
5. Dokumentasi kegiatan Penata Ruang Madya
6. Hasil Kajian Penata Ruang Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Ruang Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Ruang Madya
9. Laporan pelaksanaan kegiatan Penata Ruang Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data dan Informasi perencanaan tata ruang, 
b. Dokumen pengendalian tata ruang. pemanfaatan ruang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penataan Ruang dan Permukima Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3553',
            'nama_jabatan' => 'Peneliti Pertama',
            'nama_unit' => 'Peneliti Pertama',
            'ikhtisar' => 'Melakukan penelitian, pengembangan dan/atau pengkajian ilmu pengetahuan dan teknologi',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 Sesuai kebutuhan bidang kepakaran',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji kompetensi teknis, kompetensi manajerial, dan kompetensi social kultural sesuai dengan standar kompetensi yang telah  disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Peneliti Pertama
2. Data, Bahan dan Informasi terkait Peneliti Pertama
3. Produk hukum terkait jabatan Peneliti Pertama
4. Dokumen Peneliti Pertama
5. Dokumentasi kegiatan Peneliti Pertama
6. Hasil Kajian Peneliti Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Peneliti Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Peneliti Pertama
9. Laporan pelaksanaan kegiatan Peneliti Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/ informasi/ bahan kerja
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3554',
            'nama_jabatan' => 'Peneliti Muda',
            'nama_unit' => 'Peneliti Muda',
            'ikhtisar' => 'Melakukan penelitian, pengembangan dan/atau pengkajian ilmu pengetahuan dan teknologi',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 Sesuai kebutuhan bidang kepakaran',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji kompetensi teknis, kompetensi manajerial, dan kompetensi social kultural sesuai dengan standar kompetensi yang telah  disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Peneliti Muda
2. Data, Bahan dan Informasi terkait Peneliti Muda
3. Produk hukum terkait jabatan Peneliti Muda
4. Dokumen Peneliti Muda
5. Dokumentasi kegiatan Peneliti Muda
6. Hasil Kajian Peneliti Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Peneliti Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Peneliti Muda
9. Laporan pelaksanaan kegiatan Peneliti Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/ informasi/ bahan kerja
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3555',
            'nama_jabatan' => 'Peneliti Madya',
            'nama_unit' => 'Peneliti Madya',
            'ikhtisar' => 'Melakukan penelitian, pengembangan dan/atau pengkajian ilmu pengetahuan dan teknologi',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 Sesuai kebutuhan bidang kepakaran',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji kompetensi teknis, kompetensi manajerial, dan kompetensi social kultural sesuai dengan standar kompetensi yang telah  disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Peneliti Madya
2. Data, Bahan dan Informasi terkait Peneliti Madya
3. Produk hukum terkait jabatan Peneliti Madya
4. Dokumen Peneliti Madya
5. Dokumentasi kegiatan Peneliti Madya
6. Hasil Kajian Peneliti Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Peneliti Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Peneliti Madya
9. Laporan pelaksanaan kegiatan Peneliti Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/ informasi/ bahan kerja
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3556',
            'nama_jabatan' => 'Peneliti Utama',
            'nama_unit' => 'Peneliti Utama',
            'ikhtisar' => 'Melakukan penelitian, pengembangan dan/atau pengkajian ilmu pengetahuan dan teknologi',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 Sesuai kebutuhan bidang kepakaran',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Mengikuti dan lulus uji kompetensi teknis, kompetensi manajerial, dan kompetensi social kultural sesuai dengan standar kompetensi yang telah  disusun oleh Instansi Pembina (dikecualikan berdasarkan PP Nomor 17 Tahun 2020 dan SE Menpanrb Nomor B/563/M.SM.02.00/2020)',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Peneliti Utama
2. Data, Bahan dan Informasi terkait Peneliti Utama
3. Produk hukum terkait jabatan Peneliti Utama
4. Dokumen Peneliti Utama
5. Dokumentasi kegiatan Peneliti Utama
6. Hasil Kajian Peneliti Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Peneliti Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Peneliti Utama
9. Laporan pelaksanaan kegiatan Peneliti Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/ informasi/ bahan kerja
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3557',
            'nama_jabatan' => 'Penera Terampil',
            'nama_unit' => 'Penera Terampil',
            'ikhtisar' => 'Melakukan peneraan yang meliputi pengelolaan instalasi uji dan peralatan atau perlengkapan standar tera, tera ulang UTTP, pelaksanaan tera dan tera ulang UTTP, pengujian UTTP, dan pengelolaan Cap Tanda Tera ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Jurusan Teknik atau  Matematika dan MIPA ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penera Terampil
2. Data, Bahan dan Informasi terkait Penera Terampil
3. Produk hukum terkait jabatan Penera Terampil
4. Dokumen Penera Terampil
5. Dokumentasi kegiatan Penera Terampil
6. Hasil Kajian Penera Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penera Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penera Terampil
9. Laporan pelaksanaan kegiatan Penera Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya peneraan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan peneraan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3558',
            'nama_jabatan' => 'Penera Mahir',
            'nama_unit' => 'Penera Mahir',
            'ikhtisar' => 'Melakukan peneraan yang meliputi pengelolaan instalasi uji dan peralatan atau perlengkapan standar tera, tera ulang UTTP, pelaksanaan tera dan tera ulang UTTP, pengujian UTTP, dan pengelolaan Cap Tanda Tera ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Jurusan Teknik atau  Matematika dan MIPA ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penera Mahir
2. Data, Bahan dan Informasi terkait Penera Mahir
3. Produk hukum terkait jabatan Penera Mahir
4. Dokumen Penera Mahir
5. Dokumentasi kegiatan Penera Mahir
6. Hasil Kajian Penera Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penera Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penera Mahir
9. Laporan pelaksanaan kegiatan Penera Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya peneraan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan peneraan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3559',
            'nama_jabatan' => 'Penera Penyelia',
            'nama_unit' => 'Penera Penyelia',
            'ikhtisar' => 'Melakukan peneraan yang meliputi pengelolaan instalasi uji dan peralatan atau perlengkapan standar tera, tera ulang UTTP, pelaksanaan tera dan tera ulang UTTP, pengujian UTTP, dan pengelolaan Cap Tanda Tera ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Jurusan Teknik atau  Matematika dan MIPA ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penera Penyelia
2. Data, Bahan dan Informasi terkait Penera Penyelia
3. Produk hukum terkait jabatan Penera Penyelia
4. Dokumen Penera Penyelia
5. Dokumentasi kegiatan Penera Penyelia
6. Hasil Kajian Penera Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penera Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penera Penyelia
9. Laporan pelaksanaan kegiatan Penera Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya peneraan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan peneraan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3560',
            'nama_jabatan' => 'Penera Pertama',
            'nama_unit' => 'Penera Pertama',
            'ikhtisar' => 'Melakukan peneraan yang meliputi pengelolaan instalasi uji dan peralatan atau perlengkapan standar tera, tera ulang UTTP, pelaksanaan tera dan tera ulang UTTP, pengujian UTTP, dan pengelolaan Cap Tanda Tera ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Teknik atau  Matematika dan MIPA ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penera Pertama
2. Data, Bahan dan Informasi terkait Penera Pertama
3. Produk hukum terkait jabatan Penera Pertama
4. Dokumen Penera Pertama
5. Dokumentasi kegiatan Penera Pertama
6. Hasil Kajian Penera Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penera Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penera Pertama
9. Laporan pelaksanaan kegiatan Penera Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya peneraan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan peneraan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3561',
            'nama_jabatan' => 'Penera Muda',
            'nama_unit' => 'Penera Muda',
            'ikhtisar' => 'Melakukan peneraan yang meliputi pengelolaan instalasi uji dan peralatan atau perlengkapan standar tera, tera ulang UTTP, pelaksanaan tera dan tera ulang UTTP, pengujian UTTP, dan pengelolaan Cap Tanda Tera ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Teknik atau  Matematika dan MIPA ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penera Muda
2. Data, Bahan dan Informasi terkait Penera Muda
3. Produk hukum terkait jabatan Penera Muda
4. Dokumen Penera Muda
5. Dokumentasi kegiatan Penera Muda
6. Hasil Kajian Penera Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penera Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penera Muda
9. Laporan pelaksanaan kegiatan Penera Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya peneraan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan peneraan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3562',
            'nama_jabatan' => 'Penera Madya',
            'nama_unit' => 'Penera Madya',
            'ikhtisar' => 'Melakukan peneraan yang meliputi pengelolaan instalasi uji dan peralatan atau perlengkapan standar tera, tera ulang UTTP, pelaksanaan tera dan tera ulang UTTP, pengujian UTTP, dan pengelolaan Cap Tanda Tera ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Teknik atau  Matematika dan MIPA ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penera Madya
2. Data, Bahan dan Informasi terkait Penera Madya
3. Produk hukum terkait jabatan Penera Madya
4. Dokumen Penera Madya
5. Dokumentasi kegiatan Penera Madya
6. Hasil Kajian Penera Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penera Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penera Madya
9. Laporan pelaksanaan kegiatan Penera Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya peneraan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan peneraan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3563',
            'nama_jabatan' => 'Penerjemah Pertama',
            'nama_unit' => 'Penerjemah Pertama',
            'ikhtisar' => 'Melakukan kegiatan penerjemahan tulis, penerjemahan lisan, pengalihaksaraan dan penerjemahan teks naskah kuno/arsip kuno/prasasti dan penyusunan naskah bahan terkemahan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Sastra atau bidang lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penerjemah Pertama
2. Data, Bahan dan Informasi terkait Penerjemah Pertama
3. Produk hukum terkait jabatan Penerjemah Pertama
4. Dokumen Penerjemah Pertama
5. Dokumentasi kegiatan Penerjemah Pertama
6. Hasil Kajian Penerjemah Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penerjemah Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penerjemah Pertama
9. Laporan pelaksanaan kegiatan Penerjemah Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Penerjemahan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penerjemahan data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3564',
            'nama_jabatan' => 'Penerjemah Muda',
            'nama_unit' => 'Penerjemah Muda',
            'ikhtisar' => 'Melakukan kegiatan penerjemahan tulis, penerjemahan lisan, pengalihaksaraan dan penerjemahan teks naskah kuno/arsip kuno/prasasti dan penyusunan naskah bahan terkemahan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Sastra atau bidang lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penerjemah Muda
2. Data, Bahan dan Informasi terkait Penerjemah Muda
3. Produk hukum terkait jabatan Penerjemah Muda
4. Dokumen Penerjemah Muda
5. Dokumentasi kegiatan Penerjemah Muda
6. Hasil Kajian Penerjemah Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penerjemah Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penerjemah Muda
9. Laporan pelaksanaan kegiatan Penerjemah Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Penerjemahan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penerjemahan data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3565',
            'nama_jabatan' => 'Penerjemah Madya',
            'nama_unit' => 'Penerjemah Madya',
            'ikhtisar' => 'Melakukan kegiatan penerjemahan tulis, penerjemahan lisan, pengalihaksaraan dan penerjemahan teks naskah kuno/arsip kuno/prasasti dan penyusunan naskah bahan terkemahan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Sastra atau bidang lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penerjemah Madya
2. Data, Bahan dan Informasi terkait Penerjemah Madya
3. Produk hukum terkait jabatan Penerjemah Madya
4. Dokumen Penerjemah Madya
5. Dokumentasi kegiatan Penerjemah Madya
6. Hasil Kajian Penerjemah Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penerjemah Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penerjemah Madya
9. Laporan pelaksanaan kegiatan Penerjemah Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Penerjemahan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penerjemahan data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3566',
            'nama_jabatan' => 'Penerjemah Utama',
            'nama_unit' => 'Penerjemah Utama',
            'ikhtisar' => 'Melakukan kegiatan penerjemahan tulis, penerjemahan lisan, pengalihaksaraan dan penerjemahan teks naskah kuno/arsip kuno/prasasti dan penyusunan naskah bahan terkemahan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Sastra atau bidang lain yang ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penerjemah Utama
2. Data, Bahan dan Informasi terkait Penerjemah Utama
3. Produk hukum terkait jabatan Penerjemah Utama
4. Dokumen Penerjemah Utama
5. Dokumentasi kegiatan Penerjemah Utama
6. Hasil Kajian Penerjemah Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Penerjemah Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penerjemah Utama
9. Laporan pelaksanaan kegiatan Penerjemah Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Penerjemahan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penerjemahan data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3567',
            'nama_jabatan' => 'Penilik Pertama',
            'nama_unit' => 'Penilik Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pengendalian mutu dan evaluasi dampak program pendidikan nonformal dan informal (PNFI).',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan bidang kependidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penilik Pertama
2. Data, Bahan dan Informasi terkait Penilik Pertama
3. Produk hukum terkait jabatan Penilik Pertama
4. Dokumen Penilik Pertama
5. Dokumentasi kegiatan Penilik Pertama
6. Hasil Kajian Penilik Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penilik Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penilik Pertama
9. Laporan pelaksanaan kegiatan Penilik Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3568',
            'nama_jabatan' => 'Penilik Muda',
            'nama_unit' => 'Penilik Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pengendalian mutu dan evaluasi dampak program pendidikan nonformal dan informal (PNFI).',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan bidang kependidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penilik Muda
2. Data, Bahan dan Informasi terkait Penilik Muda
3. Produk hukum terkait jabatan Penilik Muda
4. Dokumen Penilik Muda
5. Dokumentasi kegiatan Penilik Muda
6. Hasil Kajian Penilik Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penilik Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penilik Muda
9. Laporan pelaksanaan kegiatan Penilik Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3569',
            'nama_jabatan' => 'Penilik Madya',
            'nama_unit' => 'Penilik Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pengendalian mutu dan evaluasi dampak program pendidikan nonformal dan informal (PNFI).',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan bidang kependidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penilik Madya
2. Data, Bahan dan Informasi terkait Penilik Madya
3. Produk hukum terkait jabatan Penilik Madya
4. Dokumen Penilik Madya
5. Dokumentasi kegiatan Penilik Madya
6. Hasil Kajian Penilik Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penilik Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penilik Madya
9. Laporan pelaksanaan kegiatan Penilik Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3570',
            'nama_jabatan' => 'Penilik Utama',
            'nama_unit' => 'Penilik Utama',
            'ikhtisar' => 'Melaksanakan kegiatan pengendalian mutu dan evaluasi dampak program pendidikan nonformal dan informal (PNFI).',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan bidang kependidikan yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penilik Utama
2. Data, Bahan dan Informasi terkait Penilik Utama
3. Produk hukum terkait jabatan Penilik Utama
4. Dokumen Penilik Utama
5. Dokumentasi kegiatan Penilik Utama
6. Hasil Kajian Penilik Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Penilik Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penilik Utama
9. Laporan pelaksanaan kegiatan Penilik Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3571',
            'nama_jabatan' => 'Pengantar Kerja Pertama',
            'nama_unit' => 'Pengantar Kerja Pertama',
            'ikhtisar' => 'Melakukan kegiatan pelayanan antar kerja',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Ilmu Ekonomi, Ilmu Sosial Humaniora,  Ilmu Pendidikan serta Rumpun Seni, Desain dan Media serta kualifikasi  lain yang ditentukan oleh Menteri Tenaga Kerja dan Transmigrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat JF Pengantar Kerja',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengantar Kerja Pertama
2. Data, Bahan dan Informasi terkait Pengantar Kerja Pertama
3. Produk hukum terkait jabatan Pengantar Kerja Pertama
4. Dokumen Pengantar Kerja Pertama
5. Dokumentasi kegiatan Pengantar Kerja Pertama
6. Hasil Kajian Pengantar Kerja Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengantar Kerja Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengantar Kerja Pertama
9. Laporan pelaksanaan kegiatan Pengantar Kerja Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Menyusun data secara obyektif dna valid
- Melaksanakan kegiatan antar kerja sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Mencari dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3572',
            'nama_jabatan' => 'Pengantar Kerja Muda',
            'nama_unit' => 'Pengantar Kerja Muda',
            'ikhtisar' => 'Melakukan kegiatan pelayanan antar kerja',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Ilmu Ekonomi, Ilmu Sosial Humaniora,  Ilmu Pendidikan serta Rumpun Seni, Desain dan Media serta kualifikasi  lain yang ditentukan oleh Menteri Tenaga Kerja dan Transmigrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat JF Pengantar Kerja',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengantar Kerja Muda
2. Data, Bahan dan Informasi terkait Pengantar Kerja Muda
3. Produk hukum terkait jabatan Pengantar Kerja Muda
4. Dokumen Pengantar Kerja Muda
5. Dokumentasi kegiatan Pengantar Kerja Muda
6. Hasil Kajian Pengantar Kerja Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengantar Kerja Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengantar Kerja Muda
9. Laporan pelaksanaan kegiatan Pengantar Kerja Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Menyusun data secara obyektif dna valid
- Melaksanakan kegiatan antar kerja sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Mencari dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3573',
            'nama_jabatan' => 'Pengantar Kerja Madya',
            'nama_unit' => 'Pengantar Kerja Madya',
            'ikhtisar' => 'Melakukan kegiatan pelayanan antar kerja',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Ilmu Ekonomi, Ilmu Sosial Humaniora,  Ilmu Pendidikan serta Rumpun Seni, Desain dan Media serta kualifikasi  lain yang ditentukan oleh Menteri Tenaga Kerja dan Transmigrasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat JF Pengantar Kerja',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengantar Kerja Madya
2. Data, Bahan dan Informasi terkait Pengantar Kerja Madya
3. Produk hukum terkait jabatan Pengantar Kerja Madya
4. Dokumen Pengantar Kerja Madya
5. Dokumentasi kegiatan Pengantar Kerja Madya
6. Hasil Kajian Pengantar Kerja Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengantar Kerja Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengantar Kerja Madya
9. Laporan pelaksanaan kegiatan Pengantar Kerja Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Menyusun data secara obyektif dna valid
- Melaksanakan kegiatan antar kerja sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Mencari dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3574',
            'nama_jabatan' => 'Pengawas Benih Tanaman Pemula',
            'nama_unit' => 'Pengawas Benih Tanaman Pemula',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di bidang Pertanian;',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Pemula
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Pemula
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Pemula
4. Dokumen Pengawas Benih Tanaman Pemula
5. Dokumentasi kegiatan Pengawas Benih Tanaman Pemula
6. Hasil Kajian Pengawas Benih Tanaman Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Pemula
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3575',
            'nama_jabatan' => 'Pengawas Benih Tanaman Terampil',
            'nama_unit' => 'Pengawas Benih Tanaman Terampil',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di bidang Pertanian;',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Terampil
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Terampil
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Terampil
4. Dokumen Pengawas Benih Tanaman Terampil
5. Dokumentasi kegiatan Pengawas Benih Tanaman Terampil
6. Hasil Kajian Pengawas Benih Tanaman Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Terampil
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3576',
            'nama_jabatan' => 'Pengawas Benih Tanaman Mahir',
            'nama_unit' => 'Pengawas Benih Tanaman Mahir',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di bidang Pertanian;',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Mahir
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Mahir
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Mahir
4. Dokumen Pengawas Benih Tanaman Mahir
5. Dokumentasi kegiatan Pengawas Benih Tanaman Mahir
6. Hasil Kajian Pengawas Benih Tanaman Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Mahir
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3577',
            'nama_jabatan' => 'Pengawas Benih Tanaman Penyelia',
            'nama_unit' => 'Pengawas Benih Tanaman Penyelia',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di bidang Pertanian;',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Penyelia
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Penyelia
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Penyelia
4. Dokumen Pengawas Benih Tanaman Penyelia
5. Dokumentasi kegiatan Pengawas Benih Tanaman Penyelia
6. Hasil Kajian Pengawas Benih Tanaman Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Penyelia
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3578',
            'nama_jabatan' => 'Pengawas Benih Tanaman Pertama',
            'nama_unit' => 'Pengawas Benih Tanaman Pertama',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di bidang pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Pertama
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Pertama
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Pertama
4. Dokumen Pengawas Benih Tanaman Pertama
5. Dokumentasi kegiatan Pengawas Benih Tanaman Pertama
6. Hasil Kajian Pengawas Benih Tanaman Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Pertama
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3579',
            'nama_jabatan' => 'Pengawas Benih Tanaman Muda',
            'nama_unit' => 'Pengawas Benih Tanaman Muda',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di bidang pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Muda
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Muda
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Muda
4. Dokumen Pengawas Benih Tanaman Muda
5. Dokumentasi kegiatan Pengawas Benih Tanaman Muda
6. Hasil Kajian Pengawas Benih Tanaman Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Muda
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3580',
            'nama_jabatan' => 'Pengawas Benih Tanaman Madya',
            'nama_unit' => 'Pengawas Benih Tanaman Madya',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan benih tanaman yang terdiri dari penilaian kultivar, sertifikasi, pengujian mutu benih, pengawasan peredaran benih tanaman, dan penerapan sistem manajemen mutu',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di bidang pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat fungsional di bidang Pengawas Benih Tanaman',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Benih Tanaman Madya
2. Data, Bahan dan Informasi terkait Pengawas Benih Tanaman Madya
3. Produk hukum terkait jabatan Pengawas Benih Tanaman Madya
4. Dokumen Pengawas Benih Tanaman Madya
5. Dokumentasi kegiatan Pengawas Benih Tanaman Madya
6. Hasil Kajian Pengawas Benih Tanaman Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Benih Tanaman Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Benih Tanaman Madya
9. Laporan pelaksanaan kegiatan Pengawas Benih Tanaman Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan benih secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas benih',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3581',
            'nama_jabatan' => 'Pengawas Bibit Ternak Terampil',
            'nama_unit' => 'Pengawas Bibit Ternak Terampil',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan bibit ternak yang terdiri dari pengawasan mutu bibit, pengawasan mutu benih, serta pengawasan peredaran bibit dan benih',
            'pdd_formal' => 'SNAKMA, SPP, SMK',
            'pdd_jurusan' => 'SNAKMA, SPP, SMK Bidang Peternakan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Bibit Ternak Terampil
2. Data, Bahan dan Informasi terkait Pengawas Bibit Ternak Terampil
3. Produk hukum terkait jabatan Pengawas Bibit Ternak Terampil
4. Dokumen Pengawas Bibit Ternak Terampil
5. Dokumentasi kegiatan Pengawas Bibit Ternak Terampil
6. Hasil Kajian Pengawas Bibit Ternak Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Bibit Ternak Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Bibit Ternak Terampil
9. Laporan pelaksanaan kegiatan Pengawas Bibit Ternak Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan bibit ternak secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas bibit tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3582',
            'nama_jabatan' => 'Pengawas Bibit Ternak Mahir',
            'nama_unit' => 'Pengawas Bibit Ternak Mahir',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan bibit ternak yang terdiri dari pengawasan mutu bibit, pengawasan mutu benih, serta pengawasan peredaran bibit dan benih',
            'pdd_formal' => 'SNAKMA, SPP, SMK',
            'pdd_jurusan' => 'SNAKMA, SPP, SMK Bidang Peternakan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Bibit Ternak Mahir
2. Data, Bahan dan Informasi terkait Pengawas Bibit Ternak Mahir
3. Produk hukum terkait jabatan Pengawas Bibit Ternak Mahir
4. Dokumen Pengawas Bibit Ternak Mahir
5. Dokumentasi kegiatan Pengawas Bibit Ternak Mahir
6. Hasil Kajian Pengawas Bibit Ternak Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Bibit Ternak Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Bibit Ternak Mahir
9. Laporan pelaksanaan kegiatan Pengawas Bibit Ternak Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan bibit ternak secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas bibit tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3583',
            'nama_jabatan' => 'Pengawas Bibit Ternak Penyelia',
            'nama_unit' => 'Pengawas Bibit Ternak Penyelia',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan bibit ternak yang terdiri dari pengawasan mutu bibit, pengawasan mutu benih, serta pengawasan peredaran bibit dan benih',
            'pdd_formal' => 'SNAKMA, SPP, SMK',
            'pdd_jurusan' => 'SNAKMA, SPP, SMK Bidang Peternakan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Bibit Ternak Penyelia
2. Data, Bahan dan Informasi terkait Pengawas Bibit Ternak Penyelia
3. Produk hukum terkait jabatan Pengawas Bibit Ternak Penyelia
4. Dokumen Pengawas Bibit Ternak Penyelia
5. Dokumentasi kegiatan Pengawas Bibit Ternak Penyelia
6. Hasil Kajian Pengawas Bibit Ternak Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Bibit Ternak Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Bibit Ternak Penyelia
9. Laporan pelaksanaan kegiatan Pengawas Bibit Ternak Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan bibit ternak secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas bibit tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3584',
            'nama_jabatan' => 'Pengawas Bibit Ternak Pertama',
            'nama_unit' => 'Pengawas Bibit Ternak Pertama',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan bibit ternak yang terdiri dari pengawasan mutu bibit, pengawasan mutu benih, serta pengawasan peredaran bibit dan benih',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV di bidang peternakan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Bibit Ternak Pertama
2. Data, Bahan dan Informasi terkait Pengawas Bibit Ternak Pertama
3. Produk hukum terkait jabatan Pengawas Bibit Ternak Pertama
4. Dokumen Pengawas Bibit Ternak Pertama
5. Dokumentasi kegiatan Pengawas Bibit Ternak Pertama
6. Hasil Kajian Pengawas Bibit Ternak Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Bibit Ternak Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Bibit Ternak Pertama
9. Laporan pelaksanaan kegiatan Pengawas Bibit Ternak Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan bibit ternak secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas bibit tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3585',
            'nama_jabatan' => 'Pengawas Bibit Ternak Muda',
            'nama_unit' => 'Pengawas Bibit Ternak Muda',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan bibit ternak yang terdiri dari pengawasan mutu bibit, pengawasan mutu benih, serta pengawasan peredaran bibit dan benih',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV di bidang peternakan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Bibit Ternak Muda
2. Data, Bahan dan Informasi terkait Pengawas Bibit Ternak Muda
3. Produk hukum terkait jabatan Pengawas Bibit Ternak Muda
4. Dokumen Pengawas Bibit Ternak Muda
5. Dokumentasi kegiatan Pengawas Bibit Ternak Muda
6. Hasil Kajian Pengawas Bibit Ternak Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Bibit Ternak Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Bibit Ternak Muda
9. Laporan pelaksanaan kegiatan Pengawas Bibit Ternak Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan bibit ternak secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas bibit tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3586',
            'nama_jabatan' => 'Pengawas Bibit Ternak Madya',
            'nama_unit' => 'Pengawas Bibit Ternak Madya',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengevaluasi, mengembangkan dan melaporkan kegiatan pengawasan bibit ternak yang terdiri dari pengawasan mutu bibit, pengawasan mutu benih, serta pengawasan peredaran bibit dan benih',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV di bidang peternakan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Bibit Ternak Madya
2. Data, Bahan dan Informasi terkait Pengawas Bibit Ternak Madya
3. Produk hukum terkait jabatan Pengawas Bibit Ternak Madya
4. Dokumen Pengawas Bibit Ternak Madya
5. Dokumentasi kegiatan Pengawas Bibit Ternak Madya
6. Hasil Kajian Pengawas Bibit Ternak Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Bibit Ternak Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Bibit Ternak Madya
9. Laporan pelaksanaan kegiatan Pengawas Bibit Ternak Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan bibit ternak secara obyektif dan seusai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa kualitas dan kuantitas bibit tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3587',
            'nama_jabatan' => 'Pengawas Ketenagakerjaan Pertama',
            'nama_unit' => 'Pengawas Ketenagakerjaan Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pembinaan, pemeriksaan, pengujian, penyidikan, dan pengembangan sistem pengawasan ketenagakerjaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1) Diploma IV di Bidang Teknik, Sosial dan Politik, Hukum, Ekonomi, Kedokteran, Kesehatan Masyarakat, Higiene Perusahaan dan Kesehatan Kerja, Keselamatan dan Kesehatan Kerja, Psikologi, Teknologi Informasi, Matematika dan Ilmu Pengetahuan Alam',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Ketenagakerjaan Pertama
2. Data, Bahan dan Informasi terkait Pengawas Ketenagakerjaan Pertama
3. Produk hukum terkait jabatan Pengawas Ketenagakerjaan Pertama
4. Dokumen Pengawas Ketenagakerjaan Pertama
5. Dokumentasi kegiatan Pengawas Ketenagakerjaan Pertama
6. Hasil Kajian Pengawas Ketenagakerjaan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Ketenagakerjaan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Ketenagakerjaan Pertama
9. Laporan pelaksanaan kegiatan Pengawas Ketenagakerjaan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pembinaan dan pengawasan secara obyektif sesuai dengan prosedure yang berlaku
- Menyusun kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pemeriksaan
Melakukan penyidikan
Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3588',
            'nama_jabatan' => 'Pengawas Ketenagakerjaan Muda',
            'nama_unit' => 'Pengawas Ketenagakerjaan Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pembinaan, pemeriksaan, pengujian, penyidikan, dan pengembangan sistem pengawasan ketenagakerjaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1) Diploma IV di Bidang Teknik, Sosial dan Politik, Hukum, Ekonomi, Kedokteran, Kesehatan Masyarakat, Higiene Perusahaan dan Kesehatan Kerja, Keselamatan dan Kesehatan Kerja, Psikologi, Teknologi Informasi, Matematika dan Ilmu Pengetahuan Alam',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Ketenagakerjaan Muda
2. Data, Bahan dan Informasi terkait Pengawas Ketenagakerjaan Muda
3. Produk hukum terkait jabatan Pengawas Ketenagakerjaan Muda
4. Dokumen Pengawas Ketenagakerjaan Muda
5. Dokumentasi kegiatan Pengawas Ketenagakerjaan Muda
6. Hasil Kajian Pengawas Ketenagakerjaan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Ketenagakerjaan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Ketenagakerjaan Muda
9. Laporan pelaksanaan kegiatan Pengawas Ketenagakerjaan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pembinaan dan pengawasan secara obyektif sesuai dengan prosedure yang berlaku
- Menyusun kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pemeriksaan
Melakukan penyidikan
Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3589',
            'nama_jabatan' => 'Pengawas Ketenagakerjaan Madya',
            'nama_unit' => 'Pengawas Ketenagakerjaan Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pembinaan, pemeriksaan, pengujian, penyidikan, dan pengembangan sistem pengawasan ketenagakerjaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1) Diploma IV di Bidang Teknik, Sosial dan Politik, Hukum, Ekonomi, Kedokteran, Kesehatan Masyarakat, Higiene Perusahaan dan Kesehatan Kerja, Keselamatan dan Kesehatan Kerja, Psikologi, Teknologi Informasi, Matematika dan Ilmu Pengetahuan Alam',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Ketenagakerjaan Madya
2. Data, Bahan dan Informasi terkait Pengawas Ketenagakerjaan Madya
3. Produk hukum terkait jabatan Pengawas Ketenagakerjaan Madya
4. Dokumen Pengawas Ketenagakerjaan Madya
5. Dokumentasi kegiatan Pengawas Ketenagakerjaan Madya
6. Hasil Kajian Pengawas Ketenagakerjaan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Ketenagakerjaan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Ketenagakerjaan Madya
9. Laporan pelaksanaan kegiatan Pengawas Ketenagakerjaan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pembinaan dan pengawasan secara obyektif sesuai dengan prosedure yang berlaku
- Menyusun kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pemeriksaan
Melakukan penyidikan
Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3590',
            'nama_jabatan' => 'Pengawas Lingkungan Hidup Pertama',
            'nama_unit' => 'Pengawas Lingkungan Hidup Pertama',
            'ikhtisar' => 'Melaksanakan pengawasan dan/atau penegakan hukum lingkungan hidup.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV Ilmu Alam',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Lingkungan Hidup Pertama
2. Data, Bahan dan Informasi terkait Pengawas Lingkungan Hidup Pertama
3. Produk hukum terkait jabatan Pengawas Lingkungan Hidup Pertama
4. Dokumen Pengawas Lingkungan Hidup Pertama
5. Dokumentasi kegiatan Pengawas Lingkungan Hidup Pertama
6. Hasil Kajian Pengawas Lingkungan Hidup Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Lingkungan Hidup Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Lingkungan Hidup Pertama
9. Laporan pelaksanaan kegiatan Pengawas Lingkungan Hidup Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan pengelolaan lingkungan hidup secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa dan mengawasi pengelolaan lingkungan hidup',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3591',
            'nama_jabatan' => 'Pengawas Lingkungan Hidup Muda',
            'nama_unit' => 'Pengawas Lingkungan Hidup Muda',
            'ikhtisar' => 'Melaksanakan pengawasan dan/atau penegakan hukum lingkungan hidup.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV Ilmu Alam',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Lingkungan Hidup Muda
2. Data, Bahan dan Informasi terkait Pengawas Lingkungan Hidup Muda
3. Produk hukum terkait jabatan Pengawas Lingkungan Hidup Muda
4. Dokumen Pengawas Lingkungan Hidup Muda
5. Dokumentasi kegiatan Pengawas Lingkungan Hidup Muda
6. Hasil Kajian Pengawas Lingkungan Hidup Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Lingkungan Hidup Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Lingkungan Hidup Muda
9. Laporan pelaksanaan kegiatan Pengawas Lingkungan Hidup Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan pengelolaan lingkungan hidup secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa dan mengawasi pengelolaan lingkungan hidup',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3592',
            'nama_jabatan' => 'Pengawas Lingkungan Hidup Madya',
            'nama_unit' => 'Pengawas Lingkungan Hidup Madya',
            'ikhtisar' => 'Melaksanakan pengawasan dan/atau penegakan hukum lingkungan hidup.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV Ilmu Alam',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Lingkungan Hidup Madya
2. Data, Bahan dan Informasi terkait Pengawas Lingkungan Hidup Madya
3. Produk hukum terkait jabatan Pengawas Lingkungan Hidup Madya
4. Dokumen Pengawas Lingkungan Hidup Madya
5. Dokumentasi kegiatan Pengawas Lingkungan Hidup Madya
6. Hasil Kajian Pengawas Lingkungan Hidup Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Lingkungan Hidup Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Lingkungan Hidup Madya
9. Laporan pelaksanaan kegiatan Pengawas Lingkungan Hidup Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan pengelolaan lingkungan hidup secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Memeriksa dan mengawasi pengelolaan lingkungan hidup',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3593',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Pemula',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Pemula',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Pemula
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Pemula
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Pemula
4. Dokumen Pengawas Mutu Hasil Pertanian Pemula
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Pemula
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Pemula
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3594',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Terampil',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Terampil',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Terampil
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Terampil
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Terampil
4. Dokumen Pengawas Mutu Hasil Pertanian Terampil
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Terampil
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Terampil
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3595',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Mahir',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Mahir',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Mahir
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Mahir
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Mahir
4. Dokumen Pengawas Mutu Hasil Pertanian Mahir
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Mahir
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Mahir
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3596',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Penyelia',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Penyelia',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Penyelia
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Penyelia
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Penyelia
4. Dokumen Pengawas Mutu Hasil Pertanian Penyelia
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Penyelia
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Penyelia
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3597',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Pertama',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Pertama',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Pertama
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Pertama
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Pertama
4. Dokumen Pengawas Mutu Hasil Pertanian Pertama
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Pertama
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Pertama
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid
- Melakukan analisa / kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi
- Melakukan analisa data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3598',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Muda',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Muda',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Muda
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Muda
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Muda
4. Dokumen Pengawas Mutu Hasil Pertanian Muda
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Muda
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Muda
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid
- Melakukan analisa / kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi
- Melakukan analisa data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3599',
            'nama_jabatan' => 'Pengawas Mutu Hasil Pertanian Madya',
            'nama_unit' => 'Pengawas Mutu Hasil Pertanian Madya',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu hasil pertanian serta pengembangan sistem pengawasan dan pengujian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Hasil Pertanian Madya
2. Data, Bahan dan Informasi terkait Pengawas Mutu Hasil Pertanian Madya
3. Produk hukum terkait jabatan Pengawas Mutu Hasil Pertanian Madya
4. Dokumen Pengawas Mutu Hasil Pertanian Madya
5. Dokumentasi kegiatan Pengawas Mutu Hasil Pertanian Madya
6. Hasil Kajian Pengawas Mutu Hasil Pertanian Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Hasil Pertanian Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Hasil Pertanian Madya
9. Laporan pelaksanaan kegiatan Pengawas Mutu Hasil Pertanian Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid
- Melakukan analisa / kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu hasil pertanian
- Mengumpulkan data dan informasi
- Melakukan analisa data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3600',
            'nama_jabatan' => 'Pengawas Mutu Pakan Pemula',
            'nama_unit' => 'Pengawas Mutu Pakan Pemula',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan/ Analis Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Pemula
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Pemula
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Pemula
4. Dokumen Pengawas Mutu Pakan Pemula
5. Dokumentasi kegiatan Pengawas Mutu Pakan Pemula
6. Hasil Kajian Pengawas Mutu Pakan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Pemula
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3601',
            'nama_jabatan' => 'Pengawas Mutu Pakan Terampil',
            'nama_unit' => 'Pengawas Mutu Pakan Terampil',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan/ Analis Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Terampil
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Terampil
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Terampil
4. Dokumen Pengawas Mutu Pakan Terampil
5. Dokumentasi kegiatan Pengawas Mutu Pakan Terampil
6. Hasil Kajian Pengawas Mutu Pakan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Terampil
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3602',
            'nama_jabatan' => 'Pengawas Mutu Pakan Mahir',
            'nama_unit' => 'Pengawas Mutu Pakan Mahir',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan/ Analis Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Mahir
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Mahir
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Mahir
4. Dokumen Pengawas Mutu Pakan Mahir
5. Dokumentasi kegiatan Pengawas Mutu Pakan Mahir
6. Hasil Kajian Pengawas Mutu Pakan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Mahir
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3603',
            'nama_jabatan' => 'Pengawas Mutu Pakan Penyelia',
            'nama_unit' => 'Pengawas Mutu Pakan Penyelia',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'SPP/SNAKMA dan SMK',
            'pdd_jurusan' => 'SPP/SNAKMA dan SMK di Bidang Peternakan/ Analis Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Penyelia
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Penyelia
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Penyelia
4. Dokumen Pengawas Mutu Pakan Penyelia
5. Dokumentasi kegiatan Pengawas Mutu Pakan Penyelia
6. Hasil Kajian Pengawas Mutu Pakan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Penyelia
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3604',
            'nama_jabatan' => 'Pengawas Mutu Pakan Pertama',
            'nama_unit' => 'Pengawas Mutu Pakan Pertama',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV di Bidang Peternakan/Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Pertama
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Pertama
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Pertama
4. Dokumen Pengawas Mutu Pakan Pertama
5. Dokumentasi kegiatan Pengawas Mutu Pakan Pertama
6. Hasil Kajian Pengawas Mutu Pakan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Pertama
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid
- Melakukan analisa / kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi
- Melakukan analisa data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3605',
            'nama_jabatan' => 'Pengawas Mutu Pakan Muda',
            'nama_unit' => 'Pengawas Mutu Pakan Muda',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV di Bidang Peternakan/Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Muda
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Muda
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Muda
4. Dokumen Pengawas Mutu Pakan Muda
5. Dokumentasi kegiatan Pengawas Mutu Pakan Muda
6. Hasil Kajian Pengawas Mutu Pakan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Muda
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid
- Melakukan analisa / kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi
- Melakukan analisa data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3606',
            'nama_jabatan' => 'Pengawas Mutu Pakan Madya',
            'nama_unit' => 'Pengawas Mutu Pakan Madya',
            'ikhtisar' => 'Melakukan pengawasan dan pengujian mutu pakan serta pengembangan sistem dan metode pengawasan dan pengujian mutu pakan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV di Bidang Peternakan/Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Mutu Pakan Madya
2. Data, Bahan dan Informasi terkait Pengawas Mutu Pakan Madya
3. Produk hukum terkait jabatan Pengawas Mutu Pakan Madya
4. Dokumen Pengawas Mutu Pakan Madya
5. Dokumentasi kegiatan Pengawas Mutu Pakan Madya
6. Hasil Kajian Pengawas Mutu Pakan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Mutu Pakan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Mutu Pakan Madya
9. Laporan pelaksanaan kegiatan Pengawas Mutu Pakan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak secara obyektif sesuai dengan prosedur yang berlaku
- Mengumpulkan data secara valid
- Melakukan analisa / kajian secara obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pengujian mutu pakan ternak
- Mengumpulkan data dan informasi
- Melakukan analisa data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3607',
            'nama_jabatan' => 'Pengawas Perikanan Terampil',
            'nama_unit' => 'Pengawas Perikanan Terampil',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'SUPM/SMK/D III',
            'pdd_jurusan' => 'SUPM/SMK/D III di Bidang Kelautan dan Perikanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Terampil
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Terampil
3. Produk hukum terkait jabatan Pengawas Perikanan Terampil
4. Dokumen Pengawas Perikanan Terampil
5. Dokumentasi kegiatan Pengawas Perikanan Terampil
6. Hasil Kajian Pengawas Perikanan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Terampil
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3608',
            'nama_jabatan' => 'Pengawas Perikanan Mahir',
            'nama_unit' => 'Pengawas Perikanan Mahir',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'SUPM/SMK/D III',
            'pdd_jurusan' => 'SUPM/SMK/D III di Bidang Kelautan dan Perikanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Mahir
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Mahir
3. Produk hukum terkait jabatan Pengawas Perikanan Mahir
4. Dokumen Pengawas Perikanan Mahir
5. Dokumentasi kegiatan Pengawas Perikanan Mahir
6. Hasil Kajian Pengawas Perikanan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Mahir
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3609',
            'nama_jabatan' => 'Pengawas Perikanan Penyelia',
            'nama_unit' => 'Pengawas Perikanan Penyelia',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'SUPM/SMK/D III',
            'pdd_jurusan' => 'SUPM/SMK/D III di Bidang Kelautan dan Perikanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Penyelia
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Penyelia
3. Produk hukum terkait jabatan Pengawas Perikanan Penyelia
4. Dokumen Pengawas Perikanan Penyelia
5. Dokumentasi kegiatan Pengawas Perikanan Penyelia
6. Hasil Kajian Pengawas Perikanan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Penyelia
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3610',
            'nama_jabatan' => 'Pengawas Perikanan Pertama',
            'nama_unit' => 'Pengawas Perikanan Pertama',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/ Bidang Kelautan atau kualifikasi pendidikan lain yg ditentukan Instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Pertama
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Pertama
3. Produk hukum terkait jabatan Pengawas Perikanan Pertama
4. Dokumen Pengawas Perikanan Pertama
5. Dokumentasi kegiatan Pengawas Perikanan Pertama
6. Hasil Kajian Pengawas Perikanan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Pertama
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3611',
            'nama_jabatan' => 'Pengawas Perikanan Muda',
            'nama_unit' => 'Pengawas Perikanan Muda',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/ Bidang Kelautan atau kualifikasi pendidikan lain yg ditentukan Instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Muda
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Muda
3. Produk hukum terkait jabatan Pengawas Perikanan Muda
4. Dokumen Pengawas Perikanan Muda
5. Dokumentasi kegiatan Pengawas Perikanan Muda
6. Hasil Kajian Pengawas Perikanan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Muda
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3612',
            'nama_jabatan' => 'Pengawas Perikanan Madya',
            'nama_unit' => 'Pengawas Perikanan Madya',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/ Bidang Kelautan atau kualifikasi pendidikan lain yg ditentukan Instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Madya
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Madya
3. Produk hukum terkait jabatan Pengawas Perikanan Madya
4. Dokumen Pengawas Perikanan Madya
5. Dokumentasi kegiatan Pengawas Perikanan Madya
6. Hasil Kajian Pengawas Perikanan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Madya
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3613',
            'nama_jabatan' => 'Pengawas Perikanan Utama',
            'nama_unit' => 'Pengawas Perikanan Utama',
            'ikhtisar' => 'Melakukan kegiatan pengawasan terhadap pengelolaan sumber daya kelautan dan perikanan, untuk menegakkan tertib pelaksanaan peraturan perundang-undangan dan ketentuan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/ Bidang Kelautan atau kualifikasi pendidikan lain yg ditentukan Instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Perikanan Utama
2. Data, Bahan dan Informasi terkait Pengawas Perikanan Utama
3. Produk hukum terkait jabatan Pengawas Perikanan Utama
4. Dokumen Pengawas Perikanan Utama
5. Dokumentasi kegiatan Pengawas Perikanan Utama
6. Hasil Kajian Pengawas Perikanan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Perikanan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Perikanan Utama
9. Laporan pelaksanaan kegiatan Pengawas Perikanan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengawasan perikanan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengawasan perikanan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3614',
            'nama_jabatan' => 'Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama',
            'nama_unit' => 'Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pengawasan atas penyelenggaraan urusan pemerintahan konkuren yang meliputi reviu, monitoring, evaluasi, dan pemeriksaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Ilmu Hukum, Ekonomi, Akuntansi, Sosial, Administrasi, Teknik, Informatika, Politik dan Pemerintahan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
2. Data, Bahan dan Informasi terkait Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
3. Produk hukum terkait jabatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
4. Dokumen Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
5. Dokumentasi kegiatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
6. Hasil Kajian Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
9. Laporan pelaksanaan kegiatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan secara obyektif sesuai dengan prosedure yang berlaku
- Mengumpulkan data dan informasi secara valid dan obyektif
- Melaksanakan analisa / kajian secra obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pemeriksaan
- Melaksanakan pengumpulan data dan informasi
- Menyusun Kajian dan analisa',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3615',
            'nama_jabatan' => 'Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda',
            'nama_unit' => 'Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pengawasan atas penyelenggaraan urusan pemerintahan konkuren yang meliputi reviu, monitoring, evaluasi, dan pemeriksaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Ilmu Hukum, Ekonomi, Akuntansi, Sosial, Administrasi, Teknik, Informatika, Politik dan Pemerintahan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
2. Data, Bahan dan Informasi terkait Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
3. Produk hukum terkait jabatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
4. Dokumen Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
5. Dokumentasi kegiatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
6. Hasil Kajian Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
9. Laporan pelaksanaan kegiatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan secara obyektif sesuai dengan prosedure yang berlaku
- Mengumpulkan data dan informasi secara valid dan obyektif
- Melaksanakan analisa / kajian secra obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pemeriksaan
- Melaksanakan pengumpulan data dan informasi
- Menyusun Kajian dan analisa',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3616',
            'nama_jabatan' => 'Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya',
            'nama_unit' => 'Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pengawasan atas penyelenggaraan urusan pemerintahan konkuren yang meliputi reviu, monitoring, evaluasi, dan pemeriksaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Ilmu Hukum, Ekonomi, Akuntansi, Sosial, Administrasi, Teknik, Informatika, Politik dan Pemerintahan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
2. Data, Bahan dan Informasi terkait Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
3. Produk hukum terkait jabatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
4. Dokumen Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
5. Dokumentasi kegiatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
6. Hasil Kajian Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
9. Laporan pelaksanaan kegiatan Pengawas Penyelenggaraan Urusan Pemerintahan Daerah Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengawasan secara obyektif sesuai dengan prosedure yang berlaku
- Mengumpulkan data dan informasi secara valid dan obyektif
- Melaksanakan analisa / kajian secra obyektif',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan dan pemeriksaan
- Melaksanakan pengumpulan data dan informasi
- Menyusun Kajian dan analisa',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3617',
            'nama_jabatan' => 'Pengawas Sekolah Muda',
            'nama_unit' => 'Pengawas Sekolah Muda',
            'ikhtisar' => 'Melaksanakan tugas pengawasan akademik dan manajerial pada satuan pendidikan yg  meliputi penyusunan program pengawasan, pelaksanaan pembinaan, pemantauan  pelaksanaan 8 (delapan) SNP, penilaian, pembimbingan dan pelatihan professional Guru, evaluasi hasil pelaksanaan program pengawasan, dan pelaksanaan tugas kepengawasan  di daerah khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)IDiploma IV di Bidang Pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah megikuti diklat fungsional calon Pengawas  Sekolah dan memperoleh STTPP',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Sekolah Muda
2. Data, Bahan dan Informasi terkait Pengawas Sekolah Muda
3. Produk hukum terkait jabatan Pengawas Sekolah Muda
4. Dokumen Pengawas Sekolah Muda
5. Dokumentasi kegiatan Pengawas Sekolah Muda
6. Hasil Kajian Pengawas Sekolah Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Sekolah Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Sekolah Muda
9. Laporan pelaksanaan kegiatan Pengawas Sekolah Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan secara obyektif sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Memilih dan menentukan metode kerja, 
- Menilai kinerja Guru dan kepala sekolah, 
- Menentukan dan/atau mengusulkan program 
- Melakukan pembinaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3618',
            'nama_jabatan' => 'Pengawas Sekolah Madya',
            'nama_unit' => 'Pengawas Sekolah Madya',
            'ikhtisar' => 'Melaksanakan tugas pengawasan akademik dan manajerial pada satuan pendidikan yg  meliputi penyusunan program pengawasan, pelaksanaan pembinaan, pemantauan  pelaksanaan 8 (delapan) SNP, penilaian, pembimbingan dan pelatihan professional Guru, evaluasi hasil pelaksanaan program pengawasan, dan pelaksanaan tugas kepengawasan  di daerah khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)IDiploma IV di Bidang Pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah megikuti diklat fungsional calon Pengawas  Sekolah dan memperoleh STTPP',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Sekolah Madya
2. Data, Bahan dan Informasi terkait Pengawas Sekolah Madya
3. Produk hukum terkait jabatan Pengawas Sekolah Madya
4. Dokumen Pengawas Sekolah Madya
5. Dokumentasi kegiatan Pengawas Sekolah Madya
6. Hasil Kajian Pengawas Sekolah Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Sekolah Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Sekolah Madya
9. Laporan pelaksanaan kegiatan Pengawas Sekolah Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan secara obyektif sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Memilih dan menentukan metode kerja, 
- Menilai kinerja Guru dan kepala sekolah, 
- Menentukan dan/atau mengusulkan program 
- Melakukan pembinaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3619',
            'nama_jabatan' => 'Pengawas Sekolah Utama',
            'nama_unit' => 'Pengawas Sekolah Utama',
            'ikhtisar' => 'Melaksanakan tugas pengawasan akademik dan manajerial pada satuan pendidikan yg  meliputi penyusunan program pengawasan, pelaksanaan pembinaan, pemantauan  pelaksanaan 8 (delapan) SNP, penilaian, pembimbingan dan pelatihan professional Guru, evaluasi hasil pelaksanaan program pengawasan, dan pelaksanaan tugas kepengawasan  di daerah khusus.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)IDiploma IV di Bidang Pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah megikuti diklat fungsional calon Pengawas  Sekolah dan memperoleh STTPP',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Sekolah Utama
2. Data, Bahan dan Informasi terkait Pengawas Sekolah Utama
3. Produk hukum terkait jabatan Pengawas Sekolah Utama
4. Dokumen Pengawas Sekolah Utama
5. Dokumentasi kegiatan Pengawas Sekolah Utama
6. Hasil Kajian Pengawas Sekolah Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Sekolah Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Sekolah Utama
9. Laporan pelaksanaan kegiatan Pengawas Sekolah Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan pengawasan secara obyektif sesuai dengan prosedure yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Memilih dan menentukan metode kerja, 
- Menilai kinerja Guru dan kepala sekolah, 
- Menentukan dan/atau mengusulkan program 
- Melakukan pembinaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3620',
            'nama_jabatan' => 'Pengelola Pengadaan Barang/Jasa Pertama',
            'nama_unit' => 'Pengelola Pengadaan Barang/Jasa Pertama',
            'ikhtisar' => 'melaksanakan kegiatan perencanaan pengadaan barang/jasa pemerintah, pemilihan penyedia barang/jasa pemerintah, pengelolaan kontrak pengadaan barang/jasa pemerintah, dan pengelolaan pengadaan barang/jasa pemerintah secara swakelola.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S I / D IV Bidang Ekonomi, Hukum, Teknik, Ilmu Sosial, Ilmu Alam (Sains)',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Pengadaan Barang/Jasa Pertama
2. Data, Bahan dan Informasi terkait Pengelola Pengadaan Barang/Jasa Pertama
3. Produk hukum terkait jabatan Pengelola Pengadaan Barang/Jasa Pertama
4. Dokumen Pengelola Pengadaan Barang/Jasa Pertama
5. Dokumentasi kegiatan Pengelola Pengadaan Barang/Jasa Pertama
6. Hasil Kajian Pengelola Pengadaan Barang/Jasa Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Pengadaan Barang/Jasa Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Pengadaan Barang/Jasa Pertama
9. Laporan pelaksanaan kegiatan Pengelola Pengadaan Barang/Jasa Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan proses pengadaan barang dan jasa sesuai dengan ketentuan yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan perencanaan pengadaan, pemilihan penyedia, manajemen kontrak, dan manajemen informasi aset',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3621',
            'nama_jabatan' => 'Pengelola Pengadaan Barang/Jasa Muda',
            'nama_unit' => 'Pengelola Pengadaan Barang/Jasa Muda',
            'ikhtisar' => 'melaksanakan kegiatan perencanaan pengadaan barang/jasa pemerintah, pemilihan penyedia barang/jasa pemerintah, pengelolaan kontrak pengadaan barang/jasa pemerintah, dan pengelolaan pengadaan barang/jasa pemerintah secara swakelola.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S I / D IV Bidang Ekonomi, Hukum, Teknik, Ilmu Sosial, Ilmu Alam (Sains)',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Pengadaan Barang/Jasa Muda
2. Data, Bahan dan Informasi terkait Pengelola Pengadaan Barang/Jasa Muda
3. Produk hukum terkait jabatan Pengelola Pengadaan Barang/Jasa Muda
4. Dokumen Pengelola Pengadaan Barang/Jasa Muda
5. Dokumentasi kegiatan Pengelola Pengadaan Barang/Jasa Muda
6. Hasil Kajian Pengelola Pengadaan Barang/Jasa Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Pengadaan Barang/Jasa Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Pengadaan Barang/Jasa Muda
9. Laporan pelaksanaan kegiatan Pengelola Pengadaan Barang/Jasa Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan proses pengadaan barang dan jasa sesuai dengan ketentuan yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan perencanaan pengadaan, pemilihan penyedia, manajemen kontrak, dan manajemen informasi aset',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3622',
            'nama_jabatan' => 'Pengelola Pengadaan Barang/Jasa Madya',
            'nama_unit' => 'Pengelola Pengadaan Barang/Jasa Madya',
            'ikhtisar' => 'melaksanakan kegiatan perencanaan pengadaan barang/jasa pemerintah, pemilihan penyedia barang/jasa pemerintah, pengelolaan kontrak pengadaan barang/jasa pemerintah, dan pengelolaan pengadaan barang/jasa pemerintah secara swakelola.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S I / D IV Bidang Ekonomi, Hukum, Teknik, Ilmu Sosial, Ilmu Alam (Sains)',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Pengadaan Barang/Jasa Madya
2. Data, Bahan dan Informasi terkait Pengelola Pengadaan Barang/Jasa Madya
3. Produk hukum terkait jabatan Pengelola Pengadaan Barang/Jasa Madya
4. Dokumen Pengelola Pengadaan Barang/Jasa Madya
5. Dokumentasi kegiatan Pengelola Pengadaan Barang/Jasa Madya
6. Hasil Kajian Pengelola Pengadaan Barang/Jasa Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Pengadaan Barang/Jasa Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Pengadaan Barang/Jasa Madya
9. Laporan pelaksanaan kegiatan Pengelola Pengadaan Barang/Jasa Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Melaksanakan proses pengadaan barang dan jasa sesuai dengan ketentuan yang berlaku',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan perencanaan pengadaan, pemilihan penyedia, manajemen kontrak, dan manajemen informasi aset',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3623',
            'nama_jabatan' => 'Pengendali Dampak Lingkungan Terampil',
            'nama_unit' => 'Pengendali Dampak Lingkungan Terampil',
            'ikhtisar' => 'Melaksanakan pengendalian dampak lingkungan yang meliputi pemantauan kualitas lingkungan, pembinaan perlindungan dan pengelolaan lingkungan hidup, pengembangan perangkat perlindungan dan pengelolaan lingkungan hidup, pengendalian pencemaran dan pemulihan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ilmu Matematika dan Ilmu Pengetahuan Alam, Ilmu Tanaman, Ilmu Hewani, Ilmu Kesehatan, Ilmu Teknik, Ilmu Ekonomi, atau Ilmu Sosial dan Humaniora.',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Dampak Lingkungan Terampil
2. Data, Bahan dan Informasi terkait Pengendali Dampak Lingkungan Terampil
3. Produk hukum terkait jabatan Pengendali Dampak Lingkungan Terampil
4. Dokumen Pengendali Dampak Lingkungan Terampil
5. Dokumentasi kegiatan Pengendali Dampak Lingkungan Terampil
6. Hasil Kajian Pengendali Dampak Lingkungan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Dampak Lingkungan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Dampak Lingkungan Terampil
9. Laporan pelaksanaan kegiatan Pengendali Dampak Lingkungan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3624',
            'nama_jabatan' => 'Pengendali Dampak Lingkungan Mahir',
            'nama_unit' => 'Pengendali Dampak Lingkungan Mahir',
            'ikhtisar' => 'Melaksanakan pengendalian dampak lingkungan yang meliputi pemantauan kualitas lingkungan, pembinaan perlindungan dan pengelolaan lingkungan hidup, pengembangan perangkat perlindungan dan pengelolaan lingkungan hidup, pengendalian pencemaran dan pemulihan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ilmu Matematika dan Ilmu Pengetahuan Alam, Ilmu Tanaman, Ilmu Hewani, Ilmu Kesehatan, Ilmu Teknik, Ilmu Ekonomi, atau Ilmu Sosial dan Humaniora.',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Dampak Lingkungan Mahir
2. Data, Bahan dan Informasi terkait Pengendali Dampak Lingkungan Mahir
3. Produk hukum terkait jabatan Pengendali Dampak Lingkungan Mahir
4. Dokumen Pengendali Dampak Lingkungan Mahir
5. Dokumentasi kegiatan Pengendali Dampak Lingkungan Mahir
6. Hasil Kajian Pengendali Dampak Lingkungan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Dampak Lingkungan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Dampak Lingkungan Mahir
9. Laporan pelaksanaan kegiatan Pengendali Dampak Lingkungan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3625',
            'nama_jabatan' => 'Pengendali Dampak Lingkungan Penyelia',
            'nama_unit' => 'Pengendali Dampak Lingkungan Penyelia',
            'ikhtisar' => 'Melaksanakan pengendalian dampak lingkungan yang meliputi pemantauan kualitas lingkungan, pembinaan perlindungan dan pengelolaan lingkungan hidup, pengembangan perangkat perlindungan dan pengelolaan lingkungan hidup, pengendalian pencemaran dan pemulihan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ilmu Matematika dan Ilmu Pengetahuan Alam, Ilmu Tanaman, Ilmu Hewani, Ilmu Kesehatan, Ilmu Teknik, Ilmu Ekonomi, atau Ilmu Sosial dan Humaniora.',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Dampak Lingkungan Penyelia
2. Data, Bahan dan Informasi terkait Pengendali Dampak Lingkungan Penyelia
3. Produk hukum terkait jabatan Pengendali Dampak Lingkungan Penyelia
4. Dokumen Pengendali Dampak Lingkungan Penyelia
5. Dokumentasi kegiatan Pengendali Dampak Lingkungan Penyelia
6. Hasil Kajian Pengendali Dampak Lingkungan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Dampak Lingkungan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Dampak Lingkungan Penyelia
9. Laporan pelaksanaan kegiatan Pengendali Dampak Lingkungan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3626',
            'nama_jabatan' => 'Pengendali Dampak Lingkungan Pertama',
            'nama_unit' => 'Pengendali Dampak Lingkungan Pertama',
            'ikhtisar' => 'Melaksanakan pengendalian dampak lingkungan yang meliputi pemantauan kualitas lingkungan, pembinaan perlindungan dan pengelolaan lingkungan hidup, pengembangan perangkat perlindungan dan pengelolaan lingkungan hidup, pengendalian pencemaran dan pemulihan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Matematika dan Ilmu Pengetahuan Alam, Ilmu Tanaman, Ilmu Hewani, Ilmu Kesehatan, Ilmu Teknik, Ilmu Ekonomi, atau Ilmu Sosial dan Humaniora.',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Dampak Lingkungan Pertama
2. Data, Bahan dan Informasi terkait Pengendali Dampak Lingkungan Pertama
3. Produk hukum terkait jabatan Pengendali Dampak Lingkungan Pertama
4. Dokumen Pengendali Dampak Lingkungan Pertama
5. Dokumentasi kegiatan Pengendali Dampak Lingkungan Pertama
6. Hasil Kajian Pengendali Dampak Lingkungan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Dampak Lingkungan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Dampak Lingkungan Pertama
9. Laporan pelaksanaan kegiatan Pengendali Dampak Lingkungan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3627',
            'nama_jabatan' => 'Pengendali Dampak Lingkungan Muda',
            'nama_unit' => 'Pengendali Dampak Lingkungan Muda',
            'ikhtisar' => 'Melaksanakan pengendalian dampak lingkungan yang meliputi pemantauan kualitas lingkungan, pembinaan perlindungan dan pengelolaan lingkungan hidup, pengembangan perangkat perlindungan dan pengelolaan lingkungan hidup, pengendalian pencemaran dan pemulihan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Matematika dan Ilmu Pengetahuan Alam, Ilmu Tanaman, Ilmu Hewani, Ilmu Kesehatan, Ilmu Teknik, Ilmu Ekonomi, atau Ilmu Sosial dan Humaniora.',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Dampak Lingkungan Muda
2. Data, Bahan dan Informasi terkait Pengendali Dampak Lingkungan Muda
3. Produk hukum terkait jabatan Pengendali Dampak Lingkungan Muda
4. Dokumen Pengendali Dampak Lingkungan Muda
5. Dokumentasi kegiatan Pengendali Dampak Lingkungan Muda
6. Hasil Kajian Pengendali Dampak Lingkungan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Dampak Lingkungan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Dampak Lingkungan Muda
9. Laporan pelaksanaan kegiatan Pengendali Dampak Lingkungan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3628',
            'nama_jabatan' => 'Pengendali Dampak Lingkungan Madya',
            'nama_unit' => 'Pengendali Dampak Lingkungan Madya',
            'ikhtisar' => 'Melaksanakan pengendalian dampak lingkungan yang meliputi pemantauan kualitas lingkungan, pembinaan perlindungan dan pengelolaan lingkungan hidup, pengembangan perangkat perlindungan dan pengelolaan lingkungan hidup, pengendalian pencemaran dan pemulihan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Matematika dan Ilmu Pengetahuan Alam, Ilmu Tanaman, Ilmu Hewani, Ilmu Kesehatan, Ilmu Teknik, Ilmu Ekonomi, atau Ilmu Sosial dan Humaniora.',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Dampak Lingkungan Madya
2. Data, Bahan dan Informasi terkait Pengendali Dampak Lingkungan Madya
3. Produk hukum terkait jabatan Pengendali Dampak Lingkungan Madya
4. Dokumen Pengendali Dampak Lingkungan Madya
5. Dokumentasi kegiatan Pengendali Dampak Lingkungan Madya
6. Hasil Kajian Pengendali Dampak Lingkungan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Dampak Lingkungan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Dampak Lingkungan Madya
9. Laporan pelaksanaan kegiatan Pengendali Dampak Lingkungan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan kegiatan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3629',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Pemula',
            'nama_unit' => 'Pengendali Ekosistem Hutan Pemula',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di Bidang Kehutanan, Pertanian, Perkebunan, Perikanan/Kelautan, Peternakan, Kesehatan Hewan, Teknik Bangunan/Sipil, Surveyor dan Pemetaan serta kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Pemula
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Pemula
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Pemula
4. Dokumen Pengendali Ekosistem Hutan Pemula
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Pemula
6. Hasil Kajian Pengendali Ekosistem Hutan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Pemula
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3630',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Terampil',
            'nama_unit' => 'Pengendali Ekosistem Hutan Terampil',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di Bidang Kehutanan, Pertanian, Perkebunan, Perikanan/Kelautan, Peternakan, Kesehatan Hewan, Teknik Bangunan/Sipil, Surveyor dan Pemetaan serta kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Terampil
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Terampil
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Terampil
4. Dokumen Pengendali Ekosistem Hutan Terampil
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Terampil
6. Hasil Kajian Pengendali Ekosistem Hutan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Terampil
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3631',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Mahir',
            'nama_unit' => 'Pengendali Ekosistem Hutan Mahir',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di Bidang Kehutanan, Pertanian, Perkebunan, Perikanan/Kelautan, Peternakan, Kesehatan Hewan, Teknik Bangunan/Sipil, Surveyor dan Pemetaan serta kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Mahir
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Mahir
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Mahir
4. Dokumen Pengendali Ekosistem Hutan Mahir
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Mahir
6. Hasil Kajian Pengendali Ekosistem Hutan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Mahir
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3632',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Penyelia',
            'nama_unit' => 'Pengendali Ekosistem Hutan Penyelia',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'Sekolah Menengah Kejuruan (SMK) di Bidang Kehutanan, Pertanian, Perkebunan, Perikanan/Kelautan, Peternakan, Kesehatan Hewan, Teknik Bangunan/Sipil, Surveyor dan Pemetaan serta kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Penyelia
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Penyelia
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Penyelia
4. Dokumen Pengendali Ekosistem Hutan Penyelia
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Penyelia
6. Hasil Kajian Pengendali Ekosistem Hutan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Penyelia
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3633',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Pertama',
            'nama_unit' => 'Pengendali Ekosistem Hutan Pertama',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV bidang Kehutanan, Pertanian, Biologi, Perikanan/Kelautan, Ilmu Lingkungan, Geografi, Geodesi, Sosiologi, Kedokteran Hewan, Peternakan, Perencanaan Wilayah dan kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Pertama
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Pertama
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Pertama
4. Dokumen Pengendali Ekosistem Hutan Pertama
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Pertama
6. Hasil Kajian Pengendali Ekosistem Hutan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Pertama
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3634',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Muda',
            'nama_unit' => 'Pengendali Ekosistem Hutan Muda',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV bidang Kehutanan, Pertanian, Biologi, Perikanan/Kelautan, Ilmu Lingkungan, Geografi, Geodesi, Sosiologi, Kedokteran Hewan, Peternakan, Perencanaan Wilayah dan kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Muda
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Muda
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Muda
4. Dokumen Pengendali Ekosistem Hutan Muda
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Muda
6. Hasil Kajian Pengendali Ekosistem Hutan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Muda
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3635',
            'nama_jabatan' => 'Pengendali Ekosistem Hutan Madya',
            'nama_unit' => 'Pengendali Ekosistem Hutan Madya',
            'ikhtisar' => 'Melaksanakan pengendalian ekosistem hutan yg kegiatannya meliputi menyiapkan, melaksanakan,  mengembangkan, memantau dan mengevaluasi kegiatan pengendalian ekosistem hutan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV bidang Kehutanan, Pertanian, Biologi, Perikanan/Kelautan, Ilmu Lingkungan, Geografi, Geodesi, Sosiologi, Kedokteran Hewan, Peternakan, Perencanaan Wilayah dan kualifikasi lain yang ditetapkan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Ekosistem Hutan Madya
2. Data, Bahan dan Informasi terkait Pengendali Ekosistem Hutan Madya
3. Produk hukum terkait jabatan Pengendali Ekosistem Hutan Madya
4. Dokumen Pengendali Ekosistem Hutan Madya
5. Dokumentasi kegiatan Pengendali Ekosistem Hutan Madya
6. Hasil Kajian Pengendali Ekosistem Hutan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Ekosistem Hutan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Ekosistem Hutan Madya
9. Laporan pelaksanaan kegiatan Pengendali Ekosistem Hutan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Melaksanakan pengendalian ekosistem hutan sesuai dengan posedure yang berlaku
- Mengumpulkan data dengan valid',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengawasan
- Mengumpulklan data dan informasi',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3636',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Pemula',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Pemula',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'SMU–IPA/SMK',
            'pdd_jurusan' => 'SMU–IPA atau Sekolah Menengah Kejuruan (SMK) di bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Pemula
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Pemula
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Pemula
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Pemula
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Pemula
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Pemula
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3637',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Terampil',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Terampil',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'SMU–IPA/SMK',
            'pdd_jurusan' => 'SMU–IPA atau Sekolah Menengah Kejuruan (SMK) di bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Terampil
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Terampil
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Terampil
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Terampil
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Terampil
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Terampil
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3638',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Mahir',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Mahir',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'SMU–IPA/SMK',
            'pdd_jurusan' => 'SMU–IPA atau Sekolah Menengah Kejuruan (SMK) di bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Mahir
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Mahir
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Mahir
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Mahir
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Mahir
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Mahir
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3639',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Penyelia',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Penyelia',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'SMU–IPA/SMK',
            'pdd_jurusan' => 'SMU–IPA atau Sekolah Menengah Kejuruan (SMK) di bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Penyelia
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Penyelia
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Penyelia
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Penyelia
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Penyelia
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Penyelia
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3640',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Pertama',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Pertama',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Pertama
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Pertama
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Pertama
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Pertama
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Pertama
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Pertama
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman
- Kebenaran hasil analisa dan kajian',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Menyusun kajian / analisis
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3641',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Muda',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Muda',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Muda
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Muda
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Muda
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Muda
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Muda
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Muda
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman
- Kebenaran hasil analisa dan kajian',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Menyusun kajian / analisis
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3642',
            'nama_jabatan' => 'Pengendali Organisme Pengganggu Tumbuhan Madya',
            'nama_unit' => 'Pengendali Organisme Pengganggu Tumbuhan Madya',
            'ikhtisar' => 'Menyiapkan, melaksanakan pengendalian, menganalisis dan mengevaluasi, membimbing, mengembangkan metode pengendalian/tindakan karantina, dan mengamati/memantau daerah sebar serta membuat koleksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengendali Organisme Pengganggu Tumbuhan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengendali Organisme Pengganggu Tumbuhan Madya
2. Data, Bahan dan Informasi terkait Pengendali Organisme Pengganggu Tumbuhan Madya
3. Produk hukum terkait jabatan Pengendali Organisme Pengganggu Tumbuhan Madya
4. Dokumen Pengendali Organisme Pengganggu Tumbuhan Madya
5. Dokumentasi kegiatan Pengendali Organisme Pengganggu Tumbuhan Madya
6. Hasil Kajian Pengendali Organisme Pengganggu Tumbuhan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengendali Organisme Pengganggu Tumbuhan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengendali Organisme Pengganggu Tumbuhan Madya
9. Laporan pelaksanaan kegiatan Pengendali Organisme Pengganggu Tumbuhan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi
- Terkendalinya perkembangbiakan organisme pengganggu tanaman
- Kebenaran hasil analisa dan kajian',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Melaksanakan pengumpulan data dan informasi
- Menyusun kajian / analisis
- Melakukan tindakan pengendalian organisme pengganggu tanaman',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3643',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Pemula',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Pemula',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Pemula
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Pemula
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Pemula
4. Dokumen Penggerak Swadaya Masyarakat Pemula
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Pemula
6. Hasil Kajian Penggerak Swadaya Masyarakat Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Pemula
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3644',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Terampil',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Terampil
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Terampil
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Terampil
4. Dokumen Penggerak Swadaya Masyarakat Terampil
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Terampil
6. Hasil Kajian Penggerak Swadaya Masyarakat Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Terampil
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3645',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Mahir',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Mahir
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Mahir
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Mahir
4. Dokumen Penggerak Swadaya Masyarakat Mahir
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Mahir
6. Hasil Kajian Penggerak Swadaya Masyarakat Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Mahir
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3646',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Penyelia',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'SMA/K',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Penyelia
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Penyelia
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Penyelia
4. Dokumen Penggerak Swadaya Masyarakat Penyelia
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Penyelia
6. Hasil Kajian Penggerak Swadaya Masyarakat Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Penyelia
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3647',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Pertama',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Sosial, Ekonomi, Hukum, Politik, Pendidikan, Psikologi, Komunikasi, dan Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Pertama
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Pertama
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Pertama
4. Dokumen Penggerak Swadaya Masyarakat Pertama
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Pertama
6. Hasil Kajian Penggerak Swadaya Masyarakat Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Pertama
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun
- Kebenaran analisa data / penyusunan kajian',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat
- Mengolah data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3648',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Muda',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Sosial, Ekonomi, Hukum, Politik, Pendidikan, Psikologi, Komunikasi, dan Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Muda
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Muda
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Muda
4. Dokumen Penggerak Swadaya Masyarakat Muda
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Muda
6. Hasil Kajian Penggerak Swadaya Masyarakat Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Muda
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun
- Kebenaran analisa data / penyusunan kajian',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat
- Mengolah data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3649',
            'nama_jabatan' => 'Penggerak Swadaya Masyarakat Madya',
            'nama_unit' => 'Penggerak Swadaya Masyarakat Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pemberdayaan masyarakat melalui penggerakan keswadayaan masyarakat dalam rangka mencapai kemandirian dan berkelanjutan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Sosial, Ekonomi, Hukum, Politik, Pendidikan, Psikologi, Komunikasi, dan Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penggerak Swadaya Masyarakat Madya
2. Data, Bahan dan Informasi terkait Penggerak Swadaya Masyarakat Madya
3. Produk hukum terkait jabatan Penggerak Swadaya Masyarakat Madya
4. Dokumen Penggerak Swadaya Masyarakat Madya
5. Dokumentasi kegiatan Penggerak Swadaya Masyarakat Madya
6. Hasil Kajian Penggerak Swadaya Masyarakat Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penggerak Swadaya Masyarakat Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penggerak Swadaya Masyarakat Madya
9. Laporan pelaksanaan kegiatan Penggerak Swadaya Masyarakat Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Terlaksananya kegiatan penggerakkan swadaya masyarakat
- Kebenaran data dan informasi yag dihimpun
- Kebenaran analisa data / penyusunan kajian',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulkan data
- Melakukan sosialisasi atau pembinaan kepada masyarakat
- Mengolah data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3650',
            'nama_jabatan' => 'Penguji Kendaraan Bermotor Pemula',
            'nama_unit' => 'Penguji Kendaraan Bermotor Pemula',
            'ikhtisar' => 'Melaksanakan pemastian kelaikan jalan kendaraan yang meliputi pengujian berkala kendaraan bermotor, pengujian tipe kendaraan bermotor, rancang bangun dan rekayasa kendaraan bermotor, dan perawatan serta perbaikan peralatan pengujian kendaraan bermotor.',
            'pdd_formal' => 'SMU/K',
            'pdd_jurusan' => 'SMU / SMK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional di Bidang Pengujian Kendaraan Bermotor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Kendaraan Bermotor Pemula
2. Data, Bahan dan Informasi terkait Penguji Kendaraan Bermotor Pemula
3. Produk hukum terkait jabatan Penguji Kendaraan Bermotor Pemula
4. Dokumen Penguji Kendaraan Bermotor Pemula
5. Dokumentasi kegiatan Penguji Kendaraan Bermotor Pemula
6. Hasil Kajian Penguji Kendaraan Bermotor Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Kendaraan Bermotor Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Kendaraan Bermotor Pemula
9. Laporan pelaksanaan kegiatan Penguji Kendaraan Bermotor Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Kebenaran data dan informasi hasil pengujian kendaraan bermotor',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Menguji dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3651',
            'nama_jabatan' => 'Penguji Kendaraan Bermotor Terampil',
            'nama_unit' => 'Penguji Kendaraan Bermotor Terampil',
            'ikhtisar' => 'Melaksanakan pemastian kelaikan jalan kendaraan yang meliputi pengujian berkala kendaraan bermotor, pengujian tipe kendaraan bermotor, rancang bangun dan rekayasa kendaraan bermotor, dan perawatan serta perbaikan peralatan pengujian kendaraan bermotor.',
            'pdd_formal' => 'SMU/K',
            'pdd_jurusan' => 'SMU / SMK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional di Bidang Pengujian Kendaraan Bermotor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Kendaraan Bermotor Terampil
2. Data, Bahan dan Informasi terkait Penguji Kendaraan Bermotor Terampil
3. Produk hukum terkait jabatan Penguji Kendaraan Bermotor Terampil
4. Dokumen Penguji Kendaraan Bermotor Terampil
5. Dokumentasi kegiatan Penguji Kendaraan Bermotor Terampil
6. Hasil Kajian Penguji Kendaraan Bermotor Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Kendaraan Bermotor Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Kendaraan Bermotor Terampil
9. Laporan pelaksanaan kegiatan Penguji Kendaraan Bermotor Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Kebenaran data dan informasi hasil pengujian kendaraan bermotor',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Menguji dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3652',
            'nama_jabatan' => 'Penguji Kendaraan Bermotor Mahir',
            'nama_unit' => 'Penguji Kendaraan Bermotor Mahir',
            'ikhtisar' => 'Melaksanakan pemastian kelaikan jalan kendaraan yang meliputi pengujian berkala kendaraan bermotor, pengujian tipe kendaraan bermotor, rancang bangun dan rekayasa kendaraan bermotor, dan perawatan serta perbaikan peralatan pengujian kendaraan bermotor.',
            'pdd_formal' => 'SMU/K',
            'pdd_jurusan' => 'SMU / SMK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional di Bidang Pengujian Kendaraan Bermotor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Kendaraan Bermotor Mahir
2. Data, Bahan dan Informasi terkait Penguji Kendaraan Bermotor Mahir
3. Produk hukum terkait jabatan Penguji Kendaraan Bermotor Mahir
4. Dokumen Penguji Kendaraan Bermotor Mahir
5. Dokumentasi kegiatan Penguji Kendaraan Bermotor Mahir
6. Hasil Kajian Penguji Kendaraan Bermotor Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Kendaraan Bermotor Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Kendaraan Bermotor Mahir
9. Laporan pelaksanaan kegiatan Penguji Kendaraan Bermotor Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Kebenaran data dan informasi hasil pengujian kendaraan bermotor',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Menguji dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3653',
            'nama_jabatan' => 'Penguji Kendaraan Bermotor Penyelia',
            'nama_unit' => 'Penguji Kendaraan Bermotor Penyelia',
            'ikhtisar' => 'Melaksanakan pemastian kelaikan jalan kendaraan yang meliputi pengujian berkala kendaraan bermotor, pengujian tipe kendaraan bermotor, rancang bangun dan rekayasa kendaraan bermotor, dan perawatan serta perbaikan peralatan pengujian kendaraan bermotor.',
            'pdd_formal' => 'SMU/K',
            'pdd_jurusan' => 'SMU / SMK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional di Bidang Pengujian Kendaraan Bermotor Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Kendaraan Bermotor Penyelia
2. Data, Bahan dan Informasi terkait Penguji Kendaraan Bermotor Penyelia
3. Produk hukum terkait jabatan Penguji Kendaraan Bermotor Penyelia
4. Dokumen Penguji Kendaraan Bermotor Penyelia
5. Dokumentasi kegiatan Penguji Kendaraan Bermotor Penyelia
6. Hasil Kajian Penguji Kendaraan Bermotor Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Kendaraan Bermotor Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Kendaraan Bermotor Penyelia
9. Laporan pelaksanaan kegiatan Penguji Kendaraan Bermotor Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Kebenaran data dan informasi hasil pengujian kendaraan bermotor',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Menguji dan mengumpulkan data',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3654',
            'nama_jabatan' => 'Penguji Mutu Barang Pemula',
            'nama_unit' => 'Penguji Mutu Barang Pemula',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Pemula
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Pemula
3. Produk hukum terkait jabatan Penguji Mutu Barang Pemula
4. Dokumen Penguji Mutu Barang Pemula
5. Dokumentasi kegiatan Penguji Mutu Barang Pemula
6. Hasil Kajian Penguji Mutu Barang Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Pemula
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3655',
            'nama_jabatan' => 'Penguji Mutu Barang Terampil',
            'nama_unit' => 'Penguji Mutu Barang Terampil',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Terampil
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Terampil
3. Produk hukum terkait jabatan Penguji Mutu Barang Terampil
4. Dokumen Penguji Mutu Barang Terampil
5. Dokumentasi kegiatan Penguji Mutu Barang Terampil
6. Hasil Kajian Penguji Mutu Barang Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Terampil
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3656',
            'nama_jabatan' => 'Penguji Mutu Barang Mahir',
            'nama_unit' => 'Penguji Mutu Barang Mahir',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Mahir
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Mahir
3. Produk hukum terkait jabatan Penguji Mutu Barang Mahir
4. Dokumen Penguji Mutu Barang Mahir
5. Dokumentasi kegiatan Penguji Mutu Barang Mahir
6. Hasil Kajian Penguji Mutu Barang Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Mahir
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3657',
            'nama_jabatan' => 'Penguji Mutu Barang Penyelia',
            'nama_unit' => 'Penguji Mutu Barang Penyelia',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Penyelia
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Penyelia
3. Produk hukum terkait jabatan Penguji Mutu Barang Penyelia
4. Dokumen Penguji Mutu Barang Penyelia
5. Dokumentasi kegiatan Penguji Mutu Barang Penyelia
6. Hasil Kajian Penguji Mutu Barang Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Penyelia
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3658',
            'nama_jabatan' => 'Penguji Mutu Barang Pertama',
            'nama_unit' => 'Penguji Mutu Barang Pertama',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, Teknik Kimia, Teknik Fisika atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Pertama
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Pertama
3. Produk hukum terkait jabatan Penguji Mutu Barang Pertama
4. Dokumen Penguji Mutu Barang Pertama
5. Dokumentasi kegiatan Penguji Mutu Barang Pertama
6. Hasil Kajian Penguji Mutu Barang Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Pertama
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3659',
            'nama_jabatan' => 'Penguji Mutu Barang Muda',
            'nama_unit' => 'Penguji Mutu Barang Muda',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, Teknik Kimia, Teknik Fisika atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Muda
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Muda
3. Produk hukum terkait jabatan Penguji Mutu Barang Muda
4. Dokumen Penguji Mutu Barang Muda
5. Dokumentasi kegiatan Penguji Mutu Barang Muda
6. Hasil Kajian Penguji Mutu Barang Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Muda
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3660',
            'nama_jabatan' => 'Penguji Mutu Barang Madya',
            'nama_unit' => 'Penguji Mutu Barang Madya',
            'ikhtisar' => 'Melakukan pengujian mutu barang meliputi penjaminan mutu barang, pengembangan pengujian/ kalibrasi, dan pengelolaan organisasi penjaminan mutu barang.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Teknik Mesin, Teknik Elektro, Teknik Elektronika, Teknik Kimia, Teknik Fisika atau Kimia',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus diklat fungsional Penguji  Mutu Barang Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penguji Mutu Barang Madya
2. Data, Bahan dan Informasi terkait Penguji Mutu Barang Madya
3. Produk hukum terkait jabatan Penguji Mutu Barang Madya
4. Dokumen Penguji Mutu Barang Madya
5. Dokumentasi kegiatan Penguji Mutu Barang Madya
6. Hasil Kajian Penguji Mutu Barang Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penguji Mutu Barang Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penguji Mutu Barang Madya
9. Laporan pelaksanaan kegiatan Penguji Mutu Barang Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Terlaksanakannya pengujian mutu barang penjaminan mutu barang, 
b. Dokumen dan Data pengujian mutu barang pengembangan pengujian/kalibrasi, 
c. Data pengelolaan organisasi penjaminan mutu barang
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pengujian dan Klasrifikasi Mutu Barang',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3661',
            'nama_jabatan' => 'Penyelidik Bumi Pertama',
            'nama_unit' => 'Penyelidik Bumi Pertama',
            'ikhtisar' => 'Melaksanakan penyelidikan kebumian yang meliputi perencanaan, persiapan, penyelidikan, pengujian laboratorium dan pengolahan hasil penyelidikan, pembuatan peta, laporan penyelidikan dan penyebarluasan hasil penyelidikan kebumian serta pengembangan metode.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Geologi, Geodesi, Geofisika, Geokimia, Pertambangan, Perminyakan, dan kualifikasil ain yang ditentukan oleh Menteri Energi dan Sumber Daya Mineral',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus pendidikan dan pelatihan di bidang Penyelidikan Kebumian  ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyelidik Bumi Pertama
2. Data, Bahan dan Informasi terkait Penyelidik Bumi Pertama
3. Produk hukum terkait jabatan Penyelidik Bumi Pertama
4. Dokumen Penyelidik Bumi Pertama
5. Dokumentasi kegiatan Penyelidik Bumi Pertama
6. Hasil Kajian Penyelidik Bumi Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyelidik Bumi Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyelidik Bumi Pertama
9. Laporan pelaksanaan kegiatan Penyelidik Bumi Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen Data 
b. Kelengkapan peralatan kerja
c. Keakuratan hasil Kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penyedikan 
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3662',
            'nama_jabatan' => 'Penyelidik Bumi Muda',
            'nama_unit' => 'Penyelidik Bumi Muda',
            'ikhtisar' => 'Melaksanakan penyelidikan kebumian yang meliputi perencanaan, persiapan, penyelidikan, pengujian laboratorium dan pengolahan hasil penyelidikan, pembuatan peta, laporan penyelidikan dan penyebarluasan hasil penyelidikan kebumian serta pengembangan metode.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Geologi, Geodesi, Geofisika, Geokimia, Pertambangan, Perminyakan, dan kualifikasil ain yang ditentukan oleh Menteri Energi dan Sumber Daya Mineral',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus pendidikan dan pelatihan di bidang Penyelidikan Kebumian  ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyelidik Bumi Muda
2. Data, Bahan dan Informasi terkait Penyelidik Bumi Muda
3. Produk hukum terkait jabatan Penyelidik Bumi Muda
4. Dokumen Penyelidik Bumi Muda
5. Dokumentasi kegiatan Penyelidik Bumi Muda
6. Hasil Kajian Penyelidik Bumi Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyelidik Bumi Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyelidik Bumi Muda
9. Laporan pelaksanaan kegiatan Penyelidik Bumi Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen Data 
b. Kelengkapan peralatan kerja
c. Keakuratan hasil Kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penyedikan 
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3663',
            'nama_jabatan' => 'Penyelidik Bumi Madya',
            'nama_unit' => 'Penyelidik Bumi Madya',
            'ikhtisar' => 'Melaksanakan penyelidikan kebumian yang meliputi perencanaan, persiapan, penyelidikan, pengujian laboratorium dan pengolahan hasil penyelidikan, pembuatan peta, laporan penyelidikan dan penyebarluasan hasil penyelidikan kebumian serta pengembangan metode.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Geologi, Geodesi, Geofisika, Geokimia, Pertambangan, Perminyakan, dan kualifikasil ain yang ditentukan oleh Menteri Energi dan Sumber Daya Mineral',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus pendidikan dan pelatihan di bidang Penyelidikan Kebumian  ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyelidik Bumi Madya
2. Data, Bahan dan Informasi terkait Penyelidik Bumi Madya
3. Produk hukum terkait jabatan Penyelidik Bumi Madya
4. Dokumen Penyelidik Bumi Madya
5. Dokumentasi kegiatan Penyelidik Bumi Madya
6. Hasil Kajian Penyelidik Bumi Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyelidik Bumi Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyelidik Bumi Madya
9. Laporan pelaksanaan kegiatan Penyelidik Bumi Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen Data 
b. Kelengkapan peralatan kerja
c. Keakuratan hasil Kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penyedikan 
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3664',
            'nama_jabatan' => 'Penyelidik Bumi Utama',
            'nama_unit' => 'Penyelidik Bumi Utama',
            'ikhtisar' => 'Melaksanakan penyelidikan kebumian yang meliputi perencanaan, persiapan, penyelidikan, pengujian laboratorium dan pengolahan hasil penyelidikan, pembuatan peta, laporan penyelidikan dan penyebarluasan hasil penyelidikan kebumian serta pengembangan metode.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV di Bidang Geologi, Geodesi, Geofisika, Geokimia, Pertambangan, Perminyakan, dan kualifikasil ain yang ditentukan oleh Menteri Energi dan Sumber Daya Mineral',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus pendidikan dan pelatihan di bidang Penyelidikan Kebumian  ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyelidik Bumi Utama
2. Data, Bahan dan Informasi terkait Penyelidik Bumi Utama
3. Produk hukum terkait jabatan Penyelidik Bumi Utama
4. Dokumen Penyelidik Bumi Utama
5. Dokumentasi kegiatan Penyelidik Bumi Utama
6. Hasil Kajian Penyelidik Bumi Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyelidik Bumi Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyelidik Bumi Utama
9. Laporan pelaksanaan kegiatan Penyelidik Bumi Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dokumen Data 
b. Kelengkapan peralatan kerja
c. Keakuratan hasil Kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Penyedikan 
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3665',
            'nama_jabatan' => 'Penyuluh Agama Terampil',
            'nama_unit' => 'Penyuluh Agama Terampil',
            'ikhtisar' => 'Melakukan dan mengembangkan kegiatan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Agama Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Agama Terampil
2. Data, Bahan dan Informasi terkait Penyuluh Agama Terampil
3. Produk hukum terkait jabatan Penyuluh Agama Terampil
4. Dokumen Penyuluh Agama Terampil
5. Dokumentasi kegiatan Penyuluh Agama Terampil
6. Hasil Kajian Penyuluh Agama Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Agama Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Agama Terampil
9. Laporan pelaksanaan kegiatan Penyuluh Agama Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Dokumen Pelaksanan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Agama Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3666',
            'nama_jabatan' => 'Penyuluh Agama Mahir',
            'nama_unit' => 'Penyuluh Agama Mahir',
            'ikhtisar' => 'Melakukan dan mengembangkan kegiatan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Agama Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Agama Mahir
2. Data, Bahan dan Informasi terkait Penyuluh Agama Mahir
3. Produk hukum terkait jabatan Penyuluh Agama Mahir
4. Dokumen Penyuluh Agama Mahir
5. Dokumentasi kegiatan Penyuluh Agama Mahir
6. Hasil Kajian Penyuluh Agama Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Agama Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Agama Mahir
9. Laporan pelaksanaan kegiatan Penyuluh Agama Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Dokumen Pelaksanan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Agama Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3667',
            'nama_jabatan' => 'Penyuluh Agama Penyelia',
            'nama_unit' => 'Penyuluh Agama Penyelia',
            'ikhtisar' => 'Melakukan dan mengembangkan kegiatan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Agama Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Agama Penyelia
2. Data, Bahan dan Informasi terkait Penyuluh Agama Penyelia
3. Produk hukum terkait jabatan Penyuluh Agama Penyelia
4. Dokumen Penyuluh Agama Penyelia
5. Dokumentasi kegiatan Penyuluh Agama Penyelia
6. Hasil Kajian Penyuluh Agama Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Agama Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Agama Penyelia
9. Laporan pelaksanaan kegiatan Penyuluh Agama Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Dokumen Pelaksanan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Agama Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3668',
            'nama_jabatan' => 'Penyuluh Agama Pertama',
            'nama_unit' => 'Penyuluh Agama Pertama',
            'ikhtisar' => 'Melakukan dan mengembangkan kegiatan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Agama Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Agama Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Agama Pertama
3. Produk hukum terkait jabatan Penyuluh Agama Pertama
4. Dokumen Penyuluh Agama Pertama
5. Dokumentasi kegiatan Penyuluh Agama Pertama
6. Hasil Kajian Penyuluh Agama Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Agama Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Agama Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Agama Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Dokumen Pelaksanan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Agama Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3669',
            'nama_jabatan' => 'Penyuluh Agama Muda',
            'nama_unit' => 'Penyuluh Agama Muda',
            'ikhtisar' => 'Melakukan dan mengembangkan kegiatan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Agama Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Agama Muda
2. Data, Bahan dan Informasi terkait Penyuluh Agama Muda
3. Produk hukum terkait jabatan Penyuluh Agama Muda
4. Dokumen Penyuluh Agama Muda
5. Dokumentasi kegiatan Penyuluh Agama Muda
6. Hasil Kajian Penyuluh Agama Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Agama Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Agama Muda
9. Laporan pelaksanaan kegiatan Penyuluh Agama Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Dokumen Pelaksanan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Agama Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3670',
            'nama_jabatan' => 'Penyuluh Agama Madya',
            'nama_unit' => 'Penyuluh Agama Madya',
            'ikhtisar' => 'Melakukan dan mengembangkan kegiatan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama.',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'S1/DIV Sesuai dengan kualifikasi yang ditentukan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Agama Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Agama Madya
2. Data, Bahan dan Informasi terkait Penyuluh Agama Madya
3. Produk hukum terkait jabatan Penyuluh Agama Madya
4. Dokumen Penyuluh Agama Madya
5. Dokumentasi kegiatan Penyuluh Agama Madya
6. Hasil Kajian Penyuluh Agama Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Agama Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Agama Madya
9. Laporan pelaksanaan kegiatan Penyuluh Agama Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Dokumen Pelaksanan bimbingan atau penyuluhan agama dan pembangunan melalui bahasa agama',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Agama Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3671',
            'nama_jabatan' => 'Penyuluh Kehutanan Pemula',
            'nama_unit' => 'Penyuluh Kehutanan Pemula',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Pemula
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Pemula
3. Produk hukum terkait jabatan Penyuluh Kehutanan Pemula
4. Dokumen Penyuluh Kehutanan Pemula
5. Dokumentasi kegiatan Penyuluh Kehutanan Pemula
6. Hasil Kajian Penyuluh Kehutanan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Pemula
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3672',
            'nama_jabatan' => 'Penyuluh Kehutanan Terampil',
            'nama_unit' => 'Penyuluh Kehutanan Terampil',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Terampil
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Terampil
3. Produk hukum terkait jabatan Penyuluh Kehutanan Terampil
4. Dokumen Penyuluh Kehutanan Terampil
5. Dokumentasi kegiatan Penyuluh Kehutanan Terampil
6. Hasil Kajian Penyuluh Kehutanan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Terampil
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3673',
            'nama_jabatan' => 'Penyuluh Kehutanan Mahir',
            'nama_unit' => 'Penyuluh Kehutanan Mahir',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Mahir
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Mahir
3. Produk hukum terkait jabatan Penyuluh Kehutanan Mahir
4. Dokumen Penyuluh Kehutanan Mahir
5. Dokumentasi kegiatan Penyuluh Kehutanan Mahir
6. Hasil Kajian Penyuluh Kehutanan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Mahir
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3674',
            'nama_jabatan' => 'Penyuluh Kehutanan Penyelia',
            'nama_unit' => 'Penyuluh Kehutanan Penyelia',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'SMK',
            'pdd_jurusan' => 'SMK Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Penyelia
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Penyelia
3. Produk hukum terkait jabatan Penyuluh Kehutanan Penyelia
4. Dokumen Penyuluh Kehutanan Penyelia
5. Dokumentasi kegiatan Penyuluh Kehutanan Penyelia
6. Hasil Kajian Penyuluh Kehutanan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Penyelia
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3675',
            'nama_jabatan' => 'Penyuluh Kehutanan Pertama',
            'nama_unit' => 'Penyuluh Kehutanan Pertama',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Kehutanan atau kualifikasi  lain yang ditentukan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Pertama
3. Produk hukum terkait jabatan Penyuluh Kehutanan Pertama
4. Dokumen Penyuluh Kehutanan Pertama
5. Dokumentasi kegiatan Penyuluh Kehutanan Pertama
6. Hasil Kajian Penyuluh Kehutanan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3676',
            'nama_jabatan' => 'Penyuluh Kehutanan Muda',
            'nama_unit' => 'Penyuluh Kehutanan Muda',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Kehutanan atau kualifikasi  lain yang ditentukan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Muda
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Muda
3. Produk hukum terkait jabatan Penyuluh Kehutanan Muda
4. Dokumen Penyuluh Kehutanan Muda
5. Dokumentasi kegiatan Penyuluh Kehutanan Muda
6. Hasil Kajian Penyuluh Kehutanan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Muda
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3677',
            'nama_jabatan' => 'Penyuluh Kehutanan Madya',
            'nama_unit' => 'Penyuluh Kehutanan Madya',
            'ikhtisar' => 'Melakukan kegiatan persiapan, pelaksanaan, pengembangan, pemantauan, evaluasi dan pelaporan penyuluhan kehutanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Kehutanan atau kualifikasi  lain yang ditentukan oleh Menteri Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kehutanan Madya
2. Data, Bahan dan Informasi terkait Penyuluh Kehutanan Madya
3. Produk hukum terkait jabatan Penyuluh Kehutanan Madya
4. Dokumen Penyuluh Kehutanan Madya
5. Dokumentasi kegiatan Penyuluh Kehutanan Madya
6. Hasil Kajian Penyuluh Kehutanan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kehutanan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kehutanan Madya
9. Laporan pelaksanaan kegiatan Penyuluh Kehutanan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3678',
            'nama_jabatan' => 'Penyuluh Kesehatan Masyarakat Terampil',
            'nama_unit' => 'Penyuluh Kesehatan Masyarakat Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan advokasi, pembinaan suasana dan gerakan pemberdayaan masyarakat, melakukan penyebarluasan informasi, membuat rancangan media, melakukan pengkajian/penelitian perilaku masyarakat yang berhubungan dengan kesehatan, serta merencanakan intervensi dalam rangka mengembangkan perilaku masyarakat yang mendukung kesehatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluhan Kesehatan Masyarakat Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kesehatan Masyarakat Terampil
2. Data, Bahan dan Informasi terkait Penyuluh Kesehatan Masyarakat Terampil
3. Produk hukum terkait jabatan Penyuluh Kesehatan Masyarakat Terampil
4. Dokumen Penyuluh Kesehatan Masyarakat Terampil
5. Dokumentasi kegiatan Penyuluh Kesehatan Masyarakat Terampil
6. Hasil Kajian Penyuluh Kesehatan Masyarakat Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kesehatan Masyarakat Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kesehatan Masyarakat Terampil
9. Laporan pelaksanaan kegiatan Penyuluh Kesehatan Masyarakat Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3679',
            'nama_jabatan' => 'Penyuluh Kesehatan Masyarakat Mahir',
            'nama_unit' => 'Penyuluh Kesehatan Masyarakat Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan advokasi, pembinaan suasana dan gerakan pemberdayaan masyarakat, melakukan penyebarluasan informasi, membuat rancangan media, melakukan pengkajian/penelitian perilaku masyarakat yang berhubungan dengan kesehatan, serta merencanakan intervensi dalam rangka mengembangkan perilaku masyarakat yang mendukung kesehatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluhan Kesehatan Masyarakat Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kesehatan Masyarakat Mahir
2. Data, Bahan dan Informasi terkait Penyuluh Kesehatan Masyarakat Mahir
3. Produk hukum terkait jabatan Penyuluh Kesehatan Masyarakat Mahir
4. Dokumen Penyuluh Kesehatan Masyarakat Mahir
5. Dokumentasi kegiatan Penyuluh Kesehatan Masyarakat Mahir
6. Hasil Kajian Penyuluh Kesehatan Masyarakat Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kesehatan Masyarakat Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kesehatan Masyarakat Mahir
9. Laporan pelaksanaan kegiatan Penyuluh Kesehatan Masyarakat Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3680',
            'nama_jabatan' => 'Penyuluh Kesehatan Masyarakat Penyelia',
            'nama_unit' => 'Penyuluh Kesehatan Masyarakat Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan advokasi, pembinaan suasana dan gerakan pemberdayaan masyarakat, melakukan penyebarluasan informasi, membuat rancangan media, melakukan pengkajian/penelitian perilaku masyarakat yang berhubungan dengan kesehatan, serta merencanakan intervensi dalam rangka mengembangkan perilaku masyarakat yang mendukung kesehatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluhan Kesehatan Masyarakat Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kesehatan Masyarakat Penyelia
2. Data, Bahan dan Informasi terkait Penyuluh Kesehatan Masyarakat Penyelia
3. Produk hukum terkait jabatan Penyuluh Kesehatan Masyarakat Penyelia
4. Dokumen Penyuluh Kesehatan Masyarakat Penyelia
5. Dokumentasi kegiatan Penyuluh Kesehatan Masyarakat Penyelia
6. Hasil Kajian Penyuluh Kesehatan Masyarakat Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kesehatan Masyarakat Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kesehatan Masyarakat Penyelia
9. Laporan pelaksanaan kegiatan Penyuluh Kesehatan Masyarakat Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3681',
            'nama_jabatan' => 'Penyuluh Kesehatan Masyarakat Pertama',
            'nama_unit' => 'Penyuluh Kesehatan Masyarakat Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan advokasi, pembinaan suasana dan gerakan pemberdayaan masyarakat, melakukan penyebarluasan informasi, membuat rancangan media, melakukan pengkajian/penelitian perilaku masyarakat yang berhubungan dengan kesehatan, serta merencanakan intervensi dalam rangka mengembangkan perilaku masyarakat yang mendukung kesehatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluhan Kesehatan Masyarakat Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kesehatan Masyarakat Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Kesehatan Masyarakat Pertama
3. Produk hukum terkait jabatan Penyuluh Kesehatan Masyarakat Pertama
4. Dokumen Penyuluh Kesehatan Masyarakat Pertama
5. Dokumentasi kegiatan Penyuluh Kesehatan Masyarakat Pertama
6. Hasil Kajian Penyuluh Kesehatan Masyarakat Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kesehatan Masyarakat Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kesehatan Masyarakat Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Kesehatan Masyarakat Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3682',
            'nama_jabatan' => 'Penyuluh Kesehatan Masyarakat Muda',
            'nama_unit' => 'Penyuluh Kesehatan Masyarakat Muda',
            'ikhtisar' => 'Melaksanakan kegiatan advokasi, pembinaan suasana dan gerakan pemberdayaan masyarakat, melakukan penyebarluasan informasi, membuat rancangan media, melakukan pengkajian/penelitian perilaku masyarakat yang berhubungan dengan kesehatan, serta merencanakan intervensi dalam rangka mengembangkan perilaku masyarakat yang mendukung kesehatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluhan Kesehatan Masyarakat Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kesehatan Masyarakat Muda
2. Data, Bahan dan Informasi terkait Penyuluh Kesehatan Masyarakat Muda
3. Produk hukum terkait jabatan Penyuluh Kesehatan Masyarakat Muda
4. Dokumen Penyuluh Kesehatan Masyarakat Muda
5. Dokumentasi kegiatan Penyuluh Kesehatan Masyarakat Muda
6. Hasil Kajian Penyuluh Kesehatan Masyarakat Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kesehatan Masyarakat Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kesehatan Masyarakat Muda
9. Laporan pelaksanaan kegiatan Penyuluh Kesehatan Masyarakat Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3683',
            'nama_jabatan' => 'Penyuluh Kesehatan Masyarakat Madya',
            'nama_unit' => 'Penyuluh Kesehatan Masyarakat Madya',
            'ikhtisar' => 'Melaksanakan kegiatan advokasi, pembinaan suasana dan gerakan pemberdayaan masyarakat, melakukan penyebarluasan informasi, membuat rancangan media, melakukan pengkajian/penelitian perilaku masyarakat yang berhubungan dengan kesehatan, serta merencanakan intervensi dalam rangka mengembangkan perilaku masyarakat yang mendukung kesehatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluhan Kesehatan Masyarakat Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Kesehatan Masyarakat Madya
2. Data, Bahan dan Informasi terkait Penyuluh Kesehatan Masyarakat Madya
3. Produk hukum terkait jabatan Penyuluh Kesehatan Masyarakat Madya
4. Dokumen Penyuluh Kesehatan Masyarakat Madya
5. Dokumentasi kegiatan Penyuluh Kesehatan Masyarakat Madya
6. Hasil Kajian Penyuluh Kesehatan Masyarakat Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Kesehatan Masyarakat Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Kesehatan Masyarakat Madya
9. Laporan pelaksanaan kegiatan Penyuluh Kesehatan Masyarakat Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3684',
            'nama_jabatan' => 'Penyuluh Perindustrian dan Perdagangan Terampil',
            'nama_unit' => 'Penyuluh Perindustrian dan Perdagangan Terampil',
            'ikhtisar' => 'Melakukan penyuluhan di bidang perindustrian dan perdagangan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perindustrian dan Perdagangan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perindustrian dan Perdagangan Terampil
2. Data, Bahan dan Informasi terkait Penyuluh Perindustrian dan Perdagangan Terampil
3. Produk hukum terkait jabatan Penyuluh Perindustrian dan Perdagangan Terampil
4. Dokumen Penyuluh Perindustrian dan Perdagangan Terampil
5. Dokumentasi kegiatan Penyuluh Perindustrian dan Perdagangan Terampil
6. Hasil Kajian Penyuluh Perindustrian dan Perdagangan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perindustrian dan Perdagangan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perindustrian dan Perdagangan Terampil
9. Laporan pelaksanaan kegiatan Penyuluh Perindustrian dan Perdagangan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3685',
            'nama_jabatan' => 'Penyuluh Perindustrian dan Perdagangan Mahir',
            'nama_unit' => 'Penyuluh Perindustrian dan Perdagangan Mahir',
            'ikhtisar' => 'Melakukan penyuluhan di bidang perindustrian dan perdagangan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perindustrian dan Perdagangan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perindustrian dan Perdagangan Mahir
2. Data, Bahan dan Informasi terkait Penyuluh Perindustrian dan Perdagangan Mahir
3. Produk hukum terkait jabatan Penyuluh Perindustrian dan Perdagangan Mahir
4. Dokumen Penyuluh Perindustrian dan Perdagangan Mahir
5. Dokumentasi kegiatan Penyuluh Perindustrian dan Perdagangan Mahir
6. Hasil Kajian Penyuluh Perindustrian dan Perdagangan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perindustrian dan Perdagangan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perindustrian dan Perdagangan Mahir
9. Laporan pelaksanaan kegiatan Penyuluh Perindustrian dan Perdagangan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3686',
            'nama_jabatan' => 'Penyuluh Perindustrian dan Perdagangan Penyelia',
            'nama_unit' => 'Penyuluh Perindustrian dan Perdagangan Penyelia',
            'ikhtisar' => 'Melakukan penyuluhan di bidang perindustrian dan perdagangan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perindustrian dan Perdagangan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perindustrian dan Perdagangan Penyelia
2. Data, Bahan dan Informasi terkait Penyuluh Perindustrian dan Perdagangan Penyelia
3. Produk hukum terkait jabatan Penyuluh Perindustrian dan Perdagangan Penyelia
4. Dokumen Penyuluh Perindustrian dan Perdagangan Penyelia
5. Dokumentasi kegiatan Penyuluh Perindustrian dan Perdagangan Penyelia
6. Hasil Kajian Penyuluh Perindustrian dan Perdagangan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perindustrian dan Perdagangan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perindustrian dan Perdagangan Penyelia
9. Laporan pelaksanaan kegiatan Penyuluh Perindustrian dan Perdagangan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3687',
            'nama_jabatan' => 'Penyuluh Perindustrian dan Perdagangan Pertama',
            'nama_unit' => 'Penyuluh Perindustrian dan Perdagangan Pertama',
            'ikhtisar' => 'Melakukan penyuluhan di bidang perindustrian dan perdagangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perindustrian dan Perdagangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perindustrian dan Perdagangan Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Perindustrian dan Perdagangan Pertama
3. Produk hukum terkait jabatan Penyuluh Perindustrian dan Perdagangan Pertama
4. Dokumen Penyuluh Perindustrian dan Perdagangan Pertama
5. Dokumentasi kegiatan Penyuluh Perindustrian dan Perdagangan Pertama
6. Hasil Kajian Penyuluh Perindustrian dan Perdagangan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perindustrian dan Perdagangan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perindustrian dan Perdagangan Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Perindustrian dan Perdagangan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3688',
            'nama_jabatan' => 'Penyuluh Perindustrian dan Perdagangan Muda',
            'nama_unit' => 'Penyuluh Perindustrian dan Perdagangan Muda',
            'ikhtisar' => 'Melakukan penyuluhan di bidang perindustrian dan perdagangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perindustrian dan Perdagangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perindustrian dan Perdagangan Muda
2. Data, Bahan dan Informasi terkait Penyuluh Perindustrian dan Perdagangan Muda
3. Produk hukum terkait jabatan Penyuluh Perindustrian dan Perdagangan Muda
4. Dokumen Penyuluh Perindustrian dan Perdagangan Muda
5. Dokumentasi kegiatan Penyuluh Perindustrian dan Perdagangan Muda
6. Hasil Kajian Penyuluh Perindustrian dan Perdagangan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perindustrian dan Perdagangan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perindustrian dan Perdagangan Muda
9. Laporan pelaksanaan kegiatan Penyuluh Perindustrian dan Perdagangan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3689',
            'nama_jabatan' => 'Penyuluh Perindustrian dan Perdagangan Madya',
            'nama_unit' => 'Penyuluh Perindustrian dan Perdagangan Madya',
            'ikhtisar' => 'Melakukan penyuluhan di bidang perindustrian dan perdagangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perindustrian dan Perdagangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perindustrian dan Perdagangan Madya
2. Data, Bahan dan Informasi terkait Penyuluh Perindustrian dan Perdagangan Madya
3. Produk hukum terkait jabatan Penyuluh Perindustrian dan Perdagangan Madya
4. Dokumen Penyuluh Perindustrian dan Perdagangan Madya
5. Dokumentasi kegiatan Penyuluh Perindustrian dan Perdagangan Madya
6. Hasil Kajian Penyuluh Perindustrian dan Perdagangan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perindustrian dan Perdagangan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perindustrian dan Perdagangan Madya
9. Laporan pelaksanaan kegiatan Penyuluh Perindustrian dan Perdagangan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3690',
            'nama_jabatan' => 'Penyuluh Pertanian Terampil',
            'nama_unit' => 'Penyuluh Pertanian Terampil',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Terampil
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Terampil
3. Produk hukum terkait jabatan Penyuluh Pertanian Terampil
4. Dokumen Penyuluh Pertanian Terampil
5. Dokumentasi kegiatan Penyuluh Pertanian Terampil
6. Hasil Kajian Penyuluh Pertanian Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Terampil
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3691',
            'nama_jabatan' => 'Penyuluh Pertanian Mahir',
            'nama_unit' => 'Penyuluh Pertanian Mahir',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Mahir
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Mahir
3. Produk hukum terkait jabatan Penyuluh Pertanian Mahir
4. Dokumen Penyuluh Pertanian Mahir
5. Dokumentasi kegiatan Penyuluh Pertanian Mahir
6. Hasil Kajian Penyuluh Pertanian Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Mahir
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3692',
            'nama_jabatan' => 'Penyuluh Pertanian Penyelia',
            'nama_unit' => 'Penyuluh Pertanian Penyelia',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Penyelia
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Penyelia
3. Produk hukum terkait jabatan Penyuluh Pertanian Penyelia
4. Dokumen Penyuluh Pertanian Penyelia
5. Dokumentasi kegiatan Penyuluh Pertanian Penyelia
6. Hasil Kajian Penyuluh Pertanian Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Penyelia
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3693',
            'nama_jabatan' => 'Penyuluh Pertanian Pertama',
            'nama_unit' => 'Penyuluh Pertanian Pertama',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Pertama
3. Produk hukum terkait jabatan Penyuluh Pertanian Pertama
4. Dokumen Penyuluh Pertanian Pertama
5. Dokumentasi kegiatan Penyuluh Pertanian Pertama
6. Hasil Kajian Penyuluh Pertanian Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3694',
            'nama_jabatan' => 'Penyuluh Pertanian Muda',
            'nama_unit' => 'Penyuluh Pertanian Muda',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Muda
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Muda
3. Produk hukum terkait jabatan Penyuluh Pertanian Muda
4. Dokumen Penyuluh Pertanian Muda
5. Dokumentasi kegiatan Penyuluh Pertanian Muda
6. Hasil Kajian Penyuluh Pertanian Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Muda
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3695',
            'nama_jabatan' => 'Penyuluh Pertanian Madya',
            'nama_unit' => 'Penyuluh Pertanian Madya',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Madya
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Madya
3. Produk hukum terkait jabatan Penyuluh Pertanian Madya
4. Dokumen Penyuluh Pertanian Madya
5. Dokumentasi kegiatan Penyuluh Pertanian Madya
6. Hasil Kajian Penyuluh Pertanian Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Madya
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3696',
            'nama_jabatan' => 'Penyuluh Pertanian Utama',
            'nama_unit' => 'Penyuluh Pertanian Utama',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan, evaluasi dan pengembangan metode penyuluhan pertanian.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV di Bidang Pertanian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Pertanian Utama
2. Data, Bahan dan Informasi terkait Penyuluh Pertanian Utama
3. Produk hukum terkait jabatan Penyuluh Pertanian Utama
4. Dokumen Penyuluh Pertanian Utama
5. Dokumentasi kegiatan Penyuluh Pertanian Utama
6. Hasil Kajian Penyuluh Pertanian Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Pertanian Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Pertanian Utama
9. Laporan pelaksanaan kegiatan Penyuluh Pertanian Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3697',
            'nama_jabatan' => 'Penyuluh Perikanan Pemula',
            'nama_unit' => 'Penyuluh Perikanan Pemula',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'SUPM/SMK',
            'pdd_jurusan' => 'SUPM/SMK Kejuruan Bidang Kelautan dan Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Pemula
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Pemula
3. Produk hukum terkait jabatan Penyuluh Perikanan Pemula
4. Dokumen Penyuluh Perikanan Pemula
5. Dokumentasi kegiatan Penyuluh Perikanan Pemula
6. Hasil Kajian Penyuluh Perikanan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Pemula
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3698',
            'nama_jabatan' => 'Penyuluh Perikanan Terampil',
            'nama_unit' => 'Penyuluh Perikanan Terampil',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'SUPM/SMK',
            'pdd_jurusan' => 'SUPM/SMK Kejuruan Bidang Kelautan dan Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Terampil
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Terampil
3. Produk hukum terkait jabatan Penyuluh Perikanan Terampil
4. Dokumen Penyuluh Perikanan Terampil
5. Dokumentasi kegiatan Penyuluh Perikanan Terampil
6. Hasil Kajian Penyuluh Perikanan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Terampil
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3699',
            'nama_jabatan' => 'Penyuluh Perikanan Mahir',
            'nama_unit' => 'Penyuluh Perikanan Mahir',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'SUPM/SMK',
            'pdd_jurusan' => 'SUPM/SMK Kejuruan Bidang Kelautan dan Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Mahir
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Mahir
3. Produk hukum terkait jabatan Penyuluh Perikanan Mahir
4. Dokumen Penyuluh Perikanan Mahir
5. Dokumentasi kegiatan Penyuluh Perikanan Mahir
6. Hasil Kajian Penyuluh Perikanan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Mahir
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3700',
            'nama_jabatan' => 'Penyuluh Perikanan Penyelia',
            'nama_unit' => 'Penyuluh Perikanan Penyelia',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'SUPM/SMK',
            'pdd_jurusan' => 'SUPM/SMK Kejuruan Bidang Kelautan dan Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Penyelia
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Penyelia
3. Produk hukum terkait jabatan Penyuluh Perikanan Penyelia
4. Dokumen Penyuluh Perikanan Penyelia
5. Dokumentasi kegiatan Penyuluh Perikanan Penyelia
6. Hasil Kajian Penyuluh Perikanan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Penyelia
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3701',
            'nama_jabatan' => 'Penyuluh Perikanan Pertama',
            'nama_unit' => 'Penyuluh Perikanan Pertama',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Bidang Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Pertama
3. Produk hukum terkait jabatan Penyuluh Perikanan Pertama
4. Dokumen Penyuluh Perikanan Pertama
5. Dokumentasi kegiatan Penyuluh Perikanan Pertama
6. Hasil Kajian Penyuluh Perikanan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3702',
            'nama_jabatan' => 'Penyuluh Perikanan Muda',
            'nama_unit' => 'Penyuluh Perikanan Muda',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Bidang Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Muda
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Muda
3. Produk hukum terkait jabatan Penyuluh Perikanan Muda
4. Dokumen Penyuluh Perikanan Muda
5. Dokumentasi kegiatan Penyuluh Perikanan Muda
6. Hasil Kajian Penyuluh Perikanan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Muda
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3703',
            'nama_jabatan' => 'Penyuluh Perikanan Madya',
            'nama_unit' => 'Penyuluh Perikanan Madya',
            'ikhtisar' => 'Melakukan kegiatan penyuluhan perikanan yang meliputi persiapan, pelaksanaan, evaluasi dan pelaporan serta pengembangan penyuluhan perikanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Bidang Perikanan atau sesuai kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Penyuluh Perikanan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Perikanan Madya
2. Data, Bahan dan Informasi terkait Penyuluh Perikanan Madya
3. Produk hukum terkait jabatan Penyuluh Perikanan Madya
4. Dokumen Penyuluh Perikanan Madya
5. Dokumentasi kegiatan Penyuluh Perikanan Madya
6. Hasil Kajian Penyuluh Perikanan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Perikanan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Perikanan Madya
9. Laporan pelaksanaan kegiatan Penyuluh Perikanan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Kebenaran data dan informasi yang dikumpulkan
- Melaksanakan penyuluhan sesuai dengan target yang ditetapkan
- Kebenaran analisa dan kajian ',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '- Mengumpulan data
- Melaksanakan penyuluhan langsung ke lapangan
- Menyusun kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3704',
            'nama_jabatan' => 'Penyuluh Sosial Pertama',
            'nama_unit' => 'Penyuluh Sosial Pertama',
            'ikhtisar' => 'Melaksanakan penyuluhan sosial dan pengembangan penyuluhan sosial.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Sarjana (S1) Sesuai dengan kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Sosial Pertama
2. Data, Bahan dan Informasi terkait Penyuluh Sosial Pertama
3. Produk hukum terkait jabatan Penyuluh Sosial Pertama
4. Dokumen Penyuluh Sosial Pertama
5. Dokumentasi kegiatan Penyuluh Sosial Pertama
6. Hasil Kajian Penyuluh Sosial Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Sosial Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Sosial Pertama
9. Laporan pelaksanaan kegiatan Penyuluh Sosial Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kebenaran data dan informasi penyuluhan sosial 
b. Data dan Inventaris pengembangan penyuluhan sosial
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Sosial Kemasyarakatan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3705',
            'nama_jabatan' => 'Penyuluh Sosial Muda',
            'nama_unit' => 'Penyuluh Sosial Muda',
            'ikhtisar' => 'Melaksanakan penyuluhan sosial dan pengembangan penyuluhan sosial.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Sarjana (S1) Sesuai dengan kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Sosial Muda
2. Data, Bahan dan Informasi terkait Penyuluh Sosial Muda
3. Produk hukum terkait jabatan Penyuluh Sosial Muda
4. Dokumen Penyuluh Sosial Muda
5. Dokumentasi kegiatan Penyuluh Sosial Muda
6. Hasil Kajian Penyuluh Sosial Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Sosial Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Sosial Muda
9. Laporan pelaksanaan kegiatan Penyuluh Sosial Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kebenaran data dan informasi penyuluhan sosial 
b. Data dan Inventaris pengembangan penyuluhan sosial
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Sosial Kemasyarakatan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3706',
            'nama_jabatan' => 'Penyuluh Sosial Madya',
            'nama_unit' => 'Penyuluh Sosial Madya',
            'ikhtisar' => 'Melaksanakan penyuluhan sosial dan pengembangan penyuluhan sosial.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Sarjana (S1) Sesuai dengan kualifikasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penyuluh Sosial Madya
2. Data, Bahan dan Informasi terkait Penyuluh Sosial Madya
3. Produk hukum terkait jabatan Penyuluh Sosial Madya
4. Dokumen Penyuluh Sosial Madya
5. Dokumentasi kegiatan Penyuluh Sosial Madya
6. Hasil Kajian Penyuluh Sosial Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Penyuluh Sosial Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penyuluh Sosial Madya
9. Laporan pelaksanaan kegiatan Penyuluh Sosial Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kebenaran data dan informasi penyuluhan sosial 
b. Data dan Inventaris pengembangan penyuluhan sosial
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penyuluhan Sosial Kemasyarakatan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3707',
            'nama_jabatan' => 'Perancang Peraturan Perundang-undangan Pertama',
            'nama_unit' => 'Perancang Peraturan Perundang-undangan Pertama',
            'ikhtisar' => 'Menyiapkan, mengolah dan merumuskan rancanagan peraturan perundang-undangan dan instrumen hukum lainnya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 Hukum Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Perancang Peraturan Perundang-undangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perancang Peraturan Perundang-undangan Pertama
2. Data, Bahan dan Informasi terkait Perancang Peraturan Perundang-undangan Pertama
3. Produk hukum terkait jabatan Perancang Peraturan Perundang-undangan Pertama
4. Dokumen Perancang Peraturan Perundang-undangan Pertama
5. Dokumentasi kegiatan Perancang Peraturan Perundang-undangan Pertama
6. Hasil Kajian Perancang Peraturan Perundang-undangan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Perancang Peraturan Perundang-undangan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perancang Peraturan Perundang-undangan Pertama
9. Laporan pelaksanaan kegiatan Perancang Peraturan Perundang-undangan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/ bahan kerja yang diterima
b.Menggunakan perangkat kerja yang tersedia
c. Mewakili dalam proses pembentukan peraturan perundang-undangan/ proses persidangan/ proses sengketa aset.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3708',
            'nama_jabatan' => 'Perancang Peraturan Perundang-undangan Muda',
            'nama_unit' => 'Perancang Peraturan Perundang-undangan Muda',
            'ikhtisar' => 'Menyiapkan, mengolah dan merumuskan rancanagan peraturan perundang-undangan dan instrumen hukum lainnya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 Hukum Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Perancang Peraturan Perundang-undangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perancang Peraturan Perundang-undangan Muda
2. Data, Bahan dan Informasi terkait Perancang Peraturan Perundang-undangan Muda
3. Produk hukum terkait jabatan Perancang Peraturan Perundang-undangan Muda
4. Dokumen Perancang Peraturan Perundang-undangan Muda
5. Dokumentasi kegiatan Perancang Peraturan Perundang-undangan Muda
6. Hasil Kajian Perancang Peraturan Perundang-undangan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Perancang Peraturan Perundang-undangan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perancang Peraturan Perundang-undangan Muda
9. Laporan pelaksanaan kegiatan Perancang Peraturan Perundang-undangan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/ bahan kerja yang diterima
b.Menggunakan perangkat kerja yang tersedia
c. Mewakili dalam proses pembentukan peraturan perundang-undangan/ proses persidangan/ proses sengketa aset.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3709',
            'nama_jabatan' => 'Perancang Peraturan Perundang-undangan Madya',
            'nama_unit' => 'Perancang Peraturan Perundang-undangan Madya',
            'ikhtisar' => 'Menyiapkan, mengolah dan merumuskan rancanagan peraturan perundang-undangan dan instrumen hukum lainnya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 Hukum Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Perancang Peraturan Perundang-undangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perancang Peraturan Perundang-undangan Madya
2. Data, Bahan dan Informasi terkait Perancang Peraturan Perundang-undangan Madya
3. Produk hukum terkait jabatan Perancang Peraturan Perundang-undangan Madya
4. Dokumen Perancang Peraturan Perundang-undangan Madya
5. Dokumentasi kegiatan Perancang Peraturan Perundang-undangan Madya
6. Hasil Kajian Perancang Peraturan Perundang-undangan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Perancang Peraturan Perundang-undangan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perancang Peraturan Perundang-undangan Madya
9. Laporan pelaksanaan kegiatan Perancang Peraturan Perundang-undangan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/ bahan kerja yang diterima
b.Menggunakan perangkat kerja yang tersedia
c. Mewakili dalam proses pembentukan peraturan perundang-undangan/ proses persidangan/ proses sengketa aset.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3710',
            'nama_jabatan' => 'Perancang Peraturan Peundang-undangan Utama',
            'nama_unit' => 'Perancang Peraturan Peundang-undangan Utama',
            'ikhtisar' => 'Menyiapkan, mengolah dan merumuskan rancanagan peraturan perundang-undangan dan instrumen hukum lainnya.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 Hukum Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Perancang Peraturan Perundang-undangan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perancang Peraturan Peundang-undangan Utama
2. Data, Bahan dan Informasi terkait Perancang Peraturan Peundang-undangan Utama
3. Produk hukum terkait jabatan Perancang Peraturan Peundang-undangan Utama
4. Dokumen Perancang Peraturan Peundang-undangan Utama
5. Dokumentasi kegiatan Perancang Peraturan Peundang-undangan Utama
6. Hasil Kajian Perancang Peraturan Peundang-undangan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Perancang Peraturan Peundang-undangan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perancang Peraturan Peundang-undangan Utama
9. Laporan pelaksanaan kegiatan Perancang Peraturan Peundang-undangan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/ bahan kerja yang diterima
b.Menggunakan perangkat kerja yang tersedia
c. Mewakili dalam proses pembentukan peraturan perundang-undangan/ proses persidangan/ proses sengketa aset.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3711',
            'nama_jabatan' => 'Perawat Terampil',
            'nama_unit' => 'Perawat Terampil',
            'ikhtisar' => 'Melakukan kegiatan Pelayanan Keperawatan yang meliputi asuhan keperawatan, dan pengelolaan keperawatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Keperawatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perawat Terampil
2. Data, Bahan dan Informasi terkait Perawat Terampil
3. Produk hukum terkait jabatan Perawat Terampil
4. Dokumen Perawat Terampil
5. Dokumentasi kegiatan Perawat Terampil
6. Hasil Kajian Perawat Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Perawat Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perawat Terampil
9. Laporan pelaksanaan kegiatan Perawat Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kesehatan pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3712',
            'nama_jabatan' => 'Perawat Mahir',
            'nama_unit' => 'Perawat Mahir',
            'ikhtisar' => 'Melakukan kegiatan Pelayanan Keperawatan yang meliputi asuhan keperawatan, dan pengelolaan keperawatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Keperawatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perawat Mahir
2. Data, Bahan dan Informasi terkait Perawat Mahir
3. Produk hukum terkait jabatan Perawat Mahir
4. Dokumen Perawat Mahir
5. Dokumentasi kegiatan Perawat Mahir
6. Hasil Kajian Perawat Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Perawat Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perawat Mahir
9. Laporan pelaksanaan kegiatan Perawat Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kesehatan pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3713',
            'nama_jabatan' => 'Perawat Penyelia',
            'nama_unit' => 'Perawat Penyelia',
            'ikhtisar' => 'Melakukan kegiatan Pelayanan Keperawatan yang meliputi asuhan keperawatan, dan pengelolaan keperawatan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Keperawatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perawat Penyelia
2. Data, Bahan dan Informasi terkait Perawat Penyelia
3. Produk hukum terkait jabatan Perawat Penyelia
4. Dokumen Perawat Penyelia
5. Dokumentasi kegiatan Perawat Penyelia
6. Hasil Kajian Perawat Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Perawat Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perawat Penyelia
9. Laporan pelaksanaan kegiatan Perawat Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kesehatan pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3714',
            'nama_jabatan' => 'Perawat Pertama',
            'nama_unit' => 'Perawat Pertama',
            'ikhtisar' => 'Melakukan kegiatan Pelayanan Keperawatan yang meliputi asuhan keperawatan, dan pengelolaan keperawatan.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Sarjana (S1) Keperawatan berijazah Ners',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perawat Pertama
2. Data, Bahan dan Informasi terkait Perawat Pertama
3. Produk hukum terkait jabatan Perawat Pertama
4. Dokumen Perawat Pertama
5. Dokumentasi kegiatan Perawat Pertama
6. Hasil Kajian Perawat Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Perawat Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perawat Pertama
9. Laporan pelaksanaan kegiatan Perawat Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kesehatan pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3715',
            'nama_jabatan' => 'Perawat Muda',
            'nama_unit' => 'Perawat Muda',
            'ikhtisar' => 'Melakukan kegiatan Pelayanan Keperawatan yang meliputi asuhan keperawatan, dan pengelolaan keperawatan.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Sarjana (S1) Keperawatan berijazah Ners',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perawat Muda
2. Data, Bahan dan Informasi terkait Perawat Muda
3. Produk hukum terkait jabatan Perawat Muda
4. Dokumen Perawat Muda
5. Dokumentasi kegiatan Perawat Muda
6. Hasil Kajian Perawat Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Perawat Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perawat Muda
9. Laporan pelaksanaan kegiatan Perawat Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kesehatan pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3716',
            'nama_jabatan' => 'Perawat Madya',
            'nama_unit' => 'Perawat Madya',
            'ikhtisar' => 'Melakukan kegiatan Pelayanan Keperawatan yang meliputi asuhan keperawatan, dan pengelolaan keperawatan.',
            'pdd_formal' => 'S 1',
            'pdd_jurusan' => 'Sarjana (S1) Keperawatan berijazah Ners',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perawat Madya
2. Data, Bahan dan Informasi terkait Perawat Madya
3. Produk hukum terkait jabatan Perawat Madya
4. Dokumen Perawat Madya
5. Dokumentasi kegiatan Perawat Madya
6. Hasil Kajian Perawat Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Perawat Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perawat Madya
9. Laporan pelaksanaan kegiatan Perawat Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Kesehatan pasien dalam perawatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3717',
            'nama_jabatan' => 'Perekam Medis Terampil',
            'nama_unit' => 'Perekam Medis Terampil',
            'ikhtisar' => 'Melakukan kegiatan pelayanan rekam medis informasi kesehatan yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Rekam Medis Informasi Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekam Medis Terampil
2. Data, Bahan dan Informasi terkait Perekam Medis Terampil
3. Produk hukum terkait jabatan Perekam Medis Terampil
4. Dokumen Perekam Medis Terampil
5. Dokumentasi kegiatan Perekam Medis Terampil
6. Hasil Kajian Perekam Medis Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Perekam Medis Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekam Medis Terampil
9. Laporan pelaksanaan kegiatan Perekam Medis Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas, kualitas, dan kerahasiaan hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3718',
            'nama_jabatan' => 'Perekam Medis Mahir',
            'nama_unit' => 'Perekam Medis Mahir',
            'ikhtisar' => 'Melakukan kegiatan pelayanan rekam medis informasi kesehatan yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Rekam Medis Informasi Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekam Medis Mahir
2. Data, Bahan dan Informasi terkait Perekam Medis Mahir
3. Produk hukum terkait jabatan Perekam Medis Mahir
4. Dokumen Perekam Medis Mahir
5. Dokumentasi kegiatan Perekam Medis Mahir
6. Hasil Kajian Perekam Medis Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Perekam Medis Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekam Medis Mahir
9. Laporan pelaksanaan kegiatan Perekam Medis Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas, kualitas, dan kerahasiaan hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3719',
            'nama_jabatan' => 'Perekam Medis Penyelia',
            'nama_unit' => 'Perekam Medis Penyelia',
            'ikhtisar' => 'Melakukan kegiatan pelayanan rekam medis informasi kesehatan yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Rekam Medis Informasi Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekam Medis Penyelia
2. Data, Bahan dan Informasi terkait Perekam Medis Penyelia
3. Produk hukum terkait jabatan Perekam Medis Penyelia
4. Dokumen Perekam Medis Penyelia
5. Dokumentasi kegiatan Perekam Medis Penyelia
6. Hasil Kajian Perekam Medis Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Perekam Medis Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekam Medis Penyelia
9. Laporan pelaksanaan kegiatan Perekam Medis Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas, kualitas, dan kerahasiaan hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3720',
            'nama_jabatan' => 'Perekam Medis Pertama',
            'nama_unit' => 'Perekam Medis Pertama',
            'ikhtisar' => 'Melakukan kegiatan pelayanan rekam medis informasi kesehatan yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rekam Medis Informasi Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekam Medis Pertama
2. Data, Bahan dan Informasi terkait Perekam Medis Pertama
3. Produk hukum terkait jabatan Perekam Medis Pertama
4. Dokumen Perekam Medis Pertama
5. Dokumentasi kegiatan Perekam Medis Pertama
6. Hasil Kajian Perekam Medis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Perekam Medis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekam Medis Pertama
9. Laporan pelaksanaan kegiatan Perekam Medis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas, kualitas, dan kerahasiaan hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3721',
            'nama_jabatan' => 'Perekam Medis Muda',
            'nama_unit' => 'Perekam Medis Muda',
            'ikhtisar' => 'Melakukan kegiatan pelayanan rekam medis informasi kesehatan yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rekam Medis Informasi Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekam Medis Muda
2. Data, Bahan dan Informasi terkait Perekam Medis Muda
3. Produk hukum terkait jabatan Perekam Medis Muda
4. Dokumen Perekam Medis Muda
5. Dokumentasi kegiatan Perekam Medis Muda
6. Hasil Kajian Perekam Medis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Perekam Medis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekam Medis Muda
9. Laporan pelaksanaan kegiatan Perekam Medis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas, kualitas, dan kerahasiaan hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3722',
            'nama_jabatan' => 'Perekam Medis Madya',
            'nama_unit' => 'Perekam Medis Madya',
            'ikhtisar' => 'Melakukan kegiatan pelayanan rekam medis informasi kesehatan yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rekam Medis Informasi Kesehatan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekam Medis Madya
2. Data, Bahan dan Informasi terkait Perekam Medis Madya
3. Produk hukum terkait jabatan Perekam Medis Madya
4. Dokumen Perekam Medis Madya
5. Dokumentasi kegiatan Perekam Medis Madya
6. Hasil Kajian Perekam Medis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Perekam Medis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekam Medis Madya
9. Laporan pelaksanaan kegiatan Perekam Medis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas, kualitas, dan kerahasiaan hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3723',
            'nama_jabatan' => 'Perencana Pertama',
            'nama_unit' => 'Perencana Pertama',
            'ikhtisar' => 'Menyiapkan, mengkaji, merumuskan kebijakan dan menyusun rencana pembangunan pada instansi pemerintah secara teratur dan sistematis, termasuk mengendalikan, memantau, dan mengevaluasi pelaksanaan rencana pembangunan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rumpun Ilmu Humaniora, Rumpun Ilmu Sosial, Rumpun Ilmu Alam, Rumpun Ilmu Formal, Rumpun Ilmu Terapan, atau rumpun lainnya sesuai kebutuhan bidang perencanaan pembangunan yang ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perencana Pertama
2. Data, Bahan dan Informasi terkait Perencana Pertama
3. Produk hukum terkait jabatan Perencana Pertama
4. Dokumen Perencana Pertama
5. Dokumentasi kegiatan Perencana Pertama
6. Hasil Kajian Perencana Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Perencana Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perencana Pertama
9. Laporan pelaksanaan kegiatan Perencana Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan perencanaan kegiatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan analisis jabatan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3724',
            'nama_jabatan' => 'Perencana Muda',
            'nama_unit' => 'Perencana Muda',
            'ikhtisar' => 'Menyiapkan, mengkaji, merumuskan kebijakan dan menyusun rencana pembangunan pada instansi pemerintah secara teratur dan sistematis, termasuk mengendalikan, memantau, dan mengevaluasi pelaksanaan rencana pembangunan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rumpun Ilmu Humaniora, Rumpun Ilmu Sosial, Rumpun Ilmu Alam, Rumpun Ilmu Formal, Rumpun Ilmu Terapan, atau rumpun lainnya sesuai kebutuhan bidang perencanaan pembangunan yang ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perencana Muda
2. Data, Bahan dan Informasi terkait Perencana Muda
3. Produk hukum terkait jabatan Perencana Muda
4. Dokumen Perencana Muda
5. Dokumentasi kegiatan Perencana Muda
6. Hasil Kajian Perencana Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Perencana Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perencana Muda
9. Laporan pelaksanaan kegiatan Perencana Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan perencanaan kegiatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan analisis jabatan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3725',
            'nama_jabatan' => 'Perencana Madya',
            'nama_unit' => 'Perencana Madya',
            'ikhtisar' => 'Menyiapkan, mengkaji, merumuskan kebijakan dan menyusun rencana pembangunan pada instansi pemerintah secara teratur dan sistematis, termasuk mengendalikan, memantau, dan mengevaluasi pelaksanaan rencana pembangunan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rumpun Ilmu Humaniora, Rumpun Ilmu Sosial, Rumpun Ilmu Alam, Rumpun Ilmu Formal, Rumpun Ilmu Terapan, atau rumpun lainnya sesuai kebutuhan bidang perencanaan pembangunan yang ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perencana Madya
2. Data, Bahan dan Informasi terkait Perencana Madya
3. Produk hukum terkait jabatan Perencana Madya
4. Dokumen Perencana Madya
5. Dokumentasi kegiatan Perencana Madya
6. Hasil Kajian Perencana Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Perencana Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perencana Madya
9. Laporan pelaksanaan kegiatan Perencana Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan perencanaan kegiatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan analisis jabatan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3726',
            'nama_jabatan' => 'Perencana Utama',
            'nama_unit' => 'Perencana Utama',
            'ikhtisar' => 'Menyiapkan, mengkaji, merumuskan kebijakan dan menyusun rencana pembangunan pada instansi pemerintah secara teratur dan sistematis, termasuk mengendalikan, memantau, dan mengevaluasi pelaksanaan rencana pembangunan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Rumpun Ilmu Humaniora, Rumpun Ilmu Sosial, Rumpun Ilmu Alam, Rumpun Ilmu Formal, Rumpun Ilmu Terapan, atau rumpun lainnya sesuai kebutuhan bidang perencanaan pembangunan yang ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perencana Utama
2. Data, Bahan dan Informasi terkait Perencana Utama
3. Produk hukum terkait jabatan Perencana Utama
4. Dokumen Perencana Utama
5. Dokumentasi kegiatan Perencana Utama
6. Hasil Kajian Perencana Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Perencana Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perencana Utama
9. Laporan pelaksanaan kegiatan Perencana Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Keakuratan perencanaan kegiatan
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan analisis jabatan
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3727',
            'nama_jabatan' => 'Perekayasa Pertama',
            'nama_unit' => 'Perekayasa Pertama',
            'ikhtisar' => 'Melakukan kegiatan kerekayasaan',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekayasa Pertama
2. Data, Bahan dan Informasi terkait Perekayasa Pertama
3. Produk hukum terkait jabatan Perekayasa Pertama
4. Dokumen Perekayasa Pertama
5. Dokumentasi kegiatan Perekayasa Pertama
6. Hasil Kajian Perekayasa Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Perekayasa Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekayasa Pertama
9. Laporan pelaksanaan kegiatan Perekayasa Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Perekayasaan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Melaksanakan desain konseptual; 
b. Melaksanakan desain awal; 
c. Melaksanakan desain rinci; 
d. Melaksanakan perhitungan; 
e. Melaksanakan pengujian; 
f. Melaksanakan eksplorasi; 
g. Melaksanakan observasi; 
h. Melaksanakan pengukuran; 
i. Melaksanakan modifikasi produk;
j. Melaksanakan perawatan produk; 
k. Melaksanakan studi kelayakan sistem teknologi; 
l. Melaksanakan studi banding sistem teknologi; 
m. Menuliskan hasil pekerjaan di atas dalam sistem pelaporan yang telah ditentukan dan melaporkan hasilnya kepada
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3728',
            'nama_jabatan' => 'Perekayasa Muda',
            'nama_unit' => 'Perekayasa Muda',
            'ikhtisar' => 'Melakukan kegiatan kerekayasaan',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekayasa Muda
2. Data, Bahan dan Informasi terkait Perekayasa Muda
3. Produk hukum terkait jabatan Perekayasa Muda
4. Dokumen Perekayasa Muda
5. Dokumentasi kegiatan Perekayasa Muda
6. Hasil Kajian Perekayasa Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Perekayasa Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekayasa Muda
9. Laporan pelaksanaan kegiatan Perekayasa Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Perekayasaan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Melaksanakan desain konseptual; 
b. Melaksanakan desain awal; 
c. Melaksanakan desain rinci; 
d. Melaksanakan perhitungan; 
e. Melaksanakan pengujian; 
f. Melaksanakan eksplorasi; 
g. Melaksanakan observasi; 
h. Melaksanakan pengukuran; 
i. Melaksanakan modifikasi produk;
j. Melaksanakan perawatan produk; 
k. Melaksanakan studi kelayakan sistem teknologi; 
l. Melaksanakan studi banding sistem teknologi; 
m. Menuliskan hasil pekerjaan di atas dalam sistem pelaporan yang telah ditentukan dan melaporkan hasilnya kepada
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3729',
            'nama_jabatan' => 'Perekayasa Madya',
            'nama_unit' => 'Perekayasa Madya',
            'ikhtisar' => 'Melakukan kegiatan kerekayasaan',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekayasa Madya
2. Data, Bahan dan Informasi terkait Perekayasa Madya
3. Produk hukum terkait jabatan Perekayasa Madya
4. Dokumen Perekayasa Madya
5. Dokumentasi kegiatan Perekayasa Madya
6. Hasil Kajian Perekayasa Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Perekayasa Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekayasa Madya
9. Laporan pelaksanaan kegiatan Perekayasa Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Perekayasaan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Melaksanakan desain konseptual; 
b. Melaksanakan desain awal; 
c. Melaksanakan desain rinci; 
d. Melaksanakan perhitungan; 
e. Melaksanakan pengujian; 
f. Melaksanakan eksplorasi; 
g. Melaksanakan observasi; 
h. Melaksanakan pengukuran; 
i. Melaksanakan modifikasi produk;
j. Melaksanakan perawatan produk; 
k. Melaksanakan studi kelayakan sistem teknologi; 
l. Melaksanakan studi banding sistem teknologi; 
m. Menuliskan hasil pekerjaan di atas dalam sistem pelaporan yang telah ditentukan dan melaporkan hasilnya kepada
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3730',
            'nama_jabatan' => 'Perekayasa Utama',
            'nama_unit' => 'Perekayasa Utama',
            'ikhtisar' => 'Melakukan kegiatan kerekayasaan',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Perekayasa Utama
2. Data, Bahan dan Informasi terkait Perekayasa Utama
3. Produk hukum terkait jabatan Perekayasa Utama
4. Dokumen Perekayasa Utama
5. Dokumentasi kegiatan Perekayasa Utama
6. Hasil Kajian Perekayasa Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Perekayasa Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Perekayasa Utama
9. Laporan pelaksanaan kegiatan Perekayasa Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Perekayasaan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Melaksanakan desain konseptual; 
b. Melaksanakan desain awal; 
c. Melaksanakan desain rinci; 
d. Melaksanakan perhitungan; 
e. Melaksanakan pengujian; 
f. Melaksanakan eksplorasi; 
g. Melaksanakan observasi; 
h. Melaksanakan pengukuran; 
i. Melaksanakan modifikasi produk;
j. Melaksanakan perawatan produk; 
k. Melaksanakan studi kelayakan sistem teknologi; 
l. Melaksanakan studi banding sistem teknologi; 
m. Menuliskan hasil pekerjaan di atas dalam sistem pelaporan yang telah ditentukan dan melaporkan hasilnya kepada
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3731',
            'nama_jabatan' => 'Polisi Kehutanan Pemula',
            'nama_unit' => 'Polisi Kehutanan Pemula',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'SMK/D III',
            'pdd_jurusan' => 'SMK/D III Bidang Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Pemula
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Pemula
3. Produk hukum terkait jabatan Polisi Kehutanan Pemula
4. Dokumen Polisi Kehutanan Pemula
5. Dokumentasi kegiatan Polisi Kehutanan Pemula
6. Hasil Kajian Polisi Kehutanan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Pemula
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3732',
            'nama_jabatan' => 'Polisi Kehutanan Terampil',
            'nama_unit' => 'Polisi Kehutanan Terampil',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'SMA',
            'pdd_jurusan' => 'SMK/D III Bidang Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Terampil
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Terampil
3. Produk hukum terkait jabatan Polisi Kehutanan Terampil
4. Dokumen Polisi Kehutanan Terampil
5. Dokumentasi kegiatan Polisi Kehutanan Terampil
6. Hasil Kajian Polisi Kehutanan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Terampil
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3733',
            'nama_jabatan' => 'Polisi Kehutanan Mahir',
            'nama_unit' => 'Polisi Kehutanan Mahir',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'SMA',
            'pdd_jurusan' => 'SMK/D III Bidang Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Mahir
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Mahir
3. Produk hukum terkait jabatan Polisi Kehutanan Mahir
4. Dokumen Polisi Kehutanan Mahir
5. Dokumentasi kegiatan Polisi Kehutanan Mahir
6. Hasil Kajian Polisi Kehutanan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Mahir
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3734',
            'nama_jabatan' => 'Polisi Kehutanan Penyelia',
            'nama_unit' => 'Polisi Kehutanan Penyelia',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'SMA',
            'pdd_jurusan' => 'SMK/D III Bidang Kehutanan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Penyelia
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Penyelia
3. Produk hukum terkait jabatan Polisi Kehutanan Penyelia
4. Dokumen Polisi Kehutanan Penyelia
5. Dokumentasi kegiatan Polisi Kehutanan Penyelia
6. Hasil Kajian Polisi Kehutanan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Penyelia
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3735',
            'nama_jabatan' => 'Polisi Kehutanan Pertama',
            'nama_unit' => 'Polisi Kehutanan Pertama',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV (Diploma-Empat) Ilmu Alam atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Pertama
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Pertama
3. Produk hukum terkait jabatan Polisi Kehutanan Pertama
4. Dokumen Polisi Kehutanan Pertama
5. Dokumentasi kegiatan Polisi Kehutanan Pertama
6. Hasil Kajian Polisi Kehutanan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Pertama
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3736',
            'nama_jabatan' => 'Polisi Kehutanan Muda',
            'nama_unit' => 'Polisi Kehutanan Muda',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV (Diploma-Empat) Ilmu Alam atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Muda
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Muda
3. Produk hukum terkait jabatan Polisi Kehutanan Muda
4. Dokumen Polisi Kehutanan Muda
5. Dokumentasi kegiatan Polisi Kehutanan Muda
6. Hasil Kajian Polisi Kehutanan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Muda
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3737',
            'nama_jabatan' => 'Polisi Kehutanan Madya',
            'nama_unit' => 'Polisi Kehutanan Madya',
            'ikhtisar' => 'Menyiapkan, melaksanakan, mengembangkan, memantau, dan mengevaluasi serta melaporkan kegiatan perlindungan dan pengamanan hutan serta peredaran hasil hutan

',
            'pdd_formal' => 'S1/DIV',
            'pdd_jurusan' => 'Sarjana (S1)/Diploma IV (Diploma-Empat) Ilmu Alam atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Mengikuti dan lulus Diklat dasar pembentukan Polisi Kehutanan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Polisi Kehutanan Madya
2. Data, Bahan dan Informasi terkait Polisi Kehutanan Madya
3. Produk hukum terkait jabatan Polisi Kehutanan Madya
4. Dokumen Polisi Kehutanan Madya
5. Dokumentasi kegiatan Polisi Kehutanan Madya
6. Hasil Kajian Polisi Kehutanan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Polisi Kehutanan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Polisi Kehutanan Madya
9. Laporan pelaksanaan kegiatan Polisi Kehutanan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang Polisi Kehutanan 
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan Pengamanan Hutan
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3738',
            'nama_jabatan' => 'Pranata Hubungan Masyarakat Terampil',
            'nama_unit' => 'Pranata Hubungan Masyarakat Terampil',
            'ikhtisar' => 'Melakukan kegiatan pelayanan informasi dan kehuinasan, meliputi perencanaan pelayanan informasi dan kehumasan, pelayanan informasi, hubungan kelembagaan, hubungan personil, dan pengembangan pelayanan informasi dan kehumasan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang komunikasi serta  kualifikasi lain yang ditentukan oleh Menteri  Komunikasi dan Informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pranata Humas Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Hubungan Masyarakat Terampil
2. Data, Bahan dan Informasi terkait Pranata Hubungan Masyarakat Terampil
3. Produk hukum terkait jabatan Pranata Hubungan Masyarakat Terampil
4. Dokumen Pranata Hubungan Masyarakat Terampil
5. Dokumentasi kegiatan Pranata Hubungan Masyarakat Terampil
6. Hasil Kajian Pranata Hubungan Masyarakat Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Hubungan Masyarakat Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Hubungan Masyarakat Terampil
9. Laporan pelaksanaan kegiatan Pranata Hubungan Masyarakat Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menggunakan perangkat kerja yang tersedia
b. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3739',
            'nama_jabatan' => 'Pranata Hubungan Masyarakat Mahir',
            'nama_unit' => 'Pranata Hubungan Masyarakat Mahir',
            'ikhtisar' => 'Melakukan kegiatan pelayanan informasi dan kehuinasan, meliputi perencanaan pelayanan informasi dan kehumasan, pelayanan informasi, hubungan kelembagaan, hubungan personil, dan pengembangan pelayanan informasi dan kehumasan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang komunikasi serta  kualifikasi lain yang ditentukan oleh Menteri  Komunikasi dan Informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pranata Humas Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Hubungan Masyarakat Mahir
2. Data, Bahan dan Informasi terkait Pranata Hubungan Masyarakat Mahir
3. Produk hukum terkait jabatan Pranata Hubungan Masyarakat Mahir
4. Dokumen Pranata Hubungan Masyarakat Mahir
5. Dokumentasi kegiatan Pranata Hubungan Masyarakat Mahir
6. Hasil Kajian Pranata Hubungan Masyarakat Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Hubungan Masyarakat Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Hubungan Masyarakat Mahir
9. Laporan pelaksanaan kegiatan Pranata Hubungan Masyarakat Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menggunakan perangkat kerja yang tersedia
b. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3740',
            'nama_jabatan' => 'Pranata Hubungan Masyarakat Penyelia',
            'nama_unit' => 'Pranata Hubungan Masyarakat Penyelia',
            'ikhtisar' => 'Melakukan kegiatan pelayanan informasi dan kehuinasan, meliputi perencanaan pelayanan informasi dan kehumasan, pelayanan informasi, hubungan kelembagaan, hubungan personil, dan pengembangan pelayanan informasi dan kehumasan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang komunikasi serta  kualifikasi lain yang ditentukan oleh Menteri  Komunikasi dan Informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pranata Humas Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Hubungan Masyarakat Penyelia
2. Data, Bahan dan Informasi terkait Pranata Hubungan Masyarakat Penyelia
3. Produk hukum terkait jabatan Pranata Hubungan Masyarakat Penyelia
4. Dokumen Pranata Hubungan Masyarakat Penyelia
5. Dokumentasi kegiatan Pranata Hubungan Masyarakat Penyelia
6. Hasil Kajian Pranata Hubungan Masyarakat Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Hubungan Masyarakat Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Hubungan Masyarakat Penyelia
9. Laporan pelaksanaan kegiatan Pranata Hubungan Masyarakat Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menggunakan perangkat kerja yang tersedia
b. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3741',
            'nama_jabatan' => 'Pranata Hubungan Masyarakat Pertama',
            'nama_unit' => 'Pranata Hubungan Masyarakat Pertama',
            'ikhtisar' => 'Melakukan kegiatan pelayanan informasi dan kehuinasan, meliputi perencanaan pelayanan informasi dan kehumasan, pelayanan informasi, hubungan kelembagaan, hubungan personil, dan pengembangan pelayanan informasi dan kehumasan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Bidang komunikasi serta kualifikasi lain yang  ditentukan oleh Menteri Komunikasi dan Informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pranata Humas Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Hubungan Masyarakat Pertama
2. Data, Bahan dan Informasi terkait Pranata Hubungan Masyarakat Pertama
3. Produk hukum terkait jabatan Pranata Hubungan Masyarakat Pertama
4. Dokumen Pranata Hubungan Masyarakat Pertama
5. Dokumentasi kegiatan Pranata Hubungan Masyarakat Pertama
6. Hasil Kajian Pranata Hubungan Masyarakat Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Hubungan Masyarakat Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Hubungan Masyarakat Pertama
9. Laporan pelaksanaan kegiatan Pranata Hubungan Masyarakat Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menggunakan perangkat kerja yang tersedia
b. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3742',
            'nama_jabatan' => 'Pranata Hubungan Masyarakat Muda',
            'nama_unit' => 'Pranata Hubungan Masyarakat Muda',
            'ikhtisar' => 'Melakukan kegiatan pelayanan informasi dan kehuinasan, meliputi perencanaan pelayanan informasi dan kehumasan, pelayanan informasi, hubungan kelembagaan, hubungan personil, dan pengembangan pelayanan informasi dan kehumasan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Bidang komunikasi serta kualifikasi lain yang  ditentukan oleh Menteri Komunikasi dan Informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pranata Humas Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Hubungan Masyarakat Muda
2. Data, Bahan dan Informasi terkait Pranata Hubungan Masyarakat Muda
3. Produk hukum terkait jabatan Pranata Hubungan Masyarakat Muda
4. Dokumen Pranata Hubungan Masyarakat Muda
5. Dokumentasi kegiatan Pranata Hubungan Masyarakat Muda
6. Hasil Kajian Pranata Hubungan Masyarakat Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Hubungan Masyarakat Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Hubungan Masyarakat Muda
9. Laporan pelaksanaan kegiatan Pranata Hubungan Masyarakat Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menggunakan perangkat kerja yang tersedia
b. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3743',
            'nama_jabatan' => 'Pranata Hubungan Masyarakat Madya',
            'nama_unit' => 'Pranata Hubungan Masyarakat Madya',
            'ikhtisar' => 'Melakukan kegiatan pelayanan informasi dan kehuinasan, meliputi perencanaan pelayanan informasi dan kehumasan, pelayanan informasi, hubungan kelembagaan, hubungan personil, dan pengembangan pelayanan informasi dan kehumasan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S I / D IV Bidang komunikasi serta kualifikasi lain yang  ditentukan oleh Menteri Komunikasi dan Informatika',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Hubungan Masyarakat Madya
2. Data, Bahan dan Informasi terkait Pranata Hubungan Masyarakat Madya
3. Produk hukum terkait jabatan Pranata Hubungan Masyarakat Madya
4. Dokumen Pranata Hubungan Masyarakat Madya
5. Dokumentasi kegiatan Pranata Hubungan Masyarakat Madya
6. Hasil Kajian Pranata Hubungan Masyarakat Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Hubungan Masyarakat Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Hubungan Masyarakat Madya
9. Laporan pelaksanaan kegiatan Pranata Hubungan Masyarakat Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menggunakan perangkat kerja yang tersedia
b. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3744',
            'nama_jabatan' => 'Pranata Komputer Terampil',
            'nama_unit' => 'Pranata Komputer Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Terampil
2. Data, Bahan dan Informasi terkait Pranata Komputer Terampil
3. Produk hukum terkait jabatan Pranata Komputer Terampil
4. Dokumen Pranata Komputer Terampil
5. Dokumentasi kegiatan Pranata Komputer Terampil
6. Hasil Kajian Pranata Komputer Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Terampil
9. Laporan pelaksanaan kegiatan Pranata Komputer Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3745',
            'nama_jabatan' => 'Pranata Komputer Mahir',
            'nama_unit' => 'Pranata Komputer Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Mahir
2. Data, Bahan dan Informasi terkait Pranata Komputer Mahir
3. Produk hukum terkait jabatan Pranata Komputer Mahir
4. Dokumen Pranata Komputer Mahir
5. Dokumentasi kegiatan Pranata Komputer Mahir
6. Hasil Kajian Pranata Komputer Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Mahir
9. Laporan pelaksanaan kegiatan Pranata Komputer Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3746',
            'nama_jabatan' => 'Pranata Komputer Penyelia',
            'nama_unit' => 'Pranata Komputer Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Penyelia
2. Data, Bahan dan Informasi terkait Pranata Komputer Penyelia
3. Produk hukum terkait jabatan Pranata Komputer Penyelia
4. Dokumen Pranata Komputer Penyelia
5. Dokumentasi kegiatan Pranata Komputer Penyelia
6. Hasil Kajian Pranata Komputer Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Penyelia
9. Laporan pelaksanaan kegiatan Pranata Komputer Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3747',
            'nama_jabatan' => 'Pranata Komputer Pertama',
            'nama_unit' => 'Pranata Komputer Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S-1) /Diploma IV Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Pertama
2. Data, Bahan dan Informasi terkait Pranata Komputer Pertama
3. Produk hukum terkait jabatan Pranata Komputer Pertama
4. Dokumen Pranata Komputer Pertama
5. Dokumentasi kegiatan Pranata Komputer Pertama
6. Hasil Kajian Pranata Komputer Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Pertama
9. Laporan pelaksanaan kegiatan Pranata Komputer Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3748',
            'nama_jabatan' => 'Pranata Komputer Muda',
            'nama_unit' => 'Pranata Komputer Muda',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S-1) /Diploma IV Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Muda
2. Data, Bahan dan Informasi terkait Pranata Komputer Muda
3. Produk hukum terkait jabatan Pranata Komputer Muda
4. Dokumen Pranata Komputer Muda
5. Dokumentasi kegiatan Pranata Komputer Muda
6. Hasil Kajian Pranata Komputer Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Muda
9. Laporan pelaksanaan kegiatan Pranata Komputer Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3749',
            'nama_jabatan' => 'Pranata Komputer Madya',
            'nama_unit' => 'Pranata Komputer Madya',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S-1) /Diploma IV Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Madya
2. Data, Bahan dan Informasi terkait Pranata Komputer Madya
3. Produk hukum terkait jabatan Pranata Komputer Madya
4. Dokumen Pranata Komputer Madya
5. Dokumentasi kegiatan Pranata Komputer Madya
6. Hasil Kajian Pranata Komputer Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Madya
9. Laporan pelaksanaan kegiatan Pranata Komputer Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3750',
            'nama_jabatan' => 'Pranata Komputer Utama',
            'nama_unit' => 'Pranata Komputer Utama',
            'ikhtisar' => 'Melaksanakan kegiatan teknologi informasi berbasis komputer yang meliputi tata kelola dan tata laksana teknologi informasi, infrastruktur teknologi informasi, serta sistem informasi dan multimedia.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'Sarjana (S-1) /Diploma IV Bidang Teknologi Informasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Komputer Utama
2. Data, Bahan dan Informasi terkait Pranata Komputer Utama
3. Produk hukum terkait jabatan Pranata Komputer Utama
4. Dokumen Pranata Komputer Utama
5. Dokumentasi kegiatan Pranata Komputer Utama
6. Hasil Kajian Pranata Komputer Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Komputer Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Komputer Utama
9. Laporan pelaksanaan kegiatan Pranata Komputer Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan data dalam database
b. Kemudahan dalam mengakses data
c. Pemeliharaan komputer dan peralatannya
d. Kesesuaian pelaksanaan tugas terhadap rencana kerja',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelaikan program komputer
b. Memproteksi database dari pihak yang tidak bertanggung jawab',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3751',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Pemula',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Pemula',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'SMAK',
            'pdd_jurusan' => 'SMAK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Pemula
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Pemula
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Pemula
4. Dokumen Pranata Laboratorium Kesehatan Pemula
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Pemula
6. Hasil Kajian Pranata Laboratorium Kesehatan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Pemula
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3752',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Terampil',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Terampil',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'SMAK',
            'pdd_jurusan' => 'SMAK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Terampil
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Terampil
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Terampil
4. Dokumen Pranata Laboratorium Kesehatan Terampil
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Terampil
6. Hasil Kajian Pranata Laboratorium Kesehatan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Terampil
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3753',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Mahir',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Mahir',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'SMAK',
            'pdd_jurusan' => 'SMAK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Mahir
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Mahir
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Mahir
4. Dokumen Pranata Laboratorium Kesehatan Mahir
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Mahir
6. Hasil Kajian Pranata Laboratorium Kesehatan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Mahir
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3754',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Penyelia',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Penyelia',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'SMAK',
            'pdd_jurusan' => 'SMAK Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Penyelia
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Penyelia
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Penyelia
4. Dokumen Pranata Laboratorium Kesehatan Penyelia
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Penyelia
6. Hasil Kajian Pranata Laboratorium Kesehatan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Penyelia
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3755',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Pertama',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Pertama',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Pertama
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Pertama
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Pertama
4. Dokumen Pranata Laboratorium Kesehatan Pertama
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Pertama
6. Hasil Kajian Pranata Laboratorium Kesehatan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Pertama
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3756',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Muda',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Muda',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Muda
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Muda
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Muda
4. Dokumen Pranata Laboratorium Kesehatan Muda
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Muda
6. Hasil Kajian Pranata Laboratorium Kesehatan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Muda
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3757',
            'nama_jabatan' => 'Pranata Laboratorium Kesehatan Madya',
            'nama_unit' => 'Pranata Laboratorium Kesehatan Madya',
            'ikhtisar' => 'Melaksanakan tugas pelayanan laboratorium kesehatan meliputi bidang hematologi, kimia klinik, mikrobiologi, imunoserologi, toksikologi, kimia lingkungan, patologi anatomi (histopatologi, sitopatologi, histokimia, imunopatologi, patologi molekuler), biologi dan fisika.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pranata Laboratorium Kesehatan Madya
2. Data, Bahan dan Informasi terkait Pranata Laboratorium Kesehatan Madya
3. Produk hukum terkait jabatan Pranata Laboratorium Kesehatan Madya
4. Dokumen Pranata Laboratorium Kesehatan Madya
5. Dokumentasi kegiatan Pranata Laboratorium Kesehatan Madya
6. Hasil Kajian Pranata Laboratorium Kesehatan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pranata Laboratorium Kesehatan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pranata Laboratorium Kesehatan Madya
9. Laporan pelaksanaan kegiatan Pranata Laboratorium Kesehatan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3758',
            'nama_jabatan' => 'Pustakawan Terampil',
            'nama_unit' => 'Pustakawan Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Ilmu Perpustakaan atau bidang lain sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Terampil
2. Data, Bahan dan Informasi terkait Pustakawan Terampil
3. Produk hukum terkait jabatan Pustakawan Terampil
4. Dokumen Pustakawan Terampil
5. Dokumentasi kegiatan Pustakawan Terampil
6. Hasil Kajian Pustakawan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Terampil
9. Laporan pelaksanaan kegiatan Pustakawan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3759',
            'nama_jabatan' => 'Pustakawan Mahir',
            'nama_unit' => 'Pustakawan Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Ilmu Perpustakaan atau bidang lain sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Mahir
2. Data, Bahan dan Informasi terkait Pustakawan Mahir
3. Produk hukum terkait jabatan Pustakawan Mahir
4. Dokumen Pustakawan Mahir
5. Dokumentasi kegiatan Pustakawan Mahir
6. Hasil Kajian Pustakawan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Mahir
9. Laporan pelaksanaan kegiatan Pustakawan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3760',
            'nama_jabatan' => 'Pustakawan Penyelia',
            'nama_unit' => 'Pustakawan Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Ilmu Perpustakaan atau bidang lain sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Penyelia
2. Data, Bahan dan Informasi terkait Pustakawan Penyelia
3. Produk hukum terkait jabatan Pustakawan Penyelia
4. Dokumen Pustakawan Penyelia
5. Dokumentasi kegiatan Pustakawan Penyelia
6. Hasil Kajian Pustakawan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Penyelia
9. Laporan pelaksanaan kegiatan Pustakawan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3761',
            'nama_jabatan' => 'Pustakawan Pertama',
            'nama_unit' => 'Pustakawan Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Ilmu Perpustakaan atau bidang lain  sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Pertama
2. Data, Bahan dan Informasi terkait Pustakawan Pertama
3. Produk hukum terkait jabatan Pustakawan Pertama
4. Dokumen Pustakawan Pertama
5. Dokumentasi kegiatan Pustakawan Pertama
6. Hasil Kajian Pustakawan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Pertama
9. Laporan pelaksanaan kegiatan Pustakawan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3762',
            'nama_jabatan' => 'Pustakawan Muda',
            'nama_unit' => 'Pustakawan Muda',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Ilmu Perpustakaan atau bidang lain  sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Muda
2. Data, Bahan dan Informasi terkait Pustakawan Muda
3. Produk hukum terkait jabatan Pustakawan Muda
4. Dokumen Pustakawan Muda
5. Dokumentasi kegiatan Pustakawan Muda
6. Hasil Kajian Pustakawan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Muda
9. Laporan pelaksanaan kegiatan Pustakawan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3763',
            'nama_jabatan' => 'Pustakawan Madya',
            'nama_unit' => 'Pustakawan Madya',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Ilmu Perpustakaan atau bidang lain  sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Madya
2. Data, Bahan dan Informasi terkait Pustakawan Madya
3. Produk hukum terkait jabatan Pustakawan Madya
4. Dokumen Pustakawan Madya
5. Dokumentasi kegiatan Pustakawan Madya
6. Hasil Kajian Pustakawan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Madya
9. Laporan pelaksanaan kegiatan Pustakawan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3764',
            'nama_jabatan' => 'Pustakawan Utama',
            'nama_unit' => 'Pustakawan Utama',
            'ikhtisar' => 'Melaksanakan kegiatan di bidang Kepustakawanan yang meliputi Pengelolaan Perpustakaan,  pelayanan Perpustakaan, dan Pengembangan Sistem Kepustakawanan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Ilmu Perpustakaan atau bidang lain  sesuai dengan kualifikasi yang ditetapkan oleh Kepala Perpusnas RI',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pustakawan Utama
2. Data, Bahan dan Informasi terkait Pustakawan Utama
3. Produk hukum terkait jabatan Pustakawan Utama
4. Dokumen Pustakawan Utama
5. Dokumentasi kegiatan Pustakawan Utama
6. Hasil Kajian Pustakawan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Pustakawan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pustakawan Utama
9. Laporan pelaksanaan kegiatan Pustakawan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kerapian dan kelengkapan koleksi perpustakaan
b. Kelengkapan peralatan kerja
c. Kebenaran dan ketepatan bimbingan kepada pemakai',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyebarluaskan informasi bahan pustaka atau sumber informasi kepada orang lain
b. Menggunakan perangkat kerja yang tersedia
c. Memberikan informasi yang diperlukan',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3765',
            'nama_jabatan' => 'Psikolog Klinis Pertama',
            'nama_unit' => 'Psikolog Klinis Pertama',
            'ikhtisar' => 'Memberikan pelayanan psikologi klinik yang meliputi assesmen, interpretasi hasil assesmen, intervensi, membuatan laporan pemeriksaan psikologi, pelaksanaan tugas di tempat risiko tinggi, dan pengabdian masyarakat yang meliputi pelaksanaan penanggulangan problem psikologi klinik pada masyarakat rumah sakit, pelaksanaan tugas khusus lapangan di bid psikologi klinik pada komunitas, dan menjadi saksi ahli.',
            'pdd_formal' => 'S1',
            'pdd_jurusan' => 'Sarjana (S1) Psikologi Klinis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah lulus dan memiliki sertifikat Profesi Psikolog Klinis',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Psikolog Klinis Pertama
2. Data, Bahan dan Informasi terkait Psikolog Klinis Pertama
3. Produk hukum terkait jabatan Psikolog Klinis Pertama
4. Dokumen Psikolog Klinis Pertama
5. Dokumentasi kegiatan Psikolog Klinis Pertama
6. Hasil Kajian Psikolog Klinis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Psikolog Klinis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Psikolog Klinis Pertama
9. Laporan pelaksanaan kegiatan Psikolog Klinis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. pelayanan psikologi klinik assesmen, 
b. pelayanan psikologi klinik interpretasi hasil assesmen, 
c. pelayanan psikologi klinik intervensi, 
d. Pengabdian Kepada masyarakat yang meliputi pelaksanaan penanggulangan problem psikologi klinik pada masyarakat rumah sakit, 
e. tugas khusus lapangan di bid psikologi klinik pada komunitas, dan menjadi saksi ahli.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pendapingan Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3766',
            'nama_jabatan' => 'Psikolog Klinis Muda',
            'nama_unit' => 'Psikolog Klinis Muda',
            'ikhtisar' => 'Memberikan pelayanan psikologi klinik yang meliputi assesmen, interpretasi hasil assesmen, intervensi, membuatan laporan pemeriksaan psikologi, pelaksanaan tugas di tempat risiko tinggi, dan pengabdian masyarakat yang meliputi pelaksanaan penanggulangan problem psikologi klinik pada masyarakat rumah sakit, pelaksanaan tugas khusus lapangan di bid psikologi klinik pada komunitas, dan menjadi saksi ahli.',
            'pdd_formal' => 'S1',
            'pdd_jurusan' => 'Sarjana (S1) Psikologi Klinis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah lulus dan memiliki sertifikat Profesi Psikolog Klinis',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Psikolog Klinis Muda
2. Data, Bahan dan Informasi terkait Psikolog Klinis Muda
3. Produk hukum terkait jabatan Psikolog Klinis Muda
4. Dokumen Psikolog Klinis Muda
5. Dokumentasi kegiatan Psikolog Klinis Muda
6. Hasil Kajian Psikolog Klinis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Psikolog Klinis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Psikolog Klinis Muda
9. Laporan pelaksanaan kegiatan Psikolog Klinis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. pelayanan psikologi klinik assesmen, 
b. pelayanan psikologi klinik interpretasi hasil assesmen, 
c. pelayanan psikologi klinik intervensi, 
d. Pengabdian Kepada masyarakat yang meliputi pelaksanaan penanggulangan problem psikologi klinik pada masyarakat rumah sakit, 
e. tugas khusus lapangan di bid psikologi klinik pada komunitas, dan menjadi saksi ahli.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pendapingan Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3767',
            'nama_jabatan' => 'Psikolog Klinis Madya',
            'nama_unit' => 'Psikolog Klinis Madya',
            'ikhtisar' => 'Memberikan pelayanan psikologi klinik yang meliputi assesmen, interpretasi hasil assesmen, intervensi, membuatan laporan pemeriksaan psikologi, pelaksanaan tugas di tempat risiko tinggi, dan pengabdian masyarakat yang meliputi pelaksanaan penanggulangan problem psikologi klinik pada masyarakat rumah sakit, pelaksanaan tugas khusus lapangan di bid psikologi klinik pada komunitas, dan menjadi saksi ahli.',
            'pdd_formal' => 'S1',
            'pdd_jurusan' => 'Sarjana (S1) Psikologi Klinis',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah lulus dan memiliki sertifikat Profesi Psikolog Klinis',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Psikolog Klinis Madya
2. Data, Bahan dan Informasi terkait Psikolog Klinis Madya
3. Produk hukum terkait jabatan Psikolog Klinis Madya
4. Dokumen Psikolog Klinis Madya
5. Dokumentasi kegiatan Psikolog Klinis Madya
6. Hasil Kajian Psikolog Klinis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Psikolog Klinis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Psikolog Klinis Madya
9. Laporan pelaksanaan kegiatan Psikolog Klinis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. pelayanan psikologi klinik assesmen, 
b. pelayanan psikologi klinik interpretasi hasil assesmen, 
c. pelayanan psikologi klinik intervensi, 
d. Pengabdian Kepada masyarakat yang meliputi pelaksanaan penanggulangan problem psikologi klinik pada masyarakat rumah sakit, 
e. tugas khusus lapangan di bid psikologi klinik pada komunitas, dan menjadi saksi ahli.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Pendapingan Kepada Masyarakat ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3768',
            'nama_jabatan' => 'Radiografer Terampil',
            'nama_unit' => 'Radiografer Terampil',
            'ikhtisar' => 'Melakukan kegiatan pelayanan radiologi yg meliputi persiapan, pelaksanaan,pelaporan & evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Diploma III Teknik Radiodiagnostik dan Radioterapi/Teknik Rontgen/Teknik Radiologi/Teknik Radiodiagnostik/Teknik  Radioterapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Radiografer Terampil
2. Data, Bahan dan Informasi terkait Radiografer Terampil
3. Produk hukum terkait jabatan Radiografer Terampil
4. Dokumen Radiografer Terampil
5. Dokumentasi kegiatan Radiografer Terampil
6. Hasil Kajian Radiografer Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Radiografer Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Radiografer Terampil
9. Laporan pelaksanaan kegiatan Radiografer Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3769',
            'nama_jabatan' => 'Radiografer Mahir',
            'nama_unit' => 'Radiografer Mahir',
            'ikhtisar' => 'Melakukan kegiatan pelayanan radiologi yg meliputi persiapan, pelaksanaan,pelaporan & evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Diploma III Teknik Radiodiagnostik dan Radioterapi/Teknik Rontgen/Teknik Radiologi/Teknik Radiodiagnostik/Teknik  Radioterapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Radiografer Mahir
2. Data, Bahan dan Informasi terkait Radiografer Mahir
3. Produk hukum terkait jabatan Radiografer Mahir
4. Dokumen Radiografer Mahir
5. Dokumentasi kegiatan Radiografer Mahir
6. Hasil Kajian Radiografer Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Radiografer Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Radiografer Mahir
9. Laporan pelaksanaan kegiatan Radiografer Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3770',
            'nama_jabatan' => 'Radiografer Penyelia',
            'nama_unit' => 'Radiografer Penyelia',
            'ikhtisar' => 'Melakukan kegiatan pelayanan radiologi yg meliputi persiapan, pelaksanaan,pelaporan & evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'Diploma III Teknik Radiodiagnostik dan Radioterapi/Teknik Rontgen/Teknik Radiologi/Teknik Radiodiagnostik/Teknik  Radioterapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Radiografer Penyelia
2. Data, Bahan dan Informasi terkait Radiografer Penyelia
3. Produk hukum terkait jabatan Radiografer Penyelia
4. Dokumen Radiografer Penyelia
5. Dokumentasi kegiatan Radiografer Penyelia
6. Hasil Kajian Radiografer Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Radiografer Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Radiografer Penyelia
9. Laporan pelaksanaan kegiatan Radiografer Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3771',
            'nama_jabatan' => 'Radiografer Pertama',
            'nama_unit' => 'Radiografer Pertama',
            'ikhtisar' => 'Melakukan kegiatan pelayanan radiologi yg meliputi persiapan, pelaksanaan,pelaporan & evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Teknik Radiodiagnostik dan Radioterapi/Teknik Radiologi/ Teknik Radiodiagnostik/Teknik Radioterapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Radiografer Pertama
2. Data, Bahan dan Informasi terkait Radiografer Pertama
3. Produk hukum terkait jabatan Radiografer Pertama
4. Dokumen Radiografer Pertama
5. Dokumentasi kegiatan Radiografer Pertama
6. Hasil Kajian Radiografer Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Radiografer Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Radiografer Pertama
9. Laporan pelaksanaan kegiatan Radiografer Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3772',
            'nama_jabatan' => 'Radiografer Muda',
            'nama_unit' => 'Radiografer Muda',
            'ikhtisar' => 'Melakukan kegiatan pelayanan radiologi yg meliputi persiapan, pelaksanaan,pelaporan & evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Teknik Radiodiagnostik dan Radioterapi/Teknik Radiologi/ Teknik Radiodiagnostik/Teknik Radioterapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Radiografer Muda
2. Data, Bahan dan Informasi terkait Radiografer Muda
3. Produk hukum terkait jabatan Radiografer Muda
4. Dokumen Radiografer Muda
5. Dokumentasi kegiatan Radiografer Muda
6. Hasil Kajian Radiografer Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Radiografer Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Radiografer Muda
9. Laporan pelaksanaan kegiatan Radiografer Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3773',
            'nama_jabatan' => 'Radiografer Madya',
            'nama_unit' => 'Radiografer Madya',
            'ikhtisar' => 'Melakukan kegiatan pelayanan radiologi yg meliputi persiapan, pelaksanaan,pelaporan & evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Teknik Radiodiagnostik dan Radioterapi/Teknik Radiologi/ Teknik Radiodiagnostik/Teknik Radioterapi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Radiografer Madya
2. Data, Bahan dan Informasi terkait Radiografer Madya
3. Produk hukum terkait jabatan Radiografer Madya
4. Dokumen Radiografer Madya
5. Dokumentasi kegiatan Radiografer Madya
6. Hasil Kajian Radiografer Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Radiografer Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Radiografer Madya
9. Laporan pelaksanaan kegiatan Radiografer Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3774',
            'nama_jabatan' => 'Refraksionis Optisien Terampil',
            'nama_unit' => 'Refraksionis Optisien Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pelayanan mata dasar, pelayanan refraksi,pelayanan optisi, pelayanan lensa kontak, konsultasi/rujukan, bimbingan dan penyuluhan, evaluasi dan pencatatan pelayanan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Refraksi Optisi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Refraksionis Optisien Terampil
2. Data, Bahan dan Informasi terkait Refraksionis Optisien Terampil
3. Produk hukum terkait jabatan Refraksionis Optisien Terampil
4. Dokumen Refraksionis Optisien Terampil
5. Dokumentasi kegiatan Refraksionis Optisien Terampil
6. Hasil Kajian Refraksionis Optisien Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Refraksionis Optisien Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Refraksionis Optisien Terampil
9. Laporan pelaksanaan kegiatan Refraksionis Optisien Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelayanan refraksi, pelayanan optisi, dan pelayanan lensa kontak.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelayanan refraksi, pelayanan optisi, dan pelayanan lensa kontak.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3775',
            'nama_jabatan' => 'Refraksionis Optisien Mahir',
            'nama_unit' => 'Refraksionis Optisien Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pelayanan mata dasar, pelayanan refraksi,pelayanan optisi, pelayanan lensa kontak, konsultasi/rujukan, bimbingan dan penyuluhan, evaluasi dan pencatatan pelayanan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Refraksi Optisi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Refraksionis Optisien Mahir
2. Data, Bahan dan Informasi terkait Refraksionis Optisien Mahir
3. Produk hukum terkait jabatan Refraksionis Optisien Mahir
4. Dokumen Refraksionis Optisien Mahir
5. Dokumentasi kegiatan Refraksionis Optisien Mahir
6. Hasil Kajian Refraksionis Optisien Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Refraksionis Optisien Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Refraksionis Optisien Mahir
9. Laporan pelaksanaan kegiatan Refraksionis Optisien Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelayanan refraksi, pelayanan optisi, dan pelayanan lensa kontak.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelayanan refraksi, pelayanan optisi, dan pelayanan lensa kontak.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3776',
            'nama_jabatan' => 'Refraksionis Optisien Penyelia',
            'nama_unit' => 'Refraksionis Optisien Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pelayanan mata dasar, pelayanan refraksi,pelayanan optisi, pelayanan lensa kontak, konsultasi/rujukan, bimbingan dan penyuluhan, evaluasi dan pencatatan pelayanan.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Refraksi Optisi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Refraksionis Optisien Penyelia
2. Data, Bahan dan Informasi terkait Refraksionis Optisien Penyelia
3. Produk hukum terkait jabatan Refraksionis Optisien Penyelia
4. Dokumen Refraksionis Optisien Penyelia
5. Dokumentasi kegiatan Refraksionis Optisien Penyelia
6. Hasil Kajian Refraksionis Optisien Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Refraksionis Optisien Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Refraksionis Optisien Penyelia
9. Laporan pelaksanaan kegiatan Refraksionis Optisien Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelayanan refraksi, pelayanan optisi, dan pelayanan lensa kontak.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelayanan refraksi, pelayanan optisi, dan pelayanan lensa kontak.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3777',
            'nama_jabatan' => 'Sandiman Terampil',
            'nama_unit' => 'Sandiman Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ilmu Komputer atau Informatika, Teknologi Rekayasa Perangkat Lunak, Sistem Informasi, Teknologi Komputer, Teknik Elektronika, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Terampil
2. Data, Bahan dan Informasi terkait Sandiman Terampil
3. Produk hukum terkait jabatan Sandiman Terampil
4. Dokumen Sandiman Terampil
5. Dokumentasi kegiatan Sandiman Terampil
6. Hasil Kajian Sandiman Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Terampil
9. Laporan pelaksanaan kegiatan Sandiman Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3778',
            'nama_jabatan' => 'Sandiman Mahir',
            'nama_unit' => 'Sandiman Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ilmu Komputer atau Informatika, Teknologi Rekayasa Perangkat Lunak, Sistem Informasi, Teknologi Komputer, Teknik Elektronika, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Mahir
2. Data, Bahan dan Informasi terkait Sandiman Mahir
3. Produk hukum terkait jabatan Sandiman Mahir
4. Dokumen Sandiman Mahir
5. Dokumentasi kegiatan Sandiman Mahir
6. Hasil Kajian Sandiman Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Mahir
9. Laporan pelaksanaan kegiatan Sandiman Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3779',
            'nama_jabatan' => 'Sandiman Penyelia',
            'nama_unit' => 'Sandiman Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ilmu Komputer atau Informatika, Teknologi Rekayasa Perangkat Lunak, Sistem Informasi, Teknologi Komputer, Teknik Elektronika, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Penyelia
2. Data, Bahan dan Informasi terkait Sandiman Penyelia
3. Produk hukum terkait jabatan Sandiman Penyelia
4. Dokumen Sandiman Penyelia
5. Dokumentasi kegiatan Sandiman Penyelia
6. Hasil Kajian Sandiman Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Penyelia
9. Laporan pelaksanaan kegiatan Sandiman Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3780',
            'nama_jabatan' => 'Sandiman Pertama',
            'nama_unit' => 'Sandiman Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Komputer, Matematika, Teknik atau Rekayasa Komputer, Teknik atau Rekayasa Elektro, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Pertama
2. Data, Bahan dan Informasi terkait Sandiman Pertama
3. Produk hukum terkait jabatan Sandiman Pertama
4. Dokumen Sandiman Pertama
5. Dokumentasi kegiatan Sandiman Pertama
6. Hasil Kajian Sandiman Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Pertama
9. Laporan pelaksanaan kegiatan Sandiman Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3781',
            'nama_jabatan' => 'Sandiman Muda',
            'nama_unit' => 'Sandiman Muda',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Komputer, Matematika, Teknik atau Rekayasa Komputer, Teknik atau Rekayasa Elektro, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Muda
2. Data, Bahan dan Informasi terkait Sandiman Muda
3. Produk hukum terkait jabatan Sandiman Muda
4. Dokumen Sandiman Muda
5. Dokumentasi kegiatan Sandiman Muda
6. Hasil Kajian Sandiman Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Muda
9. Laporan pelaksanaan kegiatan Sandiman Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3782',
            'nama_jabatan' => 'Sandiman Madya',
            'nama_unit' => 'Sandiman Madya',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Komputer, Matematika, Teknik atau Rekayasa Komputer, Teknik atau Rekayasa Elektro, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Madya
2. Data, Bahan dan Informasi terkait Sandiman Madya
3. Produk hukum terkait jabatan Sandiman Madya
4. Dokumen Sandiman Madya
5. Dokumentasi kegiatan Sandiman Madya
6. Hasil Kajian Sandiman Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Madya
9. Laporan pelaksanaan kegiatan Sandiman Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3783',
            'nama_jabatan' => 'Sandiman Utama',
            'nama_unit' => 'Sandiman Utama',
            'ikhtisar' => 'Melaksanakan kegiatan pengamanan informasi, pengamanan siber, dan persandian',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Komputer, Matematika, Teknik atau Rekayasa Komputer, Teknik atau Rekayasa Elektro, atau Persandian',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sandiman Utama
2. Data, Bahan dan Informasi terkait Sandiman Utama
3. Produk hukum terkait jabatan Sandiman Utama
4. Dokumen Sandiman Utama
5. Dokumentasi kegiatan Sandiman Utama
6. Hasil Kajian Sandiman Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Sandiman Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sandiman Utama
9. Laporan pelaksanaan kegiatan Sandiman Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pengamanan informasi, pengamanan siber, dan persandian.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pengamanan informasi, pengamanan siber, dan persandian.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3784',
            'nama_jabatan' => 'Sanitarian Pemula',
            'nama_unit' => 'Sanitarian Pemula',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Pemula
2. Data, Bahan dan Informasi terkait Sanitarian Pemula
3. Produk hukum terkait jabatan Sanitarian Pemula
4. Dokumen Sanitarian Pemula
5. Dokumentasi kegiatan Sanitarian Pemula
6. Hasil Kajian Sanitarian Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Pemula
9. Laporan pelaksanaan kegiatan Sanitarian Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3785',
            'nama_jabatan' => 'Sanitarian Terampil',
            'nama_unit' => 'Sanitarian Terampil',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Terampil
2. Data, Bahan dan Informasi terkait Sanitarian Terampil
3. Produk hukum terkait jabatan Sanitarian Terampil
4. Dokumen Sanitarian Terampil
5. Dokumentasi kegiatan Sanitarian Terampil
6. Hasil Kajian Sanitarian Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Terampil
9. Laporan pelaksanaan kegiatan Sanitarian Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3786',
            'nama_jabatan' => 'Sanitarian Mahir',
            'nama_unit' => 'Sanitarian Mahir',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Mahir
2. Data, Bahan dan Informasi terkait Sanitarian Mahir
3. Produk hukum terkait jabatan Sanitarian Mahir
4. Dokumen Sanitarian Mahir
5. Dokumentasi kegiatan Sanitarian Mahir
6. Hasil Kajian Sanitarian Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Mahir
9. Laporan pelaksanaan kegiatan Sanitarian Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3787',
            'nama_jabatan' => 'Sanitarian Penyelia',
            'nama_unit' => 'Sanitarian Penyelia',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'SLTA / D I',
            'pdd_jurusan' => 'SLTA / D I Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Penyelia
2. Data, Bahan dan Informasi terkait Sanitarian Penyelia
3. Produk hukum terkait jabatan Sanitarian Penyelia
4. Dokumen Sanitarian Penyelia
5. Dokumentasi kegiatan Sanitarian Penyelia
6. Hasil Kajian Sanitarian Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Penyelia
9. Laporan pelaksanaan kegiatan Sanitarian Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3788',
            'nama_jabatan' => 'Sanitarian Pertama',
            'nama_unit' => 'Sanitarian Pertama',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Pertama
2. Data, Bahan dan Informasi terkait Sanitarian Pertama
3. Produk hukum terkait jabatan Sanitarian Pertama
4. Dokumen Sanitarian Pertama
5. Dokumentasi kegiatan Sanitarian Pertama
6. Hasil Kajian Sanitarian Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Pertama
9. Laporan pelaksanaan kegiatan Sanitarian Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3789',
            'nama_jabatan' => 'Sanitarian Muda',
            'nama_unit' => 'Sanitarian Muda',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Muda
2. Data, Bahan dan Informasi terkait Sanitarian Muda
3. Produk hukum terkait jabatan Sanitarian Muda
4. Dokumen Sanitarian Muda
5. Dokumentasi kegiatan Sanitarian Muda
6. Hasil Kajian Sanitarian Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Muda
9. Laporan pelaksanaan kegiatan Sanitarian Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3790',
            'nama_jabatan' => 'Sanitarian Madya',
            'nama_unit' => 'Sanitarian Madya',
            'ikhtisar' => 'Melaksanakan pengamatan kesehatan lingkungan, pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam rangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara, melindungi dan meningkatkan cara-cara hidup bersih dan sehat.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Kesehatan Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Sanitarian Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Sanitarian Madya
2. Data, Bahan dan Informasi terkait Sanitarian Madya
3. Produk hukum terkait jabatan Sanitarian Madya
4. Dokumen Sanitarian Madya
5. Dokumentasi kegiatan Sanitarian Madya
6. Hasil Kajian Sanitarian Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Sanitarian Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Sanitarian Madya
9. Laporan pelaksanaan kegiatan Sanitarian Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3791',
            'nama_jabatan' => 'Statistisi Terampil',
            'nama_unit' => 'Statistisi Terampil',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Terampil
2. Data, Bahan dan Informasi terkait Statistisi Terampil
3. Produk hukum terkait jabatan Statistisi Terampil
4. Dokumen Statistisi Terampil
5. Dokumentasi kegiatan Statistisi Terampil
6. Hasil Kajian Statistisi Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Terampil
9. Laporan pelaksanaan kegiatan Statistisi Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3792',
            'nama_jabatan' => 'Statistisi Mahir',
            'nama_unit' => 'Statistisi Mahir',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Mahir
2. Data, Bahan dan Informasi terkait Statistisi Mahir
3. Produk hukum terkait jabatan Statistisi Mahir
4. Dokumen Statistisi Mahir
5. Dokumentasi kegiatan Statistisi Mahir
6. Hasil Kajian Statistisi Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Mahir
9. Laporan pelaksanaan kegiatan Statistisi Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3793',
            'nama_jabatan' => 'Statistisi Penyelia',
            'nama_unit' => 'Statistisi Penyelia',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Penyelia
2. Data, Bahan dan Informasi terkait Statistisi Penyelia
3. Produk hukum terkait jabatan Statistisi Penyelia
4. Dokumen Statistisi Penyelia
5. Dokumentasi kegiatan Statistisi Penyelia
6. Hasil Kajian Statistisi Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Penyelia
9. Laporan pelaksanaan kegiatan Statistisi Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3794',
            'nama_jabatan' => 'Statistisi Pertama',
            'nama_unit' => 'Statistisi Pertama',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Pertama
2. Data, Bahan dan Informasi terkait Statistisi Pertama
3. Produk hukum terkait jabatan Statistisi Pertama
4. Dokumen Statistisi Pertama
5. Dokumentasi kegiatan Statistisi Pertama
6. Hasil Kajian Statistisi Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Pertama
9. Laporan pelaksanaan kegiatan Statistisi Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3795',
            'nama_jabatan' => 'Statistisi Muda',
            'nama_unit' => 'Statistisi Muda',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Muda
2. Data, Bahan dan Informasi terkait Statistisi Muda
3. Produk hukum terkait jabatan Statistisi Muda
4. Dokumen Statistisi Muda
5. Dokumentasi kegiatan Statistisi Muda
6. Hasil Kajian Statistisi Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Muda
9. Laporan pelaksanaan kegiatan Statistisi Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3796',
            'nama_jabatan' => 'Statistisi Madya',
            'nama_unit' => 'Statistisi Madya',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Madya
2. Data, Bahan dan Informasi terkait Statistisi Madya
3. Produk hukum terkait jabatan Statistisi Madya
4. Dokumen Statistisi Madya
5. Dokumentasi kegiatan Statistisi Madya
6. Hasil Kajian Statistisi Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Madya
9. Laporan pelaksanaan kegiatan Statistisi Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3797',
            'nama_jabatan' => 'Statistisi Utama',
            'nama_unit' => 'Statistisi Utama',
            'ikhtisar' => 'Melakukan kegiatan statistik ',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Jurusan Statistik atau bidang lain sesuai dengan kualifikasi yg ditetapkan oleh Kepala BPS ',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Statistisi Utama
2. Data, Bahan dan Informasi terkait Statistisi Utama
3. Produk hukum terkait jabatan Statistisi Utama
4. Dokumen Statistisi Utama
5. Dokumentasi kegiatan Statistisi Utama
6. Hasil Kajian Statistisi Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Statistisi Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Statistisi Utama
9. Laporan pelaksanaan kegiatan Statistisi Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3798',
            'nama_jabatan' => 'Surveyor Pemetaan Pemula',
            'nama_unit' => 'Surveyor Pemetaan Pemula',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Pemula
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Pemula
3. Produk hukum terkait jabatan Surveyor Pemetaan Pemula
4. Dokumen Surveyor Pemetaan Pemula
5. Dokumentasi kegiatan Surveyor Pemetaan Pemula
6. Hasil Kajian Surveyor Pemetaan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Pemula
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3799',
            'nama_jabatan' => 'Surveyor Pemetaan Terampil',
            'nama_unit' => 'Surveyor Pemetaan Terampil',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Terampil
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Terampil
3. Produk hukum terkait jabatan Surveyor Pemetaan Terampil
4. Dokumen Surveyor Pemetaan Terampil
5. Dokumentasi kegiatan Surveyor Pemetaan Terampil
6. Hasil Kajian Surveyor Pemetaan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Terampil
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3800',
            'nama_jabatan' => 'Surveyor Pemetaan Mahir',
            'nama_unit' => 'Surveyor Pemetaan Mahir',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Mahir
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Mahir
3. Produk hukum terkait jabatan Surveyor Pemetaan Mahir
4. Dokumen Surveyor Pemetaan Mahir
5. Dokumentasi kegiatan Surveyor Pemetaan Mahir
6. Hasil Kajian Surveyor Pemetaan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Mahir
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3801',
            'nama_jabatan' => 'Surveyor Pemetaan Penyelia',
            'nama_unit' => 'Surveyor Pemetaan Penyelia',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Penyelia
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Penyelia
3. Produk hukum terkait jabatan Surveyor Pemetaan Penyelia
4. Dokumen Surveyor Pemetaan Penyelia
5. Dokumentasi kegiatan Surveyor Pemetaan Penyelia
6. Hasil Kajian Surveyor Pemetaan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Penyelia
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3802',
            'nama_jabatan' => 'Surveyor Pemetaan Pertama',
            'nama_unit' => 'Surveyor Pemetaan Pertama',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Pertama
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Pertama
3. Produk hukum terkait jabatan Surveyor Pemetaan Pertama
4. Dokumen Surveyor Pemetaan Pertama
5. Dokumentasi kegiatan Surveyor Pemetaan Pertama
6. Hasil Kajian Surveyor Pemetaan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Pertama
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3803',
            'nama_jabatan' => 'Surveyor Pemetaan Muda',
            'nama_unit' => 'Surveyor Pemetaan Muda',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Muda
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Muda
3. Produk hukum terkait jabatan Surveyor Pemetaan Muda
4. Dokumen Surveyor Pemetaan Muda
5. Dokumentasi kegiatan Surveyor Pemetaan Muda
6. Hasil Kajian Surveyor Pemetaan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Muda
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3804',
            'nama_jabatan' => 'Surveyor Pemetaan Madya',
            'nama_unit' => 'Surveyor Pemetaan Madya',
            'ikhtisar' => 'Melakukan kegiatan perencanaan, pelaksanaan, pembinaan, pengembangan serta  pemasyarakatan survei dan pemetaan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Surveyor Pemetaan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Surveyor Pemetaan Madya
2. Data, Bahan dan Informasi terkait Surveyor Pemetaan Madya
3. Produk hukum terkait jabatan Surveyor Pemetaan Madya
4. Dokumen Surveyor Pemetaan Madya
5. Dokumentasi kegiatan Surveyor Pemetaan Madya
6. Hasil Kajian Surveyor Pemetaan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Surveyor Pemetaan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Surveyor Pemetaan Madya
9. Laporan pelaksanaan kegiatan Surveyor Pemetaan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pelaksanaan kegiatan terkait penyelenggaraan informasi geospasial, pembinaan penyelenggaraan informasi geospasial, dan pembangunan infrastruktur informasi geospasial.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3805',
            'nama_jabatan' => 'Teknisi Elektromedis Terampil',
            'nama_unit' => 'Teknisi Elektromedis Terampil',
            'ikhtisar' => 'Melakukan kegiatan pelayanan pengelolaan alat elektromedik yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Teknik Elektromedik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Elektromedis Terampil
2. Data, Bahan dan Informasi terkait Teknisi Elektromedis Terampil
3. Produk hukum terkait jabatan Teknisi Elektromedis Terampil
4. Dokumen Teknisi Elektromedis Terampil
5. Dokumentasi kegiatan Teknisi Elektromedis Terampil
6. Hasil Kajian Teknisi Elektromedis Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Elektromedis Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Elektromedis Terampil
9. Laporan pelaksanaan kegiatan Teknisi Elektromedis Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3806',
            'nama_jabatan' => 'Teknisi Elektromedis Mahir',
            'nama_unit' => 'Teknisi Elektromedis Mahir',
            'ikhtisar' => 'Melakukan kegiatan pelayanan pengelolaan alat elektromedik yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Teknik Elektromedik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Elektromedis Mahir
2. Data, Bahan dan Informasi terkait Teknisi Elektromedis Mahir
3. Produk hukum terkait jabatan Teknisi Elektromedis Mahir
4. Dokumen Teknisi Elektromedis Mahir
5. Dokumentasi kegiatan Teknisi Elektromedis Mahir
6. Hasil Kajian Teknisi Elektromedis Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Elektromedis Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Elektromedis Mahir
9. Laporan pelaksanaan kegiatan Teknisi Elektromedis Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3807',
            'nama_jabatan' => 'Teknisi Elektromedis Penyelia',
            'nama_unit' => 'Teknisi Elektromedis Penyelia',
            'ikhtisar' => 'Melakukan kegiatan pelayanan pengelolaan alat elektromedik yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Teknik Elektromedik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Elektromedis Penyelia
2. Data, Bahan dan Informasi terkait Teknisi Elektromedis Penyelia
3. Produk hukum terkait jabatan Teknisi Elektromedis Penyelia
4. Dokumen Teknisi Elektromedis Penyelia
5. Dokumentasi kegiatan Teknisi Elektromedis Penyelia
6. Hasil Kajian Teknisi Elektromedis Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Elektromedis Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Elektromedis Penyelia
9. Laporan pelaksanaan kegiatan Teknisi Elektromedis Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima
b. Kelengkapan peralatan kerja
c. Kuantitas dan kualitas hasil kerja
d. Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a.Menilai kelengkapan data/informasi/bahan
b.Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3808',
            'nama_jabatan' => 'Teknisi Elektromedis Pertama',
            'nama_unit' => 'Teknisi Elektromedis Pertama',
            'ikhtisar' => 'Melakukan kegiatan pelayanan pengelolaan alat elektromedik yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Teknik Elektromedik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Elektromedis Pertama
2. Data, Bahan dan Informasi terkait Teknisi Elektromedis Pertama
3. Produk hukum terkait jabatan Teknisi Elektromedis Pertama
4. Dokumen Teknisi Elektromedis Pertama
5. Dokumentasi kegiatan Teknisi Elektromedis Pertama
6. Hasil Kajian Teknisi Elektromedis Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Elektromedis Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Elektromedis Pertama
9. Laporan pelaksanaan kegiatan Teknisi Elektromedis Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3809',
            'nama_jabatan' => 'Teknisi Elektromedis Muda',
            'nama_unit' => 'Teknisi Elektromedis Muda',
            'ikhtisar' => 'Melakukan kegiatan pelayanan pengelolaan alat elektromedik yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Teknik Elektromedik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Elektromedis Muda
2. Data, Bahan dan Informasi terkait Teknisi Elektromedis Muda
3. Produk hukum terkait jabatan Teknisi Elektromedis Muda
4. Dokumen Teknisi Elektromedis Muda
5. Dokumentasi kegiatan Teknisi Elektromedis Muda
6. Hasil Kajian Teknisi Elektromedis Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Elektromedis Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Elektromedis Muda
9. Laporan pelaksanaan kegiatan Teknisi Elektromedis Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3810',
            'nama_jabatan' => 'Teknisi Elektromedis Madya',
            'nama_unit' => 'Teknisi Elektromedis Madya',
            'ikhtisar' => 'Melakukan kegiatan pelayanan pengelolaan alat elektromedik yang meliputi persiapan, pelaksanaan, dan pelaporan dan evaluasi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Teknik Elektromedik',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Elektromedis Madya
2. Data, Bahan dan Informasi terkait Teknisi Elektromedis Madya
3. Produk hukum terkait jabatan Teknisi Elektromedis Madya
4. Dokumen Teknisi Elektromedis Madya
5. Dokumentasi kegiatan Teknisi Elektromedis Madya
6. Hasil Kajian Teknisi Elektromedis Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Elektromedis Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Elektromedis Madya
9. Laporan pelaksanaan kegiatan Teknisi Elektromedis Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan bahan kerja yang diterima 
b.Kelengkapan peralatan kerja 
c.Kuantitas dan kualitas hasil kerja 
d.Kesesuaian pelaksanaan tugas terhadap SPO dan penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan 
b. Menggunakan perangkat kerja yang tersedia ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3811',
            'nama_jabatan' => 'Teknisi Gigi Terampil',
            'nama_unit' => 'Teknisi Gigi Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan teknik gigi yang meliputi kegiatan perencanaan pembuatan dan penilaian protesa gigi meliputi gigi tiruan penuh dan sebagian, gigi tiruan cekat, serta pembuatan pesawat ortodonti lepasan dan protesa maxilo facial',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Gigi Terampil
2. Data, Bahan dan Informasi terkait Teknisi Gigi Terampil
3. Produk hukum terkait jabatan Teknisi Gigi Terampil
4. Dokumen Teknisi Gigi Terampil
5. Dokumentasi kegiatan Teknisi Gigi Terampil
6. Hasil Kajian Teknisi Gigi Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Gigi Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Gigi Terampil
9. Laporan pelaksanaan kegiatan Teknisi Gigi Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pelayanan teknik gigi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pelayanan teknik gigi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3812',
            'nama_jabatan' => 'Teknisi Gigi Mahir',
            'nama_unit' => 'Teknisi Gigi Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan teknik gigi yang meliputi kegiatan perencanaan pembuatan dan penilaian protesa gigi meliputi gigi tiruan penuh dan sebagian, gigi tiruan cekat, serta pembuatan pesawat ortodonti lepasan dan protesa maxilo facial',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Gigi Mahir
2. Data, Bahan dan Informasi terkait Teknisi Gigi Mahir
3. Produk hukum terkait jabatan Teknisi Gigi Mahir
4. Dokumen Teknisi Gigi Mahir
5. Dokumentasi kegiatan Teknisi Gigi Mahir
6. Hasil Kajian Teknisi Gigi Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Gigi Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Gigi Mahir
9. Laporan pelaksanaan kegiatan Teknisi Gigi Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pelayanan teknik gigi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pelayanan teknik gigi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3813',
            'nama_jabatan' => 'Teknisi Gigi Penyelia',
            'nama_unit' => 'Teknisi Gigi Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan teknik gigi yang meliputi kegiatan perencanaan pembuatan dan penilaian protesa gigi meliputi gigi tiruan penuh dan sebagian, gigi tiruan cekat, serta pembuatan pesawat ortodonti lepasan dan protesa maxilo facial',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Gigi Penyelia
2. Data, Bahan dan Informasi terkait Teknisi Gigi Penyelia
3. Produk hukum terkait jabatan Teknisi Gigi Penyelia
4. Dokumen Teknisi Gigi Penyelia
5. Dokumentasi kegiatan Teknisi Gigi Penyelia
6. Hasil Kajian Teknisi Gigi Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Gigi Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Gigi Penyelia
9. Laporan pelaksanaan kegiatan Teknisi Gigi Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pelayanan teknik gigi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pelayanan teknik gigi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3814',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Terampil',
            'nama_unit' => 'Teknik Jalan dan Jembatan Terampil',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Terampil
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Terampil
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Terampil
4. Dokumen Teknik Jalan dan Jembatan Terampil
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Terampil
6. Hasil Kajian Teknik Jalan dan Jembatan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Terampil
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3815',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Mahir',
            'nama_unit' => 'Teknik Jalan dan Jembatan Mahir',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Mahir
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Mahir
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Mahir
4. Dokumen Teknik Jalan dan Jembatan Mahir
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Mahir
6. Hasil Kajian Teknik Jalan dan Jembatan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Mahir
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3816',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Penyelia',
            'nama_unit' => 'Teknik Jalan dan Jembatan Penyelia',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Penyelia
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Penyelia
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Penyelia
4. Dokumen Teknik Jalan dan Jembatan Penyelia
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Penyelia
6. Hasil Kajian Teknik Jalan dan Jembatan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Penyelia
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3817',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Pertama',
            'nama_unit' => 'Teknik Jalan dan Jembatan Pertama',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Pertama
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Pertama
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Pertama
4. Dokumen Teknik Jalan dan Jembatan Pertama
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Pertama
6. Hasil Kajian Teknik Jalan dan Jembatan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Pertama
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3818',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Muda',
            'nama_unit' => 'Teknik Jalan dan Jembatan Muda',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Muda
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Muda
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Muda
4. Dokumen Teknik Jalan dan Jembatan Muda
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Muda
6. Hasil Kajian Teknik Jalan dan Jembatan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Muda
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3819',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Madya',
            'nama_unit' => 'Teknik Jalan dan Jembatan Madya',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Madya
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Madya
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Madya
4. Dokumen Teknik Jalan dan Jembatan Madya
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Madya
6. Hasil Kajian Teknik Jalan dan Jembatan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Madya
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3820',
            'nama_jabatan' => 'Teknik Jalan dan Jembatan Utama',
            'nama_unit' => 'Teknik Jalan dan Jembatan Utama',
            'ikhtisar' => 'Melaksanakan penyelenggaraan penyusunan sistem  jaringan jalan, penyelenggaraan  penanganan jalan, dan penyelenggaraan penanganan jembatan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Jalan dan Jembatan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Jalan dan Jembatan Utama
2. Data, Bahan dan Informasi terkait Teknik Jalan dan Jembatan Utama
3. Produk hukum terkait jabatan Teknik Jalan dan Jembatan Utama
4. Dokumen Teknik Jalan dan Jembatan Utama
5. Dokumentasi kegiatan Teknik Jalan dan Jembatan Utama
6. Hasil Kajian Teknik Jalan dan Jembatan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Jalan dan Jembatan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Jalan dan Jembatan Utama
9. Laporan pelaksanaan kegiatan Teknik Jalan dan Jembatan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan penyusunan system jaringan jalan, penanganan jalan dan jembatan serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3821',
            'nama_jabatan' => 'Teknik Pengairan Terampil',
            'nama_unit' => 'Teknik Pengairan Terampil',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Terampil
2. Data, Bahan dan Informasi terkait Teknik Pengairan Terampil
3. Produk hukum terkait jabatan Teknik Pengairan Terampil
4. Dokumen Teknik Pengairan Terampil
5. Dokumentasi kegiatan Teknik Pengairan Terampil
6. Hasil Kajian Teknik Pengairan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Terampil
9. Laporan pelaksanaan kegiatan Teknik Pengairan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3822',
            'nama_jabatan' => 'Teknik Pengairan Mahir',
            'nama_unit' => 'Teknik Pengairan Mahir',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Mahir
2. Data, Bahan dan Informasi terkait Teknik Pengairan Mahir
3. Produk hukum terkait jabatan Teknik Pengairan Mahir
4. Dokumen Teknik Pengairan Mahir
5. Dokumentasi kegiatan Teknik Pengairan Mahir
6. Hasil Kajian Teknik Pengairan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Mahir
9. Laporan pelaksanaan kegiatan Teknik Pengairan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3823',
            'nama_jabatan' => 'Teknik Pengairan Penyelia',
            'nama_unit' => 'Teknik Pengairan Penyelia',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Terampil',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Penyelia
2. Data, Bahan dan Informasi terkait Teknik Pengairan Penyelia
3. Produk hukum terkait jabatan Teknik Pengairan Penyelia
4. Dokumen Teknik Pengairan Penyelia
5. Dokumentasi kegiatan Teknik Pengairan Penyelia
6. Hasil Kajian Teknik Pengairan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Penyelia
9. Laporan pelaksanaan kegiatan Teknik Pengairan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3824',
            'nama_jabatan' => 'Teknik Pengairan Pertama',
            'nama_unit' => 'Teknik Pengairan Pertama',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Pertama
2. Data, Bahan dan Informasi terkait Teknik Pengairan Pertama
3. Produk hukum terkait jabatan Teknik Pengairan Pertama
4. Dokumen Teknik Pengairan Pertama
5. Dokumentasi kegiatan Teknik Pengairan Pertama
6. Hasil Kajian Teknik Pengairan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Pertama
9. Laporan pelaksanaan kegiatan Teknik Pengairan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3825',
            'nama_jabatan' => 'Teknik Pengairan Muda',
            'nama_unit' => 'Teknik Pengairan Muda',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Muda
2. Data, Bahan dan Informasi terkait Teknik Pengairan Muda
3. Produk hukum terkait jabatan Teknik Pengairan Muda
4. Dokumen Teknik Pengairan Muda
5. Dokumentasi kegiatan Teknik Pengairan Muda
6. Hasil Kajian Teknik Pengairan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Muda
9. Laporan pelaksanaan kegiatan Teknik Pengairan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3826',
            'nama_jabatan' => 'Teknik Pengairan Madya',
            'nama_unit' => 'Teknik Pengairan Madya',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Madya
2. Data, Bahan dan Informasi terkait Teknik Pengairan Madya
3. Produk hukum terkait jabatan Teknik Pengairan Madya
4. Dokumen Teknik Pengairan Madya
5. Dokumentasi kegiatan Teknik Pengairan Madya
6. Hasil Kajian Teknik Pengairan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Madya
9. Laporan pelaksanaan kegiatan Teknik Pengairan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3827',
            'nama_jabatan' => 'Teknik Pengairan Utama',
            'nama_unit' => 'Teknik Pengairan Utama',
            'ikhtisar' => 'Melaksanakan pengembangan dan pengelolaan sumber daya air, irigasi, sungai serta rawa dan pantai.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Pengairan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Pengairan Utama
2. Data, Bahan dan Informasi terkait Teknik Pengairan Utama
3. Produk hukum terkait jabatan Teknik Pengairan Utama
4. Dokumen Teknik Pengairan Utama
5. Dokumentasi kegiatan Teknik Pengairan Utama
6. Hasil Kajian Teknik Pengairan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Pengairan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Pengairan Utama
9. Laporan pelaksanaan kegiatan Teknik Pengairan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan sumberdaya air, irigasi, sungai, rawa dan pantai serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3828',
            'nama_jabatan' => 'Teknisi Penelitian dan Perekayasaan Pemula',
            'nama_unit' => 'Teknisi Penelitian dan Perekayasaan Pemula',
            'ikhtisar' => 'Melakukan pelayanan kegiatan penelitian dan perekayasaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknisi Penelitian dan Perekayasaan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Penelitian dan Perekayasaan Pemula
2. Data, Bahan dan Informasi terkait Teknisi Penelitian dan Perekayasaan Pemula
3. Produk hukum terkait jabatan Teknisi Penelitian dan Perekayasaan Pemula
4. Dokumen Teknisi Penelitian dan Perekayasaan Pemula
5. Dokumentasi kegiatan Teknisi Penelitian dan Perekayasaan Pemula
6. Hasil Kajian Teknisi Penelitian dan Perekayasaan Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Penelitian dan Perekayasaan Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Penelitian dan Perekayasaan Pemula
9. Laporan pelaksanaan kegiatan Teknisi Penelitian dan Perekayasaan Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data Kegiatan Penelitian dan Perekayasaan
b. Infromasi kegiatan penelitian, pelayanan kegiatan perekayasaan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penelitian dan Perekayaansaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3829',
            'nama_jabatan' => 'Teknisi Penelitian dan Perekayasaan Terampil',
            'nama_unit' => 'Teknisi Penelitian dan Perekayasaan Terampil',
            'ikhtisar' => 'Melakukan pelayanan kegiatan penelitian dan perekayasaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknisi Penelitian dan Perekayasaan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Penelitian dan Perekayasaan Terampil
2. Data, Bahan dan Informasi terkait Teknisi Penelitian dan Perekayasaan Terampil
3. Produk hukum terkait jabatan Teknisi Penelitian dan Perekayasaan Terampil
4. Dokumen Teknisi Penelitian dan Perekayasaan Terampil
5. Dokumentasi kegiatan Teknisi Penelitian dan Perekayasaan Terampil
6. Hasil Kajian Teknisi Penelitian dan Perekayasaan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Penelitian dan Perekayasaan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Penelitian dan Perekayasaan Terampil
9. Laporan pelaksanaan kegiatan Teknisi Penelitian dan Perekayasaan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data Kegiatan Penelitian dan Perekayasaan
b. Infromasi kegiatan penelitian, pelayanan kegiatan perekayasaan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penelitian dan Perekayaansaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3830',
            'nama_jabatan' => 'Teknisi Penelitian dan Perekayasaan Mahir',
            'nama_unit' => 'Teknisi Penelitian dan Perekayasaan Mahir',
            'ikhtisar' => 'Melakukan pelayanan kegiatan penelitian dan perekayasaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknisi Penelitian dan Perekayasaan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Penelitian dan Perekayasaan Mahir
2. Data, Bahan dan Informasi terkait Teknisi Penelitian dan Perekayasaan Mahir
3. Produk hukum terkait jabatan Teknisi Penelitian dan Perekayasaan Mahir
4. Dokumen Teknisi Penelitian dan Perekayasaan Mahir
5. Dokumentasi kegiatan Teknisi Penelitian dan Perekayasaan Mahir
6. Hasil Kajian Teknisi Penelitian dan Perekayasaan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Penelitian dan Perekayasaan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Penelitian dan Perekayasaan Mahir
9. Laporan pelaksanaan kegiatan Teknisi Penelitian dan Perekayasaan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data Kegiatan Penelitian dan Perekayasaan
b. Infromasi kegiatan penelitian, pelayanan kegiatan perekayasaan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penelitian dan Perekayaansaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3831',
            'nama_jabatan' => 'Teknisi Penelitian dan Perekayasaan Penyelia',
            'nama_unit' => 'Teknisi Penelitian dan Perekayasaan Penyelia',
            'ikhtisar' => 'Melakukan pelayanan kegiatan penelitian dan perekayasaan.',
            'pdd_formal' => 'SLTA',
            'pdd_jurusan' => 'SLTA Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknisi Penelitian dan Perekayasaan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Penelitian dan Perekayasaan Penyelia
2. Data, Bahan dan Informasi terkait Teknisi Penelitian dan Perekayasaan Penyelia
3. Produk hukum terkait jabatan Teknisi Penelitian dan Perekayasaan Penyelia
4. Dokumen Teknisi Penelitian dan Perekayasaan Penyelia
5. Dokumentasi kegiatan Teknisi Penelitian dan Perekayasaan Penyelia
6. Hasil Kajian Teknisi Penelitian dan Perekayasaan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Penelitian dan Perekayasaan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Penelitian dan Perekayasaan Penyelia
9. Laporan pelaksanaan kegiatan Teknisi Penelitian dan Perekayasaan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Data Kegiatan Penelitian dan Perekayasaan
b. Infromasi kegiatan penelitian, pelayanan kegiatan perekayasaan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Penelitian dan Perekayaansaan ',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3832',
            'nama_jabatan' => 'Teknik Penyehatan Lingkungan Terampil',
            'nama_unit' => 'Teknik Penyehatan Lingkungan Terampil',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Penyehatan Lingkungan Terampil
2. Data, Bahan dan Informasi terkait Teknik Penyehatan Lingkungan Terampil
3. Produk hukum terkait jabatan Teknik Penyehatan Lingkungan Terampil
4. Dokumen Teknik Penyehatan Lingkungan Terampil
5. Dokumentasi kegiatan Teknik Penyehatan Lingkungan Terampil
6. Hasil Kajian Teknik Penyehatan Lingkungan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Penyehatan Lingkungan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Penyehatan Lingkungan Terampil
9. Laporan pelaksanaan kegiatan Teknik Penyehatan Lingkungan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3833',
            'nama_jabatan' => 'Teknik Penyehatan Lingkungan Mahir',
            'nama_unit' => 'Teknik Penyehatan Lingkungan Mahir',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Penyehatan Lingkungan Mahir
2. Data, Bahan dan Informasi terkait Teknik Penyehatan Lingkungan Mahir
3. Produk hukum terkait jabatan Teknik Penyehatan Lingkungan Mahir
4. Dokumen Teknik Penyehatan Lingkungan Mahir
5. Dokumentasi kegiatan Teknik Penyehatan Lingkungan Mahir
6. Hasil Kajian Teknik Penyehatan Lingkungan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Penyehatan Lingkungan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Penyehatan Lingkungan Mahir
9. Laporan pelaksanaan kegiatan Teknik Penyehatan Lingkungan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3834',
            'nama_jabatan' => 'Teknisi kenyehatan Lingkungan Penyelia',
            'nama_unit' => 'Teknisi kenyehatan Lingkungan Penyelia',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi kenyehatan Lingkungan Penyelia
2. Data, Bahan dan Informasi terkait Teknisi kenyehatan Lingkungan Penyelia
3. Produk hukum terkait jabatan Teknisi kenyehatan Lingkungan Penyelia
4. Dokumen Teknisi kenyehatan Lingkungan Penyelia
5. Dokumentasi kegiatan Teknisi kenyehatan Lingkungan Penyelia
6. Hasil Kajian Teknisi kenyehatan Lingkungan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi kenyehatan Lingkungan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi kenyehatan Lingkungan Penyelia
9. Laporan pelaksanaan kegiatan Teknisi kenyehatan Lingkungan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3835',
            'nama_jabatan' => 'Teknik Penyehatan Lingkungan Pertama',
            'nama_unit' => 'Teknik Penyehatan Lingkungan Pertama',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Penyehatan Lingkungan Pertama
2. Data, Bahan dan Informasi terkait Teknik Penyehatan Lingkungan Pertama
3. Produk hukum terkait jabatan Teknik Penyehatan Lingkungan Pertama
4. Dokumen Teknik Penyehatan Lingkungan Pertama
5. Dokumentasi kegiatan Teknik Penyehatan Lingkungan Pertama
6. Hasil Kajian Teknik Penyehatan Lingkungan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Penyehatan Lingkungan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Penyehatan Lingkungan Pertama
9. Laporan pelaksanaan kegiatan Teknik Penyehatan Lingkungan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3836',
            'nama_jabatan' => 'Teknik Penyehatan Lingkungan Muda',
            'nama_unit' => 'Teknik Penyehatan Lingkungan Muda',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Penyehatan Lingkungan Muda
2. Data, Bahan dan Informasi terkait Teknik Penyehatan Lingkungan Muda
3. Produk hukum terkait jabatan Teknik Penyehatan Lingkungan Muda
4. Dokumen Teknik Penyehatan Lingkungan Muda
5. Dokumentasi kegiatan Teknik Penyehatan Lingkungan Muda
6. Hasil Kajian Teknik Penyehatan Lingkungan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Penyehatan Lingkungan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Penyehatan Lingkungan Muda
9. Laporan pelaksanaan kegiatan Teknik Penyehatan Lingkungan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3837',
            'nama_jabatan' => 'Teknik Penyehatan Lingkungan Madya',
            'nama_unit' => 'Teknik Penyehatan Lingkungan Madya',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Penyehatan Lingkungan Madya
2. Data, Bahan dan Informasi terkait Teknik Penyehatan Lingkungan Madya
3. Produk hukum terkait jabatan Teknik Penyehatan Lingkungan Madya
4. Dokumen Teknik Penyehatan Lingkungan Madya
5. Dokumentasi kegiatan Teknik Penyehatan Lingkungan Madya
6. Hasil Kajian Teknik Penyehatan Lingkungan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Penyehatan Lingkungan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Penyehatan Lingkungan Madya
9. Laporan pelaksanaan kegiatan Teknik Penyehatan Lingkungan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3838',
            'nama_jabatan' => 'Teknik Penyehatan Lingkungan Utama',
            'nama_unit' => 'Teknik Penyehatan Lingkungan Utama',
            'ikhtisar' => 'Melaksanakan penyelenggaraan pengelolaan air minum, air limbah, sampah dan air drainase.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Penyehatan Lingkungan Tingkat Ahli',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Penyehatan Lingkungan Utama
2. Data, Bahan dan Informasi terkait Teknik Penyehatan Lingkungan Utama
3. Produk hukum terkait jabatan Teknik Penyehatan Lingkungan Utama
4. Dokumen Teknik Penyehatan Lingkungan Utama
5. Dokumentasi kegiatan Teknik Penyehatan Lingkungan Utama
6. Hasil Kajian Teknik Penyehatan Lingkungan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Penyehatan Lingkungan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Penyehatan Lingkungan Utama
9. Laporan pelaksanaan kegiatan Teknik Penyehatan Lingkungan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan teknis fungsional penyelenggaraan pengelolaan air minum, air limbah, sampah dan drainase serta pengembangan profesi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3839',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Terampil',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Terampil',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Terampil
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Terampil
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Terampil
4. Dokumen Teknik Tata Bangunan dan Perumahan Terampil
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Terampil
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Terampil
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3840',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Mahir',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Mahir',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Mahir
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Mahir
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Mahir
4. Dokumen Teknik Tata Bangunan dan Perumahan Mahir
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Mahir
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Mahir
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3841',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Penyelia',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Penyelia',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'D II',
            'pdd_jurusan' => 'D II Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Terampil ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Penyelia
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Penyelia
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Penyelia
4. Dokumen Teknik Tata Bangunan dan Perumahan Penyelia
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Penyelia
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Penyelia
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3842',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Pertama',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Pertama',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Pertama
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Pertama
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Pertama
4. Dokumen Teknik Tata Bangunan dan Perumahan Pertama
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Pertama
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Pertama
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3843',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Muda',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Muda',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Muda
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Muda
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Muda
4. Dokumen Teknik Tata Bangunan dan Perumahan Muda
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Muda
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Muda
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3844',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Madya',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Madya',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Madya
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Madya
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Madya
4. Dokumen Teknik Tata Bangunan dan Perumahan Madya
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Madya
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Madya
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3845',
            'nama_jabatan' => 'Teknik Tata Bangunan dan Perumahan Utama',
            'nama_unit' => 'Teknik Tata Bangunan dan Perumahan Utama',
            'ikhtisar' => 'Melaksanakan penyelenggaraan tata bangunan, perumahan dan permukiman.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Teknik Tata Bangunan dan Perumahan Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknik Tata Bangunan dan Perumahan Utama
2. Data, Bahan dan Informasi terkait Teknik Tata Bangunan dan Perumahan Utama
3. Produk hukum terkait jabatan Teknik Tata Bangunan dan Perumahan Utama
4. Dokumen Teknik Tata Bangunan dan Perumahan Utama
5. Dokumentasi kegiatan Teknik Tata Bangunan dan Perumahan Utama
6. Hasil Kajian Teknik Tata Bangunan dan Perumahan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Teknik Tata Bangunan dan Perumahan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknik Tata Bangunan dan Perumahan Utama
9. Laporan pelaksanaan kegiatan Teknik Tata Bangunan dan Perumahan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a) Keakuratan penyusunan rencana pengumpulan data kegiatan. 
b) Keakuratan dan kelengkapan laporan hasil kegiatan
c) Ketepatan Atas pekerjaan lain yang diberikan oleh atasan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a) Meyebarluaskan informasi yang dihasilkan kepada orang lain. 
b) Memeriksa hasil pekerjaan yang ada dilapangan
c) Melakukan tugas kedinasan lain
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3846',
            'nama_jabatan' => 'Teknisi Transfusi Darah Pemula',
            'nama_unit' => 'Teknisi Transfusi Darah Pemula',
            'ikhtisar' => 'Melaksanakan kegiatan tranfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan Darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Teknologi Transfusi Darah',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Transfusi Darah Pemula
2. Data, Bahan dan Informasi terkait Teknisi Transfusi Darah Pemula
3. Produk hukum terkait jabatan Teknisi Transfusi Darah Pemula
4. Dokumen Teknisi Transfusi Darah Pemula
5. Dokumentasi kegiatan Teknisi Transfusi Darah Pemula
6. Hasil Kajian Teknisi Transfusi Darah Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Transfusi Darah Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Transfusi Darah Pemula
9. Laporan pelaksanaan kegiatan Teknisi Transfusi Darah Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3847',
            'nama_jabatan' => 'Teknisi Transfusi Darah Terampil',
            'nama_unit' => 'Teknisi Transfusi Darah Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan tranfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan Darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Teknologi Transfusi Darah',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Transfusi Darah Terampil
2. Data, Bahan dan Informasi terkait Teknisi Transfusi Darah Terampil
3. Produk hukum terkait jabatan Teknisi Transfusi Darah Terampil
4. Dokumen Teknisi Transfusi Darah Terampil
5. Dokumentasi kegiatan Teknisi Transfusi Darah Terampil
6. Hasil Kajian Teknisi Transfusi Darah Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Transfusi Darah Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Transfusi Darah Terampil
9. Laporan pelaksanaan kegiatan Teknisi Transfusi Darah Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3848',
            'nama_jabatan' => 'Teknisi Transfusi Darah Mahir',
            'nama_unit' => 'Teknisi Transfusi Darah Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan tranfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan Darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Teknologi Transfusi Darah',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Transfusi Darah Mahir
2. Data, Bahan dan Informasi terkait Teknisi Transfusi Darah Mahir
3. Produk hukum terkait jabatan Teknisi Transfusi Darah Mahir
4. Dokumen Teknisi Transfusi Darah Mahir
5. Dokumentasi kegiatan Teknisi Transfusi Darah Mahir
6. Hasil Kajian Teknisi Transfusi Darah Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Transfusi Darah Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Transfusi Darah Mahir
9. Laporan pelaksanaan kegiatan Teknisi Transfusi Darah Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3849',
            'nama_jabatan' => 'Teknisi Transfusi Darah Penyelia',
            'nama_unit' => 'Teknisi Transfusi Darah Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan tranfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan Darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'pdd_formal' => 'D I',
            'pdd_jurusan' => 'D I Teknologi Transfusi Darah',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Teknisi Transfusi Darah Penyelia
2. Data, Bahan dan Informasi terkait Teknisi Transfusi Darah Penyelia
3. Produk hukum terkait jabatan Teknisi Transfusi Darah Penyelia
4. Dokumen Teknisi Transfusi Darah Penyelia
5. Dokumentasi kegiatan Teknisi Transfusi Darah Penyelia
6. Hasil Kajian Teknisi Transfusi Darah Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Teknisi Transfusi Darah Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Teknisi Transfusi Darah Penyelia
9. Laporan pelaksanaan kegiatan Teknisi Transfusi Darah Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan transfusi darah yang meliputi rekruitment donor, seleksi donor, penyadapan darah donor, pengolahan darah, pengamanan darah donor, penyimpanan darah, pendistribusian darah dan pemeriksaan lanjutan kasus inkompatibilitas serta pelaporan dan dokumentasi.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3850',
            'nama_jabatan' => 'Terapis Wicara Terampil',
            'nama_unit' => 'Terapis Wicara Terampil',
            'ikhtisar' => 'Melaksanakan pelayanan terapi wicara demi tercapainya kemampuan komunikasi yang optimal, baik dalam aspek bahasa, wicara, suara, irama/kelancaran hingga mampu berkomunikasi secara wajar dan tidak mengalami gangguan psikososial dalam menjalankan fungsinya sebagai individu maupun sebagai anggota masyarakat.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Terapis Wicara Terampil
2. Data, Bahan dan Informasi terkait Terapis Wicara Terampil
3. Produk hukum terkait jabatan Terapis Wicara Terampil
4. Dokumen Terapis Wicara Terampil
5. Dokumentasi kegiatan Terapis Wicara Terampil
6. Hasil Kajian Terapis Wicara Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Terapis Wicara Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Terapis Wicara Terampil
9. Laporan pelaksanaan kegiatan Terapis Wicara Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Ketepatan pemberian metode terapi kepada pasien
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3851',
            'nama_jabatan' => 'Terapis Wicara Mahir',
            'nama_unit' => 'Terapis Wicara Mahir',
            'ikhtisar' => 'Melaksanakan pelayanan terapi wicara demi tercapainya kemampuan komunikasi yang optimal, baik dalam aspek bahasa, wicara, suara, irama/kelancaran hingga mampu berkomunikasi secara wajar dan tidak mengalami gangguan psikososial dalam menjalankan fungsinya sebagai individu maupun sebagai anggota masyarakat.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Terapis Wicara Mahir
2. Data, Bahan dan Informasi terkait Terapis Wicara Mahir
3. Produk hukum terkait jabatan Terapis Wicara Mahir
4. Dokumen Terapis Wicara Mahir
5. Dokumentasi kegiatan Terapis Wicara Mahir
6. Hasil Kajian Terapis Wicara Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Terapis Wicara Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Terapis Wicara Mahir
9. Laporan pelaksanaan kegiatan Terapis Wicara Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Ketepatan pemberian metode terapi kepada pasien
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3852',
            'nama_jabatan' => 'Terapis Wicara Penyelia',
            'nama_unit' => 'Terapis Wicara Penyelia',
            'ikhtisar' => 'Melaksanakan pelayanan terapi wicara demi tercapainya kemampuan komunikasi yang optimal, baik dalam aspek bahasa, wicara, suara, irama/kelancaran hingga mampu berkomunikasi secara wajar dan tidak mengalami gangguan psikososial dalam menjalankan fungsinya sebagai individu maupun sebagai anggota masyarakat.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Sesuai dengan kualifikasi pendidikan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Terapis Wicara Penyelia
2. Data, Bahan dan Informasi terkait Terapis Wicara Penyelia
3. Produk hukum terkait jabatan Terapis Wicara Penyelia
4. Dokumen Terapis Wicara Penyelia
5. Dokumentasi kegiatan Terapis Wicara Penyelia
6. Hasil Kajian Terapis Wicara Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Terapis Wicara Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Terapis Wicara Penyelia
9. Laporan pelaksanaan kegiatan Terapis Wicara Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Kelengkapan dan kerahasiaan data dan rekam medis pasien
b. Kebersihan peralatan dan perlengkapan kerja
c. Ketepatan pemberian metode terapi kepada pasien
d. Kesesuaian pelaksanaan tugas terhadap penugasan pimpinan',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menilai kelengkapan data/informasi/bahan kerja yang diterima
b. Menggunakan perangkat kerja yang tersedia',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3853',
            'nama_jabatan' => 'Widyaiswara Pertama',
            'nama_unit' => 'Widyaiswara Pertama',
            'ikhtisar' => 'Melaksanakan Dikjartih PNS,Evaluasi dan Pengembangan Diklat pada Lembaga Diklat Pemerintah.',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 dari perguruan tinggi yang  terakreditasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus Diklat  Pembentukan Calon Widyaiswara',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaiswara Pertama
2. Data, Bahan dan Informasi terkait Widyaiswara Pertama
3. Produk hukum terkait jabatan Widyaiswara Pertama
4. Dokumen Widyaiswara Pertama
5. Dokumentasi kegiatan Widyaiswara Pertama
6. Hasil Kajian Widyaiswara Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaiswara Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaiswara Pertama
9. Laporan pelaksanaan kegiatan Widyaiswara Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Telaksananya kegiatan pendikan pengajaran dan pelatihan
b. Berlangsungnya kegiatan belajar mengajar dan latihan sesuai disiplin, dengan baik lancar sesuai dengan alokasi waktu yang disediakan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyampaikan bahan ajar
b. Mengatur penggunaan waktu
c. Mengelola kelas selama kegiatan mendidik, mengajar dan melatih
d. Melaksanakan kegiatan di dalam kelas dengan tertib dan disiplin
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3854',
            'nama_jabatan' => 'Widyaiswara Muda',
            'nama_unit' => 'Widyaiswara Muda',
            'ikhtisar' => 'Melaksanakan Dikjartih PNS,Evaluasi dan Pengembangan Diklat pada Lembaga Diklat Pemerintah.',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 dari perguruan tinggi yang  terakreditasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus Diklat  Pembentukan Calon Widyaiswara',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaiswara Muda
2. Data, Bahan dan Informasi terkait Widyaiswara Muda
3. Produk hukum terkait jabatan Widyaiswara Muda
4. Dokumen Widyaiswara Muda
5. Dokumentasi kegiatan Widyaiswara Muda
6. Hasil Kajian Widyaiswara Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaiswara Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaiswara Muda
9. Laporan pelaksanaan kegiatan Widyaiswara Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Telaksananya kegiatan pendikan pengajaran dan pelatihan
b. Berlangsungnya kegiatan belajar mengajar dan latihan sesuai disiplin, dengan baik lancar sesuai dengan alokasi waktu yang disediakan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyampaikan bahan ajar
b. Mengatur penggunaan waktu
c. Mengelola kelas selama kegiatan mendidik, mengajar dan melatih
d. Melaksanakan kegiatan di dalam kelas dengan tertib dan disiplin
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3855',
            'nama_jabatan' => 'Widyaiswara Madya',
            'nama_unit' => 'Widyaiswara Madya',
            'ikhtisar' => 'Melaksanakan Dikjartih PNS,Evaluasi dan Pengembangan Diklat pada Lembaga Diklat Pemerintah.',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 dari perguruan tinggi yang  terakreditasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus Diklat  Pembentukan Calon Widyaiswara',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaiswara Madya
2. Data, Bahan dan Informasi terkait Widyaiswara Madya
3. Produk hukum terkait jabatan Widyaiswara Madya
4. Dokumen Widyaiswara Madya
5. Dokumentasi kegiatan Widyaiswara Madya
6. Hasil Kajian Widyaiswara Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaiswara Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaiswara Madya
9. Laporan pelaksanaan kegiatan Widyaiswara Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Telaksananya kegiatan pendikan pengajaran dan pelatihan
b. Berlangsungnya kegiatan belajar mengajar dan latihan sesuai disiplin, dengan baik lancar sesuai dengan alokasi waktu yang disediakan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyampaikan bahan ajar
b. Mengatur penggunaan waktu
c. Mengelola kelas selama kegiatan mendidik, mengajar dan melatih
d. Melaksanakan kegiatan di dalam kelas dengan tertib dan disiplin
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3856',
            'nama_jabatan' => 'Widyaiswara Utama',
            'nama_unit' => 'Widyaiswara Utama',
            'ikhtisar' => 'Melaksanakan Dikjartih PNS,Evaluasi dan Pengembangan Diklat pada Lembaga Diklat Pemerintah.',
            'pdd_formal' => 'S 2',
            'pdd_jurusan' => 'S 2 dari perguruan tinggi yang  terakreditasi',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Telah mengikuti dan lulus Diklat  Pembentukan Calon Widyaiswara',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaiswara Utama
2. Data, Bahan dan Informasi terkait Widyaiswara Utama
3. Produk hukum terkait jabatan Widyaiswara Utama
4. Dokumen Widyaiswara Utama
5. Dokumentasi kegiatan Widyaiswara Utama
6. Hasil Kajian Widyaiswara Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaiswara Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaiswara Utama
9. Laporan pelaksanaan kegiatan Widyaiswara Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'a. Telaksananya kegiatan pendikan pengajaran dan pelatihan
b. Berlangsungnya kegiatan belajar mengajar dan latihan sesuai disiplin, dengan baik lancar sesuai dengan alokasi waktu yang disediakan
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'a. Menyampaikan bahan ajar
b. Mengatur penggunaan waktu
c. Mengelola kelas selama kegiatan mendidik, mengajar dan melatih
d. Melaksanakan kegiatan di dalam kelas dengan tertib dan disiplin
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3857',
            'nama_jabatan' => 'Rescuer Pemula',
            'nama_unit' => 'Rescuer Pemula',
            'ikhtisar' => 'Melakukan pencarian dan pertolongan yang meliputi persiapan, kesiapsiagaan SAR, penyelenggaraan operasi SAR, serta evaluasi dan laporan.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK atau yang sederajat',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Rescuer Pemula
2. Data, Bahan dan Informasi terkait Rescuer Pemula
3. Produk hukum terkait jabatan Rescuer Pemula
4. Dokumen Rescuer Pemula
5. Dokumentasi kegiatan Rescuer Pemula
6. Hasil Kajian Rescuer Pemula
7. Buku/Naskah/Artikel/Jurnal Bidang Rescuer Pemula
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Rescuer Pemula
9. Laporan pelaksanaan kegiatan Rescuer Pemula
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pencarian dan pertolongan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian dan pertolongan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3858',
            'nama_jabatan' => 'Rescuer Terampil',
            'nama_unit' => 'Rescuer Terampil',
            'ikhtisar' => 'Melakukan pencarian dan pertolongan yang meliputi persiapan, kesiapsiagaan SAR, penyelenggaraan operasi SAR, serta evaluasi dan laporan.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK atau yang sederajat',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Rescuer Terampil
2. Data, Bahan dan Informasi terkait Rescuer Terampil
3. Produk hukum terkait jabatan Rescuer Terampil
4. Dokumen Rescuer Terampil
5. Dokumentasi kegiatan Rescuer Terampil
6. Hasil Kajian Rescuer Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Rescuer Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Rescuer Terampil
9. Laporan pelaksanaan kegiatan Rescuer Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pencarian dan pertolongan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian dan pertolongan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3859',
            'nama_jabatan' => 'Rescuer Mahir',
            'nama_unit' => 'Rescuer Mahir',
            'ikhtisar' => 'Melakukan pencarian dan pertolongan yang meliputi persiapan, kesiapsiagaan SAR, penyelenggaraan operasi SAR, serta evaluasi dan laporan.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK atau yang sederajat',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Rescuer Mahir
2. Data, Bahan dan Informasi terkait Rescuer Mahir
3. Produk hukum terkait jabatan Rescuer Mahir
4. Dokumen Rescuer Mahir
5. Dokumentasi kegiatan Rescuer Mahir
6. Hasil Kajian Rescuer Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Rescuer Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Rescuer Mahir
9. Laporan pelaksanaan kegiatan Rescuer Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pencarian dan pertolongan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian dan pertolongan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3860',
            'nama_jabatan' => 'Rescuer Penyelia',
            'nama_unit' => 'Rescuer Penyelia',
            'ikhtisar' => 'Melakukan pencarian dan pertolongan yang meliputi persiapan, kesiapsiagaan SAR, penyelenggaraan operasi SAR, serta evaluasi dan laporan.',
            'pdd_formal' => 'SMU/SMK',
            'pdd_jurusan' => 'SMU/SMK atau yang sederajat',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Rescuer Penyelia
2. Data, Bahan dan Informasi terkait Rescuer Penyelia
3. Produk hukum terkait jabatan Rescuer Penyelia
4. Dokumen Rescuer Penyelia
5. Dokumentasi kegiatan Rescuer Penyelia
6. Hasil Kajian Rescuer Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Rescuer Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Rescuer Penyelia
9. Laporan pelaksanaan kegiatan Rescuer Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya pencarian dan pertolongan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian dan pertolongan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3861',
            'nama_jabatan' => 'Pengawas Koperasi Pertama',
            'nama_unit' => 'Pengawas Koperasi Pertama',
            'ikhtisar' => 'Melaksanakan pengawasan koperasi dalam aspek penerapan kepatuhan, pemeriksaan kelembagaan, pemeriksaan usaha simpan pinjam, penilaian kesehatan usaha simpan pinjam dan penerapan sanksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Manajemen, Ekonomi, Akuntansi atau Hukum',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Koperasi Pertama
2. Data, Bahan dan Informasi terkait Pengawas Koperasi Pertama
3. Produk hukum terkait jabatan Pengawas Koperasi Pertama
4. Dokumen Pengawas Koperasi Pertama
5. Dokumentasi kegiatan Pengawas Koperasi Pertama
6. Hasil Kajian Pengawas Koperasi Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Koperasi Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Koperasi Pertama
9. Laporan pelaksanaan kegiatan Pengawas Koperasi Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. Terselenggaranya pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Terlaksananya catatan dan pembukuan yang ada pada koperasi.
3. Terlaksananya koreksi, sara teguran dan peringatan kepada Pengurus.
4. Terlaksananya laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. Melakukan pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Meneliti catatan dan pembukuan yang ada pada koperasi.
3. Memberikan koreksi, sara teguran dan peringatan kepada Pengurus.
4. Membuat laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3862',
            'nama_jabatan' => 'Pengawas Koperasi Muda',
            'nama_unit' => 'Pengawas Koperasi Muda',
            'ikhtisar' => 'Melaksanakan pengawasan koperasi dalam aspek penerapan kepatuhan, pemeriksaan kelembagaan, pemeriksaan usaha simpan pinjam, penilaian kesehatan usaha simpan pinjam dan penerapan sanksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Manajemen, Ekonomi, Akuntansi atau Hukum',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Koperasi Muda
2. Data, Bahan dan Informasi terkait Pengawas Koperasi Muda
3. Produk hukum terkait jabatan Pengawas Koperasi Muda
4. Dokumen Pengawas Koperasi Muda
5. Dokumentasi kegiatan Pengawas Koperasi Muda
6. Hasil Kajian Pengawas Koperasi Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Koperasi Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Koperasi Muda
9. Laporan pelaksanaan kegiatan Pengawas Koperasi Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. Terselenggaranya pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Terlaksananya catatan dan pembukuan yang ada pada koperasi.
3. Terlaksananya koreksi, sara teguran dan peringatan kepada Pengurus.
4. Terlaksananya laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. Melakukan pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Meneliti catatan dan pembukuan yang ada pada koperasi.
3. Memberikan koreksi, sara teguran dan peringatan kepada Pengurus.
4. Membuat laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3863',
            'nama_jabatan' => 'Pengawas Koperasi Madya',
            'nama_unit' => 'Pengawas Koperasi Madya',
            'ikhtisar' => 'Melaksanakan pengawasan koperasi dalam aspek penerapan kepatuhan, pemeriksaan kelembagaan, pemeriksaan usaha simpan pinjam, penilaian kesehatan usaha simpan pinjam dan penerapan sanksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Manajemen, Ekonomi, Akuntansi atau Hukum',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Koperasi Madya
2. Data, Bahan dan Informasi terkait Pengawas Koperasi Madya
3. Produk hukum terkait jabatan Pengawas Koperasi Madya
4. Dokumen Pengawas Koperasi Madya
5. Dokumentasi kegiatan Pengawas Koperasi Madya
6. Hasil Kajian Pengawas Koperasi Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Koperasi Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Koperasi Madya
9. Laporan pelaksanaan kegiatan Pengawas Koperasi Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. Terselenggaranya pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Terlaksananya catatan dan pembukuan yang ada pada koperasi.
3. Terlaksananya koreksi, sara teguran dan peringatan kepada Pengurus.
4. Terlaksananya laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. Melakukan pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Meneliti catatan dan pembukuan yang ada pada koperasi.
3. Memberikan koreksi, sara teguran dan peringatan kepada Pengurus.
4. Membuat laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3864',
            'nama_jabatan' => 'Pengawas Koperasi Utama',
            'nama_unit' => 'Pengawas Koperasi Utama',
            'ikhtisar' => 'Melaksanakan pengawasan koperasi dalam aspek penerapan kepatuhan, pemeriksaan kelembagaan, pemeriksaan usaha simpan pinjam, penilaian kesehatan usaha simpan pinjam dan penerapan sanksi.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Ilmu Manajemen, Ekonomi, Akuntansi atau Hukum',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengawas Koperasi Utama
2. Data, Bahan dan Informasi terkait Pengawas Koperasi Utama
3. Produk hukum terkait jabatan Pengawas Koperasi Utama
4. Dokumen Pengawas Koperasi Utama
5. Dokumentasi kegiatan Pengawas Koperasi Utama
6. Hasil Kajian Pengawas Koperasi Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengawas Koperasi Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengawas Koperasi Utama
9. Laporan pelaksanaan kegiatan Pengawas Koperasi Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '1. Terselenggaranya pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Terlaksananya catatan dan pembukuan yang ada pada koperasi.
3. Terlaksananya koreksi, sara teguran dan peringatan kepada Pengurus.
4. Terlaksananya laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => '1. Melakukan pengawasan dan pemeriksaan terhadap pelaksanaan kebijakan dan pengelolaan Koperasi.
2. Meneliti catatan dan pembukuan yang ada pada koperasi.
3. Memberikan koreksi, sara teguran dan peringatan kepada Pengurus.
4. Membuat laporan tertulis tentang hasil pelaksanaan tugas pengawasan kepada Rapat Anggota.
',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3865',
            'nama_jabatan' => 'Penata Laksana Barang Terampil',
            'nama_unit' => 'Penata Laksana Barang Terampil',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan BMN/D.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ekonomi, Teknik, Matematika atau kualifikasi pendidikan lain yang relevan dan ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Laksana Barang Terampil
2. Data, Bahan dan Informasi terkait Penata Laksana Barang Terampil
3. Produk hukum terkait jabatan Penata Laksana Barang Terampil
4. Dokumen Penata Laksana Barang Terampil
5. Dokumentasi kegiatan Penata Laksana Barang Terampil
6. Hasil Kajian Penata Laksana Barang Terampil
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Laksana Barang Terampil
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Laksana Barang Terampil
9. Laporan pelaksanaan kegiatan Penata Laksana Barang Terampil
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pengelolaan Barang Milik Negara/Daerah sesuai dengan ketentuan peraturan perundang-undangan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pengelolaan Barang Milik Negara/Daerah sesuai dengan ketentuan peraturan perundang-undangan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3866',
            'nama_jabatan' => 'Penata Laksana Barang Mahir',
            'nama_unit' => 'Penata Laksana Barang Mahir',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan BMN/D.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ekonomi, Teknik, Matematika atau kualifikasi pendidikan lain yang relevan dan ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Laksana Barang Mahir
2. Data, Bahan dan Informasi terkait Penata Laksana Barang Mahir
3. Produk hukum terkait jabatan Penata Laksana Barang Mahir
4. Dokumen Penata Laksana Barang Mahir
5. Dokumentasi kegiatan Penata Laksana Barang Mahir
6. Hasil Kajian Penata Laksana Barang Mahir
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Laksana Barang Mahir
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Laksana Barang Mahir
9. Laporan pelaksanaan kegiatan Penata Laksana Barang Mahir
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pengelolaan Barang Milik Negara/Daerah sesuai dengan ketentuan peraturan perundang-undangan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pengelolaan Barang Milik Negara/Daerah sesuai dengan ketentuan peraturan perundang-undangan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3867',
            'nama_jabatan' => 'Penata Laksana Barang Penyelia',
            'nama_unit' => 'Penata Laksana Barang Penyelia',
            'ikhtisar' => 'Melaksanakan kegiatan pengelolaan BMN/D.',
            'pdd_formal' => 'D III',
            'pdd_jurusan' => 'D III Bidang Ekonomi, Teknik, Matematika atau kualifikasi pendidikan lain yang relevan dan ditentukan oleh Instansi Pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Penata Laksana Barang Penyelia
2. Data, Bahan dan Informasi terkait Penata Laksana Barang Penyelia
3. Produk hukum terkait jabatan Penata Laksana Barang Penyelia
4. Dokumen Penata Laksana Barang Penyelia
5. Dokumentasi kegiatan Penata Laksana Barang Penyelia
6. Hasil Kajian Penata Laksana Barang Penyelia
7. Buku/Naskah/Artikel/Jurnal Bidang Penata Laksana Barang Penyelia
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Penata Laksana Barang Penyelia
9. Laporan pelaksanaan kegiatan Penata Laksana Barang Penyelia
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pengelolaan Barang Milik Negara/Daerah sesuai dengan ketentuan peraturan perundang-undangan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pengelolaan Barang Milik Negara/Daerah sesuai dengan ketentuan peraturan perundang-undangan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3868',
            'nama_jabatan' => 'Widyaprada Pertama',
            'nama_unit' => 'Widyaprada Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan Pemetaan Mutu Pendidikan, Pendampingan Satuan Pendidikan, Pembimbingan Satuan Pendidikan, Supervisi Pendidikan dan/atau Pengembangan Model Penjaminan Mutu Pendidikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pendidikan, Ekonomi, Sosial atau kualifikasi pendidikan lain yang relevan dengan tugas jabatan ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaprada Pertama
2. Data, Bahan dan Informasi terkait Widyaprada Pertama
3. Produk hukum terkait jabatan Widyaprada Pertama
4. Dokumen Widyaprada Pertama
5. Dokumentasi kegiatan Widyaprada Pertama
6. Hasil Kajian Widyaprada Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaprada Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaprada Pertama
9. Laporan pelaksanaan kegiatan Widyaprada Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3869',
            'nama_jabatan' => 'Widyaprada Muda',
            'nama_unit' => 'Widyaprada Muda',
            'ikhtisar' => 'Melaksanakan kegiatan Pemetaan Mutu Pendidikan, Pendampingan Satuan Pendidikan, Pembimbingan Satuan Pendidikan, Supervisi Pendidikan dan/atau Pengembangan Model Penjaminan Mutu Pendidikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pendidikan, Ekonomi, Sosial atau kualifikasi pendidikan lain yang relevan dengan tugas jabatan ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaprada Muda
2. Data, Bahan dan Informasi terkait Widyaprada Muda
3. Produk hukum terkait jabatan Widyaprada Muda
4. Dokumen Widyaprada Muda
5. Dokumentasi kegiatan Widyaprada Muda
6. Hasil Kajian Widyaprada Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaprada Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaprada Muda
9. Laporan pelaksanaan kegiatan Widyaprada Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3870',
            'nama_jabatan' => 'Widyaprada Madya',
            'nama_unit' => 'Widyaprada Madya',
            'ikhtisar' => 'Melaksanakan kegiatan Pemetaan Mutu Pendidikan, Pendampingan Satuan Pendidikan, Pembimbingan Satuan Pendidikan, Supervisi Pendidikan dan/atau Pengembangan Model Penjaminan Mutu Pendidikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pendidikan, Ekonomi, Sosial atau kualifikasi pendidikan lain yang relevan dengan tugas jabatan ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaprada Madya
2. Data, Bahan dan Informasi terkait Widyaprada Madya
3. Produk hukum terkait jabatan Widyaprada Madya
4. Dokumen Widyaprada Madya
5. Dokumentasi kegiatan Widyaprada Madya
6. Hasil Kajian Widyaprada Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaprada Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaprada Madya
9. Laporan pelaksanaan kegiatan Widyaprada Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3871',
            'nama_jabatan' => 'Widyaprada Utama',
            'nama_unit' => 'Widyaprada Utama',
            'ikhtisar' => 'Melaksanakan kegiatan Pemetaan Mutu Pendidikan, Pendampingan Satuan Pendidikan, Pembimbingan Satuan Pendidikan, Supervisi Pendidikan dan/atau Pengembangan Model Penjaminan Mutu Pendidikan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV di Bidang Pendidikan, Ekonomi, Sosial atau kualifikasi pendidikan lain yang relevan dengan tugas jabatan ditetapkan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Widyaprada Utama
2. Data, Bahan dan Informasi terkait Widyaprada Utama
3. Produk hukum terkait jabatan Widyaprada Utama
4. Dokumen Widyaprada Utama
5. Dokumentasi kegiatan Widyaprada Utama
6. Hasil Kajian Widyaprada Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Widyaprada Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Widyaprada Utama
9. Laporan pelaksanaan kegiatan Widyaprada Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terlaksananya kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melaksanakan kegiatan pemetaan mutu pendidikan, pendampingan satuan pendidikan, pembimbingan satuan pendidikan, supervisi pendidikan, dan/atau pengembangan model penjaminan mutu pendidikan.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3872',
            'nama_jabatan' => 'Analis Ketahanan Pangan Pertama',
            'nama_unit' => 'Analis Ketahanan Pangan Pertama',
            'ikhtisar' => 'Melaksanakan kegiatan analisis ketahanan pangan yang meliputi ketersediaan, keterjangkauan, dan pemanfaatan pangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Pertanian, Ilmu Gizi, Teknologi Pangan, atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Ketahanan Pangan Pertama
2. Data, Bahan dan Informasi terkait Analis Ketahanan Pangan Pertama
3. Produk hukum terkait jabatan Analis Ketahanan Pangan Pertama
4. Dokumen Analis Ketahanan Pangan Pertama
5. Dokumentasi kegiatan Analis Ketahanan Pangan Pertama
6. Hasil Kajian Analis Ketahanan Pangan Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Ketahanan Pangan Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Ketahanan Pangan Pertama
9. Laporan pelaksanaan kegiatan Analis Ketahanan Pangan Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang ketahanan
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3873',
            'nama_jabatan' => 'Analis Ketahanan Pangan Muda',
            'nama_unit' => 'Analis Ketahanan Pangan Muda',
            'ikhtisar' => 'Melaksanakan kegiatan analisis ketahanan pangan yang meliputi ketersediaan, keterjangkauan, dan pemanfaatan pangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Pertanian, Ilmu Gizi, Teknologi Pangan, atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Ketahanan Pangan Muda
2. Data, Bahan dan Informasi terkait Analis Ketahanan Pangan Muda
3. Produk hukum terkait jabatan Analis Ketahanan Pangan Muda
4. Dokumen Analis Ketahanan Pangan Muda
5. Dokumentasi kegiatan Analis Ketahanan Pangan Muda
6. Hasil Kajian Analis Ketahanan Pangan Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Ketahanan Pangan Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Ketahanan Pangan Muda
9. Laporan pelaksanaan kegiatan Analis Ketahanan Pangan Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang ketahanan
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3874',
            'nama_jabatan' => 'Analis Ketahanan Pangan Madya',
            'nama_unit' => 'Analis Ketahanan Pangan Madya',
            'ikhtisar' => 'Melaksanakan kegiatan analisis ketahanan pangan yang meliputi ketersediaan, keterjangkauan, dan pemanfaatan pangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Pertanian, Ilmu Gizi, Teknologi Pangan, atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Ketahanan Pangan Madya
2. Data, Bahan dan Informasi terkait Analis Ketahanan Pangan Madya
3. Produk hukum terkait jabatan Analis Ketahanan Pangan Madya
4. Dokumen Analis Ketahanan Pangan Madya
5. Dokumentasi kegiatan Analis Ketahanan Pangan Madya
6. Hasil Kajian Analis Ketahanan Pangan Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Ketahanan Pangan Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Ketahanan Pangan Madya
9. Laporan pelaksanaan kegiatan Analis Ketahanan Pangan Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang ketahanan
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3875',
            'nama_jabatan' => 'Analis Ketahanan Pangan Utama',
            'nama_unit' => 'Analis Ketahanan Pangan Utama',
            'ikhtisar' => 'Melaksanakan kegiatan analisis ketahanan pangan yang meliputi ketersediaan, keterjangkauan, dan pemanfaatan pangan.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Pertanian, Ilmu Gizi, Teknologi Pangan, atau kualifikasi lain yang ditentukan oleh instansi pembina',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Tidak dipersyaratkan',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Analis Ketahanan Pangan Utama
2. Data, Bahan dan Informasi terkait Analis Ketahanan Pangan Utama
3. Produk hukum terkait jabatan Analis Ketahanan Pangan Utama
4. Dokumen Analis Ketahanan Pangan Utama
5. Dokumentasi kegiatan Analis Ketahanan Pangan Utama
6. Hasil Kajian Analis Ketahanan Pangan Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Analis Ketahanan Pangan Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Analis Ketahanan Pangan Utama
9. Laporan pelaksanaan kegiatan Analis Ketahanan Pangan Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => '- Validitas data dalam bidang ketahanan
- Ketepatan hasil analisis',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan pencarian data
Melakukan kajian',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3876',
            'nama_jabatan' => 'Pengelola Ekosistem Laut dan Pesisir Pertama',
            'nama_unit' => 'Pengelola Ekosistem Laut dan Pesisir Pertama',
            'ikhtisar' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/Ilmu Kelautan/Planologi/ Geografi/Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengelola Ekosistem Laut dan Pesisir Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Ekosistem Laut dan Pesisir Pertama
2. Data, Bahan dan Informasi terkait Pengelola Ekosistem Laut dan Pesisir Pertama
3. Produk hukum terkait jabatan Pengelola Ekosistem Laut dan Pesisir Pertama
4. Dokumen Pengelola Ekosistem Laut dan Pesisir Pertama
5. Dokumentasi kegiatan Pengelola Ekosistem Laut dan Pesisir Pertama
6. Hasil Kajian Pengelola Ekosistem Laut dan Pesisir Pertama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Ekosistem Laut dan Pesisir Pertama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Ekosistem Laut dan Pesisir Pertama
9. Laporan pelaksanaan kegiatan Pengelola Ekosistem Laut dan Pesisir Pertama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3877',
            'nama_jabatan' => 'Pengelola Ekosistem Laut dan Pesisir Muda',
            'nama_unit' => 'Pengelola Ekosistem Laut dan Pesisir Muda',
            'ikhtisar' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/Ilmu Kelautan/Planologi/ Geografi/Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengelola Ekosistem Laut dan Pesisir Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Ekosistem Laut dan Pesisir Muda
2. Data, Bahan dan Informasi terkait Pengelola Ekosistem Laut dan Pesisir Muda
3. Produk hukum terkait jabatan Pengelola Ekosistem Laut dan Pesisir Muda
4. Dokumen Pengelola Ekosistem Laut dan Pesisir Muda
5. Dokumentasi kegiatan Pengelola Ekosistem Laut dan Pesisir Muda
6. Hasil Kajian Pengelola Ekosistem Laut dan Pesisir Muda
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Ekosistem Laut dan Pesisir Muda
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Ekosistem Laut dan Pesisir Muda
9. Laporan pelaksanaan kegiatan Pengelola Ekosistem Laut dan Pesisir Muda
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3878',
            'nama_jabatan' => 'Pengelola Ekosistem Laut dan Pesisir Madya',
            'nama_unit' => 'Pengelola Ekosistem Laut dan Pesisir Madya',
            'ikhtisar' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/Ilmu Kelautan/Planologi/ Geografi/Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengelola Ekosistem Laut dan Pesisir Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Ekosistem Laut dan Pesisir Madya
2. Data, Bahan dan Informasi terkait Pengelola Ekosistem Laut dan Pesisir Madya
3. Produk hukum terkait jabatan Pengelola Ekosistem Laut dan Pesisir Madya
4. Dokumen Pengelola Ekosistem Laut dan Pesisir Madya
5. Dokumentasi kegiatan Pengelola Ekosistem Laut dan Pesisir Madya
6. Hasil Kajian Pengelola Ekosistem Laut dan Pesisir Madya
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Ekosistem Laut dan Pesisir Madya
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Ekosistem Laut dan Pesisir Madya
9. Laporan pelaksanaan kegiatan Pengelola Ekosistem Laut dan Pesisir Madya
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
        DB::table('jabatan')->insert([
            'id' => '3879',
            'nama_jabatan' => 'Pengelola Ekosistem Laut dan Pesisir Utama',
            'nama_unit' => 'Pengelola Ekosistem Laut dan Pesisir Utama',
            'ikhtisar' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil.',
            'pdd_formal' => 'S 1 / D IV',
            'pdd_jurusan' => 'S 1 / D IV Bidang Perikanan/Ilmu Kelautan/Planologi/ Geografi/Lingkungan',
            'pelatihan_struktural' => 'Diklat Prajabatan',
            'pelatihan_fungsional' => 'Diklat Fungsional Pengelola Ekosistem Laut dan Pesisir Tingkat Ahli ',
            'pelatihan_teknis' => 'Tidak dipersyaratkan',
            'pengalaman_kerja' => 'Tidak dipersyaratkan',
            'hasil_kerja_jabatan' => '1. Rencana Program/Kerja di Bidang Pengelola Ekosistem Laut dan Pesisir Utama
2. Data, Bahan dan Informasi terkait Pengelola Ekosistem Laut dan Pesisir Utama
3. Produk hukum terkait jabatan Pengelola Ekosistem Laut dan Pesisir Utama
4. Dokumen Pengelola Ekosistem Laut dan Pesisir Utama
5. Dokumentasi kegiatan Pengelola Ekosistem Laut dan Pesisir Utama
6. Hasil Kajian Pengelola Ekosistem Laut dan Pesisir Utama
7. Buku/Naskah/Artikel/Jurnal Bidang Pengelola Ekosistem Laut dan Pesisir Utama
8. Melaksanakan koordinasi dengan pihak-pihak yang terkait dalam rangka pelaksanaan tugas Pengelola Ekosistem Laut dan Pesisir Utama
9. Laporan pelaksanaan kegiatan Pengelola Ekosistem Laut dan Pesisir Utama
10. Laporan tugas lain yang diberikan oleh atasan',
            'tanggung_jawab' => 'Terselenggaranya kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'prestasi_harapan' => 'Prestasi kerja yang diharapkan bernilai baik dan sangat baik sesuai dengan peraturan perundang-undangan.',
            'wewenang' => 'Melakukan kegiatan pengelolaan wilayah laut, pesisir dan pulau-pulau kecil dalam lingkungan instansi Pusat dan Daerah.',
            'jenis_jabatan' => 'Fungsional',
            'created_at' => now()
        ]);
    }
}
