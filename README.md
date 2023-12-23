# Website Beasiswa Tunas Muda Indonesia

## Autor : Fadhila Khairunnisa
## NIM : 20102319
## Email : Fadhilakhaerunnisa@gmail.com

## Deskripsi
Website ini berisi tentang deskripsi beasiswa, tata cara mendaftar beasiswa dan hasil

## Teknologi yang Digunakan
- **Laravel**:Laravel Framework versi 9.52.16
- **Chart.js**: Digunakan untuk membuat grafik dan visualisasi data.

## Instalasi
1. Clone repositori ini: `git clone <URL repositori>`
2. Masuk ke direktori proyek: `cd nama-proyek`
3. Instal dependensi: `composer install`
4. Salin file `.env.example` ke `.env`: `cp .env.example .env`
5. Generate key aplikasi: `php artisan key:generate`
6. Atur koneksi database di file `.env`
7. Jalankan migrasi: `php artisan migrate`
8. Jalankan server: `php artisan serve`

## Struktur Folder Laravel
Berikut adalah struktur folder yang umum digunakan dalam proyek Laravel beserta penjelasannya:

- **app**: Mengandung kode aplikasi inti.
  - **Console**: Mengandung perintah artisan kustom.
  - **Exceptions**: Mengandung penanganan pengecualian.
  - **Http**: Mengandung kontroler, middleware, dan request.
  - **Models**: Mengandung model-model Eloquent.
- **bootstrap**: Mengandung file-file yang terkait dengan proses _bootstrapping_ aplikasi.
- **config**: Berisi file konfigurasi.
- **database**: Mengandung migrasi, _seeders_, dan _factories_.
- **public**: Direktori _entry point_ aplikasi yang dapat diakses publik.
- **resources**: Mengandung _assets_ seperti _views_, _css_, dan _javascript_.
- **routes**: Mengandung file-file rute aplikasi.
- **storage**: Berisi file-file yang dihasilkan oleh aplikasi seperti _logs_, _cache_, dan _uploads_.
- **tests**: Mengandung file-file pengujian.

## Library Chart.js
Proyek ini menggunakan Chart.js untuk membuat grafik dan visualisasi data. Anda dapat menemukan dokumentasi dan contoh penggunaan Chart.js di [tautan dokumentasi Chart.js](https://www.chartjs.org/docs/).

## Catatan Tambahan
Tambahkan catatan tambahan, panduan kontribusi, atau informasi penting lainnya di sini.
