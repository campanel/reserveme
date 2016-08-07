# Reserveme

## Ambiente
composer create-project --prefer-dist laravel/laravel reserveme

cd reserveme

chmod 777 -R storage/
chmod 777 -R bootstrap/cache/

mysql> create database reserveme;

Configurar .env com os dados do seu mysql

php artisan migrate

php artisan serve

## Laravel

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).
