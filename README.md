## Cara Install

### Kebutuhan Server

Aplikasi ini dapat dipasang pada server lokal dan online dengan spesifikasi berikut:

1. PHP 8 (dan mengikuti [server requirements Laravel 9.x](https://laravel.com/docs/8.x/deployment#server-requirements) lainnya),

### Langkah Instalasi

1. Clone Repo, pada terminal
2. `cd monitor-jaringan`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Buat Database dengan nama `db_jaringan`
7. `php artisan migrate`
8. `php artisan db:seed --class=UserSeeder`
9. `php artisan storage:link`

### Menjalankan Server

- Terakhir jalankan `php artisan serve` untuk menjalankan server
- kalian bisa login dengan username `admin@gmail.com` dan password `password`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
