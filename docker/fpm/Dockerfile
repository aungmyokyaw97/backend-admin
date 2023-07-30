FROM php:8.1-fpm-alpine

RUN apk update && apk add git \ 
    curl \ 
    zip \ 
    unzip \
    mariadb-dev

RUN docker-php-ext-install pdo pdo_mysql \
    xml \
    gd \
    mbstring

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/laravel
