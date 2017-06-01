# Reserveme
Sistema de fila virtual para uso de salas de reuniões


![alt tag](https://raw.githubusercontent.com/campanel/reserveme/master/reserveme.png)


### Pré-requisitos
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

### Criar ambiente
git clone https://github.com/campanel/reserveme.git

cd reserveme

composer update

chmod 777 -R storage/

chmod 777 -R bootstrap/cache/

cp .env.example .env

php artisan  key:generate

### Criar Banco Mysql
mysql> create database reserveme;

### Configurar credencias do Banco de Dados
editar .env com os dados do seu mysql

### Criar Tabelas
php artisan migrate

### Popular Banco de dados com dados pré-definidos
php artisan db:seed

### Subir aplicação
php artisan serve

### login
Usuário: user@user.com
Senha: user

## Laravel

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).
