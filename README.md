<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements
Untuk menjalankan membutuhkan php versi 8.1+
##  Installation
Pastikan semua requirements telah terinstall di sistem.
Lakukan clone project dan install dependency
```bash
  $ git clone https://github.com/wisnuuakbr/submission-tatonas.git
  $ composer install
```
## Configuration
Copy file .env.example to .env

## Migration & Seeder
Membuat struktur tabel
```bash
  $ php artisan migrate
```
Jalankan seeder
```bash
  $ php artisan db:seed --class=UserSeeder
```

## Run Application
jalankan aplikasi
```bash
  $ php artisan serve
```
```bash
  $ yarn dev
```
User Akun Email
```bash
    superadmin@example.com
    admin@example.com
    user@example.com
```
User Akun Pass
```bash
    tatonas123
```


## Screenshot
![image](https://github.com/wisnuuakbr/submission-tatonas/assets/63099469/1e62166b-4878-4f51-80d9-1d15c4b4e665)
![image](https://github.com/wisnuuakbr/submission-tatonas/assets/63099469/50e2bfe0-3710-4eb4-b073-b979bc8a554c)
![image](https://github.com/wisnuuakbr/submission-tatonas/assets/63099469/9a22e3d7-aec0-4429-8503-dd52cd9d13fe)
![image](https://github.com/wisnuuakbr/submission-tatonas/assets/63099469/2bed3967-3752-4bf6-978d-1ebce6abec90)


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
