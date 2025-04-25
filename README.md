# Website Blog Sederhana - Laravel 11

Website ini adalah hasil belajar Laravel 11 dari channel YouTube [Web Programming UNPAS (WPU)](https://www.youtube.com/@webprogrammingunpas). Proyek ini dibangun secara bertahap melalui beberapa episode, dan menerapkan fitur-fitur inti dari Laravel untuk membuat blog yang sederhana namun powerful.

## 🎥 Episode dan Fitur

Berikut adalah daftar episode beserta fitur yang diimplementasikan:

-   **Episode 1-3:** Setup Laravel, struktur folder
-   **Episode 4-5:** Blade Templating & Component
-   **Episode 6:** Mengirim data ke view, single article
-   **Episode 7:** Dasar Model & Konsep Namespace
-   **Episode 8:** Database dan Migration
-   **Episode 9:** Eloquent ORM & Post Model
-   **Episode 10:** Model Factory
-   **Episode 11-12:** Relasi antar tabel & Post Category
-   **Episode 13:** Seeder & Menambahkan Data Dummy
-   **Side Episode:** Debug Bar
-   **Episode 14:** Mengatasi N+1 Problem
-   **Side Episode:** Eager Loading di route
-   **Save Point:** Eager Loading di model
-   **Episode 15:** Redesign UI dengan Flowbite
-   **Episode 16:** Searching (multiple fields)
-   **Episode 17:** Pagination (withQueryString)

## 🧪 Teknologi yang Digunakan

-   Laravel 11
-   Blade Templating Engine
-   Tailwind CSS v4 (Flowbite untuk UI)
-   Eloquent ORM
-   Seeder & Factory
-   Laravel Debugbar
-   Pagination & Search

## 🚀 Cara Menjalankan

1. Clone repository ini
2. Jalankan `composer install`
3. Duplikat file `.env.example` menjadi `.env`
4. Jalankan `php artisan key:generate`
5. Atur konfigurasi database di file `.env`
6. Jalankan migrasi dan seeder:
    ```bash
    php artisan migrate --seed
    ```
