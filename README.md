# the-lane
Laravel/PHP e-commerce demo (‘The Lane’). Product catalog, cart, checkout, auth, and admin. Built with Blade, MySQL.

# The Lane (Laravel E-Commerce)

A Laravel/PHP e-commerce demo. Features product listing, cart, checkout, authentication, and basic admin.

## ✨ Features
- Product catalog (list, detail)
- Search & category filtering
- Shopping cart (add, update, remove)
- Checkout flow (order creation)
- User authentication (register/login/logout)
- Basic admin capabilities (CRUD for products/categories)*
- Responsive UI built with HTML/CSS/JS

---

## 🧰 Tech Stack
- **Backend:** PHP, **Laravel**
- **Frontend:** HTML, ** CSS,** JavaScript **
- **Views:** Blade templates
- **Database:** MySQL

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
