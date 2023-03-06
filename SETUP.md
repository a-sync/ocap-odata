## Starting up a new dev env
```
composer install
npm i
npm run dev
docker-compose up -d
```

### Checking db connection
```
./artisan.sh db:show
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
./artisan.sh route:clear
./artisan.sh config:clear
./artisan.sh cache:clear
docker-compose build --no-cache
docker-compose up -d
```
