# Shop Microservice

## Set up the project

- `composer install`
- `cp .env.example .env` and update `.env` with database credentials
- `php artisan migrate:refresh --seed`

### Generates API documentation

`php artisan swagger-lume:generate`

### Run the app

`php -S localhost:8000 -t public`
