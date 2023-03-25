<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

***Comandos importantes***
    
  **Configuración base de datos**
  - cd /Applications/XAMPP/bin/
  - ./mysql -u root -p
  - CREATE DATABASE novalib;
  - Open directory cp .env.example .env
  - Open .env file in laravel directory "NovaLib"
  - Set DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD
  
  **Migraciones**
  - php artisan make:migration create_name_table
  - php artisan migrate
  - php artisan migrate:rollback
  - php artisan migrate:rollback --step=3
  - php artisan migrate:reset
  - php artisan migrate:refresh
  - php artisan migrate:refresh --seed
  - php artisan migrate:fresh
  - php artisan migrate:fresh --seed
  
  **Modelos**
  - php artisan make:model Name
  - php artisan make:model Name -m
  
  **Seeds**
  - php artisan make:seeder ModelSeeder
  - composer dump-autoload
  - php artisan db:seed
  - php artisan migrate:fresh --seed
  
  **Factory**
  - php artisan make:factory NameFactory
  - // https://github.com/fzaninotto/Faker
  
  **Rutas**
  - php artisan route:list
  - php artisan route:list -c
  - php artisan route:clear
  - php artisan route:cache
  
  **Laravel Mixin**
  - composer require laravel/ui || composer require laravel/ui "^2.0"
  - php artisan ui bootstrap
  - php artisan ui bootstrap --auth
  - npm run dev
  - npm run production
  - npm run watch