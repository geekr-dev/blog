<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Blog Demo

Blog Demo App with Laravel9 + Inertia + Vue3

Step:

0. `composer install`
1. `cp .env.example .env` and config db in `.env`
2. `php artisan migrate`
3. `php db:seed`
4. `npm install && npm run build`
5. `php artisan serve`

Open `http://localhost:8000/register` in browser and register a new user, then you can view all posts via `http://localhost:8000/posts`:

![image-20221207002955736](https://image.gstatics.cn/2022/12/07/image-20221207002955736.png)

Click the "New Post" button create create new post:

![image-20221207003324448](https://image.gstatics.cn/2022/12/07/image-20221207003324448.png)

Or "Edit" button from Posts Indexn Page to edit an exist post:

![image-20221207003348154](https://image.gstatics.cn/2022/12/07/image-20221207003348154.png)