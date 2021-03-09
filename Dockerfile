FROM php:7.3-fpm
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl
RUN docker-php-ext-install pdo mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . /app
RUN apt install -y libzip-dev
RUN docker-php-ext-configure zip --with-libzip \
  && docker-php-ext-install zip
RUN apt-get install -y unzip zip
RUN composer install

CMD composer install && \
    php artisan migrate && \
    php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
