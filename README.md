# OCAP-ODATA

# About
 * provides ODATA v4.01 API to ocap-stats database
 * built on laravel 10 + loadata 2
 * only a thin layer of eloquent models and lodata traits

# Hosting requirements
 * PHP 8.1 or later
 * access to ocap-stats database (mysql/mariadb)

You should use env vars (env.example) to configure the database host/user/pw/dbname, but you only need to edit the [DB_URL](./config/database.php#L48) generally.

# Development requirements
 * docker compose 2 or later
 * composer 2.2 or later
 * nodejs 16 or later

## Setup
Install composer dependencies.
```
composer install
```

Install node dependencies.
```
npm i # or yarn
```

## Config
Create a .env file to enable laravel debug options.
```
APP_ENV=local
APP_KEY=
APP_DEBUG=true
LOG_LEVEL=debug
```

## Running locally
```
npm run dev # or yarn dev
docker-compose up
```

Load the db schema and a seed from ocap-stats/.sql/
