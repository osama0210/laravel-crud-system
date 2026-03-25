# Laravel Restaurant CRUD
 
A simple CRUD application for managing restaurant menu items, built with Laravel.
 
## Features
 
- Add, edit, and delete menu items
- Search menu items
- Login / authentication
 
## Installation
 
```bash
git clone https://github.com/osama0210/laravel-crud-system.git
cd laravel-crud-system/restaurant
 
composer install
cp .env.example .env
php artisan key:generate
```
 
Set your database credentials in `.env`, then run:
 
```bash
php artisan migrate
php artisan serve
```
