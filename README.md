# ocap-odata

# About
 * provides OData v4.01 API to ocap-stats database
 * built on laravel 10 + loadata 2
 * only a thin layer of eloquent models and lodata traits

# Hosting requirements
 * PHP 8.1 or later
 * access to ocap-stats database (mysql/mariadb)

You should use env vars (env.example) to configure the database host/user/pw/dbname, but you only need to edit the [DB_URL](./config/database.php#L48) generally.

# Development requirements
 * docker compose 2 or later
 * composer 2.2 or later

## Setup
Install composer dependencies.
```
composer install
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
docker-compose up
```

⚠ You need to load the db schema and a seed from ocap-stats/.sql/ manually when connecting to the default db instance created via docker-compose.

### Checking db connection
```
./artisan.sh db:show
```

#### Shutting down the dev env
```
docker-compose down
```

#### Starting up the dev env again
```
docker-compose up -d
```

### Clean restart
```
docker-compose down -v
docker system prune -a -f --volumes
composer install
./artisan.sh route:clear
./artisan.sh config:clear
./artisan.sh cache:clear
docker-compose build --no-cache
docker-compose up -d
```
