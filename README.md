
## SimpleShop Demo project

Laravel 8, Mysql, Docker, Blade templates, Laravel Mix (node/npm), bootstrap, jquery/ui

#### Install

    git clone https://github.com/romancv/simpleshop.git
    cd simpleshop

    docker build -t simpleshop .
    docker-compose up -d mysql

    cp .env.example .env

    composer install
    php artisan migrate

заполнить базу товарами, категориям, картинками:

    php artisan db:seed

#### Start

    docker-compose up -d

or

    php artisan serve

Docker port: http://127.0.0.1:8001/

#### Rebuild Laravel Mix (js/css)

    npm i
    npm run dev
