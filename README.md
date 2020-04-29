<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Mobile_Market

Application for registered users sell phones using Laravel, Bootstrap.

### Running this web application

- make sure you already have xampp or wamp installed if you are on windows machine, mamp for mac , and lamp for linux.

- clone this repository to your local machine or just download the zip.

- install [Composer](https://getcomposer.org/download) first, then run this command in your command-line (you should be inside your project directory).
```bash
  composer install
```

- rename .env.example to .env and add your database and mail driver credentials.

- generate application key.

```bash
    php artisan key:generate
```

- create database tables.

```bash
    php artisan migrate
```

- create a default phones and users.

```bash
    php artisan db:seed
```

- clear config (only if you make changes to .env file and restart the server if you are using laravel dev server).

```bash
    php artisan config:clear
```

- Link the storage folder for images.

```bash
    php artisan storage:link
```

### Verification using mailtrap

- in .env file fill MAIL_USERNAME and MAIL_PASSWORD with your credentials
