<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'user'
        ]);

        // User::create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('password'),
        //     'role_id' => 1,
        // ]);

        User::create([
            'name' => 'Naufal Hakim',
            'username' => 'admin keren',
            'email' => 'naufal.h@mhs.unsoed.ac.id',
            'password' => bcrypt('password'),
            'role_id' => 1,
            'avatar' => 'https://lh3.googleusercontent.com/a/ACg8ocLeeugD_J7RU8nJP2-XEP9YTD2KEAF1Kvv8wvpoQKks0sxaPQ=s96-c',
        ]);

        Post::create([
            'title' => 'Kehilangan Handphone VIVO V23 5G',
            'slug' => Str::slug(Str::words('Handphone VIVO V23 5G', 10, ''), '-'),
            'description' => 'Hilang pada Kamis, 23 Mei 2024 jam 16.00 di sekitar BRI KALIMANAH - JOMPO. Bagi yang menemukan bisa menghubungi CP terkait (Sindy)',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6281325373269',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan Helm',
            'slug' => Str::slug(Str::words('Kehilangan Helm', 10, ''), '-'),
            'description' => 'Pada Kamis, 23 Mei 2024, telah terjadi kehilangan helm di Museum Prof Soegarda, yang terletak di area Alun-alun Purbalingga. Helm tersebut mungkin hilang karena kelalaian atau tindakan tidak sengaja. Jika anda menemukan barang tersebut dapat menghubungi CP terkait',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan kalkulator Casio fx-991ex',
            'slug' => Str::slug(Str::words('Kehilangan kalkulator Casio fx-991ex', 10, ''), '-'),
            'description' => 'Pada 5 Juni 2024, sebuah kalkulator Casio fx-991ex dilaporkan hilang di Ruang C 101. Kalkulator ini kemungkinan tertinggal di meja, kursi, atau tempat lain di ruangan tersebut, atau mungkin tidak sengaja terbawa oleh orang lain. Jika menemukan kalkulator dengan model tersebut, diharapkan untuk mengembalikannya kepada pemilik atau melaporkannya kepada pihak yang berwenang, CP tertera',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan kalkulator Casio fx-82ES PLUS',
            'slug' => Str::slug(Str::words('Kehilangan kalkulator Casio fx-82ES PLUS', 10, ''), '-'),
            'description' => 'Pada 11 Juni 2024, sebuah kalkulator Casio fx-82ES PLUS dilaporkan hilang di Ruang E 103. Kehilangan tersebut diduga terjadi setelah aktivitas di ruangan tersebut. Jika ada yang menemukan dapat menghubungi CP yang tercantum.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan Dompet di sekitar Ruang C 102',
            'slug' => Str::slug(Str::words('Kehilangan Dompet di sekitar Ruang C 102', 10, ''), '-'),
            'description' => 'Pada 25 Juni 2024, sebuah dompet dilaporkan hilang di sekitar Ruang C 102. Dompet tersebut kemungkinan tertinggal di ruangan atau jatuh di area sekitarnya. Dompet ini berisi dokumen penting, seperti kartu identitas, uang tunai, atau kartu lainnya, yang membuatnya sangat berharga bagi pemiliknya. Jika ada seseorang yang menemukan dompet tersebut, diharapkan segera melapor agar barang dapat dikembalikan kepada pemiliknya. CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan STNK (Surat Tanda Nomor Kendaraan) untuk motor Aerox 155',
            'slug' => Str::slug(Str::words('Kehilangan STNK (Surat Tanda Nomor Kendaraan) untuk motor Aerox 155', 10, ''), '-'),
            'description' => 'Pada 28 Juni 2024, sebuah STNK (Surat Tanda Nomor Kendaraan) untuk motor Aerox 155 dilaporkan hilang. Namun, lokasi pasti kehilangan tidak diketahui. Apabila seseorang menemukan STNK tersebut, diharapkan untuk segera menghubungi pemilik atau menyerahkannya kepada pihak berwenang.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan Hp iPhone 6 di area depan Gedung F',
            'slug' => Str::slug(Str::words('Kehilangan Hp iPhone 6 di area depan Gedung F', 10, ''), '-'),
            'description' => 'Pada 15 Agustus 2024, sebuah Hp iPhone 6 dilaporkan hilang di area depan Gedung F. Ponsel ini kemungkinan jatuh atau tertinggal di sekitar lokasi tersebut. Jika ada yang menemukan iPhone 6 tersebut, diharapkan dapat menghubungi pemiliknya atau menyerahkannya kepada pihak keamanan di Gedung F.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan Hp Infinix Hot30i di area antara Masjid dan Gerbang Fakultas Teknik (FT)',
            'slug' => Str::slug(Str::words('Kehilangan Hp Infinix Hot30i di area antara Masjid dan Gerbang Fakultas Teknik (FT)', 10, ''), '-'),
            'description' => 'Pada 17 Agustus 2024, sebuah Hp Infinix Hot30i dilaporkan hilang di area antara Masjid dan Gerbang Fakultas Teknik (FT). Ponsel ini kemungkinan jatuh atau tertinggal selama perjalanan di lokasi tersebut, seperti di sekitar tempat parkir, jalan menuju masjid, atau area dekat gerbang FT. Ponsel ini memiliki data pribadi penting, sehingga diharapkan bagi siapa pun yang menemukannya dapat segera melapor ke pemilik atau menyerahkannya ke pihak keamanan setempat.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan dompet di Purbalingga Food Center',
            'slug' => Str::slug(Str::words('Kehilangan dompet di Purbalingga Food Center', 10, ''), '-'),
            'description' => 'Pada 29 Agustus 2024, sebuah dompet hilang di Purbalingga Food Center. Dompet kemungkinan berisi dokumen penting seperti kartu identitas, kartu ATM, dan uang tunai. Diharapkan siapa pun yang menemukannya dapat segera menghubungi pemilik CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan charger HP di Ruang F212',
            'slug' => Str::slug(Str::words('Kehilangan charger HP di Ruang F212', 10, ''), '-'),
            'description' => 'Pada 8 September 2024, sebuah charger HP dilaporkan hilang di Ruang F212. Charger ini mungkin tertinggal setelah aktivitas seperti belajar, rapat, atau kegiatan lain di ruangan tersebut. Jika ada yang menemukan, diharapkan untuk menghubungi CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan sebuah motor Honda Vario dan sebuah dompet merek Suzuki',
            'slug' => Str::slug(Str::words('Kehilangan sebuah motor Honda Vario dan sebuah dompet merek Suzuki', 10, ''), '-'),
            'description' => 'Pada 10 September 2024, terjadi kejadian kehilangan yang mencakup sebuah motor Honda Vario dan sebuah dompet merek Suzuki. Namun, lokasi pasti kehilangan tidak diketahui. Jika terdapat seseorang yang menemukan barang-barang tersebut atau memiliki informasi terkait, diharapkan segera menghubungi pemilik atau pihak berwenang.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan HP Oppo A12 di Laboratorium Lantai 1',
            'slug' => Str::slug(Str::words('Kehilangan HP Oppo A12 di Laboratorium Lantai 1', 10, ''), '-'),
            'description' => 'Pada 9 September 2024, sebuah HP Oppo A12 dilaporkan hilang di Laboratorium Lantai 1. Kehilangan ini mungkin terjadi setelah aktivitas praktikum atau kegiatan lainnya di laboratorium. Apabila ada yang menemukan ponsel tersebut dapat dikembalikan melalui pengelola laboratorium ataupun bisa melalui CP yang tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan sebuah laptop, charger, dan mouse di area Kos Krikil',
            'slug' => Str::slug(Str::words('Kehilangan sebuah laptop, charger, dan mouse di area Kos Krikil', 10, ''), '-'),
            'description' => 'Pada 13 September 2024, sebuah laptop, charger, dan mouse dilaporkan hilang di area Kos Krikil. Jika ada yang menemukan barang-barang tersebut, diharapkan untuk mengembalikannya bisa menghubungi CP yang tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan kunci motor di area sekitar Blater',
            'slug' => Str::slug(Str::words('Kehilangan kunci motor di area sekitar Blater', 10, ''), '-'),
            'description' => 'Pada 23 September 2024, sebuah kunci motor dilaporkan hilang di area sekitar Blater. Jika kunci ditemukan, harap segera mengembalikan kepada pemilik dengan menghubungi CP yang tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan STNK Motor Honda Brio Hitam di antara kantin FT dan laboratorium',
            'slug' => Str::slug(Str::words('Kehilangan STNK Motor Honda Brio Hitam di antara kantin FT dan laboratorium', 10, ''), '-'),
            'description' => 'Pada 30 September 2024, sebuah STNK Motor Honda Brio Hitam dilaporkan hilang di antara kantin FT dan laboratorium. Jika ada yang menemukan dapat menghubungi CP yang tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan kunci motor di Gedung B atas atau di sekitar Fakultas Teknik (FT)',
            'slug' => Str::slug(Str::words('Kehilangan kunci motor di Gedung B atas atau di sekitar Fakultas Teknik (FT)', 10, ''), '-'),
            'description' => 'Pada 1 Oktober 2024, sebuah kunci motor dilaporkan hilang di Gedung B atas atau di sekitar Fakultas Teknik (FT). Jika ditemukan, kunci dapat menghubungi pemilik dengan CP yang tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan kalkulator Casio dan KTM (Kartu Tanda Mahasiswa)',
            'slug' => Str::slug(Str::words('Kehilangan kalkulator Casio dan KTM (Kartu Tanda Mahasiswa)', 10, ''), '-'),
            'description' => 'Pada 14 Oktober 2024, sebuah kalkulator Casio dan KTM (Kartu Tanda Mahasiswa) dilaporkan hilang. Lokasi pastinya tidak diketahui. Barang-barang tersebut penting bagi pemiliknya, khususnya untuk keperluan akademik. Jika ditemukan, diharapkan segera dilaporkan kepada pemilik dengan menghubungi CP yang tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan kunci motor di sekitar laboratorium atau kantin',
            'slug' => Str::slug(Str::words('Kehilangan kunci motor di sekitar laboratorium atau kantin', 10, ''), '-'),
            'description' => 'Pada hari senin tanggal 14 Oktober 2024, sebuah kunci motor dilaporkan hilang di sekitar laboratorium atau kantin. Jika ada yang menemukan kunci tersebut, harap menghubungi CP yang tertera',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan dompet hitam lipat beserta isinya di sekitar Sidakangen dan Blater',
            'slug' => Str::slug(Str::words('Kehilangan dompet hitam lipat beserta isinya di sekitar Sidakangen dan Blater', 10, ''), '-'),
            'description' => 'Pada 16 Oktober 2024, sebuah dompet hitam lipat beserta isinya dilaporkan hilang di sekitar Sidakangen dan Blater. Dompet kemungkinan jatuh selama perjalanan atau tertinggal di lokasi tertentu. Jika ada yang menemukannya bisa menghubungi CP.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan charger laptop dan HP di Ruang C 101',
            'slug' => Str::slug(Str::words('Kehilangan charger laptop dan HP di Ruang C 101', 10, ''), '-'),
            'description' => 'Pada 25 Oktober 2024, sebuah charger laptop dan HP dilaporkan hilang di Ruang C 101. Barang tersebut mungkin tertinggal setelah digunakan selama kegiatan belajar atau rapat. Jika ada yang melihatnya bisa menghubungi CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan dompet beserta isinya di perjalanan antara Purwokerto dan Purbalingga',
            'slug' => Str::slug(Str::words('Kehilangan dompet beserta isinya di perjalanan antara Purwokerto dan Purbalingga', 10, ''), '-'),
            'description' => 'Pada 5 November 2024, sebuah dompet beserta isinya dilaporkan hilang di perjalanan antara Purwokerto dan Purbalingga. Dompet tersebut mungkin jatuh atau tertinggal di salah satu tempat yang dikunjungi. Jika ada yang melihatnya bisa menghubungi CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan dompet beserta isinya di perjalanan antara Kebumen dan Purbalingga',
            'slug' => Str::slug(Str::words('Kehilangan dompet beserta isinya di perjalanan antara Kebumen dan Purbalingga', 10, ''), '-'),
            'description' => 'Pada 11 November 2024, sebuah dompet beserta isinya dilaporkan hilang di perjalanan antara Kebumen dan Purbalingga. Barang ini kemungkinan besar jatuh atau tertinggal di salah satu lokasi yang dilewati selama perjalanan. Jika ada yang melihatnya bisa menghubungi CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Kehilangan dompet atau card holder beserta isinya di sekitar area GOR Satria hingga Ledug',
            'slug' => Str::slug(Str::words('Kehilangan dompet atau card holder beserta isinya di sekitar area GOR Satria hingga Ledug', 10, ''), '-'),
            'description' => 'Pada 18 November 2024, telah terjadi kehilangan sebuah dompet atau card holder beserta isinya di sekitar area GOR Satria hingga Ledug. Barang tersebut kemungkinan jatuh atau tertinggal di perjalanan antara kedua lokasi ini. Dompet atau card holder tersebut berisi barang-barang penting, seperti kartu identitas, kartu ATM, atau dokumen lainnya. Jika ada yang melihatnya bisa menghubungi CP tertera.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHZqj-XReJ2R76nji51cZl4ETk6-eHRmZBRw&s',
            'contact' => '6285750682554',
            'status' => 'hilang',
            'user_id' => 1,
        ]);
    }
}
