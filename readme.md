## Cara Penggunaan

- clone repository
- composer install pada root folder
- siapkan database lalu setting .env dan php artisan key:generate
- jalankan php artisan migrate --seed
- jalankan php artisan serve

##  jawaban Soal

8. Aplikasi ini dibuat dengan menggunakan bahasa pemrograman PHP dengan menggunakan framerok laravel dan mengguanakan arsitektur Model-View-Controller(MVC), Arsitektur MVC bertujuan untuk memenuhi single responsibility principle (SRP), yaitu memisahkan komponen berdasarkan tugasnya masing-masing dengan demikian pembagian tugas nya adalah :
1. Model bertugas untuk menangani pengolahan data yang dapat berhubungan langsung dengan database.
2. View bertugas untuk menangani pengolahan tampilan kepada pengguna seperti template HTML.
3. Controller bertugas untuk mengatur hubungan antara bagian model dan bagian view.

Aplikasi ini telah dikembangkan dengan beberapa fitur yaitu Blade Template Engine, Database Migrations, Model Factory, Observers, Seeder dan Authentication

9. Kekurangan Aplikasi ini dengan aspek :
a. Fitur

Fitur yang ada di aplikasi ini belum lengkap, seperti belum ada CRUD pada setiap model. 
belum ada untuk menambahkan media pada post, like pada post dan melihat komentar.
kemudian belum ada role permission untuk memberikan hak akses tertentu, belum ada fitur untuk mengaktifkan dan non-aktifkan post.

b. Performa

Laravel relatif lebih berat bila dibanding dengan framework Codeigniter. Karena laravel meload banyak file dan asset untuk menjalankan aplikasinya

c. Kualitas Kode

- 

