<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</a>
<a href="https://react.dev/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/512px-React-icon.svg.png?20220125121207" width="150" alt="React Logo">
</a>
<a href="https://vitejs.dev/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Vitejs-logo.svg/410px-Vitejs-logo.svg.png?20220412224743" width="150" alt="React Logo">
</a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements
Submission tatonas is currently extended with the following requirements.  
Instructions on how to use them in your own application are linked below.
| Requirement | Version   |
|-------------|-----------|
| PHP         |   8.1.10  |
| Mysql       |   8.0.30  |
| Node        |  16.15.1  |
| Yarn        |  1.22.19  |
    	    

##  Installation
Pastikan semua requirements telah terinstall di sistem.
Lakukan clone project dan install dependency
```bash
  $ git clone https://github.com/wisnuuakbr/simple-react-laravel.git
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
User Akun
```bash
    superadmin@example.com/superadmin123
    admin@example.com/admin123
    user@example.com/user123
```



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
