<?php

namespace Database\Seeders;

use App\Models\Poin;
use Illuminate\Database\Seeder;

class PoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => '1',
                'slug' => '1',
                'desc' => 'Keagamaan',
            ],
            [
                'name' => '2',
                'slug' => '2',
                'desc' => 'Berani mengajukan saran dan kritik untuk membangun desanya kepada aparat pemerintah setempat',
            ], [
                'name' => '3',
                'slug' => '3',
                'desc' => 'Dapat mengikuti dan atau memimpin diskusi Racana dan mampu mengambil keputusan',
            ], [
                'name' => '4',
                'slug' => '4',
                'desc' => 'Dapat mengatasi suatu permasalahan/perselisihan yang terjadi dalam masyarakat dengan bijak ',
            ], [
                'name' => '5',
                'slug' => '5',
                'desc' => 'Mengikuti pertemuan di Racana sekurang-kurangnya3 kali setiap bulan ',
            ], [
                'name' => '6',
                'slug' => '6',
                'desc' => 'Setia membayar iuran kepada Gugusdepannya, dengan uang yang seluruhnya atau sebagian diperolehnya dari usaha sendiri, serta membantu Racana dan Gugusdepan dalam mengelola administrasi keuangan',
            ], [
                'name' => '7',
                'slug' => '7',
                'desc' => 'Dapat membuat tulisan dengan menggunakan Bahasa Indonesia yang baik serta dapat memaparkannya di depan pertemuan ',
            ], [
                'name' => '8',
                'slug' => '8',
                'desc' => 'Mampu membuat perencanaan kegiatan ditingkat Racana',
            ], [
                'name' => '9',
                'slug' => '9',
                'desc' => 'Dapat merencanakan dan memimpin kerja bakti sesuai keperluan masyarakat. ',
            ], [
                'name' => '10',
                'slug' => '10',
                'desc' => 'Telah memahami makna upacara adat di masyarakatnya dan ikut berperan aktif ',
            ], [
                'name' => '11',
                'slug' => '11',
                'desc' => 'Dapat menjelaskan isi AD & ART Gerakan Pramuka dalam bentuk tulisan. ',
            ], [
                'name' => '12',
                'slug' => '12',
                'desc' => 'Dapat menjelaskan tentang sejarah kepramukaan Indonesia dan dunia dalam bentuk tulisan ',
            ], [
                'name' => '13',
                'slug' => '13',
                'desc' => 'Dapat menjelaskan tentang penggunaaan jam, kompas, tanda jejak dan tanda-tanda alam serta tata cara pengembaran kepada regu atau sangga ',
            ], [
                'name' => '14',
                'slug' => '14',
                'desc' => 'Dapat menjelaskan peran pemuda dalam mengisi kemerdekaan dengan bentuk tulisan mampu menganalisis dan menulis simbol-simbol nasionalisme indonesia (NKRI, Lambang Negara, lagu) ',
            ], [
                'name' => '15',
                'slug' => '15',
                'desc' => 'Mampu menjelaskan fungsi dan peran Indonesia dalam organisasi ASEAN dan PBB dalam bentuk tulisan ',
            ], [
                'name' => '16',
                'slug' => '16',
                'desc' => 'Dapat membuat proposal usaha mandiri dengan baik dan dapat melakukan kegiatan wirausaha. ',
            ], [
                'name' => '17',
                'slug' => '17',
                'desc' => 'Dapat membuat proposal usaha mandiri dengan baik dan dapat melakukan kegiatan wirausaha. ',
            ], [
                'name' => '18',
                'slug' => '18',
                'desc' => 'Dapat mengembangkan peralatan teknologi tepat guna. ',
            ], [
                'name' => '19',
                'slug' => '19',
                'desc' => 'Dapat memberikan penjelasan tentang tali temali dan pionering kepada Pramuka Penggalang/ Penegak ',
            ], [
                'name' => '1',
                'slug' => '1',
                'desc' => 'Sudah mengikuti Kursus Mahir Pembina tingkat Dasar ',
            ], [
                'name' => '20',
                'slug' => '20',
                'desc' => 'mampu mengajarkan olahraga renang gaya bebas kepada orang lain dan menguasai 2 (dua) cabang olahraga serta dapat menjadi instruktur Senam Pramuka/Senam Kebugaran Jasmani (SKJ) ',
            ], [
                'name' => '21',
                'slug' => '21',
                'desc' => 'Dapat membahas dan menganalisis tentang kesehatan Reproduksi ',
            ], [
                'name' => '22',
                'slug' => '22',
                'desc' => 'Dapat menjadi Perwira Upacara dan Instruktur Baris Berbaris ',
            ], [
                'name' => '23',
                'slug' => '23',
                'desc' => 'Mampu melakukan penyuluhan tentang penyebab dan cara pencegahan penyakit infeksi, degeneratif dan penyakit yang disebabkan perilaku tidak sehat. ',
            ], [
                'name' => '24',
                'slug' => '24',
                'desc' => 'Melakukan perencanaan dan pengelolaaan perkemahan dan atau pengembaran 3 hari berturut – turut ',
            ]
        ];

        Poin::insert($data);
    }
}
