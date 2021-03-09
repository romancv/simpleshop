
## SimpleShop Demo project

Laravel 8, Mysql, Docker

Frontend: Blade, Laravel Mix (node/npm) + bootstrap & jquery

#### Install

    docker build -t simpleshop .
    docker-compose up -d mysql

    composer install
    php artisan migrate

#### Start

    docker-compose up -d

Use: http://127.0.0.1:8001/

#### Rebuild Laravel Mix (js/css)

    npm i
    npm run dev
