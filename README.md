# Shop Microservice

Shop microservice written in Lumen for Cash register application for restaurants & coffee shops.

## Set up the project

- `composer install`
- `cp .env.example .env` and update `.env` with database credentials
- `php artisan migrate:refresh --seed`


## Run the app

`php -S localhost:8000 -t public`
