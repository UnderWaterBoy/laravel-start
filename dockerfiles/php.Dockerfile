FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

# Install PostgreSQL extensions for Alpine
RUN apk update && \
    apk --no-cache add postgresql-dev && \
    docker-php-ext-install pdo pdo_pgsql

RUN pecl install xdebug.ini-3.2.0 $$ docker-php-enable xdebug.ini

COPY docker/php/conf.d/* $PHP_INI_DIR/conf.d/

CMD ["php-fpm"]