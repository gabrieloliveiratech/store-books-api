### Store and Book's CRUD with DDD
###### A simple API that manage CRUDs and relationships for Stores and Books, applying DDD to Laravel

#### Stack
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white)

#### Get Started
- Make a repository clone
- Create .env file

```sh
cp .env.example .env
```

- Update .env variables
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui
```
- To create the Docker containers, run the following command in the terminal:

  ```dosini
  docker-compose up -d --build
  ```
  
- Inside the laravel container, install the dependencies with composer:

    ```dosini
    docker exec -it "container_name" bash
    composer install
    ```

- Inside the laravel container, make application key:

    ```dosini
       docker exec -it "container_name" bash
    php artisan key:generate
    ```

- Inside the laravel container, run migrations:

    ```dosini
       docker exec -it "container_name" bash
    php artisan migrate
    ```

- Inside the laravel container, make jwt key:

    ```dosini
       docker exec -it "container_name" bash
    php artisan jwt:secret
    ```
    
- Generate API Docs:
    ```dosini
      php artisan l5-swagger:generate
    ```
It creates an API documentation in this route: localhost:8989/api/documentation
    
External packages and services
This project is currently extended with the following packages and services. Instructions on how to use them in your own app are linked below.

| Package  | Docs |
| ------------- | ------------- |
|  L5-Swagger OpenAPI  | https://github.com/DarkaOnLine/L5-Swagger/  |
|  L5 Repository  | https://github.com/andersao/l5-repository  |
| Spatie Laravel JSON API Paginate	| https://github.com/spatie/laravel-json-api-paginate |
| Spatie Laravel Query Builder	| https://github.com/spatie/laravel-query-builder |
| Tymon JWT Auth	| https://github.com/tymondesigns/jwt-auth |
| Laravel Pint | https://laravel.com/docs/9.x/pint |