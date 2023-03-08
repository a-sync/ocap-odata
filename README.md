# ocap-odata

# About
 * provides OData v4.01 API to ocap-stats database
 * built on laravel 10 + loadata 2
 * only a thin layer of eloquent models and lodata traits

# Demo sites
[fnf-odata.devs.space](https://fnf-odata.devs.space)  
 &nbsp; &rdca; using [fnf-stats.devs.space](https://fnf-stats.devs.space) data  
 &nbsp; &nbsp; &rdca; based on [OCAP2](http://aar.fridaynightfight.org) data from [FNF](https://www.fridaynightfight.org)  

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

⚠ You need to load the db schema and a seed from [ocap-stats/.sql/](https://github.com/a-sync/ocap-stats/tree/development/.sql) manually when connecting to the default db instance created via docker-compose.

### Services
 * Web 
    * http://localhost/
 * Db
    * host: localhost
    * port: 3306
    * user: root
    * pass: rootpass
 * Adminer
    * http://localhost:8080  
    Login data:  
        * Server: db
        * Username: root
        * Password: rootpass
        * Database: ocapstats

### Checking db connection
```
php artisan db:show
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
php artisan route:clear
php artisan config:clear
php artisan cache:clear
docker-compose build --no-cache
docker-compose up -d
```
