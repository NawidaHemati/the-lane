# the-lane
Laravel/PHP e-commerce demo (‘The Lane’). Product catalog, cart, checkout, auth, and admin. Built with Blade, MySQL.

# The Lane (Laravel E-Commerce)

A Laravel/PHP e-commerce demo. Features product listing, cart, checkout, authentication, and basic admin.

## Tech Stack
- Laravel (PHP), Blade
- MySQL (or SQLite)
- HTML, CSS, JavaScript

## Getting Started
```bash
# install dependencies
composer install

# copy env and set DB credentials
cp .env.example .env
php artisan key:generate

# migrate & seed
php artisan migrate --seed

# run dev server
php artisan serve
