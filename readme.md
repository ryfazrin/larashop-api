## Notes
Memulai project:
- Masuk ke aplikasi docker dekstop
- Lihat pada bagian conteiners/apps
- jalankan yang ada didalam laradock

Masuk ke workspace di laradock:
- $docker-compose exec workspace bash
- setelah masuk ke /var/www#, masuk ke larashop-api dengan perintah $cd larashop-api

terakhir mengerjakan copy .env-example dan .env di laradock

### 28 maret: halaman 237 (routing)
- mengikuti Persiapan Tools Pengembangan di halaman web service sampai install laravel ver.6

### 1 april: halaman 273 (Interact with database)
- Membuat table migration dan seeders

## Tutorial ISSUE
1. log error: permission denied
solusi:
- ubah hak akses di dalam laravel
root@3c4c5fa53102:/var/www/larashop-api# chown -R $USER:www-data storage
root@3c4c5fa53102:/var/www/larashop-api# chmod -R 777 storage
root@3c4c5fa53102:/var/www/larashop-api# chmod -R 777 bootstrap/cache
source: 
https://stackoverflow.com/questions/23411520/how-to-fix-error-laravel-log-could-not-be-opened

- selanjutnya menginstall menjadikan url larashop-api.test

2. \Barryvdh\laravel-cors\HandleCors::class not exist
require di dependencies barryvdh/laravel-cors
yaitu fruitcake/laravel-cors

- ubah \Barryvdh\laravel-cors\HandleCors::class
menjadi 'cors' => \Fruitcake\Cors\HandleCors::class

- selanjutnya buat configurasi
$php artisan vendor:publish --tag="cors"
tambahkan path yang ingin di letakkan cors, 
'paths' => ['*'],

source:
https://github.com/fruitcake/laravel-cors
https://packagist.org/packages/barryvdh/laravel-cors
https://stackoverflow.com/questions/33078340/laravel-cors-class-cors-does-not-exist-error

3. Gagal generate image faker pada saat seed

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.