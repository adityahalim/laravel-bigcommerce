## Laravel BigCommerce

Simple code example for integration into BigCommerce.

## Requirements

- PHP 8.1
- Laravel 9
- Composer

## Usage

Clone the repo:

```bash
git clone https://github.com/adityahalim/laravel-bigcommerce.git
cd laravel-bigcommerce
```

Install the dependencies:
```bash
composer install
```

Set the environment variables:
```bash
cp .env.example .env
# copy then open .env and modify the environment variables (if needed)
```

Running Program:
```bash
php artisan serve
```

## Set credentials

in your `.env` file set these values from your app \
`BIGCOMMERCE_AUTH_TOKEN=your-bigcommerce-auth-token` \
`BIGCOMMERCE_DOMAIN=your-bigcommerce-domain` \
