<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            [
                'name' => 'HIS Patrajasa Yudistira',
                'location'=>'Jl. Jend. Gatot Subroto No.Kav 32-34, Kuningan Tim RT.6/RW.3 RT.6, RW.3, Kuningan, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950',
                'description'=>'Gedung Pernikahan dengan fasilitas Ballroom full AC & karpet untuk 3 jam acara, Kapasitas listrik 10.000 watt, 200 kursi futura, 3 ruang rias full AC, Jasa keamanan dan cleaning service, 10 free parking',
                'image'=>"Image/1.webp",
                'price'=>338800000,
            ],
            [
                'name'=>'Taruma Grand Ballroom',
                'location'=>'Gedung Utama Universitas Tarumanagara. Lantai 21, JL. Letjen.S.Parman, No. 01, RT.6/RW.16, Tomang, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440',
                'description'=>'Gedung pernikahan dengan fasilitas Buffet prasmanan (6 menu), Dessert (buah, puding, kue), Soft drink/juice & free flow air putih, Dekorasi, Photo corner, 1 pemandu acara, 1 set musik entertainment.',
                'image'=>"Image/2.webp",
                'price'=>120800000,
            ],
            [
                'name'=>'Millenium Hotel Sirih Jakarta',
                'location'=>'Jl. Fachrudin No.3, RT.1/RW.7, Kp. Bali, Tanahabang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10250',
                'description'=>'Gedung pernikahan dengan fasilitas Buffet keluarga untuk 15 pax, 2 botol sparkling juice, Wedding buffet untuk 200 pax (3 jenis makanan pembuka, 1 soup, nasi, 5 jenis makanan utama, 5 jenis dessert), Foodstall untuk 100 pax, 1 kamar pengantin untuk 1 malam, 1 superior room untuk 1 malam, 10 free parking dan VIP parking.',
                'image'=>"Image/3.webp",
                'price'=>135000000,
            ],
            [
                'name'=>'Hotel Ozone PIK',
                'location'=>'Jl. Pantai Indah Utara 3 No.40, Kapuk Muara, Kec. Penjaringan, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta 14460',
                'description'=>'Gedung pernikahan dengan fasilitas, Dekorasi, Entertainment, Pemandu acara, 1 penyanyi, Keyboard, soundsystem, Foto & video
                Keamanan & kebersihan, Ruang VIP (dipergunakan sebagai ruang tunggu & teapai), Panggung pelaminan ,full carpet, Panggung entertainment, Screen projector, Catering, Gown pengantin, Jas pengantin pria, 1 set accessories, Fresh handbouquet dan corsage, Foto prewedding indoor, Wedding car.',
                'image'=>"Image/4.webp",
                'price'=>111890000,
            ],
            [
                'name'=>'Mercantile Penthouse Wedding',
                'location'=>'Penthouse Lantai 18, World Trade Center 1, Kav. 29-31, Jakarta 12920',
                'description'=>'Mercantile Penthouse jadi gedung pernikahan di Jakarta yang bisa kamu sewa bersama paket lengkapnya. Paket lengkap (all in) sudah termasuk catering, wedding organizer, decoration, satu MC untuk resepsi pernikahan, photography & video shooting selama acara, dan perlengkapan musik sebagai hiburan. Sedangkan untuk rubby package adalah untuk sewa gedung dan catering. Setiap paket yang ditawarkan akan dibagi berdasarkan tamu undangan, seperti Topaz Package untuk 300 pax, Emerald Package untuk 500 pax, dan Pearl Package untuk 700 pax,  dan terakhir, ada Diamond Package untuk 1.000 pax.',

                'image'=>"Image/5.webp",
                'price'=>220000000,
            ],
            [
                'name'=>'HIS LIPI Grand Ballroom',
                'location'=>'Jl. Gatot Subroto No.10 Rt 06/01, RT.6/RW.1, Kuningan, Kec. Mampang Prapatan, Kota Jakarta Selatan 12710',
                'description'=>'Grand Ballroom yang berada di HIS LIPI jadi salah satu rekomendasi gedung pernikahan murah di Jakarta. Di sini, kamu akan mendapatkan beragam fasilitas sesuai kebutuhan secara lengkap. Mulai dari penyewaan gedung beserta catering, rias busana, bridal, wedding planner & WO, entertainment, photography, hingga fasilitas wedding car menggunakan Alphard.',
                'image'=>"Image/6.webp",
                'price'=>150000000,
            ],
            [
                'name'=>'BRP Gedung Perkawinan SMESCO NARESWARA',
                'location'=>'l. Jenderal Gatot Subroto Kavling 94, 4th Floor - Jakarta Selatan',
                'description'=>'BRP Gedung Perkawinan SMESCO Nareswara mendapatkan banyak bonus menarik yang pastinya akan membantu kamu dalam menggelar resepsi pernikahan dengan pasangan. Sebagai tambahan, jika ingin menggelar akad sekaligus, maka dikenakan biaya sebesar Rp 5.000.000.',
                'image'=>"Image/7.webp",
                'price'=>226700000,
            ],
            [
                'name'=>'Piccadilly Convention Hall',
                'location'=>'Jl. Kemang Sel. No.99, RT.1/RW.2, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730',
                'description'=>'Dekorasi, Food Stall ( 100 porsi Japanese Food + 100 porsi Dim Sum), MC & Entertainment, Photography.',
                'image'=>"Image/8.webp",
                'price'=>98000000,
            ],
        ]);
    }
}
