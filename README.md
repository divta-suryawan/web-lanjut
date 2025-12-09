# Dokumentasi Alur Login Sederhana

## 1. Membuat User Seeder

-   Buka file `database/seeders/DatabaseSeeder.php`
-   Tambahkan seeder untuk membuat akun admin default.
-   Seeder ini diperlukan agar tersedia akun awal untuk proses login.
-   Untuk file seddernya sudah ada di database/seeders/DatabaseSeeder.php

## Setelah membuat seeder, jalankan perintah:

```bash
php artisan db:seed
```

## 2. Membuat AuthController

-   Membuat fungsi `showLogin`, `login`, dan `logout`.
-   Pada fungsi login, lakukan validasi data request.
-   Proses login menggunakan `Auth::attempt`.
-   Jika login berhasil, panggil `session()->regenerate()` untuk keamanan sesi.
-   Fungsi logout harus memanggil `Auth::logout`, invalidate session, dan regenerate token.

## 3. Membuat Halaman Login (resources/views/auth/login.blade.php)

-   Membuat form login dengan method `POST`.
-   Menampilkan error validasi ataupun pesan login gagal.
-   Field yang disertakan: email dan password.
-   Action diarahkan ke route `login.process`.

## 4. Menambahkan Route

-   Route GET `/login` untuk halaman login (menggunakan middleware `guest`).
-   Route POST `/login-proses` untuk memproses login.
-   Route utama (/, dll.) harus dibungkus dengan middleware `auth`.
-   Menambahkan route `/logout` untuk proses logout.

## 5. Memperbaiki layouts/base.blade.php

-   Menambahkan pengecekan `auth()->check()` untuk menampilkan navbar hanya setelah login.
-   Menambahkan tombol Logout di navbar.
-   Navbar tidak muncul ketika user belum login.
