## Starting up a new dev env
```
composer install
npm install
npm run dev
docker-compose up -d
php artisan migrate
```

### Checking db connection
```
env DB_HOST=localhost php artisan db:show
```

### Shutting down the dev env
```
docker-compose down
```

### Starting up the dev env again
```
docker-compose up -d
```

### Clean restart
```
docker-compose down -v
docker system prune -a -f --volumes
composer install
npm install
npm run dev
php artisan route:clear
php artisan config:clear
php artisan cache:clear
docker-compose build --no-cache
docker-compose up -d
php artisan migrate:refresh
```
