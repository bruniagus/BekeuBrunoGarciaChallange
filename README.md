Proyecto credo con Docker , Php 8.2 Y Laravel 10 
Para iniciar se debe inicializar con 
```
docker-compose up
```
Si no esta levantando la primera vez que se ejecuta myapp el contenedor de laravel lanzar el comando nuevamente 
```
docker-compose up
```

Se tiene que correr las migraciones y los seeders , como lo tengo inicializado en l maqiona de ubuntu yo pongo el siguiente comando para que docker sepa que estoy en ese imagen

```
docker-compose exec myapp php artisan migrate
```
```
docker-compose exec myapp php artisan  db:seed
```
Instalar y actualizar npm 

```
docker-compose exec myapp npm install
```

```
docker-compose exec myapp npm update
```

Y luego para iniciar la vista es el siguiente comando

```
docker-compose exec myapp npm run dev -- --host
```
