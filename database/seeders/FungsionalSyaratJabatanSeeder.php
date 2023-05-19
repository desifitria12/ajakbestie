<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FungsionalSyaratJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3395',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3396',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3397',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3398',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3399',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3400',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3401',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3402',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3403',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3404',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3405',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3406',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3407',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3408',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, mendorong, menarik, memanjat, menunduk, membungkuk, merangkat, menjangkau, memegang, bekerja dengan jari, berbicara, mendengar, melihat dan ketajaman jarak jauh',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Ideal',
            'berat' => 'Ideal',
            'postur' => 'Ideal',
            'penampilan' => 'Berwibawa',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3409',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3410',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3411',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3412',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3413',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3414',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3415',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3416',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3417',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3418',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3419',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3420',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3421',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3422',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3423',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3424',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3425',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3426',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3427',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3428',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3429',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3430',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3431',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3432',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3433',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3434',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3435',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3436',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3437',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3438',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3439',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3440',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3441',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3442',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3443',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3444',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3445',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3446',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3447',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3448',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3449',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3450',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3451',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3452',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3453',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3454',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3455',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3456',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3457',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3458',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3459',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3460',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3461',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3462',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3463',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3464',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3465',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3466',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3467',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3468',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3469',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3470',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3471',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3472',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3473',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3474',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3475',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3476',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3477',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3478',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3479',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3480',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3481',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3482',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3483',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3484',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3485',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3486',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, memegang, ketajaman jarak dekat, pengamatan secara mendalam, dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3487',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, memegang, meraba, membungkuk, berlutut dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3488',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, memegang, meraba, membungkuk, berlutut dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3489',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, memegang, meraba, membungkuk, berlutut dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3490',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, memegang, meraba, membungkuk, berlutut dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3491',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, memegang, meraba, membungkuk, berlutut dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3492',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar, memegang, meraba, membungkuk, berlutut dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3493',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3494',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3495',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3496',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3497',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3498',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3499',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3500',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3501',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3502',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3503',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3504',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3505',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3506',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3507',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3508',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3509',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3510',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3511',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3512',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3513',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3514',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3515',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3516',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3517',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3518',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar melihat, ketajaman jarak dekat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3519',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar melihat, ketajaman jarak dekat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3520',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar melihat, ketajaman jarak dekat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3521',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3522',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3523',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3524',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3525',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3526',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3527',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3528',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3529',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3530',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3531',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3532',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3533',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3534',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3535',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3536',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3537',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3538',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3539',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3540',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3541',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3542',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3543',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3544',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3545',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3546',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3547',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3548',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3549',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3550',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3551',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3552',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3553',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3554',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3555',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3556',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3557',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri
            Menyimpan imbangan / mengatur imbangan
            Membungkuk
            Menjangkau
            Memegang
            Melihat
            Mendorong
            Menunduk
            Mendengar
            Berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3558',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri
            Menyimpan imbangan / mengatur imbangan
            Membungkuk
            Menjangkau
            Memegang
            Melihat
            Mendorong
            Menunduk
            Mendengar
            Berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3559',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri
            Menyimpan imbangan / mengatur imbangan
            Membungkuk
            Menjangkau
            Memegang
            Melihat
            Mendorong
            Menunduk
            Mendengar
            Berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3560',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri
            Menyimpan imbangan / mengatur imbangan
            Membungkuk
            Menjangkau
            Memegang
            Melihat
            Mendorong
            Menunduk
            Mendengar
            Berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3561',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri
            Menyimpan imbangan / mengatur imbangan
            Membungkuk
            Menjangkau
            Memegang
            Melihat
            Mendorong
            Menunduk
            Mendengar
            Berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3562',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri
            Menyimpan imbangan / mengatur imbangan
            Membungkuk
            Menjangkau
            Memegang
            Melihat
            Mendorong
            Menunduk
            Mendengar
            Berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3563',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3564',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3565',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3566',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3567',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3568',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3569',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3570',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3571',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3572',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3573',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3574',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3575',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3576',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3577',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3578',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3579',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3580',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3581',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3582',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3583',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3584',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3585',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3586',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3587',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3588',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3589',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3590',
            'keterampilan' => 'III b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3591',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3592',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3593',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3594',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3595',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3596',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3597',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3598',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3599',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3600',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3601',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3602',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3603',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3604',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3605',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3606',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3607',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3608',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3609',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3610',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3611',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3612',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3613',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3614',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3615',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3616',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3617',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3618',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3619',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3620',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, mendengar, bebricara, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3621',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, mendengar, bebricara, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3622',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, mendengar, bebricara, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3623',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3624',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3625',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3626',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3627',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3628',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3629',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3630',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3631',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3632',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3633',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3634',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3635',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak jauh dan melihat luas',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3636',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3637',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3638',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3639',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3640',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3641',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3642',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, membawa, menyimpan imbangan / mengatur imbangan, memegang, bekerja dengan jari, berbicara, mendengar, ketajaman jarak dekat, dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3643',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3644',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3645',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3646',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3647',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3648',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3649',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3650',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3651',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3652',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3653',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3654',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3655',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3656',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3657',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3658',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3659',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3660',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, menyimpan imbangan / mengatur imbangan, membungkuk, menjangkau, memegang, bekerja dengan jari, melihat, melihat berbagai warna, mendorong, menunduk, mendengar dan berbicara',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3661',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3662',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3663',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3664',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3665',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3666',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3667',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3668',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3669',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3670',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3671',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3672',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3673',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3674',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3675',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3676',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3677',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3678',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3679',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3680',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3681',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3682',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3683',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3684',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3685',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3686',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3687',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3688',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3689',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3690',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3691',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3692',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3693',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3694',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3695',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3696',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3697',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3698',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3699',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3700',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3701',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3702',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3703',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3704',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3705',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3706',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3707',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3708',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3709',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3710',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3711',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3712',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3713',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3714',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3715',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3716',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar, memegang, bekerja dengan jari, meraba, melihat berbagai warna, ketajaman jarak dekat dan pengamatan secara mendalam',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3717',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3718',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3719',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3720',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3721',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3722',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, duduk, mengangkat, membawa, memegang, bekerja dengan jari, berbicara, mengengar, dan melihat berbagai warna',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3723',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3724',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3725',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3726',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3727',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3728',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3729',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3730',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3731',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3732',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3733',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3734',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3735',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3736',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3737',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3738',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3739',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3740',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3741',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3742',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3743',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berdiri, berjalan, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3744',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3745',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3746',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3747',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3748',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3749',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3750',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3751',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3752',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3753',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3754',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3755',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3756',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3757',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3758',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3759',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3760',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3761',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3762',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3763',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3764',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, memegang, membawa, berbicara, mendengar, bekerja dengan jari dan menulis',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3765',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3766',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3767',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3768',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3769',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3770',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3771',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3772',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3773',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3774',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3775',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3776',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3777',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3778',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3779',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3780',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3781',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3782',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3783',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3784',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3785',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3786',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3787',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3788',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3789',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3790',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mendengar berbicara, mengangkat, membawa, menarik, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, meraba, melihat dan ketajaman jarak dekat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3791',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3792',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3793',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3794',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3795',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3796',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3797',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3798',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3799',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3800',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3801',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3802',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3803',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3804',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3805',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3806',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3807',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3808',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3809',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3810',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3811',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3812',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3813',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3814',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3815',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3816',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3817',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3818',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3819',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3820',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3821',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3822',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3823',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3824',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3825',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3826',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3827',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3828',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3829',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3830',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3831',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3832',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3833',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3834',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3835',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3836',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3837',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3838',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3839',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3840',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3841',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3842',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3843',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3844',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3845',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3846',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3847',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3848',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3849',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berjalan, berbicara, mendengar, melihat dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3850',
            'keterampilan' => 'II c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3851',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3852',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3853',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3854',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3855',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3856',
            'keterampilan' => 'IV d',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, bekerja dengan jari, mendengar, dan melihat',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3857',
            'keterampilan' => 'II a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3858',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3859',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3860',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3861',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3862',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3863',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3864',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3865',
            'keterampilan' => 'II b',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3866',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3867',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3868',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3869',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3870',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3871',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3872',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3873',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3874',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Duduk, berbicara, mendengar dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3875',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3876',
            'keterampilan' => 'III a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3877',
            'keterampilan' => 'III c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3878',
            'keterampilan' => 'IV a',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 58 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
        DB::table('syarat_kerja')->insert([
            'jabatan_id' => '3879',
            'keterampilan' => 'IV c',
            'bakat' => '- G : Inteligensia / Kemampuan belajar secara umum.
- V : Bakat verbal / Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
- N : Numerik / Kemampuan untuk melakukan operasi arithmatik secara tepat dan akurat.
- Q : Ketelitian / Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
            'temperamen' => '- F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandangan pribadi.
- J : Kemampuan menyesuaikan diri pada kegiatan pembuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria rangsangan indera atau atas dasar pertimbangan pribadi.
- M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.',
            'minat' => '- I (Investigatif) = Kemampuan analisis ilmiah / ilmiah
- C : (Konvesional) = Menjalankan sistem atau rutinitas, mengikuti kebijakan atau prosedur',
            'upaya_fisik' => 'Berdiri, berjalan, mengangkat, membawa, menyimpan imbangan/mengatur imbangan, memegang, bekerja dengan jari, ketajaman jarak dekat, pengamatan mendalam, penyesuaian lensa mata, melihat berbagai warna dan bekerja dengan jari',
            'jenis_kelamin' => 'Tidak Dipersyaratkan',
            'umur' => 'Maksimal 60 th',
            'tinggi' => 'Tidak dipersyaratkan',
            'berat' => 'Tidak dipersyaratkan',
            'postur' => 'Tidak dipersyaratkan',
            'penampilan' => 'Tidak dipersyaratkan',
            'hubungan_data' => '- D0 = Memadukan data
- D2 = Menganalisis data
- D3 = Menyusun data
- D4 = Menghitung data
- D5 = Membandingkan/ Mencocokkan data
- D6 = Menyalin data',
            'hubungan_orang' => '- O6 = Berbicara – memberi tanda
- O8 = Menerima instruksi',
            'hubungan_benda' => '- B3 = Mengemudikan / menjalankan mesin',
            'created_at' => now()
        ]);
    }
}
